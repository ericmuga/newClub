<?php

namespace App\Http\Controllers;
use App\Http\Resources\MemberResource;
use App\Models\{Member,Field};
use Illuminate\Http\Request;
use App\MyPaginator;
use App\Imports\MembersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MembersExport;

use function PHPUnit\Framework\returnSelf;

class MemberController extends Controller
{

    public function export()
    {
       return Excel::download(new MembersExport, 'members.xlsx');
    }

    public function MemberList(Request $request)
    {

        return [
                'search'=>$request->input('search')?:null,

                'members'=>MyPaginator::paginate(MemberResource::collection(Member::query()
                                                                                  ->when($request->input('search'),
                                                                                          fn($query,$search)=>($query->where('name','like','%'.$search.'%')
                                                                                                                ->orWhere('phone','like',$search.'%')
                                                                                                                ->orWhere('email','like',$search.'%')
                                                                                                          )
                                                                                         )
                                                                                        ->orderBy('name')
                                                                                        ->get()
                                                                                ),$request->input('perPage')?:16
                                                                                )->withQueryString()


                ];


     }







    public function index(Request $request)
    {
        //display the list of members here
        // dd('here');
            return inertia('Member/Index',$this->MemberList($request));

    }

    public function list(Request $request)
    {

        return inertia('Member/List',$this->MemberList($request));
    }

    public function create()
    {
        //show the create form


        return inertia('Member/Create', ['fields'=>Field::all('name','id')]);
    }

    public function store(Request $request)
    {
        //  dd($request->all());

        $request->validate([

                  'name'=>['required'],
                  'email'=>['required','unique:members,email'],
                  'phone'=>['required'],
                  'rotary_number'=>['required']

        ]);

        Member::create($request->all());

        return redirect()->route('members.index')->with('message','Member Created Successfully!');
    }

    public function destroy(Request $request)
    {
        Member::find($request->id)->delete();
        return back()->with('message','Member Deleted Successfully!');

    }

    public function memberUpload(Request $request)
    {
        // dd($request->all());

        // Excel::import(new MemImport, 'users.xlsx');

          $request->validate([ 'member_list' => 'required|mimes:csv,xlsx,xls|max:4096']);
    //    $fileModel = new File;

        //  $path = $request->file('member_list')->store('members');
         Excel::import(new MembersImport, request()->file('member_list'));
            return redirect()->back()
            ->with('message','File has been uploaded.');

    }
}

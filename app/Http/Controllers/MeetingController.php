<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\{MakeUpResource,PhysicalMeetingResource,InstanceResource, MemberResource};
use App\Models\{Instance,MakeUp, Meeting, PhysicalMeeting,Member};
use App\MyPaginator;
class MeetingController extends Controller
{


    public function meeting_list(Request $request)

    {
        $instances=InstanceResource::collection(
                                                 Instance::Query()
                                                         ->when($request->input('startDate'),fn($q,$startDate)=>($q->where('start_time','>=',$startDate)))
                                                         ->when($request->input('endDate'),fn($q,$endDate)=>($q->where('end_time','<=',$endDate)))
                                                         ->orderby('start_time','desc')
                                                         ->get());

        $makeups=MakeUpResource::collection(
                                                MakeUp::Query()
                                                        ->when($request->input('startDate'),fn($q,$startDate)=>($q->whereDate('date','>=',$startDate)))
                                                        ->when($request->input('endDate'),fn($q,$endDate)=>($q->whereDate('date','<=',$endDate)))
                                                        ->orderby('date','desc')
                                                        ->get());

    $physicalmeetings=PhysicalMeetingResource::collection(
                                                PhysicalMeeting::Query()
                                                        ->when($request->input('startDate'),fn($q,$startDate)=>($q->whereDate('date','>=',$startDate)))
                                                        ->when($request->input('endDate'),fn($q,$endDate)=>($q->whereDate('date','<=',$endDate)))
                                                        ->orderby('date','desc')

                                                      ->get());
        $data=collect([]);
        if ($request->input('type'))
        {
            switch ($request->type)
            {

                case 'ALL':$data=$instances->merge($makeups)->merge($physicalmeetings); break;
                case 'PM':$data=$physicalmeetings; break;
                case 'ZM':$data=$instances; break;
                case 'MU':$data=$makeups; break;

           }
        }else $data=$instances->merge($makeups)->merge($physicalmeetings);

         $data=MyPaginator::paginate($data->sortByDesc('meeting_date'))->withQueryString();

         $filters=[
                    'startDate'=>$request->input('startDate')?:'',
                    'endDate'=>$request->input('endDate')?:'',
                    'type'=>$request->input('type')?:'All'
         ];
        return (['filters'=>$filters,'meetings'=>$data]);
    }


    public function index(Request $request)
    {
        # code...
        //this will list all the meetings and their types.
        return inertia('Meeting/Index',$this->meeting_list($request)) ;
        }

    //display the create meeting form
    public function create()
    {
        # code...

        return inertia('Meeting/Create',[]);
    }

    public function store(Request $request)
    {
        dd($request->all());
        # code...
    }

    public function show($type,$id)
    {
         $members=MyPaginator::paginate(MemberResource::collection(Member::all()))->withQueryString();
        //  dd($members);
        return inertia('Meeting/Detail',['members'=>$members]);
    }

}

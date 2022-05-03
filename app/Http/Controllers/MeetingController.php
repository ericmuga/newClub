<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\InstanceResource;
use App\Http\Resources\MakeUpResource;
use App\Models\Instance;
use App\Models\MakeUp;
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
                                                        ->when($request->input('startDate'),fn($q,$startDate)=>($q->where('date','>=',$startDate)))
                                                        ->when($request->input('endDate'),fn($q,$endDate)=>($q->where('date','<=',$endDate)))
                                                        ->orderby('date','desc')
                                                        ->get());

         $data=MyPaginator::paginate($instances->merge($makeups)->sortByDesc('date'))->withQueryString();

         $filters=[
                    'startDate'=>$request->input('startDate')?:'',
                    'endDate'=>$request->input('endDate')?:'',
         ];
        return (['filters'=>$filters,'meetings'=>$data]);
    }


    public function index(Request $request)
  {
      # code...
      //this will list all the meetings and their types.
      return inertia('Meeting/Index',$this->meeting_list($request)) ;
    }

}

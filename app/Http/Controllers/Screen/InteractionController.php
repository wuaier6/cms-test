<?php

namespace App\Http\Controllers\Screen;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
use Redis;
use Uuid;
use Auth;
use App\Repositories\PermissionRepositoryEloquent;
class InteractionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Test(){

        $count=Redis::lLen('test-channel2');
        $start=0;
        if($count>20){
            $start=$count-20;
        }
        $message=array();
        for($i=$start;$i<$count;$i++){
            $message[]=Redis::rPop('test-channel2');
        }

        return $this->return_json_data(1,$message);
    }

    public function ScreenView(Request $request){
        return view('screen.interaction');
    }


    public function TableView(Request $request,PermissionRepositoryEloquent $Permission){
        $data=$Permission->paginate(2);
        return view('screen.table',['data'=>$data]);
    }


    public function FormView(Request $request,PermissionRepositoryEloquent $Permission){
        $data=$Permission->paginate(2);
        return view('screen.table',['data'=>$data]);
    }


}

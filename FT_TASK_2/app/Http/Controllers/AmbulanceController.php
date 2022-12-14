<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchAmbulanceModel;
use App\Models\DoctorModel;
use App\Models\UserModel;


class AmbulanceController extends Controller
{
    
    public function AmbulancePage()
    {
    	return view('booking');
    }

    function formSearch()
	{

        $search_text=$_REQUEST['search1'];
        $ambulance1=SearchAmbulanceModel::where('Availability','LIKE','%'.$search_text.'%')->get();
            return view('searchResult',compact('ambulance1'));
	}

    function formShow()
	{

        $showdata=DoctorModel::all();
            return view('doctors',['doctors'=>$showdata]);
	}

    function APIList(){
        return DoctorModel::all();
    }

    function APIListp(Request $request){
        $user= new DoctorModel();
        $user->D_ID=$request->D_ID;
        $user->DName=$request->DName;
        $user->DPhone=$request->DPhone;
        $user->Degree=$request->Degree;
        $user->DPassword=$request->DPassword;
        $user->save();
        return ['status'=>"data has been inserted"];
    }
}

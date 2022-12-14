<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;

class AdmitPatient extends Controller
{
    public function formValidation()
    {
    	return view('admit');
    }


    public function formValidationPost(Request $request)
    {
    	$this->validate($request,[
    			'P_ID' => 'required|numeric',
    			'PName' => 'required|min:5|max:35',
    			'Gender' => 'required',
    			'PMobile' => 'required|numeric',
    			'P_Password' => 'required|min:3|max:20',
    			'confirm_password' => 'required|min:3|max:20|same:P_Password',
    			'PLocation' => 'required'
    		],[
    			'P_ID.required' => ' The Patient ID field is required.',
    			'P_ID.numeric' => ' The Patient ID must be numbers.',
    			'PName.required' => ' The Name field is required.',
    			'PName.min' => ' The Name must be at least 5 characters.',
    			'PName.max' => ' The Name may not be greater than 35 characters.',
    		]);

		if(isset($error)){
			$output= $request->P_ID;
		$output= $request->PName;
		$output= $request->Gender;
		$output= $request->PMobile;
		$output= $request->P_Password;
		$output= $request->PLocation;
		return $output;
		}
			elseif(isset($_REQUEST["Insert"])){
		$newuser = new UserModel();
		$newuser->P_ID= $request->P_ID;
		$newuser->PName= $request->PName;
		$newuser->Gender= $request->Gender;
		$newuser->PMobile= $request->PMobile;
		$newuser->P_Password= $request->P_Password;
		$newuser->PLocation= $request->PLocation;
		$newuser->save();
        return view('admit');
		}
		elseif(isset($_REQUEST["Update"])){
			$newuser =UserModel::where('P_ID', $request->P_ID)->first();
			$newuser->P_ID= $request->P_ID;
		$newuser->PName= $request->PName;
		$newuser->Gender= $request->Gender;
		$newuser->PMobile= $request->PMobile;
		$newuser->P_Password= $request->P_Password;
		$newuser->PLocation= $request->PLocation;
			$newuser->save();
			return view('admit');
			}
            else
    {
        $output="Wrong Info";
        return $output;
    }
		//dd('You are successfully added all fields.');
    }
    
	

	
	
}

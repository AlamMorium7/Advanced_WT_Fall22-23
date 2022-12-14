<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class loginController extends Controller
{
    public function formLogIn()
    {
    	return view('login');
    }
    
    function formLogInPost(Request $request)
	{
        
        $request->session()->start();
        
        $newuser = new UserModel();
		$result = $newuser->where('PName', $request->PName)->where('P_Password', $request->P_Password)->first();
        $value=session()->get('PName');

        if(!empty($result)){
		$request->session()->put("PName",$request->PName);
        return view('/profile')->with("PName",$request->PName)->with("P_Password",$request->P_Password);
        }
        elseif(session()->has('PName') && isset($value)){
          
                
                //$request->session()->put("fname",$value);
        return view('/profile')->with("PName",$request->PName)->with("P_Password",$request->P_Password);
            }else{
                return view("home");
        
            }
       
        //session(['firstname' => $request->firstname]);
        
        $request->session()->save(); 
	}
}

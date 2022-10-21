<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
   public function GetRegisterPage(){
    return view("register");
   }

   public function RegisterUser(Request $request){
    $this->validate($request,
    [
        "name"=>"required",
        "email"=>"required|email",
        "password"=>"required|min:8",
        "address"=>"required|max:100",
        "phone" => "required|regex:/^([0-9\s\-\+\(\)]*)$/",
        ],
        [
            "name.required"=>"Name is required",
            "email.required"=>"Email is required",
            "email.email"=>"Email is invalid",
            "password.required"=>"Password is required",
            "password.min"=>"Password must be at least 8 characters",
            "address.required"=>"Address is required",
            "address.max"=>"Address maximum limit 100 characters",
            "phone.required" => "Enter a valid contact no",
            ]);

           DB::table('my_user')->insert([
            "name"=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'address'=>$request->address,
            'phone' =>$request->phone

           ]);

         
   }
}
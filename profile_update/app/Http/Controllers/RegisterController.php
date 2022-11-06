<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRegistration;


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

         <!--new-->
              public function GetLoginUser(Request $request){
        $user = RegistrationUserModel::where("email",$request->email)->first();
        if($user){
            if(password_verify($request->password,$user->password)){
                //save details in session
                $request->session()->put("user",$user);
                return redirect()->route("dashboard");
            }
            else{
                dd("Password Wrong");
            }
        }
        else{
            dd("User Not Found");
        }
    }

    public function GetLoginUserPage(){
        return view("login");
    }

    public function LogoutUser(Request $request){
        $request->session()->forget("user");
        return redirect()->route("index");
    }

    public function GetDashboard(Request $request){
        if($request->session()->has("user")){
            return view("dashboard");
        }
        else{
            return redirect()->route("index");
        }
    }

    public function EditProfile(Request $request){
        if($request->session()->has("user")){
            return view("editprofile");
        }
        else{
            return redirect()->route("index");
        }
    }

    public function UpdateProfile(Request $request){
        $user = RegistrationUserModel::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        if($user->save()){
            $request->session()->put("user",$user);
            return redirect()->route("dashboard");
        }
    }
      
   }
}

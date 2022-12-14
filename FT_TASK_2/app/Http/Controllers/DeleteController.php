<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;


class DeleteController extends Controller
{

    function Delete(Request $request){
		
			return view('delete');
		
	}
    function formDelete(Request $request){
		if(isset($_REQUEST["Delete"])){
			$newuser =UserModel::where('PName', $request->PName)->first();
			$newuser->delete();
			return view('delete');
		}
	}
}

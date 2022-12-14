<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class profileController extends Controller
{
    
    function logout(Request $request)
	{
		if(isset($_REQUEST["logout"])){
        $request->session()->forget('PName');
        $request->session()->flash('status', 'Task was successful!');
        return redirect('/');
        }
	}

}

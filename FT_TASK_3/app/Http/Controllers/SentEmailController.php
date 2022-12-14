<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SentEmailController extends Controller
{
    
    function index()
    {
        return view('sent_email');
    }
    
    function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ],[
            'name.required' => ' The name field is required.',
            'email.required' => ' The email field is required.',
            'email.email' => ' The email field must be valid email',
            'message.required' => ' The message field is required.'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to('web-tutorial@programmer.net')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');
    }
}

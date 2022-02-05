<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Email;

class emailController extends Controller
{


 
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function emailPost(Request $requestemail) 
   {
    $this->validate($requestemail, [  'email' => 'required|email' ]);
    Email::create($requestemail->all());

  
    return back()->with('success', 'Subscription Completed!'); 
   }
}
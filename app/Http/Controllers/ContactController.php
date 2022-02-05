<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;
class ContactController extends Controller
{
   public function contact()
{
return view('contact');
} 
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function contactPost(Request $request) 
   {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' , 'phone' => 'required' , 'dateb' => 'required']);
    Contact::create($request->all());

    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'phone' => $request->get('phone'),
           'dateb' => $request->get('dateb'),
           'bodyMessage' => $request->get('message')
       ), function($message)





   {
    
       $message->from('recycler.donation@gmail.com');
       $message->to('recycler.donation@gmail.com', 'Recycler')->subject('Recycler Site Contect Form');
  
   });
    return back()->with('success', 'Thank you for contacting us!'); 
   }
}
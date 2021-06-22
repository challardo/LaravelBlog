<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request) {
        return view('pages.contact');
      }
  
      // Store Contact Form data
      public function ContactUsForm(Request $request) {
  
          // Form validation
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'subject'=>'required',
              'message' => 'required'
           ]);
  
        
  
          //  Send mail to admin
          Mail::send('pages.mail', array(
              'name' => $request->get('name'),
              'email' => $request->get('email'),
              'phone' => $request->get('phone'),
              'subject' => $request->get('subject'),
              'user_query' => $request->get('message'),
          ), function($message) use ($request){
              $message->from('misandbox.correo@gmail.com');
              $message->to('misandbox.correo@gmail.com', 'Admin')->subject($request->get('subject'));
          });
  
          return back()->with('success', 'Correo enviado al administrador del sitio.');
      }
}

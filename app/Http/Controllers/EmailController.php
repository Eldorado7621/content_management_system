<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Mail;

class EmailController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'message' => 'required',
        ]);
        $message=$request->message;
        
        
         $subject=$request->subject;
         $name=$request->name;
          $email=$request->email;
   
        
         if(Mail::to("pastor@rccgdpbremen.com")
        ->send(new Contact($name,$email,$subject,$message)));
       
         return back()->with(['success' => 'Email successfully sent!']);
      
       
        
        

     /*   $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'message' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);*/
    }

}

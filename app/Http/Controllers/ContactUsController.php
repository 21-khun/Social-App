<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Mail;
use App\Models\User;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function post_contactUs(){
       

        $validation=request()->validate([
            "userName"=>"required",
            "email"=>"required",
            "message"=>"required",
            'userId'=>"required"
        ]);
        
       if($validation){
        $message=new Contact();
        $message->userId=$validation['userId'];
        $message->name=$validation['userName'];
        $message->email=$validation['email'];
        $message->message=$validation['message'];
        $message->save();
        return back()->with('message',"Message sent to Admin");

       }else{
           return back()->withErrors("$validation");
       }
    }
    function deleteContactMessage($id){
       $delete=Contact::find($id);
       $delete->delete();
       return back()->with('message',"Deleted Message");
        
    }
    function replyMessage($id){
      $userId=User::find($id); 
     
        return view("admin.replyMessage",['userId'=>$userId]);
        
    }
    function post_reply(){
      
        $validation=request()->validate([
            'userName'=>"required",
            'email'=>"required",
            'userId'=>"required",
            'message'=>"required",
        ]);
        
        if($validation){
            $mail=new Mail();
            $mail->userId=$validation['userId'];
            $mail->mail=$validation['message'];
            $mail->from_userName=$validation['userName'];
            $mail->from_email=$validation['email'];
            $mail->save();
            return back()->with('message',"Replied to User");



        }

        
    }
}

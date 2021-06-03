<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view("admin.index");
    }
    function manageUser(){
        $users=User::all();
        return view("admin.manage-premium-user",["users"=>$users]);
    }
    function messageBox(){
        $message=Contact::latest()->get();
        return view("admin.contact-message-box",["message"=>$message]);
    }
    // deleteUser
    function deleteUser($id){
       $deleteUser=User::find($id);

        $deleteUser->delete();
        return back()->with("message","Deleted User");
    }

    //editUser
    function editUser($id){
        $user=User::find($id);
        
       return view('admin.editUser',["user"=>$user]);
    }
    function updateUser($id){

          $validation=request()->validate([
              "userName"=>"required",
              "email"=>"required",
              "isAdmin"=>"required",
              "isPremium"=>"required",

          ]);
          if($validation){
              $update=User::find($id);
              $update->name=$validation['userName'];
              $update->email=$validation['email'];
              $update->isAdmin=$validation['isAdmin'];
              $update->isPremium=$validation['isPremium'];
              $update->save();
              return back()->with('message','Updated User');
          }else{
              return back()->withErrors($validation);
          }

 

    }
   
}

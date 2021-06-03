<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    //login page


    //user update information
    function update_userProfile(){           
        $userName=request('userName');
        $email=request('email');
        $image=request('image');
        $old_password=request('old_password');
        $new_password=request('new_password');

        $id=auth()->user()->id;
       $current_user=User::find("$id");
       
        // if user change user Name and email
            $current_user->name=$userName;
            $current_user->email=$email;
        // if user change image
        if($image){
            $image_name=uniqid()."_".$image->getClientOriginalName();
        $image->move(public_path("images/profiles"),$image_name);
        $current_user->image=$image_name;
        $current_user->update();
        return back()->with('success',"Image Changed");
        }
        // if user want to change password
        if($new_password && $old_password)
        {
            // check user input old password is same as current user passsword in database
            if(Hash::check($old_password,$current_user->password)){
                $current_user->password=Hash::make($new_password);
                $current_user->update();
                return back()->with('success',"Password Changed");
            }else{
                return back()->with('error','Wrong Old Password Please Try Again!');
            }
            
        }
        // if image and password are not in input field
        //overwrite only user name and email to current user data table
        $current_user->update();
        return back();
        
    

    }

    function logIn(){
        return view("auth.login");
    }
    //register page

    function register(){
        return view("auth.register");
    }

    //post_register 

    function post_register(){
    $validation=request()->validate([
        "userName"=>"required",
        "email"=>"required",
        "password"=>"required||min:8||confirmed",
        "image"=>"required"

    ]);
    // dd($validation);
    
    if($validation){
       // move image file to public path

        $image=request('image');    //save image to public floder path
        $image_name=uniqid()."_".$image->getClientOriginalName();  //save image name to daatabases
        $image->move(public_path('images/profiles'),$image_name); //copy image to public/images/profiles floder path 


        // upload file to user table

        $password=$validation['password']; //to change hash code
        
        $user=new User();

        $user->name=$validation['userName'];
        $user->email=$validation['email'];
        $user->password=Hash::make($password); //change password to hash code
        $user->image=$image_name;
        $user->save();
        

        if(Auth::attempt(['email'=>$validation['email'],"password"=>$validation['password']])){
            return redirect()->route('home');
        }

    }else{
        return back()->withErrors($validation);
    }
       
    }

    // post_login

    function post_login(){

        $validation=request()->validate([
            'email'=>"required",
            'password'=>"required",
        ]);

        if($validation){

            $auth=Auth::attempt(["email"=>$validation['email'],"password"=>$validation['password']]); // check email and password 
            if($auth){
                return redirect()->route('home');
            }else{
              return back()->with('error',"Authentication Fail Try Again");
      
            }


        }else{
            return back()->withErrors($validation);
        }
        
       
    }

    // logout

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}

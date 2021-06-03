<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    function index() {
        // $posts=User::find(2);

        // dd($posts->posts->toArray());
        $posts=Post::latest()->paginate(9);
        return view('index',["posts"=>$posts]);
    }
    function createPost(){
        return view('User.createPost');
    }
    function userProfile(){
        return view('User.userProfile');
    }

    function contactUs(){
     
     

        return view('User.contact');
    }


    //seeMore by post id

    function seeMore($id){
        
        $post=Post::find($id);
        return view('User.seeMore',["post"=>$post]);

    } 

    //edit post by id

    function edit_post($id){
        $update_post=Post::find($id);
        return view('User.editPost',["update_post"=>$update_post]);
    }

    //mail Box 

    function mail($userId){
     $messages=Mail::where('userId','=',$userId)->get();
     return view('User.Mail',["messages"=>$messages]);

     
    }
    

    

  
    

    


}

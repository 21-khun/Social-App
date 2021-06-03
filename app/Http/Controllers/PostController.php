<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    // upload post by user

        function upload_post(){
            $validation=request()->validate([
                'title'=>"required",
                'image'=>"required",
                'content'=>"required",
            ]);
    
            if($validation){
                $title=$validation['title'];
                $image=$validation['image'];
                $content=$validation['content'];
    
                $posts=new Post();
                $posts->title=$title;
    
                $imageName=uniqid()."_".$image->getClientOriginalName();
                
                $image->move(public_path("images/posts"),$imageName);
    
                $posts->image=$imageName;
    
                $posts->user_id=auth()->user()->id;
                $posts->content=$content;
                $posts->save();
                return redirect()->route('home')->with('message',"Success Upload Post");
    
            }else{
                return back()->withErrors($validation);
            }
    
    
    
            
        }
    //delete post by id

            function delete_post($id){
                $delete_post=Post::find($id);
                $delete_post->delete();
                return redirect()->route('home')->with('message',"Deleted Post");
            }

    //update post by id
        function update_post($id){
            $title=request("title");
            $image=request("image");
            $content=request("content");
                
            $update_post=Post::find($id);
            $update_post->title=$title;
            $update_post->content=$content;

            if($image){
                $imageName= uniqid()."_".$image->getClientOriginalName();
                $image->move(public_path('images/posts'),$imageName);
                $update_post->image=$imageName;
            }
                $update_post->update();
                return redirect()->route('home')->with('message',"Updated Post");

        }
    
}

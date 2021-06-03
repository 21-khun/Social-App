<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// authMiddleware
Route::middleware('auth')->group(function(){
    //PageController
    //home
Route::get('/',[PagesController::class,"index"])->name('home');
Route::get('/User/CreatePost',[PagesController::class,"createPost"])->name('createPost');
Route::get('/User/UserProfile',[PagesController::class,"userProfile"])->name('userProfile');
//show post by id
Route::get('/posts/seeMore/{id}',[PagesController::class,'seeMore'])->name("seeMore");
//edit post by id
Route::get('/posts/edit/{id}',[PagesController::class,"edit_post"])->name("edit_post");
Route::get('/contactUs',[PagesController::class,"contactUs"])->name('contactUs');
Route::get('/Mail/{userId}',[PagesController::class,"mail"])->name('mail');
//postController
Route::post('/User/CreatePost',[PostController::class,"upload_post"])->name('post');
//delete post by id
Route::get('/posts/delete/{id}',[PostController::class,"delete_post"])->name("delete_post")->middleware("premium");
//update post by id
Route::post('/posts/update/{id}',[PostController::class,"update_post"])->name("update_post")->middleware("premium");
//Contact
Route::post('/contactUs',[ContactUsController::class,'post_contactUs'])->name("post_contactUs");
//AuthController
Route::post('/User/UserProfile',[AuthController::class,"update_userProfile"])->name('update_userProfile');
//Authentication
Route::get('/logout',[AuthController::class,'logout'])->name('logout');



//admin MiddleWare

Route::middleware("admin")->group(function(){
// ContactUsController
Route::get('/admin/contactMessageBox/delete/{id}',[ContactUsController::class,'deleteContactMessage'])->name("deleteContactMessage");
Route::get('/admin/contactMessageBox/replyMessage/{id}',[ContactUsController::class,'replyMessage'])->name("replyMessage");
Route::post('/admin/contactMessageBox/replyMessage',[ContactUsController::class,'post_reply'])->name("post_reply");
//adminController
Route::get('/admin/Index',[AdminController::class,'index'])->name('adminControl');
Route::get('/admin/Manage-premium-user',[AdminController::class,'manageUser'])->name('manageUser');
Route::get('/admin/Manage-premium-user/deleteUser/{id}',[AdminController::class,'deleteUser'])->name('deleteUser');
Route::get('/admin/Manage-premium-user/editUser/{id}',[AdminController::class,'editUser'])->name('editUser');
Route::post('/admin/Manage-premium-user/updateUser/{id}',[AdminController::class,'updateUser'])->name('updateUser');
Route::get('/admin/Contact-message-box',[AdminController::class,'messageBox'])->name('messageBox');

});

});



//GuestMiddleware
Route::middleware('guest')->group(function(){
// Authentiaction
Route::get('/login',[AuthController::class,"logIn"])->name("login");
Route::post('/login',[AuthController::class,"post_login"])->name("post_login");
Route::get('/register',[AuthController::class,"register"])->name("register");
Route::post('/register',[AuthController::class,"post_register"])->name("post_register");

});

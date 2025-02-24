<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\NewControl;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;

Route::get('/product',[ProductController::class,'index'])->middleware([CheckLogin::class]);
Route::post('/product',[ProductController::class,'store'])->middleware([CheckLogin::class]);

Route::get("/welcome/{id?}",[WelcomeController::class,'index']);

Route::get('/hello',function(){
    return "<h1>Hello World!</h1>";
});

Route::get('/',action: [HomeController::class,'index'])->middleware([CheckLogin::class]);

Route::get("/home",function(){
    return view("home");
});
Route::get("/mycontroller/{id?}",[MyController::class,'myfunction']);
Route::post("/mycontroller/{id?}",[MyController::class,'myfunction']);
Route::get("/newcontrol/{id?}",[NewControl::class,'multitable']);
Route::post("/newcontrol/{id?}",[NewControl ::class,'multitable']);



Route::get("/login",[LoginController::class,'index']);
Route::post("/login",[LoginController::class,'login']);

Route::get("/logout",function(){
    session()->forget('user');
    return redirect('/login');
});


Route::get("/register",[RegisterController::class,'index']);
Route::post("/register",[RegisterController::class,'create']);


Route::get("/user",[UserController::class,'index']);
Route::get("/user/{id}",[UserController::class,'edit']);
Route::put("/user",[UserController::class,'edit_action']);
Route::delete("/user",[UserController::class,'delete']);


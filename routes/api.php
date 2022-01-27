<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTcontroller;

Route::group(['middleware'=>'api'],function($router){
  Route::post('/register',[JWTcontroller::class,'register']);
  Route::post('/login',[JWTcontroller::class,'login']);
  Route::post('/logout',[JWTcontroller::class,'logout']);
  Route::post('/refresh',[JWTcontroller::class,'referesh']);
  Route::post('/profile',[JWTcontroller::class,'profile']);
}); 

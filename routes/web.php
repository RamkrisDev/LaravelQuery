<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ClientController;
Route::get("client",[ClientController::class,'index']);
Route::get("client/{id}",[ClientController::class,'postByid'])->name('client.postByid');
Route::get('add',[ClientController::class,'add']);
Route::get('/update',[ClientController::class,'update']);


use App\Http\Controllers\FluentController;
Route::get("fluent",[FluentController::class,'index']);

use App\Http\Controllers\UserController;

Route::get("user",[UserController::class,'index']);

use App\Http\Controllers\LoginController;
Route::get("login",[LoginController::class,'index']);
Route::post("sub",[LoginController::class,'submits'])->name("sub.submits");

use App\Http\Controllers\SessionController;
Route::get("get/session",[SessionController::class,'get']);
Route::get("set/session",[SessionController::class,'set']);
Route::get("delete/session",[SessionController::class,'delte']);



use App\Http\Controllers\PostController;
Route::get('db',[PostController::class,'index']);
Route::get('dbadd',[PostController::class,'add']);
Route::post('addpost',[PostController::class,'addpost']);
Route::get('single/{id}',[PostController::class,'getId']);


//join

Route::get('innerjoin',[PostController::class,'innerJoin']);
Route::get('leftjoin',[PostController::class,'leftJoin']);
Route::get('rightjoin',[PostController::class,'rightJoin']);


//model

Route::get('all',[PostController::class,'modelData']);

//facades
use App\Payments\Payment;
Route::get('payment',function(){
    return Payment::process();
});

//mail
use App\Http\Controllers\MailController;
Route::get('sentmail',[MailController::class,'sendmail']);
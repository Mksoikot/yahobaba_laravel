<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/post', function () {
//     return view('post');
//     // return "<h1>Mk Soikot Bhuiyan</h1>";
// });


// Route::view('post','/post');

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
//     // return "<h1>Mk Soikot Bhuiyan</h1>";
// });

// Route::get('/post/{id?}', function (string $id = null) {
//     if($id){
//         return "<h1>Post ID: ". $id ."</h1>";
//     }else{
//         return "<h1>ID Not Found.</h1>";
//     }
// })->where('id','[a-zA-Z]+');

Route::get('/post', function () {
    return view('post');
})->name('mypost');

Route::get('/about', function () {
    return view('about');
})->name('myabout');

<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentConteroller;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// function getUsers(){
//     return [
//         1=> ['name' => 'Mk', 'phone'=> '01622243117', 'city'=> 'Feni'],
//         2=> ['name' => 'Soikot', 'phone'=> '01722243118', 'city'=> 'Dhaka'],
//         3=> ['name' => 'Bhuiyan', 'phone'=> '01822243119', 'city'=> 'Cumilla']
//     ];
// }
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

// Route::get('/post', function () {
//     return view('post');
// })->name('mypost');

// Route::get('/about', function () {
//     return view('about');
// })->name('myabout');


// Route::prefix('page')->group(function () {

//     Route::get('/post/1', function () {
//         return "<h1>This Post Page</h1>";
//     });
//     Route::get('/about', function () {
//         return "<h1>This About Page</h1>";
//     });
//     Route::get('/gallery/new', function () {
//         return "<h1>This Gallery Page</h1>";
//     });
// });


// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

// Route::get('/users', function () {
//    $names = getUsers();
    // $users = 'Mk';
    // $citys = 'Feni';
//    return view('users', ['user' => $names]);
//    return view('users')->with('user', $users)->with('city', $citys);
//    return view('users', compact('users', 'citys'));
// });

// Route::get('/user/{id}', function ($id) {
//     $users = getUsers();
//     abort_if(!isset($users[$id]), 404);
//     $user = $users[$id];
//     return view('user', ['id'=> $user]);
// })->name('view_user');

Route::fallback(function () {
    return "<h1>Page Not Found</h1>";
});

Route::controller(PageController::class)->group(function () {
    Route::get("/page_user","ShowUser");
    Route::get("/page_about","About")->name("about");
    Route::get("/page_contact","Contact")->name("contact");
    Route::get("/page_blog","Blog")->name("blog");
    Route::get("/page_user/{id}","User");
});



Route::get("/test",TestController::class);


// Student
Route::get("/show_student",[StudentConteroller::class, 'Show'])->name('home');
Route::get("/single_student/{id}",[StudentConteroller::class, 'singleStudent'])->name('student.view');

Route::get("/add_student",[StudentConteroller::class, 'addStudent']);
Route::get("/update_student",[StudentConteroller::class, 'upadetStudent']);

Route::get("/delete_student/{id}",[StudentConteroller::class, 'delete'])->name('student.delete');

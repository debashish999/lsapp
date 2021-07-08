















<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;

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

// Route::get('/posts/{name}', function ($name) {
//     return view('posts.home',compact('name'));
// });
// Route::get('/', function () {
//     return '<h1>Hello World<h1>';
//});
// Route::get('/users/{id}/{name}', function ($id,$name) {
//     return 'this is ' . $name . ' with a id '. $id;
// });

Route::get('/users',[PagesController::class, 'users']);


// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/', 'PagesController@hello');
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::get('/contact',[PagesController::class,'contact']);

//form data

Route::post('/formdata',[UsersController::class, 'getdata']);
Route::view('/login','formdata');


//middleware
// Route::view('/first','first');
Route::view('/noaccess','noaccess');
Route::view('home','home');

Route:: group(['middleware'=>['protectedPage']], function(){
    Route::view('/first','first');
});


Route::resource('/posts', PostsController::class);
    

   


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

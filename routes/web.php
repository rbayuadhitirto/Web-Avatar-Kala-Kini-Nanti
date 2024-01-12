<?php

use App\Models\Category;

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;



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
    return view('home', [
        "title" => "Home",
        "p" => "Sembilan Matahari (NM) is an innovation studio based in Bandung, Indonesia.
        Our work involves audiovisual and multimedia explorations rooted in design, 
        filmmaking and digital technology that are translated into projection mapping,
        digital experiences, and immersive exhibitions and isntallations.
        
        We are a team of practitioners across art and design, science and technology, 
        and related fields. We establish partnerships around the globes to creative inventive,
        collaborative works that continue to push boundaries. Through our practice we aim to inspire,
        challenge and encourage the mind -- to see beyond the everyday.  "
       
    ]);
});

Route::get('/createavatar', function(){
    return view('createava', [
        "title" => "Create Avatar"

    ]);

});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sembilan Matahari",
        "p" => " Sembilan Matahari (NM) is an innovation studio based in Bandung, Indonesia.
        Our work involves audiovisual and multimedia explorations rooted in design, 
        filmmaking and digital technology that are translated into projection mapping,
        digital experiences, and immersive exhibitions and isntallations.
        
        We are a team of practitioners across art and design, science and technology, 
        and related fields. We establish partnerships around the globes to creative inventive,
        collaborative works that continue to push boundaries. Through our practice we aim to inspire,
        challenge and encourage the mind -- to see beyond the everyday.  "
       
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

//halaman single post
Route::get('posts/{slug}', [PostController::class, 'show']);

//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

//register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/dashboard/posts', DashboardPostController::class);

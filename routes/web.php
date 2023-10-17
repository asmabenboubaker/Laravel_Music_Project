<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
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

Route::resource('blog', BlogController::class);
Route::resource('categories', CategorieController::class);
 
// Route::post('/end', 'BlogController@store')->name('Blog.store');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('Home');
});

Route::get('/songs', function () {
    return view('Songs');
});

Route::get('/blogs', function () {
    return view('Blogs');
});

//route to save blog in database
Route::post('/addblog2s', 'App\Http\Controllers\BlogController@store')->name('Blog.store');

Route::post('/comments/{blog}', [CommentController::class, 'store'])->name('comments.store');
// Route::post('/comments/{blog}', 'CommentController@store')->name('comments.store');
Route::get('/blogDetail', function () {
    return view('blogDetail');
});


Route::get('/event', function () {
    return view('Event');
});

Route::get('/addBlog', function () {
    return view('create');
});

Route::get('edit/{id}/edit', 'BlogController@edit')->name('blog.edit');
// Route::patch('/blog/{id}', 'BlogController@update')->name('blog.update');
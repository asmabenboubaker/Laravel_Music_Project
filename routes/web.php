<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\TypeController;


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
Route::get('/home', function () {
    return view('Home');
});

Route::get('/songs', function () {
    return view('Songs');
});

Route::get('/blogs', function () {
    return view('Blogs');
});


Route::get('/blogDetail', function () {
    return view('blogDetail');
});


Route::get('/event', function () {
    return view('Event');
});


Route::resource('/musicindex', MusicController::class);


Route::get('/audio/{filename}', function ($filename) {
    $externalDirectory = 'C:/MusicFiles'; // Chemin vers le répertoire en dehors de l'application
    $path = $externalDirectory . '/' . $filename;

    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'audio/mpeg']);
    } else {
        abort(404);
    }
});


// Route Type
Route::resource("/types", TypeController::class);



<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\TypeController;



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

Route::resource('blog', BlogController::class);
Route::resource('categories', CategorieController::class);

Route::get('/home', function () {
    return view('Home');
});
Route::post('/createTicket', 'App\Http\Controllers\TicketController@store')->name('ticket.store');
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






Route::resource("/event", EventController::class);




Route::get('/addBlog', function () {
    return view('create');
});

Route::get('edit/{id}/edit', 'BlogController@edit')->name('blog.edit');
 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// chatt ========================================

Route::get('/', 'App\Http\Controllers\PusherController@index');
Route::post('/', 'App\Http\Controllers\PusherController@broadcast');
Route::post('/message', 'App\Http\Controllers\PusherController@message');

require __DIR__.'/auth.php';


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





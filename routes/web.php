<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleController;

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
    $comicses = config('db');
    return view('comics', compact('comicses'));
})->name('comics');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

/* Route::get('/single/{id}', function ($id) {
    $comics = config('db');
    return view('single',compact('comics','id'));
})->name('single');
 */

Route::get('/', 'ComicController@index')->name('comics');

Route::get('/comics/{comic}' , 'ComicController@show')->name('single');

//posts//

Route::get('posts' , 'Admin\Postcontroller@index')->name('admin.posts.index');

Route::get('posts/create' , 'Admin\PostController@create')->name('admin.posts.create');

Route::post('posts/update' , 'Admin\PostController@store')->name('admin.posts.store');

Route::get('posts/{post}' , 'Admin\PostController@show')->name('admin.posts.show');

Route::get('posts/{post}/edit' , 'Admin\PostController@edit')->name('admin.posts.edit');

Route::put('posts/{post}' , 'Admin\PostController@update')->name('admin.post.update');

Route::delete('posts/{post}' , 'Admin\PostController@destroy')->name('admin.posts.destroy');

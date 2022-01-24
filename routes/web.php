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

Route::get('/', 'ComicController@home')->name('home');

Route::get('/comics', 'ComicController@comics')->name('comics');


//comics//

Route::get('posts' , 'Admin\Postcontroller@index')->name('admin.posts.index');

Route::get('posts/create' , 'Admin\PostController@create')->name('admin.posts.create');

Route::post('posts/update' , 'Admin\PostController@store')->name('admin.posts.store');

Route::get('posts/{comic}' , 'Admin\PostController@show')->name('admin.posts.show');

Route::get('posts/{comic}/edit' , 'Admin\PostController@edit')->name('admin.posts.edit');

Route::put('posts/{comic}' , 'Admin\PostController@update')->name('admin.posts.update');

Route::delete('posts/{comic}' , 'Admin\PostController@destroy')->name('admin.posts.destroy');

//videos//

Route::get('videos' , 'Admin\Videocontroller@index')->name('admin.videos.index');

Route::get('videos/create' , 'Admin\VideoController@create')->name('admin.videos.create');

Route::post('videos/update' , 'Admin\VideoController@store')->name('admin.videos.store');

Route::get('videos/{video}' , 'Admin\VideoController@show')->name('admin.videos.show');

Route::get('videos/{video}/edit' , 'Admin\VideoController@edit')->name('admin.videos.edit');

Route::put('videos/{video}' , 'Admin\VideoController@update')->name('admin.videos.update');

Route::delete('videos/{video}' , 'Admin\VideoController@destroy')->name('admin.videos.destroy');

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',['App\Http\Controllers\PostController','index'])
    ->name('index');

Route::get('/namecreate',['App\Http\Controllers\PostController','namecreate'])
    ->name('namecreate');

Route::post('/namecreate/store',['App\Http\Controllers\PostController','namecreatestore'])
    ->name('namecreatestore');

Route::get('/edit/{post}',['App\Http\Controllers\PostController','edit'])
    ->name('edit')
    ->where('post','[0-9]+');

Route::patch('/update/{post}',['App\Http\Controllers\PostController','update'])
    ->name('update')
    ->where('post','[0-9]+');

Route::delete('/destroy/{post}',['App\Http\Controllers\PostController','destroy'])
    ->name('destroy')
    ->where('post','[0-9]+');

Route::delete('/alldestroy',['App\Http\Controllers\PostController','alldestroy'])
    ->name('alldestroy');

Route::get('/guest',['App\Http\Controllers\PostController','guest'])
    ->name('guest');

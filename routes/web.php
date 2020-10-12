<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home-v2');
});

Route::get('/home-v2', function () {
    return view('home-v2');
});

Route::get('/kontak', function () {
    return view('kontak');
});

// route halaman admin
Route::prefix('admin-wp')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('content', function () {
        return view('admin.content');
    });

    Route::get('page', function () {
        return view('admin.page');
    });
});

Route::get('/upload', function () {
    return view('upload');
});

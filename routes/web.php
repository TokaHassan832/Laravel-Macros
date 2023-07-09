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

Route::get('/', function () {
    dd(\Illuminate\Support\Str::partNumber('4545453421'));

    dd(\Illuminate\Support\Str::prefix('4545453421'));
    return \Illuminate\Routing\ResponseFactory::errorJson();
    return view('welcome');
});

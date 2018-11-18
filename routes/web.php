<?php

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

Route::get('/admin-dashboard',function(){
    return view('pages/admin/dashboard');
});

Route::get('/admin-admin',function(){
    return view('layouts/admin-master');
});
Route::get('/admin-user-creation',function(){
    return view('pages/admin/users/create');
});

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/send-email', function () {
    $sendMail = 'rannuardianto99@gmail.com';
    dispatch(new \App\Jobs\SendEmailJob($sendMail));

    dd('send email on progress...');
});

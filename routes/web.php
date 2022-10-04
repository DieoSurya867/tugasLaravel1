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

Route::get('home', function () {
    return view('pages.home');
});
Route::get('card', function () {
    return view('pages.card');
});
Route::get('layouts/without-menu', function () {
    return view('pages.layouts.layout-without-menu');
});

Route::get('account/account-setting', function () {
    return view('pages.accounts.account');
});

Route::get('account/settings-notification', function () {
    return view('pages.accounts.notification-setting');
});

Route::get('account/settings-connection', function () {
    return view('pages.accounts.connection-setting');
});

Route::get('login', function () {
    return view('pages.login');
});

Route::get('register', function () {
    return view('pages.register');
});

Route::get('forgot-password', function () {
    return view('pages.forgot-password');
});

Route::get('tables', function () {
    return view('pages.tables');
});

Route::get('forms/horizontal-form', function () {
    return view('pages.forms.horizontal-form');
});

Route::get('boxicons', function () {
    return view('pages.boxicons');
});

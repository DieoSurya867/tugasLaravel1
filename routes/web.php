<?php

use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
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
    return view('auth.login');
});

// Route::get('home', function () {
//     return view('pages.home');
// });


Route::get('tables', [AdminController::class, 'index'])->middleware('admin');

Route::resource('admin', AdminController::class)->Middleware('admin');
Route::get('deleteadmin/{id}', [AdminController::class, 'destroy'])->name('deleteadmin');

// Route::get('card', function () {
//     return view('pages.card');
// });
// Route::get('layouts/without-menu', function () {
//     return view('pages.layouts.layout-without-menu');
// });

// Route::get('account/account-setting', function () {
//     return view('pages.accounts.account');
// });

// Route::get('account/settings-notification', function () {
//     return view('pages.accounts.notification-setting');
// });

// Route::get('account/settings-connection', function () {
//     return view('pages.accounts.connection-setting');
// });

// Route::get('login', function () {
//     return view('pages.login');
// });

// Route::get('register', function () {
//     return view('pages.register');
// });

// Route::get('forgot-password', function () {
//     return view('pages.forgot-password');
// });

// Route::get('tables', function () {
//     $data = [
//         [
//             'project' => 'Vue Project',
//             'client' => 'AlphaRio',
//             'status' => 'ACTIVE'
//         ],
//         [
//             'project' => 'React Project',
//             'client' => 'Alphonso',
//             'status' => 'PENDING'
//         ],
//         [
//             'project' => 'Angular Project',
//             'client' => 'Anda Dinata',
//             'status' => 'COMPLETED'
//         ],
//         [
//             'project' => 'Bootstrap Project',
//             'client' => 'Jeri Milton',
//             'status' => 'SCHEDULED'
//         ],
//     ];


//     return view('pages.tables', compact('data'));
// });

// Route::get('forms/horizontal-form', function () {
//     return view('pages.forms.horizontal-form');
// });

// Route::get('boxicons', function () {
//     return view('pages.boxicons');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

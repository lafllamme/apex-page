<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\QRController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome')->name('home');

// Route::get('home', function () {
//     return view('welcome')->name('home');
// });


//Route::get('index', [QRController::class, 'index'])->name('index');
Route::post('qrcode', [QRController::class, 'qrcode'])->name('qrcode');
Route::get('/setup', function () {
    $link = Artisan::call('storage:link');
    $migrate = Artisan::call('migrate');
    $auth = Artisan::call('ui vue --auth');
    dd($link, $migrate, $auth);
});
Route::view('list', 'list');
Route::get('guests', [GuestController::class, 'index'])->name('guests')->middleware('auth');
Route::post('edit/{id}', [GuestController::class, 'edit']);
Route::post('delete/{id}', [GuestController::class, 'delete']);
Route::post('create', [GuestController::class, 'create']);



Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

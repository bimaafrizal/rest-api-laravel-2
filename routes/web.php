<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\TokenController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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


Route::get('/setup', [TokenController::class, 'make']);

Route::resource('/contoh', ContohController::class);

Route::get('/contoh-request/{post}', [ContohController::class, 'cobaRequest']);

Route::get('/contoh2', [ContohController::class, 'index2']);
Route::get('/contoh-redirect', [ContohController::class, 'index3']);

Route::post('/contoh-request', [ContohController::class, 'cobaRequestForm']);
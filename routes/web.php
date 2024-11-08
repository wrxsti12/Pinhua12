<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OberservationController;

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

Route::get(
    '/sgds',
     function () {
    return view('intro_sdgs');
});

Route::get('Oberservations' , [OberservationController::class, 'index']);
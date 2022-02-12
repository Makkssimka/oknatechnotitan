<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])
    ->name('index');
Route::get('/osteklenie-balkonov', [PageController::class, 'balkony'])
    ->name('balkony');
Route::get('/otdelka-lodzhij', [PageController::class, 'lodzhii'])
    ->name('lodzhii');
Route::get('/okna-dlya-kottedzhej', [PageController::class, 'kotedzhi'])
    ->name('kotedzhi');
Route::get('/kontakty', [PageController::class, 'kontakty'])
    ->name('kontakty');
Route::get('/akcii-skidki', [PageController::class, 'akcii'])
    ->name('akcii');

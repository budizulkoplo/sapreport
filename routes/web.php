<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxHistory;
use App\Http\Controllers\menu1;
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
    // return view('index', ['title' => 'Asia Pacific Fibers'], ['message' => 'SAP Reporting System']);
    return view('contents.dashboard',  ['title' => 'Asia Pacific Fibers'], ['message' => 'SAP Reporting System']);
});

route::view('/coba', 'coba', ['test' => 'echo']);
Route::get('/boxhistory', [BoxHistory::class, 'index']);
Route::get('/menu1', [menu1::class, 'index']);

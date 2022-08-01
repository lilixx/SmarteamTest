<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\TestController;

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

/*
Route::get('/', function () {
    return view('welcome');
});*/

/*
Route::get('/', function () {
    return view('test');
}); */

Route::get(
    '/test',
    [PreguntaController::class, 'show']
)->name('pregunta');

Route::resource('tests', TestController::class);

/*
Route::get(
    '/resultado',
    [TestController::class, 'index']
)->name('resultado'); */

Route::get(
    '/load',
    [TestController::class, 'load']
)->name('load');


Route::get(
    '/resultado', function () {
        return view('resultado');
    }
)->name('resultado'); 

Route::get(
    '/', function () {
        return view('index');
    }
)->name('index');
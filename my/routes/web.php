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

use App\Http\Controllers\EventController;


Route::get('/', [EventController::class, 'index']);
Route::get('/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store'])->name('create_event');;
Route::get('/show/{id}', [EventController::class, 'show']);

Route::get('/product', function (){

    $busca = request('search');

    return view('product', ['busca' => $busca]);
});

Route::get('/products/{id}', function ($id){
    return view('products', ['id' => $id]);
});

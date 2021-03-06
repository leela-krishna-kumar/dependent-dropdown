<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Stevebauman\Location\Facades\Location;

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
    return view('index');
});

Route::get('dependent-dropdown', [IndexController::class, 'dependent_dropdown']);

Route::post('dd/country_city/fetch', [IndexController::class, 'cc_dynamic'])->name('dynamicdependent.fetch');



Route::get('location', function(){

    $ip = request()->ip();
    $data = \Location::get($ip);

    dd($ip);
});

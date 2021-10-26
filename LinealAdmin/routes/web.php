<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Https;
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




$addAdmin = Http::post('https://api.meraki.com/api/v1/organisation/{{$organisationId}}/admins', [
    'name' => 'Steve',
    'role' => 'Network Administrator',
]);

Route::get('/', function () {
    return view('welcome');
});

<?php

use App\Http\Controllers\agentNameController;
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

//Making the routes for the agent's names.
Route::get('/agents', [agentNameController::class, 'index']);



Route::get('/', function () {
    return view('welcome');
});

<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaControllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('peta/login, [Controller::class, 'login']);

Route::get('peta/login', [PetaControllers::class, 'login']);

Route::get('peta/register', [PetaControllers::class, 'register']);

Route::get('peta/petabandaaceh', [PetaControllers::class, 'peta']);

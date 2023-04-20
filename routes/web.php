<?php

use App\Http\Controllers\PetaController;
use Illuminate\Support\Facades\Route;

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

Route::get('peta/pemanduwisata/pendaftaran', [PetaController::class, 'pendaftaran']);
Route::get('peta/sejarah', [PetaController::class, 'sejarah']);

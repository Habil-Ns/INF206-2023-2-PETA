<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaController;

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

Route::get('peta/login', [PetaController::class, 'login']);

Route::get('peta/register', [PetaController::class, 'register']);

Route::get('peta/galeri/petabandaaceh', [PetaController::class, 'petabandaaceh']);

Route::get('peta/pemanduwisata', [PetaController::class, 'pemanduwisata']);

Route::get('peta/pemanduwisata/pendaftaran', [PetaController::class, 'pendaftaran']);

Route::get('peta/sejarah', [PetaController::class, 'sejarah']);
Route::get('peta', [PetaController::class, 'index']);

Route::get('peta/pemanduwisata', [PetaController::class, 'create']);

Route::get('peta/user/detail', [PetaController::class, 'detail']);

Route::get('peta/wisata/wisatamuseum', [PetaController::class, 'museum']);

Route::get('peta/wisata/wisatasejarahbudaya', [PetaController::class, 'sejarahBudaya']);

Route::get('peta/wisata/wisatareligi', [PetaController::class, 'religi']);

Route::get('peta/wisata/wisatakuliner', [PetaController::class, 'kuliner']);

Route::get('peta/wisata/wisataalam', [PetaController::class, 'alam']);

Route::get('peta/galeri/hotel', [PetaController::class, 'hotel']);

Route::get('peta/hubungikami', [PetaController::class, 'hub']);
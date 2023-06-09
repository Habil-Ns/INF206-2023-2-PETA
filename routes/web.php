<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardOrdersController;

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

Route::get('/', [PetaController::class, 'index']);
Route::get('peta', [PetaController::class, 'index']);

Route::get('peta/pemanduwisata', [PetaController::class, 'pemanduwisata']);
Route::post('peta/pemanduwisata', [PetaController::class, 'store']);
Route::get('peta/pemanduwisata/{nama}', [PetaController::class, 'detail'])->name('pemanduwisata.detail');
Route::get('peta/pemanduwisata/{id}/edit', [PetaController::class, 'update'])->name('registration.edit');
Route::put('peta/pemanduwisata/{id}', [PetaController::class, 'updateStore'])->name('registration.update');

Route::post('peta/pemesanan', [PetaController::class, 'storeorder']);

Route::get('peta/wisata/wisatamuseum', [PetaController::class, 'museum']);

Route::get('peta/wisata/wisatasejarahbudaya', [PetaController::class, 'sejarahBudaya']);

Route::get('peta/wisata/wisatareligi', [PetaController::class, 'religi']);

Route::get('peta/wisata/wisatakuliner', [PetaController::class, 'kuliner']);

Route::get('peta/wisata/wisataalam', [PetaController::class, 'alam']);

Route::get('peta/galeri/hotel', [PetaController::class, 'hotel']);


Route::get('peta/hubungi&penilaian/hubungikami', [PetaController::class, 'hub']);
Route::post('peta/hubungi&penilaian/hubungikami', [PetaController::class, 'storesaran']);

Route::get('peta/hubungi&penilaian/penilaianpemandu', [PetaController::class, 'penilaianPemandu']);
Route::post('peta/hubungi&penilaian/penilaianpemandu', [PetaController::class, 'storeRate']);

Route::get('peta/pendaftaran', [PetaController::class, 'pendaftaran']);

Route::get('peta/sejarah', [PetaController::class, 'sejarah']);

Route::get('peta/login', [PetaController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [PetaController::class, 'authenticate']);
Route::post('/logout', [PetaController::class, 'logout']);

Route::get('peta/register', [PetaController::class, 'register'])->middleware('guest');
Route::POST('peta/register', [PetaController::class, 'storeReg']);


Route::get('peta/galeri/petabandaaceh', [PetaController::class, 'petabandaaceh']);

Route::get('/dashboard', function () {
    $registrations = DB::table('registrations')
        ->select('nama', 'status')
        ->get();

    $view_data = [
        'registrations' => $registrations
    ];
    return view('user.dashboard', $view_data);
})->middleware('auth');

Route::resource('/dashboard/orders', DashboardOrdersController::class)->middleware('auth');
Route::get('/dashboard/rating', [PetaController::class, 'showrate'])->middleware('admin');

Route::resource('/dashboard/cvpemandu', AdminDashboardController::class)->middleware('admin');
Route::get('/dashboard/daftarsaran', [PetaController::class, 'daftarsaran'])->middleware('admin');
Route::delete('/dashboard/daftarsaran/{nama}', [PetaController::class, 'destroySaran'])->middleware('admin')->name('saran.destroy');

Route::delete('peta/pemanduwisata/{nama}', function ($nama) {
    DB::table('registrations')->where('nama', $nama)->delete();
    return redirect('/dashboard')->with('success', 'Registration deleted successfully');
})->middleware('admin');

Route::put('peta/pemanduwisata/{nama}/terima', function ($nama) {
    DB::table('registrations')
        ->where('nama', $nama)
        ->update(['status' => 'Diterima']);
    return redirect('peta/pemanduwisata')->with('success', 'Registration status updated successfully');
})->middleware('admin');

Route::put('cvpemandu/{nama}', function ($nama) {
    DB::table('registrations')
        ->where('nama', $nama)
        ->update(['status' => 'Cuti']);
    return redirect('/dashboard/cvpemandu')->with('success', 'Tour Guide is holiday');
})->middleware('admin');

Route::put('orders/{nama}/selesai', function ($nama) {
    DB::table('orders')
        ->where('nama', $nama)
        ->update(['status' => 'Selesai']);
    return redirect('/dashboard/orders')->with('success', 'Orders status updated successfully');
})->middleware('auth')->name('orders.selesai');

Route::put('orders/{nama}/terima', function ($nama) {
    DB::table('orders')
        ->where('nama', $nama)
        ->update(['status' => 'Diproses']);
    return redirect('/dashboard/orders')->with('success', 'Orders status updated successfully');
})->middleware('auth')->name('orders.terima');

Route::delete('orders/{nama}', function ($nama) {
    DB::table('orders')->where('nama', $nama)->delete();
    return redirect('/dashboard/orders')->with('success', 'Orders deleted successfully');
})->middleware('auth');
Route::delete('rating/{namapemandu}/{namapenilai}', [PetaController::class, 'destroy'])->name('rating.destroy')->middleware('admin');
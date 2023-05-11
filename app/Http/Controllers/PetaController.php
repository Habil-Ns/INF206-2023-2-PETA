<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peta.beranda');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pemanduwisata()
    {
        $registrations = DB::table('registrations')
            ->select('nama', 'gambar', 'status', 'rate')
            ->where('status', '<>', 'Pending')
            ->get();

        $view_data = [
            'registrations' => $registrations
           
        ];
       

        return view('peta.pemanduwisata', $view_data);
    }

    public function detail(string $nama)
    {
        $registration = DB::table('registrations')
            ->select('id', 'nama', 'umur', 'gender', 'kontak', 'email', 'keahlian', 'kelebihan', 'kekurangan', 'gambar', 'status', 'user_id')
            ->where('nama', $nama)
            ->first();
        $view_data = [
            'registration' => $registration
        ];
        return view('peta.detail_pemanduwisata', $view_data);
    }


    public function museum()
    {
        return view('peta.wisata_museum');
    }

    public function sejarahBudaya()
    {
        return view('peta.wisata_sejarah_budaya');
    }

    public function religi()
    {
        return view('peta.wisata_religi');
    }

    public function kuliner()
    {
        return view('peta.wisata_kuliner');
    }

    public function alam()
    {
        return view('peta.wisata_alam');
    }

    public function hotel()
    {
        return view('peta.hotel');
    }

    public function pendaftaran()
    {
        if (auth()->check() && auth()->user()) {
            $user_id = auth()->user()->id;
            $registration = DB::table('registrations')
                ->select('status')
                ->where('user_id', $user_id)
                ->first();
            if (!$registration) {
                return view('peta.pendaftaran_pemandu');
            }
            if ($registration->status == 'Diterima' || $registration->status == 'Cuti') {
                return view('user.registration_done');
            }
            if ($registration->status == 'Pending') {
                return view('user.registration_pending');
            }
        } else {
            return view('user.registration_refuse');
        }
    }

    public function sejarah()
    {
        return view('peta.sejarah');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function storeReg(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'Berhasil daftar! Mohon login');
        return redirect('peta/login');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pindah_gambar = $request->gambar;
        $namafile_gambar = Str::random(40) . '.' . $pindah_gambar->getClientOriginalExtension();

        $pindah_cv = $request->cv;
        $namafile_cv = Str::random(40) . '.' .
            $pindah_cv->getClientOriginalExtension();

        $keahlian = implode(', ', $request->input('keahlian'));
        $keahlian = str_replace('_', ' ', $keahlian);

        $nama = $request->input('nama');
        $umur = $request->input('umur');
        $gender = $request->input('gender');
        $kontak = $request->input('kontak');
        $email = $request->input('email');
        $kelebihan = $request->input('kelebihan');
        $kekurangan = $request->input('kekurangan');

        $user_id = auth()->user()->id;

        DB::table('registrations')->insert([
            'user_id' => $user_id,
            'nama' => $nama,
            'umur' => $umur,
            'gender' => $gender,
            'kontak' => $kontak,
            'email' => $email,
            'keahlian' => $keahlian,
            'kelebihan' => $kelebihan,
            'kekurangan' => $kekurangan,
            'cv' => $namafile_cv,
            'gambar' => $namafile_gambar,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => 'Pending'
        ]);

        $pindah_cv->move(public_path() . '/cv', $namafile_cv);

        $pindah_gambar->move(public_path() . '/gambar', $namafile_gambar);


        // Mengirimkan kembali halaman ini kehalaman sebelumnya yang dipunya
        return view('user.registration_pending');
    }

    /**
     * Display the specified resource.
     */
    public function hub()
    {
        return view('peta.hubungikami');
    }

    public function penilaianPemandu()
    {
        $registrations = DB::table('registrations')
            ->select('nama')
            ->get();

        return view('peta.penilaianpemandu', compact('registrations'));
    }

    public function storeRate(Request $request)
    {
        $namapenilai = $request->input('namapenilai');
        $rate = $request->input('rate');
        $pemandu = $request->input('pemandu');
    
        $pemanduRegistration = DB::table('registrations')->where('nama', $pemandu)->first();
    
        if ($pemanduRegistration) {
            DB::table('rates')->insert([
                'namapenilai' => $namapenilai,
                'rate' => $rate,
                'pemandu' => $pemanduRegistration->nama,
            ]);
    
            // Calculate average rating for the pemandu
            $averageRating = DB::table('rates')
                ->where('pemandu', $pemanduRegistration->nama)
                ->avg('rate');
    
            // Update the average rating in the registrations table
            DB::table('registrations')
                ->where('nama', $pemanduRegistration->nama)
                ->update(['rate' => $averageRating]);
        }
    
        return view('user.rating_done');

    }    

    public function showrate()
    {   
        $this->authorize('admin');
        $registrations = DB::table('registrations')
            ->select('nama')
            ->distinct()
            ->get();
        
            
        return view('user.admin.ratings.index', compact('registrations'));
    }

    public function login()
    {
        return view('peta.login');
    }

    public function register()
    {
        return view('peta.register');
    }

    public function petabandaaceh()
    {
        return view('peta.peta_bandaaceh');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $registration = DB::table('registrations')
            ->select('id', 'nama', 'umur', 'gender', 'kontak', 'email', 'keahlian', 'kelebihan', 'kekurangan', 'gambar', 'status')
            ->where('id', $id)
            ->first();

        $view_data = [
            'registration' => $registration
        ];
        return view('peta.update_pemanduwisata', $view_data);
    }
    public function updateStore(Request $request, string $id)
    {
        $nama = $request->input('nama');
        $umur = $request->input('umur');
        $gender = $request->input('jenis_kelamin');
        $kontak = $request->input('nomor_hp');
        $email = $request->input('email');
        $keahlian = $request->input('keahlian');
        $kelebihan = $request->input('kelebihan');
        $kekurangan = $request->input('kekurangan');

        // Check if a new image is uploaded
        if ($request->hasFile('gambar')) {
            $pindah_gambar = $request->file('gambar');
            $namafile_gambar = Str::random(40) . '.' . $pindah_gambar->getClientOriginalExtension();

            $pindah_gambar->move(public_path() . '/gambar', $namafile_gambar);

            // Update the record with the new image
            DB::table('registrations')
                ->where('id', $id)
                ->update([
                    'nama' => $nama,
                    'umur' => $umur,
                    'gender' => $gender,
                    'kontak' => $kontak,
                    'email' => $email,
                    'keahlian' => $keahlian,
                    'kelebihan' => $kelebihan,
                    'kekurangan' => $kekurangan,
                    'gambar' => $namafile_gambar,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
        } else {
            // Update the record without changing the image
            DB::table('registrations')
                ->where('id', $id)
                ->update([
                    'nama' => $nama,
                    'umur' => $umur,
                    'gender' => $gender,
                    'kontak' => $kontak,
                    'email' => $email,
                    'keahlian' => $keahlian,
                    'kelebihan' => $kelebihan,
                    'kekurangan' => $kekurangan,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
        }
        return redirect()->route('pemanduwisata.detail', ['nama' => $nama])->with('success', 'Pemandu wisata updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($namapemandu, $namapenilai)
    {
        DB::table('rates')
            ->where('pemandu', $namapemandu)
            ->where('namapenilai', $namapenilai)
            ->delete();
    
        $averageRating = DB::table('rates')
            ->where('pemandu', $namapemandu)
            ->avg('rate');
    
        DB::table('registrations')
            ->where('nama', $namapemandu)
            ->update(['rate' => $averageRating]);
    
        return redirect()->back()->with('success', 'Rating deleted successfully.');    
    }    

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/peta');
    }

    public function daftarsaran()
    {
        $this->authorize('admin');
        $sarans = DB::table('sarans')
            ->select('nama', 'email', 'komentar')
            ->get();
        return view('user.admin.saran.daftarsaran', compact('sarans'));
    }

    public function storesaran(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $komentar = $request->input('komentar');

        DB::table('sarans')->insert([
            'nama' => $nama,
            'email' => $email,
            'komentar' => $komentar,
        ]);

        // Mengirimkan kembali halaman ini kehalaman sebelumnya yang dipunya
        return view('user.saran_accept');
    }

    public function storeorder(Request $request)
    {
        $nama = $request->input('nama');
        $umur = $request->input('umur');
        $nohp = $request->input('nohp');
        $gender = $request->input('gender');

        DB::table('orders')->insert([
            'nama' => $nama,
            'umur' => $umur,
            'nohp' => $nohp,
            'gender' => $gender,
            'status' => "Belum diproses",
        ]);

        // Mengirimkan kembali halaman ini kehalaman sebelumnya yang dipunya
        return view('user.order_done');
    }

    public function rate(Request $request, $store)
    {
        $rate = $request->input('rate');


        DB::table($store . '_rate')->insert([
            'rate' => $rate,

        ]);

        return view('peta.pemanduwisata');
    }
}
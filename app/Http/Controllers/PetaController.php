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
            ->select('nama', 'gambar', 'status')
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
            ->select('id', 'nama', 'umur', 'gender', 'kontak', 'email', 'keahlian', 'kelebihan', 'kekurangan', 'gambar', 'status')
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
            return view('peta.pendaftaran_pemandu');
        } else
            return view('user.registration_refuse');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
        

        DB::table($store.'_rate')->insert([
            'rate' => $rate,
            
        ]);
        
        return view('peta.pemanduwisata');
    }
    
    
   
   
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peta.beranda');
    }

    public function navigation()
    {
        return view('layouts.navigation');
    }

    /**
     * Show the form for creating a new resource.
     */
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

    public function pemanduwisata()
    {
        return view('peta.pemanduwisata');
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
}


   
=======
    public function pendaftaran()
    {
        return view('peta.pendaftaran_pemandu');
    }

    public function sejarah()
    {
        return view('peta.sejarah');
    }
}
>>>>>>> 2108107010069-Askar

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2108107010089-HabilNs
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peta.beranda');
    }

<<<<<<< HEAD
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
=======
    /**
     * Show the form for creating a new resource.
     */
    public function create()
>>>>>>> 2108107010089-HabilNs
    {
        return view('peta.pemanduwisata');
    }

<<<<<<< HEAD
    
=======
    public function detail()
    {
        return view('peta.detail_pemanduwisata');
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

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function hub()
    {
        return view('peta.hubungikami');
    }

>>>>>>> 2108107010089-HabilNs
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
<<<<<<< HEAD


   
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
=======
>>>>>>> 2108107010089-HabilNs

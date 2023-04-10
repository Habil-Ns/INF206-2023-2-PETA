<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function create()
    {
        return view('peta.pemanduwisata');
    }

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
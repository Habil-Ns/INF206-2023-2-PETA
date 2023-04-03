<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pemesanan::with('banda_site')->paginate(10);

        return view('admin.pesanan.index', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function destroy(Pemesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->back()->with([
            'message' => 'success deleted !',
            'alert-type' => 'danger'
        ]);
    }
}

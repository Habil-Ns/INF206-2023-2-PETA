<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BandaSite;

class BandaSiteController extends Controller
{
    public function index()
    {
        $banda_sites = BandaSite::with('galleries')->get();

        return view('banda_sites.index', compact('banda_sites'));
    }

    public function show(BandaSite $banda_site)
    {
        $banda_sites = BandaSite::where('id', '!=', $banda_site->id)->get();

        return view('banda_sites.show', compact('banda_site', 'banda_sites'));
    }
}

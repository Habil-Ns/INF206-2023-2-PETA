<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Requests\PemesananRequest;

class PemesananController extends Controller
{
    public function store(PemesananRequest $request)
    {
        Pemesanan::create($request->validated());

        return redirect()->back()->with([
            'message' => "Success, we'll process your booking"
        ]);
    }
}

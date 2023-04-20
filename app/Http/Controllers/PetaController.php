<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function pendaftaran()
    {
        return view('peta.pendaftaran_pemandu');
    }

    public function sejarah()
    {
        return view('peta.sejarah');
    }
}

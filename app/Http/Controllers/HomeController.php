<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BandaSite;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banda_sites = BandaSite::with('galleries')->get();
        $blogs = Blog::get()->take(3);

        return view('homepage', compact('banda_sites','blogs'));
    }
}

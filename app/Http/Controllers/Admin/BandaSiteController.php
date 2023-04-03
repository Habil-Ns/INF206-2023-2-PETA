<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BandaSite;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BandaSiteRequest;

class BandaSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banda_sites = BandaSite::paginate(10);

        return view('admin.banda_sites.index', compact('banda_sites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banda_sites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BandaSiteRequest $request)
    {
        if($request->validated()) {
            $slug = Str::slug($request->location, '-');
            $banda_site = BandaSite::create($request->validated() + ['slug' => $slug ]);
        }

        return redirect()->route('admin.banda_sites.edit', [$banda_site])->with([
            'message' => 'Success Created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BandaSite $banda_site)
    {
        $galleries = Gallery::paginate(10);
        
        return view('admin.banda_sites.edit', compact('banda_site','galleries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BandaSiteRequest $request, BandaSite $banda_site)
    {
        if($request->validated()) {
            $slug = Str::slug($request->location, '-');
            $banda_site->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('admin.banda_sites.index')->with([
            'message' => 'Success Updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BandaSite $banda_site)
    {
        $banda_site->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}

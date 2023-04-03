<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\BandaSite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request, BandaSite $banda_site)
    {
        if($request->validated()){
            $images = $request->file('images')->store(
                'banda_site/gallery', 'public'
            );
            Gallery::create($request->except('images') + ['images' => $images,'banda_site_id' => $banda_site->id]);
        }

        return redirect()->route('admin.banda_sites.edit', [$banda_site])->with([
            'message' => 'Success Created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BandaSite $banda_site,Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('banda_site','gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryRequest $request,BandaSite $banda_site, Gallery $gallery)
    {
        if($request->validated()) {
            if($request->images) {
                File::delete('storage/'. $gallery->images);
                $images = $request->file('images')->store(
                    'banda_sites/gallery', 'public'
                );
                $gallery->update($request->except('images') + ['images' => $images, 'banda_site_id' => $banda_site->id]);
            }else {
                $gallery->update($request->validated());
            }
        }

        return redirect()->route('admin.banda_sites.edit', [$banda_site])->with([
            'message' => 'Success Updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BandaSite $banda_site,Gallery $gallery)
    {
        File::delete('storage/'. $gallery->images);
        $gallery->delete();

        return redirect()->back()->with([
            'message' => 'Success Deleted !',
            'alert-type' => 'danger'
        ]);
    }
}

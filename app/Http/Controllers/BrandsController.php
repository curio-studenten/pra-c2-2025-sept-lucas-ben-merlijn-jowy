<?php

namespace App\Http\Controllers;

use App\Models\Manuals;
use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $BrandsList = \App\Models\Brands::all();
        $manuals = \App\Models\Manuals::all(); 


        return view('pages.beheerPagina', compact('BrandsList', 'manuals'));
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
        // Get brand by name
        $brandName = $request->input('brand_name');
        $brand = \App\Models\Brands::where('name', $brandName)->first();
        $brandId = $brand ? $brand->id : null;

        $manualName = $request->input('manual_name');
        $fileName = $request->input('file_name');

        $brandSlug = str_replace(' ', '_', $brandName);
        $manualSlug = str_replace(' ', '_', $manualName);

        $manualUrl = "http://manualsonline.com/manuals/mfg/{$brandSlug}/{$manualSlug}.html";

        // Save to database
        $manual = new Manuals();
        $manual->brand_id = $brandId;
        $manual->name = $manualName;
        $manual->filename = $fileName;
        $manual->originUrl = $manualUrl;
        $manual->filesize = 0; // default value
        $manual->downloadedServer = 'TransIP'; // atlijd TransIP
        $manual->created_at = now();
        $manual->views = 0; //default value
        $manual->save();

        // Optionally, redirect or return a view with the generated URL
        return redirect()->back()->with('manualUrl', $manualUrl);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;


class BrandController extends Controller
{



    public function show($brand_id, $brand_slug)
    {

        $brand = Brand::findOrFail($brand_id);
        $manuals = Manual::all()->where('brand_id', $brand_id);

        return view('pages/manual_list', [
            "brand" => $brand,
            "manuals" => $manuals
        ]);
        

    }
            public function indexByLetter($letter)
        {
            // Alle merken ophalen die beginnen met de opgegeven letter
            $brands = Brand::where('name', 'LIKE', $letter . '%')
                            ->orderBy('name')
                            ->get();

            // De view tonen met de merken
            return view('pages.by_letter', compact('brands', 'letter'));
        }
}

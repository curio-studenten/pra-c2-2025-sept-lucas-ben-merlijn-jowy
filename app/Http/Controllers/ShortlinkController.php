<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manual;

class ShortlinkController extends Controller
{
    public function redirect($shortlink)
    {
        $manual = Manual::where('shortlink', $shortlink)->first();

        return redirect()->away($manual->originUrl);
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
class ClothesController extends Controller
{
    public function show()
    {
        $api= Http::get('http://helize.tk/public/api/wears');
        $japi = $api->json();
        return view('clothes.showClothes', compact('japi'));
    }
}

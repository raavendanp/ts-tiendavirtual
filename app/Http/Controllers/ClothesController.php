<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
class ClothesController extends Controller
{
    public function show()
    {
        $api= Http::get('http://3.217.114.44/public/api/v3/products');
        $japi = $api->json();
        return view('clothes.showClothes', compact('japi'));
    }
}
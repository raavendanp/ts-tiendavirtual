<?php

namespace App\Http\Controllers;

class CheckoutController extends Controller
{
    public function show()
    {
        //Pagina principal
        return view('product.checkout');
    }
}

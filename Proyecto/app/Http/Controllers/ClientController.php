<?php

namespace App\Http\Controllers;
use App\Client;
use App\Comment;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function show()
    {
        //Pagina principal
        return view('checkout.client');
    }

    public function save(Request $request)
    {
        Client::validate($request);
        Client::create($request->only(["first_name", "last_name","adress","city", "country", "zip_code","email","telephone"]));
        return redirect('/checkout/client');
    }
}

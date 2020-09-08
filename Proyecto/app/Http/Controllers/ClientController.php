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
        Client::create($request->only(["first_name", "last_name", "telephone","email"]));
        $clientInfo["client_id"] = Client::all()->last()->getId();
        $clientInfo["first_name"] = $request->first_name;
        $clientInfo["last_name"] = $request->last_name;
        $clientInfo["email"] = $request->email;
        $clientInfo["telephone"] = $request->telephone;
        
        return view('checkout.shipping')->with(['clientInfo'=> $clientInfo]);
    }
}

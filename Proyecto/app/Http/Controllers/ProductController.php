<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    public function show()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Show product";
        $data["products"] =  Product::orderBy('id','ASC')->get(); //trae la busqueda en orden ascendente con orderBy
        return view('product.show')->with("data",$data);
    }
    public function showDetails($id)
    {
        $data = []; //to be sent to the view
        $data["title"] = "Show product";
        $data["product"] =  Product::where('id', $id)->get();
        $data["product"]["id"] = $data["product"][0]->getId();
        $data["product"]["name"] = $data["product"][0]->getName();
        $data["product"]["price"] = $data["product"][0]->getPrice();
        $data["product"]["description"] = $data["product"][0]->getDescription();

        return view('product.showDetails')->with("data",$data);
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        $data["products"] = Product::all();

        return view('product.create')->with("data",$data);
    }


    public function save(Request $request)
    {
        Product::validate($request);
        Product::create($request->only(["name","price","description"]));

        return back()->with('success','Item created successfully!');
    }
    public function delete(Request $request)
    {
        Product::destroy($request->only(["id"]));
        return view('product.deleted');
    }
    

}

<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    public function show()
    {
        $listOfProducts = []; //to be sent to the view
        $listOfProducts =  Product::orderBy('id', 'ASC')->get(); //trae la busqueda en orden ascendente con orderBy
        return view('product.show')->with("listOfProducts", $listOfProducts);
    }
    public function showDetails($id)
    {
                    
        $product =  Product::findOrFail($id);
        $product["comments"] =  Comment::where('product_id',$id)->get();
        $product["pgnteComments"] =  Comment::where('product_id',$id)->paginate(2);
        $product["avgRating"] = Comment::where('product_id',$id)->avg('rating');
        $product["ttlRating"]= Comment::where('product_id',$id)->count();
        return view('product.showDetails')->with("product", $product);

    }

    public function create()
    {
        return view('product.create');
    }


    public function save(Request $request)
    {
        Product::validate($request);
        Product::create($request->only(["name", "price", "description"]));

        return back()->with('success', 'Item created successfully!');
    }
    public function delete(Request $request)
    {
        Product::destroy($request->only(["id"]));
        return view('product.deleted');
    }
}

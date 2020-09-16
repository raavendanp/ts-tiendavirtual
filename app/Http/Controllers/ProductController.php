<?php

namespace App\Http\Controllers;
//author: Ricardo Avendaño Peña
use Illuminate\Http\Request;
use App\Product;



class ProductController extends Controller
{
    public function show($sort, $catalogue)
    {
        $listOfProducts = []; //to be sent to the view
        if ($sort == "lower_price") {
            if ($catalogue != "all") {
                $listOfProducts["all"] =  Product::orderBy('price', 'ASC')->where('catalogue_id', $catalogue)->get(); //trae la busqueda en orden ascendente con orderBy
            } else {
                $listOfProducts["all"] =  Product::orderBy('price', 'ASC')->get();
            }
        } else {
            if ($catalogue != "all") {
                $listOfProducts["all"] =  Product::orderBy('created_at', 'DESC')->where('catalogue_id', $catalogue)->get();
            } else {
                $listOfProducts["all"] =  Product::orderBy('created_at', 'DESC')->get();
            }
        }
        $listOfProducts["top"] = Product::orderBy('price', 'DESC')->get()->take(2);

        return view('product.showProducts')->with("listOfProducts", $listOfProducts);
    }

    public function showDetails($id)
    {
        $product =  Product::findOrFail($id);
        $product["comments"] =  $product->comments()->where('product_id', $id)->get();
        $product["pgnteComments"] =  $product->comments()->where('product_id', $id)->paginate(3);
        $product["avgRating"] = round($product->comments()->where('product_id', $id)->avg('rating'), 1);
        $product["ttlRating"] = $product->comments()->where('product_id', $id)->count();
        return view('product.showDetails')->with("product", $product);
    }

    public function create($catalogueId)
    {
        return view('product.createProducts')->with('catalogueId', $catalogueId);
    }

    public function save(Request $request)
    {
        Product::validate($request);
        Product::create($request->only(["name", "price", "description", "details", "catalogue_id"]));

        return back()->with('success', 'Item created successfully!');
    }
    public function delete(Request $request)
    {
        Product::destroy($request->only(["id"]));
        return view('product.deletedProducts');
    }
}

<?php
namespace App\Http\Controllers;
//author: Ricardo Avendaño Peña
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    public function show($sort)
    {
        $listOfProducts = []; //to be sent to the view
        if($sort == "lower_price"){
          $listOfProducts =  Product::orderBy('price', 'ASC')->get(); //trae la busqueda en orden ascendente con orderBy
        }
        else{
          $listOfProducts =  Product::orderBy('created_at', 'DESC')->get(); //trae la busqueda en orden ascendente con orderBy
        }
        return view('product.showProducts')->with("listOfProducts", $listOfProducts);
    }
    public function showDetails($id)
    {
                    
        $product =  Product::findOrFail($id);
        $product["comments"] =  $product->comments()->where('product_id',$id)->get();
        $product["pgnteComments"] =  $product->comments()->where('product_id',$id)->paginate(3);
        $product["avgRating"] = round($product->comments()->where('product_id',$id)->avg('rating'), 1);
        $product["ttlRating"]= $product->comments()->where('product_id',$id)->count();
        return view('product.showDetails')->with("product", $product);

    }

    public function create()
    {
        return view('product.createProducts');
    }


    public function save(Request $request)
    {
        Product::validate($request);    
        Product::create($request->only(["name", "price", "description","details"]));

        return back()->with('success', 'Item created successfully!');
    }
    public function delete(Request $request)
    {
        Product::destroy($request->only(["id"]));
        return view('product.deleted');
    }
}

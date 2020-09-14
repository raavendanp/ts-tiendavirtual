<?php

namespace App\Http\Controllers;
//author: Ricardo Avendaño Peña
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Item;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    public function show($sort)
    {
        $listOfProducts = []; //to be sent to the view
        if ($sort == "lower_price") {
            $listOfProducts["all"] =  Product::orderBy('price', 'ASC')->get(); //trae la busqueda en orden ascendente con orderBy
        } else {
            $listOfProducts["all"] =  Product::orderBy('created_at', 'DESC')->get();
        }
        $listOfProducts["top"] = Product::orderBy('price', 'DESC')->get()->take(2);
        return view('product.showProducts')->with("listOfProducts", $listOfProducts);
    }

    public function addToCart($id, Request $request)
    {
        $data = []; //to be sent to the view
        $quantity = $request->quantity;
        $products = $request->session()->get("products");
        $products[$id] = $quantity;
        $request->session()->put('products', $products);
        return back();
    }

    public function removeCart(Request $request)
    {
        $request->session()->forget('products');
        return redirect()->route('pages.index');
    }

    public function cart(Request $request)
    {
        $products = $request->session()->get("products");
        if ($products) {
            $keys = array_keys($products);
            $productsModels = Product::find($keys);
            $data["products"] = $productsModels;
            return view('product.cart')->with("data", $data);
        }

        return redirect()->route('pages.index');
    }

    public function buy(Request $request)
    {
        $cart = new Cart();
        $cart->setTotal("0");
        $cart->save();

        $precioTotal = 0;

        $products = $request->session()->get("products");
        if ($products) {
            $keys = array_keys($products);
            for ($i = 0; $i < count($keys); $i++) {
                $item = new Item();
                $item->setProductId($keys[$i]);
                $item->setCartId($cart->getId());
                $item->setQuantity($products[$keys[$i]]);
                $item->save();
                $productActual = Product::find($keys[$i]);
                $precioTotal = $precioTotal + $productActual->getPrice() * $products[$keys[$i]];
            }

            $cart->setTotal($precioTotal);
            $cart->save();

            $request->session()->forget('products');
        }

        return redirect()->route('pages.index');
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

    public function create()
    {
        return view('product.createProducts');
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

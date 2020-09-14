<?php

namespace App\Http\Controllers;
//author: Ricardo Avendaño Peña
use App\Comment;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Redis;
//author: Ricardo Avendaño Peña
class CommentController extends Controller
{
    public function create()
    {
        return view('product.createcomment');
    }
    public function save(Request $request)
    {
        Comment::validate($request);
        Comment::create($request->only(["name", "email", "description","rating","product_id"]));
        $product_id = $request->product_id;
        return redirect('/product/showDetails/'.$product_id.'#tabcontent');
    
    }
}

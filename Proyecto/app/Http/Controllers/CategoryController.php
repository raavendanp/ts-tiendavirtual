<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function all()
    {
        //Pagina principal
        return view('category.all');
    }
}

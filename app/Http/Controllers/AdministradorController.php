<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //
    public function _construct(){

        $this->middleware('EsAdmin');
    }
    public function admin(){

        return $this->belongsTo('/catalogue/showCatalogues');
    }
}

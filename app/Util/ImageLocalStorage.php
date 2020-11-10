<?php

namespace App\Util;

use App\Interfaces\ImageStorage;
use Illuminate\Support\Facades\Storage;

class ImageLocalStorage implements ImageStorage
{
    public function store($request, $pid)
    {
        
        if ($request->hasFile('product_image')) {
            Storage::disk('public')->put("test".$pid.".png", file_get_contents($request->file('product_image')->getRealPath()));
        }
    }
    public function delete($pid)
    {
        Storage::disk('public')->delete('test'.$pid.'.png');   
    }

    public function stores3($request, $pid)
    {
        
        if ($request->hasFile('product_image')) {
            Storage::disk('s3')->put("test".$pid.".png", file_get_contents($request->file('product_image')->getRealPath()));
        }
    }
    public function deletes3($pid)
    {
        Storage::disk('s3')->delete('test'.$pid.'.png');   
    }

}

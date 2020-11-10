<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function getTotal()
    {
        return $this->attributes['name'];
    }
}

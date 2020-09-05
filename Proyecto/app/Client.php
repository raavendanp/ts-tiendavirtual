<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Client extends Model
{
    protected $fillable = [
        'first_name', 'email', 'last_name', 'country', 'city', 'zip_code', 'adress', 'telephone',
    ];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    
    public function getFirstName()
    {
        return $this->attributes['first_name'];
    }

    public function setFirstName($first_name)
    {
        $this->attributes['first_name'] = $first_name;
    }
    public function getLasttName()
    {
        return $this->attributes['last_name'];
    }

    public function setLastName($last_name)
    {
        $this->attributes['last_name'] = $last_name;
    }
    public function getEmail()
    {
        return $this->attributes['email'];
    }

    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }
    public function getAdress()
    {
        return $this->attributes['adress'];
    }
    public function setAdress($adress)
    {
        $this->attributes['adress'] = $adress;
    }
    public static function validate(Request $request){
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "adress" => "required",
            "email" => "required",
            "zip_code" => "numeric",
            "city" => "required",
            "country" => "required",
            "telephone" => "required",

        ]);
    }
}


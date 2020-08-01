<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','lastname','email','phone','password','token','country','identity','uniq_id','id_parrain'];



     public static function getToken(int $value)
    {
        $val = '';
        $chaine = 'abcdefghijklmnopqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        srand((double)microtime()*1000000);
        for($i=0; $i<$value; $i++) 
        {
            $val .= $chaine[rand()%strlen($chaine)];
        }

        return $val;
    }
}

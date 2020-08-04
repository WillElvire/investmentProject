<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrateurs extends Model
{
    //
    protected $fillable=['nom','prenom','email','password'];
}

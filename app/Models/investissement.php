<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class investissement extends Model
{
    //

    protected $fillable=['user_id','pack','montant','received','payday','duree','person'];
}

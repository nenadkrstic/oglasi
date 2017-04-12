<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    protected $fillable = [
       'user_id',
       'kategorija',
       'grupa',
       'stanje',
       'cena',
       'naziv',
       'oglas',
       'status',
       
    ];
}

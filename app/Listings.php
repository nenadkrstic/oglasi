<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    protected $fillable = [
       'user_id',
       'kategory',
       'condition',
       'price',
       'value',
       'name',
       'listing',
       'phone',
       'possibility';
       'deal',
       'status',
       
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    protected $fillable = [
       'user_id',
       'category',
       'cond',
       'price',
       'currency',
       'name',
       'listing',
       'phone',
       'possibility',
       'deal',
       'status',
       
    ];


    public function userToListing()
    {
      return $this->belongsTo('Users','id');
    }
}

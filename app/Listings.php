<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Images;
//use App\User;

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
      return $this->belongsTo('App\User','user_id');
    }

    public function listingImage()
    {
      return $this->hasMany('App\Images');
    }

   
}

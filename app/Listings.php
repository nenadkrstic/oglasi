<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Images;
use App\User;

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

    public function image()
    {
      return $this->hasMany('App\Images');
    }

    public function listingPaginate()
    {
      return $this->image->paginate(10);
    }
}

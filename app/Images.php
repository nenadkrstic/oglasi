<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'listings_id',
        'image',
    ];

     public $timestamps = false;

     public function imageToListing()
     {
        return $this->belongsTo('Listings','id');

     }
}

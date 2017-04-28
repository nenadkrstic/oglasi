<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listings;
use App\Images;


class ListingViewsController extends Controller
{
    /*
    *Return listings only for curent category and show them in the view width pagination 
    *
    */
    public function nekretnine()
    {
    	$nekretnine = Listings::where('category','nekretnine')->orderBy('id','desc')->paginate(3);
     
        return view('listingViews.nekretnine', compact('nekretnine','img'));
    }

    /*
    *Return single listing 
    *
    */
    public function singleListing($id)
    {
    	$singleImage = Listings::findOrfail($id)->image;
        $singleListing = Listings::findOrfail($id);

        
    	return view('listing.singleListing',compact('singleListing','singleImage'));
    }
}

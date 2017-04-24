<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listings;

class ListingViewsController extends Controller
{
     public function nekretnine()
    {
    	$nekretnine = Listings::where('category','nekretnine')->orderBy('id','desc')->paginate(3);
    	
    	return view('listingViews.nekretnine', compact('nekretnine'));
    }

    public function singleListing($id)
    {
    	$singleListing = Listings::findOrfail($id);
    	return view('listing.singleListing',compact('singleListing'));
    }
}

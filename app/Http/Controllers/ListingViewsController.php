<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listings;
use App\Images;
use Session;
use App\Route;


class ListingViewsController extends Controller
{

    /*
    *Return listings only for curent category and show them in the view width pagination 
    *
    */
 

    public function listingAll(Request $request)
    {
        $datas = $request->path();
        $datas = Listings::with('image')->where('category',$datas)->orderBy('id', 'DESC')->paginate(10);
        
        return view('listingViews.nekretnine',compact('datas'));
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

    public function deleteAuthListing($id)
    {
        Listings::destroy($id);
        Session::flash('delete','Uspešno ste obrisali oglas');
        return redirect()->back();
    }
}

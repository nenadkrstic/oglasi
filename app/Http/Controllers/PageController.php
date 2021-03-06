<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Input;
use App\Http\Requests\listingRequest;
//use App\Validator;
use Auth;
use Session;
use Image;
use File;
use App\Listings;
use DB;
use App\User;
use App\Images;
class PageController extends Controller
{
     /*
    *Return view home page 
    */
    public function home()
    {
       return view('home');
    }

   

    public function registracija()
    {
        return view('registracija');
    }
    
     //Logout user
    public function logout()
    {
        Auth::logout();
        Session::flash('msg','Hvala na poseti');
        return redirect('/');
    }

  

    /*
    *Check if request is ajax and return respons to home page in Json
    *
    */

     public function getLastListings(Request $request)
    {


        if(Request::ajax())
        {
        $page = $_GET['page'];
        $listings = Listings::with('listingImage')->select('id','price','name','listing','currency')->orderBy('id','desc')->limit($page, 12)->get();

           if($listings) {
               return json_decode($listings);
           }else{
               return json_encode('Ucitani su svi oglasi');
           }
        }
    }

    /*
    *Get all listings from curently Auth user and show in the view;
    *
    */
    public function userListing()
    {
           $user = Auth::user()->ListingToUser()->orderBy('id','desc')->with('listingImage')->get();

      return view('listing.authUserListings', compact('user'));
    }

    
}

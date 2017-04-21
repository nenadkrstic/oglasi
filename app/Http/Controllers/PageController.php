<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class PageController extends Controller
{
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

    //Create listing 
    public function makeListing()
    {
        return view('listing.makeListing');
    }
    
    public function saveListing(listingRequest $request)
    {

     
        /*
        /*Save data into db, table listings
        */
        $userId = Auth::user()->id;
       $list = $request->all();
        
        $list['user_id'] = Auth::user()->id;
        $list['status'] = 1;
        Listings::create($list);
       /*
       /*check if image was sent
       */
       if($request->hasFile('img')){     
            $img = $request->file('img');
            $id = Listings::all()->last()->id;
            $list = $request->all();
                
                
            File::makeDirectory('../public/uploads/list-id-'.$id);
                 
            $count = 0;
            foreach ($img as $i) {
               $count++;
               
               // save multiple images in file
               $file = '.' . $i->getClientOriginalExtension();
               Image::make($i)->resize('400', '400')->save('../public/uploads/list-id-'.$id.'/img'.$count.'.'.$file);

             }  

       }

        

       //  News::create($createNews);

         \Session::flash('img', 'Oglas uspešno objavljen!');

         return redirect()->back();
      

    }

    public function getLastListings()
    {
        $listings = Listings::select('id','price','name','listing','currency')->orderBy('id','desc')->limit(12)->get();
        return json_decode($listings);
    }

    public function userListing()
    {
       $user = Auth::user()->ListingToUser;

      return view('listing.authUserListings', compact('user'));

      
    }

    
}

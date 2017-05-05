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
    *Return view create listing 
    */
    public function makeListing()
    {
        return view('listing.makeListing');
    }

    protected function insertDataListing(listingRequest $request)
    {
        /*
        /*Save data into db, table listings
        */
        $userId = Auth::user()->id;
        $list = $request->all();
        
        $list['user_id'] = Auth::user()->id;
        $list['status'] = 1;
        Listings::create($list);

    }
    
    public function saveListing(listingRequest $request)
    {
       //Call method  insertDataListing     
     $this->insertDataListing( $request);
              
       /*
       /*check if array with image was sent
       */
           
            $img = $request->file('img');
            $id = Listings::all()->last()->id;
            $list = $request->all();
                
             //Create directory for new listing and put uploaded images from array at same dir.  
            File::makeDirectory('../public/uploads/list-id-'.$id);
                 
            $count = 0;
            foreach ($img as $i) {
               $count++;
               
               // save multiple images in file
               $file = '.' . $i->getClientOriginalExtension();
               Image::make($i)->save('../public/uploads/list-id-'.$id.'/img'.$count.''.$file);
               
                /*
                *Create 
                */
                $image['listings_id'] = $id;
                $image['image'] = 'img'.$count.''.$file; 
               
                Images::create($image);

             }  

       

        Session::flash('img', 'Oglas uspešno objavljen!');
        return redirect()->back();
     }

    /*
    *Check if request is ajax and return respons to home page in Json
    *
    */
    public function getLastListings()
    {

        if(Request::ajax())
        {
        $listings = Listings::select('id','price','name','listing','currency')->orderBy('id','desc')->limit(12)->get();
        return json_decode($listings);
        }
    }
    
    /*
    *Get all listings from curently Auth user and show in the view;
    *
    */
    public function userListing()
    {
      $user = Auth::user()->ListingToUser()->orderBy('id','desc')->with('image')->paginate(5);


    

       return view('listing.authUserListings', compact('user'));

      
    }

    
}

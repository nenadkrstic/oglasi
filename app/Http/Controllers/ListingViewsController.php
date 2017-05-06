<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listings;
use App\Images;
use Session;
use App\Route;
use File;
use App\User;

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
    *Return view create listing 
    */
    public function makeListing()
    {
        return view('listing.makeListing');
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
    *Destroy Listing and image folder for curent
    *
    */
    public function deleteAuthListing($id)
    {
        Listings::destroy($id);
        $directory = "../public/uploads/list-id-{$id}";
        File::deleteDirectory($directory);
        Session::flash('delete','Uspešno ste obrisali oglas');
        return redirect()->back();
    }

    public function updateAuthListing($id)
    {   
        $listing = Listings::findOrFail($id);
        
        return view('listing.updateAuthListing', compact('listing'));
    }

     public function saveAuthListing($id, Request $request){

       $updateListing = Listings::findOrFail($id);

         $updateListing->update($request->All());

        // \Session::flash('status','Vest je uspesno promenjea');

        return redirect('/');



     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Input;
use App\Validator;
class PageController extends Controller
{
    public function home()
    {
       return view('home');
    }

    public function nekretnine()
    {
    	return view('listing.nekretnine');
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
        return redirect('home');
    }

    public function makeListing()
    {
        return view('listing.makeListing');
    }

     public function makeListing1()
    {
        return view('listing.makeListing1');
    }

    public function fileUpload(){

       $input = Input::all();
        $rules = array(
            'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if ($validation->fails())
        {
            return Response::make($validation->errors->first(), 400);
        }

        $file = Input::file('file');

        $extension = File::extension($file['name']);
        $directory = path('public').'uploads/'.sha1(time());
        $filename = sha1(time().time()).".{$extension}";

        $upload_success = Input::upload('file', $directory, $filename);

        if( $upload_success ) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }

    public function saveListing(Request $request)
    {
         $all = $request->All();
         return $all;
    }
}

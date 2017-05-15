<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;



class AdminController extends Controller
{
    public function adminDashBoard()
    {
    	return view('admin.adminDashBoard');
    }

    public function searchUsers(Request $request)
    {
    	$name = $request->input('search');
    	$user = User::where('name','like','%'.$name.'%')->where('status','1' )->get();
    	return json_encode($user);
    }

    public function blockUser(Request $request)
    {
        $id = $request->input( 'id' );
        $user = DB::table('users')
            ->where('id', $id)
            ->update(['status' => 0]);
            return json_encode('Updated secsefuli');
    }

    public function blockedUsers(Request $request)
    {

            $users = User::where('status',0)->get();
            return view('admin.blockedUsers',compact('users'));

    }

    public function unblocUser(Request $request)
    {
        $id = $request->input('id');
        $user = User::findOrFail($id);
        $user->status  = '1';
        $user->save();
        return json_encode('uspesno aktiviran korisnik');
    }
}

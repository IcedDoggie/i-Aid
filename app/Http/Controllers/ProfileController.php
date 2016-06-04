<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\User;

use Auth;	


class ProfileController extends Controller
{
    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index()
	{

		return view('auth.update_profile');
	}

    public function update(Request $request)
    {
    	  $userid = Auth::user()->email;
          $User = User::where('email')->find($userid);
          
		  if(!$User) {
		    return response('User not found', 404);
		  }

	
	

		  try {
		    $values = Input::only($UserInfo->getFillable());
		    $UserInfo->update($values);
		  } catch(Exception $ex) {
		    return response($ex->getMessage(), 400);
		  }
		    

		  return view('auth.update_profile');
	}


}

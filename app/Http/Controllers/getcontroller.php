<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\getmodel;
class getcontroller extends Controller
{
    //
     function get(Request $req)
    {
    	//return getmodel::all();
    	return getmodel::select('User_Name')->where([['Email','=',$req->Email],['Password','=',$req->Password]])->get();
    	

    }

}

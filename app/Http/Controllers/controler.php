<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\savemodel;

class controler extends Controller
{
    //
    function save(Request $req)
    {
    	$savemodel=new savemodel;
    	$savemodel->User_Name=$req->User_Name;
    	$savemodel->Email=$req->Email;
    	$savemodel->Password=$req->Password;
    	echo $savemodel->save();
    	//print_r($req->input());

    }
   
}

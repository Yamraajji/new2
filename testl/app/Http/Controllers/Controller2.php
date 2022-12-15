<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Controller2 extends Controller
{
    function dash2()
    {
    	$data['title']="dashboard";
    	return view('dash2',$data);

    } 


}
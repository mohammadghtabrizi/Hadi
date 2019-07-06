<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

    	return view('main-view/home-page');
    }

    public function listingshow(){

    	return view('main-view/listing-show');
    }
}

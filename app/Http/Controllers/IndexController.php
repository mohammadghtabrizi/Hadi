<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sample;

class IndexController extends Controller
{
    public function index(){

    	return view('main-view/home-page');
    }

    public function listingshow(){

    	$listings = Sample::select('jobtitle','post_content','phonenumber','website','postaladdress')
    		->paginate(20);


    	return view('main-view/listing-show')->with([

    		'listings' => $listings,

    		'isnull' => "اطلاعاتی دردسترس نیست"

    	]);
    }
}

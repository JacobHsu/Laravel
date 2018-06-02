<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function store(Request $request)
    {
    	// if( $request->has('name') ) {
    	// 	echo $request->input('name');
    	// } else {
    	// 	echo "no parameter name";
    	// }

    	$res = $request->all();
    	dd($res);
    }
}
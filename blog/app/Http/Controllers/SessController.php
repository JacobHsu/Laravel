<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

class SessController extends Controller
{
    public function session1(Request $request)
    {
        //$request->session()->put('key1','val1');
        //session()->put('key1','val2');
        Session::put('key3','val3');
        Session::put(['key4'=>'val4']);
        Session::push('student','jacob');
    }

    public function session2(Request $request)
    {

        //echo $request->session()->get('key1','val1');
        //echo session()->get('key1','val2');
        echo Session::get('key3','default').PHP_EOL;
        echo Session::get('key4').PHP_EOL;
        $resArr = Session::get('student');
        var_dump($resArr);

        Session::forget('key4');
        
        $res = Session::all();
        dd($res);
    }
}
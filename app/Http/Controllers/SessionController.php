<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function get(Request $request)
    {
       if( $request->session()->has('name')){
           echo $request->session()->get('name');

       }
       else{
           echo "no tata";
       }
    }
    public function set(Request $request)
    {
        # code...

        $request->session()->put('name','jenifer');

        echo "data added";
    }
    public function delte(Request $request)
    {
        # code...

        // $request->session()->pull('name');
        $request->session()->forget('name');

        echo "data removed";
    }
    
}

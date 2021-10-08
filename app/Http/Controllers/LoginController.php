<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('login');

    }
    public function submits(Request $request)
    {
        // return $request->all();
        // return $request->mail;
        // return $request->input('mail');
        $valida=$request->validate([
            'mail'=>"required|email",
            'pass'=>"required"
        ]);
        return $request;

    }
}

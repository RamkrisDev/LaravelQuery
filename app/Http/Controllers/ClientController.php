<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    //
    public function index()
    {
        # code...
        $resource=Http::get("https://jsonplaceholder.typicode.com/posts");
        return $resource->json();
    }
    public function postByid($id)
    {
        # code...
        $resource=Http::get("https://jsonplaceholder.typicode.com/posts/".$id);
        return $resource->json();
    }
    public function add()
    {
        # code...
        $resource=Http::post("https://jsonplaceholder.typicode.com/posts/",[
            "userId"=>1,
            "title"=>"mine1",
            "body"=>"et iusto sed"
        ]);
        return $resource->json();
    }

    public function update()
    {
        # code...
        $resource=Http::put("https://jsonplaceholder.typicode.com/posts/1",[
           
            "title"=>"ramkris",
            "body"=>"hahaha"
        ]);
        return $resource->json();
    }
}

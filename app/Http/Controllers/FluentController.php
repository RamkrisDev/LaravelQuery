<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    //

    public function index()
    {
        # code...
        echo "<h1> Fluent Controller</h1>";


        $slice=Str::of("this is Ram")->after("this is");
        echo "<h3>$slice</h3>";

        $slice2=Str::of("\app\Http\Controller")->afterlast('\\');
        echo $slice2."<br>";

        $string=Str::of('Hello')->append("World!");
        echo "<h3>$string</h3>";

        $string1=Str::of('Hello')->lower();
        echo "<h3>$string1</h3>";

        $slice=Str::of("this is Ram")->replace("Ram","jee");
        echo "<h3>$slice</h3>";


        $slice=Str::of("this is Ram")->title();
        echo "<h3>$slice</h3>";

        $slice=Str::of("this is Ram")->slug();
        echo "<h3>$slice</h3>";


        $slice=Str::of("this is Ram")->substr(8);
        echo "<h3>$slice</h3>";

        $slice=Str::of("/this is Ram")->trim("/");
        echo "<h3>$slice</h3>";
    }
}

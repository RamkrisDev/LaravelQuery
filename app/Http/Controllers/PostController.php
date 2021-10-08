<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts= DB::table('posts')->get();
        return view('post',['posts'=>$posts]);
        // return view('post',compact($posts));
    }

    public function add()
    {
        # code...
        return view('add');
    }
    public function addpost(Request $request)
    {
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back()->with('post_done',"post created successfully");
    }

    public function getId($id)
    {
        $posts= DB::table('posts')->where('id',$id)->first();
        return view('single',['posts'=>$posts]);
        // return view('post',compact($posts));
    }


    //joins
    //innerjoin
    public function innerJoin()
    {
        $req=DB::table('users')
        ->join('posts','users.id','=','posts.user_id')
        ->select('users.name','posts.title','posts.body')
        ->get();
        return $req;
    }

    //leftjoin
    public function leftJoin()
    {
        $req=DB::table('users')
        ->leftjoin('posts','users.id','=','posts.user_id')
        ->get();
        return $req;
    }
    public function rightJoin()
    {
        $req=DB::table('users')
        ->rightjoin('posts','users.id','=','posts.user_id')
        ->get();
        return $req;
    }




    public function modelData(Type $var = null)
    {
       $post=Post::all();
       return $post; 
    }


}
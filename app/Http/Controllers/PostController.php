<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('post_id','desc')->get();
        $data = compact('posts');
        return view('index')->with($data);
    }

    public function create()
    {
        $posts = new Posts;
        $url = url('post/store');
        $heading = "Add New Post";
        $data = compact('posts','url','heading');
        return view('post')->with($data);
    }

    public function store(Request $request)
    {
        $posts = new Posts;
        $posts->post_title = $request['post_title'];
        $posts->post_desc = $request['post_desc'];

        $filename = time().'.'.  $request->file('post_img')->getClientOriginalExtension();
        $request->file('post_img')->move(public_path('/images/posts'), $filename);
        $posts->post_img =  $filename;

        $posts->post_tag = $request['post_tag'];
        $posts->status = $request['status'];
        $posts->save();

        return redirect('post/all');
    }

    public function allpost()
    {
        $posts = Posts::all();
        $data = compact('posts');
        return view('all')->with($data);
    }
}

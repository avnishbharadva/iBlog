<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
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

        return redirect('post/create');
    }
}
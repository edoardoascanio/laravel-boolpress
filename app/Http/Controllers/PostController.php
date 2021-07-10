<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $data = [
            'posts' => Post::orderBy('id','DESC')->get()
        ];
        return view('posts.index', $data);
    }


    public function create()
    {
        return view("posts.create");
    }


    public function store(Request $request)
    {
        $newPostData = $request->all();

        $newPost = new Post();
        $newPost->title = $newPostData["title"];
        $newPost->post = $newPostData["post"];
        $newPost->save();

        return redirect()->route('posts.show', $newPost->id);
    }


    public function show(Post $post)
    {
        return view("posts.show",[
            "post" => $post
        ]);
    }


    public function edit($id){
        $post = Post::findOrFail($id);

        return view('posts.edit', [
            'post' => $post
        ]);    
    }


    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        $formData = $request->all();

        $post->update($formData);

        return redirect()->route("post.show", $post->$id);
    }


    public function destroy($id) {
        $post = Post::findOrFail($id);
        
        $post->delete();

        return redirect()->route("posts.index");
    }
}



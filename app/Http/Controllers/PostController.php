<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $data = [
            'posts' => Post::all()
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
        $newPost->title = $newPostData["title "];
        $newPost->description = $newPostData["description"];
        $newPost->created_data = $newPostData["created_data"];
        $newPost->save();

        return redirect()->route('posts.show', $newPost->id);
    }


    public function show(Post $slug) {
        $post = Post::where('slug', $slug)->first();

        if(!$post){
            abort(404);
        }

        $data = ['post' => $post];

        return view('posts.show', $data);
    }


    public function edit($id){
        $post = Post::findOrFail($id);

        return view('posts.edit',[
            'post' => $post
        ]);    
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route("posts.index");
    }
}



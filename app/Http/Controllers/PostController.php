<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('welcome', ['posts' => $posts]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $rules = [
            'Name' => 'required|max:50',
            'Message' => 'required',
        ];

        $messages = [
            'title.required' => 'The title field is required.',
            'content.required' => 'The content field is required.',
        ];

        $validatedData = $request->validate($rules, $messages);
          $user = Auth()->user();
          $post = new Post;
          $post->title = $request->Name;
          $post->content = $request->Message;
          $post->user_id = $user->id;
          $post->save();

          return redirect()->back();
    }

    public function edit(Request $request)
    {

        $post = Post::find($request->id);
        return view('edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'Name' => 'required|max:50',
            'Message' => 'required',
        ];

        $messages = [
            'title.required' => 'The title field is required.',
            'content.required' => 'The content field is required.',
        ];

        $validatedData = $request->validate($rules, $messages);
          $user = Auth()->user();
          $post = Post::find($id);
          $post->title = $request->Name;
          $post->content = $request->Message;
          $post->update();

          return redirect()->back();
    }

    public function delete(Request $request)
    {

        $post = Post::find($request->id);
        $post->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet <strong>consectetur</strong> adipisicing elit.',
        ];
        $posts = array_fill(0, 15, $post);

        $ip = $request->ip();

        return view('user.posts.index', compact('posts', 'ip'));
    }


    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
//        $title = $request->input('title');
//        $content = $request->input('content');
//
//        dd($title, $content);

        return redirect()->route('user.posts.show', 123);
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet <strong>consectetur</strong> adipisicing elit.',
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet <strong>consectetur</strong> adipisicing elit.',
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
//        $title = $request->input('title');
//        $content = $request->input('content');
//
//        dd($title, $content);

        return redirect()->back();
    }

    public function destroy($post)
    {
        return redirect()->route('user.posts');
    }

    public function like($post)
    {
        return 'Лайк + 1';
    }
}

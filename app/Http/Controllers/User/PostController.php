<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet <strong>consectetur</strong> adipisicing elit.',
        ];
        $posts = array_fill(0, 15, $post);

        return view('user.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        dd($title, $content);

        return 'Запрос на создание поста';
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

    public function update(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        dd($title, $content);

        return 'Запрос на редактирование поста';
    }

    public function destroy($post)
    {
        return 'Запрос на удаление поста';
    }

    public function like($post)
    {
        return 'Лайк + 1';
    }
}

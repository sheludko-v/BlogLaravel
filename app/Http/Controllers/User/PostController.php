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

    public function store()
    {
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

    public function update()
    {
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

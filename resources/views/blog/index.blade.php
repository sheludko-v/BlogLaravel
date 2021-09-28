@extends('layouts.base')

@section('page.title', 'Список постов')

@section('content')
    <h1 class="mb-5">Список постов</h1>

    @if(empty($posts))
        Нет ни одного поста
    @else
        @foreach($posts as $post)
            <h5>
                <a href="{{route('blog.show', $post->id)}}">
                    <p>{{$post->title}}</p>
                </a>
            </h5>
            <p>
                {!! $post->content !!}
            </p>
        @endforeach
    @endif

@endsection


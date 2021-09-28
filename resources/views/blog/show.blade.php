@extends('layouts.base')

@section('page.title', $post->title)

@section('content')

    <h1 class="m-5">{{$post->title}}</h1>

   <p>
       {!! $post->content !!}
   </p>

    <a href="{{route('blog')}}">Назад</a>

@endsection


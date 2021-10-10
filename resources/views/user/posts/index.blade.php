@extends('layouts.main')

@section('page.title', 'Мои посты')

@section('main.content')

    <x-title>
        <p>{{__('Личный кабинет ')}}</p>
        <p>{{__('IP: ')}}{{$ip}}</p>

        <x-slot name="right">
            <x-button-link href="{{route('user.posts.create')}}">
                {{__('Создать пост')}}
            </x-button-link>
        </x-slot>
    </x-title>

    @if(empty($posts))
        {{__('Нет ни одного поста')}}
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="m-3 border p-3 col-md-2 text-center" style="background-color: white">
                    <h2 class="h6">
                        <a href="{{route('user.posts.show', $post->id)}}">
                            {{$post->title}}
                        </a>
                    </h2>
                    <div class="small text-muted">
                        {{now()->format('d.m.Y')}}
                    </div>
                </div>
            @endforeach
        </div>


    @endif

@endsection



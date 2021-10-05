@extends('layouts.base')

@section('page.title', 'Мой блог')

@section('content')

    <section>
        <x-container>
            <x-title>
                {{__('Список постов')}}
            </x-title>
            @if(empty($posts))
                {{__('Нет ни одного поста')}}
            @else
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-12 col-md-4">
                            <x-post.card :post="$post" />
                        </div>
                    @endforeach
                </div>
            @endif
        </x-container>
    </section>

@endsection


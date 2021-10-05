<x-card>
    <x-card-body>
        <h2 class="h5">
            <a href="{{route('blog.show', $post->id)}}">
                <p>
                    {{$post->title}}
                </p>
            </a>
        </h2>
        <p class="small text-muted">
            {{now()->format('d.m.Y H:i')}}
        </p>
    </x-card-body>
</x-card>

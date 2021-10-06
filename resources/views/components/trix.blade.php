<input type="hidden" {{$attributes}} id="{{$name}}">
<trix-editor input="{{$name}}"></trix-editor>

@once
    @push('css')
        <link rel="stylesheet" href="/css/trix.css"></link>
    @endpush

    @push('js')
        <script src="/js/trix.js"></script>
    @endpush
@endonce

@if($errors->any())
    <div id="alert" class="my-alert-d">
        <ul class="mb-0 p-2">
            @foreach($errors->all() as $message)
                <li class="no-decor">
                    {{$message}}
                </li>
            @endforeach
        </ul>
    </div>
@endif

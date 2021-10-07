@props(['value' => null, 'options' => []])

<select {{$attributes->class([
    'form-control',
    'mb-2',
])}}>
    @foreach($options as $key => $item)
        <option value="{{$key}}" {{$key == $value ? 'selected' : null}}>
            {{$item}}
        </option>
    @endforeach
</select>

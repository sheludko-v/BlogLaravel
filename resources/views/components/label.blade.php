@props(['required' => false])

<label {{$attributes->class([
    ($required ? 'required' : ''),
])}}  class="mb-2">
    {{$slot}}
</label>

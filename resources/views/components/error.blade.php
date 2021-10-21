@props(['name' => ''])

@error($name)
<div class="small text-danger mt-1">
    {{$message}}
</div>
@enderror

@props([
'backcolor' => '#2d3748',
'color' => 'white',
])

<button {{$attributes->merge([
    'type' => 'button',
    'style' => "background-color: {$backcolor}; color: {$color};",
])->class([
    "btn",
])}} >
    {{$slot}}
</button>

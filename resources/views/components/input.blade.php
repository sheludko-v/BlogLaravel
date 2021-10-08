<input {{$attributes->class([
    'form-control',
    'mb-2',
])->merge([
    'type'=>'text',
    'value'=> old($attributes->get('name')),
])}}>

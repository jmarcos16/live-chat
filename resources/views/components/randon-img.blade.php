@props(['id'])
<img 
    {{$attributes->merge([
        'src' => "https://api.slingacademy.com/public/sample-photos/{$id}.jpeg",
        'alt' => $id,
        'class' => 'rounded-full'  
    ])}}>
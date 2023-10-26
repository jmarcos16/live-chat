@php
    $rand = rand(1, 10);
@endphp

<img 
    {{$attributes->merge([
        'src' => "https://api.slingacademy.com/public/sample-photos/{$rand}.jpeg",
        'alt' => $rand,
        'class' => 'rounded-full'  
    ])}}>
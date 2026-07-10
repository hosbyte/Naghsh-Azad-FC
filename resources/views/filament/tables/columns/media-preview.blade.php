@php
    $path = Storage::url($getState());

    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    $images = ['jpg','jpeg','png','gif','webp'];

    $videos = ['mp4','webm','ogg'];
@endphp

@if(in_array($extension, $images))

    <img
        src="{{ $path }}"
        style="width:100px;height:70px;object-fit:cover;border-radius:8px;"
    >

@elseif(in_array($extension, $videos))

    <video
        width="120"
        height="70"
        controls
    >
        <source src="{{ $path }}">
    </video>

@endif
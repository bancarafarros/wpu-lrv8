@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category: {{ $category }}</h1>

<article class="mb-5">
    @foreach ($posts as $post)
            <h3>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h3>
        {{-- <h5>By: {{ $post->author }}</h5> --}}
        <p>{{ $post->excerpt }}</p>
    @endforeach
</article>
@endsection
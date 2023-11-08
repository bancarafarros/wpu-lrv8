@extends('layouts.main')

@section('container')
<article class="mb-3">
    <h2>{{ $post["title"] }}</h2>
    <h5>By: {{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>

    <a href="/blog">Back to Post</a>
@endsection
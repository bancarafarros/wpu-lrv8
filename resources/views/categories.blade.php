@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>

<article class="mb-5">
    @foreach ($categories as $category)
    <ul>
        <li>
            <h3>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h3>
        </li>
    </ul>
    @endforeach
</article>
@endsection
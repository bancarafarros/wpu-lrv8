@extends('layouts.main')

@section('container')
<article class="mb-3">
    <h3>{{ $post->title }}</h3>
    {{-- <h5>By: {{ $post->author }}</h5> --}}
    {{-- {{ $post->body }} --}}
    {!! $post->body !!} {{-- buat eksekusi tag html --}}

    <a href="/posts">Back to Post</a>

    {{-- Post::create([
        'title' => 'Judul Tiga',
        'slug' => 'judul-tiga',
        'excerpt' => 'Lorem ipsum dolor sit amet',
        'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ex nihil repellendus harum ipsum dolore aperiam facilis natus cumque asperiores iste eum magni atque corporis similique dolores est facere corrupti laborum, quas itaque.</p> <p>Quibusdam, voluptate aperiam amet, aspernatur hic eos iusto eaque, corrupti ab excepturi molestiae magnam dolores doloremque error fugiat dolorem quidem nisi est illo officiis veniam nesciunt at nihil sunt.</p> Nostrum esse nisi repudiandae excepturi. <p>Ipsum aliquam unde autem fugit, dolorum consectetur veritatis modi quaerat? Ducimus error voluptate placeat, perferendis blanditiis temporibus nisi officiis, velit quae quasi illum nostrum voluptatibus quaerat hic? Veritatis provident delectus, quia necessitatibus consequuntur deleniti.</p> <p>Earum rem quod ipsam totam pariatur itaque reprehenderit perferendis sequi, voluptatum veniam fugiat quisquam repellendus, cum enim impedit dicta nam culpa soluta eius voluptatibus eveniet. Ab repellat pariatur hic natus maiores illo labore blanditiis molestias repudiandae, nobis deleniti eaque incidunt rerum tempora nihil quidem sapiente? Quos perferendis iure possimus.</p>'
    ]) --}}
@endsection
<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Uyee",
            "slug" => "uyee",
            "author" => "Charr",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima harum ullam voluptatibus rem, dolorum quae, exercitationem quidem obcaecati voluptatum vitae inventore a necessitatibus quaerat cumque laborum incidunt cum cupiditate assumenda. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium soluta commodi quibusdam accusamus veniam eos. Explicabo sit sunt pariatur tenetur. Natus sunt nulla modi. Dolore placeat minima consequatur nam architecto?",
        ],
        [
            "title" => "Hahay",
            "slug" => "hahay",
            "author" => "Charr",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima harum ullam voluptatibus rem, dolorum quae, exercitationem quidem obcaecati voluptatum vitae inventore a necessitatibus quaerat cumque laborum incidunt cum cupiditate assumenda. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium soluta commodi quibusdam accusamus veniam eos. Explicabo sit sunt pariatur tenetur. Natus sunt nulla modi. Dolore placeat minima consequatur nam architecto?",
        ]
    ];

    public static function all()
    {
        // return self::$blog_posts; // property static kalo mau dipake dikasih self:: kalo biasa pake $this

        return collect(self::$blog_posts); // pake collect buat bikin collection
    }

    public static function find($slug)
    {
        $posts = static::all(); // kalo mau pake methode static pake keyword static

        // $post = [];  // 33 sampe 40 dikomen soalnya pake collection
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        // return $post;

        return $posts->firstWhere('slug', $slug);
    }
}

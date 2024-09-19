<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Nabilah Atika',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem provident debitis aut qui, nihil, reprehenderit quisquam maxime architecto magnam, eaque quae repellendus vero. Iste est dolorem facere harum praesentium iure?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Nabilah Atika',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, error voluptates! Veniam, dolore facilis itaque maxime non aspernatur impedit ipsum inventore laboriosam debitis fuga minus nulla odit culpa repellendus vitae.'
            ]
        ];
    }


    public static function find($slug):array {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
       $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

       if(! $post) {
        abort(404);
       }

       return $post;
    }
}

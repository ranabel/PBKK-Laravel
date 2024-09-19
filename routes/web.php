<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Nabilah Atika', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/reports', function () {
    return view('reports', ['title' => 'Reports']);
});


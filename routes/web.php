<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rizal Baihaqi', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'Belajar-Laravel-11',
            'title' => 'Belajar Laravel 11',
            'author' => 'Rizal Baihaqi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa culpa quasi, voluptatibus iure odit tempora, eos amet deleniti tenetur corporis atque enim adipisci officia libero veniam iusto hic consequatur nemo.'
        ],
        [
            'id' => 2,
            'slug' => 'Kemerdekaan-Indonesia',
            'title' => 'Kemerdekaan Indonesia',
            'author' => 'Rizal Baihaqi',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias aliquid deserunt iure molestiae corrupti veritatis facere placeat perferendis! Perspiciatis laudantium fugit error numquam ea, fugiat sit aliquam recusandae id quo iusto aperiam quod deleniti excepturi voluptatem neque veniam quibusdam officiis?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'Belajar-Laravel-11',
            'title' => 'Belajar Laravel 11',
            'author' => 'Rizal Baihaqi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa culpa quasi, voluptatibus iure odit tempora, eos amet deleniti tenetur corporis atque enim adipisci officia libero veniam iusto hic consequatur nemo.'
        ],
        [
            'id' => 2,
            'slug' => 'Kemerdekaan-Indonesia',
            'title' => 'Kemerdekaan Indonesia',
            'author' => 'Rizal Baihaqi',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias aliquid deserunt iure molestiae corrupti veritatis facere placeat perferendis! Perspiciatis laudantium fugit error numquam ea, fugiat sit aliquam recusandae id quo iusto aperiam quod deleniti excepturi voluptatem neque veniam quibusdam officiis?'
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
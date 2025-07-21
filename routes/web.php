<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [ 'title' => 'Home Page' ]);
});

Route::get('/blog', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();

    return view('posts', [ 'title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);

    return view('post', [
        'title' => 'Single Article',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $post = Post::find($slug);

    // $posts = $user->posts->load(['author', 'category']);
    $posts = $user->posts;

    return view('posts', [
        'title' => count($posts) . 'Articles by ' . $user->name,
        'posts' => $posts
    ]);
});

Route::get('/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load(['author', 'category']);
    $posts = $category->posts;

    return view('posts', [
        'title' => 'Articles in ' . $category->name,
        'posts' => $posts
    ]);
});

Route::get('/about', function () {
    return view('about', [ 'title' => 'About Page' ]);
});

Route::get('/contact', function () {
    return view('contact', ['owner' => 'Adeng', 'title' => 'Contact Page']);
});

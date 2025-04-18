{{-- @dd($posts) --}}
@extends('layouts.app')

@section('content')
<h1>Posts {{ $title_halaman }}</h1>

@if ($posts->count() > 0)
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
@else
    <p>No post found.</p>
@endif

    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>Author : <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> | Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/post/{{ $post->slug }}">Read more...</a>
    </article>
    @endforeach
@endsection



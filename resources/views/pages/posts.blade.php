{{-- @dd($posts) --}}
@extends('layouts.app')

@section('content')
<h1>Posts {{ $title_halaman }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>Author : <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> | Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/post/{{ $post->slug }}">Read more...</a>
    </article>
    @endforeach
@endsection



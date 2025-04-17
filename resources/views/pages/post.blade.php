{{-- @dd($post) --}}
@extends('layouts.app')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By : <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> -> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{!! $post->body !!}</p>
        <h2><a href="/blog">Back to blog</a></h2>
    </article>
@endsection
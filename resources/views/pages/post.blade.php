{{-- @dd($post) --}}
@extends('layouts.app')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By : {{ $post->author }}</p>
        <p>{{ $post->body }}</p>
        <h2><a href="/blog">Back to blog</a></h2>
    </article>
@endsection
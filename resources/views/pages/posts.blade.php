{{-- @dd($posts) --}}
@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>Author : {{ $post->user->name }} | Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/post/{{ $post->slug }}">Read more...</a>
    </article>
    @endforeach
@endsection



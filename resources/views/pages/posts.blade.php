{{-- @dd($posts) --}}
@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2><a href="/post/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
        <p>Author : {{ $post['author'] }}</p>
        <p>{{ $post['body'] }}</p>
    </article>
    @endforeach
@endsection



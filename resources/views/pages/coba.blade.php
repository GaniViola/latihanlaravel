@extends('layouts.app')
@section('content')
    @foreach ($posts->posts as $post)
        <a href="post/{{ $post->slug }}">{{ $post->title }}</a>
    @endforeach
@endsection
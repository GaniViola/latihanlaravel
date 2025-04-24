{{-- @dd($post) --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p>By : <a href="/blog?user={{ $post->user->username }}">{{ $post->user->name }}</a> -> <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <img src="{{ asset('img/'.$post->category->slug.'.jpg') }}" class="w-100 custom-img" alt="{{ $post->category->name }}">
            <article class="my-3">
                <p>{!! $post->body !!}</p>
            </article>
            <a href="/blog" class="btn btn-primary"><</a>
        </div>
    </div>
    
</div>
    
@endsection
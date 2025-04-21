{{-- @dd($posts) --}}
@extends('layouts.app')

@section('content')
<h1>Posts {{ $title_halaman }}</h1>

@if ($posts->count() > 0)
    <div class="card mb-3">
        <img src="{{ asset('img/'.$posts[0]->category->slug.'.jpg') }}" alt="" class="card-img-top">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="{{ $posts[0]->slug }}" class="text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-body-secondary">
                    Author : <a href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> | Category : <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">More</a>
        </div>
    </div>
@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3 d-flex">
                <div class="card h-100 w-100">
                    <div class="position-absolute bg-dark px-3 py-2 text-white rounded-2"><a href="/categories/{{ $post->category->slug }}" class="text-white">{{ $post->category->name }}</a></div>
                    <img src="{{ asset('img/'.$post->category->slug.'.jpg') }}" class="card-img-top" alt="{{ $post->category->name }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark">
                            <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                        </h5>
                        <p>
                            <small class="text-muted">
                                Author : <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a>
                                {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <div class="mt-auto">
                            <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection



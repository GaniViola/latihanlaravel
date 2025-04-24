{{-- @dd($posts) --}}
@extends('layouts.app')

@section('content')
<div class="row d-flex align-items-center">
    <!-- Kolom kiri: H1 -->
    <div class="col-md-6">
        <h1 class="m-1">{{ $title_halaman }}</h1>
    </div>

    <!-- Kolom kanan: Form -->
    <div class="col-md-6">
        <form action="/blog">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @elseif (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">            
            @endif
            <div class="input-group mb-1 justify-content-end">
                <input type="text" class="form-control" aria-label="Search" name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count() > 0)
    <div class="card mb-3 mt-2">
        <img src="{{ asset('img/'.$posts[0]->category->slug.'.jpg') }}" alt="" class="card-img-top">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="{{ $posts[0]->slug }}" class="text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-body-secondary">
                    Author : <a href="/blog?user={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> | Category : <a href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">More</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3 d-flex">
                    <div class="card h-100 w-100">
                        <div class="position-absolute bg-dark px-3 py-2 text-white rounded-2"><a href="/blog?category={{ $post->category->slug }}" class="text-white">{{ $post->category->name }}</a></div>
                        <img src="{{ asset('img/'.$post->category->slug.'.jpg') }}" class="card-img-top" alt="{{ $post->category->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-dark">
                                <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                            </h5>
                            <p>
                                <small class="text-muted">
                                    Author : <a href="/blog?user={{ $post->user->username }}">{{ $post->user->name }}</a>
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
@else
    <p class="text-center fs-4">No post found.</p>
@endif

{{ $posts->links() }}

@endsection



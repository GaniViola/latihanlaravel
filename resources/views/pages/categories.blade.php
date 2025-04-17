@extends('layouts.app')

@section('content')
    @foreach ($categories as $category)
        <h1><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h1>
    @endforeach
@endsection
@extends('layouts.app')

@section('content')
    @foreach ($categories as $category)
        <p><a href="coba/{{ $category->slug }}">{{ $category->name }}</a></p>
    @endforeach
@endsection
@extends('layouts.main')

@section('section')
    <div class="my-5 container-xl">
        <img src="/asset/BookMockup.png" class="img-description img-fluid img-thumbnail d-flex flex-grow-1" alt="...">
        <p class="mt-3">
            Title: {{ $post->title }} <br><br>
            Author:
            <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                {{ $post->author->name }}
            </a> <br><br>
            Category:
            <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}
            </a> <br><br>
            Synopsis: <br> {!! $post->body !!}
        </p>
        <a href="/posts" class="text-decoration-none">Back to Posts</a>
    </div>
@endsection

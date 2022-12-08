@extends('dashboard.layouts.main')

@section('container')
    <div class="my-5 container-xl">
        <div class="my-3">
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my posts</a>
            <a href="" class="btn btn-warning mx-1"><span data-feather="edit"></span>Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>
        </div>
        <img src="/asset/BookMockup.png" class="img-description img-fluid img-thumbnail d-flex flex-grow-1" alt="...">
        <p class="mt-3">
            Title: {{ $post->title }} <br><br>
            Author: {{ $post->author->name }} <br><br>
            Category:{{ $post->category->name }} <br><br>

            Synopsis: <br> {!! $post->body !!}
        </p>
        <a href="/posts" class="text-decoration-none">Back to Posts</a>
    </div>
@endsection

@extends('dashboard.layouts.main')

@section('container')
    <div class="my-5 container-xl">
        <div class="my-3">
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mx-1"><span
                    data-feather="edit"></span>Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn bg-danger" onclick="return confirm('Are you sure?')">Delete<span data-feather="x-circle">
                </button>
            </form>
        </div>
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}"
                class="img-description img-fluid img-thumbnail d-flex flex-grow-1" alt="...">
        @else
            <img src="/asset/BookMockup.png" class="img-description img-fluid img-thumbnail d-flex flex-grow-1"
                alt="...">
        @endif
        <p class="mt-3">
            Title: {{ $post->title }} <br><br>
            Author: {{ $post->author->name }} <br><br>
            Category:{{ $post->category->name }} <br><br>

            Synopsis: <br> {!! $post->body !!}
        </p>
    </div>
@endsection

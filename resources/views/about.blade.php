@extends('layouts.main')


@section('section')
    @foreach ($posts as $post)
        <p class="fs-1">
            •
            <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                {{ $post->author->name }}
            </a>
        </p>
        <br>
    @endforeach
@endsection

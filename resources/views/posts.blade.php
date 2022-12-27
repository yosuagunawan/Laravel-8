@extends('layouts.main')


@section('section')
    <h1 class="my-5 bg-primary text-light p-3 rounded">{{ $title }}</h1>


    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}"> <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>



    {{-- @if ($posts->count()) --}}
    <div class="card mb-3 pt-4">
        @if ($posts[0]->image)
            <img src="{{ asset('storage/' . $posts[0]->image) }}"
                class="img-description img-fluid img-thumbnail d-flex flex-grow-1" alt="...">
        @else
            <img src="/asset/Karina.jpg" class="card-img-top img" alt="...">
        @endif
        <div class="card-body text-center">
            <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    {{ $posts[0]->title }}
                </a></h2>
            <p>By:
                <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">
                    {{ $posts[0]->author->name }}
                </a>
                <br>
                <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                    {{ $posts[0]->category->name }}
                </a>
                <br>
                {{ $posts[0]->created_at->diffForHumans() }}
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <button type="button" class="btn btn-primary">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-light">
                    Detail
                </a>
            </button>
        </div>
    </div>
@endsection


@section('container')
    @foreach ($posts->skip(1) as $post)
        <div class="col">
            <div class="card p-3 my-2">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-thumbnail img-fluid" alt="...">
                @else
                    <img src="/asset/BookMockup.png" class="img-thumbnail img-fluid" alt="...">
                @endif
                <article class="mainPost">
                    <h2>
                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                            {{ $post->title }}
                        </a>
                    </h2>

                    <p>By:
                        <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                            {{ $post->author->name }}
                        </a>
                        <br>
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                            {{ $post->category->name }}
                        </a>
                    </p>

                    <p>{{ $post->excerpt }}</p>

                    <button type="button" class="btn btn-primary">
                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-light">
                            Detail
                        </a>
                    </button>
                </article>
                {{-- <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div> --}}
            </div>
        </div>
    @endforeach
    <div class="my-3">
        {{ $posts->links() }}
    </div>
@endsection

{{-- No Post --}}
{{-- @else
<p class="text-center fs-4">No Post Found.</p>
@endif --}}

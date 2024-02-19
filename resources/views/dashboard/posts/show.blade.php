@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <form action="/dashboard/posts" method="GET" class="d-inline">
                    @csrf
                    <button class="btn btn-success border-0">
                        <i class="bi bi-arrow-left"></i>
                        Back to dashboard
                    </button>
                </form>
                <form action="/dashboard/posts/{{ $post->slug }}/edit" class="d-inline">
                    @csrf
                    @method('put')
                    <button class="btn btn-warning">
                        <i class="bi bi-pencil"></i>
                        Edit
                    </button>
                </form>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <i class="bi bi-x-circle"></i>
                        Delete
                    </button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3 img-fluid" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3 img-fluid" alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
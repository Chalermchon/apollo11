@extends('layouts.master')

@section('content')

    <div class="container">
        <h1>{{$message}}</h1>
        <div class="d-flex flex-row-reverse">
            <p>{{ date('j M Y H:i:s') }}</p>
        </div>
    </div>

    <hr>

    <div class="container p-3">
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-header">
                    <h3>{{$post->id}}.) {{$post->title}}</h3>
                </div>
                <div class="card-body">
                    <p>{{$post->detail}}</p>
                    <div class="pl-5">
                        <p>URL: {{ url('posts/' . $post->id) }}</p>
                        {{-- Recommend --}}
                        <p>Action: {{ action('PostsController@show', ['id' => $post->id]) }}</p>
                        <p>Route Name: {{ route('posts.show', ['id' => $post->id]) }}</p>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-secondary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection

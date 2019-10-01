@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <hr>
        <h5>{{ $post->detail }}</h5>
    </div>
@endsection

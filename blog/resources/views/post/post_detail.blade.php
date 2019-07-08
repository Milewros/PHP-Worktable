@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Post<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.form') }}">Create Post</a>
            </li>
        </ul>
        </nav>
        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <h1>{{ $post->title }} </h1>
            <div class="col-sm-8 blog-main">
                <p>{{ $post-> description }} </p>
            </div>
            <a href="{{ route('post.edit', ['id' => $post->id]) }}">
            <button type="button" class="btn btn-warning">Edit post</button></a>
            <a href="{{ route('post.delete', ['id' => $post->id]) }}">
            <button type="button" class="btn btn-danger">Delete post</button></a>
        </main>
        </div>
    </div>
@endsection


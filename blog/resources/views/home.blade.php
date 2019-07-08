@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="row">
        <nav class="col-sm3 col-md-2 d-none d-sm-block bg-light sidebar">
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
            <h3> Welcome {{Auth::user()->name}} </h3>

            <h2> Posts
                <a href="{{ route('post.form') }}">
                    <button type="button" class="btn btn-warning btn-sm">Create Post</button>
                </a>
            </h2>
            @if(Session::has('success'))
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="message" class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                </div>
            </div>
            @endif
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Learn more</th>
                    <th>Created on</th>
                </tr>
                </thead>
                <tbody>
                    @if($posts)
                        @foreach($posts as $post)
                        <tr>
                            <th> {{$loop -> iteration}}</th>
                            <td> {{$post -> title }}</td>
                            <td> {{$post -> name }}</td>
                            <td> <a href="{{ route('post.detail', ['id' =>$post->id]) }}">View More</a> </td>
                            <td> {{ Carbon\Carbon::parse($post->created_at)->format('h:i:s d.m.y')}}</td>
                        </tr>
                        @endforeach
                    @else
                        <p class="text-center text-primary">No Posts created yet!</p>
                    @endif
                    </tbody>

        </main>
    </div>
    </div>
@endsection

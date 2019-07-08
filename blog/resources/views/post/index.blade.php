@extends('layouts.master')

@section('title')
    Dobrodošli na naš blog
@endsection

@section('content')
    <main role="main" class="container" style="margin-top:5ph">
        <div class="row">
            <div class="col-sm-8 blog-main">
            @if($posts)
            @foreach($posts as $post)
            <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }} </h2>
            <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-y') }} by<a href="#"> {{$post->name}}</a><i></small></p>

            <p>{{ \Illuminate\Support\Str::words($post->description, 30, '...') }}</p>
                <blockquote>
                    <a href="{{route ('post.read', ['id' => $post->id])}}" class="btn btn-warning btn-sm">Learn more</a>
                </blockquote>
            </div>
            @endforeach
            @endif

        <nav class="blog-pagination">
            {{ $posts ->links() }}
        </nav>

        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module">
                <h4>Posljednje objave</h4>
                <ol class="list-unstyled">
                @foreach($archives as $archive)
                <li><a href="{{ route ('post.read', ['id' => $archive->id])}}">{{ \Illuminate\Support\Str::words($archive->title, 6, '...') }}</a></li>
                @endforeach
                </ol>
            </div>

            <div class="sidebar-module">
                <h4>Drugdje</h4>
                <ol class="list-unstyled">
                <li><a href="#" style="color:orange">GitHub</a></li>
                <li><a href="#" style="color:orange">Twiter</a></li>
                <li><a href="#" style="color:orange">Facebook</a></li>
                 </ol>
            </div>
        </aside>
        </div>
    </div>

    </main>
@endsection

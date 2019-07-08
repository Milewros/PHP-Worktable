@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('home') }}">Post<span class="sr-only">(current)</span></a>
        </li>
    </ul>
    </nav>
<main role="main" class="col-sm-9 ml-sm-auto col-md10 pt-3">
    <h1>Create Post</h1>
    <div class="col-md-4">
        <form method="post" action="{{ route('post.form') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="id-title" name="title"
                aria-describedby="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="descripton">Description</label>
                <textarea class="form-control" id="id-description" rows="3" name="description"
                placeholder="Description"></textarea>
            </div>
            <button type="submit" class="btn btn-warning">Create post</button>
        </form>
        </div>
</main>
    </div>
</div>
@endsection

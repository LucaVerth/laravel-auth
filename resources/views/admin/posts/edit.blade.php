@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Edit post: {{ $post->title }}</h1>
        </div>
        <form action="{{ route('admin.posts.store') }}" method="POST" class="row my-3">
            @csrf
            <div class="col-8 form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                    placeholder="Post title here...">
            </div>
            <div class="col-8 form-group">
                <label for="content">Post Content</label>
                <textarea name="content" type="text" class="form-control" id="exampleInputEmail1"
                    placeholder="Type something..."></textarea>
            </div>
            <div class="col-8">
                <button type="submit" class="btn btn-success">Create Post</button>
            </div>
        </form>
    </div>
@endsection

@section('title')
    Edit Post
@endsection

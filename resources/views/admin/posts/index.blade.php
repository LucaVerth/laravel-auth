@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Posts List</h1>
        </div>
        <div class="row">
            <a class="btn btn-primary" href="{{ route('admin.posts.create')}}">Add new Post</a>
        </div>
        <div class="row">
            <table class="table my-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th colspan="3" scope="col">Content</th>
                        {{-- <th scope="col">Slug</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            {{-- <td>{{$post->slug}}</td> --}}
                            <td><a class="btn btn-primary" href="{{ route('admin.posts.show', $post) }}">Show</a></td>
                            <td>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection

@section('title')
    Admin Posts List
@endsection

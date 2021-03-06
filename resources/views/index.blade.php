@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Show Post</a>
                                <a href="{{ route('post.destroy', $post->id) }}" class="btn btn-primary">Delete</a>
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>

                <a href="{{ route('post.create', $post->id) }}" class="btn btn-primary">Create Post</a>
            </div>
        </div>
    </div>
@endsection

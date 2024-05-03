@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class=" card card-body">

                <h3 style="justify-content: center;">All Posts</h3>

                <table class="table table-tertiary table-striped">
                    <thead>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Likes</th>
                        <th>Hates</th>
                        <th>Date</th>
                    </thead>
                    @foreach ($posts as $post)
                        <tbody>
                            <tr>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->likes }}</td>
                                <td>{{ $post->hates }}</td>
                                <td>{{ $post->created_at->format ('D M Y, h:ia') }}</td>
                                <td>{{ $post->created_at->diffForHumans() }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection

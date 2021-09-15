@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Posts
                    </div>
                    <div class="card-body">
                        <a href="{{route('post.create')}}" type="button" class="btn btn-primary mb-3">Create post</a>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Is public</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td><a href="{{route('post.edit', $post->id)}}">{{$post->title}}</a></td>
                                    <td><input type="checkbox" disabled {{$post->is_public ? 'checked' : ''}}></td>
                                    <td>{{date_format($post->created_at, "d-m-Y  H:i")}}</td>
                                    <td>{{date_format($post->updated_at, "d-m-Y  H:i")}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $posts->links( "pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

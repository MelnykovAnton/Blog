@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row row-cols-1 row-cols-md-12 g-4">
                    @foreach($posts as $post)
                        <div class="col mb-3">
                            <div class="card">
                                <div
                                    class="card-header">{{$post->author->name . ' ' . date_format($post->created_at, "d-m-Y  H:i")}}</div>
                                @if($post->image != null)
                                    <img src="{{$post->image}}" class="card-img-top">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{$post->title}}</h5>
                                    <p class="card-text text-truncate">{{$post->content}}</p>
                                    <a class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $posts->links( "pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
@endsection

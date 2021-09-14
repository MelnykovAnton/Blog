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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Create post')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create post
                </div>
                <div class="card-body">
                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                            @error('title')
                            <div class="invalid-feedback" style="display: block;">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                            @error('content')
                            <div class="invalid-feedback" style="display: block;">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3 custom-file">
                            <input accept="image/png, image/gif, image/jpeg" name="image" type="file" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">Choose image</label>
                        </div>
                        <div class="form-group form-check">
                            <input name="is_public" type="hidden" value="0">
                            <input name="is_public" type="checkbox" value="1" class="form-check-input" id="is_public">
                            <label class="form-check-label" for="is_public">Is public</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

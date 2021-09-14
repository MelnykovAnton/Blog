@extends('layouts.app')

@section('title', 'Edit post')

@push('scripts')
    <script>
        document.getElementById('image').oninput = (e) => {
            let thumbnail = document.getElementById('image_thumbnail');
            thumbnail.src = URL.createObjectURL(e.target.files[0]);
            thumbnail.style.display = 'flex';
        }
    </script>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit post
                </div>
                <div class="card-body">
                    <form action="{{route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input value="{{$post->title}}" name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" class="form-control" id="content" rows="3">{{$post->content}}</textarea>
                        </div>
                        <div class="mb-3 custom-file">
                            <img id="image_thumbnail"
                                 @if($post->image) src="{{$post->image}}"
                                 @else style="display: none;"
                                 @endif width="400" class="img-thumbnail mt-5">
                            <label class="custom-file-label" for="image">Choose image</label>
                            <input accept="image/png, image/gif, image/jpeg" name="image" type="file" class="custom-file-input" id="image">
                        </div>
                        <div class="form-group form-check">
                            <input name="is_public" type="hidden" value="0">
                            <input name="is_public" type="checkbox" @if($post->is_public) checked @endif value="1" class="form-check-input" id="is_public">
                            <label class="form-check-label" for="is_public">Is public</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.backend.app')

@section('title','Video')
@push('css')
<link rel="stylesheet" href="{{ asset('css/dropify.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">

<style>
.dropify-wrapper .dropify-message p {
    font-size: initial;
}
</style>
@endpush

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-check icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ isset($video) ? 'Edit' : 'Create New' }} video</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.videos.index') }}" class="btn-shadow btn btn-danger">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-arrow-circle-left fa-w-20"></i>
                    </span>
                    Back to list
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="main-card mb-3 card">
            <!-- form start -->
            <form id="videoFrom" role="form" method="POST"
                action="{{ isset($video) ? route('backend.videos.update',$video->id) : route('backend.videos.store') }}"
                enctype="multipart/form-data" file="true">
                @csrf
                @if (isset($video))
                @method('PUT')
                @endif
                <div class="card-body">
                    <h5 class="card-title">Manage Video</h5>
                    <div class="form-group">
                        <Label for='title'>Video title</Label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" value="{{ $video->title ?? old('title') }}" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='slug'>Slug</Label>
                        <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror"
                            name="slug" value="{{ $video->slug ?? old('slug') }}" autofocus>

                        @error('slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='description'>Description</Label>
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                            name="description" value="{{ $video->description ?? old('description') }}" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='url'>Video Url</Label>
                        <input id="url" type="url" class="form-control @error('url') is-invalid @enderror"
                            name="url" value="{{ $video->video_url ?? old('url') }}" autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for='image'>Video Thumbnail</label>

                        <input type="file" id="image" name="image" class="dropify"
                            data-default-file="{{ isset($video) ? asset('/uploads/video/'. $video->thumbnail): '' }}"
                            data-height="220"
                            value="{{ isset($video) ? asset('/uploads/video/'. $video->thumbnail): '' }}" />

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="button" class="btn btn-danger" onClick="resetForm('videoFrom')">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        @isset($video)
                        <i class="fas fa-arrow-circle-up"></i>
                        <span>Update</span>
                        @else
                        <i class="fas fa-plus-circle"></i>
                        <span>Create</span>
                        @endisset
                    </button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('js/dropify.min.js') }}"></script>
<script>
$(document).ready(function() {
    // Dropify
    $('.dropify').dropify();
});
</script>
@endpush

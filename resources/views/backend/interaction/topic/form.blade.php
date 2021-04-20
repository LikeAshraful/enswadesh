@extends('layouts.backend.app')

@section('title','Shop Topic')
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
            <div>{{ isset($topic) ? 'Edit' : 'Create New' }} Topic</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.topics.index') }}" class="btn-shadow btn btn-danger">
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
            <form id="topicFrom" role="form" method="POST"
                action="{{ isset($topic) ? route('backend.topics.update',$topic->id) : route('backend.topics.store') }}"
                enctype="multipart/form-data" file="true">
                @csrf
                @if (isset($topic))
                @method('PUT')
                @endif
                <div class="card-body">
                    <h5 class="card-title">Manage User Contribution Topic/Questions</h5>
                    <div class="form-group">
                        <Label for='title'>Topic Name</Label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" value="{{ $topic->title ?? old('title') }}" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='description'>Description</Label>
                        <input id="description" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="description" value="{{ $topic->description ?? old('description') }}" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='interaction_category'>Select Category</Label>
                        <select class="form-control-sm form-control" name="interaction_category_id" id="interaction_category">
                            @foreach ($interactionCategories as $category )
                                <option value="{{$category->id}}" {{isset($topic) ? ($topic->interaction_category->id == $category->id ? 'selected' : '') : '' }}>{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if (isset($topic))
                    <div class="form-group">
                        <Label for='status'>Select Status</Label>
                        <select class="form-control-sm form-control" name="status" id="status">
                            <option value="0" {{ $topic->status == 0 ? 'selected' : '' }} >InActive</option>
                            <option value="1" {{ $topic->status == 1 ? 'selected' : '' }}>Active</option>
                        </select>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for='thumbnail'>Topic Thumbnail</label>

                        <input type="file" id="thumbnail" name="thumbnail" class="dropify"
                            data-default-file="{{ isset($topic) ? asset($topic->thumbnail): '' }}"
                            data-height="220"
                            value="{{ isset($topic) ? asset($topic->thumbnail): '' }}" />

                        @error('thumbnail')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="button" class="btn btn-danger" onClick="resetForm('topicFrom')">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        @isset($topic)
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
    $('.dropify').dropify();
});
</script>
@endpush

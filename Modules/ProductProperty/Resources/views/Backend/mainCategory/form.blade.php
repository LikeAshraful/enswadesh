@extends('layouts.backend.app')

@section('title','Shop Category')
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
            <div>{{ isset($mainCategories) ? 'Edit' : 'Create New' }} Category</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.main_category.index') }}" class="btn-shadow btn btn-danger">
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
            <form id="mainCategoryFrom" role="form" method="POST"
                action="{{ isset($mainCategory) ? route('backend.main_category.update',$mainCategory->id) : route('backend.main_category.store') }}"
                enctype="multipart/form-data" file="true">
                @csrf
                @if (isset($mainCategory))
                @method('PUT')
                @endif
                <div class="card-body">
                    <h5 class="card-title">Manage Product Category</h5>

                    <div class="form-group">
                        <Label for='main_category_name'>Category Name</Label>
                        <input id="main_category_name" type="main_category_name"
                            class="form-control @error('main_category_name') is-invalid @enderror"
                            name="main_category_name"
                            value="{{ $mainCategory->main_category_name ?? old('main_category_name') }}" autofocus>

                        @error('main_category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='main_category_slug'>Category Slug</Label>
                        <input id="main_category_slug" type="main_category_slug"
                            class="form-control @error('main_category_slug') is-invalid @enderror"
                            name="main_category_slug"
                            value="{{ $mainCategory->main_category_slug ?? old('main_category_slug') }}" autofocus>

                        @error('main_category_slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for='icon'>Category Icon</label>

                        <input type="file" id="icon" name="icon" class="dropify"
                            data-default-file="{{ isset($mainCategory) ? asset('/uploads/products/categoriesicon/'. $mainCategory->icon): '' }}"
                            data-height="220"
                            value="{{ isset($mainCategory) ? asset('/uploads/products/categoriesicon/'. $mainCategory->icon): '' }}" />

                        @error('icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="button" class="btn btn-danger" onClick="resetForm('mainCategoryFrom')">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        @isset($mainCategory)
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
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
            <div>{{ isset($category) ? 'Edit' : 'Create New' }} Category</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.category.index') }}" class="btn-shadow btn btn-danger">
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
            <form id="categoryFrom" role="form" method="POST"
                action="{{ isset($category) ? route('backend.category.update',$category->id) : route('backend.category.store') }}"
                enctype="multipart/form-data" file="true">
                @csrf
                @if (isset($category))
                @method('PUT')
                @endif
                <div class="card-body">
                    <h5 class="card-title">Manage Product Category</h5>

                    <x-forms.select label="Select Main Category" name="parent_id" class="select js-example-basic-single">
                        <option value="0">--This will be main category--</option>
                            @foreach($categories as $key=>$cate)
                            <x-forms.select-item :value="$cate->id" :label="$cate->name"
                                :selected="$category->subcategory->id ?? null" />
                            @endforeach
                    </x-forms.select>

                    <div class="form-group">
                        <Label for='name'>Category Name</Label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $category->name ?? old('name') }}" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='description'>Description</Label>
                        <input id="description" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="description" value="{{ $category->description ?? old('description') }}" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for='icon'>Category Icon</label>

                        <input type="file" id="icon" name="icon" class="dropify"
                            data-default-file="{{ isset($category) ? asset('/uploads/products/categoriesicon/'. $category->icon): '' }}"
                            data-height="220"
                            value="{{ isset($category) ? asset('/uploads/products/categoriesicon/'. $category->icon): '' }}" />

                        @error('icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="button" class="btn btn-danger" onClick="resetForm('categoryFrom')">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        @isset($category)
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
@extends('layouts.backend.app')

@section('title','Product Sub Category')
@push('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endpush

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-check icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ isset($subCategory) ? 'Edit' : 'Create New' }} Sub Category</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.sub_category.index') }}" class="btn-shadow btn btn-danger">
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
            <form id="subCategoryFrom" role="form" method="POST"
                action="{{ isset($subCategory) ? route('backend.sub_category.update',$subCategory->id) : route('backend.sub_category.store') }}"
                enctype="multipart/form-data" file="true">
                @csrf
                @if (isset($subCategory))
                @method('PUT')
                @endif
                <div class="card-body">
                    <h5 class="card-title">Manage Sub Product Category</h5>

                    <div class="form-group">
                        <Label for='sub_category_name'>Sub Category Name</Label>
                        <input id="sub_category_name" type="sub_category_name"
                            class="form-control @error('sub_category_name') is-invalid @enderror"
                            name="sub_category_name"
                            value="{{ $subCategory->sub_category_name ?? old('main_category_name') }}" autofocus>

                        @error('sub_category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='sub_category_slug'>Category Slug</Label>
                        <input id="sub_category_slug" type="sub_category_slug"
                            class="form-control @error('sub_category_slug') is-invalid @enderror"
                            name="main_category_slug"
                            value="{{ $subCategory->sub_category_slug ?? old('sub_category_slug') }}" autofocus>

                        @error('sub_category_slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <h5 class="card-title">Select Main Category</h5>

                    <x-forms.select label="Select Main Category" name="main_category_id" class="select js-example-basic-single">
                        @foreach($mainCategories as $key=>$mainCategory)
                        <x-forms.select-item :value="$mainCategory->id" :label="$mainCategory->main_category_name"
                            :selected="$mainCategory->id ?? null" />
                        @endforeach
                    </x-forms.select>

                    <button type="button" class="btn btn-danger" onClick="resetForm('subCategoryFrom')">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        @isset($subCategory)
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
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
$(document).ready(function() {
    // Select2
    $('.select').each(function() {
        $(this).select2();
    });
});
</script>
@endpush
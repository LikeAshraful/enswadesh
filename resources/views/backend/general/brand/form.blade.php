@extends('layouts.backend.app')

@section('title','Shop Brand')
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
            <div>{{ isset($brand) ? 'Edit' : 'Create New' }} Brand</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.brand.index') }}" class="btn-shadow btn btn-danger">
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
            <form id="brandFrom" role="form" method="POST"
                action="{{ isset($brand) ? route('backend.brand.update',$brand->id) : route('backend.brand.store') }}"
                enctype="multipart/form-data" file="true">
                @csrf
                @if (isset($brand))
                @method('PUT')
                @endif
                <div class="card-body">
                    <h5 class="card-title">Manage Product brand</h5>
                    <div class="form-group">
                        <Label for='name'>Brand Name</Label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $brand->name ?? old('name') }}" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <Label for='description'>Description</Label>
                        <input id="description" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="description" value="{{ $brand->description ?? old('description') }}" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for='icon'>Brand Icon</label>

                        <input type="file" id="icon" name="icon" class="dropify"
                            data-default-file="{{ isset($brand) ? asset('storage/'.$brand->icon): '' }}"
                            data-height="220"
                            value="{{ isset($brand) ? asset('storage/'.$brand->icon): '' }}" />

                        @error('icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="button" class="btn btn-danger" onClick="resetForm('brandFrom')">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        @isset($brand)
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
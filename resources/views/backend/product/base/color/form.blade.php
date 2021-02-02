@extends('layouts.backend.app')

@section('title','Shop Color')
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
            <div>{{ isset($color) ? 'Edit' : 'Create New' }} Color</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.colors.index') }}" class="btn-shadow btn btn-danger">
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
            <form id="colorFrom" role="form" method="POST"
                action="{{ isset($color) ? route('backend.colors.update',$color->id) : route('backend.colors.store') }}"
                enctype="multipart/form-data" file="true">
                @csrf
                @if (isset($color))
                @method('PUT')
                @endif
                <div class="card-body">
                    <h5 class="card-title">Manage Product color</h5>
                    <div class="form-group">
                        <Label for='name'>Color Name</Label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $color->name ?? old('name') }}" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <Label for='color_code'>Color Code</Label>
                        <input id="color_code" type="color" class="form-control @error('color_code') is-invalid @enderror"
                            name="color_code" value="{{ $color->color_code ?? old('color_code') }}" autofocus>

                        @error('color_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    @isset($color)
                    <div class="form-group">
                        <Label for='status'>Status</Label>
                        <select id="status" type="text" class="form-control @error('status') is-invalid @enderror"
                            name="status">
                            <option value="1" {{ $color->status == 1 ? 'selected' : '' }}>Approved</option>
                            <option value="0" {{ $color->status == 0 ? 'selected' : '' }}>Pending</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    @endisset


                    <button type="button" class="btn btn-danger" onClick="resetForm('colorFrom')">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        @isset($color)
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

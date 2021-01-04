@extends('layouts.backend.app')
@section('title','Thana Create')
@push('css')
<link rel="stylesheet" href="{{ asset('css/dropify.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">

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
                <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ __((isset($thana) ? 'Edit' : 'Create New') . ' Thana') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.thanas.index') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opaarea-7">
                        <i class="fas fa-arrow-circle-left fa-w-20"></i>
                    </span>
                    {{ __('Back to list') }}
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-head"></div>
                <div class="card-body">
                    <form action="{{ isset($thana) ? route('backend.thanas.update',$thana->id) : route('backend.thanas.store') }}" method="POST" enctype="multipart/form-data" file="true">
                        @csrf
                        @if (isset($thana))
                        @method('PUT')
                        @endif
                        <div class="form-group">
                        <label for="thana_name">Thana Name</label>
                        <input type="text" id="thana_name" name="thana_name" class="form-control @error('thana_name') is-invalid @enderror" value="{{ isset($thana) ? $thana->thana_name : '' }}"  placeholder="thana name">
                        @error('thana_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="area_id">Areas</label>
                        @if(isset($thana))
                        <select name="area_id" id="area_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}" {{ $thana->area_id == $area->id ? 'selected' : ''}}>{{ $area->area_name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="area_id" id="area_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                            @endforeach
                        </select>
                        @endisset
                        @error('thana_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="thana_description">Thana Description</label>
                        <input type="text" id="thana_description" name="thana_description" class="form-control" value="{{ isset($thana) ? $thana->thana_description : '' }}" placeholder="thana Description">
                        </div>
                        <div class="form-group">
                        <label for='thana_icon'>Thana Icon</label>
                        <input type="file" id="thana_icon" name="thana_icon" class="dropify" data-default-file="{{ isset($thana) ? asset('/uploads/shopproperty/thana/'. $thana->thana_icon): '' }}" data-height="220" value="{{ isset($thana) ? asset('/uploads/shopproperty/thana/'. $thana->thana_icon): '' }}" />
                        @error('thana_icon')
                        <span class="invalid-feedback image-display-error-message" style="display: block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <button class="btn btn-danger" on-click="resetForm('userFrom')"><i class="fas fa-redo"></i>Reset</button>
                        @isset($thana)
                        <button type="submit" class="btn btn-info"><i class="fas fa-arrow-circle-up"></i>Update</button>
                        @else
                        <button type="submit" class="btn btn-info"><i class="fas fa-plus-circle"></i>Create</button>
                        @endisset
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('js/dropify.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
$(document).ready(function() {
    // Dropify
    $('.dropify').dropify();
    // Select2
    $('.select').each(function() {
        $(this).select2();
    });
});
</script>
@endpush

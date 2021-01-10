@extends('layouts.backend.app')
@section('title','Shoptype Create')
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
            <div>{{ __((isset($shoptype) ? 'Edit' : 'Create New') . ' Shoptype') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.shoptypes.index') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opamarket-7">
                        <i class="fas fa-arrow-circle-left fa-w-20"></i>
                    </span>
                    {{ __('Back to list') }}
                </a>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-head"></div>
                <div class="card-body">
                    <form action="{{ isset($shoptype) ? route('backend.shoptypes.update',$shoptype->id) : route('backend.shoptypes.store') }}" method="POST" enctype="multipart/form-data" file="true">
                        @csrf
                        @if (isset($shoptype))
                        @method('PUT')
                        @endif
                        <div class="form-group">
                        <label for="shop_type_name">Name</label>
                        <input type="text" id="shop_type_name" name="shop_type_name" class="form-control @error('shop_type_name') is-invalid @enderror" value="{{ isset($shoptype) ? $shoptype->shop_type_name : '' }}"  placeholder="Name">
                        @error('shop_type_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="shop_type_description">Description</label>
                        <input type="text" id="shop_type_description" name="shop_type_description" class="form-control @error('shop_type_description') is-invalid @enderror" value="{{ isset($shoptype) ? $shoptype->shop_type_description : '' }}"  placeholder="Description">
                        @error('shop_type_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <button class="btn btn-danger" on-click="resetForm('userFrom')"><i class="fas fa-redo"></i>Reset</button>
                        @isset($shoptype)
                        <button type="submit" class="btn btn-info"><i class="fas fa-arrow-circle-up"></i>Update</button>
                        @else
                        <button type="submit" class="btn btn-info"><i class="fas fa-plus-circle"></i>Create</button>
                        @endisset
                    </form>
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
});
</script>
@endpush

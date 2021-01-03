@extends('layouts.backend.app')
@section('title','Market Place Create')
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
            <div>{{ __((isset($marketplace) ? 'Edit' : 'Create New') . ' Market Place') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.marketplaces.index') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opamarketplace-7">
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
                    <form action="{{ isset($marketplace) ? route('backend.marketplaces.update',$marketplace->id) : route('backend.marketplaces.store') }}" method="POST" enctype="multipart/form-data" file="true">
                        @csrf
                        @if (isset($marketplace))
                        @method('PUT')
                        @endif
                        <div class="form-group">
                        <label for="market_name">Market Name</label>
                        <input type="text" id="market_name" name="market_name" class="form-control @error('market_name') is-invalid @enderror" value="{{ isset($marketplace) ? $marketplace->market_name : '' }}"  placeholder="Market name">
                        @error('market_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="marketplace_address">Market Address</label>
                        <input type="text" id="marketplace_address" name="marketplace_address" class="form-control @error('marketplace_address') is-invalid @enderror" value="{{ isset($marketplace) ? $marketplace->marketplace_address : '' }}"  placeholder="Market Address">
                        @error('marketplace_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="thana_id">thana</label>
                        @if(isset($marketplace))
                        <select name="thana_id" id="thana_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($thanas as $thana)
                                <option value="{{ $thana->id }}" {{ $marketplace->thana_id == $thana->id ? 'selected' : ''}}>{{ $thana->thana_name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="thana_id" id="thana_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($thanas as $thana)
                                <option value="{{ $thana->id }}">{{ $thana->thana_name }}</option>
                            @endforeach
                        </select>
                        @endisset
                        @error('thana_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="marketplace_description">Market Place Description</label>
                        <input type="text" id="marketplace_description" name="marketplace_description" class="form-control" value="{{ isset($marketplace) ? $marketplace->marketplace_description : '' }}" placeholder="Market Place Description">
                        </div>
                        <div class="form-group">
                        <label for='marketplace_icon'>Market Place Icon</label>
                        <input type="file" id="marketplace_icon" name="marketplace_icon" class="dropify" data-default-file="{{ isset($marketplace) ? asset('/uploads/shopproperty/marketplace/'. $marketplace->marketplace_icon): '' }}" data-height="220" value="{{ isset($marketplace) ? asset('/uploads/shopproperty/marketplace/'. $marketplace->marketplace_icon): '' }}" />
                        @error('marketplace_icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <button class="btn btn-danger" on-click="resetForm('userFrom')"><i class="fas fa-redo"></i>Reset</button>
                        @isset($marketplace)
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

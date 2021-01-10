@extends('layouts.backend.app')
@section('title','Market Create')
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
            <div>{{ __((isset($market) ? 'Edit' : 'Create New') . ' Market') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.markets.index') }}" class="btn-shadow btn btn-info">
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
                <form action="{{ isset($market) ? route('backend.markets.update',$market->id) : route('backend.markets.store') }}" method="POST" enctype="multipart/form-data" file="true">
                    @csrf
                    @if (isset($market))
                    @method('PUT')
                    @endif
                    <div class="form-group">
                    <label for="market_name">Market Name</label>
                    <input type="text" id="market_name" name="market_name" class="form-control @error('market_name') is-invalid @enderror" value="{{ isset($market) ? $market->market_name : '' }}"  holder="Market name">
                    @error('market_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="market_address">Market Address</label>
                    <input type="text" id="market_address" name="market_address" class="form-control @error('market_address') is-invalid @enderror" value="{{ isset($market) ? $market->market_address : '' }}"  holder="Market Address">
                    @error('market_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="thana_id">thana</label>
                    @if(isset($market))
                    <select name="thana_id" id="thana_id" class="form-control">
                        <option value="">Select One</option>
                        @foreach($thanas as $thana)
                            <option value="{{ $thana->id }}" {{ $market->thana_id == $thana->id ? 'selected' : ''}}>{{ $thana->thana_name }}</option>
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
                    <label for="market_description">Market  Description</label>
                    <input type="text" id="market_description" name="market_description" class="form-control" value="{{ isset($market) ? $market->market_description : '' }}" holder="Market  Description">
                    </div>
                    <div class="form-group">
                    <label for='market_icon'>Market  Icon</label>
                    <input type="file" id="market_icon" name="market_icon" class="dropify" data-default-file="{{ isset($market) ? asset('/uploads/shopproperty/market/'. $market->market_icon): '' }}" data-height="220" value="{{ isset($market) ? asset('/uploads/shopproperty/market/'. $market->market_icon): '' }}" />
                    @error('market_icon')
                    <span class="invalid-feedback image-display-error-message" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <button class="btn btn-danger" on-click="resetForm('userFrom')"><i class="fas fa-redo"></i>Reset</button>
                    @isset($market)
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
    // Select2
    $('.select').each(function() {
        $(this).select2();
    });
});
</script>
@endpush

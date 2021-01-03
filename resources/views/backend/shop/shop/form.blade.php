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
            <div>{{ __((isset($shop) ? 'Edit' : 'Create New') . ' Market Place') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.shops.index') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opashop-7">
                        <i class="fas fa-arrow-circle-left fa-w-20"></i>
                    </span>
                    {{ __('Back to list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<form action="{{ isset($shop) ? route('backend.shops.update',$shop->id) : route('backend.shops.store') }}" method="POST" enctype="multipart/form-data" file="true">
    @csrf
    @if (isset($shop))
    @method('PUT')
    @endif
    <div class="row">
        <div class="col-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                        {{-- <div class="form-group">
                        <label for="market_name">Market Name</label>
                        <input type="text" id="market_name" name="market_name" class="form-control @error('market_name') is-invalid @enderror" value="{{ isset($shop) ? $shop->market_name : '' }}"  placeholder="Market name">
                        @error('market_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="shop_address">Market Address</label>
                        <input type="text" id="shop_address" name="shop_address" class="form-control @error('shop_address') is-invalid @enderror" value="{{ isset($shop) ? $shop->shop_address : '' }}"  placeholder="Market Address">
                        @error('shop_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="area_id">City</label>
                            @if(isset($shop))
                            <select name="city_id" id="city_id" class="form-control">
                                <option value="">Select One</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ $shop->city_id == $city->id ? 'selected' : ''}}>{{ $city->city_name }}</option>
                                @endforeach
                            </select>
                            @else
                            <select name="city_id" id="city_id" class="form-control">
                                <option value="">Select One</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                @endforeach
                            </select>
                            @endisset
                            @error('city_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="area_id">Area</label>
                            @if(isset($shop))
                            <select name="area_id" id="area_id" class="form-control">
                                <option value="">Select One</option>
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}" {{ $shop->area_id == $area->id ? 'selected' : ''}}>{{ $area->area_name }}</option>
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
                            @error('area_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="thana_id">Thana</label>
                            @if(isset($shop))
                            <select name="thana_id" id="thana_id" class="form-control">
                                <option value="">Select One</option>
                                @foreach($thanas as $thana)
                                    <option value="{{ $thana->id }}" {{ $shop->thana_id == $thana->id ? 'selected' : ''}}>{{ $thana->thana_name }}</option>
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
                            <label for="market_place_id">Market</label>
                            @if(isset($shop))
                            <select name="market_place_id" id="market_place_id" class="form-control">
                                <option value="">Select One</option>
                                @foreach($marketplaces as $market)
                                    <option value="{{ $marke->id }}" {{ $shop->market_place_id == $market->id ? 'selected' : ''}}>{{ $market->market_name }}</option>
                                @endforeach
                            </select>
                            @else
                            <select name="market_place_id" id="market_place_id" class="form-control">
                                <option value="">Select One</option>
                                @foreach($marketplaces as $market)
                                    <option value="{{ $market->id }}">{{ $market->market_name }}</option>
                                @endforeach
                            </select>
                            @endisset
                            @error('market_place_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="thana_id">Thana</label>
                            @if(isset($shop))
                            <select name="thana_id" id="thana_id" class="form-control">
                                <option value="">Select One</option>
                                @foreach($thanas as $thana)
                                    <option value="{{ $thana->id }}" {{ $shop->thana_id == $thana->id ? 'selected' : ''}}>{{ $thana->thana_name }}</option>
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
                        <label for="shop_description">Market Place Description</label>
                        <input type="text" id="shop_description" name="shop_description" class="form-control" value="{{ isset($shop) ? $shop->shop_description : '' }}" placeholder="Market Place Description">
                        </div>
                        <div class="form-group">
                        <label for='shop_icon'>Market Place Icon</label>
                        <input type="file" id="shop_icon" name="shop_icon" class="dropify" data-default-file="{{ isset($shop) ? asset('/uploads/shopproperty/shop/'. $shop->shop_icon): '' }}" data-height="220" value="{{ isset($shop) ? asset('/uploads/shopproperty/shop/'. $shop->shop_icon): '' }}" />
                        @error('shop_icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                        <div class="form-group">
                        <label for="market_name">Market Name</label>
                        <input type="text" id="market_name" name="market_name" class="form-control @error('market_name') is-invalid @enderror" value="{{ isset($shop) ? $shop->market_name : '' }}"  placeholder="Market name">
                        @error('market_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="shop_address">Market Address</label>
                        <input type="text" id="shop_address" name="shop_address" class="form-control @error('shop_address') is-invalid @enderror" value="{{ isset($shop) ? $shop->shop_address : '' }}"  placeholder="Market Address">
                        @error('shop_address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>

                        <div class="form-group">
                        <label for="shop_description">Market Place Description</label>
                        <input type="text" id="shop_description" name="shop_description" class="form-control" value="{{ isset($shop) ? $shop->shop_description : '' }}" placeholder="Market Place Description">
                        </div>
                        <div class="form-group">
                        <label for='shop_icon'>Market Place Icon</label>
                        <input type="file" id="shop_icon" name="shop_icon" class="dropify" data-default-file="{{ isset($shop) ? asset('/uploads/shopproperty/shop/'. $shop->shop_icon): '' }}" data-height="220" value="{{ isset($shop) ? asset('/uploads/shopproperty/shop/'. $shop->shop_icon): '' }}" />
                        @error('shop_icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-3">
        <button class="btn btn-danger" on-click="resetForm('userFrom')"><i class="fas fa-redo"></i>Reset</button>
        @isset($shop)
        <button type="submit" class="btn btn-info"><i class="fas fa-arrow-circle-up"></i>Update</button>
        @else
        <button type="submit" class="btn btn-info"><i class="fas fa-plus-circle"></i>Create</button>
        @endisset
    </div>
</form>
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

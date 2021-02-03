@extends('layouts.backend.app')
@section('title','Shop Create')
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
            <div>{{ __((isset($shop) ? 'Edit' : 'Create New') . ' Shop') }}</div>
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
        <div class="col-4">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="city_id">City</label>
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
                        <label for="market_id">Market</label>
                        @if(isset($shop))
                        <select name="market_id" id="market_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($markets as $market)
                                <option value="{{ $market->id }}" {{ $shop->market_id == $market->id ? 'selected' : ''}}>{{ $market->market_name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="market_id" id="market_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($markets as $market)
                                <option value="{{ $market->id }}">{{ $market->market_name }}</option>
                            @endforeach
                        </select>
                        @endisset
                        @error('market_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="floor_id">Floor</label>
                        @if(isset($shop))
                        <select name="floor_id" id="floor_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($floors as $floor)
                                <option value="{{ $floor->id }}" {{ $shop->floor_id == $floor->id ? 'selected' : ''}}>{{ $floor->floor_note }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="floor_id" id="floor_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($floors as $floor)
                                <option value="{{ $floor->id }}">{{ $floor->floor_note }}</option>
                            @endforeach
                        </select>
                        @endisset
                        @error('floor_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="shop_type_id">Shop Type</label>
                        @if(isset($shop))
                        <select name="shop_type_id" id="shop_type_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($shoptypes as $shoptype)
                                <option value="{{ $shoptype->id }}" {{ $shop->shop_type_id == $shoptype->id ? 'selected' : ''}}>{{ $shoptype->shop_type_name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="shop_type_id" id="shop_type_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($shoptypes as $shoptype)
                                <option value="{{ $shoptype->id }}">{{ $shoptype->shop_type_name }}</option>
                            @endforeach
                        </select>
                        @endisset
                        @error('shop_type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for='shop_logo'>Shop Logo</label>
                        <input type="file" id="shop_logo" name="shop_logo" class="dropify" data-default-file="{{ isset($shop) ? asset('/'. $shop->shop_logo): '' }}" data-height="220" value="{{ isset($shop) ? asset('/'. $shop->shop_logo): '' }}" />
                        @error('shop_logo')
                        <span class="invalid-feedback image-display-error-message" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="form-group">
                    <label for="shop_name">Shop Name</label>
                    <input type="text" id="shop_name" name="shop_name" class="form-control @error('shop_name') is-invalid @enderror" value="{{ isset($shop) ? $shop->shop_name : '' }}" holder="Market name">
                    @error('shop_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="shop_no">Shop No</label>
                    <input type="text" id="shop_no" name="shop_no" class="form-control @error('shop_no') is-invalid @enderror" value="{{ isset($shop) ? $shop->shop_no : '' }}" holder="Market name">
                    @error('shop_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="shop_phone">Shop Phone</label>
                    <input type="text" id="shop_phone" name="shop_phone" class="form-control @error('shop_phone') is-invalid @enderror" value="{{ isset($shop) ? $shop->shop_phone : '' }}" holder="Market name">
                    @error('shop_phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="shop_email">Shop Email</label>
                    <input type="text" id="shop_email" name="shop_email" class="form-control @error('shop_email') is-invalid @enderror" value="{{ isset($shop) ? $shop->shop_email : '' }}" holder="Market name">
                    @error('shop_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="shop_fax">Shop Fax</label>
                    <input type="text" id="shop_fax" name="shop_fax" class="form-control @error('shop_fax') is-invalid @enderror" value="{{ isset($shop) ? $shop->shop_fax : '' }}" holder="Market name">
                    @error('shop_fax')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="shop_description">Shop Description</label>
                    <input type="text" id="shop_description" name="shop_description" class="form-control" value="{{ isset($shop) ? $shop->shop_description : '' }}"holder="Market Description">
                    </div>
                    <div class="form-group">
                    <label for='shop_cover_image'>Shop Cover Image</label>
                    <input type="file" id="shop_cover_image" name="shop_cover_image" class="dropify" data-default-file="{{ isset($shop) ? asset('/'. $shop->shop_cover_image): '' }}" data-height="220" value="{{ isset($shop) ? asset('/'. $shop->shop_cover_image): '' }}" />
                    @error('shop_cover_image')
                    <span class="invalid-feedback image-display-error-message" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="form-group">
                    <label for="meta_title_shop">Meta Title</label>
                    <input type="text" id="meta_title_shop" name="meta_title_shop" class="form-control @error('meta_title_shop') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_title_shop : '' }}" holder="Market name">
                    @error('meta_title_shop')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="meta_keywords_shop">Meta Keyword</label>
                    <input type="text" id="meta_keywords_shop" name="meta_keywords_shop" class="form-control @error('meta_keywords_shop') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_keywords_shop : '' }}" holder="Market Address">
                    @error('meta_keywords_shop')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="meta_description_shop">Meta Description</label>
                    <input type="text" id="meta_description_shop" name="meta_description_shop" class="form-control @error('meta_description_shop') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_description_shop : '' }}" holder="Market Address">
                    @error('meta_description_shop')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="meta_og_image_shop">Meta OG URL</label>
                    <input type="text" id="meta_og_url_shop" name="meta_og_url_shop" class="form-control @error('meta_og_url_shop') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_og_url_shop : '' }}" holder="Market Address">
                    @error('meta_og_url_shop')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    {{-- <div class="form-group">
                    <label for="meta_og_image_shop">Meta OG Image</label>
                    <input type="text" id="meta_og_image_shop" name="meta_og_image_shop" class="form-control @error('meta_og_image_shop') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_og_image_shop : '' }}" holder="Market Address">
                    @error('meta_og_image_shop')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div> --}}
                    <div class="form-group">
                    <label for='meta_og_image_shop'>Meta OG Image</label>
                    <input type="file" id="meta_og_image_shop" name="meta_og_image_shop" class="dropify" data-default-file="{{ isset($shop) ? asset('/uploads/shopproperty/shop/'. $shop->meta_og_image_shop): '' }}" data-height="220" value="{{ isset($shop) ? asset('/uploads/shopproperty/shop/'. $shop->meta_og_image_shop): '' }}" />
                    @error('meta_og_image_shop')
                    <span class="invalid-feedback image-display-error-message" role="alert">
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

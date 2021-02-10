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
                                <option value="{{ $city->id }}" {{ $shop->city_id == $city->id ? 'selected' : ''}}>{{ $city->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="city_id" id="city_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
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
                                <option value="{{ $area->id }}" {{ $shop->area_id == $area->id ? 'selected' : ''}}>{{ $area->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="area_id" id="area_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
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
                        <label for="market_id">Market</label>
                        @if(isset($shop))
                        <select name="market_id" id="market_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($markets as $market)
                                <option value="{{ $market->id }}" {{ $shop->market_id == $market->id ? 'selected' : ''}}>{{ $market->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="market_id" id="market_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($markets as $market)
                                <option value="{{ $market->id }}">{{ $market->name }}</option>
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
                        <label for="shop_type_id">Shop Type</label>
                        @if(isset($shop))
                        <select name="shop_type_id" id="shop_type_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($shoptypes as $shoptype)
                                <option value="{{ $shoptype->id }}" {{ $shop->shop_type_id == $shoptype->id ? 'selected' : ''}}>{{ $shoptype->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="shop_type_id" id="shop_type_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($shoptypes as $shoptype)
                                <option value="{{ $shoptype->id }}">{{ $shoptype->name }}</option>
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
                        <label for="floor_no">Floor No</label>
                        @isset($shop->floor_no)
                        <select name="floor_no" id="floor_no" class="form-control">
                            <option value="">Select One</option>
                            <option value="Ground Floor" {{ $shop->floor_no == 'Ground Floor' ? 'selected' : ''}}>Ground Floor</option>
                            <option value="1st Floor" {{ $shop->floor_no == '1st Floor' ? 'selected' : ''}}>1st Floor</option>
                            <option value="2nd Floor" {{ $shop->floor_no == '2nd Floor' ? 'selected' : ''}}>2nd Floor</option>
                            <option value="3rd Floor" {{ $shop->floor_no == '3rd Floor' ? 'selected' : ''}}>3rd Floor</option>
                            <option value="4th Floor" {{ $shop->floor_no == '4th Floor' ? 'selected' : ''}}>4th Floor</option>
                            <option value="5th Floor" {{ $shop->floor_no == '5th Floor' ? 'selected' : ''}}>5th Floor</option>
                            <option value="6th Floor" {{ $shop->floor_no == '6th Floor' ? 'selected' : ''}}>6th Floor</option>
                            <option value="7th Floor" {{ $shop->floor_no == '7th Floor' ? 'selected' : ''}}>7th Floor</option>
                            <option value="8th Floor" {{ $shop->floor_no == '8th Floor' ? 'selected' : ''}}>8th Floor</option>
                            <option value="9th Floor" {{ $shop->floor_no == '9th Floor' ? 'selected' : ''}}>9th Floor</option>
                            <option value="10th Floor" {{ $shop->floor_no == '10th Floor' ? 'selected' : ''}}>10th Floor</option>
                        </select>
                        @else
                        <select name="floor_no" id="floor_no" class="form-control">
                            <option value="">Select One</option>
                            <option value="Ground Floor">Ground Floor</option>
                            <option value="1st Floor">1st Floor</option>
                            <option value="2nd Floor">2nd Floor</option>
                            <option value="3rd Floor">3rd Floor</option>
                            <option value="4th Floor">4th Floor</option>
                            <option value="5th Floor">5th Floor</option>
                            <option value="6th Floor">6th Floor</option>
                            <option value="7th Floor">7th Floor</option>
                            <option value="8th Floor">8th Floor</option>
                            <option value="9th Floor">9th Floor</option>
                            <option value="10th Floor">10th Floor</option>
                        </select>
                        @endisset
                        @error('floor_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for='logo'>Shop Logo</label>
                        <input type="file" id="logo" name="logo" class="dropify" data-default-file="{{ isset($shop) ? asset('/'. $shop->logo): '' }}" data-height="220" value="{{ isset($shop) ? asset('/'. $shop->logo): '' }}" />
                        @error('logo')
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
                    <label for="name">Shop Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ isset($shop) ? $shop->name : '' }}" holder="Market name">
                    @error('name')
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
                    <label for="phone">Shop Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ isset($shop) ? $shop->phone : '' }}" holder="Market name">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="email">Shop Email</label>
                    <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ isset($shop) ? $shop->email : '' }}" holder="Market name">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="fax">Shop Fax</label>
                    <input type="text" id="fax" name="fax" class="form-control @error('fax') is-invalid @enderror" value="{{ isset($shop) ? $shop->fax : '' }}" holder="Market name">
                    @error('fax')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="description">Shop Description</label>
                    <input type="text" id="description" name="description" class="form-control" value="{{ isset($shop) ? $shop->description : '' }}"holder="Market Description">
                    </div>
                    <div class="form-group">
                    <label for='cover_image'>Shop Cover Image</label>
                    <input type="file" id="cover_image" name="cover_image" class="dropify" data-default-file="{{ isset($shop) ? asset('/'. $shop->cover_image): '' }}" data-height="220" value="{{ isset($shop) ? asset('/'. $shop->cover_image): '' }}" />
                    @error('cover_image')
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
                    <label for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_title : '' }}" holder="Market name">
                    @error('meta_title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="meta_keywords">Meta Keyword</label>
                    <input type="text" id="meta_keywords" name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_keywords : '' }}" holder="Market Address">
                    @error('meta_keywords')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <input type="text" id="meta_description" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_description : '' }}" holder="Market Address">
                    @error('meta_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="meta_og_image">Meta OG URL</label>
                    <input type="text" id="meta_og_url" name="meta_og_url" class="form-control @error('meta_og_url') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_og_url : '' }}" holder="Market Address">
                    @error('meta_og_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    {{-- <div class="form-group">
                    <label for="meta_og_image">Meta OG Image</label>
                    <input type="text" id="meta_og_image" name="meta_og_image" class="form-control @error('meta_og_image') is-invalid @enderror" value="{{ isset($shop) ? $shop->meta_og_image : '' }}" holder="Market Address">
                    @error('meta_og_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div> --}}
                    <div class="form-group">
                    <label for='meta_og_image'>Meta OG Image</label>
                    <input type="file" id="meta_og_image" name="meta_og_image" class="dropify" data-default-file="{{ isset($shop) ? asset('/'. $shop->meta_og_image): '' }}" data-height="220" value="{{ isset($shop) ? asset('/'. $shop->meta_og_image): '' }}" />
                    @error('meta_og_image')
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

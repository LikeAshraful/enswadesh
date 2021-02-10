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
                    <label for="name">Market Name</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ isset($market) ? $market->name : '' }}"  holder="Market name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="address">Market Address</label>
                    <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ isset($market) ? $market->address : '' }}"  holder="Market Address">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="city_id">City</label>
                        @if(isset($market))
                        <select name="city_id" id="city_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}" {{ $market->city_id == $city->id ? 'selected' : ''}}>{{ $city->name }}</option>
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
                    @if(isset($market))
                    <select name="area_id" id="area_id" class="form-control">
                        <option value="">Select One</option>
                        @foreach($areas as $area)
                            <option value="{{ $area->id }}" {{ $market->area_id == $area->id ? 'selected' : ''}}>{{ $area->name }}</option>
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
                    <label for="description">Market  Description</label>
                    <input type="text" id="description" name="description" class="form-control" value="{{ isset($market) ? $market->description : '' }}" holder="Market  Description">
                    </div>
                    <div class="form-group">
                    <label for='icon'>Market  Icon</label>
                    <input type="file" id="icon" name="icon" class="dropify" data-default-file="{{ isset($market) ? asset($market->icon): '' }}" data-height="220" value="{{ isset($market) ? asset($market->icon): '' }}" />
                    @error('icon')
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

    // dependen drop down for catgory

    $('select[name="city_id"]').on('change', function() {
        var cityId = $(this).val();
        if(cityId) {
            $.ajax({
                url: '/backend/getCities/'+ cityId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="area_id"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="area_id"]').append('<option value="'+ key +'">'+ value +'</option>').trigger('change');
                    });
                }
            });
        }else{
            $('select[name="area_id"]').empty();
        }
    });
    // $('select[name="sub_category_id"]').on('change', function() {
    //     var subId = $(this).val();
    //     if(subId) {
    //         $.ajax({
    //             url: '/getChildcategory/'+subId,
    //             type: "GET",
    //             dataType: "json",
    //             success:function(data) {

    //                 $('select[name="child_category_id"]').empty();
    //                 $.each(data, function(key, value) {
    //                     $('select[name="child_category_id"]').append('<option value="'+ key +'">'+ value +'</option>').trigger('change');
    //                 });
    //             }
    //         });
    //     }else{
    //         $('select[name="child_category_id"]').empty();
    //     }
    // });

});
</script>
@endpush

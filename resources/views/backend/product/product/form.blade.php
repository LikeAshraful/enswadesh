@extends('layouts.backend.app')
@section('title','product Create')
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
            <div>{{ __((isset($product) ? 'Edit' : 'Create New') . ' product') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.products.index') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opaproduct-7">
                        <i class="fas fa-arrow-circle-left fa-w-20"></i>
                    </span>
                    {{ __('Back to list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<form action="{{ isset($product) ? route('backend.products.update',$product->id) : route('backend.products.store') }}" method="POST" enctype="multipart/form-data" file="true">
    @csrf
    @if (isset($product))
    @method('PUT')
    @endif
    <div class="row">
        <div class="col-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="ref">Ref</label>
                        <input type="text" id="ref" name="ref" class="form-control @error('ref') is-invalid @enderror" value="{{ isset($product) ? $product->ref : '' }}" placeholder="Ref">
                        @error('ref')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ isset($product) ? $product->name : '' }}" placeholder="Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="shop_id">Shop</label>
                        @if(isset($product))
                        <select name="shop_id" id="shop_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($shops as $shop)
                                <option value="{{ $shop->id }}" {{ $product->shop_id == $shop->id ? 'selected' : ''}}>{{ $shop->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="shop_id" id="shop_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($shops as $shop)
                                <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                            @endforeach
                        </select>
                        @endisset
                        @error('shop_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="brand_id">Brand</label>
                        @if(isset($product))
                        <select name="brand_id" id="brand_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : ''}}>{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="brand_id" id="brand_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        @endisset
                        @error('brand_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="can_bargain">Can Bargain</label>
                        @isset($product)
                        <select name="can_bargain" id="can_bargain" class="form-control">
                            <option value="">Select One</option>
                            <option value="1" {{ $product->can_bargain == 1 ? 'selected' : ''}}>Yes</option>
                            <option value="0" {{ $product->can_bargain == 0 ? 'selected' : ''}}>No</option>
                        </select>
                        @else
                        <select name="can_bargain" id="can_bargain" class="form-control">
                            <option value="">Select One</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        @endisset
                        @error('can_bargain')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_stocks">Stocks</label>
                        <input type="text" id="total_stocks" name="total_stocks" class="form-control @error('total_stocks') is-invalid @enderror" value="{{ isset($product) ? $product->total_stocks : '' }}" placeholder="total_stocks">
                        @error('total_stocks')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" value="{{ isset($product) ? $product->description : '' }}" placeholder="Description">{{ isset($product) ? $product->description : '' }}</textarea>
                        @error('description')
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
        @isset($product)
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

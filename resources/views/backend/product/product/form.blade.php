@extends('layouts.backend.app')
@section('title','Product Create')
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
            <div>{{ __((isset($product) ? 'Edit' : 'Create New') . ' Product') }}</div>
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
        <div class="col-6">
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
                        <label for="category_id">Category</label>
                        @if(isset($product))
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->productCategory->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select One</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @endisset
                        @error('category_id')
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
                        <label for="price">Price</label>
                        <input type="number" step="any" min="0" max="100" id="price" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ isset($product) ? $product->price : '' }}" placeholder="Total stocks">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total_stocks">Stocks</label>
                        <input type="number" id="total_stocks" name="total_stocks" class="form-control @error('total_stocks') is-invalid @enderror" value="{{ isset($product) ? $product->total_stocks : '' }}" placeholder="Total stocks">
                        @error('total_stocks')
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
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="6" class="form-control @error('description') is-invalid @enderror" value="{{ isset($product) ? $product->description : '' }}" placeholder="Description">{{ isset($product) ? $product->description : '' }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tag">Tags</label>
                        <input type="text" id="tag" name="tag" class="form-control @error('tag') is-invalid @enderror" data-role="tagsinput" value="{{ isset($product) ? $product->tag : '' }}" placeholder="Tags">
                        @error('tag')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for='src'>Image</label>
                        <input type="file" id="src" name="src" class="dropify" data-default-file="{{ isset($product->productImage) ? asset($product->productImage->src): '' }}" data-height="220" value="{{ isset($product->productImage) ? asset($product->productImage->src): '' }}" />
                        @error('src')
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
        @isset($product)
        <button type="submit" class="btn btn-info"><i class="fas fa-arrow-circle-up"></i>Update</button>
        @else
        <button type="submit" class="btn btn-info"><i class="fas fa-plus-circle"></i>Create</button>
        @endisset
    </div>
</form>
@endsection
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<style type="text/css">
    .bootstrap-tagsinput .tag {
      margin-right: 2px;
      padding: 2px;
      color: white;
      background-color: #37a16f;
      border-radius: 3px;
    }

    span.tag.label.label-info {
        padding: 2px;
        font-weight: 600;
    }
    .bootstrap-tagsinput {
        width: 100% !important;
    }
</style>
@endsection
@push('js')
<script src="{{ asset('js/dropify.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script>
$(document).ready(function() {
    // Dropify
    $('.dropify').dropify();
    // Select2
    $('.select').each(function() {
        $(this).select2();
    });

    $('#tag').tagsinput({
      confirmKeys: [32, 188],
      maxTags: 5,
      tagClass: 'tagstyle'
    });

});
</script>
@endpush

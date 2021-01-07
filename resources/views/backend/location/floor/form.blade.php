@extends('layouts.backend.app')
@section('title','Floor Create')
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
            <div>{{ __((isset($floor) ? 'Edit' : 'Create New') . ' Floor') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.floors.index') }}" class="btn-shadow btn btn-info">
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
                <form action="{{ isset($floor) ? route('backend.floors.update',$floor->id) : route('backend.floors.store') }}" method="POST" enctype="multipart/form-data" file="true">
                    @csrf
                    @if (isset($floor))
                    @method('PUT')
                    @endif
                    <div class="form-group">
                    <label for="market_id">Market</label>
                    @if(isset($floor))
                    <select name="market_id" id="market_id" class="form-control">
                        <option value="">Select One</option>
                        @foreach($markets as $market)
                            <option value="{{ $market->id }}" {{ $floor->market_id == $market->id ? 'selected' : ''}}>{{ $market->marketname }}</option>
                        @endforeach
                    </select>
                    @else
                    <select name="market_id" id="market_id" class="form-control">
                        <option value="">Select One</option>
                        @foreach($markets as $market)
                            <option value="{{ $market->id }}">{{ $market->marketname }}</option>
                        @endforeach
                    </select>
                    @endisset
                    @error('floor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="floor_no">Floor No</label>
                    <input type="number" id="floor_no" name="floor_no" class="form-control @error('floor_no') is-invalid @enderror" value="{{ isset($floor) ? $floor->floor_no : '' }}"  holder="Floor no">
                    @error('floor_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group">
                    <label for="floor_note">Floor Note</label>
                    <input type="text" id="floor_note" name="floor_note" class="form-control" value="{{ isset($floor) ? $floor->floor_note : '' }}" holder="floor Description">
                    </div>
                    <button class="btn btn-danger" on-click="resetForm('userFrom')"><i class="fas fa-redo"></i>Reset</button>
                    @isset($floor)
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

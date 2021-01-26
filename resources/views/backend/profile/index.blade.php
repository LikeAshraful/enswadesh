@extends('layouts.backend.app')

@section('title','Profile')

@push('css')
<link rel="stylesheet" href="{{ asset('css/dropify.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
@endpush

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-user icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Profile</div>
        </div>
    </div>
</div>
<form method="POST" action="{{ route('backend.profile.update') }}" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">

        <div class="col-12">
            <div class="main-card mb-3 card">
                <div class="card-header">PROFILE PHOTO</div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-6 mx-auto">
                            <div class="position-relative form-group">
                                <x-forms.dropify label="Picture (Only Image are allowed)" name="image" value="" />
                                @error('avatar')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="main-card mb-3 card">
                <div class="card-header">USER INFORMATION</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                name="address" value="" required autocomplete="address"
                                autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Bio') }}</label>

                        <div class="col-md-6">
                            <input id="bio" type="text" class="form-control @error('bio') is-invalid @enderror"
                                name="bio" value="" required autocomplete="address"
                                autofocus>

                            @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-arrow-circle-up"></i>
                                <span>Update</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@push('js')
<script src="{{ asset('js/dropify.min.js') }}"></script>
<script>
$(document).ready(function() {
    // Dropify
    $('.dropify').dropify();
});
</script>
@endpush
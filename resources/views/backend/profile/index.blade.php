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
                                <x-forms.dropify label="Picture (Only Image are allowed)" name="image" value="{{Auth::user()->profile ? asset('storage/'. Auth::user()->profile->image) : '' }}" />
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
                        <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                name="address" value="{{ Auth::user()->profile->address ?? old('address') }}" required autocomplete="address"
                                autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bio" class="col-md-3 col-form-label text-md-right">{{ __('Bio') }}</label>

                        <div class="col-md-6">
                            <textarea id="bio" type="text" class="form-control @error('bio') is-invalid @enderror"
                                name="bio" required autocomplete="address"
                                autofocus>{{ Auth::user()->profile->bio ?? old('bio') }}</textarea>

                            @error('bio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nid" class="col-md-3 col-form-label text-md-right">{{ __('NID') }}</label>

                        <div class="col-md-6">
                            <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror"
                                name="nid" value="{{ Auth::user()->profile->nid ?? old('nid') }}" required autocomplete="nid"
                                autofocus>

                            @error('nid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passport_id" class="col-md-3 col-form-label text-md-right">{{ __('Passport ID') }}</label>

                        <div class="col-md-6">
                            <input id="passport_id" type="text" class="form-control @error('passport_id') is-invalid @enderror"
                                name="passport_id" value="{{ Auth::user()->profile->passport_id ?? old('passport_id') }}" required autocomplete="passport_id"
                                autofocus>

                            @error('passport_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="driving_license" class="col-md-3 col-form-label text-md-right">{{ __('Driving License') }}</label>

                        <div class="col-md-6">
                            <input id="driving_license" type="text" class="form-control @error('driving_license') is-invalid @enderror"
                                name="driving_license" value="{{ Auth::user()->profile->driving_license ?? old('driving_license') }}" required autocomplete="driving_license"
                                autofocus>

                            @error('driving_license')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
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
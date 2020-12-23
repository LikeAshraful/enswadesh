@extends('layouts.backend.app')
@section('title','App Menus Create')
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
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="main-card mb-3 card">
                <div class="card-head"></div>
                <div class="card-body">
                    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data" file="true">
                        @csrf
                        <div class="form-group">
                        <label for="menu_name">Menu Name</label>
                        <input type="text" id="menu_name" name="menu_name" class="form-control @error('menu_name') is-invalid @enderror" placeholder="Menu name">
                        @error('menu_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <label for="menu_description">Menu Description</label>
                        <input type="text" id="menu_description" name="menu_description" class="form-control" placeholder="Menu Description">
                        </div>
                        <div class="form-group">
                        {{-- <label for="menu_icon">Menu Icon</label>
                        <input type="file" id="menu_icon" name="menu_icon" class="form-control dropify" placeholder="Menu Icon"> --}}
                        <label for='menu_icon'>Menu Icon</label>
                        <input id="menu_icon" type="file" class="form-control @error('menu_icon') is-invalid @enderror dropify"
                            name="menu_icon" value="{{ old('menu_icon') }}" autofocus>

                        @error('menu_icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
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

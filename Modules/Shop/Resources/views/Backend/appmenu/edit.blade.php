@extends('layouts.backend.app')
@section('title','App Menus Edit')
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
            <div class="card">
                <div class="card-head"></div>
                <div class="card-body">
                    <form action="{{ route('menus.update', $appmenu->id) }}" enctype="multipart/form-data" file="true" method="POST">
                        <input name="_method" type="hidden" value="PUT">
                        <input type="hidden" name="id" value="{{ $appmenu->id }}">
                        @csrf
                        <div class="form-group">
                        <label for="menu_name">Menu Name</label>
                        <input type="text" id="menu_name" name="menu_name" class="form-control" placeholder="Menu name" value="{{ $appmenu->menu_name }}">
                        </div>
                        <div class="form-group">
                        <label for="menu_description">Menu Description</label>
                        <input type="text" id="menu_description" name="menu_description" class="form-control" placeholder="Menu Description" value="{{ $appmenu->menu_description }}">
                        </div>
                        <div class="form-group">
                        <label for="menu_icon">Menu Icon</label>
                        <input type="file" id="menu_icon" name="menu_icon" class="form-control dropify" value="{{ isset($appmenu) ? asset('/uploads/shop/menus/'.$appmenu->menu_icon) : '' }}" placeholder="Menu Icon">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
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

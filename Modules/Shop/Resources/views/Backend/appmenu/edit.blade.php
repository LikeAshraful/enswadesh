@extends('layouts.backend.app')

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
                        <input type="file" id="menu_icon" name="menu_icon" class="form-control" placeholder="Menu Icon">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

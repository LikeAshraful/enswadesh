@extends('layouts.backend.app')

@section('title','Product Size')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-check icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ isset($size) ? 'Edit' : 'Create Size' }} Size</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.size.index') }}" class="btn-shadow btn btn-danger">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-arrow-circle-left fa-w-20"></i>
                    </span>
                    Back to list
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="main-card mb-3 card">
            <!-- form start -->
            <form id="sizeForm" role="form" method="POST"
                action="{{ isset($size) ? route('backend.size.update',$size->id) : route('backend.size.store') }}"
                enctype="multipart/form-data" file="true">
                @csrf
                @if (isset($size))
                @method('PUT')
                @endif
                <div class="card-body">
                    <h5 class="card-title">Manage Product size</h5>
                    <div class="form-group">
                        <Label for='name'>Name</Label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ $size->name ?? old('name') }}" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    @isset($size)
                    <div class="form-group">
                        <Label for='status'>Status</Label>
                        <select id="status" type="text" class="form-control @error('status') is-invalid @enderror"
                            name="status">
                            <option value="1" {{ $size->status == 1 ? 'selected' : '' }}>Approved</option>
                            <option value="0" {{ $size->status == 0 ? 'selected' : '' }}>Pending</option>
                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    @endisset

                    <button type="button" class="btn btn-danger" onClick="resetForm('sizeForm')">
                        <i class="fas fa-redo"></i>
                        <span>Reset</span>
                    </button>

                    <button type="submit" class="btn btn-primary">
                        @isset($brand)
                        <i class="fas fa-arrow-circle-up"></i>
                        <span>Update</span>
                        @else
                        <i class="fas fa-plus-circle"></i>
                        <span>Create</span>
                        @endisset
                    </button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection


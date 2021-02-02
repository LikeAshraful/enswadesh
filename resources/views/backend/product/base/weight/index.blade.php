@extends('layouts.backend.app')

@section('title','Weight')

@push('css')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ __('Weight') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.weights.create') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-plus-circle fa-w-20"></i>
                    </span>
                    {{ __('Create Weight') }}
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="datatableweight" class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Created by</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($weights as $key => $weight)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>
                                {{ $weight->name }}
                            </td>
                            <td>
                                {{ $weight->type }}
                            </td>
                            <td>{{ $weight->createdBy ? $weight->createdBy->name : 'Not found' }}</td>
                            <td>
                                @if($weight->status == 1)
                                    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success">
                                        Approved
                                    </button>
                                @else
                                    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">
                                        Pending
                                    </button>
                                @endif
                            </td>
                            <td>
                                <a class="fa-edit-style" href="{{ route('backend.weights.edit', $weight->id) }}"><i
                                        class="fas fa-edit"></i></a> |
                                <button type="submit" class="delete-btn-style" onclick="deleteData({{ $weight->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $weight->id }}"
                                    action="{{ route('backend.weights.destroy',$weight->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf()
                                    @method('DELETE')
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script>
$(document).ready(function() {
    // Datatable
    $("#datatableweight").DataTable();
});
</script>
@endpush

@extends('layouts.backend.app')

@section('title','Area')

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
                <div>{{ __('Area') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    @canany('backend.areas.index')
                        <a href="{{ route('backend.areas.create') }}" class="btn-shadow btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-plus-circle fa-w-20"></i>
                            </span>
                            {{ __('Create Area') }}
                        </a>
                    @endcanany
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatableArea" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">City</th>
                            <th scope="col">Area</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($areas as $key => $area)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $area->cities ? $area->cities->name : 'Not Found' }}</td>
                                <td>{{ $area->name }}</td>
                                <td>{{ $area->slug }}</td>
                                <td>{{ $area->description }}</td>
                                <td>
                                    <img class="img-fluid img-thumbnail" src="{{asset($area->icon)}}" width="50" height="50" alt="">
                                </td>
                                <td>
                                    @canany('backend.areas.edit')
                                        <a class="fa-edit-style" href="{{ route('backend.areas.edit', $area->id) }}"><i class="fas fa-edit"></i></a> |
                                    @endcanany
                                    @canany('backend.areas.destroy')
                                        <button type="submit" class="delete-btn-style"
                                                onclick="deleteData({{ $area->id }})">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    @endcanany
                                    <form id="delete-form-{{ $area->id }}"
                                            action="{{ route('backend.areas.destroy',$area->id) }}" method="POST"
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
            $("#datatableArea").DataTable();
        });
    </script>
@endpush

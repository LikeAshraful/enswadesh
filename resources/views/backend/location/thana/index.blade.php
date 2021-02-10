@extends('layouts.backend.app')

@section('title','Thana')

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
                <div>{{ __('Thana') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('backend.thanas.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Create Thana') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatableThana" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Area</th>
                            <th scope="col">Thana</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($thanas as $key => $thana)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $thana->areaOfthana ? $thana->areaOfthana->name : 'Not Found' }}</td>
                                <td>{{ $thana->thana_name }}</td>
                                <td>{{ $thana->thana_slug }}</td>
                                <td>{{ $thana->thana_description }}</td>
                                <td>
                                    <img class="img-fluid img-thumbnail" src="{{asset('/uploads/shopproperty/thana/' . $thana->thana_icon)}}" width="50" height="50" alt="">
                                </td>
                                <td>
                                    <a class="fa-edit-style" href="{{ route('backend.thanas.edit', $thana->id) }}"><i class="fas fa-edit"></i></a> |
                                    <button type="submit" class="delete-btn-style"
                                            onclick="deleteData({{ $thana->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <form id="delete-form-{{ $thana->id }}"
                                            action="{{ route('backend.thanas.destroy',$thana->id) }}" method="POST"
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
            $("#datatableThana").DataTable();
        });
    </script>
@endpush

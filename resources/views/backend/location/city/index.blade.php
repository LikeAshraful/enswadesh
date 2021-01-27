@extends('layouts.backend.app')

@section('title','City')

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
                <div>{{ __('Cities') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    @canany('backend.cities.create')
                        <a href="{{ route('backend.cities.create') }}" class="btn-shadow btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-plus-circle fa-w-20"></i>
                            </span>
                            {{ __('Create City') }}
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
                    <table id="datatableCity" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $key => $city)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $city->city_name }}</td>
                                <td>{{ $city->city_slug }}</td>
                                <td>{{ $city->city_description }}</td>
                                <td>
                                    <img class="img-fluid img-thumbnail" src="{{asset($city->city_icon)}}" width="50" height="50" alt="">
                                </td>
                                <td>
                                    @canany('backend.cities.edit')
                                        <a class="fa-edit-style" href="{{ route('backend.cities.edit', $city->id) }}"><i class="fas fa-edit"></i></a> |
                                    @endcanany
                                    @canany('backend.cities.destroy')
                                        <button type="submit" class="delete-btn-style"
                                                onclick="deleteData({{ $city->id }})">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    @endcanany
                                    <form id="delete-form-{{ $city->id }}"
                                            action="{{ route('backend.cities.destroy',$city->id) }}" method="POST"
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
            $("#datatableCity").DataTable();
        });
    </script>
@endpush

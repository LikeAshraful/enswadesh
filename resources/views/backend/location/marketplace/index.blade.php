@extends('layouts.backend.app')

@section('title','Market Place')

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
                <div>{{ __('Market Place') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('backend.marketplaces.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Create Market') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatableMarketPlace" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Thana</th>
                            <th scope="col">Market Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($marketplaces as $key => $marketplace)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $marketplace->thanaOfMarketPlace ? $marketplace->thanaOfMarketPlace->thana_name : 'Not Found' }}</td>
                                <td>{{ $marketplace->market_name }}</td>
                                <td>{{ $marketplace->marketplace_address }}</td>
                                <td>{{ $marketplace->marketplace_slug }}</td>
                                <td>{{ $marketplace->marketplace_description }}</td>
                                <td>
                                    <img class="img-fluid img-thumbnail" src="{{asset('/uploads/shopproperty/marketplace/' . $marketplace->marketplace_icon)}}" width="50" height="50" alt="">
                                </td>
                                <td>
                                    <a class="fa-edit-style" href="{{ route('backend.marketplaces.edit', $marketplace->id) }}"><i class="fas fa-edit"></i></a> |
                                    <button type="submit" class="delete-btn-style"
                                            onclick="deleteData({{ $marketplace->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <form id="delete-form-{{ $marketplace->id }}"
                                            action="{{ route('backend.marketplaces.destroy',$marketplace->id) }}" method="POST"
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
            $("#datatableMarketPlace").DataTable();
        });
    </script>
@endpush

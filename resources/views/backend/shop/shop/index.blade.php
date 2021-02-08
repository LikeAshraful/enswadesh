@extends('layouts.backend.app')

@section('title','Shop')

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
                <div>{{ __('Shop') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('backend.shops.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Create') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatableShop" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Shop Owner</th>
                            <th scope="col">City</th>
                            <th scope="col">Area</th>
                            <th scope="col">Market</th>
                            <th scope="col">Floor</th>
                            <th scope="col">Shop</th>
                            <th scope="col">Shop No</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shops as $key => $shop)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $shop->shopOwner ? $shop->shopOwner->name : 'Not Found' }}</td>
                                <td>{{ $shop->city ? $shop->city->name : 'Not Found' }}</td>
                                <td>{{ $shop->area ? $shop->area->name : 'Not Found' }}</td>
                                <td>{{ $shop->market ? $shop->market->name : 'Not Found' }}</td>
                                <td>{{ $shop->floor_no }}</td>
                                <td>{{ $shop->name }}</td>
                                <td>{{ $shop->shop_no }}</td>
                                <td>{{ $shop->slug }}</td>
                                <td>{{ $shop->description }}</td>
                                <td>
                                    <img class="img-fluid img-thumbnail" src="{{asset('/' . $shop->logo)}}" width="50" height="50" alt="">
                                </td>
                                <td>
                                    <a class="fa-edit-style" href="{{ route('backend.shops.edit', $shop->id) }}"><i class="fas fa-edit"></i></a> |
                                    <button type="submit" class="delete-btn-style"
                                            onclick="deleteData({{ $shop->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <form id="delete-form-{{ $shop->id }}"
                                            action="{{ route('backend.shops.destroy',$shop->id) }}" method="POST"
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
            $("#datatableShop").DataTable();
        });
    </script>
@endpush

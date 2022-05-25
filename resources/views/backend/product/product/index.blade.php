@extends('layouts.backend.app')

@section('title','Product')

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
                <div>{{ __('Product') }}</div>
            </div>
            {{-- <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('backend.products.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Create') }}
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatableproduct" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ref</th>
                            <th scope="col">Name</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Shop</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Bargain</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stocks</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key => $product)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $product->ref }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->user ? $product->user->name : 'Not Found' }}</td>
                                <td>{{ $product->shop ? $product->shop->name : 'Not Found' }}</td>
                                <td>{{ $product->brand ? $product->brand->name : 'Not Found' }}</td>
                                <td>
                                    @if($product->can_bargain == 1)
                                    <span class="badge badge-success">Yes</span>
                                    @else
                                    <span class="badge badge-danger">No</span>
                                    @endif
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->total_stocks }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    {{-- <a class="fa-edit-style" href="{{ route('backend.products.edit', $product->id) }}"><i class="fas fa-edit"></i></a> | --}}
                                    <button type="submit" class="delete-btn-style"
                                            onclick="deleteData({{ $product->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <form id="delete-form-{{ $product->id }}"
                                            action="{{ route('backend.products.destroy',$product->id) }}" method="POST"
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
            $("#datatableproduct").DataTable();
        });
    </script>
@endpush

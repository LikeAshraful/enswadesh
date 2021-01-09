@extends('layouts.backend.app')

@section('title','Orders')

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
                <div>{{ __('Order') }}</div>
            </div>
            <!-- <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('backend.areas.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Create Order') }}
                    </a>
                </div>
            </div> -->
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
                            <th scope="col">Order No</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Order Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key => $order)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $order->order_no }}</td>
                                <td>{{ $order->customer ? $order->customer->name : 'Not Found' }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td>
                                    @if ($order->order_status == 0)
                                    <div class="badge badge-danger">Canceled</div>
                                    @elseif ($order->order_status == 1)
                                    <div class="badge badge-warning">Pending</div>
                                    @elseif ($order->order_status == 2)
                                    <div class="badge badge-primary">Processing</div>
                                    @elseif ($order->order_status == 3 )
                                    <div class="badge badge-info">Delivery</div>
                                    @elseif ($order->order_status == 4 )
                                    <div class="badge badge-success">Complete</div>
                                    @endif
                                </td>
                                <td>{{ $order->created_at->format('d/m/y') }}</td>
                                <td>
                                    <a class="fa-edit-style" href="{{ route('backend.orders.show', $order->id) }}"><i class="fas fa-eye"></i></a>
                                    <!-- <a class="fa-edit-style" href="{{ route('backend.orders.edit', $order->id) }}"><i class="fas fa-edit"></i></a> | -->
                                    <button type="submit" class="delete-btn-style"
                                            onclick="deleteData({{ $order->id }})">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <form id="delete-form-{{ $order->id }}"
                                            action="{{ route('backend.orders.destroy',$order->id) }}" method="POST"
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

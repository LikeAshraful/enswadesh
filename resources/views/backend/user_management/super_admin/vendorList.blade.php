@extends('layouts.backend.app')

@section('title','Super Admin')

@push('css')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ __('All Vendors') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="datatableUser" class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Busniess Status</th>
                            <th scope="col">Joined At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vendors as $key=>$vendor)
                        <tr>
                            <td>#{{ $key + 1 }}</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img class="img-fluid img-thumbnail"
                                                    src="{{$vendor->profile ? asset('storage/'.$vendor->profile->image) : asset('users/user.png') }}" width="50"
                                                    height="50" alt="" alt="{{ $vendor->name}}">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{ $vendor->name }}</div>
                                            <div class="widget-subheading opacity-7">
                                                @if ($vendor->role)
                                                <span class="badge badge-info">{{ $vendor->role->name }}</span>
                                                @else
                                                <span class="badge badge-danger">No role found :(</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $vendor->email }}</td>
                            <td>
                                @if($vendor->status === 1)
                                <form action="{{ route('backend.users.publish', $vendor->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success">
                                        Approved
                                    </button>
                                </form>
                                @else
                                <form action="{{ route('backend.users.publish', $vendor->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">
                                            Pending
                                        </button>

                                </form>
                                @endif
                            </td>
                            <td>
                                @if($vendor->suspend === 1)
                                <form action="{{ route('backend.users.blocked', $vendor->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning">
                                        Blocked
                                    </button>
                                </form>
                                @else
                                <form action="{{ route('backend.users.blocked', $vendor->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">
                                            Unblocked
                                        </button>

                                </form>
                                @endif
                            </td>
                            <td>{{ $vendor->created_at->diffForHumans() }}</td>
                            <td>
                                <a class="fa-eye-style" href="{{ route('backend.super-admin.show',$vendor->id) }}"><i
                                        class="fas fa-eye"></i>
                                </a> |
                                <a class="fa-edit-style" href="{{ route('backend.super-admin.edit',$vendor->id) }}"><i
                                        class="fas fa-edit"></i>
                                </a> |
                                <button type="button" class="delete-btn-style" onclick="deleteData({{ $vendor->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $vendor->id }}"
                                    action="{{ route('backend.super-admin.destroy',$vendor->id) }}" method="POST"
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
    $("#datatableUser").DataTable();
});
</script>
@endpush

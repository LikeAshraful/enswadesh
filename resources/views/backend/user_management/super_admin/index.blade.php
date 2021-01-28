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
            <div>{{ __('All Users') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                @canany('backend.super-admin.create')
                <a href="{{ route('backend.super-admin.create') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-plus-circle fa-w-20"></i>
                    </span>
                    {{ __('Create User') }}
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
                <table id="datatableUser" class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Busniess Status</th>
                            <th class="text-center">Joined At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key=>$user)
                        <tr>
                            <td class="text-center text-muted">#{{ $key + 1 }}</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img class="img-fluid img-thumbnail" src="{{$user->profile ? asset('storage/'.$user->profile->image) : asset('users/user.png') }}" width="50"
                                                    height="50" alt="" alt="{{ $user->name}}">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{ $user->name }}</div>
                                            <div class="widget-subheading opacity-7">
                                                @if ($user->role)
                                                <span class="badge badge-info">{{ $user->role->name }}</span>
                                                @else
                                                <span class="badge badge-danger">No role found :(</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{ $user->email }}</td>

                            <td class="text-center">
                                @if($user->status === 1)
                                <form action="{{ route('backend.users.publish', $user->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success">
                                        Approved
                                    </button>
                                </form>
                                @else
                                <form action="{{ route('backend.users.publish', $user->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">
                                            Pending
                                        </button>

                                </form>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($user->suspend === 1)
                                <form action="{{ route('backend.users.blocked', $user->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning">
                                        Blocked
                                    </button>
                                </form>
                                @else
                                <form action="{{ route('backend.users.blocked', $user->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">
                                            Unblocked
                                        </button>

                                </form>
                                @endif
                            </td>
                            <td class="text-center">{{ $user->created_at->diffForHumans() }}</td>
                            <td class="text-center">
                                <a class="fa-eye-style" href="{{ route('backend.super-admin.show',$user->id) }}"><i
                                        class="fas fa-eye"></i>
                                </a> |
                                <a class="fa-edit-style" href="{{ route('backend.super-admin.edit',$user->id) }}"><i
                                        class="fas fa-edit"></i>
                                </a> |
                                <button type="button" class="delete-btn-style" onclick="deleteData({{ $user->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $user->id }}"
                                    action="{{ route('backend.super-admin.destroy',$user->id) }}" method="POST"
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
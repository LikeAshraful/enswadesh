@extends('layouts.backend.app')

@section('title','User')

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
                @canany('backend.vendor.create')
                    <a href="{{ route('backend.vendor.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Create Staff') }}
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
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            @can('backend.vendor.index')
                                <th scope="col">Status</th>
                            @endcan
                            <th scope="col">Joined At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users->staffs as $key=>$user)
                        <tr>
                            <td>#{{ $key + 1 }}</td>
                            <td>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="widget-content-left">
                                                <img class="img-fluid img-thumbnail"
                                                    src="{{ $user->user->profile->image ? asset('storage/'.$user->user->profile->image) : asset('users/user.png') }}" width="50"
                                                    height="50" alt="" alt="{{ $user->name}}">
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">{{ $user->user->name }}</div>
                                            <div class="widget-subheading opacity-7">
                                                @if ($user->user->role)
                                                <span class="badge badge-info">{{ $user->user->role->name }}</span>
                                                @else
                                                <span class="badge badge-danger">No role found :(</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $user->user->email }}</td>
                            @can('backend.vendor.index')
                                <td>
                                    @if($user->user->suspend === 1)
                                    <form action="{{ route('backend.vendor.block', $user->user->id) }}" method="post">
                                        @csrf
                                        @method('POST')
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning">
                                            Blocked
                                        </button>
                                    </form>
                                    @else
                                    <form action="{{ route('backend.vendor.block', $user->user->id) }}" method="post">
                                        @csrf
                                        @method('POST')
                                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">
                                                Unblocked
                                            </button>

                                    </form>
                                    @endif
                                </td>
                            @endcan
                            <td>{{ $user->user->created_at->diffForHumans() }}</td>
                            <td>
                                <a class="fa-eye-style" href="{{ route('backend.vendor.show',$user->user->id) }}"><i
                                        class="fas fa-eye"></i>
                                </a> |
                                <a class="fa-edit-style" href="{{ route('backend.vendor.edit',$user->user->id) }}"><i
                                        class="fas fa-edit"></i>
                                </a> |
                                <button type="button" class="delete-btn-style" onclick="deleteData({{ $user->user->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $user->user->id }}"
                                    action="{{ route('backend.vendor.destroy',$user->user->id) }}" method="POST"
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
    $("#datatableUser").DataTable();
});
</script>
@endpush

@extends('layouts.backend.app')

@section('title','Super Admin Details')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-users icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __('Super Admin Details') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    @canany('backend.super-admin.create')
                        <a href="{{ route('backend.super-admin.edit',$user->id) }}" class="btn-shadow btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-edit fa-w-20"></i>
                            </span>
                            {{ __('Edit') }}
                        </a>
                    @endcanany
                    @canany('backend.super-admin.index')
                        <a href="{{ route('backend.super-admin.index') }}" class="btn-shadow btn btn-danger">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fas fa-arrow-circle-left fa-w-20"></i>
                            </span>
                            {{ __('Back to list') }}
                        </a>
                    @endcanany
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <img class="img-fluid img-thumbnail" src="{{ $user->profile && $user->profile->image ? asset('storage/'.$user->profile->image) : asset('default-images/user.png') }}" alt="{{ $user->name}}">
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-10">
            <div class="main-card card">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <tbody>
                        <tr>
                            <th scope="row">Name:</th>
                            <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <th scope="row">Email:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Role:</th>
                            <td>
                                @if ($user->role)
                                    <span class="badge badge-info">{{ $user->role->name }}</span>
                                @else
                                    <span class="badge badge-danger">No role found :(</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Status:</th>
                            <td>
                                @if ($user->status)
                                    <div class="badge badge-success">Active</div>
                                @else
                                    <div class="badge badge-danger">Inactive</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Joined At:</th>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Last Modified At:</th>
                            <td>{{ $user->updated_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Last Login At:</th>
                            <td>{{ $user->last_login_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection

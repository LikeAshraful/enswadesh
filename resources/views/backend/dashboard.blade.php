@extends('layouts.backend.app')

@section('title','Dashboard')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Dashboard</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Users</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white">{{ $usersCount }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Roles</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white">{{ $rolesCount }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Last Logged In Users</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Joined At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="widget-content-left">
                                                    <img width="50" height="50" class="img-fluid img-thumbnail"
                                                         src="{{ asset('uploads/users/'.Auth::user()->image ) }}" alt="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ Auth::user()->name }}</div>
                                                <div class="widget-subheading opacity-7">
                                                    @if(!empty(Auth::user()->role))
                                                        <span class="badge badge-info">{{ Auth::user()->role->name }}</span>
                                                    @else
                                                        <span class="badge badge-danger">No role found</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ Auth::user()->email }}</td>
                                <td class="text-center">{{ Auth::user()->created_at->diffForHumans() }}</td>
                                <td class="text-center">
                                    @can('backend.super_admin.index')
                                        <a class="btn btn-info btn-sm" href="{{ route('backend.super_admin.show',Auth::user()->id) }}"><i
                                                class="fas fa-eye"></i>
                                            <span>Details</span>
                                        </a>
                                    @elsecan('backend.admin.index')
                                        <a class="btn btn-info btn-sm" href="{{ route('backend.admin.show',Auth::user()->id) }}"><i
                                                class="fas fa-eye"></i>
                                            <span>Details</span>
                                        </a>
                                    @endcan
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

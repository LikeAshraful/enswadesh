@extends('layouts.backend.app')
@section('title','Vendor')

@push('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">

<style>
.dropify-wrapper .dropify-message p {
    font-size: initial;
}
</style>
@endpush
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>{{ __((isset($user) ? 'Edit' : 'Create New') . ' Staff') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.vendor.index') }}" class="btn-shadow btn btn-danger">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-arrow-circle-left fa-w-20"></i>
                    </span>
                    {{ __('Back to list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form role="form" id="vendorFrom" method="POST"
            action="{{ isset($user) ? route('backend.vendor.update',$user->id) : route('backend.vendor.store') }}"
            enctype="multipart/form-data" file="true">
            @csrf
            @if (isset($user))
            @method('PUT')
            @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Vendor Info</h5>
                            <x-forms.textbox label="Name" name="name" value="{{ $user->name ?? ''  }}"
                                field-attributes="required autofocus">
                            </x-forms.textbox>

                            <x-forms.textbox label="E-mail" type="email" name="email" value="{{ $user->email ?? ''  }}" />

                            <x-forms.textbox label="Password" type="password" name="password" placeholder="******" />

                            <x-forms.textbox label="Confirmation Password" type="password" name="password_confirmation" placeholder="******" />

                            <x-forms.textbox label="Phone Number" name="phone_number" value="{{ $user->phone_number ?? ''  }}"
                                field-attributes="required autofocus">
                            </x-forms.textbox>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Select Role and Status</h5>

                            <x-forms.select label="Select Role" name="role" class="select js-example-basic-single">

                                <x-forms.select-item :value="$role->id" :label="$role->name"
                                    :selected="$user->role->id ?? null" />

                            </x-forms.select>
                            <x-forms.button label="Reset" class="btn-danger" icon-class="fas fa-redo"
                                on-click="resetForm('vendorFrom')" />

                            @isset($user)
                            <x-forms.button type="submit" label="Update" icon-class="fas fa-arrow-circle-up" />
                            @else
                            <x-forms.button type="submit" label="Create" icon-class="fas fa-plus-circle" />
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        @forelse($modules->chunk(2) as $key => $chunks)
                            <div class="form-row">
                                @foreach($chunks as $key=>$module)
                                <div class="col">
                                    <h5>Module: {{ $module->name }}</h5>
                                    @foreach($module->permissions as $key=>$permission)
                                    <div class="mb-3 ml-4">
                                        <div class="custom-control custom-checkbox mb-2">
                                            <input type="checkbox" class="custom-control-input"
                                                id="permission-{{ $permission->id }}" value="{{ $permission->id }}"
                                                name="permissions[]"
                                                @if(isset($role))
                                                    @foreach($role->permissions as $rPermission)
                                                        {{ $permission->id == $rPermission->id ? 'checked' : '' }}
                                                    @endforeach
                                                @endif
                                            >
                                            <label class="custom-control-label"
                                                for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                                @empty
                            <div class="row">
                                <div class="col text-center">
                                    <strong>No Module Found.</strong>
                                </div>
                            </div>
                        @endforelse
                    </div>

                </div>

            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('js/dropify.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('.select').each(function() {
        $(this).select2();
    });
});
</script>
@endpush

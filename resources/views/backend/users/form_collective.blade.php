@extends('layouts.backend.app')

@section('title','Users')

@push('css')

{!! Html::style('plugins/icheck/skins/all.css') !!}
{!! Html::style('plugins/select2/css/select2.min.css') !!}
{!! Html::style('plugins/dropify/css/dropify.min.css') !!}

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
            <div>{{ __((isset($user) ? 'Edit' : 'Create New') . ' User') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.users.index') }}" class="btn-shadow btn btn-danger">
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
        <!-- form start -->
        @if($user !== null)
        {!! Form::model($user, ['method'=>'PUT','route' => ['backend.users.update', $user], 'enctype' =>
        'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route('banckend.users.store'),'method' => 'POST','enctype' => 'multipart/form-data'])
        !!}
        @endif

        <div class="row">
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">User Info</h5>

                        <div class="form-group">

                            {!! Form::label('name','Name') !!}
                            {!!
                            Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Name','required'])
                            !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label('email','Email') !!}
                            {!!
                            Form::text('email',old('email'),['class'=>'form-control','placeholder'=>'Email','required'])
                            !!}

                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-4">
                <div class="main-card mb-3 card">


                    <div class="card-body">
                        <h5 class="card-title">Select Role and Status</h5>

                        <x-forms.select label="Select Role" name="role" class="select js-example-basic-single">
                            @foreach($roles as $key=>$role)
                            <x-forms.select-item :value="$role->id" :label="$role->name"
                                :selected="$user->role->id ?? null" />
                            @endforeach
                        </x-forms.select>

                        <div class="form-group">

                            {!! Form::label('name','Image') !!}
                            {!! Form::file('image',[
                            'class' => 'form-control',
                            'id' => 'image',
                            'placeholder' => 'User Image' ]) !!}

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                @if($user != null)
                                <img id="show" src="{{ asset('uploads/users/'.$user->image) }}" alt="user image"
                                    width="180" height="180" />
                                @else
                                <img id="show" src="http://placehold.it/1500x576" alt="user image" width="180"
                                    height="180" />
                                @endif
                            </div>
                        </div>

                        <x-forms.checkbox label="Status" name="status" class="custom-switch"
                            :value="$user->status ?? null" />

                        <x-forms.button label="Reset" class="btn-danger" icon-class="fas fa-redo"
                            on-click="resetForm('userFrom')" />


                        @isset($user)
                        <x-forms.button type="submit" label="Update" icon-class="fas fa-arrow-circle-up" />
                        @else
                        <x-forms.button type="submit" label="Create" icon-class="fas fa-plus-circle" />
                        @endisset
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection

@push('js')
<!-- <script src="{{ asset('js/select2.min.js') }}"></script> -->

{!! Html::script('plugins/icheck/icheck.min.js') !!}
{!! Html::script('plugins/select2/js/select2.min.js') !!}
{!! Html::script('plugins/typeaheadjs/typeahead.bundle.min.js') !!}
{!! Html::script('plugins/dropify/js/dropify.min.js') !!}

{!! Html::script('js/file-upload.js') !!}
{!! Html::script('js/iCheck.js') !!}
{!! Html::script('js/select2.js') !!}
{!! Html::script('js/typeahead.js') !!}
{!! Html::script('js/dropify.js') !!}

<!-- script for image place holder -->
<script type="text/javascript">
$(function() {
    $("#image").change(function() {
        showImage(this);

    });

    function showImage(input) {
        console.log('okay')
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#show')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

});
</script>
<!-- script for image place holder -->
@endpush
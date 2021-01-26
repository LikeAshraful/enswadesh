@extends('layouts.backend.app')

@section('title','Template')

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
            <div>{{ __('Template') }}</div>
        </div>
        <div class="page-title-actions">
            {{-- <div class="d-inline-block dropdown">
                <a href="{{ route('backend.templates.create') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-plus-circle fa-w-20"></i>
                    </span>
                    {{ __('Create Template') }}
                </a>
            </div> --}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="datatableTemplate" class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created by</th>
                            <th scope="col">Status</th>
                            <th scope="col">Change Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($templates as $key => $template)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>
                                {{ $template->title }}
                            </td>
                            <td>
                                <img class="img-fluid img-thumbnail"
                                    src="{{ asset($template->thumbnail) }}" width="50" height="50"
                                    alt="" alt="{{ $template->title}}">
                            </td>
                            <td>{{ $template->user_id ? $template->user->name : 'Not found' }}</td>
                            <td><div class="badge {{ $template->status == 'Pending' ? 'badge-warning' : ($template->status == 'Approved' ? 'badge-primary' : 'badge-danger') }}">{{ $template->status }}</div></td>
                            <td>
                                <form action="" id="status_form">
                                    @csrf
                                    <input type="hidden" id="template_id_{{ $template->id }}" class="template" name="template_id" value="{{ $template->id }}">
                                    <select class="form-control-sm form-control changeStatus" name="status">
                                        <option value="Pending" {{$template->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Approved" {{$template->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                        <option value="Declined" {{$template->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                    </select>
                                </form>
                                {{-- <a class="fa-edit-style" href="{{ route('backend.templates.edit', $template->id) }}"><i
                                        class="fas fa-edit"></i></a> |
                                <button type="submit" class="delete-btn-style" onclick="deleteData({{ $template->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $template->id }}"
                                    action="{{ route('backend.templates.destroy',$template->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf()
                                    @method('DELETE')
                                </form> --}}

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
    $("#datatableTemplate").DataTable();

    //Change template status
    $('select.changeStatus').change(function(){

        var templateId = $(this).siblings('.template').val();
        var getStatus = $(this).val();
        $.ajax({
            type: 'POST',
            url: '/backend/interactions/' + templateId,
            data: {
                _token:  $('input[name="_token"]').val(),
                status: getStatus
            },
            success: function(data){
                // alert('Sucessfully changed status ' + templateId);
                window.location.href = "{{ route('backend.templates.index') }}";
             }
        });

    });
});
</script>
@endpush

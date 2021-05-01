@extends('layouts.backend.app')

@section('title','Real Experience')

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
            <div>{{ __('Real Experience') }}</div>
        </div>
        <div class="page-title-actions">
            {{-- <div class="d-inline-block dropdown">
                <a href="{{ route('backend.real_experiences.create') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-plus-circle fa-w-20"></i>
                    </span>
                    {{ __('Create Real Experience ') }}
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
                        @foreach($real_experiences as $key => $real_experience)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>
                                {{ $real_experience->title }}
                            </td>
                            <td>
                                <img class="img-fluid img-thumbnail"
                                    src="{{ asset($real_experience->thumbnail) }}" width="50" height="50"
                                    alt="" alt="{{ $real_experience->title}}">
                            </td>
                            <td>{{ $real_experience->user_id ? $real_experience->user->name : 'Not found' }}</td>
                            <td><div class="badge {{ $real_experience->status == 'Pending' ? 'badge-warning' : ($real_experience->status == 'Approved' ? 'badge-primary' : 'badge-danger') }}">{{ $real_experience->status }}</div></td>
                            <td>
                                <form action="" id="status_form">
                                    @csrf
                                    <input type="hidden" id="template_id_{{ $real_experience->id }}" class="real_experience" name="template_id" value="{{ $real_experience->id }}">
                                    <select class="form-control-sm form-control changeStatus" name="status">
                                        <option value="Pending" {{$real_experience->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Approved" {{$real_experience->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                        <option value="Declined" {{$real_experience->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                    </select>
                                </form>
                                {{-- <a class="fa-edit-style" href="{{ route('backend.real_experiences.edit', $real_experience->id) }}"><i
                                        class="fas fa-edit"></i></a> |
                                <button type="submit" class="delete-btn-style" onclick="deleteData({{ $real_experience->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $real_experience->id }}"
                                    action="{{ route('backend.real_experiences.destroy',$real_experience->id) }}" method="POST"
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

    //Change real_experience status
    $('select.changeStatus').change(function(){

        var real_exId = $(this).siblings('.real_experience').val();
        var getStatus = $(this).val();
        $.ajax({
            type: 'POST',
            url: '/backend/interactions/' + real_exId,
            data: {
                _token:  $('input[name="_token"]').val(),
                status: getStatus
            },
            success: function(data){
                // alert('Sucessfully changed status ' + real_exId);
                window.location.href = "{{ route('backend.real_experiences.index') }}";
             }
        });

    });
});
</script>
@endpush

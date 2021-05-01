@extends('layouts.backend.app')

@section('title','Story')

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
            <div>{{ __('Story') }}</div>
        </div>
        <div class="page-title-actions">
            {{-- <div class="d-inline-block dropdown">
                <a href="{{ route('backend.stories.create') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-plus-circle fa-w-20"></i>
                    </span>
                    {{ __('Create Story') }}
                </a>
            </div> --}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="datatableStory" class="align-middle mb-0 table table-borderless table-striped table-hover">
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
                        @foreach($stories as $key => $story)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>
                                {{ $story->title }}
                            </td>
                            <td>
                                <img class="img-fluid img-thumbnail"
                                    src="{{ asset($story->thumbnail) }}" width="50" height="50"
                                    alt="" alt="{{ $story->title}}">
                            </td>
                            <td>{{ $story->user_id ? $story->user->name : 'Not found' }}</td>
                            <td><div class="badge {{ $story->status == 'Pending' ? 'badge-warning' : ($story->status == 'Approved' ? 'badge-primary' : 'badge-danger') }}">{{ $story->status }}</div></td>
                            <td>
                                <form action="" id="status_form">
                                    @csrf
                                    <input type="hidden" id="template_id_{{ $story->id }}" class="story" name="template_id" value="{{ $story->id }}">
                                    <select class="form-control-sm form-control changeStatus" name="status">
                                        <option value="Pending" {{$story->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Approved" {{$story->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                        <option value="Declined" {{$story->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                    </select>
                                </form>
                                {{-- <a class="fa-edit-style" href="{{ route('backend.stories.edit', $story->id) }}"><i
                                        class="fas fa-edit"></i></a> |
                                <button type="submit" class="delete-btn-style" onclick="deleteData({{ $story->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $story->id }}"
                                    action="{{ route('backend.stories.destroy',$story->id) }}" method="POST"
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
    $("#datatableStory").DataTable();

    //Change story status
    $('select.changeStatus').change(function(){

        var storyId = $(this).siblings('.story').val();
        var getStatus = $(this).val();
        $.ajax({
            type: 'POST',
            url: '/backend/interactions/' + storyId,
            data: {
                _token:  $('input[name="_token"]').val(),
                status: getStatus
            },
            success: function(data){
                // alert('Sucessfully changed status ' + storyId);
                window.location.href = "{{ route('backend.stories.index') }}";
             }
        });

    });
});
</script>
@endpush

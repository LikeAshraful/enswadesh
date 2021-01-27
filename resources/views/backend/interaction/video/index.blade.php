@extends('layouts.backend.app')

@section('title','All Videos')

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
            <div>{{ __('All Videos') }}</div>
        </div>
        <div class="page-title-actions">
            {{-- <div class="d-inline-block dropdown">
                <a href="{{ route('backend.videos.create') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-plus-circle fa-w-20"></i>
                    </span>
                    {{ __('Create Video') }}
                </a>
            </div> --}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="datatableBrand" class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Status</th>
                            <th scope="col">Change Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $key => $video)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>
                                <a href="#">{{ $video->title }}</a>
                            </td>
                            <td>
                                <img class="img-fluid img-thumbnail"
                                    src="/{{ $video->thumbnail }}" width="50" height="50"
                                    alt="">
                            </td>
                            <td>{{ $video->user ? $video->user->name : 'Not found' }}</td>
                            <td><div class="badge {{ $video->status == 'Pending' ? 'badge-warning' : ($video->status == 'Approved' ? 'badge-primary' : 'badge-danger') }}">{{ $video->status }}</div></td>
                            <td>
                                <form action="" id="status_form">
                                    @csrf
                                    <input type="hidden" id="video_id_{{ $video->id }}" class="video" name="video_id" value="{{ $video->id }}">
                                    <select class="form-control-sm form-control changeStatus" name="status">
                                        <option value="Pending" {{$video->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Approved" {{$video->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                        <option value="Declined" {{$video->status == 'Declined' ? 'selected' : '' }}>Declined</option>
                                    </select>
                                </form>
                            </td>
                            {{-- <td>
                                <a class="fa-edit-style" href=""><i
                                        class="fas fa-edit"></i></a> |
                                <button type="submit" class="delete-btn-style" onclick="deleteData({{ $video->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $video->id }}"
                                    action="" method="POST"
                                    style="display: none;">
                                    @csrf()
                                    @method('DELETE')
                                </form>

                            </td> --}}
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
    $("#datatableBrand").DataTable();

    //Change video status
    $('select.changeStatus').change(function(){

        var videoId = $(this).siblings('.video').val();
        var getStatus = $(this).val();
        $.ajax({
            type: 'POST',
            url: '/backend/interactions/' + videoId,
            data: {
                _token:  $('input[name="_token"]').val(),
                status: getStatus
            },
            success: function(data){
                // alert('Sucessfully changed status ' + videoId);
                window.location.href = "{{ route('backend.videos.index') }}";
             }
        });

    });
});
</script>
@endpush

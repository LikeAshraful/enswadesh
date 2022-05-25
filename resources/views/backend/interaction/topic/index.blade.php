@extends('layouts.backend.app')

@section('title','All Topics')

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
            <div>{{ __('All Topics') }}</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="{{ route('backend.topics.create') }}" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fas fa-plus-circle fa-w-20"></i>
                    </span>
                    {{ __('Create Topic') }}
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="datatableTopic" class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($topics as $key => $topic)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>
                                <a href="#">{{ $topic->title }}</a>
                            </td>
                            <td>
                                <img class="img-fluid img-thumbnail"
                                    src="/storage/{{ $topic->thumbnail }}" width="50" height="50"
                                    alt="">
                            </td>
                            <td>{{$topic->interaction_category->title}}</td>
                            <td><div class="badge {{ $topic->status == 0 ? 'badge-warning' :  'badge-primary' }}">{{ $topic->status == 0 ? 'InActive' : 'Active' }}</div></td>
                            <td>
                                <a class="fa-edit-style" href="{{ route('backend.topics.edit', $topic->id) }}"><i
                                        class="fas fa-edit"></i></a> |
                                <button type="submit" class="delete-btn-style" onclick="deleteData({{ $topic->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $topic->id }}"
                                    action="{{ route('backend.topics.destroy',$topic->id) }}" method="POST"
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
    $("#datatableTopic").DataTable();

    //Change topic status
    $('select.changeStatus').change(function(){

        var topicId = $(this).siblings('.topic').val();
        var getStatus = $(this).val();
        $.ajax({
            type: 'POST',
            url: '/backend/interactions/' + topicId,
            data: {
                _token:  $('input[name="_token"]').val(),
                status: getStatus
            },
            success: function(data){
                // alert('Sucessfully changed status ' + topicId);
                window.location.href = "{{ route('backend.topics.index') }}";
             }
        });

    });
});
</script>
@endpush

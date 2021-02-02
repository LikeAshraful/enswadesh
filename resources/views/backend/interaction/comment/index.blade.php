@extends('layouts.backend.app')

@section('title','Comment')

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
            <div>{{ __('Comment') }}</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="datatableComment" class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Commented by</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $key => $comment)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>
                                {{ $comment->comment }}
                            </td>
                            <td>{{ $comment->user_id ? $comment->user->name : 'Not found' }}</td>
                            <td>
                                <label class="switch">
                                    <input onchange="updateStatus(this)" value="{{ $comment->id }}" type="checkbox" <?php if($comment->status == 1) echo "checked";?> >
                                    <span class="sliderswitch round"></span>
                                </label>
                             </td>
                            <td>
                                <button type="submit" class="delete-btn-style" onclick="deleteData({{ $comment->id }})">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                <form id="delete-form-{{ $comment->id }}"
                                    action="{{ route('backend.comments.destroy',$comment->id) }}" method="POST"
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
    $("#datatableComment").DataTable();
});

function updateStatus(el){
        if(el.checked){
            var status = 1;
        }
        else{
            var status = 0;
        }
        $.post('{{ route('backend.comments.statusUpdate') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
            if(data == 1){
                iziToast.success({
                    message: 'Comment Reviewd Successfully',
                    position: 'topRight'
                });
            }
            else{
                iziToast.error({
                    title: 'Error',
                    message: 'Something went wrong',
                    position: 'topRight'
                });
            }
        });
    }
</script>
@endpush

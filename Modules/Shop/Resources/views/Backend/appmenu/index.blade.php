@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h1>Welcome to App menu</h1>
    <a href="{{ route('menus.create') }}">Create</a>
    <div class="row mt-2">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appmenus as $key => $menu)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $menu->menu_name }}</td>
                    <td>{{ $menu->menu_slug }}</td>
                    <td>{{ $menu->menu_description }}</td>
                    <td>
                        <img class="img-fluid img-thumbnail" src="{{asset('/uploads/shop/menus/' . $menu->menu_icon)}}" width="50" height="50" alt="">
                    </td>
                    <td>
                        <a href="{{ route('menus.edit', $menu->id) }}"><i class="fas fa-edit"></i></a> |
                        <button type="submit" class="delete-btn-style"
                                onclick="deleteData({{ $menu->id }})">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        <form id="delete-form-{{ $menu->id }}"
                                action="{{ route('menus.destroy',$menu->id) }}" method="POST"
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
@endsection

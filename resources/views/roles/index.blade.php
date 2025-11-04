@extends('app')
@section('content')
@section('title', 'Master Data Category')
    {{-- @dd($users) --}}
    <div class="d-flex justify-content-end my-2">
        <a href="{{ route('role.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i>  Category</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($datas as $i => $data)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    <a href="{{ route('role.edit', $data->id) }}" class="btn btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a>

                    <form action="{{ route('category.destroy', $data->id) }}" method="post"
                        onsubmit="return confirm('R u sure wanna delete it')" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

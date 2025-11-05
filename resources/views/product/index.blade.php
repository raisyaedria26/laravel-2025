use App\Models\Category;
@extends('app')
@section('content')
{{-- @section('title', 'Master Data Product') --}}
    {{-- @dd($users) --}}
    <div class="d-flex justify-content-end my-2">
        <a href="{{ route('product.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i>  Product</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Price</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        @foreach ($datas as $i => $data)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $data->category->category_name }}</td>
                <td><img width="100" src="{{asset('storage/' . $data->product_photo)}}" alt="{{$data->product_photo}}"></td>
                <td>{{ $data->product_name }}</td>
                <td>{{ $data->product_price }}</td>
                <td>{{ $data->is_active }}</td>
                <td>
                    <a href="{{ route('product.edit', $data->id) }}" class="btn btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a>

                    <form action="{{ route('product.destroy', $data->id) }}" method="post"
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

@extends('app')
@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $er)
                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                    <strong>Upss!</strong> {{ $er }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Click Here to Select One</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="number" placeholder="Enter Product Price" class="form-control" name="product_price">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label> <br>
                    <input type="radio" id="is_active_1" name="is_active" value="1"> Publish
                    <input type="radio" id="is_active_0" name="is_active" value="0"> Draft
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" placeholder="Enter Product Name" class="form-control" name="product_name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea name="product_description" id="" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Photo</label>
                    <input type="file" name="product_photo">
                </div>
                
            </div>

        </div>
        <button type="submit" class="btn btn-outline-primary mt-2">Save</button>
    </form>
@endsection

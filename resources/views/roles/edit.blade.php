@extends('app')
@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $er)
                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                    <strong>Wow!</strong> {{ $er }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('role.update', $edit->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $edit->name ?? '' }}" required>
        </div>
        <button type="submit" class="btn btn-outline-primary mt-2">Change</button>
    </form>
@endsection

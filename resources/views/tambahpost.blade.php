@extends('admin')
@section('main')
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post</label>
            <input type="text" name="post" class="form-control  @error('post') is-invalid @enderror" id="exampleFormControlInput1"  value="{{ old('post') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
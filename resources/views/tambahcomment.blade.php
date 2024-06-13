@extends('admin')
@section('main')
    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">comment</label>
            <input type="text" name="comment" class="form-control  @error('comment') is-invalid @enderror" id="exampleFormControlInput1"  value="{{ old('comment') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
@extends('admin')
@section('main')
    <form action="{{ route('comment.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NAME</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                id="exampleFormControlInput1" value="{{ $data->name }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">POST</label>
            <input type="text" name="comment" class="form-control  @error('comment') is-invalid @enderror"
                id="exampleFormControlInput1" value="{{ $data->comment }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
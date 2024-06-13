@extends('admin')
@section('main')
    <form action="{{ route('user.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">user</label>
            <input type="text" name="user" class="form-control @error('user') is-invalid @enderror"
                id="exampleFormControlInput1" value="{{ $data->user }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
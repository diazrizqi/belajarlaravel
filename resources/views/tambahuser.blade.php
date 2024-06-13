@extends('admin')
@section('main')
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">User</label>
            <input type="text" name="user" class="form-control @error('user') is-invalid @enderror" id="exampleFormControlInput1" value="{{ old('user') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
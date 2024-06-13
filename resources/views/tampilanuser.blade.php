@extends('admin')
@section('main')
    <h1>Hallo {{Auth::user()->name}}</h1>
    <h2>Ini halaman user</h2>
@endsection
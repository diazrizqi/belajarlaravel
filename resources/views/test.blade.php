@extends('admin')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../public">
</head>
<body>
    <h1>ini halaman coba</h1>

    @for ($i=1;$i<=10;$i++)
        <h1>Ini perulangan menggunakan blade</h1>
    @endfor
    <img src="{{asset('oii.jpg')}}" width="300" alt="sribustudio" srcset="">
</body>
</html>
@endsection

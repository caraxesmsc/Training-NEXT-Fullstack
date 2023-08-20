
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body class="container">
    <div class="card" style="width: 50%; text-allign:center;">
        <div class="card-header">Credentials</div>
        <div class="card-body">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="btn btn-primary">Tasks</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-outline-success">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-outline-warning">Register</a>
            @endif
            @endauth
            @endif
        </div>
        
    </div>
</body>

</html>
@endsection
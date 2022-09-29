@extends('layout.app')
@section('title','Detalhe do Usuario')

<h1>Detalhe de Usuario: {{ $user->name }}</h1>
@section('content')
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

@endsection
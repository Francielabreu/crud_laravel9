@extends('layout.app')
@section('title','Listagem de Usuarios')

<h1>Listagem de Usuarios</h1>
@section('content')

@foreach ($users as $user)
    <ul>
        <li>{{ $user->id }}</li>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>

        <a href="{{ route('users.show',$user->id) }}">Detalhes</a>
    </ul>
@endforeach
    
@endsection
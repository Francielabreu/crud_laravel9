@extends('layout.app')
@section('title', 'Cadastro de Usuarios')

@section('content')

    <h1 class="text-4xl font-bold leading-tigh py-6 text-center uppercase">Editar Usuário: {{ $user->name }}</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update',$user->id) }}" method="post" class="my-8 px-4 max-w-3xl mx-auto bg-gray-100">
        @csrf
        @method('PUT')

        <div class="py-2 space-y-4">
            <div class="space-y-1">
                <label class="text-gray-600 font-bold">Nome</label>
                <input type="text" name="name" placeholder="Informe seu Nome"
                    class="border border-gray-400 px-4 py-1 rounded block w-full" value="{{ $user->name}}">
            </div>

            <div class="space-y-1">
                <label class="text-gray-600 font-bold">E-mail</label>
                <input type="email" name="email" placeholder="Informe seu E-mail"
                    class=" border border-gray-400 px-4 py-1 rounded block w-full" value="{{ $user->email }}">
            </div>

            <div class="space-y-1">
                <label class="text-gray-600 font-bold">Password</label>
                <input type="password" name="password" placeholder="Informe o Password"
                    class=" border border-gray-400 px-4 py-1 rounded block w-full">
            </div>
        </div>

        <div div class="py-4">
            <button type="submit"
                class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus: outline-none text-white font-bold py-2  px-4 py-1 rounded">Editar</button>
        </div>
    </form>

@endsection

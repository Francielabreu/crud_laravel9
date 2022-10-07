@extends('layout.app')
@section('title', 'Cadastro de Usuarios')

@section('content')
    <h1 class="text-4xl font-bold leading-tigh py-6 text-center uppercase">Editar Usuário: {{ $user->name }}</h1>

    @include('validate.error')

    <form action="{{ route('users.update',$user->id) }}" method="post" class="my-8 px-4 max-w-3xl mx-auto bg-gray-100">
        @method('PUT')

        @include('users.partials.forms')

        <div div class="py-4">
            <button type="submit" class="w-full shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus: outline-none text-white font-bold py-2  px-4 py-1 rounded uppercase">Editar</button>
        </div>
    </form>
@endsection

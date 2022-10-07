@extends('layout.app')
@section('title','Detalhe do Usuario')

@section('content')
<h1 class="text-4xl font-bold leading-tigh py-6 text-center uppercase">Detalhes do Usuario: {{ $user->name }}</h1>

<form action="#" method="post" class="my-8 px-4 max-w-3xl mx-auto bg-gray-100">
    @include('users.partials.forms')

    <form action="{{ route('users.destroy',$user->id) }}" method="post" class="py-4">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-full shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus: outline-none text-white font-bold py-2 uppercase px-4 py-1 rounded">Deletar</button>
    </form>
</form>
@endsection
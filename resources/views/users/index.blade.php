@extends('layout.app')
@section('title','Listagem de Usuarios')


@section('content')
<h1 class="text-4xl font-bold leading-tigh py-4 uppercase text-center">Listagem de Usuarios</h1>

<div class="py-5">
  <a href="{{ route('users.create') }} " class="bg-orange-400 rounded text-white px-3 py-1 text-lg">Novo Usuario</a>
</div>


<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden text-center">
    <thead>
      <tr>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">ID</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Nome</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Email</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Data de Cadastro</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->id }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->name }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ date( 'd/m/Y' , strtotime($user->created_at)) }}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <a href="{{ route('users.edit',$user->id) }}" class="bg-green-200 rounded py-2 px-6">Editar</a>
                    <a href="{{ route('users.show',$user->id) }}" class="bg-blue-200 rounded py-2 px-6">Detalhes</a>
                </td>
                
            </tr>
      @endforeach
    </tbody>
  </table>

@endsection
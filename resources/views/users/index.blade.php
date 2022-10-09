@extends('layout.app')
@section('title','Listagem de Usuarios')


@section('content')
<h1 class="text-4xl font-bold leading-tigh py-4 uppercase text-center uppercase">Listagem de Usuarios</h1>

<form action="{{ route('users.index') }}" method="get">
  @csrf
 
    <a href="{{ route('users.create') }} " class="bg-orange-400 rounded text-white px-3 py-1 uppercase">Novo Usuario</a>

    <input type="text" name="search" placeholder="Pesquisar" class="text-white px-3 py-1 uppercase border rounded">
    <button type="submit" class="bg-orange-400 rounded text-white px-3 py-1 uppercase">Pesquisar</button>

</form>


<div class="py-5">
  
</div>


<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden text-center uppercase">
    <thead>
      <tr>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">ID</th>
        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider text-center">Image</th>
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
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                  @if ($user->image)
                  <img src="{{ url("storage/{$user->image}") }}" width="50px" height="50px">
                  @else
                  <img src="{{ url('storage/images/users.png') }}" width="50px" height="50px">   
                  @endif
                  
                  
                </td>
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

  <div class="py-4">
    {{ $users->appends([
      'search' => request()->get('search', '')
  ])->links() }}
  </div>

@endsection
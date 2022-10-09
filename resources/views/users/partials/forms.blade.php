
@csrf

<div class="py-2 space-y-4">

    <div class="space-y-1">
        <label class="text-gray-600 font-semibold uppercase">Foto</label>
        <input type="file" name="image"
            class="border border-gray-400 px-4 py-1 rounded block w-full">
    </div>

    <div class="space-y-1">
        <label class="text-gray-600 font-semibold uppercase">Nome</label>
        <input type="text" name="name" placeholder="Informe seu Nome"
            class="border border-gray-400 px-4 py-1 rounded block w-full" value="{{ $user->name ?? old('name') }}">
    </div>

    <div class="space-y-1">
        <label class="text-gray-600 font-semibold uppercase">E-mail</label>
        <input type="email" name="email" placeholder="Informe seu E-mail"
            class=" border border-gray-400 px-4 py-1 rounded block w-full" value="{{ $user->email ?? old('email') }}">
    </div>

    <div class="space-y-1">
        <label class="text-gray-600 font-semibold uppercase">Password</label>
        <input type="password" name="password" placeholder="Informe o Password"
            class=" border border-gray-400 px-4 py-1 rounded block w-full" value="{{ old('password')  }}">
    </div>
</div>
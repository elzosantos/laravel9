@extends('layouts.app')

@section('title', 'Listagem de usuários')

@section('content')

    <div class="flex flex-col">


        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                    Lista de Usuários
                </div>

                <div class="p-3  w-1/4">

                    <form action="#" method="GET">

                        <div class="flex items-center border-b border-b-1 border-info py-2">
                            <input
                                class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 
                                leading-tight focus:outline-none"
                                type="text" placeholder="Pesquisar" aria-label="Pesquisar" name="search">
                            <button
                                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 
                                text-sm border-4 text-white py-1 px-2 rounded"
                                type="submit">
                                Pesquisar
                            </button>

                        </div>
                    </form>
                </div>

                <div class="p-3">
                    <table class="table-responsive w-full rounded">
                        <thead>
                            <tr>
                                <th class="border w-1/7 px-4 py-2">#</th>
                                <th class="border w-1/4 px-4 py-2">Nome</th>
                                <th class="border w-1/6 px-4 py-2">E-mail</th>
                                <th class="border w-1/7 px-4 py-2">Status</th>
                                <th class="border w-1/7 px-4 py-2">Path</th>
                                <th class="border w-1/5 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>

                                    <td class="border px-4 py-2">
                                        @if ($user->image)
                                            <img src="{{ url("storage/{$user->image}") }}" alt="{{ $user->name }}" class="w-10" >
                                        @else
                                            <img src="{{ url("images/login-new.jpeg") }}" alt="{{ $user->name }}" class="w-10">
                                        @endif
                                    </td>
                                        <td class="border px-4 py-2">
                                            {{ $user->name }}
                                    </td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>

                                    <td class="border px-4 py-2">
                                        <i class="fas fa-check text-green-500 mx-2"></i>
                                    </td>
                                    <td class="border px-4 py-2">{{ $user->image }}</td>

                                    <td class="border px-4 py-2">
                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white"
                                            href="{{ route('users.show', $user->id) }}">
                                            <i class="fas fa-eye"></i></a>
                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white"
                                            href="{{ route('users.edit', $user->id) }}">
                                            <i class="fas fa-edit"></i></a>
                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                            <i class="fas fa-trash"></i>

                                        </a>
                                        <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white"
                                            href="{{ route('cars.index', $user->id) }}">
                                            <i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="py-4 p-3">
                        {{ $users->appends([
                                'search' => request()->get('search', ''),
                            ])->links() }}
                    </div>
                    <div class="p-3">
                        <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            <a href="{{ route('users.create') }}">Novo</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

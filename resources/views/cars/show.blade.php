@extends('layouts.app')
@section("title", "My Car - Gestão de Veicular")
@section('content')

    <div class="flex flex-col">
        <!-- Card Sextion Starts Here -->
        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <!--Horizontal form-->
            <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                    Lista do usuário {{ $users->name }}
                </div>
                <div class="p-3">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th class="border w-1/2 px-4 py-2">Nome</th>
                                <th class="border w-1/4 px-4 py-2">E-mail</th>
                                <th class="border w-1/4 px-4 py-2">Data Criação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">{{ $users->name }}</td>
                                <td class="border px-4 py-2">{{ $users->email }}</td>
                                <td class="border px-4 py-2">{{ $users->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3">
        <form action="{{ route('users.destroy', $users->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">
                Deletar
            </button>
        </form>
    </div>

@endsection

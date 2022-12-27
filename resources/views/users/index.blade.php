@extends('layouts.app')

@section('title', 'Listagem de usuários')

@section('content')

<div class="flex flex-col">
    <!--Grid Form-->
    <form action="#" method="GET">
        <input type="text" name="search" placeholder="Pesquisar">
        <button type="submit">Pesquisar</button>
    </form>
    <br>
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Lista de usuários - <a href="{{ route('users.create') }}">+</a>
            </div>
            <div class="p-3">
                <table class="table-responsive w-full rounded">
                    <thead>
                        <tr>
                            <th class="border w-1/4 px-4 py-2">Nome</th>
                            <th class="border w-1/6 px-4 py-2">E-mail</th>
                            <th class="border w-1/7 px-4 py-2">Status</th>
                            <th class="border w-1/5 px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border px-4 py-2">{{ $user->name }}</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>
                              
                                <td class="border px-4 py-2">
                                    <i class="fas fa-check text-green-500 mx-2"></i>
                                </td> 
                                
                                <td class="border px-4 py-2">
                                    <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white"  href="{{ route('users.show', $user->id ) }}">
                                        <i class="fas fa-eye"></i></a>
                                    <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href="{{ route('users.edit', $user->id ) }}">
                                        <i class="fas fa-edit"></i></a>
                                    <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                        <i class="fas fa-trash"></i>
                                       
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

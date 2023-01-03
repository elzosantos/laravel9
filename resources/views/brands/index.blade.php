@extends('layouts.app')

@section('title', 'Listagem de Carros')

@section('content')

    <div class="flex flex-col">


        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                    Listagem de Carros
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
                                <th class="border w-1/4 px-4 py-2">Marca</th>
                                <th class="border w-1/6 px-4 py-2">Modelo</th>
                                <th class="border w-1/5 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand)
                                @foreach ($brand->vehicles as $vehicle)
                                    <tr>

                                        <td class="border px-4 py-2">
                                            <img src="{{ url('images/login-new.jpeg') }}" class="w-10">

                                        </td>
                                        <td class="border px-4 py-2">
                                            {{ $brand->name }}
                                        </td>
                                        </td>
                                        <td class="border px-4 py-2">
                                            {{ $vehicle->name }}
                                        </td>


                                        <td class="border px-4 py-2">
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white"
                                                href="{{ route('users.show', $vehicle->id) }}">
                                                <i class="fas fa-eye"></i></a>
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white"
                                                href="{{ route('users.edit', $vehicle->id) }}">
                                                <i class="fas fa-edit"></i></a>
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                <i class="fas fa-trash"></i>

                                            </a>
                                            <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white"
                                                href="{{ route('cars.index', $vehicle->id) }}">
                                                <i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>

                    <div class="py-4 p-3">
                        {{ $brands->appends([
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

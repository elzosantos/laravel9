@extends('layouts.app')

@section('title', '')

@section('content')

    <div class="flex flex-col">


        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                    Tabela FIPE
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
                    <div class="flex items-center border-b border-b-1 border-info py-2">
                        Veiculos carregados!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

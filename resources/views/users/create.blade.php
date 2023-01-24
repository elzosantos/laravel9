@extends('layouts.app')
@section("title", 'Novo usuário')
@section('content') 

<div class="flex flex-col">
    <!-- Card Sextion Starts Here -->
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <!--Horizontal form-->
        <div class="mb-2 border-solid border-grey-light rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
            <div class="bg-gray-300 px-2 py-3 border-solid border-gray-400 border-b">
                Cadastrar
            </div>
            <div class="p-3">
                <form class="w-full" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @include('includes.validations-form') 
                    @include('users._partials.form')

                </form>
            </div>
        </div>
    </div> 
</div> 
@endsection

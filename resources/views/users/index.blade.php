
@extends('layouts.app')

@section("title", 'Listagem de usuários')

@section('content')
    <h1> Lista de usuários - <a href="{{route('users.create')}}">+</a></h1>
    
    <form action="#" method="GET">
        <input type="text" name="search" placeholder="Pesquisar">
        <button type="submit">Pesquisar</button>
    </form>
    <br>
    @foreach ($users as $user)

        <li>{{ $user->name }} -  {{ $user->email }}
        | <a href="{{ route('users.edit', $user->id ) }}">Editar</a></li>    
        | <a href="{{ route('users.show', $user->id ) }}">Detalhes</a></li>    
    @endforeach  
@endsection

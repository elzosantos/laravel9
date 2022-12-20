@extends('layouts.app')
@section("title", 'Listagem do usuário')
@section('content')
<h1> Lista do usuário {{ $users->name }}</h1>
<ul>

    <li>{{$users->name}}</li>
    <li>{{$users->email}}</li>
    <li>{{$users->created_at}}</li>

</ul> 
<form action="{{route('users.destroy', $users->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>

@endsection

@extends('layouts.app')
@section("title", 'Editar Usuario {{ $users->name }}')
@section('content')
<h1> Editar o usuário {{ $users->name }}</h1>
@include('includes.validations-form')
<form action="{{route('users.update', $users->id)}}" method="post">
    <input type="hidden" name="_method" value="PUT">
    @include('users._partials.form')
</form>
 
@endsection

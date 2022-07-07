@extends('layouts.app')

@section('content')
    <h1>Editar Enemigo - {{$enemy->name}}</h1>

    <form action="{{route('enemy.update', ['enemy'=> $enemy->id])}}" method="POST">
        @method('PUT')
        
        @include('admin.enemies.form')

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection
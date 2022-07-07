@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Enemigo</h1>

    <form action="{{route('enemy.store')}}" method="POST">
        @include('admin.enemies.form')

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection
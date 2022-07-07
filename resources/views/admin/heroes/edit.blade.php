@extends('layouts.app')

@section('content')
    <h1>Editar Heroe - {{$hero->name}}</h1>

    <form action="{{route('heroes.update', ['hero'=> $hero->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$hero->name}}" placeholder="Ingrese un nombre" required>
        </div>

        <div class="mb-3">
            <label for="hp" class="form-label">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{$hero->hp}}" placeholder="Ingrese los puntos de vida" required>
        </div>

        <div class="mb-3">
            <label for="atq" class="form-label">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" value="{{$hero->atq}}" placeholder="Ingrese los puntos de ataque" required>
        </div>

        <div class="mb-3">
            <label for="def" class="form-label">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{$hero->def}}" placeholder="Ingrese los puntos de defensa" required>
        </div>

        <div class="mb-3">
            <label for="luck" class="form-label">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{$hero->luck}}" placeholder="Ingrese los puntos de suerte" required>
        </div>

        <div class="mb-3">
            <label for="coins" class="form-label">Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" value="{{$hero->coins}}" placeholder="Ingrese la cantidad de monedas" required>
        </div>

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection
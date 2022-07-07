@extends('layouts.app')

@section('content')
    <h1>Editar Item - {{$item->name}}</h1>

    <form action="{{route('items.update', ['item'=> $item->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$item->name}}" placeholder="Ingrese un nombre" required>
        </div>

        <div class="mb-3">
            <label for="hp" class="form-label">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{$item->hp}}" placeholder="Ingrese los puntos de vida" required>
        </div>

        <div class="mb-3">
            <label for="atq" class="form-label">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" value="{{$item->atq}}" placeholder="Ingrese los puntos de ataque" required>
        </div>

        <div class="mb-3">
            <label for="def" class="form-label">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" value="{{$item->def}}" placeholder="Ingrese los puntos de defensa" required>
        </div>

        <div class="mb-3">
            <label for="luck" class="form-label">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" value="{{$item->luck}}" placeholder="Ingrese los puntos de suerte" required>
        </div>

        <div class="mb-3">
            <label for="cost" class="form-label">Precio</label>
            <input type="number" class="form-control" id="cost" name="cost" value="{{$item->cost}}" placeholder="Ingrese la cantidad de monedas" required>
        </div>

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection
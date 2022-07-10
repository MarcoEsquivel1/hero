@extends('layouts.app')

@section('content')
    <h1>Editar Heroe - {{$hero->name}}</h1>

    <form action="{{route('hero.update', ['hero'=> $hero->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')

        @include('admin.heroes.form')

        <button type="submit" class="btn btn-warning">Editar</button>
    </form>
@endsection
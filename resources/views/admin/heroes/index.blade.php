@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Lista de Heroes</h1>
    </div>

    <div class="row my-3">
        <div class="col-auto">
            <a class="btn  btn-primary" href="{{route('heroes.create')}}" role="button">Crear</a>
        </div>
    </div>

    <div class="row gx-0">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">HP</th>
                <th scope="col">Ataque</th>
                <th scope="col">Defensa</th>
                <th scope="col">Suerte</th>
                <th scope="col">Monedas</th>
                <th scope="col">Experiencia</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($heroes as $hero)
                    <tr>
                        <th scope="row">{{$hero->id}}</th>
                        <td>{{$hero->name}}</td>
                        <td>{{$hero->hp}}</td>
                        <td>{{$hero->atq}}</td>
                        <td>{{$hero->def}}</td>
                        <td>{{$hero->luck}}</td>
                        <td>{{$hero->coins}}</td>
                        <td>{{$hero->xp}}</td>
                        <td>
                            <div class="row">
                                <div class="col-auto">
                                    <a class="btn  btn-warning" href="{{route('heroes.edit', ['hero'=> $hero->id]) }}" role="button">Modificar</a>
                                </div>
                                <div class="col-auto">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Modal{{$hero->id}}">
                                        Borrar
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal{{$hero->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel{{$hero->id}}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Seguro de borrar el heroe: {{$hero->name}} ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Si da a "Aceptar" no podra recuperar el registro borrado
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    <form action="{{route('heroes.destroy', ['hero'=>$hero->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn  btn-danger" type="submit">Aceptar </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>      
    </div>


    
@endsection
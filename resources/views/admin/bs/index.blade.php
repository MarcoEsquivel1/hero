@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Sistema de Batalla</h1>
    </div>

    <div class="row text-center text-white mt-3">
        <div class="col-5 bg-primary">
            <h2>{{$heroName}}</h2>
            
        </div>

        <div class="col bg-warning">
            <h2>VS</h2>
            
        </div>

        <div class="col-5 bg-danger">
            <h2>{{$enemyName}}</h2>
        
        </div>
    </div>

    <div class="row text-center text-white mt-3 bg-success">
        <div class="col">
            <h2>Eventos de Batalla</h2>
        </div>
    </div>

    <div class="mt-3">
        @foreach ($events as $ev)
            <div class='alert @if($ev["winner"] == "hero") alert-success @else alert-danger @endif' role="alert">
                {{$ev["text"]}}
            </div>
        @endforeach
    </div>

@endsection
@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Sistema de Batalla</h1>
    </div>

    <div class="row text-center text-white mt-3">
        <div class="col bg-primary">
            <h2>HERO</h2>
            
        </div>

        <div class="col bg-warning">
            <h2>VS</h2>
            
        </div>

        <div class="col bg-danger">
            <h2>ENEMY</h2>
        
        </div>
    </div>

    <div class="row text-center text-white mt-3 bg-success">
        <div class="col">
            <h2>Eventos de Batalla</h2>
        </div>
    </div>

    <div class="mt-3">
        <div class="alert alert-success" role="alert">
            Hero hace un ataque de 15 a Enemigo
        </div>

        <div class="alert alert-danger" role="alert">
            Enemigo da;a a Hero con 10 puntos...
        </div>
    </div>

@endsection
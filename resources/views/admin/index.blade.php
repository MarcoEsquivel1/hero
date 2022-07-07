@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Admininistrador de Hero</h1>       
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Entidad</td>
                    <th scope="col">Cantidad de elementos</td>
                    <th scope="col">Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($report as $item)
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['counter']}}</td>
                        <td>
                            <div class="col-auto">
                                <a class="btn {{$item['class']}}" href="{{route($item['route'])}}" role="button">Ir a {{$item['name']}}</a>
                            </div>
                        </td>
                    </tr>                  
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
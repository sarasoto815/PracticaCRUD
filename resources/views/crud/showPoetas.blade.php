@extends('layouts.master')
@section('title', 'Mostrar Usuarios')
@section('frase', 'EL ARTE LIMPIA DEL ALMA EL POLVO DE LA VIDA COTIDIANA')

@section('header')
    @parent <h1>Mostrar Poetas</h1>
@stop

@section('navbar')
    @parent
@stop

@section('contenido')
    <div>
        <a href="{{action('Crud@create')}}">  Agregar un nuevo poeta</a>
        <img src="../images/poeta.png" alt="">
    </div>

    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">Poet_Code</th>
            <th scope="col">First_Name</th>
            <th scope="col">SurName</th>
            <th scope="col">Address</th>
            <th scope="col">PostCode</th>
            <th scope="col">Telephone_Number</th>
            <th scope="col">Actualizar </th>
            <th scope="col">Borrar </th>
        </tr>
        </thead>
        <tbody>
        @foreach($poetas as $user)
            <tr>
                <th scope="row">{{$user ->Poet_Code}}</th>
                <td>{{$user->First_Name}}</td>
                <td>{{$user->SurName}}</td>
                <td>{{$user->Address}}</td>
                <td>{{$user->PostCode}}</td>
                <td>{{$user->Telephone_Number}}</td>
                <td><a href="{{action('Crud@show',['id'=>$user->Poet_Code])}}">
                        <img src="../images/actualizar (2).png" alt="" width="50px">
                    </a></td>
                <td><a href="{{action('Crud@destroy',['id'=>$user->Poet_Code])}}">
                        <img src="../images/eliminar.png" alt="" width="50px">
                    </a>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
    <div class="alert alert-danger" role="alert">
        {{session('status')}}
    </div>
@stop

@section('footer')
    @parent
@stop

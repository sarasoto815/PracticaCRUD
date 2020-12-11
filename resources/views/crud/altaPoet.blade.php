@extends('layouts.master')
@if(isset($user) and is_object($user))
    @php
        $title='Modificacion de un Poeta';
   $boton ='Actualizar';
    $id = $user->Poet_Code;
    $First_Name =$user->First_Name;
    $SurName= $user->SurName;
    $Address=$user->Address;
     $PostCode=$user->PostCode;
      $Telephone_Number=$user->Telephone_Number;
    @endphp
@else
    @php
        $title='Alta Poeta';
     $boton ='Alta';
     $id = '';
    $First_Name ='';
    $SurName= '';
    $Address='';
    $PostCode='';
    $Telephone_Number='';
    @endphp
@endif


@section('title', 'Mostrar Usuarios')
@section('frase', 'EL ARTE LIMPIA DEL ALMA EL POLVO DE LA VIDA COTIDIANA')

@section('header')
    @parent <h1>Alta de Usuarios</h1>
    @php

        @endphp
@stop

@section('navbar')
    @parent
@stop

@section('contenido')
    <form action="{{isset($user)?action('Crud@update'):action('Crud@store')}}" method="POST">
        {{csrf_field()}}
        @if(isset($user) and is_object($user))
            <input type="hidden" name="id" value="{{$id}}" />
        @endif
        <label for="nombre">First_Name</label>
        <input type="text" name="nombre" value="{{$First_Name}}" >
        <br>
        <label for="apellido">SurName</label>
        <input type="text" name="apellido" value="{{$SurName}}">
        <br>
        <label for="direccion">Address</label>
        <input type="text" name="direccion" value="{{$Address}}">
        <br>
        <label for="codigo">PostCode</label>
        <input type="text" name="codigo" value="{{$PostCode}}">
        <br>
        <label for="telefono">Telephone_Number</label>
        <input type="text" name="telefono" value="{{$Telephone_Number}}">
        <br>
        <input type="submit" value="{{$boton}}">
    </form>

@stop

@section('footer')
    @parent
@stop

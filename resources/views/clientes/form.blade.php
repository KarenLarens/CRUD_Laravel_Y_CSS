@extends('layouts.plantillabase')

@section('contenido')
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{isset($clientes->Nombre)?$clientes->Nombre:''}}" id="Nombre">
<br>
<br>

<label for="ApellidoPaterno"> ApellidoPaterno</label>
<input type="text" name="ApellidoPaterno" value="{{isset($clientes->ApellidoPaterno)?$clientes->ApellidoPaterno:''}}" id="ApellidoPaterno">
<br>
<br>

<label for="ApellidoMaterno"> ApellidoMaterno</label>
<input type="text" name="ApellidoMaterno" value="{{isset($clientes->ApellidoMaterno)?$clientes->ApellidoMaterno:''}}" id="ApellidoMaterno">
<br>
<br>
<label for ="Sexo">Sexo</label>
<input type="text" name="Sexo" value="{{isset($clientes->Sexo)?$clientes->Sexo:''}}" id="Sexo">
<br>
<br>
<label for="Edad">Edad</label>
<input type="text" name="Edad" value="{{isset($clientes->Edad)?$clientes->Edad:''}}" id="Edad">
<br>
<br>  
    <button type="submit">Enviar</button>
    <br>
    <br>
        <a href="{{url('clientes/')}}">Regresar</a>
    <br>
    <br>
    <br>
    @endsection
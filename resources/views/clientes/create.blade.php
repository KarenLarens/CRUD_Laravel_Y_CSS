
@extends('layouts.plantillabase')

@section('contenido')
Formulario de creación de clientes 
<br>
<br>
<form action="{{ url('/clientes')}}"method="post" enctype="multipart/form-data">
@csrf 
@include ('clientes.form');
</form>
@endsection
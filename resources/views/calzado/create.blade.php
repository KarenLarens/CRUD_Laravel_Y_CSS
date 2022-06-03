@extends('layouts.plantillabase')

@section('contenido')
Formulario de creación de calzado
<br>
<br>
<form action="{{ url('/calzado')}}" method="post" enctype="multipart/form-data">
@csrf 
@include('calzado.form');  
</form>
@endsection

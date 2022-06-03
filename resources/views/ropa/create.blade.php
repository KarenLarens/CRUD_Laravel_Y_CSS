@extends('layouts.plantillabase')

@section('contenido')
Formulario de creación de ropa 
<br>
<br>
<form action="{{ url('/ropa')}}" method="post" enctype="multipart/form-data">
@csrf  
@include ('ropa.form');

</form>
@endsection
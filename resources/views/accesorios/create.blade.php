@extends('layouts.plantillabase')

@section('contenido')
Formulario de creación de accesorios
<br>
<br>
<form action="{{ url('/accesorios')}}" method="post" enctype="multipart/form-data">
@csrf 
@include('accesorios.form');    
</form>
@endsection

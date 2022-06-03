@extends('layouts.plantillabase')

@section('contenido')
Formulario de edicion de calzado
<form action="{{ url('/calzado/'.$calzado->id )}}" method="post" enctype="multipart/form-data">
@csrf 
{{method_field('PATCH')}}
@include('calzado.form');  
</form>
@endsection

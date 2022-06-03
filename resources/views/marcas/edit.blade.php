@extends('layouts.plantillabase')

@section('contenido')
Formulario de edicion de marcas
<form action="{{ url('/marcas/'.$marcas->id )}}" method="post" enctype="multipart/form-data">
@csrf 
{{method_field('PATCH')}}
@include ('marcas.form');
</form>
@endsection
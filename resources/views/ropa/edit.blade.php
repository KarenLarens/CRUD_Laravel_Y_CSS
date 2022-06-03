@extends('layouts.plantillabase')

@section('contenido')


Formulario de edicion de ropa
<form action="{{ url('/ropa/'.$ropa->id )}}" method="post" enctype="multipart/form-data">
@csrf 
{{method_field('PATCH')}}
@include ('ropa.form'); 
</form>
@endsection
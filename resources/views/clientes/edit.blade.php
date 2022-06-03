
@extends('layouts.plantillabase')

@section('contenido')
Formulario de edicion de clientes
<form action="{{ url('/clientes/'.$clientes->id )}}" method="post" enctype="multipart/form-data">
@csrf 
{{method_field('PATCH')}}
@include ('clientes.form');
</form>
@endsection
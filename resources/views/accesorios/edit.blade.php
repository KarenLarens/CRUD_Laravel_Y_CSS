@extends('layouts.plantillabase')

@section('contenido')
Formulario de edicion de accesorios
<form action="{{ url('/accesorios/'.$accesorio->id )}}" method="post" enctype="multipart/form-data">
@csrf 
{{method_field('PATCH')}}
@include('accesorios.form'); 
</form>
@endsection


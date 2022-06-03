@extends('layouts.plantillabase')

@section('contenido')
Formulario de creación de marcas
<br>
<br>
<form action="{{ url('/marcas')}}" method="post" enctype="multipart/form-data">
 @csrf 
 @include ('marcas.form');  
</form>
@endsection
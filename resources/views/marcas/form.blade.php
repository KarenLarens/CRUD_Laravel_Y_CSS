@extends('layouts.plantillabase')

@section('contenido')
<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{isset($marcas->Nombre)?$marcas->Nombre:''}}"id="Nombre">
    <br>
    <br>
    <label for="Pais">Pais</label>
    <input type="text" name="Pais" value="{{isset($marcas->Pais)?$marcas->Pais:'' }}" id="Pais">
    <br>
    <br>
    <label for="Foto">Foto</label>
        @if(isset($marcas->Foto))
            <img src="{{asset('storage'.'/'.$marcas->Foto)}}" width="100" alt="">
        @endif
    <input type="file" name="Foto" value=" "  id="Foto">
    <br>
    <br>
    <button type="submit">Enviar</button>

    <br>
    <br>
        <a href="{{url('marcas/')}}">Regresar</a>
    <br>
    <br>
    <br>
    @endsection
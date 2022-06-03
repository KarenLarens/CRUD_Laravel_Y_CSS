@extends('layouts.plantillabase')

@section('contenido')
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{isset($calzado->Nombre)?$calzado->Nombre:'' }}" id="Nombre">
    <br>
    <br>
    <label for="Marca">Marca</label>
    <input type="text" name="Marca" value="{{isset($calzado->Marca)?$calzado->Marca:'' }}" id="Marca">
    <br>
    <br>
    <label for="NumeroCalzado">NumeroCalzado</label>
    <input type="text" name="NumeroCalzado" value="{{isset($calzado->NumeroCalzado)?$calzado->NumeroCalzado:'' }}" id="NumeroCalzado">
    <br>
    <br>
    <label for="Modelo">Modelo</label>
    <input type="text" name="Modelo"value="{{isset($calzado->Modelo)?$calzado->Modelo:'' }}" id="Modelo">
    <br>
    <br>
    <label for="Color">Color</label>
    <input type="text" name="Color" value="{{isset($calzado->Color)?$calzado->Color:'' }}" id="Color">
    <br>
    <br>
    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{isset($calzado->Precio)?$calzado->Precio:'' }}" id="Precio">
    <br>
    <br>
    <label for="Foto">Foto</label>
        @if(isset($calzado->Foto))
            <img src="{{asset('storage'.'/'.$calzado->Foto)}}" width="100" alt="">
        @endif
    <input type="file" name="Foto" value="" id="Foto">
    <br>
    <br>
    <button type="submit">Enviar</button>
    <br>
    <br>
        <a href="{{url('calzado/')}}">Regresar</a>
    <br>
    <br>
    <br>
    @endsection
       
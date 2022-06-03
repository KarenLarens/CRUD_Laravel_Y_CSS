@extends('layouts.plantillabase')

@section('contenido')



    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre"  value="{{isset($ropa->Nombre)?$ropa->Nombre:''}}" id="Nombre">
    <br>
    <br>
    <label for="Marca">Marca</label>
    <input type="text" name="Marca" value="{{isset($ropa->Marca)?$ropa->Marca:'' }}" id="Marca">
    <br>
    <br>
    <label for="Modelo">Modelo</label>
    <input type="text" name="Modelo" value="{{isset($ropa->Modelo)?$ropa->Modelo:''}}"id="Modelo">
    <br>
    <br>
    <label for="Talla">Talla</label>
    <input type="text" name="Talla" value="{{isset($ropa->Talla)?$ropa->Talla:'' }}"id="Talla">
    <br>
    <br>
    <label for="Color">Color</label>
    <input type="text" name="Color" value="{{isset($ropa->Color)?$ropa->Color:'' }}"id="Color">
    <br>
    <br>
    <label for="Foto">Foto</label>
        @if(isset($ropa->Foto))
            <img src="{{asset('storage'.'/'.$ropa->Foto)}}" width="100" alt="">
        @endif
    <input type="file" name="Foto" value="" id="Foto">
    <br>
    <br>
    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{isset($ropa->Precio)?$ropa->Precio:'' }}"id="Precio">
    <br>
    <br>
    <button type="submit">Enviar</button>
    <br>
    <br>
        <a href="{{url('ropa/')}}">Regresar</a>
    <br>
    <br>
    <br>
    @endsection
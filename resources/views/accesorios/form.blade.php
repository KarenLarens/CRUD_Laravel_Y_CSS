
    @extends('layouts.plantillabase')

@section('contenido')
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ isset($accesorio->Nombre)?$accesorio->Nombre:''}}" id="Nombre">
    <br>
    <br>
    <label for="Marca">Marca</label>
    <input type="text" name="Marca" value="{{ isset($accesorio->Marca)?$accesorio->Marca:'' }}" id="Marca">
    <br>
    <br>
    <label for="Modelo">Modelo</label>
    <input type="text" name="Modelo" value="{{ isset($accesorio->Modelo)?$accesorio->Modelo:''}}" id="Modelo">
    <br>
    <br>
    <label for="Color">Color</label>
    <input type="text" name="Color" value="{{ isset($accesorio->Color)?$accesorio->Color:'' }}" id="Color">
    <br>
    <br>
    <label for="Foto">Foto</label>
        @if(isset($accesorio->Foto))
            <img src="{{asset('storage'.'/'.$accesorio->Foto)}}" width="100" alt="">
        @endif
    <input type="file" name="Foto" value="" id="Foto">
    <br>
    <br>
    <label for="Precio">Precio</label>
    <input type="text" name="Precio" value="{{ isset($accesorio->Precio)?$accesorio->Precio:''}}" id="Precio">
    <br>
    <br>
    <button type="submit">Enviar</button>
    
    <br>
    <br>
        <a href="{{url('accesorios/')}}">Regresar</a>
    <br>
    <br>
    <br>
    @endsection
    

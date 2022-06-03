@extends('layouts.plantillabase')

@section('contenido')
Mostrar la lista de calzado
<br>
<br>
@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<br>
<br>
<a href="{{url('calzado/create')}}">Agregar nuevo calzado</a>
<br>
<br>
<table class="table table-light">
    
<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>NumeroCalzado</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
   
    <tbody>
        @foreach ($calzado as $calzado)
        <tr>
            <td>{{ $calzado->id }}</td>
            <td>
                <img src="{{asset('storage').'/'.$calzado->Foto}}" alt="">
            </td>
            <td>{{ $calzado->Nombre }}</td>
            <td>{{ $calzado->Marca }}</td>
            <td>{{ $calzado->NumeroCalzado }}</td>
            <td>{{ $calzado->Modelo}}</td>
            <td>{{ $calzado->Color}}</td>
            <td>{{ $calzado->Precio}}</td>
            <td>
                
            <a href="{{url ('/calzado/'.$calzado->id.'/edit')}}">
                            Editar 
            
            </a>
                    |
                

            <form action="{{url('/calzado/'.$calzado->id )}}" method="post">
                        @csrf
                            {{method_field('DELETE')}}
                            <input type="submit"  onclick="return confirm ('¿Quieres borrar?')" 
                            value="Borrar">

                    </form>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
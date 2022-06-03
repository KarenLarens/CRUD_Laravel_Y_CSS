@extends('layouts.plantillabase')

@section('contenido')
Mostrar la lista de clientes
<br>
<br>

@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<br>
<br>
<a href="{{url('clientes/create')}}">Agregar nuevo cliente</a>
<br>
<br>
<table class="table table-light">
    
<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
   
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->Nombre }}</td>
            <td>{{ $cliente->ApellidoPaterno }}</td>
            <td>{{ $cliente->ApellidoMaterno }}</td>
            <td>{{ $cliente->Sexo }}</td>
            <td>{{ $cliente->Edad }}</td>
            <td>
            <a href="{{url ('/clientes/'.$cliente->id.'/edit')}}">
                            Editar 
            
            </a>
                    | 
              
            <form action="{{url('/clientes/'.$cliente->id )}}" method="post">
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
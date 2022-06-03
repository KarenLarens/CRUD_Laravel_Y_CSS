@extends('layouts.plantillabase')

@section('contenido')
Mostrar la lista de marcas
<br>
<br>
@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<br>
<br>
<a href="{{url('marcas/create')}}">Agregar nueva marca</a>
<br>
<br>
<table class="table table-light">
    
<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Pais</th>
            <th>Acciones</th>
        </tr>
    </thead>
   
    <tbody>
        @foreach ($marcas as $marca)
            <tr>
                <td>{{ $marca->id }}</td>
                <td>
                <img src="{{asset('storage').'/'.$marca->Foto}}" alt="">
                </td>
                <td>{{ $marca->Nombre }}</td>
                <td>{{ $marca->Pais }}</td>
                <td>
                <a href="{{url ('/marcas/'.$marca->id.'/edit')}}">
                            Editar 
            
                </a>
                    | 
                
                    <form action="{{url('/marcas/'.$marca->id )}}" method="post">
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
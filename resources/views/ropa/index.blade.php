@extends('layouts.plantillabase')

@section('contenido')



Mostrar la lista de ropa
<br>
<br>

@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<br>
<br>
<a href="{{url('ropa/create')}}">Agregar nueva prenda</a>
<br>
<br>
<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Talla</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
   
    <tbody>
        @foreach ($ropa as $ropa)
            <tr>
                <td>{{ $ropa->id }}</td>

                <td>
                    <img src="{{asset('storage').'/'.$ropa->Foto}}" alt="">
                </td>

                <td>{{ $ropa->Nombre }}</td>
                <td>{{ $ropa->Marca }}</td>
                <td>{{ $ropa->Talla}}</td>
                <td>{{ $ropa->Modelo}}</td>
                <td>{{ $ropa->Color }}</td>
                <td>{{ $ropa->Precio}}</td>
                <td>
                    
                <a href="{{url ('/ropa/'.$ropa->id.'/edit')}}">
                            Editar 
            
            </a>
                    | 

                    <form action="{{url('/ropa/'.$ropa->id )}}" method="post">
                     @csrf
                        {{method_field('DELETE')}}
                        <input type="submit"  onclick="return confirm ('¿Quieres borrar?')" value="Borrar">

                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
  
</table>
@endsection
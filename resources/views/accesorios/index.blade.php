@extends('layouts.plantillabase')

@section('contenido')
Mostrar la lista de accesorios
<br>
<br>
@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<br>
<br>
<a href="{{url('accesorios/create')}}">Agregar nuevo accesorio</a>
<br>
<br>
<table class="table table-light">
    
<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
   
    <tbody>
        @foreach ($accesorios as $accesorio)
            <tr>
                <td>{{ $accesorio->id }}</td>
                <td>
                    <img src="{{asset('storage'.'/'.$accesorio->Foto)}}" alt="">
                </td>
                <td>{{ $accesorio->Nombre }}</td>
                <td>{{ $accesorio->Marca }}</td>
                <td>{{ $accesorio->Modelo}}</td>
                <td>{{ $accesorio->Color}}</td>
                <td>{{ $accesorio->Precio}}</td>
                <td>
                    <a href="{{url ('/accesorios/'.$accesorio->id.'/edit')}}">
                            Editar 
                    </a>
                    |

            
                    <form action="{{url('/accesorios/'.$accesorio->id )}}" method="post">
                     @csrf
                        {{ method_field('DELETE')}}
                        <input type="submit"  onclick="return confirm ('¿Quieres borrar?')" value="Borrar">

                    </form>

                </td>

            </tr>

        @endforeach
    </tbody>
</table>
@endsection
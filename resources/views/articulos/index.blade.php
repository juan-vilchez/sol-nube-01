@extends('layouts.app')

@section('content')

<div class="container">


<div>
    <nav class="navbar navbar-light bg-light float-right">
    <form class="form-inline">
        <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="ingrese nombre" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    </nav>
</div>



@if(Session::has('Mensaje'))

<div class="alert alert-primary" role="alert">
{{
    Session::get('Mensaje')
}}
</div>


@endif

<a href="{{url('articulos/create')}}" class="btn btn-primary">Agregar nuevo articulo</a>
</br></br>
<table class="table table-light table-hover">

    <thead class="thead-light">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
                
        <th>Opciones</th>
    </tr>
    </thead>

    <tbody>
    @foreach($articulos as $articulo)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$articulo->Nombre}}</td>
            <td>{{$articulo->Descripcion}}</td>
            <td>{{$articulo->Precio}}</td>
            <td>{{$articulo->Stock}}</td>
            <td>
            <a class="btn btn-warning" href="{{url('/articulos/'.$articulo->id.'/edit')}}">
                Editar
            </a>
            <form method="post" action="{{ url('/articulos/'.$articulo->id) }}" style="display:inline">
                {{csrf_field() }}
                {{method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que desea borrar el articulo?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$articulos->links()}}
</div>

@endsection

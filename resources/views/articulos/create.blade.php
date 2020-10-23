@extends('layouts.app')

@section('content')

<div class="container">

<form class="form-horizontal" action="{{url('/articulos')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('articulos.form',['Modo'=>'crear'])

</form>

</div>

@endsection

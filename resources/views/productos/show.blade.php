@extends('layouts.master')

@section('content')

    <h1>Esta en show</h1>

    <div class="row">

    <div class="col-sm-4">

	<br>
	
        {{-- TODO: Imagen genérica de los productos --}}
		<h1>{{$nombres->imagen}}</h1>
    </div>
    <div class="col-sm-8">
		<h2>{{$nombres->nombre}}</h2>
		<h2>{{$nombres->categoria}}</h2>
        {{-- TODO: Datos del producto --}}

    </div>
</div>


@stop
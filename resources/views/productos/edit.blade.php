@extends('layouts.master')

@section('content')

    <h1>Estas en editar: <?php echo $id ?></h1>
     				<form action="" method="POST">
                    {!!csrf_field()!!}
                    <span>nombre</span>
                    <input type="text" name="nombre">
                    <span>precio</span>
                    <input type="number" name="precio">
                    <span>categoria</span>
                    <input type="text" name="categoria">
                    <span>imagen</span>
                    <input type="number" name="imagen">
                    <span>descripcion</span>
                    <input type="textarea" name="descripcion">
                    <input type="submit" name="button" value="Editar Producto">
                </form>

@stop
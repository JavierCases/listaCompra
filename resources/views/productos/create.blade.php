@extends('layouts.master')

@section('content')

    <h1>Estas en create</h1>

                <form action="create" method="POST">
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
                    <input type="submit" name="button" value="Añadir Producto">
                </form>

@stop
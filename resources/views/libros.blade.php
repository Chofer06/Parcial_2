@extends('layouts.master')
@section('content')
    <br><h2 align="center" style="color: black"><strong>Listado Libros</strong></h2>
    <h3 align="right">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><strong>REGISTRAR</strong></button>
    </h3>
    <table class="table">
        <thead class="table table-striped table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">ISBN</th>
                <th scope="col">Titulo</th>
                <th scope="col">Stock</th>
                <th scope="col">Estado</th>
                <th scope="col">Editorial</th>
                <th scope="col">Precio</th>
                <th scope="col">Descuento</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody class="table table-striped table-secondary">
       
        </tbody>
    </table>
@stop
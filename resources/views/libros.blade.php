@extends('layouts.master')
@section('content')
    <br><h2 align="center" style="color: black"><strong>Listado Libros</strong></h2>
    <a href="libros/registrar">
        <h3 align="right">
            <button class="btn btn-success my-2 my-sm-0" type="submit" ><strong>REGISTRAR</strong></button>
        </h3>
    </a>
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
            @foreach($libro as $l)
                <tr>
                    <td> {{ $l ->id }} </td>
                    <td> {{ $l ->isbn }} </td>
                    <td> {{ $l ->titulo }}</td>
                    <td> {{ $l ->stock }}</td>
                    @if($l->stock == 0)
                        <td>Agotado</td>
                    @endif
                    @if($l->stock > 0 && $l->stock <=10)
                        <td>Ultimas Unidades</td>
                    @endif
                    @if($l->stock > 10)
                        <td>Disponible</td>
                    @endif
                    <td> {{ $l ->editorial }}</td>
                    <td> {{ $l ->precio }}</td>
                    @if($l->editorial == "Norma" || $l->editorial == "La Santillana")
                        @php($descuento = ($l->precio)*0.05)
                        <td> {{ $descuento}}</td>
                    @else
                        <td> 0 </td>
                    @endif
                    <td>
                    <a href="libros/actualizar">
                        <button class="btn btn-warning my-2 my-sm-0" type="submit" ><strong>ACTUALIZAR</strong></button>
                    </a>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
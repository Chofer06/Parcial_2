@extends('layouts.master')
@section('content')
    <br><h2 align="center" style="color: black"><strong>Listado Editoriales</strong></h2><br>
    <table class="table">
        <thead class="table table-striped table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Telefono</th>
            </tr>
        </thead>
        <tbody class="table table-striped table-secondary">
            @foreach($editorial as $e)
                <tr>
                    <td> {{ $e ->id }} </td>
                    <td> {{ $e ->nombre }} </td>
                    <td> {{ $e ->direccion }}</td>
                    <td> {{ $e ->ciudad }}</td>
                    <td> {{ $e ->telefomo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
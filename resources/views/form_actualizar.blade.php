@extends('layouts.master')
@section('content')
    <br><h3 align="center"><strong>Actualizar Libros</strong></h3><br>
	<form action="{{route('actualizarlibro', $libros->id)}}" method="POST">
		@csrf
        <div class="md-form">
			<label><strong>ISBN</strong></label>
	        <input required type="text" class="form-control input-sm" value="{{$libros->isbn}}" id="isbn" name="isbn">
	    </div>
		<div class="md-form">
			<label><strong>TITULO</strong></label>
	        <input required type="text" class="form-control input-sm" value="{{$libros->nombre}}" id="titulo" name="titulo">
	    </div>
        <div class="md-form">
			<label><strong>PRECIO</strong></label>
	        <input required type="text" class="form-control input-sm" value="{{$libros->precio}}" id="precio" name="precio">
	    </div>
		<div class="md-form">
			<label><strong>STOCK</strong></label>
	        <input required type="text" class="form-control input-sm" value="{{$libros->stock}}" id="stock" name="stock">
	    </div>
		<label for="productos"><strong>EDITORIAL</strong></label>
		<select class="custom-select" id="categorias" name="editorial">
            @foreach($editorial as $e)
                <option value="{{$e->id}}">{{$e->nombre}}</option>
            @endforeach
        </select>
        <br><br>
		<button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{url('libros')}}">
            <button type="button" class="btn btn-danger">Cancelar</button>
        </a>
	</form>
@stop
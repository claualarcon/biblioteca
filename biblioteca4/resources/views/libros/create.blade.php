@extends("../layouts.plantilla")

@section("cabecera")


@section("contenido")

<form method="post" action="/libro">
	<input type="text" name="nombre_libro">
		{{csrf_field()}}
	<input type="submit" name="enviar" value="Enviar">

</form>

@section("pie")
creacion de depa
<form action="{{ url('/departamento') }}" method="post">
@csrf

<label for="Codigo">Codigo</label>
<input type="text" name="Codigo" id="Codigo">
<br>
<label for="Nombre">Nombre del departamento</label>
<input type="text" name="Nombre" id="Nombre">
<br>
<label for="Abreviacion">Abreviacion</label>
<input type="text" name="Abreviacion" id="Abreviacion">
<br>
<input type="submit" value="Ingresar Departamento">
<br>
</form>
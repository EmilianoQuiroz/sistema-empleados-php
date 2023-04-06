/**
* Formulario de creacion de empleado
*/

<form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
@csrf
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" id="Nombre">
<br/>

<label for="ApellidoPaterno"> Apellido paterno </label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
<br/>

<label for="ApellidoMaterno"> Apellido materno </label>
<input type="text" name="ApellidoMaterno" name="ApellidoMaterno">
<br/>

<label for="Correo"> Correo </label>
<input type="text" name="Correo" id="Correo">
<br/>

<label for="Foto"> Foto </label>
<input type="file" name="Foto" id="Foto">
<br/>

<input type="submit" name="Enviar" id="Enviar">
</form>
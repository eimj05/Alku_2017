
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="/subir-imagen" method="post" enctype="multipart/form-data">
	<input type="file" name="imagen" id="imagen" />
	<input type="hidden" name="name", id="name" value="{{$perfil->name}}"/>
	<input type="submit" value="Subir Imagen" />

</form>
</body>


</html>

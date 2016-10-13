<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
td {
	border:1px dotted #060;
	}

</style>



</head>

<body>
<table>
<tr><td>Nombre del usuario</td><td>Contraseña</td></tr>
<?php

	foreach($matrizUsuarios as $registro){
		
		echo "<tr><td>". $registro["USUARIOS"] . "</td>". "<td>". $registro["PASSWORD"] . "</td></tr>";
	
		}

?>
</table>
</body>
</html>

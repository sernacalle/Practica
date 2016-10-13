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
<tr><td>Nombre del usuario</td></tr>
<?php

	foreach($matrizUsuario as $registro){
		
		echo "<tr><td>". $registro["Usuarios"] . "</tr></td>";
		}

?>
</table>
</body>
</html>

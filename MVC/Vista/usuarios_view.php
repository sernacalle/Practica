<?php

require("Vista/header.php");

?>
<table class= "table3">
<tr><td>Nombre del usuario</td><td>Contraseña</td></tr>
<?php

	foreach($matrizUsuarios as $registro){
		
		echo "<tr><td>". $registro["USUARIOS"] . "</td>". "<td>". $registro["PASSWORD"] . "</td></tr>";
	
		}

?>
</table>
<?php
require("Vista/footer.php");

?>
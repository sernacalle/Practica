<div class="reset"></div>
<section>
<div class="a-cen">
<br>
<H1>Pagina de usuarios</H1>

<p><a href="/practica/cierre.php">Cerrar sesion</a></p>

<table>
  <tr>
    <th colspan="5" >ZONA USUARIOS REGISTRADOS<?php
echo "<br>". "Bienvenido: " . $_SESSION["usuario"]. "<br>";

?></th>
  </tr>
  <tr>
  	<td><a href="/practica/Usuario_Registrados.php">INICIO</a></td>
  	<td><a href="/practica/index.php">OFERTAS</a></td>
    <td><a href="/practica/Cv.php">HOJAS DE VIDA</a></td >
    <td><a href="/practica/contact/index.php">MENSAJES</a></td >
    <td><a href="/practica/settings/index.php">ADMIN</a></td>
  </tr>
</table>
</div>
</section>
<!doctype html>
<html lang='es'>
<head>
<meta charset="utf-8">
<title>Usuario_Registrados</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="//fonts.googleapis.com/css?family=Sorts Mill Goudy:300,400,500,700|PT+Sans:400,700" rel="stylesheet" type="text/css" />
<link href="css/hv.css" rel="stylesheet" />
</head>

<body>

<?php

session_start();
if (!isset($_SESSION["usuario"])){
	header("location:login.php");
	}

?>

<header class="m-header m-150min m-bg-verde">
    <div class="rwd-principal">
          <div class="rwd-25">
            <a href="/"><img class="logo" src="img/logo.png" alt="logo"/></a>
          </div>
          <div class="rwd-75">
            <div class="a-der">
              <span class="txtSocialB">Síguenos:</span>
              <a href="//www.facebook.com/saitempcolombia" target="_blank"><img style="vertical-align:middle;" src="img/icoFB.png" alt="logoFB"/></a>
			  <a href="//twitter.com/saitempcolombia" target="_blank"><img style="vertical-align:middle;" src="img/icoTW.png" alt="logoTW"/></a>
              <a href="//www.linkedin.com/company/saitemp" target="_blank"><img style="vertical-align:middle;" src="img/icoIN.png" alt="logoIN" /></a>
            </div>
          </div>
          <div class="reset"></div> 
  </div>
</header>
      
      
      <br>
      <nav class="m-bg-verde">
        <div class="rwd-principal">
</div>
      </nav>

<section>
  <div class="h-banner"></div>
</section>


<div class="reset"></div>
<section>
<div class="a-cen">
<br>
<H1>Pagina de usuarios</H1>

<p><a href="cierre.php">Cerrar sesion</a></p>

<table>
  <tr>
    <th colspan="5" >ZONA USUARIOS REGISTRADOS<?php
echo "<br>". "Bienvenido: " . $_SESSION["usuario"]. "<br>";

?></th>
  </tr>
  <tr>
  	<td><a href="Usuario_Registrados.php">INICIO</a></td>
  	<td><a href="index.php">OFERTAS</a></td>
    <td><a href="Cv.php">HOJAS DE VIDA</a></td >
    <td><a href="contact/index.php">MENSAJES</a></td >
    <td><a href="settings/index.php">ADMIN</a></td>
  </tr>
</table>
</div>
</section>

<div class="reset"></div>
      <footer class="m-150min m-bg-azul">
        <div class="rwd-principal a-cen">
<hr>
<!--Direcciones-->
<table>
    <tr> <td>
    	Saitemp Medellín - Colombia Tel: (+574) 448 5744 <br>
	Calle 51 49 – 11 Ed. Fabricato Of. 1005 
</td><td>
      	Saitemp Bogotá - Colombia Tel: (+571) 742 0219<br>
	Carrera 21 #58-56 Sector Galerías
</td><td>
	Saitemp Cartagena - Colombia Tel: (+575) 643 6761<br>
Transversal 54 #28-25 Ed. Movisol, of. 305
   </td></tr>
</table>
	<hr> 
        </div>
	
      </footer>

</body>
</html>
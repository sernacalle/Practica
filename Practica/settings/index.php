﻿<!doctype html>
<html lang='es'>
<head>
<meta charset="utf-8">
<title>Saitemp Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="//fonts.googleapis.com/css?family=Sorts Mill Goudy:300,400,500,700|PT+Sans:400,700" rel="stylesheet" type="text/css" />
<link href="/practica/css/hv.css" rel="stylesheet" />
</head>

<body>
<header class="m-header m-150min m-bg-verde">
    <div class="rwd-principal">
          <div class="rwd-25">
            <a href="http://www.saitempsa.com/"><img class="logo" src="/practica/IMG/logo.png" alt="logo"/></a>
          </div>
          <div class="rwd-75">
            <div class="a-der">
              <span class="txtSocialB">Síguenos:</span>
              <a href="//www.facebook.com/Saitemp-SA-416952755069214/" target="_blank"><img style="vertical-align:middle;" src="/practica/IMG/icoFB.png" alt="logoFB"/></a>
			  <a href="//twitter.com/saitempsa" target="_blank"><img style="vertical-align:middle;" src="/practica/IMG/icoTW.png" alt="logoTW"/></a>
              <a href="//plus.google.com/117774464087679719579/posts" target="_blank"><img style="vertical-align:middle;" src="/practica/IMG/icoIN.png" alt="logoIN" /></a>
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
<?php
	$base=new PDO ("mysql:host =localhost; dbname=kr000262_db", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM wp_forms3 WHERE intref = '1'";
		
$info=$base->prepare($sql);
		$info->execute(array($sql));
					while($info=$info->fetch(PDO::FETCH_ASSOC)){

{?>

<style>table td {padding:4px 10px;}</style>

<form action="updater.php" method="post">
<table style="margin: 30px 0 30px 46px;">
<tr><td colspan="5"><h2>Correos</h2></td></tr>
<tr><td>1.</td><td>Nombre</td><td><input type="text" name="nombre1" value="<?php echo $info[nombre1];?>"></td><td>Correo</td><td><input type="text" name="correo1" value="<?php echo $info[correo1];?>"></td></tr>
<tr><td>2.</td><td>Nombre</td><td><input type="text" name="nombre2" value="<?php echo $info[nombre2];?>"></td><td>Correo</td><td><input type="text" name="correo2" value="<?php echo $info[correo2];?>"></td></tr>
<tr><td>3.</td><td>Nombre</td><td><input type="text" name="nombre3" value="<?php echo $info[nombre3];?>"></td><td>Correo</td><td><input type="text" name="correo3" value="<?php echo $info[correo3];?>"></td></tr>
<tr><td>4.</td><td>Nombre</td><td><input type="text" name="nombre4" value="<?php echo $info[nombre4];?>"></td><td>Correo</td><td><input type="text" name="correo4" value="<?php echo $info[correo4];?>"></td></tr>
<tr><td>5.</td><td>Nombre</td><td><input type="text" name="nombre5" value="<?php echo $info[nombre5];?>"></td><td>Correo</td><td><input type="text" name="correo5" value="<?php echo $info[correo5];?>"></td></tr>
<tr><td>6.</td><td>Nombre</td><td><input type="text" name="nombre6" value="<?php echo $info[nombre6];?>"></td><td>Correo</td><td><input type="text" name="correo6" value="<?php echo $info[correo6];?>"></td></tr>
<tr><td>7.</td><td>Nombre</td><td><input type="text" name="nombre7" value="<?php echo $info[nombre7];?>"></td><td>Correo</td><td><input type="text" name="correo7" value="<?php echo $info[correo7];?>"></td></tr>
<tr><td>8.</td><td>Nombre</td><td><input type="text" name="nombre8" value="<?php echo $info[nombre8];?>"></td><td>Correo</td><td><input type="text" name="correo8" value="<?php echo $info[correo8];?>"></td></tr>
<tr><td>9.</td><td>Nombre</td><td><input type="text" name="nombre9" value="<?php echo $info[nombre9];?>"></td><td>Correo</td><td><input type="text" name="correo9" value="<?php echo $info[correo9];?>"></td></tr>
<tr><td>10.</td><td>Nombre</td><td><input type="text" name="nombre10" value="<?php echo $info[nombre10];?>"></td><td>Correo</td><td><input type="text" name="correo10" value="<?php echo $info[correo10];?>"></td></tr>
<tr><td>11.</td><td>Nombre</td><td><input type="text" name="nombre11" value="<?php echo $info[nombre11];?>"></td><td>Correo</td><td><input type="text" name="correo11" value="<?php echo $info[correo11];?>"></td></tr>
<tr><td>12.</td><td>Nombre</td><td><input type="text" name="nombre12" value="<?php echo $info[nombre12];?>"></td><td>Correo</td><td><input type="text" name="correo12" value="<?php echo $info[correo12];?>"></td></tr>
<tr><td>13.</td><td>Nombre</td><td><input type="text" name="nombre13" value="<?php echo $info[nombre13];?>"></td><td>Correo</td><td><input type="text" name="correo13" value="<?php echo $info[correo13];?>"></td></tr>
<tr><td>14.</td><td>Nombre</td><td><input type="text" name="nombre14" value="<?php echo $info[nombre14];?>"></td><td>Correo</td><td><input type="text" name="correo14" value="<?php echo $info[correo14];?>"></td></tr>
<tr><td>15.</td><td>Nombre</td><td><input type="text" name="nombre15" value="<?php echo $info[nombre15];?>"></td><td>Correo</td><td><input type="text" name="correo15" value="<?php echo $info[correo15];?>"></td></tr>
<tr><td>16.</td><td>Nombre</td><td><input type="text" name="nombre16" value="<?php echo $info[nombre16];?>"></td><td>Correo</td><td><input type="text" name="correo16" value="<?php echo $info[correo16];?>"></td></tr>
<tr><td colspan="5"><input type="submit" value="Guardar"></td></tr>
</table>
</form>
<?php }}?>

<footer class="m-150min m-bg-azul">
        <div class="rwd-principal a-cen">
<hr>
<!--Direcciones-->
<table>
    <tr> <td>
    	Saitemp Medellín - Colombia Tel: (+574) 448 5744 <br>
	Calle 51 #49–11 Ed. Fabricato Of. 1005 
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

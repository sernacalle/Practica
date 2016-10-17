
<?php
$link = mysql_connect('localhost', 'root', '');
mysql_set_charset('utf8', $link);
$db_selected = mysql_select_db('kr000262_db', $link);
$data = mysql_query("SELECT * FROM wp_forms3 WHERE intref = '1'")
or die(mysql_error());
while($info = mysql_fetch_array( $data ))
{?>


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
<?php }?>
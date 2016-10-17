<?php
require_once("../header.php");
?>

<?php
session_start();
if (!isset($_SESSION["usuario"])){
	header("location:../login.php");
	}
?>

<?php
require_once("../Menu.php");

?>

<h1>ACTUALIZAR</h1>
<?php
	$Id= $_GET["Id"];
	$Nombre= $_GET["nom"];
	$apellido= $_GET["apellido"];
	$Correo= $_GET["Cor"];


?>
<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="../modelo/Update.php">
  <table>
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id"value="<?php echo $Id?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $Nombre?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $apellido?>"></td>
    </tr>
    <tr>
      <td>Correo</td>
      <td><label for="cor"></label>
      <input type="text" name="cor" id="cor" value="<?php echo $Correo?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>

<?php
require_once("../footer.php");

?>
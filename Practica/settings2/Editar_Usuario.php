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
<?php
	$Id=$_GET["Id"];
	$usuar= $_GET["nom"];
	$cont= $_GET["Contra"];
?>
<p>
  <h1>ACTUALIZACION USUARIOS DE INGRESO</h1>   
        <form action="../modelo/Update_User.php" method="post">
        <table><tr>
        <td><label for="id"></label>
      <input type="hidden" name="id" id="id"value="<?php echo $Id?>"></td>
      </tr><tr>
          <td>
            Usuario</td><td><input type="text" name="usu" id="usu" value="<?php echo $usuar?>"></td></tr>
           <tr>
             <td> Contraseña </td><td><input type="text" name="contra" id="contra" value=""></td></tr>
           
           <tr>
        <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td></tr></table>
        </form>


<?php
require_once("../footer.php");

?>
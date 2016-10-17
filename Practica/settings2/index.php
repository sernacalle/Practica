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
	include("../modelo/conexion.php");
$usuarios=$base->query("SELECT * FROM USUARIOS")->fetchAll(PDO::FETCH_OBJ);
?>


<h1>USUARIOS REGISTRADOS</h1>
<table>
    <tr>
      <td>Id</td>
      <td>Nombre</td>
      <td>Eliminar</td>
           <td> </td>
 
    </tr> 
   
   <?php
   

   foreach($usuarios as $usuario):?>
		
   	<tr>
      <td><?php echo $usuario->Id?> </td>
      <td><?php echo $usuario->Usuarios?> </td>
    

 
 
      <td class="bot"><a href="../modelo/eliminar_user.php?Id=<?php echo $usuario->Id?>"><input type='button' name='del' id='del' value='Eliminar Usuario'></a></td>
      <td class='bot'><a href="editar_Usuario.php?Id=<?php echo $usuario->Id?> & nom=<?php echo $usuario->Usuarios?> & Contra=<?php echo $usuario->Password?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>   
    
    <?PHP
    endforeach;
	
	
	?>    
	    
  </table>
   
 <h1>REGÍSTRO NUEVO USUARIOS DE INGRESO</h1>   
        <form action="insert_Usuario.php" method="post">
        <table><tr>
          <td>
            Usuario</td><td><input type="text" name="usu" id="usu"></td></tr>
           <tr>
             <td> Contraseña </td><td><input type="text" name="contra" id="contra"></td></tr>
           
           <tr><td colspan="2"> <input type="submit" name="enviando" value="¡CREAR!">
        </td></tr></table>
        </form>


<div class="reset"></div>

<h1>USUARIOS DE PQRS</h1>


<?php
	include("../modelo/conexion.php");
	$registros=$base->query("SELECT * FROM DATOS_USUARIOS")->fetchAll(PDO::FETCH_OBJ);
	
?>

<table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Correo</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
   <?php
   
   foreach($registros as $persona):?>
		
   	<tr>
      <td><?php echo $persona->Id?> </td>
      <td><?php echo $persona->Nombre?> </td>
      <td><?php echo $persona->apellido?> </td>
      <td><?php echo $persona->Correo?> </td>
 
 
      <td class="bot"><a href="../modelo/Borrado.php?Id=<?php echo $persona->Id?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
            <td class='bot'><a href="editar.php?Id=<?php echo $persona->Id?> & nom=<?php echo $persona->Nombre?> & apellido=<?php echo $persona->apellido?> & Cor=<?php echo $persona->Correo?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>   
    
    <?PHP
    endforeach;
	
	
	?>    
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>




<?php
require_once("../footer.php");

?>
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

<div class="reset"></div>
<?php
require_once("../footer.php");

?>
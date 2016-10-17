<?php 
$update = htmlspecialchars($_GET["update"]);
$link = mysql_connect('localhost', 'kr000262_db', 'Holden321');
$db_selected = mysql_select_db('kr000262_db', $link);
?>

<html>
<head>
<title>Saitemp Firmas</title>
</head>
<body>

<style>
body {font-family:arial;font-size:14px;padding:50px;}
label {width:200px;display: inline-block;}
input[type="text"] {margin-bottom:10px;padding: 6px;}
hr{height:1px;background:#ccc;border:0;}
ul {list-style-type: none;}
ul li {border-bottom: 1px solid #ECECEC;}
ul li a {text-decoration: none;color: #000;padding: 5px 0;display: block;}
input[type="submit"] {background-color: #0EA500;border: 0;color: #fff;padding: 10px;}
</style>

<h1>Llenar los campos para crear la firma</h1>

<form action="?update=true" method="post">
<label>Nombre Completo: </label><input type="text" name="fullname"><br>
<label>Puesto: </label><input type="text" name="position"><br>
<label>PBX: </label><input type="text" name="pbx"><br>
<label>Correo: </label><input type="text" name="email"><br>
<label>Dirección: </label><input type="text" name="address"><br>
<label>Ciudad: </label><input type="text" name="city"><br>
<label>Guardar: </label><input type="submit" value="Guardar">
</form>

<hr>

<ul>
<?php 
$data = mysql_query("SELECT * FROM firmas ");
while($info = mysql_fetch_array( $data )) { ?>
<li><a target="_Blank" href="print.php?show=<?php echo $info[ref];?>"><?php echo $info[fullname];?></a></li>
<?php }?>
</ul>

<?php if($update == 'true'){
$fullname = $_POST[fullname];
$result = mysql_query("SELECT * FROM firmas WHERE fullname = '$fullname' ");
$num_rows = mysql_num_rows($result);
if ($num_rows < 1){
mysql_query("INSERT INTO firmas (fullname, position, pbx, email, address, city)
VALUES ('$_POST[fullname]','$_POST[position]','$_POST[pbx]','$_POST[email]','$_POST[address]','$_POST[city]')") or die(mysql_error());
echo '<script>location.href="?return";</script>';}
else {
mysql_query("UPDATE firmas SET position = '".$_POST[position]."' WHERE fullname = '$fullname' ") or die(mysql_error());
mysql_query("UPDATE firmas SET pbx = '".$_POST[pbx]."' WHERE fullname = '$fullname' ") or die(mysql_error());
mysql_query("UPDATE firmas SET email = '".$_POST[email]."' WHERE fullname = '$fullname' ") or die(mysql_error());
mysql_query("UPDATE firmas SET address = '".$_POST[address]."' WHERE fullname = '$fullname' ") or die(mysql_error());
mysql_query("UPDATE firmas SET city = '".$_POST[city]."' WHERE fullname = '$fullname' ") or die(mysql_error());
}
}
mysql_close($link);
?>

</body>
</html>
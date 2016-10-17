<?php 
$show = htmlspecialchars($_GET["show"]);
$link = mysql_connect('localhost', 'kr000262_db', 'Holden321');
$db_selected = mysql_select_db('kr000262_db', $link);
$data = mysql_query("SELECT * FROM firmas WHERE ref = '$show' ");
while($info = mysql_fetch_array( $data )) { ?>

<html>
<head>
<title><?php echo $info[fullname];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div>
<table>
<tbody><tr><td style="vertical-align:top"><img src="http://www.saitempsa.com/emailfooter/logo.png" style="margin:30px 20px 0 0"></td><td style="font-size:14px;line-height:18px;font-family:arial">Cordialmente,<br><br><b><?php echo $info[fullname];?></b><br><?php echo $info[position];?><br>PBX: <?php echo $info[pbx];?>.<br><a href="mailto:<?php echo $info[email];?>" target="_blank"><?php echo $info[email];?></a><br><?php echo $info[address];?><br><?php echo $info[city];?> - Colombia<br><a href="http://www.saitempsa.com" style="color:000;text-decoration:none;font-weight:900;display:block" target="_blank">www.saitempsa.com</a><br>Síguenos en <a href="https://www.facebook.com/TemporalSaitemp" target="_blank"><img src="http://www.saitempsa.com/emailfooter/face.jpg" style="vertical-align:middle"></a> <a href="https://twitter.com/Saitemp_SA" target="_blank"><img src="http://www.saitempsa.com/emailfooter/twitter.jpg" style="vertical-align:middle"></a><br></td></tr><tr><td colspan="2" style="font-size:14px;line-height:18px;font-family:arial"><span style="color:green;margin-top:4px;display:block;text-align:center">Antes de imprimir reflexiona, si es necesario hacerlo.<br>Por cada tonelada de papel, 117 árboles mueren</span></td></tr>
</tbody></table></div>

<?php }
mysql_close($link);
?>

</body></html>
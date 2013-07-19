<?php


$conexion= mysql_connect('192.168.100.94','RstsUsrJ1n20i3','hsuR56Zzm2sT5LzA')or die ('Error: '.mysql_error());
$base = mysql_select_db('rostros',$conexion)or die ('Error en la base de datos: '.mysql_error());

$selecciona_usuario="SELECT * FROM usuarios as u, plazas as p WHERE u.usuario='$se_usuario' AND u.password='$se_password' AND u.plaza = p.id";

$respuesta_usuario=mysql_query($selecciona_usuario,$conexion);
echo'num:'.mysql_num_rows($respuesta_usuario);

while($f_usuario=mysql_fetch_array($respuesta_usuario)):
$id_usuario=$f_usuario['id'];
$nombre_usuario=$f_usuario['nombre'];
$apellidos_usuario=$f_usuario['apellido'];
$estado_republica_usuario=$f_usuario['plaza'];


//echo $nombre_completo=$nombre_usuario." ".$apellidos_usuario;echo '<br>';
echo'jjkjljklk';

$nombre_completo=utf8_encode($nombre_completo);
$estado_republica_usuario=utf8_encode($estado_republica_usuario);
endwhile;

/*
$hostname_conex = "192.168.100.94";
$database_conex = "rostros";
$username_conex = "RstsUsrJ1n20i3";
$password_conex = "hsuR56Zzm2sT5LzA";


$conex = mysql_connect($hostname_conex, $username_conex, $password_conex) or die("Error conecatr".mysql_error()); 
mysql_select_db($database_conex, $conex);


$pr=mysql_query("select * from rostros") or die("errorconsulta".mysql_error());

*/
?>
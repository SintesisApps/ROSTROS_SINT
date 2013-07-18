<?php

$conexion= mysql_connect('192.168.100.94','RstsUsrJ1n20i3','hsuR56Zzm2sT5LzA')or die ('Error: '.mysql_error());
$base = mysql_select_db('rostros',$conexion)or die ('Error en la base de datos: '.mysql_error());
/*
$selecciona_usuario="SELECT * FROM usuarios as u, plazas as p WHERE u.usuario='$se_usuario' AND u.password='$se_password' AND u.plaza = p.id";

$respuesta_usuario=mysql_query($selecciona_usuario,$conexion);
*/
?>
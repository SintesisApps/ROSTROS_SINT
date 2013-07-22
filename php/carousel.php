<?php

include("conex.php");

$id_evento=$_POST['id_evento'];

$evento="select * from eventos where id = '".$id_evento."' ";
$query_evento=mysql_query("$evento", $conexion);
$row_evento=mysql_fetch_array($query_evento);
$id_plaza=$row_evento['id_plaza'];


switch ($id_plaza)
		{
			case 1:
				$plaza="Puebla";	
				$url="http://www.rostrospuebla.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
			
			case 2:
				$plaza="Tlaxcala";	
				$url="http://www.losrostrostlaxcala.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 3:
				$plaza="Hidalgo";	
				$url="http://www.losrostroshidalgo.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 4:
				$plaza="Veracruz";	
				$url="http://www.losrostrosveracruz.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 5:
				$plaza="Oaxaca";	
				$url="http://www.losrostrosoaxaca.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 6:
				$plaza="Chiapas";	
				$url="http://www.losrostroschiapas.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 7:
				$plaza="Yucat&aacute;n";	
				$url="http://losrostrosyucatan.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 8:
				$plaza="jalisco";	
				$url="http://www.losrostrosjalisco.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
		}


//sminiaturas

$miniatura="select * from imagenes_eventos where id_evento='".$id_evento."' ";
$query_miniatura=mysql_query($miniatura,$conexion);


echo'
<!-- slide sec -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.touchSlider.js"></script>
<!-- galeria -->
<link href="galeria/styles_galeria.css" type="text/css" rel="stylesheet" />
<link href="galeria/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="galeria/klass.min.js"></script>
	<script type="text/javascript" src="galeria/code.photoswipe-3.0.4.min.js"></script>
<script type="text/javascript">

			$(document).ready(function(){
				$("div[id^=\"gallery_sec\"]").touchSlider({
                                                                mode: "shift",
                                                                offset: "auto"
                                                                });
                      
				
			});
			
</script>

<script>

		(function(window, $, PhotoSwipe){
			
			$(document).ready(function(){
				
				var options = {};
				$("#Gallery1 a").photoSwipe(options);
			
			});
			
		/*	$(document).ready(function(){
				
				var options = {};
				$("#Gallery2 a").photoSwipe(options);
			
			});*/
			
			
		}(window, window.jQuery, window.Code.PhotoSwipe));
		
</script>


<div class="gallery_slide" id="gallery_sec1" >
                        		<div class="holder">
                                	<div class="list">
                                    <div id="Gallery1" class="gallery">';
									while($row_miniatura=mysql_fetch_array($query_miniatura))
									{
										echo'  <div class="item_s"><div class="box_s box1"><a href="'.$url.$row_miniatura['imagen'].'"><img src="'.$url.$row_miniatura['imagen'].'" style="width:100%; height:auto;"/></a></div></div>';
										
									}
									/*
                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/13.jpg"><img src="img/fotos/13.jpg" width="210" height="159"/></a></div></div>
                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/13.jpg"><img src="img/fotos/13.jpg" width="210" height="159"/></a></div></div>
                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/13.jpg"><img src="img/fotos/13.jpg" width="210" height="159"/></a></div></div>
                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/13.jpg"><img src="img/fotos/13.jpg" width="210" height="159"/></a></div></div>
                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/13.jpg"><img src="img/fotos/13.jpg" width="210" height="159"/></a></div></div>
                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/13.jpg"><img src="img/fotos/13.jpg" width="210" height="159"/></a></div></div>
                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/13.jpg"><img src="img/fotos/13.jpg" width="210" height="159"/></a></div></div>
                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/13.jpg"><img src="img/fotos/13.jpg" width="210" height="159"/></a></div></div>
                                    */
									echo'</div>
                                    </div>
                                </div>
                            </div>
';

/*
$id_evento=$_POST['id_evento'];

$evento="select * from eventos where id = '".$id_evento."' ";
$query_evento=mysql_query("$evento", $conexion);
$row_evento=mysql_fetch_array($query_evento);
$id_plaza=$row_evento['id_plaza'];


switch ($id_plaza)
		{
			case 1:
				$plaza="Puebla";	
				$url="http://www.rostrospuebla.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
			
			case 2:
				$plaza="Tlaxcala";	
				$url="http://www.losrostrostlaxcala.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 3:
				$plaza="Hidalgo";	
				$url="http://www.losrostroshidalgo.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 4:
				$plaza="Veracruz";	
				$url="http://www.losrostrosveracruz.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 5:
				$plaza="Oaxaca";	
				$url="http://www.losrostrosoaxaca.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 6:
				$plaza="Chiapas";	
				$url="http://www.losrostroschiapas.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 7:
				$plaza="Yucat&aacute;n";	
				$url="http://losrostrosyucatan.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
				
			case 8:
				$plaza="jalisco";	
				$url="http://www.losrostrosjalisco.com.mx/redisenoV2/images/imagenes-eventos/";
				break;
		}


//sminiaturas

$miniatura="select * from imagenes-eventos where id_evento='".$id_evento."' ";
$query_miniatura=mysql_query($miniatura,$conexion);






echo'
<!-- slide sec -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.touchSlider.js"></script>
<!-- galeria -->
<link href="galeria/styles_galeria.css" type="text/css" rel="stylesheet" />
<link href="galeria/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="galeria/klass.min.js"></script>
	<script type="text/javascript" src="galeria/code.photoswipe-3.0.4.min.js"></script>
<script type="text/javascript">

			$(document).ready(function(){
				$("div[id^=\"gallery_sec\"]").touchSlider({
                                                                mode: "shift",
                                                                offset: "auto"
                                                                });
                      
				
			});
			
</script>

<script>

		(function(window, $, PhotoSwipe){
			
			$(document).ready(function(){
				
				var options = {};
				$("#Gallery1 a").photoSwipe(options);
			
			});
			
		
			
			
		}(window, window.jQuery, window.Code.PhotoSwipe));
		
</script>


<div class="gallery_slide" id="gallery_sec1" >
                        		<div class="holder">
                                	<div class="list">
                                    <div id="Gallery1" class="gallery">';
									while($row_miniatura=mysql_fetch_array($query_miniatura))
									{
										echo'  <div class="item_s"><div class="box_s box1"><a href="'.$url.$row_miniatura['imagen'].'"><img src="'.$url.$row_miniatura['imagen'].'" width="210" height="159"/></a></div></div>';
										
									}
									
									echo'</div>
                                    </div>
                                </div>
                            </div>
';

*/

?>
<?php

include("conex.php");


$plaza=$_POST["plaza"];

$url_dominio="http://166.78.73.11/";

//ID de la plaza
$reg_plaza="select * from plazas where seudonimo='".$plaza."'";
$query_plaza=mysql_query($reg_plaza,$conexion);

while($row_plaza=mysql_fetch_array($query_plaza))
{
	$id_plaza=$row_plaza["id"];
$nom_plaza=$row_plaza["plaza"];

}
$url="";
//DIRECCIONES DE LOS ROSTROS
	switch ($id_plaza)
		{
			case 1:
				$plaza="Puebla";	
				$url="http://www.rostrospuebla.com.mx/redisenoV2/images/imagenes-eventos/";
				$ur_img_publi="http://www.rostrospuebla.com.mx/redisenoV2/images/imagenes-publicidad/";
				$url_video_publi="http://www.rostrospuebla.com.mx/redisenoV2/images/video/";
				break;
			
			case 2:
				$plaza="Tlaxcala";	
				$url="http://www.losrostrostlaxcala.com.mx/redisenoV2/images/imagenes-eventos/";
				$ur_img_publi="http://www.losrostrostlaxcala.com.mx/redisenoV2/images/imagenes-publicidad/";
				$url_video_publi="http://www.losrostrostlaxcala.com.mx/redisenoV2/images/video/";
				break;
				
			case 3:
				$plaza="Hidalgo";	
				$url="http://www.losrostroshidalgo.com.mx/redisenoV2/images/imagenes-eventos/";
				$ur_img_publi="http://www.losrostroshidalgo.com.mx/redisenoV2/images/imagenes-publicidad/";
				$url_video_publi="http://www.losrostroshidalgo.com.mx/redisenoV2/images/video/";
				break;
				
			case 4:
				$plaza="Veracruz";	
				$url="http://www.losrostrosveracruz.com.mx/redisenoV2/images/imagenes-eventos/";
				$ur_img_publi="http://www.losrostrosveracruz.com.mx/redisenoV2/images/imagenes-publicidad/";
				$url_video_publi="http://www.losrostrosveracruz.com.mx/redisenoV2/images/video/";
				break;
				
			case 5:
				$plaza="Oaxaca";	
				$url="http://www.losrostrosoaxaca.com.mx/redisenoV2/images/imagenes-eventos/";
				$ur_img_publi="http://www.losrostrosoaxaca.com.mx/redisenoV2/images/imagenes-publicidad/";
				$url_video_publi="http://www.losrostrosoaxaca.com.mx/redisenoV2/images/video/";
				break;
				
			case 6:
				$plaza="Chiapas";	
				$url="http://www.losrostroschiapas.com.mx/redisenoV2/images/imagenes-eventos/";
				$ur_img_publi="http://www.losrostroschiapas.com.mx/redisenoV2/images/imagenes-publicidad/";
				$url_video_publi="http://www.losrostroschiapas.com.mx/redisenoV2/images/video/";
				break;
				
			case 7:
				$plaza="Yucat&aacute;n";	
				$url="http://losrostrosyucatan.com.mx/redisenoV2/images/imagenes-eventos/";
				$ur_img_publi="http://www.losrostrosyucatan.com.mx/redisenoV2/images/imagenes-publicidad/";
				$url_video_publi="http://www.losrostrosyucatan.com.mx/redisenoV2/images/video/";
				break;
				
			case 8:
				$plaza="jalisco";	
				$url="http://www.losrostrosjalisco.com.mx/redisenoV2/images/imagenes-eventos/";
				$ur_img_publi="http://www.losrostrosjalisco.com.mx/redisenoV2/images/imagenes-publicidad/";
				$url_video_publi="http://www.losrostrosjalisco.com.mx/redisenoV2/images/video/";
				break;
		}


	



	//Consulta de las 3 tabas
    
    $reg_tablas="SELECT id,id_evento, id_plaza, orden, referencia FROM app_eventos where id_plaza='".$id_plaza."'
    UNION
    select  id, id_evento,id_plaza, orden, referencia FROM app_publicidad where id_plaza='".$id_plaza."'
    UNION
    select  id,id_evento, id_plaza, orden, referencia FROM app_secciones where id_plaza='".$id_plaza."'
    ORDER  BY orden, referencia ASC";
    
    
$query_tablas=mysql_query($reg_tablas, $conexion);
$row_tablas="";

$contador=1;//contador para las galerias



echo'<link rel="stylesheet" href="css/ios.css">
   <link rel = "stylesheet" href = "css/default.css" />
	<link rel = "stylesheet" media = "screen" href = "css/common.css" />
   <script src = "js/jquery.easing-1.3.js"></script>
		<script src = "js/jquery.iosslider.js"></script>
		<script src = "js/common.js"></script>
		
		<!-- slidesec -->
		<!--<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.touchSlider.js"></script>-->
		
		
		<!-- galeria-->
		<link href="galeria/styles_galeria.css" type="text/css" rel="stylesheet" />
<link href="galeria/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="galeria/klass.min.js"></script>
	<script type="text/javascript" src="galeria/code.photoswipe-3.0.4.min.js"></script>
   
   <!--<script>

		(function(window, $, PhotoSwipe){
			
			$(document).ready(function(){
				
				var options = {};
				$("#Gallery1 a").photoSwipe(options);
			
			});
			
			$(document).ready(function(){
				
				var options = {};
				$("#Gallery2 a").photoSwipe(options);
			
			});
			
			
		}(window, window.jQuery, window.Code.PhotoSwipe));
		
</script>
-->
<!-- doc-->
<script>
$(document).ready(function() {


	
	
	$("div[id^=\"gallery_sec\"]").touchSlider({
			mode: "shift",
			offset: "auto"
	});
	
	
	
	


});
</script>
<!-- fin doc -->

 
   
   
   
   
                <div class = "full-width-slider">

			<div class = "slider">';
			while($row_tablas = mysql_fetch_array($query_tablas))
			{
				if($row_tablas["referencia"]==1)//EVENTOS
				{
					 echo'<div class = "item" id = "item1">';
					//buscamso evento e iprimimos
			
					$id_evento=$row_tablas['id_evento'];
					$res_evento="select * from eventos where id='".$id_evento."'";
					$query_res_evento=mysql_query($res_evento, $conexion) or die ("error".mysql_error());
					$num=mysql_num_rows($query_res_evento);
					$row_res_evento=mysql_fetch_array($query_res_evento);
					
					
					//tipo de evento
					$tipo_evento=$row_res_evento['id_tipos_eventos'];
					$categoria_eventos=$row_res_evento['id_categoria'];
					$res_tipo_evento="select * from tipos_eventos where id ='".$tipo_evento."' ";
					$query_tipo_evento=mysql_query($res_tipo_evento, $conexion);
					$row_tipo_evento=mysql_fetch_array($query_tipo_evento);
					//Obtenemso  tipos de eventos
					$nombre_evento="";
					if($tipo_evento==3)
					{
						$nombre_evento="ROSTRO DEL MES";	
					}
					else
					{
						if($categoria_eventos==9)
						{
							$nombre_evento="EVENTO ESPECIAL";
						}
						if($categoria_eventos==16)
						{
							$nombre_evento="ROSTROS DESTACADO";	
						}
						
					}
					if( ($tipo_evento==1 && $categoria_eventos==16) || ($tipo_evento==1 && $categoria_eventos==9)  || ($tipo_evento==3))//eventos, buscamos   categoria del evento 16:rostros exclusivo/rostro_entrevista
			{
				echo'
				
					<div id="cont_img" class="cont_img" ><a href="#" ><img src="'.$url.$row_res_evento['imagen_principal'].'" onClick="javascript:eventos_especiales(\'#page3\', \''.$id_plaza.'\', \''.$id_evento.'\');" /></a></div>
				 
					 <div id="r_nom_persona" class="r_nom_persona" >
					 <DIV>'.utf8_encode($row_res_evento['titulo']).'</DIV>
					 </div>
				 
				 
					<div id="sum_rostros" class="sum_rostros">
						<div class="titulo_evento">'.utf8_encode($nombre_evento).'</div>
					</div>
				 
				 </div>
				';			}
			else //evento normal
			{
				
				echo'<div id="cont_img" class="cont_img" onClick="mostrar_ocultar();"><img src="'.$url.$row_res_evento['imagen_principal'].'" class="foto_evnt" /></div>';
			
			
			//miniaturas
			$miniaturas="select * from imagenes_eventos where id_evento='".$id_evento."' orden by id ASC limit 2 ";
			$query_miniaura=mysql_query($miniaturas, $conexion);
			
			
			
			echo'<div id="slide_sec1" class="slide_sec" >
				<div class="gallery-holder" style="z-index:2000;">
					<div class="gallery_slide" id="gallery_sec'.$contador.'" >
						<div class="holder">
							<div class="list">
								<div id="Gallery'.$contador.'" class="gallery">';
								while($row_miniaturas=mysql_fetch_array($query_miniaura))
								{
									echo'<div class="item_s"><div class="box_s box1"><a href="'.$url.$row_miniaturas['imagen'].'"><img src="'.$url.$row_miniaturas['imagen'].'" width="210" height="159"/></a></div></div>';
								}
								echo'
								<script>
								
								(function(window, $, PhotoSwipe){
								 
								 $(document).ready(function(){
												   
												   var options = {};
												   $("#Gallery'.$contador.' a").photoSwipe(options);
												   
												   });
								 
								 
								 
								 }(window, window.jQuery, window.Code.PhotoSwipe));
								
								</script>
								';
								echo'
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			
			
			<div id="box_sumario1" class="box_sumario">
				<div class="titulo_evento">'.utf8_encode($row_res_evento['titulo']).'</div>
				<div class="sumario_evento" id="su_evt">'.utf8_encode($row_res_evento['sumario']).'</div>
				<div class="edicion_revista">'.utf8_encode($plaza).'</div>
			</div>
        
        
        </div>
        ';
				
			}
			
					
				}
				else
				{
					if($row_tablas["referencia"]==2)//PUBLICIDAD
					{// <div class = "item" id = "item1">
					
						/*echo'
						<div class = "item" id = "item1">
                <div style="width:100%; height:100%; position:absolute; overflow:hidden">
                <div style="width:100%; height:100%; position:absolute; overflow:scroll;" ><img src="img/01.jpg"/></div>
            </div> 	
                </div>
						';*/
						
						//buscamos la pibli
						$pub="select * from app_publicidaad where id='".$row_tablas['id']."' ";
						$query_pub=mysql_query($pub, $conexion);
						while($row_pub=mysql_fetch_array($query_pub))
						{
							if($row_pub==1)//video
							{
								//page5 --> reproductor de video 
								echo'
									<div class = "item" id = "item1">
										<div style="width:100%; height:100%; position:absolute; overflow:hidden">
											<div style="width:100%; height:100%; position:absolute; overflow:scroll;" >
												<a href="#" onclick="javascript:ver_video(\'#page5\', \''.$url_video_publi.$row_pub['url'].'\')"><img src="'.$ur_img_publi.$row_pub['imagen_ios'].'"/></a>
											</div>
										</div> 	
									</div>		
								';	
							}
							else
							{
								
							}
						}
						
						
					}
					else //secciones
					{
						
						echo'
						 <div class = "item" id = "item1">
                	<div id="secciones" >
                    	<div class="img_secciones_ipod"><a href="#"><img src="img/ipod/disfruta.jpg" onClick="javascript:fn_secciones(\'#page4\');"/></a></div>
                        <div class="img_secciones_iphone"><a href="#"><img src="img/iphone/disfruta.jpg" onClick="javascript:fn_secciones(\'#page4\');" /></a></div>
                        <div class="img_secciones_ipad"><a href="#"><img src="img/disfruta.jpg" onClick="javascript:fn_secciones(\'#page4\');" /></a></div>
                    </div>
                   
                </div>
						';
					/*	//buscamos las secciones
						$secc="select * from app_secciones where id='".$row_tablas['id']."' ";
						$query_secc=mysql_query($secc, $conexion);
						$row_secc=mysql_fetch_array($query_secc);
						echo'<div class = "item" id = "item1">
                	<div id="secciones" >
                    	<div class="img_secciones_ipod"><a href="#"><img src="'.$row_secc['img_ipod'].'" onClick="javascript:fn_secciones(\'#page4\', \''.$row_secc['id'].'\');" /></a></div>
                        <div class="img_secciones_iphone"><a href="#"><img src="'.$row_secc['img_iphone'].'" onClick="javascript:fn_secciones(\'#page4\',\''.$row_secc['id'].'\');" /></a></div>
                        <div class="img_secciones_ipad"><a href="#"><img src="'.$row_secc['img_ipad'].'" onClick="javascript:fn_secciones(\'#page4\',\''.$row_secc['id'].'\');" /></a></div>
                    </div>
                   
                </div>
                        
                        
                        ';*/
					}
				}
				$contador++;
			}
	
               
			echo'
    
			</div>
		
		</div>
		
		<script>
			if(screen.width=="320" && screen.height=="480")
	{
		//alert("iphne4");//menu
		var img_menu = document.getElementById("img_menu_ini");
		img_menu.src="img/iphone_ipod/menu_ipod.jpg";
		
		
		var img_btn_edicion = document.getElementById("img_btn_edicion");
		img_btn_edicion.src = "img/iconos_app/menu.png";
		img_btn_edicion.width="24";
		img_btn_edicion.height="24";
        document.getElementById("img_btn_edicion").style.margin="4px 0 0 0";
		
		
		var img_btn_edicion = document.getElementById("img_btn_edicion_int");
		img_btn_edicion.src = "img/iconos_app/menu.png";
		img_btn_edicion.width="36";
		img_btn_edicion.height="36";
        document.getElementById("img_btn_edicion_int").style.margin="4px 0 0 0";
                  
        var img_btn_edicion1 = document.getElementById("img_btn_edicion_int1");
        img_btn_edicion1.src = "img/iconos_app/menu.png";
        img_btn_edicion1.width="36";
        img_btn_edicion1.height="36";
        document.getElementById("img_btn_edicion_int").style.margin="4px 0 0 0";
		
		
		var flecha_mas_seccion=document.getElementById("flecha_mas_seccion_img");
		flecha_mas_seccion.src="img/iconos_app/mas.png";
		flecha_mas_seccion.width="36";
		flecha_mas_seccion.height="36";
		
		var flecha_mas_rostros=document.getElementById("flecha_mas_rostros_img");
		flecha_mas_rostros.src="img/iconos_app/mas.png";
		flecha_mas_rostros.width="36";
		flecha_mas_rostros.height="36";
		
		
		var flecha_in_trostros=document.getElementById("flecha_int_rostros");
		flecha_in_trostros.src="img/iconos_app/flecha.png";
		flecha_in_trostros.width="26";
		flecha_in_trostros.height="26"
		
		
		var flecha_in_seccion=document.getElementById("flecha_int_seccion");
		flecha_in_seccion.src="img/iconos_app/flecha.png";
		flecha_in_seccion.width="26";
		flecha_in_seccion.height="26"
		
		
		$(".img_secciones_ipod").css("display","");
		$(".img_secciones_iphone").css("display","none");
		$(".img_secciones_ipad").css("display","none");
		
		
		//muestras  img_int_rostros_ipod
		$(".img_int_secciones_ipodIpad").css("display","");
		$(".img_int_secciones_iphone").css("display","none");
		
		
		$(".img_int_rostros_ipodIpad").css("display","");
		$(".img_int_rostrs_iphone").css("display","none");
		
		
	}
	else
	{
		if(screen.width=="320" && screen.height=="568")
		{
                 // alert("i5");
			//menu
		var img_menu = document.getElementById("img_menu_ini");
		img_menu.src="img/iphone_ipod/menu_iphone.jpg";
		
		
		var img_btn_edicion = document.getElementById("img_btn_edicion");
		img_btn_edicion.src = "img/iconos_app/menu@2x.png";
		img_btn_edicion.width="36";
		img_btn_edicion.height="36";
        
        
        var img_btn_edicion = document.getElementById("img_btn_edicion");
        img_btn_edicion.src = "img/iconos_app/menu.png";
        img_btn_edicion.width="36";
        img_btn_edicion.height="36";
        document.getElementById("img_btn_edicion").style.margin="4px 0 0 0";
                  
       
        var img_btn_edicion = document.getElementById("img_btn_edicion_int");
        img_btn_edicion.src = "img/iconos_app/menu.png";
        img_btn_edicion.width="36";
        img_btn_edicion.height="36";
        document.getElementById("img_btn_edicion_int").style.margin="4px 0 0 0";
                  
        var img_btn_edicion1 = document.getElementById("img_btn_edicion_int1");
        img_btn_edicion1.src = "img/iconos_app/menu.png";
        img_btn_edicion1.width="36";
        img_btn_edicion1.height="36";
        document.getElementById("img_btn_edicion_int1").style.margin="4px 0 0 0";
		
		
		$(".img_secciones_ipod").css("display","none");
		$(".img_secciones_iphone").css("display","");
		$(".img_secciones_ipad").css("display","none");
		
		
		
		$(".img_int_secciones_ipodIpad").css("display","none");
		$(".img_int_secciones_iphone").css("display","");
		
		
		$(".img_int_rostros_ipodIpad").css("display","none");
		$(".img_int_rostros_iphone").css("display","");
		
		
		var flecha_mas_seccion=document.getElementById("flecha_mas_seccion_img");
		flecha_mas_seccion.src="img/iconos_app/mas@2x.png";
		flecha_mas_seccion.width="36";
		flecha_mas_seccion.height="36";
		
		var flecha_mas_rostros=document.getElementById("flecha_mas_rostros_img");
		flecha_mas_rostros.src="img/iconos_app/mas@2x.png";
		flecha_mas_rostros.width="36";
		flecha_mas_rostros.height="36";
		
		
		
		var flecha_in_trostros=document.getElementById("flecha_int_rostros");
		flecha_in_trostros.src="img/iconos_app/flecha@2x.png";
		flecha_in_trostros.width="26";
		flecha_in_trostros.height="26"
		
		
		var flecha_in_seccion=document.getElementById("flecha_int_seccion");
		flecha_in_seccion.src="img/iconos_app/flecha@2x.png";
		flecha_in_seccion.width="26";
		flecha_in_seccion.height="26"
		}
		else 
		{
				//alert("ipad");	
			var img_menu = document.getElementById("img_menu_ini");
			img_menu.src="img/menu.jpg";
			
			var img_btn_edicion = document.getElementById("img_btn_edicion");
			img_btn_edicion.src = "img/iconos_app/boton_ediciones.png";
			img_btn_edicion.width="120";
			img_btn_edicion.height="44";
			
            var img_btn_edicion_int = document.getElementById("img_btn_edicion_int");
                  img_btn_edicion_int.src = "img/iconos_app/boton_ediciones.png";
                  img_btn_edicion_int.width="120";
                  img_btn_edicion_int.height="44";
                  
            var img_btn_edicion1 = document.getElementById("img_btn_edicion_int1");
                  img_btn_edicion1.src = "img/iconos_app/boton_ediciones.png";
                  img_btn_edicion1.width="120";
                  img_btn_edicion1.height="44";
                  
                  
                  
                  
                  
                  
			
			$(".img_secciones_ipod").css("display","none");
			$(".img_secciones_iphone").css("display","none");
			$(".img_secciones_ipad").css("display","");
			
			
		$(".img_int_secciones_ipodIpad").css("display","");
		$(".img_int_secciones_iphone").css("display","none");
		
		
		$(".img_int_rostros_ipodIpad").css("display","");
		$(".img_int_rostros_iphone").css("display","none");
		
		
		var flecha_mas_seccion=document.getElementById("flecha_mas_seccion_img");
		flecha_mas_seccion.src="img/iconos_app/mas@2x.png";
		flecha_mas_seccion.width="36";
		flecha_mas_seccion.height="36";
		
		var flecha_mas_rostros=document.getElementById("flecha_mas_rostros_img");
		flecha_mas_rostros.src="img/iconos_app/mas@2x.png";
		flecha_mas_rostros.width="36";
		flecha_mas_rostros.height="36";
		
		var flecha_in_trostros=document.getElementById("flecha_int_rostros");
		flecha_in_trostros.src="img/iconos_app/flecha@2x.png";
		flecha_in_trostros.width="36";
		flecha_in_trostros.height="36"
		
		var flecha_in_seccion=document.getElementById("flecha_int_seccion");
		flecha_in_seccion.src="img/iconos_app/flecha@2x.png";
		flecha_in_seccion.width="36";
		flecha_in_seccion.height="36"
			
		}	
	}
		
		</script>
 
	
            ';

?>
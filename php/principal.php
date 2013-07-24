<?php
include("conex.php");


$plaza=$_POST["plaza"];

//ID de la plaza
$reg_plaza="select * from plazas where seudonimo='".$plaza."'";
$query_plaza=mysql_query($reg_plaza,$conexion);

while($row_plaza=mysql_fetch_assoc($query_plaza))
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





echo'
<script type="text/javascript">
(function(window, $, PhotoSwipe){
				
				var options = {};
				$(".gallery a").photoSwipe(options);
			
		}(window, window.jQuery, window.Code.PhotoSwipe));
</script>
 <section class="slider">
                <div class="flexslider">
                  <ul class="slides">';
				  
				  while($row_tablas = mysql_fetch_assoc($query_tablas))
					{
						
						if($row_tablas["referencia"]=='1')//EVENTOS
						{
							$id_evento=$row_tablas['id_evento'];
							$res_evento="select * from eventos where id='".$id_evento."'";
							$query_res_evento=mysql_query($res_evento, $conexion) or die ("error".mysql_error());
							$num=mysql_num_rows($query_res_evento);
							$row_res_evento=mysql_fetch_assoc($query_res_evento);
							
							
							//tipo de evento
							$tipo_evento=$row_res_evento['id_tipos_eventos'];
							$categoria_eventos=$row_res_evento['id_categoria'];
							$res_tipo_evento="select * from tipos_eventos where id ='".$tipo_evento."' ";
							$query_tipo_evento=mysql_query($res_tipo_evento, $conexion);
							$row_tipo_evento=mysql_fetch_assoc($query_tipo_evento);
							
							
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
									 echo' <li class="lista_slider">
					  
								  <div id="cont_img" class="cont_img"   onClick="javascript:eventos_especiales( \''.$id_evento.'\');">
										<img  src="'.$url.$row_res_evento['imagen_principal'].'" class="foto_evnt" />
				
										</div>
										
								
								
										<div id="slide_sec1" class="slide_sec" >
											 <div id="n_sec">'.utf8_encode($row_res_evento['titulo']).'</div>
										</div>
										
										 <div id="sum_rostros" class="sum_rostros"> 
											   <div class="titulo_evento_especial">'.utf8_encode($nombre_evento).'</div>
										</div>
										
									
									</li>
									';
									
								}
								else
								{
									 echo'
				 <li class="lista_slider">
                        	<div id="cont_img" class="cont_img"   onClick="mostrar_ocultar(\''.$id_evento.'\')">
                            <img  src="'.$url.$row_res_evento['imagen_principal'].'" class="foto_evnt" />
    
                            </div>
    
    
                             <div id="slide_sec1" class="slide_sec" >
                           		 <div id="Gallery" class="gallery" style="z-index:999999999">
                                 	<div id="galeria_contenido">';
									//miniaturas del  evento
									$miniaturas="select * from imagenes_eventos where id_evento='".$id_evento."'";
									$query_minitura=mysql_query($miniaturas,$conexion);
									
									while($row_miniatura=mysql_fetch_array($query_minitura))
									{
										echo'<div class="img_galeria"> <a href="'.$url.$row_miniatura['imagen'].'"><img src="'.$url.$row_miniatura['imagen'].'" /></a></div>';
										
									}
                                    	
                                    echo'</div>
       					 		 </div>
                            </div>
                            
                            <div id="box_sumario1" class="box_sumario"> 
                                    <div class="titulo_evento"><span class="span_tit">'.utf8_encode($row_res_evento['titulo']).'</span></div>
                                    <div class="sumario_evento" id="su_evt"><span class="span_tit">'.utf8_encode($row_res_evento['sumario']).'</span></div>
                                    <div class="edicion_revista">Edicion '.utf8_encode($plaza).'</div>
                            </div>
                            
                        
                        </li>

		';
									
								}
							
							
						}
				
				
				/*Publi*/
							else
						{
							if($row_tablas["referencia"]=='2')//PUBLICIDAD
							{
								//buscamos la pibli  
								$pub="select * from app_publicidad where id='".$row_tablas['id']."' ";
								$query_pub=mysql_query($pub, $conexion);
								while($row_pub=mysql_fetch_assoc($query_pub))
								{
									if($row_pub['posicion']==1)//video
									{
										//page5 --> reproductor de video 
										echo'
											<li class="lista_slider">
												<div style="width:100%; height:100%; position:absolute; overflow:hidden">
													<div style="width:100%; height:100%; position:absolute; overflow:scroll;background:#000" >
														<a href="#" onclick="javascript:ver_video(\'#page5\', \''.$url_video_publi.$row_pub['url'].'\')"><img src="'.$ur_img_publi.$row_pub['imagen_ios'].'"/></a>
													</div>
												</div> 	
											</li>		
										';	
									}
									else
									{
										if($row_pub['url']=="NULL")
										{
											echo'
											<li class="lista_slider">
												<div style="width:100%; height:100%; position:absolute; overflow:hidden">
													<div style="width:100%; height:100%; position:absolute; overflow:scroll;" >
														<a href="#"><img src="'.$ur_img_publi.$row_pub['imagen_ios'].'"/></a>
													</div>
												</div> 	
											</li>		
										';		
										}
										else
										{
											echo'
											<li class="lista_slider">
												<div style="width:100%; height:100%; position:absolute; overflow:hidden">
													<div style="width:100%; height:100%; position:absolute; overflow:scroll;" >
														<a href="'.$row_pub['url'].'" target="_new"><img src="'.$ur_img_publi.$row_pub['imagen_ios'].'"/></a>
													</div>
												</div> 	
											</li>		
										';	
										}
										
										
									}
									
								}
								
							}
							else   //secciones
							{
								/**/
								$seccion="select * from app_secciones";
								$query_seccion=mysql_query($seccion, $conexion);
								$row_seccion=mysql_fetch_assoc($query_seccion);
								$id_seccion=$row_seccion['id'];
								$tipo_seccion=$row_seccion['id_tipos_secciones'];
								
								if($tipo_seccion=="3")//bystyle
								{
									
									echo'
								<li class="lista_slider">
									<div id="secciones" >
										 
										<div class="img_secciones_ipod"><a href="#"><img src="img/ipod/bystyle.jpg" onClick="javascript:fn_secciones( \''.$id_seccion.'\', \''.$tipo_seccion.'\');"/></a></div>
										<div class="img_secciones_iphone"><a href="#"><img src="img/iphone/bystyle.jpg" onClick="javascript:fn_secciones('.$id_seccion.'\', \''.$tipo_seccion.'\');" /></a></div>
										<div class="img_secciones_ipad"><a href="#"><img src="img/bystyle.jpg" onClick="javascript:fn_secciones( \''.$id_seccion.'\' ,\''.$tipo_seccion.'\');" /></a></div>
									</div>
						   
								</li
								>';	
								}
									
							}
						
						}
			
					}
				  
				  
                       
                  echo'</ul>
                </div>
              </section>
	
	<script type="text/javascript">
    
    
		
      $(".flexslider").flexslider({
        animation: "slide",
        start: function(slider){
          $("body").removeClass("loading");
        }
      });
	  

	  
  </script>

';

?>
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
					  
								  <div id="cont_img" class="cont_img"   onClick="mostrar_ocultar(\''.$id_evento.'\')">
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
							
							
							/*echo'
						<li class="lista_slider">
                        	<div id="cont_img" class="cont_img"  onClick="mostrar_ocultar()">
                            <img src="img/fotos/2.jpg" class="foto_evnt" />
                            	
                            </div>
                	
                    
                            <div id="slide_sec1" class="slide_sec" >
                           		 <div id="Gallery" class="gallery" style="z-index:999999999">
                                 	<div id="galeria_contenido">
                                    	<div class="img_galeria"> <a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/2.jpg"><img src="img/fotos/2.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/3.jpg"><img src="img/fotos/3.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/4.jpg"><img src="img/fotos/4.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/5.jpg"><img src="img/fotos/5.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/6.jpg"><img src="img/fotos/6.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/7.jpg"><img src="img/fotos/7.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/8.jpg"><img src="img/fotos/8.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/9.jpg"><img src="img/fotos/9.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/10.jpg"><img src="img/fotos/10.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/11.jpg"><img src="img/fotos/11.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/12.jpg"><img src="img/fotos/12.jpg" /></a></div>
                                    </div>
       					 		 </div>
                            </div>
                            
                            <div id="box_sumario1" class="box_sumario"> 
                                    <div class="titulo_evento"><span class="span_tit">Titulo1</span></div>
                                    <div class="sumario_evento" id="su_evt"><span class="span_tit">Sumario</span></div>
                                    <div class="edicion_revista">Edicion</div>
                            </div>
                            
                        
                        </li>
                        
						';*/
							
						}
				
			
						/*echo'
						<li class="lista_slider">
                        	<div id="cont_img" class="cont_img"  onClick="mostrar_ocultar()">
                            <img src="img/fotos/2.jpg" class="foto_evnt" />
                            	
                            </div>
                	
                    
                            <div id="slide_sec1" class="slide_sec" >
                           		 <div id="Gallery" class="gallery" style="z-index:999999999">
                                 	<div id="galeria_contenido">
                                    	<div class="img_galeria"> <a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/2.jpg"><img src="img/fotos/2.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/3.jpg"><img src="img/fotos/3.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/4.jpg"><img src="img/fotos/4.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/5.jpg"><img src="img/fotos/5.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/6.jpg"><img src="img/fotos/6.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/7.jpg"><img src="img/fotos/7.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/8.jpg"><img src="img/fotos/8.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/9.jpg"><img src="img/fotos/9.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/10.jpg"><img src="img/fotos/10.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/11.jpg"><img src="img/fotos/11.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/12.jpg"><img src="img/fotos/12.jpg" /></a></div>
                                    </div>
       					 		 </div>
                            </div>
                            
                            <div id="box_sumario1" class="box_sumario"> 
                                    <div class="titulo_evento"><span class="span_tit">Titulo1</span></div>
                                    <div class="sumario_evento" id="su_evt"><span class="span_tit">Sumario</span></div>
                                    <div class="edicion_revista">Edicion</div>
                            </div>
                            
                        
                        </li>
                        
						';*/
					}
				  
				  /*
                        <li class="lista_slider">
                        	<div id="cont_img" class="cont_img"  onClick="mostrar_ocultar()">
                            <img src="img/fotos/2.jpg" class="foto_evnt" />
                            	
                            </div>
                	
                    
                            <div id="slide_sec1" class="slide_sec" >
                           		 <div id="Gallery" class="gallery" style="z-index:999999999">
                                 	<div id="galeria_contenido">
                                    	<div class="img_galeria"> <a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/2.jpg"><img src="img/fotos/2.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/3.jpg"><img src="img/fotos/3.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/4.jpg"><img src="img/fotos/4.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/5.jpg"><img src="img/fotos/5.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/6.jpg"><img src="img/fotos/6.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/7.jpg"><img src="img/fotos/7.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/8.jpg"><img src="img/fotos/8.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/9.jpg"><img src="img/fotos/9.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/10.jpg"><img src="img/fotos/10.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/11.jpg"><img src="img/fotos/11.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/12.jpg"><img src="img/fotos/12.jpg" /></a></div>
                                    </div>
       					 		 </div>
                            </div>
                            
                            <div id="box_sumario1" class="box_sumario"> 
                                    <div class="titulo_evento"><span class="span_tit">Titulo1</span></div>
                                    <div class="sumario_evento" id="su_evt"><span class="span_tit">Sumario</span></div>
                                    <div class="edicion_revista">Edicion</div>
                            </div>
                            
                        
                        </li>
                        
                        
                         <li class="lista_slider">
                        	<div id="cont_img" class="cont_img" onClick="">
                            	<img src="img/fotos/1.jpg" class="foto_evnt" />
                            </div>
                	
                    
                            <div id="slide_sec1" class="slide_sec" >
                            	<div id="Gallery" class="gallery">
                                 	<div id="galeria_contenido">
                                    	<div class="img_galeria"> <a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/2.jpg"><img src="img/fotos/2.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/3.jpg"><img src="img/fotos/3.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/4.jpg"><img src="img/fotos/4.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/5.jpg"><img src="img/fotos/5.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/6.jpg"><img src="img/fotos/6.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/7.jpg"><img src="img/fotos/7.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/8.jpg"><img src="img/fotos/8.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/9.jpg"><img src="img/fotos/9.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/10.jpg"><img src="img/fotos/10.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/11.jpg"><img src="img/fotos/11.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/12.jpg"><img src="img/fotos/12.jpg" /></a></div>
                                    </div>
       					 		 </div>
                            </div>
                            
                            <div id="box_sumario1" class="box_sumario"> 
                                    <div class="titulo_evento"><span class="span_tit">Nombre del evento</span></div>
                                    <div class="sumario_evento" id="su_evt"><span class="span_tit">Sumario</span></div>
                                    <div class="edicion_revista">Edicion</div>
                            </div>
                            
                         </li>
                        <li class="lista_slider">
                        	<div id="cont_img" class="cont_img" onClick="">
                            	<img src="img/fotos/5.jpg" class="foto_evnt" />
                            </div>
                	
                    
                            <div id="slide_sec1" class="slide_sec" >
                            	<div id="Gallery" class="gallery">
                                 	<div id="galeria_contenido">
                                    	<div class="img_galeria"> <a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/2.jpg"><img src="img/fotos/2.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/3.jpg"><img src="img/fotos/3.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/4.jpg"><img src="img/fotos/4.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/5.jpg"><img src="img/fotos/5.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/6.jpg"><img src="img/fotos/6.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/7.jpg"><img src="img/fotos/7.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/8.jpg"><img src="img/fotos/8.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/9.jpg"><img src="img/fotos/9.jpg" /></a></div>
                                        <div class="img_galeria"> <a href="img/fotos/10.jpg"><img src="img/fotos/10.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/11.jpg"><img src="img/fotos/11.jpg" /></a></div>
                                        <div class="img_galeria"><a href="img/fotos/12.jpg"><img src="img/fotos/12.jpg" /></a></div>
                                    </div>
       					 		 </div>
                            </div>
                            
                            <div id="box_sumario1" class="box_sumario"> 
                                    <div class="titulo_evento"><span class="span_tit">Titulo1</span></div>
                                    <div class="sumario_evento" id="su_evt"><span class="span_tit">Sumario</span></div>
                                    <div class="edicion_revista">Edicion</div>
                            </div>
                            
                            
                         </li>
                         
                          <li class="lista_slider">
                          	<div id="secciones" >
                                <div class="img_secciones_ipod"><a href="#page3"><img src="img/ipod/conoce.jpg" /></a></div>
                                <div class="img_secciones_iphone"><a href="#page3"><img src="img/iphone/conoce.jpg" /></a></div>
                                <div class="img_secciones_ipad"><a href="#page3"><img src="img/conoce.jpg" /></a></div>
                            </div>
                          </li>
                          
                          <li class="lista_slider">
                          	<div id="secciones" >
                                <div class="img_secciones_ipod"><a href="#page3"><img src="img/ipod/bystyle.jpg" /></a></div>
                                <div class="img_secciones_iphone"><a href="#page3"><img src="img/iphone/bystyle.jpg"  /></a></div>
                                <div class="img_secciones_ipad"><a href="#page3"><img src="img/bystyle.jpg"/></a></div>
                            </div>
                          </li>
                          <li class="lista_slider">
                          	<div id="secciones" >
                                <div class="img_secciones_ipod"><a href="#page3"><img src="img/ipod/consientete.jpg" /></a></div>
                                <div class="img_secciones_iphone"><a href="#page3"><img src="img/iphone/consientete.jpg" /></a></div>
                                <div class="img_secciones_ipad"><a href="#page3"><img src="img/consientete.jpg" /></a></div>
                            </div>
                          </li>
                          <li class="lista_slider">
                          	<div id="secciones" >
                                <div class="img_secciones_ipod"><a href="#page3"><img src="img/ipod/disfruta.jpg" /></a></div>
                                <div class="img_secciones_iphone"><a href="#page3"><img src="img/iphone/disfruta.jpg" /></a></div>
                                <div class="img_secciones_ipad"><a href="#page3"><img src="img/disfruta.jpg"/></a></div>
                            </div>
                          </li>
                          
                          <li class="lista_slider">
                          	<div id="cont_img" class="cont_img" ><a href="#page2" ><img src="img/fotos/5.jpg" onClick="" /></a></div>

                           <div id="r_nom_persona" class="r_nom_persona" >
                                    <DIV id="n_sec">NOMBRE DE LA PERSONA</DIV>
                            </div>
        
        
                            <div id="sum_rostros" class="sum_rostros"> 
                                    <div class="titulo_evento_especial">NOMBRE DE LA SECCION</div>
                            </div>

                </div>
                          
                          </li>*/
                       
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
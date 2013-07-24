<?php

	include("conex.php");
	
	
	$reg_evento="select * from app_eventos_home";
	$query_evento=mysql_query($reg_evento, $conexion);
	$contador=1;
	//$row_evento=mysql_fetch_array($query_evento);
	$cadena="mensaje";
	
echo'
  <section class="slider">
                <div class="flexslider">
                  <ul class="slides">';
				  while($row_evento = mysql_fetch_assoc($query_evento))
				  {
					  switch ($row_evento['id_plaza'])
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
					  
					  $id_evento=$row_evento['id_evento'];
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
			{//<div id="cont_img" class="cont_img" ><a href="#" ><img src="'.$url.$row_res_evento['imagen_principal'].'"  onClick="javascript:eventos_especiales(\'#page2\', \''.$id_evento.'\');"  /></a></div>
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
						  
						  
					
				
				
				}
				
                       
                        
                       
               echo'   </ul>
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
<?php
    
   /*Conexion a la BD*/
	include("conex.php");
	
	
	$reg_evento="select * from app_eventos_home";
	$query_evento=mysql_query($reg_evento, $conexion);
	$contador=1;
	
	
	/*Impresion de  eventos*/
  
echo'

    <!-- galeria-->
    <link href="galeria/styles_galeria.css" type="text/css" rel="stylesheet" />
    <link href="galeria/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="galeria/klass.min.js"></script>
	<script type="text/javascript" src="galeria/code.photoswipe-3.0.4.min.js"></script>
    
    <section class="slider">
    <div class="flexslider">
    <ul class="slides">';
	  while($row_evento=mysql_fetch_array($query_evento))
	{
		/*plazas*/
		
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
			{
				echo'
				 <li class="lista_slider">
                          	<div id="cont_img" class="cont_img" ><a href="#" ><img src="'.$url.$row_res_evento['imagen_principal'].'" onClick="javascript:eventos_especiales(\"#page3\");" /></a></div>

                           <div id="r_nom_persona" class="r_nom_persona" >
                                    <DIV> '.utf8_encode($row_res_evento['titulo']).'</DIV>
                            </div>
        
        
                            <div id="sum_rostros" class="sum_rostros"> 
                                    <div class="titulo_evento">'.utf8_encode($nombre_evento).'</div>
                            </div>

                </div>
                          
                          </li>
				';			}
			else //evento normal
			{
				
				
				echo'
				 <li class="lista_slider">
                        	<div id="cont_img" class="cont_img"  onClick="fotogaleria_muestra()">
                            <img src="'.$url.$row_res_evento['imagen_principal'].'" class="foto_evnt" />
    
                            </div>
    
    
                            <div id="slide_sec1" class="slide_sec" >
                           		 <div id="Gallery'.$contador.'" class="gallery" style="z-index:999999999">
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
                                    <div class="titulo_evento">'.utf8_encode($row_res_evento['titulo']).'</div>
                                    <div class="sumario_evento" id="su_evt">'.utf8_encode($row_res_evento['resena']).'</div>
                                    <div class="edicion_revista">Edicion:'.utf8_encode($plaza).'</div>
                            </div>
                            
                        
                        </li>
						<script>

		(function(window, $, PhotoSwipe){
			
			$(document).ready(function(){
				
				var options = {};
				$("#Gallery'.$contador.' a").photoSwipe(options);
			
			});
			
		}(window, window.jQuery, window.Code.PhotoSwipe));
		
</script>
        ';
				
			}
		
		
		
		
		
		$contador++;
		
		
		
		
	}
	/*
                        <li class="lista_slider">
                        	<div id="cont_img" class="cont_img"  onClick="fotogaleria_muestra()">
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
                                    <div class="titulo_evento">'.$query_evento.'</div>
                                    <div class="sumario_evento" id="su_evt">Sumario</div>
                                    <div class="edicion_revista">Edicion</div>
                            </div>
                            
                        
                        </li>
                        
                        
                       
                          
                          <li class="lista_slider">
                          	<div id="cont_img" class="cont_img" ><a href="#" ><img src="img/fotos/5.jpg" onClick="javascript:eventos_especiales(\"#page3\");" /></a></div>

                           <div id="r_nom_persona" class="r_nom_persona" >
                                    <DIV>NOMBRE DE LA PERSONA</DIV>
                            </div>
        
        
                            <div id="sum_rostros" class="sum_rostros"> 
                                    <div class="titulo_evento">NOMBRE DE LA SECCION</div>
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
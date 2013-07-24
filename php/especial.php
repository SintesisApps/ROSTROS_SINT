<?php
   /*Conexion a la BD*/
	include("conex.php");
//recibe el id del evento

$id_evento=$_POST['id_evento'];

$evento="select * from eventos where id='".$id_evento."' ";
$query_evento=mysql_query($evento,$conexion );
$row_evento=mysql_fetch_array($query_evento);


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


echo'

       <div id="foto_rostros" class="foto_rostros">
       <div id="carousel2" class="flexslider">
          <ul class="slides">
         		
				 <div id="flecha_mas_seccion" ><img src="img/iconos_app/mas.png" width="30" height="30" id="flecha_mas_seccion_img"></div>
				 ';
           		  $carrousel="select * from imagenes_eventos where id_evento='".$id_evento."' ";
			$query_carrousel=mysql_query($carrousel, $conexion);
			$item=1;
			while($row_carrousel=mysql_fetch_array($query_carrousel))
			{
				echo'
				<li>
  	    	   		<div class="img_int_rostros_ipodIpad"><img src="'.$url.$row_carrousel['imagen'].'" /></div>
                    <div class="img_int_rostros_iphone"><img src="'.$url.$row_carrousel['imagen_iphone'].'" /></div>
  	    		</li>
				
				';
			}
			
  	    	
          echo'</ul>
        </div>
        		
        </div>
        <div id="descripcion_rostros" class="descripcion_rostros">
        	<div id="r_descripcion" class="r_descripcion">
            	<div id="r_name" class="r_name" >
                	<span class="r_nombre"> '.$row_evento['titulo'].'</span><br>
                    <span class="r_apellido" > </span>
                </div>
                <div class="r_separador"></div>
            	<div class="r_texto">
                	<span class="r_pregunta"> '.utf8_encode($row_evento['nota']).'</span><br>
                    <!--<span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                   <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br><span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>-->
               
                </div>
            </div>
        	<div id="r_flecha" class="r_flecha">
            <a href="javascript:;" id="r_flecha1">
        <img src="img/iconos_app/indicador.png" />
         </a>
            </div>
        </div>
		
		<script type="text/javascript">
    
    
		
       $("#carousel2").flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: #slider"
      });
	  
	 
	  
  </script>
		
		';
		
		


?>
<?php

include("conex.php");
//recibe el id del evento

$id_seccion=$_POST['id_seccion'];
$tipo=$_POST['tipo'];



						$seccion="select * from app_secciones where id='".$id_seccion."'";
						$query_seccion=mysql_query($seccion, $conexion);
						$row_seccion=mysql_fetch_array($query_seccion);
						//$id_seccion=$row_seccion['id'];
						$titulo=$row_seccion['titulo'];
						$nota=$row_seccion['nota'];
						$id_plaza=$row_seccion['id_plaza'];
						$tipo_seccion=$row_seccion['id_tipos_secciones'];
						
						



switch ($id_plaza)
		{
			case 1:
				$plaza="Puebla";	
				$url="http://www.rostrospuebla.com.mx/redisenoV2/images/imagenes-secciones/";
				break;
			
			case 2:
				$plaza="Tlaxcala";	
				$url="http://www.losrostrostlaxcala.com.mx/redisenoV2/images/imagenes-secciones/";
				break;
				
			case 3:
				$plaza="Hidalgo";	
				$url="http://www.losrostroshidalgo.com.mx/redisenoV2/images/imagenes-secciones/";
				break;
				
			case 4:
				$plaza="Veracruz";	
				$url="http://www.losrostrosveracruz.com.mx/redisenoV2/images/imagenes-secciones/";
				break;
				
			case 5:
				$plaza="Oaxaca";	
				$url="http://www.losrostrosoaxaca.com.mx/redisenoV2/images/imagenes-secciones/";
				break;
				
			case 6:
				$plaza="Chiapas";	
				$url="http://www.losrostroschiapas.com.mx/redisenoV2/images/imagenes-secciones/";
				break;
				
			case 7:
				$plaza="Yucat&aacute;n";	
				$url="http://losrostrosyucatan.com.mx/redisenoV2/images/imagenes-secciones/";
				break;
				
			case 8:
				$plaza="jalisco";	
				$url="http://www.losrostrosjalisco.com.mx/redisenoV2/images/imagenes-secciones/";
				break;
		}



echo'
<div id="foto_seccion" class="foto_seccion">
        <div id="carousel" class="flexslider">
          <ul class="slides">
          <div id="flecha_mas_seccion" ><img src="img/iconos_app/mas.png" width="30" height="30" id="flecha_mas_seccion_img"></div>';
		  $carrousel="select * from imagenes_app_secciones where id_app_secciones='".$id_seccion."' ";
			$query_carrousel=mysql_query($carrousel, $conexion);
			$item=1;
			$texto="";
			while($row_carrousel=mysql_fetch_array($query_carrousel))
			{
				if ($item==1)
				{
					echo'
					<li>
  	    	   		 <div class="img_int_rostros_ipodIpad"><img src="'.$url.$row_carrousel['imagen'].'" /></div>
                        <div class="img_int_rostros_iphone"><img src="'.$url.$row_carrousel['imagen_iphone'].'" /></div>
  	    		</li>
					
					';	
					$texto=$texto.$row_carrousel['imagen_iphone'];
				}
			}
           		/* <li>
  	    	   		<div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                	<div class="img_int_secciones_iphone"><img src="img/iphone/bystyle.jpg" /></div>
  	    		</li>
  	    		<li>
  	    	   		<div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                	<div class="img_int_secciones_iphone"><img src="img/iphone/bystyle.jpg" /></div>
  	    		</li>
                <li>
  	    	   		<div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                	<div class="img_int_secciones_iphone"><img src="img/iphone/bystyle.jpg" /></div>
  	    		</li>
                <li>
  	    	   		<div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                	<div class="img_int_secciones_iphone"><img src="img/iphone/bystyle.jpg" /></div>
  	    		</li>*/
  	    	
         echo' </ul>
        </div>
        </div>
        
        <div id="descripcion_seccion" class="descripcion_seccion" style="position:fixed">
        	<div id="s_descripcion" class="s_descripcion">
            	<div id="s_name" class="s_name" >
                	<span class="s_titulo"></span><br>
                    <span class="s_subtitulo" >'.utf8_encode($titulo).'</span>
                </div>
                <div class="s_separador"></div>
            	<div class="s_texto">';
				$nota="select * from imagenes_app_secciones where id_app_secciones='".$id_seccion."' ";
			$query_nota=mysql_query($nota, $conexion);
			while($row_nota=mysql_fetch_array($query_nota))
			{
				echo'
				<span class="r_pregunta" style=" text-transform:capitalize">'.utf8_encode($row_nota['titulo']).':</span><br>
                    <span class="r_respuesta"  style=" text-transform:uppercase">'.utf8_encode($row_nota['pie']).'</span><br><br>
				';
				
			}
			echo'
                	<!--<span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
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
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br><span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>-->
               
                </div>
            </div>
        	<div id="s_flecha" class="s_flecha">
            <a href="javascript:;" id="s_flecha2">
        <img src="img/iconos_app/indicador.png" />
         </a>
            </div>
        </div>

';
?>
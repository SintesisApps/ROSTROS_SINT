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

echo '

    <link rel="stylesheet" href="css/ios.css">
    <link rel = "stylesheet" href = "css/default.css" />
	<link rel = "stylesheet" href = "css/default.css" />
		<link rel = "stylesheet" media = "screen" href = "css/common.css" />
		
		<!-- JS -->
		<script src = "js/jquery.easing-1.3.js"></script>
		<script src = "js/jquery.iosslider.js"></script>
		<script src = "js/common.js"></script>
		
		<!-- slidesec -->
<script>
$(document).ready(function() {
	/*animacion  slide interior*/
	$("#r_flecha1").click(function(){
    $("#r_descripcion").animate({width:"toggle"});
  });
  
  $("#s_flecha2").click(function(){
    $("#s_descripcion").animate({width:"toggle"});
  });
	
	
	});

</script>
  <div id="foto_seccion" class="foto_seccion">
        	<div class = "snap-slider">
		
			<div class = "slider slider_seccion">';
			
			$carrousel="select * from imagenes_app_secciones where id_app_secciones='".$id_seccion."' ";
			$query_carrousel=mysql_query($carrousel, $conexion);
			$item=1;
			$texto="";
			while($row_carrousel=mysql_fetch_array($query_carrousel))
			{
				if ($item==1)
				{
					echo'
					<div class = "item" id = "item1">
                    <div id="flecha_mas_rostros" ><img src="img/iconos_app/mas.png" width="26" height="26" id="flecha_mas_rostros_img"></div>
                    <div class="img_int_rostros_ipodIpad"><img src="'.$url.$row_carrousel['imagen'].'" /></div>
                        <div class="img_int_rostros_iphone"><img src="'.$url.$row_carrousel['imagen_iphone'].'" /></div>
                </div>
					';	
					$texto=$texto.$row_carrousel['imagen_iphone'];
				}
				else
				{
					echo'
						<div class = "item" id = "item1">
                	<div class="img_int_rostros_ipodIpad"><img src="'.$url.$row_carrousel['imagen'].'" /></div>
                    <div class="img_int_rostros_iphone"><img src="'.$url.$row_carrousel['imagen_iphone'].'" /></div>
                </div>
					';
				}
			}
			
				
				
				
			echo'</div>
		
			</div>	
        </div>
        <div id="descripcion_seccion" class="descripcion_seccion" >
        	<div id="s_descripcion" class="s_descripcion">
            	<div id="s_name" class="s_name" >
                	<span class="s_titulo"></span><br>
                    <span class="s_subtitulo" >'.utf8_encode($titulo).' </span>
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
				
				
                	<!--
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
		
		
		<script>
			if(screen.width=="320" && screen.height=="480")
	{
		//alert("iphne4");//menu
		var img_menu = document.getElementById("img_menu_ini");
		img_menu.src="img/iphone_ipod/menu_ipod.jpg";
		
		
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
			//	alert("ipad");	
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
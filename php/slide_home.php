<?php
   
    /*Conexion a la BD*/
	include("conex.php");
	
	
	$reg_evento="select * from app_eventos_home";
	$query_evento=mysql_query($reg_evento, $conexion);
	$contador=1;
	
	

	
    
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
    
  
    
 
    
    
    <div class = "full-width-slider">
    
    <div class = "slider">';
	
	
	/*Impresion de  eventos*/
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
		
		
		
        echo'
        <div class = "item" id = "item1">';
			//
			//buscamso evento e iprimimos
			
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
				
					<div id="cont_img" class="cont_img" ><a href="#" ><img src="'.$url.$row_res_evento['imagen_principal'].'" onClick="javascript:eventos_especiales(\'#page3\', \''.$id_evento.'\');" /></a></div>
				 
					 <div id="r_nom_persona" class="r_nom_persona" >
					 '.utf8_encode($row_res_evento['titulo']).'
					 </div>
				 
				 
					<div id="sum_rostros" class="sum_rostros">
						<div class="titulo_evento_especial">'.utf8_encode($nombre_evento).'</div>
					</div>
				 
				 </div>
				';			}
			else //evento normal
			{
				
				
				echo'<div id="cont_img" class="cont_img" onClick="fotogaleria_muestra(\''.$id_evento.'\')"><img src="'.$url.$row_res_evento['imagen_principal'].'" class="foto_evnt" /></div>';
			
			
			
			
			echo'<div id="slide_sec1" class="slide_sec" >
				
				<div class="sumario_evento" id="su_evt">'.utf8_encode($row_res_evento['sumario']).'</div>
			</div>
				
			
			
			<div id="box_sumario1" class="box_sumario">
				<div class="titulo_evento" >'.utf8_encode($row_res_evento['titulo']).'</div>
				
				<div class="edicion_revista">'.utf8_encode($plaza).'</div>
			</div>
        
        
        </div>
        ';
				
			}
			
			
			
			
			
			
		
		$contador++;
		
	}
	echo'
	</div>
    
    </div>
	';
	

    
  echo' <script>
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
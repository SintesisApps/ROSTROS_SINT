<?php
echo '


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
		
			<div class = "slider slider_seccion">
			
				<div class = "item" id = "item1">
                
                    <div id="flecha_mas_seccion" ><img src=""  id="flecha_mas_seccion_img"></div>
                    <div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                        <div class="img_int_secciones_iphone"><img src="img/iphone/bystyle.jpg" /></div>
                </div>
				<div class = "item" id = "item1">
                	<div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                    <div class="img_int_secciones_iphone"><img src="img/iphone/bystyle.jpg" /></div>
                </div>
				<div class = "item" id = "item1">
                	<div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                    <div class="img_int_secciones_iphone"><img src="img/iphone/conoce.jpg" /></div>
                </div>
                <div class = "item" id = "item1">
                	<div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                    <div class="img_int_secciones_iphone"><img src="img/iphone/conciente.jpg" /></div>
                </div>
                <div class = "item" id = "">
                	<div class="img_int_secciones_ipodIpad"><img src="img/prueba_sec.jpg" /></div>
                   <div class="img_int_secciones_iphone"><img src="img/iphone/disfruta.jpg" /></div>
                </div>
			</div>
		
			</div>	
        </div>
        <div id="descripcion_seccion" class="descripcion_seccion" >
        	<div id="s_descripcion" class="s_descripcion">
            	<div id="s_name" class="s_name" >
                	<span class="s_titulo"> HIDRATA</span><br>
                    <span class="s_subtitulo" > TU PIEL</span>
                </div>
                <div class="s_separador"></div>
            	<div class="s_texto">
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
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br><span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
                    <span class="r_pregunta"> texto texto texto texto  texto texto:</span><br>
                    <span class="r_respuesta">texto texto texto texto  texto textotexto texto texto texto  texto texto</span><br><br>
               
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
		img_menu.src="img/iphone_ipod/menu_ipod.jpg";
		
		
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
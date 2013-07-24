<?php

echo'
 
    	
       <div id="foto_rostros" class="foto_rostros">
       <div id="carousel2" class="flexslider">
          <ul class="slides">
          <div id="flecha_mas_seccion" ><img src="img/iconos_app/mas.png" width="30" height="30" id="flecha_mas_seccion_img"></div>
           		  
                 <li>
  	    	   		<div class="img_int_rostros_ipodIpad"><img src="img/fotos/1.jpg" /></div>
                        <div class="img_int_rostros_iphone"><img src="img/iphone/bystyle.jpg" /></div>
  	    		</li>
                 <li>
  	    	   		<div class="img_int_rostros_ipodIpad"><img src="img/fotos/1.jpg" /></div>
                        <div class="img_int_rostros_iphone"><img src="img/iphone/bystyle.jpg" /></div>
  	    		</li>
                <li>
  	    	   		<div class="img_int_rostros_ipodIpad"><img src="img/fotos/1.jpg" /></div>
                        <div class="img_int_rostros_iphone"><img src="img/iphone/bystyle.jpg" /></div>
  	    		</li>
  	    	
          </ul>
        </div>
        		
        </div>
        <div id="descripcion_rostros" class="descripcion_rostros">
        	<div id="r_descripcion" class="r_descripcion">
            	<div id="r_name" class="r_name" >
                	<span class="r_nombre"> ALEJANDRO</span><br>
                    <span class="r_apellido" > OCHOA</span>
                </div>
                <div class="r_separador"></div>
            	<div class="r_texto">
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
        	<div id="r_flecha" class="r_flecha">
            <a href="javascript:;" id="r_flecha1">
        <img src="img/iconos_app/indicador.png" />
         </a>
            </div>
        </div>
          <script>
		  
		   $("#carousel2").flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: "#slider"
      });
		  </script>
     

';

?>
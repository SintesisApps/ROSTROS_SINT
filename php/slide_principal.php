<?php
    
  //  echo'hola';

echo'

	<link rel = "stylesheet" href = "css/default.css" />
		<link rel = "stylesheet" media = "screen" href = "css/common.css" />
		
		<!-- JS -->
		<script src = "js/jquery.easing-1.3.js"></script>
		<script src = "js/jquery.iosslider.js"></script>
		<script src = "js/common.js"></script>
		
		<!-- slidesec -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.touchSlider.js"></script>
		
		
		<!-- galeria-->
		<link href="galeria/styles_galeria.css" type="text/css" rel="stylesheet" />
<link href="galeria/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="galeria/klass.min.js"></script>
	<script type="text/javascript" src="galeria/code.photoswipe-3.0.4.min.js"></script>
	
	<script>

		(function(window, $, PhotoSwipe){
			
			$(document).ready(function(){
				
				var options = {};
				$("#Gallery1 a").photoSwipe(options);
			
			});
			
			$(document).ready(function(){
				
				var options = {};
				$("#Gallery2 a").photoSwipe(options);
			
			});
			
			
		}(window, window.jQuery, window.Code.PhotoSwipe));
		
</script>

<script>
$(document).ready(function() {

slide_principal();
	//boton ediciones
	$("#btn_edicion").click(function() {
		$("#panelSecciones").slideToggle(800);
		//alert("btn seccion");
	});
	$("#btn_edicion2").click(function() {
		$("#panelSecciones").slideToggle(800);
		//alert("btn seccion"");
	});
	
	$("#rubrica_name").click(function() {
		$("#panelSecciones").slideToggle(800);
	});
	
	
	
	$("div[id^=\'gallery_sec\']").touchSlider({
			mode: "shift",
			offset: "auto"
	});
	
	/*animacion  slide interior*/
	$("#r_flecha1").click(function(){
    $("#r_descripcion").animate({width:"toggle"});
  });
  
  $("#r_flecha2").click(function(){
    $("#s_descripcion").animate({width:"toggle"});
  });
  

	
});

</script>


		
		
<div class = "full-width-slider">



			<div class = "slider">

				

				 <div class = "item" id = "item1">

                <div id="cont_img" class="cont_img" onClick="mostrar_ocultar()"><img src="img/fotos/1.jpg" /></div>

                	

                    

                	<div id="slide_sec1" class="slide_sec" >

                    <div class="gallery-holder" style="z-index:9999;">

                        	<div class="gallery_slide" id="gallery_sec1" >

                        		<div class="holder">

                                	<div class="list">

                                    <div id="Gallery1" class="gallery">

                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>

                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>

                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>

                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>

                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>

                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>

                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>

                                    <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>

                                    </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    

                    </div>

                    

                    

                    

                    <div id="box_sumario1" class="box_sumario"> 

                    		<div class="titulo_evento">Titulo1</div>

                            <div class="sumario_evento" id="su_evt">Sumario</div>

                            <div class="edicion_revista"><a href="javascript:mostrar_ocultar();">Edicion</a></div>

                    </div>

                    

                    

                </div>

                

				 <div class = "item" id = "item1">

                	

                	<div id="cont_img" class="cont_img" onClick="mostrar_ocultar()"><img src="img/fotos/2.jpg" /></div>

                                        

                    <div id="slide_sec1" class="slide_sec" >

                    <div class="gallery-holder" style="z-index:9999;">

                        	<div class="gallery_slide" id="gallery_sec2" >

                        		<div class="holder">

                                	<div class="list">

                                     <div id="Gallery2" class="gallery">
									 <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>
									 <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>
	       							 <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>
								     <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>
								     <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>
									 <div class="item_s"><div class="box_s box1"><a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg" width="210" height="159"/></a></div></div>
                                    </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    

                    </div>

                    

                    

                    <div id="box_sumario1" class="box_sumario"> 

                    		<div class="titulo_evento">Titulo1</div>

                            <div class="sumario_evento" id="su_evt">Sumario</div>

                            <div class="edicion_revista"><a href="javascript:mostrar_ocultar();">Edicion</a></div>

                    </div>

                    

                    

                </div>

                

                 <div class = "item" id = "item1">

                	

                	<div id="cont_img" class="cont_img" onClick="mostrar_ocultar()"><img src="img/fotos/3.jpg" /></div>

                    

                    

                    <div id="slide_sec1" class="slide_sec" >

                    <div class="gallery-holder" style="z-index:9999;">

                        	<div class="gallery_slide" id="gallery_sec3" >

                        		<div class="holder">

                                	<div class="list">

                                    <div id="Gallery3" class="gallery">

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    

                    </div> 

                    

                    

                    <div id="box_sumario1" class="box_sumario"> 

                    		<div class="titulo_evento">Titulo1</div>

                            <div class="sumario_evento" id="su_evt">Sumario</div>

                            <div class="edicion_revista"><a href="javascript:mostrar_ocultar();">Edicion</a></div>

                    </div>

                    

                    

                </div>

                

                

                 <div class = "item" id = "item1">

                	

                	<div id="cont_img" class="cont_img" onClick="mostrar_ocultar()"><img src="img/fotos/4.jpg" /></div>

                    

                    

                   <div id="slide_sec1" class="slide_sec" >

                    <div class="gallery-holder" style="z-index:9999;">

                        	<div class="gallery_slide" id="gallery_sec4" >

                        		<div class="holder">

                                	<div class="list">

                                    <div id="Gallery4" class="gallery">

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    <div class="item_s"><div class="box_s box1"><img src="img/fotos/1.jpg" /></div></div>

                                    </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    

                    </div>

                    

                   

                    <div id="box_sumario1" class="box_sumario"> 

                    		<div class="titulo_evento">Titulo1</div>

                            <div class="sumario_evento" id="su_evt">Sumario</div>

                            <div class="edicion_revista"><a href="javascript:mostrar_ocultar();">Edicion</a></div>

                    </div>

                    

                </div>

                

                 <div class = "item" id = "item1">

                	<div id="secciones" >

                    	<div id="img_secciones"><a href="#"><img src="img/conoce.jpg" onClick="javascript:secciones(\'#page4\');" /></a></div>

                    </div>

                   

                </div>

                 <div class = "item" id = "item1">

                	<div id="secciones" >

                    	<div id="img_secciones"><a href="#"><img src="img/bystyle.jpg" onClick="javascript:secciones(\'#page4\');" /></a></div>

                    </div>

                   

                </div>

                 <div class = "item" id = "item1">

                	<div id="secciones" >

                    	<div id="img_secciones"><a href="#"><img src="img/consientete.jpg" onClick="javascript:secciones(\'#page4\');"/></a></div>

                    </div>

                   

                </div>

                 <div class = "item" id = "item1">

                	<div id="secciones" >

                    	<div id="img_secciones"><a href="#"><img src="img/disfruta.jpg" onClick="javascript:secciones(\'#page4\');"/></a></div>

                    </div>

                   

                </div>

                

                 <div class = "item" id = "item1"><!--javascript:eventos_especiales(\'#page2\');-->

                	<div id="cont_img" class="cont_img" ><a href="#" ><img src="http://192.168.1.115/app_rostros/ROSTROS_SINT/img/fotos/5.JPG" onClick="javascript:eventos_especiales(\'#page3\');" /></a></div>

                    

                    

                   <div id="r_nom_persona" class="r_nom_persona" >

                    		<DIV>NOMBRE DE LA PERSONA</DIV>

                    

                    </div>

                    

                   

                    <div id="sum_rostros" class="sum_rostros"> 

                    		<div class="titulo_evento">NOMBRE DE LA SECCION</div>

                    </div>

                 

                    

                </div>

			

			</div>

		

		</div>
';

?>
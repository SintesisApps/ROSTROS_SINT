<?PHP
include("conex.php");

$id_evento=$_POST['id_evento'];

$evento="select * from eventos where id = '".$id_evento."' ";
$query_evento=mysql_query("$evento", $conexion);
$row_evento=mysql_fetch_assoc($query_evento);
$id_plaza=$row_evento['id_plaza'];


switch ($id_plaza)
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


//sminiaturas

$miniatura="select * from imagenes_eventos where id_evento='".$id_evento."' ";
$query_miniatura=mysql_query($miniatura,$conexion);


echo'
<script type="text/javascript">
(function(window, $, PhotoSwipe){
				
				var options = {};
				$(".gallery1 a").photoSwipe(options);
			
		}(window, window.jQuery, window.Code.PhotoSwipe));
</script>
<div style="width:1000px; height:159px;  margin-top:45px; position:absolute;overflow:hidden; padding-left:10px;">
		<div id="Gallery" class="gallery1" style="z-index:999999999;width:3000px; height:159px; overflow:scroll ">

                	<div style="width:234px;height:159; float:left;"> <a href="img/fotos/1.jpg"><img src="img/fotos/1.jpg"/></a></div>
                    <div style="width:234px;height:159; float:left;"><a href="img/fotos/2.jpg"><img src="img/fotos/2.jpg" /></a></div>
                    <div style="width:234px;height:159; float:left;"><a href="img/fotos/3.jpg"><img src="img/fotos/3.jpg" /></a></div>
                    <div style="width:234px;height:159; float:left;"> <a href="img/fotos/4.jpg"><img src="img/fotos/4.jpg"/></a></div>
                                    

</div>
';

?>
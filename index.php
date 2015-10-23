<?php
session_start();

if(isset ($_SESSION['nombre'])){
	$logejat=1;
}
if(isset($_POST['tancar'])){
	unset($_SESSION['nombre']);
	$logejat = 0;
}
if(isset($_POST['retornado'])){
	$retornador = $_SESSION['nombre'];
	$animalet = $_POST['retornado'];
	$con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');
	$sql=("UPDATE tbl_anunci SET email_contact='$retornador' ,desactivat= 0 WHERE tbl_anunci.anu_id = $animalet");
	mysqli_query($con, $sql);
	mysqli_close($con);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>

<title>Productos para mascotas: comida y accesorios para animales</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Tienda online de productos para mascotas. Conoce nuestro Compromiso Social Misterguau y descubre las razones por las que confiar a Misterguau la compra de tu mascota." />
<meta name="keywords" content="productos para mascotas, comprar cachorros, comprar mascotas, comprar mascotas misterguau, comida para mascotas, accesorios mascotas, protectoras de animales, apadrinar cachorros, adopcion animales misterguau, criticas misterguau, multas misterguau" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="google-site-verification" content="Mi2Gyy2Ae0jO7d1xlgmlL9g6di9fQJMqo5vDQqJmg1A" />
<link rel="icon" href="http://www.misterguau.com/skin/frontend/blank/theme048/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.misterguau.com/skin/frontend/blank/theme048/favicon.ico" type="image/x-icon" />

 <script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 

  ga('create', 'UA-41503841-1', 'misterguau.com');

  ga('send', 'pageview');

 

</script>


<script type="text/javascript">


//<![CDATA[
    var BLANK_URL = 'http://www.misterguau.com/js/blank.html';
    var BLANK_IMG = 'http://www.misterguau.com/js/spacer.gif';
//]]>
</script>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/clears.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/j2t-rewardpoints.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<script type="text/javascript" src="http://www.misterguau.com/js/prototype/prototype.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/prototype/validation.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/builder.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/effects.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/dragdrop.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/controls.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/scriptaculous/slider.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/js.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/form.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/menu.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/mage/translate.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/mage/cookies.js"></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" cms-index-index cms-home">
<div class="wrapper" id="wrap">
        <div class="page">
        <div class="header_new">
  	<h1>MISTER GUAU</h1>
  <a href="index.php"><img src="http://www.misterguau.com/skin/frontend/blank/theme048/images/logo.jpg" width="630" height="75" /></a>
  </div>
  <div class="bC_caja">
    <ul class="menu-left">
      <?php
	if (isset($logejat)){
		if ($logejat!=0){
		echo "<li>BIENVENIDO ".$_SESSION['nombre']." </li>";
	?>
	<form name="cerrarsesion" value="cerrarsesion" action="index.php" method="Post">
		<input type="hidden" name="tancar" value="1">
    <input class="cerrar" type="submit" value="CERRAR SESION"/>
	</form>
	<?php
		}else{
	?>
      <li><a href="MisterguauLogin.php">REGISTRO</a></li>
      <li>/</li>
            <li><a href="MisterguauLogin.php">INICIAR SESIÓN</a></li>
            <!--li>/</li>
      <li><a href="http://www.misterguau.com/index.php/customer/account/">MI CUENTA</a></li-->
	  <?php		
			
		}
		
		}else{
	?>
      <li><a href="MisterguauLogin.php">REGISTRO</a></li>
      <li>/</li>
            <li><a href="MisterguauLogin.php">INICIAR SESIÓN</a></li>
            <!--li>/</li>
      <li><a href="http://www.misterguau.com/index.php/customer/account/">MI CUENTA</a></li-->
	  <?php
	  }
	
	  ?>
    </ul>
    <ul class="menu-right">
      <li><a href="http://www.misterguau.org" target="_blank">BLOG</a></li>
      <li>/</li>
      <li><a href="http://pasionporlosanimales.com" target="_blank">COMPROMISO SOCIAL</a></li>
      <li>/</li>
      <li><a href="http://www.misterguau.tv" target="_blank">SOBRE NOSOTROS</a></li>
    </ul>
  </div>
  <div class="banners_box">
    <div class="caja_banners">
      <div id="destacados">
      <div id="menu_animales">
           <ul id="animales" class="lista_animales">
              <li class="foto1"><a href="perro.php"></a></li>
              <li class="foto2"><a href="gato.php"></a></li>
              <li class="foto3"><a href="pez.php"></a></li>
              <li class="foto4"><a href="pajaro.php"></a></li>
              <li class="foto5"><a href="reptil.php"></a></li>
              <li class="foto6"><a href="roedor.php"></a></li>
              <li class="foto7"><a href="tortuga.php"></a></li>
           </ul>
   	  </div>
      </div>
    </div>
  </div>
  <div class="bread_header">
  	  </div>
  <div style="height:6px; background-color:#000;margin-bottom:10px;"></div>		
				
        <di   v class="caja_categ_product">
            <div class="content_izq"><div class="SC_caja">
	<div class="cart_title">MI COMPRA</div>
	<div class="line-sep"></div>
	<div class="cart_valores"><span>0 /</span> Articulos</div>
	<div class="ver-cesta"><a href="http://www.misterguau.com/index.php/checkout/cart/">ver ></a></div>
</div>
<div class="color-line-after-sidebar">&nbsp;</div><div class="SB_caja">
	<div class="search-box">
		<form id="search_mini_form" action="http://www.misterguau.com/index.php/catalogsearch/result/" method="get">
			<input name="" type="button" id="searchbutton" value="" />
			<input name="q" type="text" value="Buscar..." id="searchbox"  onclick="VaciarBox(this);"/>
			<div id="search_autocomplete" class="search-autocomplete"></div>
			<script type="text/javascript">
		    //<![CDATA[
		        var searchForm = new Varien.searchForm('search_mini_form', 'search', '');
		        searchForm.initAutocomplete('http://www.misterguau.com/index.php/catalogsearch/ajax/suggest/', 'search_autocomplete');
		    //]]>
		    </script>
		    <script type="text/javascript">
			  function VaciarBox(box){
			    box.value = "";
			  }
			  </script>
		</form>
	</div>
</div>
<div class="vertical-nav-container box base-mini">
    <div id="vertical-nav">


	<div class="block block-poll">

   <div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">


	 <div class="block-title">

            <div class="sideblock-title">
								<div class="border-left">
									<div class="border-right">
										<div class="border-top">
											<div class="corner-left-top">
												<div class="corner-right-top">            	<h2>Categorías</h2>

												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
        <div class="block-content">





        <ul id="nav_vert">
                                                <li><a href="http://www.misterguau.com/index.php/ofertas.html" class="potential" >OFERTAS Y REGALOS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" class="potential" >OUTLET Corner</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/perros.html" class="potential" >PERROS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html" class="potential" >GATOS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html" class="potential" >ROEDORES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/aves.html" class="potential" >AVES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/reptiles.html" class="potential" >REPTILES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/tortugas-de-agua.html" class="potential" >TORTUGAS</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/peces.html" class="potential" >PECES</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                                                <li><a href="http://www.misterguau.com/index.php/schleich-tu-otra-mascota.html" class="potential" >SCHLEICH - Juguetes</a>
                            </li>
            <!--li class="separator">&nbsp;</li-->
                    </ul>
		</div>
	</div>
	</div>										</div>

										</div>
									</div>
																		</div>									</div>
										</div>
										</div>
		</div>
   	 </div>
    </div>
</div> <p>&nbsp;</p>
<p>&nbsp;</p>
<p><a title="Facebook MISTERGUAU" href="https://www.facebook.com/misterguau" target="_blank"><img src="http://www.misterguau.com/media//Facebook_MISTERGUAU.png" alt="Facebook MISTERGUAU" /></a><a title="Youtube MISTERGUAU" href="http://www.youtube.com/user/misterguaucenter" target="_blank"><img src="http://www.misterguau.com/media//Youtube_MISTERGUAU.png" alt="Youtube MISTERGUAU" /></a></p>
<p>&nbsp;</p>
<p><a title="Outlet MISTERGUAU" href="http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html" target="_self"><img src="http://www.misterguau.com/media//Oulet_1.jpg" alt="Outlet hasta -70%" /></a></p>
<p>&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p style="text-align: left;">&nbsp;</p>
<p>
<script src="http://w.sharethis.com/button/buttons.js" type="text/javascript"></script>
<script type="text/javascript">// <![CDATA[
stLight.options({publisher: "95e01ef6-d710-492e-b27e-2b57dbb37911"});
// ]]></script>
</p>



<div class="banner"><a title="Tipos de pago" href="http://www.misterguau.com/index.php/condiciones" target="_self"><img src="http://www.misterguau.com/media//VISA.jpg" alt="Tipos de pago aceptados" /></a></div>
<div class="banner"><a title="10% Dto extra en todos tus pedidos!" href="http://www.misterguau.com/Promociones" target="_self"></a><a title="Nuestro compromiso social" href="http://www.misterguau.com/Compromiso_social" target="_self"><img src="http://www.misterguau.com/media//Compromiso_MISTERGUAU_1.jpg" alt="Compromiso social MISTERGUAU" /></a></div>
<div class="banner"><a style="font-size: 12px;" title="Las mejores ofertas para tus mascotas" href="http://www.misterguau.com/index.php/ofertas.html" target="_self"><img src="http://www.misterguau.com/media//file_2.jpg" alt="Las mejores ofertas para mascotas" /></a></div>
<div class="banner"></div>
<p>&nbsp;</p><div class="banner"><span style="font-size: 12px;"><a title="Ultimas novedades" href="http://www.misterguau.com/index.php/catalogsearch/advanced/result/?name=&amp;description=&amp;short_description=&amp;sku=&amp;price%5Bfrom%5D=&amp;price%5Bto%5D=&amp;news_from_date%5Bfrom%5D=08%2F01%2F15&amp;news_from_date%5Bto%5D=" target="_self"><img src="http://www.misterguau.com/media//news.jpg" alt="Novedades" /></a></span></div>
<div class="banner"><a href="http://www.misterguau.com/index.php/metodos"><img src="http://www.misterguau.com/media//banner2.jpg" alt="" /></a></div><div class="banner"><a title="GARANTIA MASCOTAS" href="http://www.misterguau.com/GARANTIA_MASCOTAS_MISTERGUAU.pdf" target="_blank"><img title="GARANTIA" src="http://www.misterguau.com/media//banner3_1.jpg" alt="GARANTIA" /></a></div><div class="block block-subscribe">
<a href="http://www.misterguau.com/tienda/banner">
<img src="http://www.misterguau.com/tienda/media/BannerCR.png">
<img src="http://www.misterguau.com/tienda/media/Banner_portes.png"></a><!--
    <div class="main-block">
                <div class="border-bot">
                  <div class="border-left">
                    <div class="border-right">
                      <div class="corner-left-top">
                        <div class="corner-right-top">
                          <div class="corner-left-bot">
                            <div class="corner-right-bot">
                              <div class="full-width">        <div class="block-title">   
             <div class="sideblock-title">
                <div class="border-left">
                  <div class="border-right">
                    <div class="border-top">
                      <div class="corner-left-top">
                        <div class="corner-right-top">                        
               <h2>Boletín de noticias<a name="newsletter-box"></a></h2>  
             </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>         
        </div>
        <div class="block-content">
            <form action="http://www.misterguau.com/index.php/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                <fieldset>
                    <legend>Boletín de noticias</legend>
                                        <label for="newsletter">Subscribirse al boletín de noticias</label>
                    <input name="email" type="text" id="newsletter" class="input-text required-entry validate-email" />
                    <button type="submit" class="button"><span><span><span>Subscribirse</span></span></span></button>
                </fieldset>
            </form>
        </div>
    <script type="text/javascript">
    //<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
    //]]>
    </script>
  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
</div> 
</div>




</div>


           
						  <?php
						  echo "<div >";
						  if(isset ($_POST['nouA'])){
	$anu_nom = $_POST['anu_nom'];
	$anu_contingut = $_POST['anu_contingut'];
	$municipi = $_POST['municipi'];
	$animal = $_POST['animal'];
	$tipo = $_POST['tipo'];
	$fecha = $_POST['fecha'];
	$raza = $_POST['raza'];
	
/*	echo "$anu_nom<br/>";
	echo "$anu_contingut<br/>";
	echo "$municipi<br/>";
	echo "$animal<br/>";
	echo "$tipo<br/>";
	echo "$raza<br/>";
	echo "$fecha<br/><br/>";*/

	

	$con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');
	$email = $_SESSION['nombre'];
	//BUSCAR el id de l'usuari logejat
	$sql = ("SELECT * FROM `tbl_contacte` WHERE tbl_contacte.contact_email = '$email'");
	//echo "$sql";
	//echo "<br/>";
	$datos1 = mysqli_query($con, $sql);
    if(mysqli_num_rows($datos1) > 0){
		while($cerca = mysqli_fetch_array($datos1)){
			$contact_id = utf8_encode($cerca['contact_id']);
			//echo $contact_id;
		}
	}
	//echo "<br/>";
	//BUSCAR a la base de dades si realment apareix una raça com la que han escrit
	if(isset ($raza)){
		
		$sql2 = ("SELECT * FROM `tbl_raca` WHERE tbl_raca.raca_nom = '$raza'");
		//echo "$sql2";
		//echo "<br/>";
		$datos2 = mysqli_query($con, $sql2);
		if(mysqli_num_rows($datos2) > 0){
			while($cerca2 = mysqli_fetch_array($datos2)){
				//echo "sí";
				$raca_id= $cerca2['raca_id'];
			}
		}
	}
	if(isset($raca_id)){
	}else{
		if ($animal == 1){
			$raca_id= 1;
		}else if ($animal == 2){
			$raca_id= 2;
		}else if($animal == 3){
			$raca_id= 3;
		}else{
			$raca_id= 4;			
		}
		
	}
	echo "<br/>";
	echo"<div>";
		$sql3 = ("INSERT INTO tbl_anunci (`anu_contingut`, `anu_nom`, `anu_data`, `raca_id`, `mun_id`, `contact_id`, `anu_tipus`) VALUES ('$anu_contingut','$anu_nom','$fecha', $raca_id, $municipi, $contact_id, '$tipo');");  

		//echo $sql3;
		mysqli_query($con, $sql3);
	echo"</div>";
	mysqli_close($con);
	$tupropia=1;
}
if(isset ($tupropia)){
	$xarxa=1;
	$anu_nom = $_POST['anu_nom'];
	$anu_contingut = $_POST['anu_contingut'];
	$municipi = $_POST['municipi'];
	$animal = $_POST['animal'];
	$tipo = $_POST['tipo'];
	$fecha = $_POST['fecha'];
	$raza = $_POST['raza'];
/*	echo "$anu_nom<br/>";
	echo "$anu_contingut<br/>";
	echo "$municipi<br/>";
	echo "$animal<br/>";
	echo "$tipo<br/>";
	echo "$raza<br/>";
	echo "$fecha<br/><br/>";
*/

    $mu=1;
    $con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');
    $sql = ("SELECT tbl_anunci.anu_id, tbl_anunci.anu_nom, tbl_anunci.anu_contingut, tbl_anunci.anu_data, tbl_anunci.anu_foto, tbl_raca.raca_nom, tbl_contacte.contact_nom, tbl_contacte.contact_telf, tbl_contacte.contact_adre, tbl_municipi.municipi_nom, tbl_tipus_animal.tipus_anim_nom, tbl_tipus_animal.tipus_anim_id FROM ((((tbl_anunci INNER JOIN tbl_municipi ON tbl_anunci.mun_id = tbl_municipi.municipi_id) INNER JOIN tbl_contacte ON tbl_anunci.contact_id = tbl_contacte.contact_id) INNER JOIN tbl_raca ON tbl_anunci.raca_id = tbl_raca.raca_id) INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id = tbl_tipus_animal.tipus_anim_id) WHERE tbl_anunci.desactivat = 1 && tbl_anunci.anu_nom = '$anu_nom' && tbl_municipi.municipi_id = $municipi && tbl_tipus_animal.tipus_anim_id = $animal && tbl_anunci.anu_tipus = '$tipo' ORDER BY tbl_anunci.anu_data DESC");  

	//echo "$sql";
    $datos = mysqli_query($con, $sql);
    echo "<div class='box_specialoffers' id='busqueda'>";
    if(mysqli_num_rows($datos) > 0){
		while($cerca = mysqli_fetch_array($datos)){
			$animalito = ($cerca['anu_id']);
			$cerca['anu_nom'] = utf8_encode($cerca['anu_nom']);
			$cerca['anu_contingut'] = utf8_encode($cerca['anu_contingut']);
			$cerca['raca_nom'] = utf8_encode($cerca['raca_nom']);
			$cerca['contact_nom'] = utf8_encode($cerca['contact_nom']);
			$cerca['contact_adre'] = utf8_encode($cerca['contact_adre']);
			$cerca['municipi_nom'] = utf8_encode($cerca['municipi_nom']);
			echo "<div class='ficha_animal'>";
			echo "<div class='titulo'>$cerca[anu_nom]</div>";
			echo "<div class='info'>$cerca[anu_contingut]<br><br>";
			echo "Fecha: $cerca[anu_data]<br><br>";
			echo "Especie: $cerca[tipus_anim_nom] / Raza: $cerca[raca_nom]<br><br>";
			echo "Contacto: $cerca[contact_nom] / Tef: $cerca[contact_telf]<br>";
			echo "<div class='calle'>$cerca[municipi_nom], $cerca[contact_adre]</div></div>";
			$fichero =0;
			if($cerca['anu_foto']!= "") {
				$fichero="images/$cerca[anu_foto]";
			}
			if(file_exists($fichero)){
				echo "<a href='images/g_$cerca[anu_foto]' target='_blank'><div class='foto'><img class=fotoani src='$fichero'/></div></a>";
			}else{
				if ($cerca['tipus_anim_id'] == 1) {
					echo "<div class='foto'><img class=fotoani src='images/upsperro.jpg'/></div>";
				}else if ($cerca['tipus_anim_id']==2){
					echo "<div class='foto'><img class=fotoani src='images/upsgato.jpg'/></div>";
				}else if ($cerca['tipus_anim_id']==3){
					echo "<div class='foto'><img class=fotoani src='images/upspajaro.jpg'/></div>";
				}else if ($cerca['tipus_anim_id']==4){
					echo "<div class='foto'><img class=fotoani src='images/upsotros.jpg'/></div>";
				}
			}
			echo "</div>";
			if (isset($logejat))echo "<form action='#' method='Post'><input type='hidden' name='retornado' value='$animalito'><input type='submit' value='Animal devuelto a sus dueños'></form>";
		}
	}else{
		echo "No hi ha dades";
	}
	echo "</div>";
}
if(isset ($_POST['cerca']))$xarxa=2;
if(isset ($xarxa)){
	if($xarxa ==2){
	if(isset ($_POST['municipi']))$municipi = $_POST['municipi'];
	if(isset ($_POST['animal']))$animal = $_POST['animal'];
	if(isset ($_POST['genere']))$ToP = $_POST['genere'];
	if(isset ($_POST['data1']))$data = $_POST['data1'];
	
    $mu=1;
    $con = mysqli_connect('localhost', 'root', '', 'bd_botiga_animals');
    $sql = ("SELECT tbl_anunci.anu_id, tbl_anunci.anu_nom, tbl_anunci.anu_contingut, tbl_anunci.anu_data, tbl_anunci.anu_foto, tbl_raca.raca_nom, tbl_contacte.contact_nom, tbl_contacte.contact_telf, tbl_contacte.contact_adre, tbl_municipi.municipi_nom, tbl_tipus_animal.tipus_anim_nom, tbl_tipus_animal.tipus_anim_id FROM ((((tbl_anunci INNER JOIN tbl_municipi ON tbl_anunci.mun_id = tbl_municipi.municipi_id) INNER JOIN tbl_contacte ON tbl_anunci.contact_id = tbl_contacte.contact_id) INNER JOIN tbl_raca ON tbl_anunci.raca_id = tbl_raca.raca_id) INNER JOIN tbl_tipus_animal ON tbl_raca.tipus_anim_id = tbl_tipus_animal.tipus_anim_id) WHERE tbl_anunci.desactivat = 1 ");  
    if($municipi > 0)$sql.= "&& tbl_municipi.municipi_id = $municipi ";
    if ($animal>0)$sql.= "&& tbl_tipus_animal.tipus_anim_id = $animal ";
    if (isset($data))$sql.= "&& tbl_anunci.anu_data >= '$data' ";
	if (isset ($ToP)) $sql.= "&& tbl_anunci.anu_tipus = '$ToP' ";
	$sql.= "ORDER BY tbl_anunci.anu_data DESC";
	//echo "$sql";
    $datos = mysqli_query($con, $sql);
    echo "<div class='box_specialoffers' id='busqueda'>";
    if(mysqli_num_rows($datos) > 0){
		while($cerca = mysqli_fetch_array($datos)){
			$animalito = ($cerca['anu_id']);
			$cerca['anu_nom'] = utf8_encode($cerca['anu_nom']);
			$cerca['anu_contingut'] = utf8_encode($cerca['anu_contingut']);
			$cerca['raca_nom'] = utf8_encode($cerca['raca_nom']);
			$cerca['contact_nom'] = utf8_encode($cerca['contact_nom']);
			$cerca['contact_adre'] = utf8_encode($cerca['contact_adre']);
			$cerca['municipi_nom'] = utf8_encode($cerca['municipi_nom']);
			echo "<div class='ficha_animal'>";
			echo "<div class='titulo'>$cerca[anu_nom]</div>";
			echo "<div class='info'>$cerca[anu_contingut]<br><br>";
			echo "Fecha: $cerca[anu_data]<br><br>";
			echo "Especie: $cerca[tipus_anim_nom] / Raza: $cerca[raca_nom]<br><br>";
			echo "Contacto: $cerca[contact_nom] / Tef: $cerca[contact_telf]<br>";
			echo "<div class='calle'>$cerca[municipi_nom], $cerca[contact_adre]</div></div>";
			$fichero =0;
			if($cerca['anu_foto']!= "") {
				$fichero="images/$cerca[anu_foto]";
			}
			if(file_exists($fichero)){
				echo "<a href='images/g_$cerca[anu_foto]' target='_blank'><div class='foto'><img class=fotoani src='$fichero'/></div></a>";
			}else{
				if ($cerca['tipus_anim_id'] == 1) {
					echo "<div class='foto'><img class=fotoani src='images/upsperro.jpg'/></div>";
				}else if ($cerca['tipus_anim_id']==2){
					echo "<div class='foto'><img class=fotoani src='images/upsgato.jpg'/></div>";
				}else if ($cerca['tipus_anim_id']==3){
					echo "<div class='foto'><img class=fotoani src='images/upspajaro.jpg'/></div>";
				}else if ($cerca['tipus_anim_id']==4){
					echo "<div class='foto'><img class=fotoani src='images/upsotros.jpg'/></div>";
				}
				
			}
			

			if (isset($logejat))echo "<div class='retornat'><form action='#' method='Post'><input type='hidden' name='retornado' value='$animalito'><input class='boton3' type='submit' value='CLICAR AQUI PARA DESACTIVAR SI YA HA SIDO DEVUELTO'></form></div>";
		  echo "</div>";
			}
		}else{
			echo "No hi ha dades";
		}
		echo "</div>";
			mysqli_close($con);
	}
}else{  
?>    
    <div class="box_specialoffers">

                <div class="std">


    <!--div>

<ul class="tabs">
    <li><a href="#tab1">Ofertas</a></li>
    <li><a href="#tab2">Perros</a></li>
    <li><a href="#tab3">Gatos</a></li>
    <li><a href="#tab4">Peces</a></li>
    <li><a href="#tab5">Roedores</a></li>
    <li><a href="#tab6">Pájaros</a></li>
    <li><a href="#tab7">Reptiles</a></li>
</ul>

<div class="tab_container">
    <div id="tab1" class="tab_content">
        Productos 1
    </div>
    <div id="tab2" class="tab_content">
       Productos 2
    </div>
     <div id="tab3" class="tab_content">
       Productos 3
    </div>
     <div id="tab4" class="tab_content">
       Productos 4
    </div>
     <div id="tab5" class="tab_content">
       Productos 5
    </div>
     <div id="tab6" class="tab_content">
       Productos 6
    </div>
     <div id="tab7" class="tab_content">
       Productos 7
    </div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {

		//When page loads...
		jQuery(".tab_content").hide(); //Hide all content
		jQuery("ul.tabs li:first").addClass("active").show(); //Activate first tab
		jQuery(".tab_content:first").show(); //Show first tab content

		//On Click Event
		jQuery("ul.tabs li").click(function() {

			jQuery("ul.tabs li").removeClass("active"); //Remove any "active" class
			jQuery(this).addClass("active"); //Add "active" class to selected tab
			jQuery(".tab_content").hide(); //Hide all tab content

			var activeTab = jQuery(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			jQuery(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});

	});
</script>
</div-->
<p><strong><script type="text/javascript" src="http://www.misterguau.com/js/interaktingslider/interaktingslider.js"></script>
  <style>#frame{text-align:left;width:680px;        background:url(http://www.misterguau.com/skin/interaktingslider/default/images/base_mini_head_bg.gif) repeat-x #fff;   }#frame div{}#frame div div{}#top-left{margin-top:0px; margin-left:0px; width:10px; height:10px;display:none;}#top-center{margin-top:0px; margin-left:10px; width:582px; height:10px;display:none;}#top-right{margin-top:0px; margin-left:582px; width:10px; height:10px;display:none;}#middle-left{margin-top:10px; margin-left:0px; width:10px; height:280px;display:none;}#middle-center{   width:680px; height:200px;}#middle-right{margin-top:10px; margin-left:670px; width:10px; height:280px;display:none;}#bottom-left{margin-top:290px; margin-left:0px;width:10px;height:30px;display:none;}#bottom-center{display:none;}#bottom-right{margin-top:290px;margin-left:670px;width:10px;height:30px;display:none;}.slide{position:absolute;text-align:left;width:680px;height:200px;margin:0px;background:#f8f7f5;color:#2f2f2f; font:12px/1.55em arial, helvetica, sans-serif;overflow: hidden;}.slide * {margin:0 ; padding:0;}.slide table {margin: auto; padding: auto;}.slide h1, .slide h2, .slide h3, .slide h4{color:#e65505; text-transform:uppercase;}.slide h1 { font-size:2em; line-height:1.17; }.slide h2 { font-size:1.5em; }.slide h3 { font-size:1.35em; }.slide h4 { font-size:1.05em; }.slide h5 { font-size:1.05em; }.slide h6 { font-size:.95em; }.slide a { color:#1e7ec8; text-decoration:underline; }.slide a:hover { color:#1e7ec8; text-decoration:underline; }.slide a img { border:0;}#slide-content{text-align:left;width:680px;height:277px;overflow:hidden;}#slide-commands{position:absolute;text-align:center;width:582px;border-top:1px solid #DDD;margin-top:258px;margin-left:-1px;padding-top:2px;z-index:5;background:#fff;display: none;}#slide-commands a{display:inline-block;text-decoration: none ;margin:2px;overflow:visible;    width:auto;    padding:1px 8px;    color:#fff;    border:1px solid #de5400;    font:bold 12px arial, sans-serif !important;    cursor:pointer;    text-align:center;    vertical-align:middle;    display: none;}#prev{}#next{}.active{background:#de5400;}.normal{background:#f18200;}#btns{width:256px;height:22px;position:relative;margin:-30px 0px -22px 226px;display: none;}.prev-next{width:42px;height:20px;float:left;background-color:#666;border:#FFF solid 1px;}.prev-next a{color:#FFF;text-decoration:none;font-size:12px;display:block;text-align:center;padding-top:2px;width:40px;height:18px;display:block;background-color:#666;border:#FFF solid 1px;}.prev-next a:hover{color:#666;text-decoration:none;font-size:12px;display:block;text-align:center;padding-top:2px;width:40px;height:18px;display:block;background-color:#FFF;border:#b90812 solid 1px;}.arrows{width:10px;height:22px;float:left;margin-left:6px;}.num-img{width:20px;height:22px;float:left;margin-left:6px;}.num-img a{display:block;width:18px;height:17px;background-color:#666;border:#FFF solid 1px;text-decoration:none;text-align:center;color:#fff;font-size:12px;padding-top:3px;}.num-img a:hover{display:block;width:18px;height:17px;background-color:#FFF;border:#b90812 solid 1px;text-decoration:none;text-align:center;color:#666;font-size:12px;padding-top:3px;}.num-img-hover-button{display:block !important;width:18px !important;height:17px !important;background-color:#FFF !important;border:#b90812 solid 1px !important;text-decoration:none !important;text-align:center !important;color:#666 !important;font-size:12px !important;padding-top:3px !important;}#div-interaktingslider {width: 680px;overflow: hidden;}</style>
<div id="div-interaktingslider" align="center">
	<div id="frame">
    	<div id="top-left"></div>
    	<div id="top-center"></div>
    	<div id="top-right"></div>
    	<div id="middle-left"></div>
    	<div id="middle-center">
    		<div id="slide-content">
  		                </div>

    	</div>
    	<div id="middle-right"></div>
    	<div id="bottom-left"></div>
    	<div id="bottom-center"></div>
    	<div id="bottom-right"></div>
	</div>
</div>
<script>

		
			var interaktingslider = new InteraktingSlider(); 
			
			interaktingslider.setDelay(8);
			interaktingslider.setTransition('fade');
			interaktingslider.setSpeed(500);		
			interaktingslider.setMode('auto');
			
		interaktingslider.addSlide("<p><a title=\"Outlet Corner\" href=\"http://www.misterguau.com/index.php/outlet-corner-las-mejores-ofertas.html\" target=\"_self\"><img src=\"http://www.misterguau.com/media//Outlet_Corner.jpg\" alt=\"Outlet Corner\" /></a></p><p>&nbsp;</p>"); interaktingslider.addSlide("<p><a title=\"Alimentacion 100% natural para tu mascota\" href=\"http://www.misterguau.com/index.php/catalogsearch/advanced/result/?name=&amp;description=HOLISTICO&amp;short_description=&amp;sku=&amp;price%5Bfrom%5D=&amp;price%5Bto%5D=&amp;news_from_date%5Bfrom%5D=&amp;news_from_date%5Bto%5D=\" target=\"_self\"><img src=\"http://www.misterguau.com/media//Interak_Rincon_holistico.jpg\" alt=\"Rincon holistico MISTERGUAU\" /></a></p>"); 
			interaktingslider.show(); 		
		</script>
</strong></p>
<p style="text-align: left;"><a href="http://www.misterguau.com/Promociones" target="_self"><img src="http://www.misterguau.com/media//Los_increibles_de_MISTERGUAU_1.jpg" alt="Promo 10%" /></a></p>
<p><a title="Novedades" href="http://www.misterguau.com/index.php/catalogsearch/advanced/result/?name=&amp;description=&amp;short_description=&amp;sku=&amp;price%5Bfrom%5D=&amp;price%5Bto%5D=&amp;news_from_date%5Bfrom%5D=08%2F01%2F15&amp;news_from_date%5Bto%5D=" target="_self"><img style="font-weight: bold; color: #33cccc; font-size: x-small;" src="http://www.misterguau.com/media//Ultimas_novedades.jpg" alt="Ultimas novedades" /></a></p>
<p>	  <!--div class="slide-banners">
	  	<img src="http://www.misterguau.com/skin/frontend/blank/theme048/images/banner-mister-guau-selection.png" width="690px" height="200px" alt="Mister Guau" title="Mister Guau">
	  </div-->
	<div class="fila-prods">		<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/correa-extensible-manos-libres-lishinu-6-colores.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/l/i/lishinu_original03.jpg" width="95" height="135" alt="Correa extensible manos libres Lishinu (6 colores)" title="Correa extensible manos libres Lishinu (6 colores)" /></a></div>
            <div class="titulo-prod">Correa extensible manos libres Lishinu (6 colores)</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5637">
                    <span class="price">€ 39,95</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/correa-extensible-manos-libres-lishinu-6-colores.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/correa-extensible-manos-libres-lishinu-6-colores.html">+ INFO</a></div>
      	</div>
				<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-feline-ideal-balance-mature.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_33.jpg" width="95" height="135" alt="Hills Feline Ideal Balance Mature" title="Hills Feline Ideal Balance Mature" /></a></div>
            <div class="titulo-prod">Hills Feline Ideal Balance Mature</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5636">
                    <span class="price">€ 25,00</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-feline-ideal-balance-mature.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-feline-ideal-balance-mature.html">+ INFO</a></div>
      	</div>
				<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-feline-ideal-balance-adult-sin-cereales.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_32.jpg" width="95" height="135" alt="Hills Feline Ideal Balance Adult (Sin cereales)" title="Hills Feline Ideal Balance Adult (Sin cereales)" /></a></div>
            <div class="titulo-prod">Hills Feline Ideal Balance Adult (Sin cereales)</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5635">
                    <span class="price">€ 25,00</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-feline-ideal-balance-adult-sin-cereales.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-feline-ideal-balance-adult-sin-cereales.html">+ INFO</a></div>
      	</div>
				<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-feline-ideal-balance-adult.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_31.jpg" width="95" height="135" alt="Hills Feline Ideal Balance Adult" title="Hills Feline Ideal Balance Adult" /></a></div>
            <div class="titulo-prod">Hills Feline Ideal Balance Adult</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5634">
                    <span class="price">€ 22,40</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-feline-ideal-balance-adult.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-feline-ideal-balance-adult.html">+ INFO</a></div>
      	</div>
				<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-feline-ideal-balance-kitten.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_30.jpg" width="95" height="135" alt="Hills Feline Ideal Balance Kitten" title="Hills Feline Ideal Balance Kitten" /></a></div>
            <div class="titulo-prod">Hills Feline Ideal Balance Kitten</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5633">
                    <span class="price">€ 25,00</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-feline-ideal-balance-kitten.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-feline-ideal-balance-kitten.html">+ INFO</a></div>
      	</div>
		</div><div class="fila-prods">		<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-mature.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_29.jpg" width="95" height="135" alt="Hills Canine Ideal Balance Mature" title="Hills Canine Ideal Balance Mature" /></a></div>
            <div class="titulo-prod">Hills Canine Ideal Balance Mature</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5632">
                    <span class="price">€ 68,90</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-canine-ideal-balance-mature.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-mature.html">+ INFO</a></div>
      	</div>
				<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-large.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_28.jpg" width="95" height="135" alt="Hills Canine Ideal Balance Adult Large" title="Hills Canine Ideal Balance Adult Large" /></a></div>
            <div class="titulo-prod">Hills Canine Ideal Balance Adult Large</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5631">
                    <span class="price">€ 64,50</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-large.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-large.html">+ INFO</a></div>
      	</div>
				<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-sin-cereales.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/h/l/hls_ib_can_adult_no_grain_chicken-potato_2kg.jpg" width="95" height="135" alt="Hills Canine Ideal Balance Adult (Sin cereales)" title="Hills Canine Ideal Balance Adult (Sin cereales)" /></a></div>
            <div class="titulo-prod">Hills Canine Ideal Balance Adult (Sin cereales)</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5630">
                    <span class="price">€ 17,50</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-sin-cereales.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-sin-cereales.html">+ INFO</a></div>
      	</div>
				<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_27.jpg" width="95" height="135" alt="Hills Canine Ideal Balance Adult " title="Hills Canine Ideal Balance Adult " /></a></div>
            <div class="titulo-prod">Hills Canine Ideal Balance Adult </div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5629">
                    <span class="price">€ 16,75</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult.html">+ INFO</a></div>
      	</div>
				<div class="prod">
        	<div class="img-prod"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-mini.html"><img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/95x135/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_26.jpg" width="95" height="135" alt="Hills Canine Ideal Balance Adult Mini" title="Hills Canine Ideal Balance Adult Mini" /></a></div>
            <div class="titulo-prod">Hills Canine Ideal Balance Adult Mini</div>
            <div class=>__</div>
            <div class="required" style="padding-top:5px">DESDE SOLO</div>
	        <div class="ahora">

        
    <div class="price-box">
                                                            <span class="regular-price" id="product-price-5628">
                    <span class="price">€ 16,75</span>                </span>
                        
        </div>

</div>
            <div class="anadir"><a class="pointer_a" onclick="setLocation('http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-mini.html?options=cart')">AÑADIR</a></div>
            <div class="mas-info"><a href="http://www.misterguau.com/index.php/hills-canine-ideal-balance-adult-mini.html">+ INFO</a></div>
      	</div>
		</div></div>	<div class="footer"></div> <!--div class="title-specials">
     <h2>Superofertas!</h2>
     <div class="ver-todas"><a href="#">ver todas ></a></div>
      </div>
      <div class="fila-prods">
      	<div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
        <div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
        <div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
        <div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
        <div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
      </div>
     <div class="fila-prods">
      	<div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
        <div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
        <div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
        <div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
        <div class="prod">
        	<div class="img-prod"><a href="#"><img src="images/prod1.jpg" width="95" height="135" /></a></div>
            <div class="titulo-prod">Royal C Boxer<br /><strong>+Regalo</strong> imanes perritos!</div>
            <div class=>__</div>
            <div class="antes">Antes 23,50</div>
            <div class="ahora">AHORA 19,95</div>
            <div class="anadir"><a href="#">AÑADIR</a></div>
            <div class="mas-info"><a href="#">+ INFO</a></div>
      	</div>
      </div>
       <div class="footer"></div-->

<!--div class="category-products">
 <div class="listing-border"-->
<!--/div>
        </div-->
</p>
<p><img style="font-weight: bold;" src="http://www.misterguau.com/media//Los_increibles_de_MISTERGUAU.jpg" alt="Los incre&iacute;bles de MISTERGUAU" /></p>
<div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 8px;">
<table style="width: 680px; height: 40px; background-color: #ffffff;" dir="ltr" border="0" align="left">
<caption></caption> 
<tbody>
<tr>
<td style="padding-left: 50px; padding-right: 50px;">
<p>&nbsp;</p>
<p><a style="font-weight: bold; font-size: x-small;" title="OFERTAS PERROS" href="http://www.misterguau.com/index.php/ofertas/perros.html" target="_self"><img src="http://www.misterguau.com/media//Perros.jpg" alt="OFERTAS PERROS" /></a><span style="font-weight: bold; font-size: x-small;">&nbsp; &nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="OFERTAS GATOS" href="http://www.misterguau.com/index.php/ofertas/gatos.html" target="_self"><img src="http://www.misterguau.com/media//Gatos.jpg" alt="OFERTAS GATOS" /></a><span style="font-weight: bold; font-size: x-small;">&nbsp; &nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="OFERTAS ROEDORES" href="http://www.misterguau.com/index.php/ofertas/roedores-y-mamiferos.html" target="_self"><img src="http://www.misterguau.com/media//Roedores.jpg" alt="OFERTAS ROEDORES" /></a><span style="font-weight: bold; font-size: x-small;">&nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="OFERTAS AVES" href="http://www.misterguau.com/index.php/ofertas/ofertas-aves.html" target="_self"><img src="http://www.misterguau.com/media//Aves.jpg" alt="OFERTAS AVES" /></a></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><span style="font-size: x-small;"><strong><strong>&nbsp; &nbsp; &nbsp; &nbsp;<a title="OFERTAS PERROS" href="http://www.misterguau.com/index.php/ofertas/perros.html" target="_self">Ofertas perros</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="OFERTAS GATOS" href="http://www.misterguau.com/index.php/ofertas/gatos.html" target="_self">Ofertas gatos</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="OFERTAS ROEDORES" href="http://www.misterguau.com/index.php/ofertas/roedores-y-mamiferos.html" target="_self">Ofertas roedores</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="OFERTAS AVES" href="http://www.misterguau.com/index.php/ofertas/ofertas-aves.html" target="_self">Ofertas aves</a></strong></strong></span></span></span></span></span></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><span style="font-size: x-small;"><strong><strong><br /></strong></strong></span></span></span></span></span></p>
<p><strong><span style="font-size: x-small;"><strong><br /></strong></span></strong></p>
<span style="font-size: xx-small;"><strong><a title="OFERTAS REPTILES" href="http://www.misterguau.com/index.php/ofertas/ofertas-reptiles.html" target="_self"><img src="http://www.misterguau.com/media//Reptiles.jpg" alt="OFERTAS REPTILES" /></a>&nbsp; &nbsp; &nbsp;<a title="OFERTAS TORTUGAS" href="http://www.misterguau.com/index.php/ofertas/ofertas-tortugas.html" target="_self"><img src="http://www.misterguau.com/media//Tortugas.jpg" alt="OFERTAS TORTUGAS" /></a>&nbsp; &nbsp; &nbsp;<a title="OFERTAS PECES" href="http://www.misterguau.com/index.php/ofertas/ofertas-peces.html" target="_self"><img src="http://www.misterguau.com/media//Peces.jpg" alt="OFERTAS PECES" /></a>&nbsp; &nbsp; &nbsp;<a title="REGALOS" href="http://www.misterguau.com/index.php/Regalos?___store=spanish" target="_self"><img src="http://www.misterguau.com/media//Regalos.jpg" alt="PRODUCTOS CON REGALOS" /></a><br /></strong></span>
<p><span style="color: #33cccc; font-size: x-small;"><strong><span style="font-size: x-small;"><strong><strong>&nbsp; &nbsp; &nbsp; &nbsp;<a title="OFERTAS REPTILES" href="http://www.misterguau.com/index.php/ofertas/ofertas-reptiles.html" target="_self">Ofertas reptiles</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="OFERTAS TORTUGAS" href="http://www.misterguau.com/index.php/ofertas/ofertas-tortugas.html" target="_self">Ofertas tortugas</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="OFERTAS PECES" href="http://www.misterguau.com/index.php/ofertas/ofertas-peces.html" target="_self">Ofertas peces</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="REGALOS" href="http://www.misterguau.com/index.php/Regalos?___store=spanish" target="_self">Productos con regalo</a></strong></strong></span></strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><span style="font-size: x-small;"><strong><strong><br /></strong></strong></span></strong></span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><span style="color: #000000;"><span style="font-size: x-small;"><span style="color: #000000;"><span style="font-size: xx-small;"><span style="font-size: x-small;"><strong><span style="font-size: small;"><span style="font-family: tahoma, arial, helvetica, sans-serif;">/ MISTERGUAU recomienda la tenencia responsable de mascotas /</span></span></strong></span></span></span></span></span></p>
<p style="text-align: center;"><span style="color: #000000;"><span style="font-size: x-small;"><span style="color: #000000;"><span style="font-size: xx-small;"><span style="font-size: x-small;"><strong><br /></strong></span></span></span></span></span></p>
<p style="text-align: center;"><span style="color: #000000;"><span style="font-size: xx-small;"><span style="font-family: tahoma, arial, helvetica, sans-serif;">Tener una mascota no debe ser un capricho pasajero: precisan de amor,&nbsp;tiempo y afecto.</span></span></span></p>
<p style="text-align: center;"><span style="font-family: tahoma, arial, helvetica, sans-serif;"><span style="color: #000000;"><span style="font-size: xx-small;">Hemos de ser capaces&nbsp;</span></span><span style="font-size: xx-small; color: #000000;">de poder cubrir todas sus necesidades&nbsp;</span><span style="font-size: xx-small; color: #000000;">(alimentaci&oacute;n, veterinario, adiestramiento, etc)&nbsp;</span></span></p>
<p style="text-align: center;"><span style="font-size: xx-small; color: #000000;"><span style="font-family: tahoma, arial, helvetica, sans-serif;">Si no lo tienes claro.. pregunta a nuestros especialistas! Ellos te recomendar&aacute;n la mascota que mejor se adapte a tu estilo de vida.</span></span></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><img src="http://www.misterguau.com/media//Compromiso_social_1.jpg" alt="Compromiso social MISTERGUAU" /></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><span style="font-size: xx-small;"><span style="color: #000000;"><span style="background-color: #ffffff;"><span style="background-color: #ffffff;"><a style="background-color: #effff5;" title="Compromiso social" href="http://www.misterguau.com/Compromiso_social" target="_self">/ Nuestras acciones de compromiso social para con las mascotas</a>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span><a style="font-size: x-small; line-height: 18px; text-align: left;" title="Por qu&eacute; se producen los abandonos?" href="http://www.misterguau.com/perros-y-gatos-abandonados" target="_self"><span style="background-color: #ffffff;">/ Perros y gatos abandonados. &iquest;Por qu&eacute; se producen los abandonos?</span></a></span></span></p>
<p style="text-align: center;"><span style="font-size: xx-small;"><span style="color: #000000;"><span style="background-color: #ffffff;"><br /></span></span></span></p>
<p style="margin: 0px; padding: 0px; color: #767373; line-height: 15px; text-align: center; background-color: #effff5;"><span style="font-size: xx-small;"><span style="color: #000000;"><span style="background-color: #ffffff;"><span style="background-color: #ffffff;"><span style="background-color: #ffffff;"><a style="margin: 0px; padding: 0px;" title="Esterilizaci&oacute;n de mascotas" href="http://www.misterguau.com/la-importancia-de-esterilizar-a-las-mascotas" target="_self">/ Nuestra opini&oacute;n sobre la esterilizaci&oacute;n de mascotas</a>&nbsp; &nbsp; &nbsp;&nbsp;</span></span></span><a style="margin: 0px; padding: 0px;" title="Compra responsable" href="http://www.misterguau.com/confio-en-mister-guau-para-la-compra-de-mi-mascota" target="_self"><span style="background-color: #ffffff;"><span style="background-color: #ffffff;"><span style="background-color: #ffffff;">/ Por qu&eacute; confiar en MISTERGUAU para la compra de su mascota?</span></span></span></a></span></span></p>
<p style="margin: 0px; padding: 0px; color: #767373; line-height: 15px; text-align: center; background-color: #effff5;"><span style="color: #000000;"><span style="background-color: #ffffff;"><span style="color: #000000;"><span style="background-color: #ffffff;"><span style="color: #000000;"><span style="font-size: x-small;"><span style="font-size: small;"><span style="background-color: #ffffff;"><span style="font-size: xx-small;"><span style="color: #000000;"><br /></span></span></span></span></span></span></span></span></span></span></p>
<p style="margin: 0px; padding: 0px; line-height: 15px; text-align: center; background-color: #effff5;"><span style="color: #000000;"><span style="font-size: xx-small;"><span style="background-color: #ffffff;"><span style="background-color: #ffffff;"><span style="background-color: #ffffff;"><a style="margin: 0px; padding: 0px;" title="Instalaciones MISTERGUAU" href="http://www.misterguau.com/mentiras-sobre-misterguau-espacio-mascotas" target="_self">/ Nuestras instalaciones para el confort de las mascotas</a></span></span></span></span><span style="background-color: #ffffff;"><span style="background-color: #ffffff;"><span style="background-color: #ffffff;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span></span><a style="font-size: small; line-height: 18px; text-align: left; margin: 0px; padding: 0px; background-color: #ffffff;" title="Adopcion de mascotas y ayuda a protectoras" href="http://www.misterguau.com/adopcion-de-animales-en-mister-guau-ayuda-a-protectoras" target="_self"><span style="font-size: xx-small;">/ Adopci&oacute;n de animales en MISTERGUAU. Ayuda a refugios y protectoras</span></a></span></p>
<p style="margin: 0px; padding: 0px; color: #767373; line-height: 15px; text-align: center; background-color: #effff5;"><span style="font-size: xx-small;"><br /></span></p>
<p style="margin: 0px; padding: 0px; color: #767373; line-height: 15px; text-align: center; background-color: #effff5;"><span style="font-size: xx-small;"><br /></span></p>
<p style="margin: 0px; padding: 0px; color: #767373; line-height: 15px; text-align: center; background-color: #effff5;"><span style="font-size: xx-small;"><br /></span></p>
</div>
<div id="_mcePaste" style="position: absolute; left: -10000px; top: 1422px; width: 1px; height: 1px; overflow: hidden;"><span style="font-size: xx-small;">&lt;script&gt;</span></div>
<div id="_mcePaste" style="position: absolute; left: -10000px; top: 1422px; width: 1px; height: 1px; overflow: hidden;"><span style="font-size: xx-small;">&nbsp; (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){</span></div>
<div id="_mcePaste" style="position: absolute; left: -10000px; top: 1422px; width: 1px; height: 1px; overflow: hidden;"><span style="font-size: xx-small;">&nbsp; (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),</span></div>
<div id="_mcePaste" style="position: absolute; left: -10000px; top: 1422px; width: 1px; height: 1px; overflow: hidden;"><span style="font-size: xx-small;">&nbsp; m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)</span></div>
<div id="_mcePaste" style="position: absolute; left: -10000px; top: 1422px; width: 1px; height: 1px; overflow: hidden;"><span style="font-size: xx-small;">&nbsp; })(window,document,'script','//www.google-analytics.com/analytics.js','ga');</span></div>
<div id="_mcePaste" style="position: absolute; left: -10000px; top: 1422px; width: 1px; height: 1px; overflow: hidden;"><span style="font-size: xx-small;">&nbsp; ga('create', 'UA-41503841-1', 'misterguau.com');</span></div>
<div id="_mcePaste" style="position: absolute; left: -10000px; top: 1422px; width: 1px; height: 1px; overflow: hidden;"><span style="font-size: xx-small;">&nbsp; ga('send', 'pageview');</span></div>
<div id="_mcePaste" style="position: absolute; left: -10000px; top: 1422px; width: 1px; height: 1px; overflow: hidden;"><span style="font-size: xx-small;">&lt;/script&gt;</span></div>
<p>&nbsp;</p>
<p>
<script type="text/javascript">// <![CDATA[
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41503841-1', 'misterguau.com');
  ga('send', 'pageview');
// ]]></script>
</p></div>
            </div>
			<?php
				}
?>

            <div class="content_der">
      <div class="tbusc">BÚSQUEDA</div>
      <div class="busc">
			<form name="form1" action="index.php" method="Post">
			Perdido o Encontrado:<br />
			<input type="radio" name="genere" <?php if (isset($genere) && $genere=="female") echo "checked";?> value="Perdut">  Perdido<br />
			<input type="radio" name="genere" <?php if (isset($genere) && $genere=="male") echo "checked";?> value="Trobat">  Encontrado<br /><br />
			Municipio: <br />
			<select name="municipi">
				<option value="0">Todo el territorio</option>
				<option value="1">Barcelona</option>
				<option value="2">Sant Feliu de Llobregat</option>
				<option value="3">Sant Joan d''Espí</option>
				<option value="4">El Prat de Llobregat</option>
				<option value="5">L'Hospitalet de Llobregat</option>
				<option value="6">Martorell</option>
				<option value="7">Cornellà de Llobregat</option>
				<option value="8">Castelldefels</option>
				<option value="9">Viladecans</option>
				<option value="10">Begues</option>
				<option value="11">Castellbisbal</option>
				<option value="12">Sant Sadurní d''Anoia</option>
				<option value="13">Rubí</option>
				<option value="14">Sant Cugat del Vallès</option>
				<option value="15">Sitges</option>
			</select><br /><br />
			Animal: <br />
			<select name="animal">
				<option value="0">Todos los animales</option>
				<option value="1">Perro</option>
				<option value="2">Gato</option>
				<option value="3">Pajaro</option>
				<option value="4">Otros</option>
			</select><br /><br />
			Fecha de inicio de búsqueda<br />
			<input type="date" name="data1"><br /><br />
			<input type="hidden" name="cerca" value="1">
			<input class="boton" type="reset" value="BORRAR">
			<input class="boton" type="submit" value="ENVIAR">
		</form><br/><br />
		<?php
    if(isset($logejat)){
      if ($logejat==1)echo "<form action='nuevoAnuncio.php'><input class='boton2' type='submit' value='CREAR NUEVO ANUNCIO'></form>";
    }
    ?>
    </div>
<div class="banner"><a href="mailto: clientes@misterguau.com"><img src="http://www.misterguau.com/media//Contactanos.jpg" alt="Tienda online" /></a></div>
<div class="banner"><a title="Contactar tiendas f&iacute;sicas" href="http://www.misterguau.tv/tiendas-mister-guau" target="_blank"><img src="http://www.misterguau.com/media//Contacto02.jpg" alt="Contactar tiendas f&iacute;sicas" /></a></div>
<div class="banner"><a title="Contactar veterinarios" href="http://www.misterguau.tv/veterinaria-mister-guau" target="_blank"><img src="http://www.misterguau.com/media//Contacto03_1.jpg" alt="Contactar veterinarios" /></a></div>
<div class="block block-subscribe">
<a href="http://www.misterguau.com/tienda/banner">
<img src="http://www.misterguau.com/tienda/media/BannerCR.png">
<img src="http://www.misterguau.com/tienda/media/Banner_portes.png"></a><!--
    <div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">        <div class="block-title">   
             <div class="sideblock-title">
								<div class="border-left">
									<div class="border-right">
										<div class="border-top">
											<div class="corner-left-top">
												<div class="corner-right-top">                        
           		 <h2>Boletín de noticias<a name="newsletter-box"></a></h2>  
             </div>
											</div>
										</div>
									</div>
								</div>
							</div>         
        </div>
        <div class="block-content">
            <form action="http://www.misterguau.com/index.php/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                <fieldset>
                    <legend>Boletín de noticias</legend>
                                        <label for="newsletter">Subscribirse al boletín de noticias</label>
                    <input name="email" type="text" id="newsletter" class="input-text required-entry validate-email" />
                    <button type="submit" class="button"><span><span><span>Subscribirse</span></span></span></button>
                </fieldset>
            </form>
        </div>
    <script type="text/javascript">
    //<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
    //]]>
    </script>
  </div>
						 								</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
</div> 
</div>
        </div>
        <div class="footer">

<div class="formaPago">
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/servired.jpg" width="45" height="30" />
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/maestro.jpg" width="45" height="30" />
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/visa.jpg" width="45" height="30" />
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/americanexpress.jpg" width="45" height="30" /> 
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/euro6000.jpg" width="45" height="30" /> 
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/4b.jpg" width="45" height="30" /> 
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/mastercard.jpg" width="45" height="30" /> 
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/paypal.jpg" width="45" height="30" />
        <img src="http://www.misterguau.com/skin/frontend/base/default/images/trasnferencia.jpg" width="75" height="30" class="last" /> 
</div>

	<div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">        <div class="col-1">
            &copy; 2010 MISTERGUAU. Todos los derechos reservados. Centro profesional animal, S.L. Núcleo zoológico: B2500920                    </div>
        <div class="col-2">
            <ul>
<li><a href="http://www.misterguau.com/index.php/sobre_nosotros">Quienes somos</a></li>
<li class="last"><a href="http://www.misterguau.com/index.php/condiciones">Condiciones de Uso</a></li>
<li class="last"><a href="http://www.misterguau.com/index.php/metodos">M&eacute;todos de env&iacute;o</a></li>
</ul>
<p>&nbsp;</p>            <ul class="links">
            <li class="first" ><a href="http://www.misterguau.com/index.php/catalog/seo_sitemap/category/" title="Mapa del sitio" >Mapa del sitio</a></li>
    
	
	        <li ><a href="http://www.misterguau.com/index.php/catalogsearch/term/popular/" title="Términos de búsqueda" >Términos de búsqueda</a></li>
    
	
	        <li ><a href="http://www.misterguau.com/index.php/catalogsearch/advanced/" title="Búsqueda Avanzada" >Búsqueda Avanzada</a></li>
    
	
	        <li class=" last" ><a href="http://www.misterguau.com/index.php/contacts/" title="Contáctenos" >Contáctenos</a></li>
    
	
	</ul>
        </div>
        <div class="clear"></div>
    </div>
						 								</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1405217-7");
pageTracker._initData();
pageTracker._trackPageview();
</script>            </div>
</div>
</body>
</html>
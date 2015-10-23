<?php
session_start();

if(isset ($_SESSION['nombre'])){
	$logejat=1;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>PECES</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="En nuestra Tienda Online encontrarás todo lo que necesitas para tus mascotas y mucho más!
Alimentación, accesorios, higiene, hábitat, educación, transporte, jaulas, acuarios y terrarios." />
<meta name="keywords" content="Tienda Online, Perro, Gato, Conejo, Cobaya, Hamster, Hurón, comida para perros, cachorros, gatitos, areneros, transportines, casetas, jaulas, acuarios, terrarios, jaulas, ropa perro." />
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
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" /><script type="text/javascript" src="http://www.misterguau.com/js/prototype/prototype.js"></script>
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
<link rel="canonical" href="http://www.misterguau.com/index.php/peces.html" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" catalog-category-view categorypath-peces-html category-peces">
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
		}}else{
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
		<div class="breadcrumbs">
    <strong>Actualmente se encuentra en:</strong>
    <ul>
                    <li class="home">
                            <a href="index.php" title="Ir a la página de Inicio">Inicio</a>
                                        <span>&nbsp;</span>
                        </li>
                    <li class="category26">
                            <strong>PECES</strong>
                                    </li>
            </ul>
</div>
		
        <div class="caja_categ_product">
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
                                                <li><a href="http://www.misterguau.com/index.php/peces.html" class="open" class="potential" >PECES</a>
                                <ul>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/alim-agua-fria.html" class="potential" >/ Alim Agua fría</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/alim-tropicales.html" class="potential" >/ Alim. Tropicales</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/acuarios-y-mesas.html" >/ Acuarios y mesas</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/accesorios-acuario.html" >/ Accesorios acuario</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/filtros.html" class="potential" >/ Filtros</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/limpieza-y-tratamientos.html" >/ Limpieza acuario</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/salud-peces-y-plantas.html" >/ Salud peces-plantas</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/luces-lamparas.html" >/ Luces-lámparas</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/aireadores-compresores.html" >/ Aireadores</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/termocalentadores.html" >/ Termocalentadores</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/peces/decoracion-acuarios.html" class="potential" >/ Decoración acuarios</a>
                                            </li>
                                    </ul>
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
            <div class="box_specialoffers">
                
                <div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">	                <div class="category-title">
            <div class="title-block">
								<div class="border-left">
									<div class="border-right">
										<div class="border-top">
											<div class="corner-left-top">
												<div class="corner-right-top">                                <h2>PECES</h2>
            </div>
											</div>
										</div>
									</div>
								</div>
							</div>        </div>
                                <div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 8px;">
<div style="margin: 8px; text-align: center;"><a title="10% Dto extra" href="http://www.misterguau.com/Promociones" target="_blank"><img src="http://www.misterguau.com/media//10_Dto.png" alt="10% Dto extra!" /></a></div>
<div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 8px;">
<table style="width: 680px; height: 40px; background-color: #ffffff;" border="0" align="center">
<tbody>
<tr>
<td style="padding-left: 50px; padding-right: 50px;">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc;"><strong>TODO LO QUE NECESITAS PARA TUS PECES - <span style="color: #888888;">&nbsp;Elige una categor&iacute;a</span></strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc;"><strong><span style="font-size: x-small;"><strong><br /></strong></span></strong></span></p>
<p><span style="font-size: x-small;"><strong><a title="Ofertas acuariofilia" href="http://www.misterguau.com/index.php/ofertas/ofertas-peces.html" target="_self"><img src="http://www.misterguau.com/media//Peces.jpg" alt="Ofertas acuariofilia" /></a>&nbsp; &nbsp; &nbsp;<a title="Comida peces agua fria" href="http://www.misterguau.com/index.php/peces/alim-agua-fria.html" target="_self"><img src="http://www.misterguau.com/media//Alimentacion_fria.jpg" alt="Comida peces agua fria" /></a>&nbsp; &nbsp; &nbsp;<a title="Comida peces tropicales" href="http://www.misterguau.com/index.php/peces/alim-tropicales.html" target="_self"><img src="http://www.misterguau.com/media//Alimentacion_tropicales.jpg" alt="Comida peces agua tropical" /></a>&nbsp; &nbsp; &nbsp;<a title="Acuarios y mesas" href="http://www.misterguau.com/index.php/peces/acuarios-y-mesas.html" target="_self"><img src="http://www.misterguau.com/media//Acuarios_para_peces.jpg" alt="Acuarios y mesas para peces" /></a>&nbsp;</strong></span></p>
<p><span style="font-size: x-small;"><strong><span style="color: #808080;"><span style="color: #33cccc;"><a title="Ofertas acuariofilia" href="http://www.misterguau.com/index.php/ofertas/ofertas-peces.html" target="_self"><span style="color: #33cccc;">Ofertas acuariofilia</span></a></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Alimentacion agua fria" href="http://www.misterguau.com/index.php/peces/alim-agua-fria.html" target="_self">Alimentaci&oacute;n agua fr&iacute;a</a>&nbsp; &nbsp; &nbsp; &nbsp;<a title="Alimentacion peces tropicales" href="http://www.misterguau.com/index.php/peces/alim-tropicales.html" target="_self">Alimentaci&oacute;n tropicales</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Acuarios y mesas" href="http://www.misterguau.com/index.php/peces/acuarios-y-mesas.html" target="_self">Acuarios y mesas</a>&nbsp;&nbsp;</span></strong></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><a title="Filtros para acuarios" href="http://www.misterguau.com/index.php/peces/filtros.html" target="_self"></a><a title="Accesorios para acuarios" href="http://www.misterguau.com/index.php/peces/accesorios-acuario.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Accesorios_acuario.jpg" alt="Accesorios para acuarios" /></a>&nbsp; &nbsp; &nbsp;<a title="Filtros para acuarios" href="http://www.misterguau.com/index.php/peces/filtros.html" target="_self"><img src="http://www.misterguau.com/media//Filtros.jpg" alt="Filtros para acuarios" /></a>&nbsp; &nbsp; &nbsp;<a title="Limpieza para acuarios" href="http://www.misterguau.com/index.php/peces/limpieza-y-tratamientos.html" target="_self"><img src="http://www.misterguau.com/media//Limpieza_acuarios.jpg" alt="Limpieza de acuarios" /></a>&nbsp; &nbsp; &nbsp; &nbsp;<a title="Aireadores para acuarios" href="http://www.misterguau.com/index.php/peces/aireadores-compresores.html" target="_self"><img src="http://www.misterguau.com/media//Aireadores.jpg" alt="Aireadores para acuarios" /></a>&nbsp;&nbsp;&nbsp;</span></span></strong></span></strong><a style="font-weight: bold; font-size: x-small;" title="Accesorios para acuarios" href="http://www.misterguau.com/index.php/peces/accesorios-acuario.html" target="_self">Accesorios acuarios</a><span style="color: #808080; font-size: x-small; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a style="font-size: x-small; font-weight: bold;" title="Filtros para acuarios" href="http://www.misterguau.com/index.php/peces/filtros.html" target="_self">Filtros y bombas</a>&nbsp; &nbsp;<span style="color: #808080; font-size: x-small; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a style="font-size: x-small; font-weight: bold;" title="Limpieza para acuarios" href="http://www.misterguau.com/index.php/peces/limpieza-y-tratamientos.html" target="_self">Limpieza y tests</a><span style="color: #808080; font-size: x-small; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-size: x-small; font-weight: bold;" title="Aireadores para acuarios" href="http://www.misterguau.com/index.php/peces/aireadores-compresores.html" target="_self">Aireadores acuarios</a><span style="color: #808080; font-size: x-small; font-weight: bold;">&nbsp;</span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><a title="Decoracion para acuarios" href="http://www.misterguau.com/index.php/peces/decoracion-acuarios.html" target="_self"></a><a title="Termocalentadores para acuarios" href="http://www.misterguau.com/index.php/peces/termocalentadores.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Termocalentadores.jpg" alt="Termocalentadores para acuarios" /></a>&nbsp; &nbsp; &nbsp;<a title="Luces y lamparas" href="http://www.misterguau.com/index.php/peces/luces-lamparas.html" target="_self"><img src="http://www.misterguau.com/media//Luces_y_lamparas.jpg" alt="Peces luces" /></a>&nbsp; &nbsp;&nbsp;<a title="Decoracion para acuarios" href="http://www.misterguau.com/index.php/peces/decoracion-acuarios.html" target="_self"><img src="http://www.misterguau.com/media//Decoracion_acuarios.jpg" alt="Decoracion de acuarios" /></a>&nbsp; &nbsp; &nbsp;&nbsp;<a title="Salud para peces y plantas" href="http://www.misterguau.com/index.php/peces/salud-peces-y-plantas.html" target="_self"><img src="http://www.misterguau.com/media//Salud.jpg" alt="Salud peces y plantas" /></a></span></span></strong></span></strong></strong></span></p>
<p><span style="font-size: x-small;"><span style="color: #808080;"><strong><strong><strong>&nbsp;<a style="font-weight: bold; font-size: x-small;" title="Termocalentadores para acuarios" href="http://www.misterguau.com/index.php/peces/termocalentadores.html" target="_self">Termocalentadores</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Luces y lamparas" href="http://www.misterguau.com/index.php/peces/luces-lamparas.html" target="_self">Luces y l&aacute;mparas</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Decoracion para acuarios" href="http://www.misterguau.com/index.php/peces/decoracion-acuarios.html" target="_self">Decoraci&oacute;n acuarios</a></strong></strong></strong><span style="font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a title="Salud para peces y plantas" href="http://www.misterguau.com/index.php/peces/salud-peces-y-plantas.html" target="_self">Salud peces y plantas</a>&nbsp;</span></span></span></p>
<p><span style="font-size: x-small;"><span style="color: #808080;">&nbsp;</span></span></p>
<p><span style="color: #33cccc; font-weight: bold;"><br /></span></p>
<p>&nbsp;</p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><strong><span style="font-size: x-small;"><strong><span style="color: #33cccc; font-weight: bold;"><br /></span></strong></span></strong></strong></span></p>
</td>
</tr>
</tbody>
</table>
</div>
</div>        <div class="category-products">
    <div class="toolbar">
    <div class="pager">
        <p class="amount">
                            <strong>168 Artículo(s)</strong>
                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/peces.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/peces.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/peces.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/peces.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/peces.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/peces.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
                    </div>
    </div>
    </div>

                <div class="listing-border">
        <ol class="products-list" id="products-list">
	                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acondicionador-de-agua-amtra-care.html" title="Acondicionador de agua Amtra Care">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/m/amtra_care_150ml.jpg"  alt="Acondicionador de agua Amtra Care" title="Acondicionador de agua Amtra Care" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acondicionador-de-agua-amtra-care.html" title="Acondicionador de agua Amtra Care"><b>Acondicionador de agua Amtra Care</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,65&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 4.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acondicionador-de-agua-amtra-care.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4691/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Transforma el agua del grifo agresiva al agua sana y natural, eliminando metales pesados​​, neutralizando el cloro y reduciendo el estrés. También ideal para reducir estrés en momentos de cría. Formatos: 150ml, 300ml.                    <a href="http://www.misterguau.com/index.php/acondicionador-de-agua-amtra-care.html" title="Acondicionador de agua Amtra Care">Saber más</a><br><br>
					<span class="required"><strong>12% de Dto en 150ml! Ahorra 0.70&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-aqua-light-30-blanco.html" title="Acuario Aqua Light 30 (Blanco)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acuario_aqua_light_30_blanco.jpg"  alt="Acuario Aqua Light 30 (Blanco)" title="Acuario Aqua Light 30 (Blanco)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-aqua-light-30-blanco.html" title="Acuario Aqua Light 30 (Blanco)"><b>Acuario Aqua Light 30 (Blanco)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															81,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-aqua-light-30-blanco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4784/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pequeño acuario de cristal de fácil utilización. Con moderno diseño hexagonal. Incorpora una tapa con bisagras y sistema de iluminación de bajo voltaje muy seguro (12W-12V). Equipado con filtro de alto rendimiento Rena para un agua cristalina sin esfuerzo. Marcos plásticos anti-choque con ángulos pulidos. Medidas: 40cm (L) x 20cm (An) x 46.5cm (Al) - 25 litros.                    <a href="http://www.misterguau.com/index.php/acuario-aqua-light-30-blanco.html" title="Acuario Aqua Light 30 (Blanco)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-beta-fontana-4-medidas.html" title="Acuario Beta Fontana (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acuario_beta_fontana_11l.jpg"  alt="Acuario Beta Fontana (4 medidas)" title="Acuario Beta Fontana (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-beta-fontana-4-medidas.html" title="Acuario Beta Fontana (4 medidas)"><b>Acuario Beta Fontana (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-beta-fontana-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3766/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Acuario básico de cristal para nuestros peces o tortugas. Con marco plástico rígido y tapa de cristal. No incluye decoración. No incluye decoración. 4 medidas: 6 Lts. (26x15x17cm) -  11Lts. (31x19x20cm.) -  14Lts. (36x21x21cm.)  - 20 Lts (41x21x26cm)                    <a href="http://www.misterguau.com/index.php/acuario-beta-fontana-4-medidas.html" title="Acuario Beta Fontana (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-ciano-aqua-15-13l.html" title="Acuario Ciano Aqua 15 (13l)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acuario_aqua_15_negro_20x35_24525.jpg"  alt="Acuario Ciano Aqua 15 (13l)" title="Acuario Ciano Aqua 15 (13l)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-ciano-aqua-15-13l.html" title="Acuario Ciano Aqua 15 (13l)"><b>Acuario Ciano Aqua 15 (13l)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															43,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-ciano-aqua-15-13l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1720/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pequeño acuario de cristal con 13 litros de capacidad ideal para peces de agua fría y caliente. Equipado con tapa de plástico protectora anti-choque y sistema de filtración de alto rendimiento para mantener el agua limpia y cristalina. Ángulos pulidos. Caraterísticas en +info. Medidas: 35*17*25cm                    <a href="http://www.misterguau.com/index.php/acuario-ciano-aqua-15-13l.html" title="Acuario Ciano Aqua 15 (13l)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-ciano-aqua-20-light.html" title="Acuario Ciano Aqua 20 light">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acuario_aqua_20_light_24527.jpg"  alt="Acuario Ciano Aqua 20 light" title="Acuario Ciano Aqua 20 light" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-ciano-aqua-20-light.html" title="Acuario Ciano Aqua 20 light"><b>Acuario Ciano Aqua 20 light</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															67,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-ciano-aqua-20-light.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2939/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Acuario pequeño de vidrio equipado con un sistema de filtracion RENA Superclean 40, para mantener cristalina el agua el mayor tiempo posible y con un esfuerzo mínimo. Medidas: 40 x 20 x 25 cm                    <a href="http://www.misterguau.com/index.php/acuario-ciano-aqua-20-light.html" title="Acuario Ciano Aqua 20 light">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-ciano-aqua-light-60.html" title="Acuario Ciano Aqua Light 60">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/q/aquario_ciano_aqua_light_60_1.jpg"  alt="Acuario Ciano Aqua Light 60" title="Acuario Ciano Aqua Light 60" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-ciano-aqua-light-60.html" title="Acuario Ciano Aqua Light 60"><b>Acuario Ciano Aqua Light 60</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															118,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-ciano-aqua-light-60.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1193/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Un acuario con un equipamiento completo para descubrir la acuariofilia con total confianza, equipado con bomba de agua, termo-calentador, preinstalación de bomba de aire y un filtro biológico. Dimensiones: L60 x An30 x Alt41 cm                    <a href="http://www.misterguau.com/index.php/acuario-ciano-aqua-light-60.html" title="Acuario Ciano Aqua Light 60">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-ciano-aqua-light-80.html" title="Acuario Ciano Aqua Light 80">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/q/aquario_ciano_aqua_light_60_3.jpg"  alt="Acuario Ciano Aqua Light 80" title="Acuario Ciano Aqua Light 80" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-ciano-aqua-light-80.html" title="Acuario Ciano Aqua Light 80"><b>Acuario Ciano Aqua Light 80</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															170,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-ciano-aqua-light-80.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4117/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Un acuario con un equipamiento completo para descubrir la acuariofilia con total confianza, equipado con bomba de agua, termo-calentador, preinstalación de bomba de aire y un filtro biológico. Dimensiones: L80 x An30 x Alt45 cm                    <a href="http://www.misterguau.com/index.php/acuario-ciano-aqua-light-80.html" title="Acuario Ciano Aqua Light 80">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-nano-aqua-orion-25-11-litros.html" title="Acuario Nano Aqua Orion 25 (11 litros)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acuario_aqua_orion_11lts.jpg"  alt="Acuario Nano Aqua Orion 25 (11 litros)" title="Acuario Nano Aqua Orion 25 (11 litros)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-nano-aqua-orion-25-11-litros.html" title="Acuario Nano Aqua Orion 25 (11 litros)"><b>Acuario Nano Aqua Orion 25 (11 litros)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															82,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-nano-aqua-orion-25-11-litros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4174/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Elegante Nano acuario de cristal de gran transparencia dotado con iluminación de Led y sistema de filtración. Ideal para mantener pequeños camarones, pequeños peces como neones o un bello plantero. Curvo en las esquinas para una bella visión panorámica. Incluye tapa de cristal extraíble para evitar saltos inesperados de los peces. En color negro. Capacidad: 11litros - 25*23*25cm                    <a href="http://www.misterguau.com/index.php/acuario-nano-aqua-orion-25-11-litros.html" title="Acuario Nano Aqua Orion 25 (11 litros)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-nano-aqua-orion-40-blanco-18-litros.html" title="Acuario Nano Aqua Orion 40 Blanco (18 litros)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/w/a/wave_aqua_orion_40_blanco_40x23x24_18lts.jpg"  alt="Acuario Nano Aqua Orion 40 Blanco (18 litros)" title="Acuario Nano Aqua Orion 40 Blanco (18 litros)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-nano-aqua-orion-40-blanco-18-litros.html" title="Acuario Nano Aqua Orion 40 Blanco (18 litros)"><b>Acuario Nano Aqua Orion 40 Blanco (18 litros)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															93,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-nano-aqua-orion-40-blanco-18-litros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5027/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Elegante Nano acuario de cristal de gran transparencia dotado con iluminación de Led y sistema de filtración. Ideal para mantener pequeños camarones, pequeños peces como neones o un bello plantero. Curvo en las esquinas para una bella visión panorámica. Incluye tapa de cristal extraíble para evitar saltos inesperados de los peces. En color blanco. Click en foto 2 para verlo con mejor detalle. Capacidad: 18litros - 40*23*24cm                    <a href="http://www.misterguau.com/index.php/acuario-nano-aqua-orion-40-blanco-18-litros.html" title="Acuario Nano Aqua Orion 40 Blanco (18 litros)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acuario-tetra-globe-con-cascada-6-8-l.html" title="Acuario Tetra Globe con cascada (6.8 l)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acuario_globe_cascada_tetra_24698.jpg"  alt="Acuario Tetra Globe con cascada (6.8 l)" title="Acuario Tetra Globe con cascada (6.8 l)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acuario-tetra-globe-con-cascada-6-8-l.html" title="Acuario Tetra Globe con cascada (6.8 l)"><b>Acuario Tetra Globe con cascada (6.8 l)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															77,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acuario-tetra-globe-con-cascada-6-8-l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5470/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Acuario de cristal de 6.8 litros e capacidad y con una bella cascada y sistema de iluminación de alto rendimiento con luz Led blanca. Con forma de pecera clásica de bola. Ideal para peces pequeños o plantas. Está especial mente indicada para niños por su sencillo mantenimiento y para mantener peces de agua fría. Capacidad: 6.8 litros. Diametro: 27.9cm                    <a href="http://www.misterguau.com/index.php/acuario-tetra-globe-con-cascada-6-8-l.html" title="Acuario Tetra Globe con cascada (6.8 l)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/airedor-mouse-1.html" title="Aireador Mouse 1">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/i/aireador_mouse_1.jpg"  alt="Aireador Mouse 1" title="Aireador Mouse 1" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/airedor-mouse-1.html" title="Aireador Mouse 1"><b>Aireador Mouse 1</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/airedor-mouse-1.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2942/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El aireador de acuarios mouse permite activar los sistemas de filtración a la vez que crea agradables burbujas a través de aire liberado que oxigenará nuestro acuario. Para acuarios de un máximo de 78 litros. 1.3 litros/minuto                    <a href="http://www.misterguau.com/index.php/airedor-mouse-1.html" title="Aireador Mouse 1">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/airedor-mouse-2.html" title="Aireador Mouse 2">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/i/aireador_mouse_1_1.jpg"  alt="Aireador Mouse 2" title="Aireador Mouse 2" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/airedor-mouse-2.html" title="Aireador Mouse 2"><b>Aireador Mouse 2</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/airedor-mouse-2.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3936/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El aireador de acuarios mouse permite activar los sistemas de filtración a la vez que crea agradables burbujas a través de aire liberado que oxigenará nuestro acuario. Para acuarios de un máximo de 120 litros. Capacidad 108 l/h. Consumo 2,3 w.                    <a href="http://www.misterguau.com/index.php/airedor-mouse-2.html" title="Aireador Mouse 2">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/aireador-mouse-3.html" title="Aireador Mouse 3">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/i/aireador_mouse_1_2.jpg"  alt="Aireador Mouse 3" title="Aireador Mouse 3" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/aireador-mouse-3.html" title="Aireador Mouse 3"><b>Aireador Mouse 3</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/aireador-mouse-3.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2804/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El aireador de acuarios mouse permite activar los sistemas de filtración a la vez que crea agradables burbujas a través de aire liberado que oxigenará nuestro acuario. Para acuarios de un máximo de 200 litros. Capacidad: 150l/h. Consumo:  2.6W                    <a href="http://www.misterguau.com/index.php/aireador-mouse-3.html" title="Aireador Mouse 3">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/aireador-mouse-4.html" title="Aireador Mouse 4">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/i/aireador_mouse_1_2_1.jpg"  alt="Aireador Mouse 4" title="Aireador Mouse 4" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/aireador-mouse-4.html" title="Aireador Mouse 4"><b>Aireador Mouse 4</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/aireador-mouse-4.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5441/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El aireador de acuarios mouse permite activar los sistemas de filtración a la vez que crea agradables burbujas a través de aire liberado que oxigenará nuestro acuario. El elegante aireador Wave combina﻿ un diseño único y un silencioso funcionamiento. Para acuarios de un máximo de 200 litros. Capacidad: 210/h. Consumo:  2.7W                    <a href="http://www.misterguau.com/index.php/aireador-mouse-4.html" title="Aireador Mouse 4">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/aireador-mouse-5.html" title="Aireador Mouse 5">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/i/aireador_mouse_1_2_1_1.jpg"  alt="Aireador Mouse 5" title="Aireador Mouse 5" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/aireador-mouse-5.html" title="Aireador Mouse 5"><b>Aireador Mouse 5</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/aireador-mouse-5.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5442/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El aireador de acuarios mouse permite activar los sistemas de filtración a la vez que crea agradables burbujas a través de aire liberado que oxigenará nuestro acuario. El elegante aireador Wave combina﻿ un diseño único y un silencioso funcionamiento. Para acuarios de un máximo de 200 litros. Capacidad: 240/h. Consumo:  4W                    <a href="http://www.misterguau.com/index.php/aireador-mouse-5.html" title="Aireador Mouse 5">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetratec-aireador-aps-50.html" title="Aireador Tetratec APS 50">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetratec_aireador_aps_50.jpg"  alt="Aireador Tetratec APS 50" title="Aireador Tetratec APS 50" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetratec-aireador-aps-50.html" title="Aireador Tetratec APS 50"><b>Aireador Tetratec APS 50</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetratec-aireador-aps-50.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/861/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bomba de aire silenciosa y potente para acuarios de entre 10-60l. de capacidad. Rendimiento máximo de la bomba 50l/hora. Potencia 2W. Cómodo y silencioso.  Incluye un robinete de aire para regular la corriente de aire.                    <a href="http://www.misterguau.com/index.php/tetratec-aireador-aps-50.html" title="Aireador Tetratec APS 50">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimentador-automatico-digital-mixo.html" title="Alimentador automático digital MIXO">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/l/alimentador_automatico_digital_mixo.jpg"  alt="Alimentador automático digital MIXO" title="Alimentador automático digital MIXO" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimentador-automatico-digital-mixo.html" title="Alimentador automático digital MIXO"><b>Alimentador automático digital MIXO</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															59,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimentador-automatico-digital-mixo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1194/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Distribuidor automático de alimento para peces, con display digital de fácil programación que suministra hasta 2 comidas diarias. Capacidad: 90cm³ - Autonomía: 30 días aprox.                     <a href="http://www.misterguau.com/index.php/alimentador-automatico-digital-mixo.html" title="Alimentador automático digital MIXO">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-community-formula-copos.html" title="Alimento Community Formula (Copos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/o/n/on_community_formula_flake_foods_34gr_ta00048.jpg"  alt="Alimento Community Formula (Copos)" title="Alimento Community Formula (Copos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-community-formula-copos.html" title="Alimento Community Formula (Copos)"><b>Alimento Community Formula (Copos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-community-formula-copos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4095/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento en forma de escamas básico de gran atractivo para peces de acuarios de agua dulce. Alto contenido en proteínas y rica en vitaminas. Contiene ajo y vitamina C que ayuda a mantener los peces sanos. Mejora la coloración y la vitalidad, mientras que estimula el sistema inmune. Formulado y probado por la biólogos expertos en acuicultura. Formato: 34gr                    <a href="http://www.misterguau.com/index.php/alimento-community-formula-copos.html" title="Alimento Community Formula (Copos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-on-atison-s-betta-food.html" title="Alimento On Atison's Betta Food">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/o/n/on_atisons_betta_food_15gr_ta00066.jpg"  alt="Alimento On Atison's Betta Food" title="Alimento On Atison's Betta Food" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-on-atison-s-betta-food.html" title="Alimento On Atison's Betta Food"><b>Alimento On Atison's Betta Food</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-on-atison-s-betta-food.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4096/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Granulado flotante de alta calidad, desarrollado para producir un alimento completo con mas nutrientes para las diversas especies de Betta. Mejora y acentúa los colores naturales del pez. No enturbia el agua. Las numerosas pruebas han demostrado que esta comida es ideal para el cuidado de los peces Betta desde 6 meses en adelante. Formato: 15gr                    <a href="http://www.misterguau.com/index.php/alimento-on-atison-s-betta-food.html" title="Alimento On Atison's Betta Food">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-para-bettas-zoomed.html" title="Alimento para Bettas Zoomed">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/betta_pellets_20001.jpg"  alt="Alimento para Bettas Zoomed" title="Alimento para Bettas Zoomed" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-para-bettas-zoomed.html" title="Alimento para Bettas Zoomed"><b>Alimento para Bettas Zoomed</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-para-bettas-zoomed.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2914/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Micro gránulos flotantes para pez beta. ¡Incluye pinza para alimentar a su Beta!. ¡Entrene a su pez Beta para que coma de la pinza! NATURAL, con vitaminas y minerales añadidos. Con dosificador diario de alimento.  Formato: 3.4gr                    <a href="http://www.misterguau.com/index.php/alimento-para-bettas-zoomed.html" title="Alimento para Bettas Zoomed">Saber más</a><br><br>
					<span class="required"><strong>15% de Dto! Ahorra 0.40&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-para-peces-de-agua-fria-topnature-escamas.html" title="Alimento para peces de agua fría Topnature (escamas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_alimento_agua_fria_100ml.jpg"  alt="Alimento para peces de agua fría Topnature (escamas)" title="Alimento para peces de agua fría Topnature (escamas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-para-peces-de-agua-fria-topnature-escamas.html" title="Alimento para peces de agua fría Topnature (escamas)"><b>Alimento para peces de agua fría Topnature (escamas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-para-peces-de-agua-fria-topnature-escamas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5183/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pienso completo para peces de agua fría. Alimento natural en escamas enriquecidas con vitaminas, oligoelementos, factores de crecimiento y fertilidad, obteniéndose mejor crecimiento, pigmentación, mayor fertilidad y menor contaminación del medio. Tamaños: 100ml (20gr) - 250ml (45gr)                    <a href="http://www.misterguau.com/index.php/alimento-para-peces-de-agua-fria-topnature-escamas.html" title="Alimento para peces de agua fría Topnature (escamas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-para-peces-tropicales-topnature-escamas.html" title="Alimento para peces tropicales Topnature (escamas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_alimento_tropical_100ml.jpg"  alt="Alimento para peces tropicales Topnature (escamas)" title="Alimento para peces tropicales Topnature (escamas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-para-peces-tropicales-topnature-escamas.html" title="Alimento para peces tropicales Topnature (escamas)"><b>Alimento para peces tropicales Topnature (escamas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-para-peces-tropicales-topnature-escamas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5184/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pienso completo para peces tropicales. Alimento natural en escamas enriquecidas con vitaminas, oligoelementos, factores de crecimiento y fertilidad, obteniéndose mejor crecimiento, pigmentación, mayor fertilidad y menor contaminación del medio. Tamaños: 100ml (20gr) - 250ml (45gr)                    <a href="http://www.misterguau.com/index.php/alimento-para-peces-tropicales-topnature-escamas.html" title="Alimento para peces tropicales Topnature (escamas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/amtra-alimento-cichlid-pellet.html" title="Amtra alimento Cichlid Pellet">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/m/amtra_cichlid_pellet_1000ml_a1048045.jpg"  alt="Amtra alimento Cichlid Pellet" title="Amtra alimento Cichlid Pellet" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/amtra-alimento-cichlid-pellet.html" title="Amtra alimento Cichlid Pellet"><b>Amtra alimento Cichlid Pellet</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/amtra-alimento-cichlid-pellet.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5465/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Amtra pellet cíclidos es un alimento de alta calidad que, debido a su alto contenido en elementos nutritivos importantes está especialmente indicado para los cíclidos de gran tamaño como dieta básica diaria. Contiene valiosas materias primas y se ha enriquecido con L-Carnitina para un aumento saludable, astaxantina para una coloración brillante y Beta-glucano para mejorar la inmunización. Formato: 1000ml                    <a href="http://www.misterguau.com/index.php/amtra-alimento-cichlid-pellet.html" title="Amtra alimento Cichlid Pellet">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/amtra-alimento-oranda-copos.html" title="Amtra alimento Oranda (Copos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/m/amtra_oranda_100ml_a1048026.jpg"  alt="Amtra alimento Oranda (Copos)" title="Amtra alimento Oranda (Copos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/amtra-alimento-oranda-copos.html" title="Amtra alimento Oranda (Copos)"><b>Amtra alimento Oranda (Copos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/amtra-alimento-oranda-copos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5466/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Amtra oranda es un alimento de alta calidad para todos los peces de colores, especialmente indicados para una dieta básica diaria. Contiene valiosas materias primas y se ha enriquecido con L-Carnitina, un aumento saludable y astaxantina, por una coloración brillante. Formato: 100ml, 250ml.                    <a href="http://www.misterguau.com/index.php/amtra-alimento-oranda-copos.html" title="Amtra alimento Oranda (Copos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/amtra-alimento-prima-copos.html" title="Amtra alimento Prima (Copos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/m/amtra_prima_100ml_a1048020.jpg"  alt="Amtra alimento Prima (Copos)" title="Amtra alimento Prima (Copos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/amtra-alimento-prima-copos.html" title="Amtra alimento Prima (Copos)"><b>Amtra alimento Prima (Copos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/amtra-alimento-prima-copos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5467/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Amtra prima es un alimento completo para granular tropical peces pequeños de tamaño medio, especialmente indicado como dieta básica diaria. Contiene valiosas materias primas y se ha enriquecido con L-carnitina para un crecimiento  equilibrado; astaxantina para una coloración brillante y beta glucano para mejorar la inmunización. Formato: 100ml, 250ml.                    <a href="http://www.misterguau.com/index.php/amtra-alimento-prima-copos.html" title="Amtra alimento Prima (Copos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/amtra-alimento-prima-granulado.html" title="Amtra alimento Prima (Granulado)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/m/amtra_prima_granular_100ml_a1048023.jpg"  alt="Amtra alimento Prima (Granulado)" title="Amtra alimento Prima (Granulado)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/amtra-alimento-prima-granulado.html" title="Amtra alimento Prima (Granulado)"><b>Amtra alimento Prima (Granulado)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/amtra-alimento-prima-granulado.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5468/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Amtra prima granular es un alimento completo para granular tropical peces pequeños de tamaño medio, especialmente indicado como dieta básica diaria. Contiene valiosas materias primas y se ha enriquecido con L-carnitina para un crecimiento equilibrado; astaxantina para una coloración brillante y beta glucano para mejorar la inmunización. Formato: 100ml, 250ml.                    <a href="http://www.misterguau.com/index.php/amtra-alimento-prima-granulado.html" title="Amtra alimento Prima (Granulado)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arco-de-triunfo-15cm.html" title="Arco de triunfo (15cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arco_de_triunfo_peq_15x15cm_26875.jpg"  alt="Arco de triunfo (15cm)" title="Arco de triunfo (15cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arco-de-triunfo-15cm.html" title="Arco de triunfo (15cm)"><b>Arco de triunfo (15cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arco-de-triunfo-15cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4119/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Preciosa recreación del arco de un arco del tiunfo al que le hqa crecido vegetación por estar sumergido. Con mucho detalle y realizado en poliresina no tóxica especialmente diseñada para acuarios. Haz que tus peces disfruten y se entretengan pasando por en medio por sus persecuciones. Medidas: 15*15cm                    <a href="http://www.misterguau.com/index.php/arco-de-triunfo-15cm.html" title="Arco de triunfo (15cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bacterias-amtra-clean.html" title="Bacterias Amtra Clean">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/m/amtra_clean_150ml.jpg"  alt="Bacterias Amtra Clean" title="Bacterias Amtra Clean" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bacterias-amtra-clean.html" title="Bacterias Amtra Clean"><b>Bacterias Amtra Clean</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bacterias-amtra-clean.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4364/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bacterias para eliminar la toxicidad del agua para acuarios de agua salada y dulce. Con las bacterias clean ahorras un 50% de cambios de agua por descomposición natural de la contaminación del agua. Contiene micro organismos naturales que crean agua de acuario clara, saludable y biológicamente activa. Formatos: 150ml, 300ml.                    <a href="http://www.misterguau.com/index.php/bacterias-amtra-clean.html" title="Bacterias Amtra Clean">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bettera-tetra-betta-ring-con-luz-led.html" title="Bettera Tetra Betta Ring con luz Led">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_acuario_betta_ring_1l_24505.jpg"  alt="Bettera Tetra Betta Ring con luz Led" title="Bettera Tetra Betta Ring con luz Led" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bettera-tetra-betta-ring-con-luz-led.html" title="Bettera Tetra Betta Ring con luz Led"><b>Bettera Tetra Betta Ring con luz Led</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															34,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bettera-tetra-betta-ring-con-luz-led.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5454/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Acuario plástico especialmente diseñado para peces Betta. Con diseño moderno gracias a su forma de anillo que decorará cualquier rincón del hogar u oficina. Potente iluminación superior LED, duradera y fiable. Funciona con pilas para una mayor seguridad. Compuesto por una base color plata y una bola de cristal que puede contener 1,8 litros de agua.                     <a href="http://www.misterguau.com/index.php/bettera-tetra-betta-ring-con-luz-led.html" title="Bettera Tetra Betta Ring con luz Led">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bomba-centrifuga-hydor-pico-evolution-250.html" title="Bomba centrífuga Hydor Pico Evolution 250">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bomba_pico_evolution_200_p16300.jpg"  alt="Bomba centrífuga Hydor Pico Evolution 250" title="Bomba centrífuga Hydor Pico Evolution 250" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bomba-centrifuga-hydor-pico-evolution-250.html" title="Bomba centrífuga Hydor Pico Evolution 250"><b>Bomba centrífuga Hydor Pico Evolution 250</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bomba-centrifuga-hydor-pico-evolution-250.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3752/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Esta bomba centrífugas﻿ garantiza unas prestaciones elevadas, dimensiones reducidas y la total seguridad de la tecnología Hydor. Dotada de regulador de capacidad e ideale para su aplicación en acuarios de agua dulce y marina y artículos de decoración de interiores. Características: regulador de caudal, trabaja con pocos cm de agua. Caudal máximo: 270l/h, altura máx: 50cm, consumo: 4.5w. Para acuario de hasta 100l.                    <a href="http://www.misterguau.com/index.php/bomba-centrifuga-hydor-pico-evolution-250.html" title="Bomba centrífuga Hydor Pico Evolution 250">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bomba-centrifuga-hydor-pico-evolution-400.html" title="Bomba centrífuga Hydor Pico Evolution 400">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bomba_pico_evolution_200_p16300_1.jpg"  alt="Bomba centrífuga Hydor Pico Evolution 400" title="Bomba centrífuga Hydor Pico Evolution 400" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bomba-centrifuga-hydor-pico-evolution-400.html" title="Bomba centrífuga Hydor Pico Evolution 400"><b>Bomba centrífuga Hydor Pico Evolution 400</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bomba-centrifuga-hydor-pico-evolution-400.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3753/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Esta bomba centrífugas﻿ garantiza unas prestaciones elevadas, dimensiones reducidas y la total seguridad de la tecnología Hydor. Dotada de regulador de capacidad e ideale para su aplicación en acuarios de agua dulce y marina y artículos de decoración de interiores. Características: regulador de caudal, trabaja con pocos cm de agua. Caudal máximo: 385l/h, altura máx: 70cm, consumo: 4w. Para acuario de hasta 200l.                    <a href="http://www.misterguau.com/index.php/bomba-centrifuga-hydor-pico-evolution-400.html" title="Bomba centrífuga Hydor Pico Evolution 400">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/calentador-tropico-4-potencias.html" title="Calentador Trópico (4 potencias)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/calentador_tropico.jpg"  alt="Calentador Trópico (4 potencias)" title="Calentador Trópico (4 potencias)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/calentador-tropico-4-potencias.html" title="Calentador Trópico (4 potencias)"><b>Calentador Trópico (4 potencias)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>20,55&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 20.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/calentador-tropico-4-potencias.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5030/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Calentador interno automático para acuarios completamente sumergible. Con pernio de regulación y muy sensible. Con ganchos de apoyo y ventosa de anclaje. 4 potencias (ver +info)                    <a href="http://www.misterguau.com/index.php/calentador-tropico-4-potencias.html" title="Calentador Trópico (4 potencias)">Saber más</a><br><br>
					<span class="required"><strong>10% de Dto en 50W! Ahorra 2.05&euro;! <br><br>10% de Dto en 25W! Ahorra 2.05&euro;! <br><br>10% de Dto en 100W! Ahorra 2.05&euro;! <br><br>10% de Dto en 200W! Ahorra 2.30&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/carbon-filtrante-hiper-activo-axorb.html" title="Carbón filtrante hiper-activo Axorb (2 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/x/axorb_material_filtrante_a3002885.jpg"  alt="Carbón filtrante hiper-activo Axorb (2 medidas)" title="Carbón filtrante hiper-activo Axorb (2 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/carbon-filtrante-hiper-activo-axorb.html" title="Carbón filtrante hiper-activo Axorb (2 medidas)"><b>Carbón filtrante hiper-activo Axorb (2 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/carbon-filtrante-hiper-activo-axorb.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3749/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Material realizado a base de carbón hiper-activo que absorbe determinadas substancias del agua del acuario como son los medicamentos, substancias en suspensión, etc... Es la parte del filtro que debemos cambiar y sustiuir para asegurarnos un agua limpia y sin restos. Se aconseja renovarlo mensualmente para optimizar su capacidad de filtrado.﻿ 2 medidas: 175gr - 525gr                    <a href="http://www.misterguau.com/index.php/carbon-filtrante-hiper-activo-axorb.html" title="Carbón filtrante hiper-activo Axorb (2 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/carbon-filtrante-para-acuarios-foamex.html" title="Carbón filtrante para acuarios Foamex ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/o/foamex_18x12cm_material_filtrante_a3061951.jpg"  alt="Carbón filtrante para acuarios Foamex " title="Carbón filtrante para acuarios Foamex " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/carbon-filtrante-para-acuarios-foamex.html" title="Carbón filtrante para acuarios Foamex "><b>Carbón filtrante para acuarios Foamex </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/carbon-filtrante-para-acuarios-foamex.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3759/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Material realizado a base de carbón hiper-activo que absorbe determinadas substancias del agua del acuario como son los medicamentos, substancias en suspensión, etc... Es la parte del filtro que debemos cambiar y sustiuir para asegurarnos un agua limpia y sin restos. Se aconseja renovarlo mensualmente para optimizar su capacidad de filtrado.﻿ Medidas: 18*12cm                    <a href="http://www.misterguau.com/index.php/carbon-filtrante-para-acuarios-foamex.html" title="Carbón filtrante para acuarios Foamex ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/castillo-de-mago-14cm.html" title="Castillo de mago (14cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/castillo_mago_peq_14cm_26881.jpg"  alt="Castillo de mago (14cm)" title="Castillo de mago (14cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/castillo-de-mago-14cm.html" title="Castillo de mago (14cm)"><b>Castillo de mago (14cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/castillo-de-mago-14cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/388/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Auténtico castillo de mago Medieval que aportará elegancia y distinción a nuestro acuario. Realizado en poliresina no tóxica ofrece distracción y diversión a nuestros peces. Muy detallado con su torreón, foso y entrada a cuevas subterraneas. Un pequeño trozo de historia en nuestro acuario!. Medidas: 14cm                    <a href="http://www.misterguau.com/index.php/castillo-de-mago-14cm.html" title="Castillo de mago (14cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/castillo-medieval-ingles-10cm.html" title="Castillo medieval inglés (10cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/castillo_medieval_inglaterra_peq_10cm_26873.jpg"  alt="Castillo medieval inglés (10cm)" title="Castillo medieval inglés (10cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/castillo-medieval-ingles-10cm.html" title="Castillo medieval inglés (10cm)"><b>Castillo medieval inglés (10cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/castillo-medieval-ingles-10cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1690/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Auténtico castillo Medieval de estilo inglés que aportará elegancia y distinción a nuestro acuario. Realizado en poliresina no tóxica ofrece distracción y diversión a nuestros peces. Muy detallado y cubierto de flores para aportarle más colorido. Un pequeño trozo de historia en nuestro acuario!. Medidas: 10cm                    <a href="http://www.misterguau.com/index.php/castillo-medieval-ingles-10cm.html" title="Castillo medieval inglés (10cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-automatico-para-peces-delux-24-lcd.html" title="Comedero automático para peces Delux 24 LCD">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/l/alimentador_automatico_deluxe_lcd_a6076262.jpg"  alt="Comedero automático para peces Delux 24 LCD" title="Comedero automático para peces Delux 24 LCD" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-automatico-para-peces-delux-24-lcd.html" title="Comedero automático para peces Delux 24 LCD"><b>Comedero automático para peces Delux 24 LCD</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															51,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-automatico-para-peces-delux-24-lcd.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4785/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimentador automático para despreocuparnos de la alimentación de nuestros peces en vacaciones, fines de semana, etc. Programable de 1 a 5 comidas con hasta 3 dosis en intervalos de 1minuto. Pinza incluida para poder adaptarlo a cualquier acuario. Adhesivo doble cara incluido. 2 pilas AA incluidas.﻿                     <a href="http://www.misterguau.com/index.php/comedero-automatico-para-peces-delux-24-lcd.html" title="Comedero automático para peces Delux 24 LCD">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-acuario-barco-de-pesca.html" title="Figura acuario Barco de pesca">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barca_pesca_4000.jpg"  alt="Figura acuario Barco de pesca" title="Figura acuario Barco de pesca" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-acuario-barco-de-pesca.html" title="Figura acuario Barco de pesca"><b>Figura acuario Barco de pesca</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-acuario-barco-de-pesca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2262/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Figura para acuario realizada en resina atóxica y tela. Recrea una barca de pesca que ha escorado en la orilla. Ofrece a nuestros peces pequeños espacios para el juego y el entretenimiento a la vez que nos permite tener un acuario decorado y temático. Medidas: 13x7x12cm.                    <a href="http://www.misterguau.com/index.php/figura-acuario-barco-de-pesca.html" title="Figura acuario Barco de pesca">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-acuario-coral-abanico.html" title="Figura acuario Coral abanico">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_5.jpg"  alt="Figura acuario Coral abanico" title="Figura acuario Coral abanico" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-acuario-coral-abanico.html" title="Figura acuario Coral abanico"><b>Figura acuario Coral abanico</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-acuario-coral-abanico.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3982/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonita recreación de un coral realizado en resina no tóxica y en colores neutros con puntitas brillantes para acuarios elegantes. Figura especialmente diseñada para acuarios. Su forma favorece escondite y diversión para los más peques! Con base rígida para poder esconderla y enterrarla. Colores surtidos. Medidas: 1x9,5x8,5cm                    <a href="http://www.misterguau.com/index.php/figura-acuario-coral-abanico.html" title="Figura acuario Coral abanico">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-acuarios-columna-dorica-clasica.html" title="Figura acuarios Columna dórica clásica">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/columna_clasica_6020.jpg"  alt="Figura acuarios Columna dórica clásica" title="Figura acuarios Columna dórica clásica" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-acuarios-columna-dorica-clasica.html" title="Figura acuarios Columna dórica clásica"><b>Figura acuarios Columna dórica clásica</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-acuarios-columna-dorica-clasica.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3761/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Figura clásica de decoración para nuestro acuario, que representa una columna griega de estilo dórico. A nuestros peces les encantará sortearla, manteniéndose entretenidos y mejorando su salud. Medidas: 4*4*18cm                    <a href="http://www.misterguau.com/index.php/figura-acuarios-columna-dorica-clasica.html" title="Figura acuarios Columna dórica clásica">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-hawaiana-tiki-10cm.html" title="Figura Hawaiana Tiki (10cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/s/esculturas_tiki_10cm_26883.jpg"  alt="Figura Hawaiana Tiki (10cm)" title="Figura Hawaiana Tiki (10cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-hawaiana-tiki-10cm.html" title="Figura Hawaiana Tiki (10cm)"><b>Figura Hawaiana Tiki (10cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-hawaiana-tiki-10cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4118/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Auténtica figura hawaiana representando una figura Tiki que representa a los dioses, guardianes y espíritus de la cultura hawaiana. Realizado en poliresina no tóxica ofrece distracción y diversión a nuestros peces. Muy detallado. Disponible en 3 modelos surtidos. Medidas: 10cm                    <a href="http://www.misterguau.com/index.php/figura-hawaiana-tiki-10cm.html" title="Figura Hawaiana Tiki (10cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-difusor-7-6cm.html" title="Figura para acuario Bob Esponja difusor (7.6cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bob_esponja_pompitas_difusor_26861.jpg"  alt="Figura para acuario Bob Esponja difusor (7.6cm)" title="Figura para acuario Bob Esponja difusor (7.6cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-difusor-7-6cm.html" title="Figura para acuario Bob Esponja difusor (7.6cm)"><b>Figura para acuario Bob Esponja difusor (7.6cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-difusor-7-6cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3622/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Divertida figura difusor fabricada en resina no tóxica de Bob Esponja echando burbujas. Quedará ideal en nuestro acuario! Con conector para el tubo difusor en su parte trasera parecerá realmente que nuestro amigo Bob crea burbujas para nuestro acuario! Medidas: 7.6cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-difusor-7-6cm.html" title="Figura para acuario Bob Esponja difusor (7.6cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-pi-a-16-5cm.html" title="Figura para acuario Bob Esponja Piña (16.5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_3_7.jpg"  alt="Figura para acuario Bob Esponja Piña (16.5cm)" title="Figura para acuario Bob Esponja Piña (16.5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-pi-a-16-5cm.html" title="Figura para acuario Bob Esponja Piña (16.5cm)"><b>Figura para acuario Bob Esponja Piña (16.5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-pi-a-16-5cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1998/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Divertida figura fabricada en resina no tóxica de la casa piña de Bob Esponja. Su mediano tamaño permite entrada a nuestros peces pequeños, escontrando en ella un punto de color, escondites y diversión. Excelente acabado y vistosidad para decorar nuestro acuario.  Reconstruye la villa "Fondo de Bikini" en tu acuario. Medidas: 16.5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-pi-a-16-5cm.html" title="Figura para acuario Bob Esponja Piña (16.5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-sillon-12-5cm.html" title="Figura para acuario Bob Esponja sillón (12.5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bob_esponja_sillon_12cm_26865.jpg"  alt="Figura para acuario Bob Esponja sillón (12.5cm)" title="Figura para acuario Bob Esponja sillón (12.5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-sillon-12-5cm.html" title="Figura para acuario Bob Esponja sillón (12.5cm)"><b>Figura para acuario Bob Esponja sillón (12.5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															17,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-sillon-12-5cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3621/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Divertida figura fabricada en resina no tóxica de Bob Esponja sentado en su cómodo sillón. Parecerá que observa nuestro acuario y peces como si de la tele se tratase!. Ideal para decorar nuestro acuario y aportar un punto de color. Medidas: 12.5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-sillon-12-5cm.html" title="Figura para acuario Bob Esponja sillón (12.5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-y-patricio-playa-16-5cm.html" title="Figura para acuario Bob Esponja y Patricio playa (16.5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bob_esponja_y_patricio_16cm_26859.jpg"  alt="Figura para acuario Bob Esponja y Patricio playa (16.5cm)" title="Figura para acuario Bob Esponja y Patricio playa (16.5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-y-patricio-playa-16-5cm.html" title="Figura para acuario Bob Esponja y Patricio playa (16.5cm)"><b>Figura para acuario Bob Esponja y Patricio playa (16.5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-y-patricio-playa-16-5cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3640/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Divertida figura fabricada en resina no tóxica de Bob Esponja echando un cubo de arena sobre Patricio mientras juegan en el fondo Bikini. Ideal para decorar nuestro acuario y aportar un punto de color. Figura con base trasera plana. Medidas: 16.5cm*5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja-y-patricio-playa-16-5cm.html" title="Figura para acuario Bob Esponja y Patricio playa (16.5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-calamardo-14cm.html" title="Figura para acuario Calamardo (14cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/calamardo_14cm_26866.jpg"  alt="Figura para acuario Calamardo (14cm)" title="Figura para acuario Calamardo (14cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-calamardo-14cm.html" title="Figura para acuario Calamardo (14cm)"><b>Figura para acuario Calamardo (14cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															17,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-calamardo-14cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3514/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Divertida figura fabricada en resina no tóxica de un gran Calamardo que, como siempre, mira con desaprovación lo que pueda estar haciendo nuestro amigo Bob. Convierte tu acuario en la villa de Fondo Bikini! Ideal para decorar nuestro acuario y aportar un punto de color. Medidas: 14cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-calamardo-14cm.html" title="Figura para acuario Calamardo (14cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-dora-exploradora-en-la-playa-6cm.html" title="Figura para acuario Dora Exploradora en la playa (6cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/o/dora_en_la_playa_6cm_26891.jpg"  alt="Figura para acuario Dora Exploradora en la playa (6cm)" title="Figura para acuario Dora Exploradora en la playa (6cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-dora-exploradora-en-la-playa-6cm.html" title="Figura para acuario Dora Exploradora en la playa (6cm)"><b>Figura para acuario Dora Exploradora en la playa (6cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-dora-exploradora-en-la-playa-6cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2618/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonita figura en resina no tóxica de la exploradora más famosa para los niños, Dora la Exploradora. Decora tu acuario con esta figura que aportará vistosidad y divertidos colores al hábitat de tus peces. Figura original. Acabados de alta calidad y detalle. Tamaño: 6cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-dora-exploradora-en-la-playa-6cm.html" title="Figura para acuario Dora Exploradora en la playa (6cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-dora-exploradora-sirenita-7cm.html" title="Figura para acuario Dora Exploradora Sirenita (7cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/o/dora_sirenita_7cm_26892.jpg"  alt="Figura para acuario Dora Exploradora Sirenita (7cm)" title="Figura para acuario Dora Exploradora Sirenita (7cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-dora-exploradora-sirenita-7cm.html" title="Figura para acuario Dora Exploradora Sirenita (7cm)"><b>Figura para acuario Dora Exploradora Sirenita (7cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-dora-exploradora-sirenita-7cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2048/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonita figura en resina no tóxica de la exploradora más famosa para los niños, Dora la Exploradora. Decora tu acuario con esta figura que aportará vistosidad y divertidos colores al hábitat de tus peces. Figura original. Acabados de alta calidad y detalle. Tamaño: 7cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-dora-exploradora-sirenita-7cm.html" title="Figura para acuario Dora Exploradora Sirenita (7cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-arenita.html" title="Figura para acuario mini Arenita (5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_arenita_5cm_26854.jpg"  alt="Figura para acuario mini Arenita (5cm)" title="Figura para acuario mini Arenita (5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-arenita.html" title="Figura para acuario mini Arenita (5cm)"><b>Figura para acuario mini Arenita (5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-arenita.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3687/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Deliciosa figura de la ardilla marina más famosa de todos los tiempos, ideal para decorar tu acuario y reconstruir la villa "Fondo de Bikini" en tu acuario. Realizado en resina no tóxica. Medidas: 5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-arenita.html" title="Figura para acuario mini Arenita (5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja.html" title="Figura para acuario mini Bob Esponja (5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_bob_esponja_5cm_26855.jpg"  alt="Figura para acuario mini Bob Esponja (5cm)" title="Figura para acuario mini Bob Esponja (5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja.html" title="Figura para acuario mini Bob Esponja (5cm)"><b>Figura para acuario mini Bob Esponja (5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3689/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Deliciosa figura de la esponja de mar más famosa de todos los tiempos, ideal para decorar tu acuario y reconstruir la villa "Fondo de Bikini" en tu acuario. Realizado en resina no tóxica. Medidas: 5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-bob-esponja.html" title="Figura para acuario mini Bob Esponja (5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-calamardo.html" title="Figura para acuario mini Calamardo (5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_calamardo_5cm_26856.jpg"  alt="Figura para acuario mini Calamardo (5cm)" title="Figura para acuario mini Calamardo (5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-calamardo.html" title="Figura para acuario mini Calamardo (5cm)"><b>Figura para acuario mini Calamardo (5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-calamardo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3688/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Deliciosa figura del calamar más famoso de todos los tiempos, ideal para decorar tu acuario y reconstruir la villa "Fondo de Bikini" en tu acuario. Realizado en resina no tóxica. Medidas: 5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-calamardo.html" title="Figura para acuario mini Calamardo (5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-mini-crush-5cm.html" title="Figura para acuario mini Crush (5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/r/crush_mini_5cm_26888.jpg"  alt="Figura para acuario mini Crush (5cm)" title="Figura para acuario mini Crush (5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-mini-crush-5cm.html" title="Figura para acuario mini Crush (5cm)"><b>Figura para acuario mini Crush (5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-mini-crush-5cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3512/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pequeña y decorativa figura de la tortuga Crush posada sobre anémonas, la tortuga más famosa de la película de animación Buscando a Nemo. Sus vistosos colores decorarán nuestro acuario y distraerán a nuestros peces. Realizado en resina no tóxica. Se presenta en blister oficial de cartón. Medidas: 5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-mini-crush-5cm.html" title="Figura para acuario mini Crush (5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-gary.html" title="Figura para acuario mini Gary (5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_gary_5cm_26850.jpg"  alt="Figura para acuario mini Gary (5cm)" title="Figura para acuario mini Gary (5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-gary.html" title="Figura para acuario mini Gary (5cm)"><b>Figura para acuario mini Gary (5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-gary.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3683/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Deliciosa figura de uno de los caracoles más famosos de todos los tiempos, ideal para decorar tu acuario y reconstruir la villa "Fondo de Bikini" en tu acuario. Realizado en resina no tóxica. Medidas: 5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-gary.html" title="Figura para acuario mini Gary (5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-mini-nemo-4cm.html" title="Figura para acuario mini Nemo (4cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/e/nemo_mini_4cm_26887.jpg"  alt="Figura para acuario mini Nemo (4cm)" title="Figura para acuario mini Nemo (4cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-mini-nemo-4cm.html" title="Figura para acuario mini Nemo (4cm)"><b>Figura para acuario mini Nemo (4cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-mini-nemo-4cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3513/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pequeña y decorativa figura de Nemo posado sobre anémonas, el pez payaso protagonista de la película de animación Buscando a Nemo. Sus vistosos colores decorarán nuestro acuario y distraerán a nuestros peces. Realizado en resina no tóxica. Se presenta en blister oficial de cartón. Medidas: 4.5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-mini-nemo-4cm.html" title="Figura para acuario mini Nemo (4cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-patricio.html" title="Figura para acuario mini Patricio (5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_patricio_5cm_26852.jpg"  alt="Figura para acuario mini Patricio (5cm)" title="Figura para acuario mini Patricio (5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-patricio.html" title="Figura para acuario mini Patricio (5cm)"><b>Figura para acuario mini Patricio (5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-patricio.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3685/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Deliciosa figura de la estrella de mar más famosos de todos los tiempos, ideal para decorar tu acuario y reconstruir la villa "Fondo de Bikini" en tu acuario. Realizado en resina no tóxica. Medidas: 5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-patricio.html" title="Figura para acuario mini Patricio (5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-plankton.html" title="Figura para acuario mini Plankton (5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_plankton_5cm_26853.jpg"  alt="Figura para acuario mini Plankton (5cm)" title="Figura para acuario mini Plankton (5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-plankton.html" title="Figura para acuario mini Plankton (5cm)"><b>Figura para acuario mini Plankton (5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-plankton.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3686/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Deliciosa figura del villanomarino más famoso de todos los tiempos, ideal para decorar tu acuario y reconstruir la villa "Fondo de Bikini" en tu acuario. Realizado en resina no tóxica. Medidas: 5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-plankton.html" title="Figura para acuario mini Plankton (5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-se-or-cangrejo.html" title="Figura para acuario mini Señor Cangrejo (5cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_sr_cangrejo_5cm_26851.jpg"  alt="Figura para acuario mini Señor Cangrejo (5cm)" title="Figura para acuario mini Señor Cangrejo (5cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-se-or-cangrejo.html" title="Figura para acuario mini Señor Cangrejo (5cm)"><b>Figura para acuario mini Señor Cangrejo (5cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-se-or-cangrejo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3684/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Quien vive en una piña debajo del mar? Bob Es-pon-ja!! Deliciosa figura de uno de los cangrejos más famosos de todos los tiempos, ideal para decorar tu acuario y reconstruir la villa "Fondo de Bikini" en tu acuario. Realizado en resina no tóxica. Medidas: 5cm                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-se-or-cangrejo.html" title="Figura para acuario mini Señor Cangrejo (5cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/figura-para-acuario-ostra-gigante-difusor.html" title="Figura para acuario Ostra gigante difusor">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/o/s/ostra_gigante_difusor_26831.jpg"  alt="Figura para acuario Ostra gigante difusor" title="Figura para acuario Ostra gigante difusor" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/figura-para-acuario-ostra-gigante-difusor.html" title="Figura para acuario Ostra gigante difusor"><b>Figura para acuario Ostra gigante difusor</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/figura-para-acuario-ostra-gigante-difusor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2004/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ostra realizada en resina genialmente conseguida que le dará a nuestro acuario un aspecto muy natural y marino. De colores rojizos y ocres con una perla en su interior. Con conector para el tubo difusor en su parte trasera parecerá realmente que crea burbujas para nuestro acuario! Medidas: 12x6,5x7,5cm.                    <a href="http://www.misterguau.com/index.php/figura-para-acuario-ostra-gigante-difusor.html" title="Figura para acuario Ostra gigante difusor">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/filtro-interior-crystal-duo-2-r-05-ii.html" title="Filtro interior Crystal Duo 2 (R 05 II)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/filtro_interior_crystal_duo_2_f01311_2.jpg"  alt="Filtro interior Crystal Duo 2 (R 05 II)" title="Filtro interior Crystal Duo 2 (R 05 II)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/filtro-interior-crystal-duo-2-r-05-ii.html" title="Filtro interior Crystal Duo 2 (R 05 II)"><b>Filtro interior Crystal Duo 2 (R 05 II)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															40,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/filtro-interior-crystal-duo-2-r-05-ii.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3755/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Filtro interior para acuarios con doble acción filtrante, mecánica y química, de fácil posicionamiento gracias a la abrazadera de soporte angular. Gran versatilidad gracias al especial contenedor rellenable con materiales filtrantes (carbón activo) para una filtración adicional y personalizada. Deflector de flujo multidireccional y regulador de caudal para una eficiente recirculación del agua y llave de aireación regulable para una oxigenación suplementaria. Silenciador  incorporado a la bomba. W: 10W - Flujo: 650 l/h - Para acuarios: 80-150l.                    <a href="http://www.misterguau.com/index.php/filtro-interior-crystal-duo-2-r-05-ii.html" title="Filtro interior Crystal Duo 2 (R 05 II)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/filtro-interior-crystal-duo-mini-k10-ii.html" title="Filtro interior Crystal Duo Mini (K10 II)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/filtro_interior_crystal_duo_2_f01311.jpg"  alt="Filtro interior Crystal Duo Mini (K10 II)" title="Filtro interior Crystal Duo Mini (K10 II)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/filtro-interior-crystal-duo-mini-k10-ii.html" title="Filtro interior Crystal Duo Mini (K10 II)"><b>Filtro interior Crystal Duo Mini (K10 II)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															30,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/filtro-interior-crystal-duo-mini-k10-ii.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3754/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Filtro interior para acuarios con doble acción filtrante, mecánica y química, de fácil posicionamiento gracias a la abrazadera de soporte angular. Gran versatilidad gracias al especial contenedor rellenable con materiales filtrantes (carbón activo) para una filtración adicional y personalizada. Deflector de flujo multidireccional y regulador de caudal para una eficiente recirculación del agua y llave de aireación regulable para una oxigenación suplementaria. Silenciador  incorporado a la bomba. W: 4W -  Flujo máx: 170 l/h - Para acuarios: 20-50 l.                    <a href="http://www.misterguau.com/index.php/filtro-interior-crystal-duo-mini-k10-ii.html" title="Filtro interior Crystal Duo Mini (K10 II)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/filtro-interior-filpo-300.html" title="Filtro interior Filpo 300">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/filtro_interior_filpo_300.jpg"  alt="Filtro interior Filpo 300" title="Filtro interior Filpo 300" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/filtro-interior-filpo-300.html" title="Filtro interior Filpo 300"><b>Filtro interior Filpo 300</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/filtro-interior-filpo-300.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2943/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Filtro interior para acuarios de agua dulce de hasta 60 litros. Provisto de cartuchos de esponja y carbón activo, intercambiables, que permiten obtener una excelente calidad de agua. De agradable diseño y eficiente filtración, incorpora un mecanismo para mezclar aire con el agua ya filtrada mejorando así la oxigenación del agua. Caudal máximo: 300 l/h - Potencia: 4w                    <a href="http://www.misterguau.com/index.php/filtro-interior-filpo-300.html" title="Filtro interior Filpo 300">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/filtro-interior-filpo-450.html" title="/">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/images/catalog/product/placeholder/small_image.jpg"  alt="/" title="/" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/filtro-interior-filpo-450.html" title="Filtro interior Filpo 450"><b>Filtro interior Filpo 450</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															30,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/filtro-interior-filpo-450.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5443/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Filtro interior para acuarios de agua dulce de hasta 100 litros. Provisto de cartuchos de esponja y carbón activo, intercambiables, que permiten obtener una excelente calidad de agua. De agradable diseño y eficiente filtración, incorpora un mecanismo para mezclar aire con el agua ya filtrada mejorando así la oxigenación del agua. Caudal máximo: 450 l/h - Potencia: 4.8w                    <a href="http://www.misterguau.com/index.php/filtro-interior-filpo-450.html" title="Filtro interior Filpo 450">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/filtro-interior-filpo-mini.html" title="Filtro interior Filpo mini">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/filtro_filpo_mini_a6076875.jpg"  alt="Filtro interior Filpo mini" title="Filtro interior Filpo mini" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/filtro-interior-filpo-mini.html" title="Filtro interior Filpo mini"><b>Filtro interior Filpo mini</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/filtro-interior-filpo-mini.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5187/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Filtro interior Wave para acuarios de agua dulce o salada, con cartuchos de esponja y de carbón intercambiables que permiten obtener una excelente calidad de agua. De agradable diseño y eficiente filtración, incorpora un mecanismo venturi para mezclar aire con el agua ya filtrada mejorando así la oxigenación del agua del acuario﻿. Caudal máximo: 200 l/h - Potencia: 2w - Acuarios de hasta 20 litros.                    <a href="http://www.misterguau.com/index.php/filtro-interior-filpo-mini.html" title="Filtro interior Filpo mini">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-amarilla.html" title="Flamingo Arena para acuario Neón amarilla">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/r/grava_neon_amarilla_1kg_400431.jpg"  alt="Flamingo Arena para acuario Neón amarilla" title="Flamingo Arena para acuario Neón amarilla" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-amarilla.html" title="Flamingo Arena para acuario Neón amarilla"><b>Flamingo Arena para acuario Neón amarilla</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-amarilla.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3797/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Grava decorativa para acuarios realizada con sílice de color amarillo neón . Grava de medida 4/7mm. redondeada y de color neón intenso para aportar más vida a nuestro acuario. No tóxica, libre de polvo. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-amarilla.html" title="Flamingo Arena para acuario Neón amarilla">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-mezcla.html" title="Flamingo Arena para acuario Neón mezcla">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/r/grava_neon_rainbow_mezcla_1kg_400443.jpg"  alt="Flamingo Arena para acuario Neón mezcla" title="Flamingo Arena para acuario Neón mezcla" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-mezcla.html" title="Flamingo Arena para acuario Neón mezcla"><b>Flamingo Arena para acuario Neón mezcla</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-mezcla.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3800/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Grava decorativa para acuarios realizada con sílice de color mezclado de varias tonalidades neón . Grava de medida 4/7mm. redondeada y de color neon intenso para aportar más vida a nuestro acuario. No tóxica, libre de polvo. Formatos: 1Kg                    <a href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-mezcla.html" title="Flamingo Arena para acuario Neón mezcla">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-naranja.html" title="Flamingo Arena para acuario Neón naranja">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/r/grava_neon_naranja_1kg_400433.jpg"  alt="Flamingo Arena para acuario Neón naranja" title="Flamingo Arena para acuario Neón naranja" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-naranja.html" title="Flamingo Arena para acuario Neón naranja"><b>Flamingo Arena para acuario Neón naranja</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-naranja.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3798/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Grava decorativa para acuarios realizada con sílice de color naranja neón . Grava de medida 4/7mm. redondeada y de color neon intenso para aportar más vida a nuestro acuario. No tóxica, libre de polvo. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-naranja.html" title="Flamingo Arena para acuario Neón naranja">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-rosa.html" title="Flamingo Arena para acuario Neón rosa">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/r/grava_neon_rosa_1kg_400430.jpg"  alt="Flamingo Arena para acuario Neón rosa" title="Flamingo Arena para acuario Neón rosa" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-rosa.html" title="Flamingo Arena para acuario Neón rosa"><b>Flamingo Arena para acuario Neón rosa</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-rosa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3799/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Grava decorativa para acuarios realizada con sílice de color rosa neón . Grava de medida 4/7mm. redondeada y de color neon intenso para aportar más vida a nuestro acuario. No tóxica, libre de polvo. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/flamingo-arena-para-acuario-neon-rosa.html" title="Flamingo Arena para acuario Neón rosa">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/flor-plastica-caulerpa-margarita-8cm.html" title="Flor plástica Caulerpa Margarita (8cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/caulerpa_margarita.jpg"  alt="Flor plástica Caulerpa Margarita (8cm)" title="Flor plástica Caulerpa Margarita (8cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/flor-plastica-caulerpa-margarita-8cm.html" title="Flor plástica Caulerpa Margarita (8cm)"><b>Flor plástica Caulerpa Margarita (8cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/flor-plastica-caulerpa-margarita-8cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2809/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonita composición de margaritas de vivos colores para el fondo de nuestro acuario. Realizado en plástico y resina no tóxico especialmente diseñado para acuarios. Se presenta en cajita plástica conservadora. Colores surtidos. Medidas: 8,8x7,3x4cm                    <a href="http://www.misterguau.com/index.php/flor-plastica-caulerpa-margarita-8cm.html" title="Flor plástica Caulerpa Margarita (8cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fluorescente-para-acuarios-plant-power.html" title="Fluorescente para acuarios Wave Plant Power">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/l/fluorescente_plant_power_15w_t8-450mm_a6049277.jpg"  alt="Fluorescente para acuarios Wave Plant Power" title="Fluorescente para acuarios Wave Plant Power" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fluorescente-para-acuarios-plant-power.html" title="Fluorescente para acuarios Wave Plant Power"><b>Fluorescente para acuarios Wave Plant Power</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fluorescente-para-acuarios-plant-power.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2422/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El tubo fluorescente Plant Power resalta especialmente los colores rojos y azules. Su espectro lumínico favorece la fotosíntesis de las plantas ornamentales estimulando y optimizando su crecimiento.﻿ Medidas: 15W T8 450mm*Ø26mm                    <a href="http://www.misterguau.com/index.php/fluorescente-para-acuarios-plant-power.html" title="Fluorescente para acuarios Wave Plant Power">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fluorescente-para-acuarios-wave-tropical-river.html" title="Fluorescente para acuarios Wave Tropical River">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/l/fluorescente_tropical_river_14w_t8-375mm_a6049265.jpg"  alt="Fluorescente para acuarios Wave Tropical River" title="Fluorescente para acuarios Wave Tropical River" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fluorescente-para-acuarios-wave-tropical-river.html" title="Fluorescente para acuarios Wave Tropical River"><b>Fluorescente para acuarios Wave Tropical River</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fluorescente-para-acuarios-wave-tropical-river.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2421/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tubo fluorescente trifósforo de luz diurna específica para agua dulce. Ofrece una visión óptima del ambiente acuático resaltando los colores de los peces y el verde de las plantas. Temperatura de color 7000ºK. Para una iluminación completa y similar a la de la naturaleza se puede combinar con el fluorescente Plant Power.﻿ 4 Medidas/potencias: T1 (14w T8-375mm) - T2 (15w T8-450mm) - T3 (18w T8-600mm) - T4 (25w T8-750mm)                    <a href="http://www.misterguau.com/index.php/fluorescente-para-acuarios-wave-tropical-river.html" title="Fluorescente para acuarios Wave Tropical River">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-flora.html" title="Fondo de acuario doble Wave Flora">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/o/fondo_acuario_doble_flora_45cm_a8011340.jpg"  alt="Fondo de acuario doble Wave Flora" title="Fondo de acuario doble Wave Flora" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-flora.html" title="Fondo de acuario doble Wave Flora"><b>Fondo de acuario doble Wave Flora</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-flora.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4991/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Fondo de acuario reversible con dos bonitos diseños naturales. Calidad fotográfica de altísima calidad. Totalmente inocuo y atóxico para nuestros peces. Decora tu acuario con un precioso fondo que recrea la naturaleza para aportar armonía al hogar. Click en foto 2 y 3 para verlos con mejor detalle. Formato: Alto 45cm - Largo 1 metro                    <a href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-flora.html" title="Fondo de acuario doble Wave Flora">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-mystic.html" title="Fondo de acuario doble Wave Mystic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/o/fondo_acuario_doble_mystic_60cm_x_1m_a8011155.jpg"  alt="Fondo de acuario doble Wave Mystic" title="Fondo de acuario doble Wave Mystic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-mystic.html" title="Fondo de acuario doble Wave Mystic"><b>Fondo de acuario doble Wave Mystic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-mystic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4988/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Fondo de acuario reversible con dos bonitos diseños naturales. Calidad fotográfica de altísima calidad. Totalmente inocuo y atóxico para nuestros peces. Decora tu acuario con un precioso fondo que recrea la naturaleza para aportar armonía al hogar. Click en foto 2 y 3 para verlos con mejor detalle. Formato: Alto 60cm - Largo 1 metro                    <a href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-mystic.html" title="Fondo de acuario doble Wave Mystic">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-vision.html" title="Fondo de acuario doble Wave Vision">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/o/fondo_acuario_doble_vision_60cm_a8011166.jpg"  alt="Fondo de acuario doble Wave Vision" title="Fondo de acuario doble Wave Vision" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-vision.html" title="Fondo de acuario doble Wave Vision"><b>Fondo de acuario doble Wave Vision</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-vision.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4989/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Fondo de acuario reversible con dos bonitos diseños naturales. Calidad fotográfica de altísima calidad. Totalmente inocuo y atóxico para nuestros peces. Decora tu acuario con un precioso fondo que recrea la naturaleza para aportar armonía al hogar. Click en foto 2 y 3 para verlos con mejor detalle. Formato: Alto 60cm - Largo 1 metro                    <a href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-vision.html" title="Fondo de acuario doble Wave Vision">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-wonder.html" title="Fondo de acuario doble Wave Wonder">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/o/fondo_acuario_doble_wonder_45cm_a8011332.jpg"  alt="Fondo de acuario doble Wave Wonder" title="Fondo de acuario doble Wave Wonder" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-wonder.html" title="Fondo de acuario doble Wave Wonder"><b>Fondo de acuario doble Wave Wonder</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-wonder.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4990/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Fondo de acuario reversible con dos bonitos diseños naturales. Calidad fotográfica de altísima calidad. Totalmente inocuo y atóxico para nuestros peces. Decora tu acuario con un precioso fondo que recrea la naturaleza para aportar armonía al hogar. Click en foto 2 y 3 para verlos con mejor detalle. Formato: Alto 45cm - Largo 1 metro                    <a href="http://www.misterguau.com/index.php/fondo-de-acuario-doble-wave-wonder.html" title="Fondo de acuario doble Wave Wonder">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/iman-limpia-algas-magnetico-sandimas.html" title="Imán limpia algas magnético Sandimas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/l/i/limpia-algas_magnetico_normal.jpg"  alt="Imán limpia algas magnético Sandimas" title="Imán limpia algas magnético Sandimas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/iman-limpia-algas-magnetico-sandimas.html" title="Imán limpia algas magnético Sandimas"><b>Imán limpia algas magnético Sandimas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/iman-limpia-algas-magnetico-sandimas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3346/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juegos de imanes limpia algas para acuarios de hasta 60 litros. En color gris. Se presenta en blister.                     <a href="http://www.misterguau.com/index.php/iman-limpia-algas-magnetico-sandimas.html" title="Imán limpia algas magnético Sandimas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/iman-limpia-algas-wave-4-medidas.html" title="Imán limpia-algas Wave (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/w/a/wave_iman_gr_80x50x60mm_a6017252.jpg"  alt="Imán limpia-algas Wave (4 medidas)" title="Imán limpia-algas Wave (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/iman-limpia-algas-wave-4-medidas.html" title="Imán limpia-algas Wave (4 medidas)"><b>Imán limpia-algas Wave (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/iman-limpia-algas-wave-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/197/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Este imán elimina de forma sencilla, rápida y eficaz las algas y verdines de nuestro acuario. Válido para acuarios de cristal de cualquier tamaño y de agua dulce o salada. Gracias s su forma permite  fácil acceso a las esquinasy  recovecos , ahorrando mucho tiempo durante la limpieza. Disponible en 4 medidas. Ver + info.,                    <a href="http://www.misterguau.com/index.php/iman-limpia-algas-wave-4-medidas.html" title="Imán limpia-algas Wave (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/kit-acuario-bob-esponja-pirata-3-5l.html" title="Kit Acuario Bob Esponja Pirata (3.5l)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acuario_bob_esponja_kit_pirata_24492.jpg"  alt="Kit Acuario Bob Esponja Pirata (3.5l)" title="Kit Acuario Bob Esponja Pirata (3.5l)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/kit-acuario-bob-esponja-pirata-3-5l.html" title="Kit Acuario Bob Esponja Pirata (3.5l)"><b>Kit Acuario Bob Esponja Pirata (3.5l)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															32,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/kit-acuario-bob-esponja-pirata-3-5l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3508/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pequeño kit acuario ideal para introducir a los más pequeños de la casa al apasionante mundo de la acuariofilia. Ideal para peces betta o de agua fría. Fabricado en plástico no tóxico totalmente seguro para los peces. Con visor panorámico para ver todos los peces de forma ampliada. Con luz led incluída con botón de On/off. También incluye fondo y ornamento de Bob Esponja de cartón.  Capacidad: 3.5 litros. Medidas: 26.5*19*17cm                    <a href="http://www.misterguau.com/index.php/kit-acuario-bob-esponja-pirata-3-5l.html" title="Kit Acuario Bob Esponja Pirata (3.5l)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/kit-acuario-buscando-a-nemo.html" title="Kit acuario Buscando a Nemo (15 l.)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/k/i/kit_acuario_nemo_24491.jpg"  alt="Kit acuario Buscando a Nemo (15 l.)" title="Kit acuario Buscando a Nemo (15 l.)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/kit-acuario-buscando-a-nemo.html" title="Kit acuario Buscando a Nemo (15 l.)"><b>Kit acuario Buscando a Nemo (15 l.)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															60,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/kit-acuario-buscando-a-nemo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3511/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto oficial de la película de animación infantil 'Buscando a Nemo'. Completamente equipado y listo para que los mas pequeños de la casa disfruten de la apasionante aventura de la acuariofilia. Incluye filtro interior, grava, decoración de una figura de Nemo sobre anémonas (4cm) y una práctica tapa abatible para alimentar a los peces sin necesidad de destarparlo. Ideal para peces de agua fría. Capacidad 15 litros. Medidas: 38x23x26cm.                    <a href="http://www.misterguau.com/index.php/kit-acuario-buscando-a-nemo.html" title="Kit acuario Buscando a Nemo (15 l.)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/kit-acuario-mini-6-5l.html" title="Kit Acuario mini (6.5l)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/k/i/kit_acuario_mini_6l_24669.jpg"  alt="Kit Acuario mini (6.5l)" title="Kit Acuario mini (6.5l)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/kit-acuario-mini-6-5l.html" title="Kit Acuario mini (6.5l)"><b>Kit Acuario mini (6.5l)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															28,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/kit-acuario-mini-6-5l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3111/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Kit sencillo de acuario para peces de agua fria, como cometas Goldfish. Incluye acuario de cristal con marco plástico en color rojo + aireador compresor Eco-Air 9800 + planta para acuario. Capacidad: 6.5 litros.                    <a href="http://www.misterguau.com/index.php/kit-acuario-mini-6-5l.html" title="Kit Acuario mini (6.5l)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/kit-acuario-plastico-bob-esponja-15l.html" title="Kit Acuario plástico Bob Esponja (15l)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/k/i/kit_acuario_plastico_bob_esponja_24490.jpg"  alt="Kit Acuario plástico Bob Esponja (15l)" title="Kit Acuario plástico Bob Esponja (15l)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/kit-acuario-plastico-bob-esponja-15l.html" title="Kit Acuario plástico Bob Esponja (15l)"><b>Kit Acuario plástico Bob Esponja (15l)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															65,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/kit-acuario-plastico-bob-esponja-15l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4147/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Divertido y decorativo acuario plástico del famoso Bob Esponja, ideal como regalo para niños que deseen iniciarse en el apasionante mundo de la acuariofilia. Tus peces nadando por "Fondo de Bikini" se lo pasarán en grande. Kit especial para peces de agua fría. Realizado en plástico atóxico y seguro. Con alimentador fácil para que los niños no tengan que destaparlo para alimentar a los peces. Capacidad: 15 litros. Ver + info.                    <a href="http://www.misterguau.com/index.php/kit-acuario-plastico-bob-esponja-15l.html" title="Kit Acuario plástico Bob Esponja (15l)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/kit-acuario-wave-zen-artist-combi-blanco.html" title="Kit acuario Wave Zen Artist Combi (Blanco)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/w/a/wave_zen_artist_50_blanco_combi200i-cr-a2001980.jpg"  alt="Kit acuario Wave Zen Artist Combi (Blanco)" title="Kit acuario Wave Zen Artist Combi (Blanco)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/kit-acuario-wave-zen-artist-combi-blanco.html" title="Kit acuario Wave Zen Artist Combi (Blanco)"><b>Kit acuario Wave Zen Artist Combi (Blanco)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>149,45&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 112.09&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/kit-acuario-wave-zen-artist-combi-blanco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4375/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso acuario de diseño y ambiente Zen, de cristal óptico ultraclaro, ideado para peces tropicales. Disfruta diseñando su hogar con piedras, rocas, arena y plantas, a la vez que decoras tu casa con un ambiente acuático que desprende relajación y tranquilidad. Incluye filtro, calentador y luz. Medidas: Acuario (25x25x25cm) - Bandeja (52x40x7cm) - 15 litros.                    <a href="http://www.misterguau.com/index.php/kit-acuario-wave-zen-artist-combi-blanco.html" title="Kit acuario Wave Zen Artist Combi (Blanco)">Saber más</a><br><br>
					<span class="required"><strong>25% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/limpiafondos-handy-a-pilas-3-en-1.html" title="Limpiafondos Handy a pilas 3 en 1">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/a/handy_limpiafondos_a_pilas.jpg"  alt="Limpiafondos Handy a pilas 3 en 1" title="Limpiafondos Handy a pilas 3 en 1" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/limpiafondos-handy-a-pilas-3-en-1.html" title="Limpiafondos Handy a pilas 3 en 1"><b>Limpiafondos Handy a pilas 3 en 1</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															21,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/limpiafondos-handy-a-pilas-3-en-1.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4172/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El aspirador de fondos Handy facilita el limpiado de la grava de nuestro acuario, separando los detritos de la grava acumulándolos en un cartucho de filtrado en dos fases. Adaptable a diferentes dimensiones de acuarios y tortugueras. También útil como sifón de agua y limpiador de algas.                     <a href="http://www.misterguau.com/index.php/limpiafondos-handy-a-pilas-3-en-1.html" title="Limpiafondos Handy a pilas 3 en 1">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/limpiafondos-smart-a-pilas.html" title="Limpiafondos Smart a pilas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/m/smart_limpiafondo_a_pilas.jpg"  alt="Limpiafondos Smart a pilas" title="Limpiafondos Smart a pilas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/limpiafondos-smart-a-pilas.html" title="Limpiafondos Smart a pilas"><b>Limpiafondos Smart a pilas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															30,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/limpiafondos-smart-a-pilas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3049/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Aspirador a pilas con cartucho filtrante para acuarios y tortugueras. La campana de aspiración separa la suciedad de la grava del acuario, y la conduce al cartucho filtrante donde tiene lugar una filtración en dos etapas. Funciona con 2 pilas de tipo c 1,4v no incluidas.﻿                    <a href="http://www.misterguau.com/index.php/limpiafondos-smart-a-pilas.html" title="Limpiafondos Smart a pilas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/luces-led-para-acuario-h2oshow.html" title="Luces led para acuario H2OShow (4 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/l/u/luz_led_azul_13100.jpg"  alt="Luces led para acuario H2OShow (4 colores)" title="Luces led para acuario H2OShow (4 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/luces-led-para-acuario-h2oshow.html" title="Luces led para acuario H2OShow (4 colores)"><b>Luces led para acuario H2OShow (4 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/luces-led-para-acuario-h2oshow.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2419/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Añade un intenso punto de color a tu acuario. Luces más potentes, 25% mas de intensidad. Completamente seguro, 6V bajo voltaje. Fácil colocación, ventosa mas fuerte y fácil acople al Bubble Maker﻿. Características luces Led: Voltaje	230V - Frecuencia 50Hz - Rendimiento 5V-90mA - Potencia 2W. Disponible en 3 colores: Azul, verde o mix (cambia entre 3 colores).                    <a href="http://www.misterguau.com/index.php/luces-led-para-acuario-h2oshow.html" title="Luces led para acuario H2OShow (4 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/luz-led-para-acuario-mini-sun-azul-blanco.html" title="Luz Led para acuario Mini Sun (Azul / blanco)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_sun_blanco-azul_a6049977.jpg"  alt="Luz Led para acuario Mini Sun (Azul / blanco)" title="Luz Led para acuario Mini Sun (Azul / blanco)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/luz-led-para-acuario-mini-sun-azul-blanco.html" title="Luz Led para acuario Mini Sun (Azul / blanco)"><b>Luz Led para acuario Mini Sun (Azul / blanco)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															46,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/luz-led-para-acuario-mini-sun-azul-blanco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1569/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sistema de iluminación de 10 leds de bajo consumo (0,0064W) para acuarios pequeños. Se presentan montados sobre un cuerpo flexible y adaptable, resistente a la condensación (enganche regulable incluido). Máxima seguridad gracias a la baja tensión. 5 leds blancos y 5 leds azules para acuario de agua dulce como marino. Medidas: 300mm * 7mm ancho.                    <a href="http://www.misterguau.com/index.php/luz-led-para-acuario-mini-sun-azul-blanco.html" title="Luz Led para acuario Mini Sun (Azul / blanco)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/macarron-atoxico-para-acuario-4-6mm.html" title="Macarrón atóxico para acuario (4-6mm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/a/macarron_atoxico_23230.jpg"  alt="Macarrón atóxico para acuario (4-6mm)" title="Macarrón atóxico para acuario (4-6mm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/macarron-atoxico-para-acuario-4-6mm.html" title="Macarrón atóxico para acuario (4-6mm)"><b>Macarrón atóxico para acuario (4-6mm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/macarron-atoxico-para-acuario-4-6mm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/389/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tubo plástico atóxico especial para la aireación y conducción de aire de acuarios. Flexible y transparente. Especial para realizar los circuitos de aire y ocigenar el acuario. No contamina. Medidas:  4 mm interior, 6 mm exterior, ajusta en las boquillas de 5 mm. La unidad de medida es de un metro: 100cm                    <a href="http://www.misterguau.com/index.php/macarron-atoxico-para-acuario-4-6mm.html" title="Macarrón atóxico para acuario (4-6mm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/malla-para-material-filtrante-ny.html" title="Malla para material filtrante NY">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/a/malla_para_material_filtrante_2unds_a6017410.jpg"  alt="Malla para material filtrante NY" title="Malla para material filtrante NY" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/malla-para-material-filtrante-ny.html" title="Malla para material filtrante NY"><b>Malla para material filtrante NY</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/malla-para-material-filtrante-ny.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/439/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pack de 2 mallas para contener material filtrante para nuestro acuario. Elástico. Con tira de cierre. Medidas: 20x10cm                    <a href="http://www.misterguau.com/index.php/malla-para-material-filtrante-ny.html" title="Malla para material filtrante NY">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/material-filtrante-master-filter.html" title="Material filtrante Master Filter">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/a/master_filter_100gr_material_filtrante.jpg"  alt="Material filtrante Master Filter" title="Material filtrante Master Filter" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/material-filtrante-master-filter.html" title="Material filtrante Master Filter"><b>Material filtrante Master Filter</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/material-filtrante-master-filter.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1264/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ideal para la filtración mecánica excelente, absolutamente no tóxico, evita que las impurezas del agua lleguen al filtro biológico. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/material-filtrante-master-filter.html" title="Material filtrante Master Filter">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/mini-esterilla-termica-para-acuarios-tortugueras.html" title="Mini esterilla térmica para acuarios/tortugueras">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mini_esterilla_termica.jpg"  alt="Mini esterilla térmica para acuarios/tortugueras" title="Mini esterilla térmica para acuarios/tortugueras" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/mini-esterilla-termica-para-acuarios-tortugueras.html" title="Mini esterilla térmica para acuarios/tortugueras"><b>Mini esterilla térmica para acuarios/tortugueras</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/mini-esterilla-termica-para-acuarios-tortugueras.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3339/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mini esterilla térmica de gran versatilidad para peceras y pequeños acuarios, de 8 a 20 litros, de cristal o acrílicos. Contribuye a aumentar la temperatura del agua algunos grados centígrados con respecto a la temperatura ambiente. Potencia	7,5w.  Superficie Calefactada: 14,5x5,8cm.                    <a href="http://www.misterguau.com/index.php/mini-esterilla-termica-para-acuarios-tortugueras.html" title="Mini esterilla térmica para acuarios/tortugueras">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nano-acuario-set-yamato-10l-20cm.html" title="Nano acuario Set Yamato 10l - 20cm">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/nano_aquarium_set_yamato_3.jpg"  alt="Nano acuario Set Yamato 10l - 20cm" title="Nano acuario Set Yamato 10l - 20cm" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nano-acuario-set-yamato-10l-20cm.html" title="Nano acuario Set Yamato 10l - 20cm"><b>Nano acuario Set Yamato 10l - 20cm</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															75,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nano-acuario-set-yamato-10l-20cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1997/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Set completo de nano acuario para peces tropicales o de agua fría, también para camarones. Incluye filtro interno  (Barracuda) + Bombilla de bajo consumo +calentador estanco en miniatura. Elegante y muy adecuado para habitaciones pequeñas, tales como: Oficinas - cocinas - estanterías, etc. Ideal para peces cuyo tamaño de adulto no superan los 7cm. Fácil mantenimiento.  Medidas: 20*20*25 cm - 10litros.                    <a href="http://www.misterguau.com/index.php/nano-acuario-set-yamato-10l-20cm.html" title="Nano acuario Set Yamato 10l - 20cm">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/paridera-flotante-sandimas.html" title="Paridera flotante Sandimas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/paridera_flotante_san_dimas_23325.jpg"  alt="Paridera flotante Sandimas" title="Paridera flotante Sandimas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/paridera-flotante-sandimas.html" title="Paridera flotante Sandimas"><b>Paridera flotante Sandimas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/paridera-flotante-sandimas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4052/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Paridera diseñada para la crianza de peces vivíparos en el acuario. Incluye dos ventosas dobles para facilitar la fijación al cristal del acuario. Medidas: 18cm x 9cm x 10cm                    <a href="http://www.misterguau.com/index.php/paridera-flotante-sandimas.html" title="Paridera flotante Sandimas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/paridera-para-peces-3-en-1.html" title="Paridera para peces 3 en 1">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/paridera_3_en_1_a6008050.jpg"  alt="Paridera para peces 3 en 1" title="Paridera para peces 3 en 1" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/paridera-para-peces-3-en-1.html" title="Paridera para peces 3 en 1"><b>Paridera para peces 3 en 1</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/paridera-para-peces-3-en-1.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4690/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Proporciona aislamiento al animal durante el periodo de gestación y a los alevines durante su desarrollo. Puede ser utilizado como refugio y soluciona temporalmente los problemas de incompatibilidad con otros peces. La paridera se puede colocar fuera del acuario para ahorrar espacio en el interior.﻿ Medidas: 13 largo x 7,5 ancho x 8cm alto                    <a href="http://www.misterguau.com/index.php/paridera-para-peces-3-en-1.html" title="Paridera para peces 3 en 1">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pecera-de-cristal-3-medidas.html" title="Pecera de cristal  (3 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/e/pecera_cristal_25cm_2.jpg"  alt="Pecera de cristal  (3 medidas)" title="Pecera de cristal  (3 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pecera-de-cristal-3-medidas.html" title="Pecera de cristal  (3 medidas)"><b>Pecera de cristal  (3 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pecera-de-cristal-3-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2940/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pecera de cristal para peces de agua fría. Ideal para peces de agua fría como Bettas o Cometas. 3 medidas: Ø18cm, Ø20cm, Ø25cm                    <a href="http://www.misterguau.com/index.php/pecera-de-cristal-3-medidas.html" title="Pecera de cristal  (3 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pecera-de-cristal-globo-wave-o-25cm.html" title="Pecera de cristal Globo Wave (Ø 25cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/e/pecera_globo_cristal.jpg"  alt="Pecera de cristal Globo Wave (Ø 25cm)" title="Pecera de cristal Globo Wave (Ø 25cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pecera-de-cristal-globo-wave-o-25cm.html" title="Pecera de cristal Globo Wave (Ø 25cm)"><b>Pecera de cristal Globo Wave (Ø 25cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pecera-de-cristal-globo-wave-o-25cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5029/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pecera de cristal de la prestigiosa marca italiana Wave. Para peces de agua fría como Goldfish o Betta. Ideal para que niños y adultos disfruten de la acuarofilia sin complicaciones. Medidas: Ø 25cm.                    <a href="http://www.misterguau.com/index.php/pecera-de-cristal-globo-wave-o-25cm.html" title="Pecera de cristal Globo Wave (Ø 25cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/perlon-sandimas-para-acuario.html" title="Perlón Sandimas para acuario">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/e/perlon_san_dimas_bolsa_100gr_23171.jpg"  alt="Perlón Sandimas para acuario" title="Perlón Sandimas para acuario" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/perlon-sandimas-para-acuario.html" title="Perlón Sandimas para acuario"><b>Perlón Sandimas para acuario</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/perlon-sandimas-para-acuario.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/380/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El perlón es el medio de filtrado más económico para los acuarios de agua dulce y salada. Se puede utilizar en filtros interiores y exteriores y se puede lavar varias veces para una mejor durabilidad. Cantidad: 100gr                    <a href="http://www.misterguau.com/index.php/perlon-sandimas-para-acuario.html" title="Perlón Sandimas para acuario">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/piedra-decorativa-jaspe-rojo.html" title="Piedra decorativa Jaspe rojo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/piedra_jaspe_rojo_3513-sm.jpg"  alt="Piedra decorativa Jaspe rojo" title="Piedra decorativa Jaspe rojo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/piedra-decorativa-jaspe-rojo.html" title="Piedra decorativa Jaspe rojo"><b>Piedra decorativa Jaspe rojo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/piedra-decorativa-jaspe-rojo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4993/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Piedra de jade rojo totalmente natural tratado para ser apto como decoración de acuario. Mineral atóxico que decorará nuestro acuario aportando recovecos para que nuestros peces jueguen, se escondan o simplemente se sientan protegidos. Las medidas y formas son aleatorias y surtidas. Se venden unitariamente. Medidas aproximadas: 8-10cm largo x 6-8 cm alto                    <a href="http://www.misterguau.com/index.php/piedra-decorativa-jaspe-rojo.html" title="Piedra decorativa Jaspe rojo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/piedra-difusora-de-aire-cilindro.html" title="Piedra difusora de aire Cilindro">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/i/difusor_aire_cilindro_a8002604_2.jpg"  alt="Piedra difusora de aire Cilindro" title="Piedra difusora de aire Cilindro" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/piedra-difusora-de-aire-cilindro.html" title="Piedra difusora de aire Cilindro"><b>Piedra difusora de aire Cilindro</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/piedra-difusora-de-aire-cilindro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3751/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Gracias al uso de las piedras difusoras se consigue una mayor difusión de las burbujas de aire, aumentando la circulación del agua y su oxigenación en el acuario. Fácil de usar: se conecta la salida de la manguera de la comba de aire a la piedra y podremos disfrutar de una columna de burbujas que saldrá de ella. Con forma de cilindro. Medidas: 2cm x ø1,4cm                    <a href="http://www.misterguau.com/index.php/piedra-difusora-de-aire-cilindro.html" title="Piedra difusora de aire Cilindro">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/piedra-difusora-de-aire-circulo.html" title="Piedra difusora de aire Círculo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/i/difusor_de_aire_-_circulo_a8002601_2.jpg"  alt="Piedra difusora de aire Círculo" title="Piedra difusora de aire Círculo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/piedra-difusora-de-aire-circulo.html" title="Piedra difusora de aire Círculo"><b>Piedra difusora de aire Círculo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/piedra-difusora-de-aire-circulo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3750/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Gracias al uso de las piedras difusoras se consigue una mayor difusión de las burbujas de aire, aumentando la circulación del agua y su oxigenación en el acuario. Fácil de usar: se conecta la salida de la manguera de la comba de aire a la piedra y podremos disfrutar de una columna de burbujas que saldrá de ella. Con forma circular. Medidas: Ø2cm                    <a href="http://www.misterguau.com/index.php/piedra-difusora-de-aire-circulo.html" title="Piedra difusora de aire Círculo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/planta-para-acuario-mix-glow-15cm.html" title="Planta para acuario Mix Glow (15cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mix_planta_glow_15cm_26843.jpg"  alt="Planta para acuario Mix Glow (15cm)" title="Planta para acuario Mix Glow (15cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/planta-para-acuario-mix-glow-15cm.html" title="Planta para acuario Mix Glow (15cm)"><b>Planta para acuario Mix Glow (15cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/planta-para-acuario-mix-glow-15cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1993/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mezcla de plantas en colores Glow con base de poli-resina. Ideal para decorar nuestro acuario y proporcionar a nuestros peces una grata experiencia de colores y un lugar donde esconderse o jugar, proporcionándoles así relajación y un entretenimiento diario. Haz feliz a tus peces decorando su acuario!. Medidas: 15cm                    <a href="http://www.misterguau.com/index.php/planta-para-acuario-mix-glow-15cm.html" title="Planta para acuario Mix Glow (15cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/planta-y-vasija-difusora-con-base-20cm.html" title="Planta y vasija difusora con base (20cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/l/planta_y_vasija_difusor_con_base_20cm_26845.jpg"  alt="Planta y vasija difusora con base (20cm)" title="Planta y vasija difusora con base (20cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/planta-y-vasija-difusora-con-base-20cm.html" title="Planta y vasija difusora con base (20cm)"><b>Planta y vasija difusora con base (20cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/planta-y-vasija-difusora-con-base-20cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1992/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonito elemento decorativo para nuestro acuario realizado en resina y plástico no tóxico. La vasija con tubito para acoplar el difusor quedará muy bella convirtiéndose en un nucleo aireador. El conjunto proporciona a nuestros peces una grata experiencia de colores y un lugar donde esconderse o jugar, proporcionándoles así relajación y un entretenimiento diario. Haz feliz a tus peces decorando su acuario!. Medidas: 20cm                     <a href="http://www.misterguau.com/index.php/planta-y-vasija-difusora-con-base-20cm.html" title="Planta y vasija difusora con base (20cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/puente-de-londres-18cm.html" title="Puente de Londres (18cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/u/puente_de_londres_peq.jpg"  alt="Puente de Londres (18cm)" title="Puente de Londres (18cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/puente-de-londres-18cm.html" title="Puente de Londres (18cm)"><b>Puente de Londres (18cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															34,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/puente-de-londres-18cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1683/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Preciosa figura para acuario que recrea el famoso puente de Londres. Con muchísimos detalles y colores vivos para que nuestros peces disfruten de lo lindo persiguiéndose y escondiéndose en él. Realizado en resina no tóxica. Medidas: 18*7.5cm                    <a href="http://www.misterguau.com/index.php/puente-de-londres-18cm.html" title="Puente de Londres (18cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-salabre-verde.html" title="Salabre Verde Wave">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/a/salabre_verde_ny_2.jpg"  alt="Salabre Verde Wave" title="Salabre Verde Wave" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-salabre-verde.html" title="Salabre Verde Wave"><b>Salabre Verde Wave</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-salabre-verde.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1318/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Salabre con red para ayudarnos a recoger limpiamente los peces del acuario en caso de limpieza del acuario, etc. Disponible en 3 tamaños: S (8cm) - M (10cm) - L (12cm)                    <a href="http://www.misterguau.com/index.php/wave-salabre-verde.html" title="Salabre Verde Wave">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/set-de-acuario-lollipol-16l.html" title="Set de acuario Lollipol (16l)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/e/set_de_acuario_lollipop_16l_-_36cm_403578.jpg"  alt="Set de acuario Lollipol (16l)" title="Set de acuario Lollipol (16l)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/set-de-acuario-lollipol-16l.html" title="Set de acuario Lollipol (16l)"><b>Set de acuario Lollipol (16l)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															39,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/set-de-acuario-lollipol-16l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4044/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Acuario con accesorios realizado en cristal acrílico de gran transparencia y durabilidad. Incluye filtro Barracuda con circulación regulable + gravilla multicolor + red para peces. Medidas: 16l.- 36x22x26cm                    <a href="http://www.misterguau.com/index.php/set-de-acuario-lollipol-16l.html" title="Set de acuario Lollipol (16l)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-100w.html" title="Termocalentador Tetratec HT 100W">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termocalentador_tetratec_ht_100w.jpg"  alt="Termocalentador Tetratec HT 100W" title="Termocalentador Tetratec HT 100W" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-100w.html" title="Termocalentador Tetratec HT 100W"><b>Termocalentador Tetratec HT 100W</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termocalentador-tetratec-ht-100w.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/830/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Calentador con 100W de potencia. Botón de ajuste de temperatura entre 20-32ºC en intervalos de 0.5ºC. Sumergible. Piloto de control para la fase de calentamiento. Alambre calefactor de niquel-cromo. Distribución uniforme del calor. Tubo de vidrio de gran calidad, resistente al calor y a los impactos. Fijación segura. Homologado. Para acuarios entre 100-150l.                    <a href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-100w.html" title="Termocalentador Tetratec HT 100W">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-25w.html" title="Termocalentador Tetratec HT 25W">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termocalentador_tetratec_ht_25w.jpg"  alt="Termocalentador Tetratec HT 25W" title="Termocalentador Tetratec HT 25W" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-25w.html" title="Termocalentador Tetratec HT 25W"><b>Termocalentador Tetratec HT 25W</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termocalentador-tetratec-ht-25w.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/833/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Calentador con 25W de potencia. Botón de ajuste de temperatura entre 20-32ºC en intervalos de 0.5ºC. Sumergible. Piloto de control para la fase de calentamiento. Alambre calefactor de niquel-cromo. Distribución uniforme del calor. Tubo de vidrio de gran calidad, resistente al calor y a los impactos. Fijación segura. Homologado. Para acuarios entre 10-25l.                    <a href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-25w.html" title="Termocalentador Tetratec HT 25W">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-50w.html" title="Termocalentador Tetratec HT 50W">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termocalentador_tetratec_ht_50w.jpg"  alt="Termocalentador Tetratec HT 50W" title="Termocalentador Tetratec HT 50W" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-50w.html" title="Termocalentador Tetratec HT 50W"><b>Termocalentador Tetratec HT 50W</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termocalentador-tetratec-ht-50w.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/835/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Calentador con 50W de potencia. Botón de ajuste de temperatura entre 20-32ºC en intervalos de 0.5ºC. Sumergible. Piloto de control para la fase de calentamiento. Alambre calefactor de niquel-cromo. Distribución uniforme del calor. Tubo de vidrio de gran calidad, resistente al calor y a los impactos. Fijación segura. Homologado. Para acuarios entre 25-60l.                    <a href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-50w.html" title="Termocalentador Tetratec HT 50W">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-75w.html" title="Termocalentador Tetratec HT 75W">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termocalentador_tetratec_ht_75w.jpg"  alt="Termocalentador Tetratec HT 75W" title="Termocalentador Tetratec HT 75W" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-75w.html" title="Termocalentador Tetratec HT 75W"><b>Termocalentador Tetratec HT 75W</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termocalentador-tetratec-ht-75w.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/836/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Calentador con 75W de potencia. Botón de ajuste de temperatura entre 20-32ºC en intervalos de 0.5ºC. Sumergible. Piloto de control para la fase de calentamiento. Alambre calefactor de niquel-cromo. Distribución uniforme del calor. Tubo de vidrio de gran calidad, resistente al calor y a los impactos. Fijación segura. Homologado. Para acuarios entre 60-100l.                    <a href="http://www.misterguau.com/index.php/termocalentador-tetratec-ht-75w.html" title="Termocalentador Tetratec HT 75W">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termocalentdor-hydor-theo-2-potencias.html" title="Termocalentdor Hydor Theo (2 potencias)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termocalentador_theo_25w_t11700.jpg"  alt="Termocalentdor Hydor Theo (2 potencias)" title="Termocalentdor Hydor Theo (2 potencias)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termocalentdor-hydor-theo-2-potencias.html" title="Termocalentdor Hydor Theo (2 potencias)"><b>Termocalentdor Hydor Theo (2 potencias)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termocalentdor-hydor-theo-2-potencias.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1016/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Termocalentador preciso y de alta seguridad debido a la exclusiva elaboración de su probeta a prueba de golpes y el empleo de la exclusiva tecnología PTC (Positive Thermal Coefficient) en la que la tradicional resistencia metálica ha sido sustituida por una lámina de un polímetro especial serigrafiada con tinta calefactora.﻿ Resiste los shocks térmicos.﻿ Libre posición en el acuario: vertical y horizontal, también completamente sumergido.﻿ Potencias: 25W - 50W                    <a href="http://www.misterguau.com/index.php/termocalentdor-hydor-theo-2-potencias.html" title="Termocalentdor Hydor Theo (2 potencias)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termometro-digital-para-acuario-tetratech-th35.html" title="Termómetro digital para acuario Tetratech TH35">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termometro_tetratec_th_35_sdimas_23176.jpg"  alt="Termómetro digital para acuario Tetratech TH35" title="Termómetro digital para acuario Tetratech TH35" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termometro-digital-para-acuario-tetratech-th35.html" title="Termómetro digital para acuario Tetratech TH35"><b>Termómetro digital para acuario Tetratech TH35</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termometro-digital-para-acuario-tetratech-th35.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3470/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Termómetro de cristal líquido muy preciso. Se fija en la cara exterior de la luna del acuario. Medición precisa de temperaturas entre 20° C y 35° C en la versión TH 35. Fácil lectura. Diseño compacto y discreto.                    <a href="http://www.misterguau.com/index.php/termometro-digital-para-acuario-tetratech-th35.html" title="Termómetro digital para acuario Tetratech TH35">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termometro-digital-para-acuario-wave.html" title="Termómetro digital para acuario Wave">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termometro_digital_ac500008.jpg"  alt="Termómetro digital para acuario Wave" title="Termómetro digital para acuario Wave" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termometro-digital-para-acuario-wave.html" title="Termómetro digital para acuario Wave"><b>Termómetro digital para acuario Wave</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termometro-digital-para-acuario-wave.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3472/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Termómetro digital para todo tipo de acuarios, con capacidad de medición desde 18 a 34ºC ( 64ºF - 93ºF).                    <a href="http://www.misterguau.com/index.php/termometro-digital-para-acuario-wave.html" title="Termómetro digital para acuario Wave">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termometro-para-acuario-con-ventosa-sandimas.html" title="Termómetro para acuario con ventosa Sandimas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termometro_san_dimas_blister_23285_c-ventosa.jpg"  alt="Termómetro para acuario con ventosa Sandimas" title="Termómetro para acuario con ventosa Sandimas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termometro-para-acuario-con-ventosa-sandimas.html" title="Termómetro para acuario con ventosa Sandimas"><b>Termómetro para acuario con ventosa Sandimas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termometro-para-acuario-con-ventosa-sandimas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3471/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Termómetro de cristal con ventosas para acuarios.﻿                     <a href="http://www.misterguau.com/index.php/termometro-para-acuario-con-ventosa-sandimas.html" title="Termómetro para acuario con ventosa Sandimas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-algumin-solucion-anti-algas.html" title="Tetra Algumin solución anti-algas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_algumin.jpg"  alt="Tetra Algumin solución anti-algas" title="Tetra Algumin solución anti-algas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-algumin-solucion-anti-algas.html" title="Tetra Algumin solución anti-algas"><b>Tetra Algumin solución anti-algas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-algumin-solucion-anti-algas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3051/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La mejor solución contra las algas de nuestro acuario. Lucha eficazmente de manera suave y biológica contra las algas e impide el desarrollo de las mismas gracias a su alto contenido de sustancias húmicas. Contribuye a mantener el equilibrio biológico del acuario y fomenta el crecimiento saludable de las plantas. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/tetra-algumin-solucion-anti-algas.html" title="Tetra Algumin solución anti-algas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-alimento-betta.html" title="Tetra alimento Betta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_betta_100ml_11047_1.jpg"  alt="Tetra alimento Betta" title="Tetra alimento Betta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-alimento-betta.html" title="Tetra alimento Betta"><b>Tetra alimento Betta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-alimento-betta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/911/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo de gran valor, específicamente desarrollado para Bette splendens (peces combatientes) y otros peces laberíntidos. Contiene proteínas en la proporción adecuada a la demanda de estos peces mediante la adición de Shrimps y Krill sus proteínas animales fomentan el crecimiento y el desarrollo de las imponentes aletas con potenciadores del color naturales. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/tetra-alimento-betta.html" title="Tetra alimento Betta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-aquasafe.html" title="Tetra Aquasafe">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_aquasafe.jpg"  alt="Tetra Aquasafe" title="Tetra Aquasafe" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-aquasafe.html" title="Tetra Aquasafe"><b>Tetra Aquasafe</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-aquasafe.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/839/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Para el tratamiento del agresivo agua de grifo, convirtiéndola de inmediato en agua de acuario acorde con las necesidades de los peces y similar al agua de su hábitat natural - con BioExtract para agua saludable y clara. 2 formatos: 100ml / 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-aquasafe.html" title="Tetra Aquasafe">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-aquasafe-goldfish-agua-fria.html" title="Tetra Aquasafe Goldfish (Agua fría)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_aquasafe_agua_fria_100ml_2.jpg"  alt="Tetra Aquasafe Goldfish (Agua fría)" title="Tetra Aquasafe Goldfish (Agua fría)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-aquasafe-goldfish-agua-fria.html" title="Tetra Aquasafe Goldfish (Agua fría)"><b>Tetra Aquasafe Goldfish (Agua fría)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-aquasafe-goldfish-agua-fria.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2936/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto para al tratamiento del agua de grifo, específicamente para carpines dorados y otros peces de agua fría. Convierte el agua de grifo en agua de acuario segura e idónea para los peces. Contiene coloides para proteger las mucosas y las aletas, aumenta las defensas. Formatos: 100ml, 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-aquasafe-goldfish-agua-fria.html" title="Tetra Aquasafe Goldfish (Agua fría)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-cichlid-sticks.html" title="Tetra Cichlid cíclidos (Sticks)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_cichlid.jpg"  alt="Tetra Cichlid cíclidos (Sticks)" title="Tetra Cichlid cíclidos (Sticks)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-cichlid-sticks.html" title="Tetra Cichlid cíclidos (Sticks)"><b>Tetra Cichlid cíclidos (Sticks)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-cichlid-sticks.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/840/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para cíclidos grandes. Fomenta el bienestar, la coloración natural y el crecimiento. En sticks. Para los que les gusta comer en la superficie del agua. Con fórmula BioActive que alarga la vida y salud. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-cichlid-sticks.html" title="Tetra Cichlid cíclidos (Sticks)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-crystalwater.html" title="Tetra Crystalwater">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_crystalwater.jpg"  alt="Tetra Crystalwater" title="Tetra Crystalwater" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-crystalwater.html" title="Tetra Crystalwater"><b>Tetra Crystalwater</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-crystalwater.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/841/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Clarificación rápida del agua de acuario, la deja libre de enturbiamiento. Las partículas que enturbian el agua son ligadas y luego filtradas fuera del agua por el filtro de acuario. Para todos los acuarios de agua dulce. 2 formatos: 100ml, 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-crystalwater.html" title="Tetra Crystalwater">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-discus.html" title="Tetra Discus (Granulado)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_discus.jpg"  alt="Tetra Discus (Granulado)" title="Tetra Discus (Granulado)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-discus.html" title="Tetra Discus (Granulado)"><b>Tetra Discus (Granulado)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-discus.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/842/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento principal para todos los peces disco. Granulado. Contiene todos los nutrientes vitales, tales como vitaminas y oligoelementos. Contiene todos los nutrientes vitales, vitaminas y elementos traza. Formato: 250ml                    <a href="http://www.misterguau.com/index.php/tetra-discus.html" title="Tetra Discus (Granulado)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-easy-balance.html" title="Tetra Easy Balance">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_easy_balance_100ml_13116.jpg"  alt="Tetra Easy Balance" title="Tetra Easy Balance" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-easy-balance.html" title="Tetra Easy Balance"><b>Tetra Easy Balance</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-easy-balance.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3050/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dada la combinación de sustancias activas altamente eficaz, conserva el equilibrio biológico-químico hasta 6 meses. Los valores de pH y alcalinidad ( KH ) se estabilizan de forma fiable, evitando así los cambios bruscos y peligrosos. Reduce los niveles de nitratos, con los granulos NITRABAN!, y fosfatos. Agrega vitaminas y oligoelementos. Formatos: 100ml, 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-easy-balance.html" title="Tetra Easy Balance">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-fresh-delica-larva-roja.html" title="Tetra Fresh Delica Larva roja">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_fresh_delica_larva_roja.jpg"  alt="Tetra Fresh Delica Larva roja" title="Tetra Fresh Delica Larva roja" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-fresh-delica-larva-roja.html" title="Tetra Fresh Delica Larva roja"><b>Tetra Fresh Delica Larva roja</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-fresh-delica-larva-roja.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/845/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Larvas rojas de mosquito en gelatina altamente nutritivo para la alimentación de nuestro peces ornamentales tanto de agua dulce como salada. Contiene hasta el doble de nutrientes que el alimento congelado. Con vitaminas y minerales adicionales. Formato: 50gr.                    <a href="http://www.misterguau.com/index.php/tetra-fresh-delica-larva-roja.html" title="Tetra Fresh Delica Larva roja">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-gammarus-gambitas.html" title="Tetra Gammarus (Gambitas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_gammarus_1.jpg"  alt="Tetra Gammarus (Gambitas)" title="Tetra Gammarus (Gambitas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-gammarus-gambitas.html" title="Tetra Gammarus (Gambitas)"><b>Tetra Gammarus (Gambitas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-gammarus-gambitas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1208/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Valioso alimento natural para tortugas acuáticas con camarones de arroyo (Gammarus) enteros, asegura una dieta saludable y acorde con la especie. También delicioso para algunos tipos de peces. 4 Formatos: 100ml - 250ml - 500ml - 1 l.                    <a href="http://www.misterguau.com/index.php/tetra-gammarus-gambitas.html" title="Tetra Gammarus (Gambitas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-animin-goldfish.html" title="Tetra Goldfish (Escamas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_animin_100ml_2.jpg"  alt="Tetra Goldfish (Escamas)" title="Tetra Goldfish (Escamas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-animin-goldfish.html" title="Tetra Goldfish (Escamas)"><b>Tetra Goldfish (Escamas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,10&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-animin-goldfish.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2941/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento en escamas con fórmula BioActive® para todos los carpines dorados y otros peces de agua fría. Mezcla de escamas óptimamente equilibrada para una alimentación variada. Contiene todos los nutrientes y constituyentes importantes así como elementos traza. Formatos: 100ml, 250ml, 1 litro.                    <a href="http://www.misterguau.com/index.php/tetra-animin-goldfish.html" title="Tetra Goldfish (Escamas)">Saber más</a><br><br>
					<span class="required"><strong>11% de Dto en 100ml.! Ahorra 0.35&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-animin-granulado-color.html" title="Tetra Goldfish Color (Granulado)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_animin_granulado_color.jpg"  alt="Tetra Goldfish Color (Granulado)" title="Tetra Goldfish Color (Granulado)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-animin-granulado-color.html" title="Tetra Goldfish Color (Granulado)"><b>Tetra Goldfish Color (Granulado)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-animin-granulado-color.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/837/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Especialmente formulado para carpines dorados y peces de agua fría. Sus perlas flotantes contienen valiosos ingredientes vegetales y una alta proporción de algas Spirulina para desplegar los colores naturales. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-animin-granulado-color.html" title="Tetra Goldfish Color (Granulado)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-animin-crisps.html" title="Tetra Goldfish Crisps (Copos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_animin_pro_100ml.jpg"  alt="Tetra Goldfish Crisps (Copos)" title="Tetra Goldfish Crisps (Copos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-animin-crisps.html" title="Tetra Goldfish Crisps (Copos)"><b>Tetra Goldfish Crisps (Copos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-animin-crisps.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1328/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo fabricado mediante un proceso a baja temperatura, unico de tetra, para lograr un mayor valor nutritivo gracias a la proporcion optimizada proteina/grasa. Formatos: 100ml, 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-animin-crisps.html" title="Tetra Goldfish Crisps (Copos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-animin-energy-sticks.html" title="Tetra Goldfish Energy (Sticks)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_animin_energy_sticks.jpg"  alt="Tetra Goldfish Energy (Sticks)" title="Tetra Goldfish Energy (Sticks)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-animin-energy-sticks.html" title="Tetra Goldfish Energy (Sticks)"><b>Tetra Goldfish Energy (Sticks)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-animin-energy-sticks.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/838/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento para carpines dorados y peces de agua fría. Contienen una proporción optimizada de grasas que, gracias a la forma de stick, son ingeridas de forma comprimida y sirven. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-animin-energy-sticks.html" title="Tetra Goldfish Energy (Sticks)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-animin-holidays.html" title="Tetra Goldfish Holidays (Vacaciones)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_animin_holiday_2.jpg"  alt="Tetra Goldfish Holidays (Vacaciones)" title="Tetra Goldfish Holidays (Vacaciones)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-animin-holidays.html" title="Tetra Goldfish Holidays (Vacaciones)"><b>Tetra Goldfish Holidays (Vacaciones)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-animin-holidays.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2102/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comida de vacaciones para todos los carpines dorados. Alimentación saludable durante hasta 14 días. Fórmula patentada con deliciosas dafnias, vitaminas, oligoelementos y minerales vitales. No enturbia y no deteriora el agua<br />
fácil de dosificar. Formato: 2x12gr                    <a href="http://www.misterguau.com/index.php/tetra-animin-holidays.html" title="Tetra Goldfish Holidays (Vacaciones)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-guppy.html" title="Tetra Guppy">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_guppy_100ml_11046.jpg"  alt="Tetra Guppy" title="Tetra Guppy" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-guppy.html" title="Tetra Guppy"><b>Tetra Guppy</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-guppy.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4689/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nutritivo y completo alimento para cubrir todas las necesidades de peces ornamentales tropicales que ornamentan tan deliciosamente nuestro acuario con sus colores. Contiene algas espirulinas con alta proporción de proteína vegetal altamente digerible, proporcionan gran variedad de aminoácidos esenciales en las proporciones adecuadas . Excelente fuente de minerales y vitaminas. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/tetra-guppy.html" title="Tetra Guppy">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-limpiafondos-gc30.html" title="Tetra Limpiafondos GC30">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/l/i/limpia_fondos_tetra_gc_30.jpg"  alt="Tetra Limpiafondos GC30" title="Tetra Limpiafondos GC30" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-limpiafondos-gc30.html" title="Tetra Limpiafondos GC30"><b>Tetra Limpiafondos GC30</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															17,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-limpiafondos-gc30.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2937/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Limpiafondos confortable y fácil de manejar. Con válvula rápida para la aspiración del agua. Con rejilla protectora que evita que se aspiren peces o gravilla.  Recomendado para acuarios de 20 - 60 litros. <br />
                    <a href="http://www.misterguau.com/index.php/tetra-limpiafondos-gc30.html" title="Tetra Limpiafondos GC30">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-limpiafondos-gc40.html" title="Tetra Limpiafondos GC40">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/l/i/limpia_fondos_tetra_gc_40_23071.jpg"  alt="Tetra Limpiafondos GC40" title="Tetra Limpiafondos GC40" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-limpiafondos-gc40.html" title="Tetra Limpiafondos GC40"><b>Tetra Limpiafondos GC40</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-limpiafondos-gc40.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4141/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Limpiafondos confortable y fácil de manejar. Con válvula rápida para la aspiración del agua. Con rejilla protectora que evita que se aspiren peces o gravilla.  Con sistema de cebado automático, por lo que no es necesario aspirar con la boca. Recomendado para acuarios de 60 - 120 litros. <br />
                    <a href="http://www.misterguau.com/index.php/tetra-limpiafondos-gc40.html" title="Tetra Limpiafondos GC40">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-medica-fungi-stop-contra-hongos.html" title="Tetra Medica Fungi-Stop contra hongos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_medica_fungi_stop_100ml_13362.jpg"  alt="Tetra Medica Fungi-Stop contra hongos" title="Tetra Medica Fungi-Stop contra hongos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-medica-fungi-stop-contra-hongos.html" title="Tetra Medica Fungi-Stop contra hongos"><b>Tetra Medica Fungi-Stop contra hongos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-medica-fungi-stop-contra-hongos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1642/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tetra Medica FungiStop es un medicamento muy efectivo contra los hongos, las infecciones bacterianas externas y en caso de heridas. Medicamento para peces de agua dulce. Remedio especial altamente activo, que además, ayuda contra el ataque de la freza por hongos. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/tetra-medica-fungi-stop-contra-hongos.html" title="Tetra Medica Fungi-Stop contra hongos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-medica-general-tonic-enfermedades.html" title="Tetra Medica General tonic (Enfermedades)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_medica_general_tonic_100ml_13363.jpg"  alt="Tetra Medica General tonic (Enfermedades)" title="Tetra Medica General tonic (Enfermedades)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-medica-general-tonic-enfermedades.html" title="Tetra Medica General tonic (Enfermedades)"><b>Tetra Medica General tonic (Enfermedades)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-medica-general-tonic-enfermedades.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1167/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tetra Medica General Tonic es un medicamento para peces ornamentales tropicales para el tratamiento de infecciones bacterianas, enfermedades ectoparasitarias, invasión de hongos y el tratamiento preventivo en caso de heridas. Amplio espectro. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/tetra-medica-general-tonic-enfermedades.html" title="Tetra Medica General tonic (Enfermedades)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-medical-contralck-contra-punto-blanco-o-parasitos.html" title="Tetra Medical Contralck (contra punto blanco o parásitos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_medica_contralck_100ml_13361.jpg"  alt="Tetra Medical Contralck (contra punto blanco o parásitos)" title="Tetra Medical Contralck (contra punto blanco o parásitos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-medical-contralck-contra-punto-blanco-o-parasitos.html" title="Tetra Medical Contralck (contra punto blanco o parásitos)"><b>Tetra Medical Contralck (contra punto blanco o parásitos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-medical-contralck-contra-punto-blanco-o-parasitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/370/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tetra Medica Contralck tiene una combinación de principios activos que actúan para tratar la enfermedad del punto blanco y otros ectoparásitos como Costa y Chilodonella en peces ornamentales tropicales. Se trata de una de las enfermedades más comunes en nuestros acuarios, por lo que es recomendable tener siempre a mano un tratamiento contra estos protozoos tan molestos. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/tetra-medical-contralck-contra-punto-blanco-o-parasitos.html" title="Tetra Medical Contralck (contra punto blanco o parásitos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-min.html" title="Tetra Min (Escamas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_min.jpg"  alt="Tetra Min (Escamas)" title="Tetra Min (Escamas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-min.html" title="Tetra Min (Escamas)"><b>Tetra Min (Escamas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,80&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-min.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/848/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para que todos los peces ornamentales gocen de una larga vida con salud. Biológicamente equilibrado para una mayor energía, intensificación de los colores y vitalidad. En copos. Formatos: 100ml - 250ml - 500ml                    <a href="http://www.misterguau.com/index.php/tetra-min.html" title="Tetra Min (Escamas)">Saber más</a><br><br>
					<span class="required"><strong>18% de Dto en 100ml.! Ahorra 0.85&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetramin-granulado.html" title="Tetra Min (Granulado)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_min_granulado_2.jpg"  alt="Tetra Min (Granulado)" title="Tetra Min (Granulado)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetramin-granulado.html" title="Tetra Min (Granulado)"><b>Tetra Min (Granulado)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetramin-granulado.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3335/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo en forma de granulado para todos los peces ornamentales.  Los gránulos contienen proteínas, vitaminas, potenciadores del color y leticina para potenciar el crecimiento, las defensas, los vivos colores y vitalidad de nuestros peces. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/tetramin-granulado.html" title="Tetra Min (Granulado)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-min-baby.html" title="Tetra Min Baby">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_min_baby.jpg"  alt="Tetra Min Baby" title="Tetra Min Baby" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-min-baby.html" title="Tetra Min Baby"><b>Tetra Min Baby</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-min-baby.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/849/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento ideal para el crecimiento de los alevines tropicales jóvenes de menos de 1cm. Rico en proteínas. Administrar varias veces al día en pequeñas porciones. La vitamina C refuerza el sistema inmunitario, contribuye al crecimiento sano e impide la aparición de carencia nutricional. Formato: 66ml (30gr)                    <a href="http://www.misterguau.com/index.php/tetra-min-baby.html" title="Tetra Min Baby">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-min-crisps.html" title="Tetra Min Crisps">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_min_crisps.jpg"  alt="Tetra Min Crisps" title="Tetra Min Crisps" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-min-crisps.html" title="Tetra Min Crisps"><b>Tetra Min Crisps</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-min-crisps.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/850/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para todos los peces ornamentales. Mix crujiente. Su fórmula BioActive patentada mejora las funciones corporales y aumenta de forma probada las defensas. Formatos: 100ml - 250ml                    <a href="http://www.misterguau.com/index.php/tetra-min-crisps.html" title="Tetra Min Crisps">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-min-holidays.html" title="Tetra Min Holidays (Vacaciones)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetramin_holiday.jpg"  alt="Tetra Min Holidays (Vacaciones)" title="Tetra Min Holidays (Vacaciones)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-min-holidays.html" title="Tetra Min Holidays (Vacaciones)"><b>Tetra Min Holidays (Vacaciones)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-min-holidays.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/857/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comida indicada para todos los peces ornamentales en vacaciones. Fórmula patentada con dafnias, vitaminas, oligoelementos y minerales vitales. No enturbia ni deteriora el agua. Alimentación completa para 14 días. Formato: 30gr                    <a href="http://www.misterguau.com/index.php/tetra-min-holidays.html" title="Tetra Min Holidays (Vacaciones)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-menu.html" title="Tetra Min Menú (Escamas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_menu.jpg"  alt="Tetra Min Menú (Escamas)" title="Tetra Min Menú (Escamas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-menu.html" title="Tetra Min Menú (Escamas)"><b>Tetra Min Menú (Escamas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-menu.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/847/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para que todos los peces ornamentales gocen de una larga vida con salud. con la fórmula BioActive patentada*. Aumenta su resistencia, aporta vitalidad, favorece un crecimiento sano y reaviva los colores. Contiene todos los nutrientes importantes. Formatos: 100ml - 250ml                    <a href="http://www.misterguau.com/index.php/tetra-menu.html" title="Tetra Min Menú (Escamas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-min-weekend.html" title="Tetra Min Weekend (Fin de semana)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_weekend_20sticks_11073.jpg"  alt="Tetra Min Weekend (Fin de semana)" title="Tetra Min Weekend (Fin de semana)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-min-weekend.html" title="Tetra Min Weekend (Fin de semana)"><b>Tetra Min Weekend (Fin de semana)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-min-weekend.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1329/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Palitos de comida compactos que proveen a todos los peces ornamentales con la nutrición que requieren durante fines de semana o vacaciones. Contiene 40 Sticks compactos.                    <a href="http://www.misterguau.com/index.php/tetra-min-weekend.html" title="Tetra Min Weekend (Fin de semana)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-plantamin.html" title="Tetra PlantaMin">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_plantamin_100ml_13141.jpg"  alt="Tetra PlantaMin" title="Tetra PlantaMin" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-plantamin.html" title="Tetra PlantaMin"><b>Tetra PlantaMin</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-plantamin.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/910/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Fertilizante intensivo de hierro en forma líquida que hace que las plantas crezcan con exuberancia con un verdor intenso. Contiene un complejo férrico así como otros valiosos elementos traza (p. ej. manganeso), así como potasio, un importante nutriente principal para las plantas los nutrientes son absorbidos a través de las hojas. Formato: 100ml, 250ml.                    <a href="http://www.misterguau.com/index.php/tetra-plantamin.html" title="Tetra PlantaMin">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-pond-escamas.html" title="Tetra Pond (Escamas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_pond_escamas.jpg"  alt="Tetra Pond (Escamas)" title="Tetra Pond (Escamas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-pond-escamas.html" title="Tetra Pond (Escamas)"><b>Tetra Pond (Escamas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-pond-escamas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/851/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo en forma de escamas, especialmente indicado para todos los peces pequeños y jóvenes en el estanque de jardín. Compuesto por 4 tipos de copos de distinta composición que garantizan crecimiento y vitalidad, previenen carencias y reaviva colores, contienen oligoelementos y facilitan la digestión. Formato: 1 litro                    <a href="http://www.misterguau.com/index.php/tetra-pond-escamas.html" title="Tetra Pond (Escamas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-pond-sticks.html" title="Tetra Pond (Sticks)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_pond_sticks_1l_11010.jpg"  alt="Tetra Pond (Sticks)" title="Tetra Pond (Sticks)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-pond-sticks.html" title="Tetra Pond (Sticks)"><b>Tetra Pond (Sticks)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-pond-sticks.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3827/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimentación para todos los peces del estanque de jardín en forma de sticks que flotan, aseguran una alimentación integral y biológicamente equilibrada. Contienen todos los nutrientes, vitaminas, minerales y elementos traza necesarios para el correcto desarrollo y para que tengan toda la vitalidad y energía necesaria. Formato: 1 litro.                    <a href="http://www.misterguau.com/index.php/tetra-pond-sticks.html" title="Tetra Pond (Sticks)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-pond-multimix.html" title="Tetra Pond Multimix">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_pond_multimix.jpg"  alt="Tetra Pond Multimix" title="Tetra Pond Multimix" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-pond-multimix.html" title="Tetra Pond Multimix"><b>Tetra Pond Multimix</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-pond-multimix.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/853/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Una mezcla de seleccionados alimentos en forma de escamas, sticks, tabletas y Gammarus, que corresponde a los hábitos alimentarios de todos los peces del estanque de jardín. Formato: 1 litro                    <a href="http://www.misterguau.com/index.php/tetra-pond-multimix.html" title="Tetra Pond Multimix">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-safestar-limpiador-agua.html" title="Tetra SafeStar (limpiador agua)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_safestar_50ml_13126.jpg"  alt="Tetra SafeStar (limpiador agua)" title="Tetra SafeStar (limpiador agua)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-safestar-limpiador-agua.html" title="Tetra SafeStar (limpiador agua)"><b>Tetra SafeStar (limpiador agua)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-safestar-limpiador-agua.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4171/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Eficaz para reducir al momento las sustancias tóxicas del agua, como amoniaco y nitrito. Las bacterias nitrificantes de SafeStart permiten que los peces sean introducidos inmediatamente en el acuario. Ideal para todos los acuarios de agua dulce. Formato: 50ml.                    <a href="http://www.misterguau.com/index.php/tetra-safestar-limpiador-agua.html" title="Tetra SafeStar (limpiador agua)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-tabimin.html" title="Tetra Tabimin (peces fondo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_tabimin.jpg"  alt="Tetra Tabimin (peces fondo)" title="Tetra Tabimin (peces fondo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-tabimin.html" title="Tetra Tabimin (peces fondo)"><b>Tetra Tabimin (peces fondo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-tabimin.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/855/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento en tabletas para todos los peces que viven cerca del fondo. Contiene todos los nutrientes vitales. Una tableta por siluro en función del tamaño un poco antes de apagar las luces. Formato: 120 tabletas - 275 tabletas                    <a href="http://www.misterguau.com/index.php/tetra-tabimin.html" title="Tetra Tabimin (peces fondo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-test-de-agua-6-en-1.html" title="Tetra test de agua 6 en 1">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_test_6_en_1.jpg"  alt="Tetra test de agua 6 en 1" title="Tetra test de agua 6 en 1" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-test-de-agua-6-en-1.html" title="Tetra test de agua 6 en 1"><b>Tetra test de agua 6 en 1</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															27,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-test-de-agua-6-en-1.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2713/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tiras reactivas para determinar la calidad del agua en segundos. Comprueba 6 importantes valores del agua en un solo paso: dureza total y dureza de carbonatos (GH + KH), nitrito (NO2), nitrato (NO3), el valor ph y el cloro para acuarios de agua dulce.                    <a href="http://www.misterguau.com/index.php/tetra-test-de-agua-6-en-1.html" title="Tetra test de agua 6 en 1">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-test-phi-agua-dulce.html" title="Tetra test PHI (Agua dulce)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_test_phi_-agua_dulce.jpg"  alt="Tetra test PHI (Agua dulce)" title="Tetra test PHI (Agua dulce)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-test-phi-agua-dulce.html" title="Tetra test PHI (Agua dulce)"><b>Tetra test PHI (Agua dulce)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-test-phi-agua-dulce.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2715/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Para mediciones exactas del valor pH en agua dulce. Para todos los acuarios de agua dulce. Alta estabilidad a largo plazo. Gran alcance. Buena estabilidad a largo plazo. Formato: 50 tests                    <a href="http://www.misterguau.com/index.php/tetra-test-phi-agua-dulce.html" title="Tetra test PHI (Agua dulce)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-watermix.html" title="Tetra WaferMix (Comprimidos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_wafermix.jpg"  alt="Tetra WaferMix (Comprimidos)" title="Tetra WaferMix (Comprimidos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-watermix.html" title="Tetra WaferMix (Comprimidos)"><b>Tetra WaferMix (Comprimidos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-watermix.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/856/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mixtura de comida para peces de fondo carnívoros, fitófagos y cangrejos. Los Wafer verdes con valiosas algas Spirulina son específicos para los peces de fondo y permiten ser mordisqueados. Gracias a su consistencia sólida no enturbia el agua. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/tetra-watermix.html" title="Tetra WaferMix (Comprimidos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetraplantastic-cabomba-plus-20-25cm.html" title="Tetraplantastic Cabomba Plus (20-25cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetraplantastic_cabomba_plus.jpg"  alt="Tetraplantastic Cabomba Plus (20-25cm)" title="Tetraplantastic Cabomba Plus (20-25cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetraplantastic-cabomba-plus-20-25cm.html" title="Tetraplantastic Cabomba Plus (20-25cm)"><b>Tetraplantastic Cabomba Plus (20-25cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetraplantastic-cabomba-plus-20-25cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4120/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Plantas plástica de la prestigiosa casa Tetra, especialista en acuarios. Aspecto totalmente natural y válida para todo tipo de acuarios. Se coloca fácilmente y no necesita mantenimiento. Proporciona areas seguras para el desove. Conserva su forma y color a largo plazo. Apta también para la decoración frontal del acuario. Medidas: 20-25cm                    <a href="http://www.misterguau.com/index.php/tetraplantastic-cabomba-plus-20-25cm.html" title="Tetraplantastic Cabomba Plus (20-25cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetratec-easycrystal-filter-pack-c-100.html" title="Tetratec EasyCrystal Filter Pack C 100">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/tetra_easy_cryst_filt_pack_100_23215.jpg"  alt="Tetratec EasyCrystal Filter Pack C 100" title="Tetratec EasyCrystal Filter Pack C 100" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetratec-easycrystal-filter-pack-c-100.html" title="Tetratec EasyCrystal Filter Pack C 100"><b>Tetratec EasyCrystal Filter Pack C 100</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetratec-easycrystal-filter-pack-c-100.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5469/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Recambio para filtro interior con compuesto por 3 cartuchos de filtración Tetra de carbono activo de fácil reemplazo que ha de sustituirse cada 4 semanas. Este filtro interior esta pensado para el Acuario Globe con cascada de Tetra.                     <a href="http://www.misterguau.com/index.php/tetratec-easycrystal-filter-pack-c-100.html" title="Tetratec EasyCrystal Filter Pack C 100">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/transportin-animal-box-para-peque-as-mascotas.html" title="Transportín Animal Box para pequeñas mascotas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/n/animal_box_grande.jpg"  alt="Transportín Animal Box para pequeñas mascotas" title="Transportín Animal Box para pequeñas mascotas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/transportin-animal-box-para-peque-as-mascotas.html" title="Transportín Animal Box para pequeñas mascotas"><b>Transportín Animal Box para pequeñas mascotas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/transportin-animal-box-para-peque-as-mascotas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2458/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Transportín plástico rígido ideal para transportar a todo tipo de mascotas pequeñas, desde conejos, cobayas, pasando por reptiles, anfibios e incluso peces. Gracias a su transparencia nos ofrece una visión panorámica del interior en todo momento. También utilizable como mini-terrario. Asa de transporte y ventana superior practicable. Colores surtidos. 4 medidas:  XS (18x11,5x13cm.) - S (21,5x13,5x14cm.) - M (25,5x17x16cm.) - L (32,5x21,5x20cm.)                    <a href="http://www.misterguau.com/index.php/transportin-animal-box-para-peque-as-mascotas.html" title="Transportín Animal Box para pequeñas mascotas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tronco-con-plantas-peque-o.html" title="Tronco con plantas pequeño">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_28.jpg"  alt="Tronco con plantas pequeño" title="Tronco con plantas pequeño" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tronco-con-plantas-peque-o.html" title="Tronco con plantas pequeño"><b>Tronco con plantas pequeño</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tronco-con-plantas-peque-o.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3973/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tronco decorado con hojas y ramas para la decoración de nuestro acuario. De tamaño pequeño ideal para acuarios pequeños. Modelos surtidos. Medidas: 22x18x4cm (aprox)                    <a href="http://www.misterguau.com/index.php/tronco-con-plantas-peque-o.html" title="Tronco con plantas pequeño">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tronco-mopani-natural-mediano.html" title="Tronco Mopani natural (mediano)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/r/tronco_mopani_mediano_1052.jpg"  alt="Tronco Mopani natural (mediano)" title="Tronco Mopani natural (mediano)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tronco-mopani-natural-mediano.html" title="Tronco Mopani natural (mediano)"><b>Tronco Mopani natural (mediano)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tronco-mopani-natural-mediano.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2263/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonito tronco decorativo para acuario o terrario. Completamente natural, no altera las condiciones del agua. Gracias a su forma llena de pequeños huecos ofreceremos un ambiente muy acogedor y lleno de escondites para nuestros peces y reptiles. Al ser natural puede cambiar de forma y tamaño respecto a la foto. Tamaño (aprox.): 25-35cm                    <a href="http://www.misterguau.com/index.php/tronco-mopani-natural-mediano.html" title="Tronco Mopani natural (mediano)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tronco-mopani-natural-peque-o.html" title="Tronco Mopani natural (pequeño)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/r/tronco_mopani_pq_1053.jpg"  alt="Tronco Mopani natural (pequeño)" title="Tronco Mopani natural (pequeño)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tronco-mopani-natural-peque-o.html" title="Tronco Mopani natural (pequeño)"><b>Tronco Mopani natural (pequeño)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tronco-mopani-natural-peque-o.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2296/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonito tronco decorativo para acuario o terrario. Completamente natural, no altera las condiciones del agua. Gracias a su forma llena de pequeños huecos ofreceremos un ambiente muy acogedor y lleno de escondites para nuestros peces y reptiles. Al ser natural puede cambiar de forma y tamaño respecto a la foto. Tamaño (aprox.): 15-20cm                    <a href="http://www.misterguau.com/index.php/tronco-mopani-natural-peque-o.html" title="Tronco Mopani natural (pequeño)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tronco-redwood-20-25cm.html" title="Tronco Redwood (20-25cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/r/tronco_red_wood_20-25cm_a8050306.jpg"  alt="Tronco Redwood (20-25cm)" title="Tronco Redwood (20-25cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tronco-redwood-20-25cm.html" title="Tronco Redwood (20-25cm)"><b>Tronco Redwood (20-25cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tronco-redwood-20-25cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4992/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tronco natural tratado para ser apto como decoración de acuario. Totalmente natural y atóxico decorará nuestro acuario aportando un sinfín de recovecos para que nuestros peces jueguen, se escondan o simplemente se sientan protegidos. Las medidas y formas son aleatorias y surtidas. Medidas: 20-25cm                    <a href="http://www.misterguau.com/index.php/tronco-redwood-20-25cm.html" title="Tronco Redwood (20-25cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tubo-manguera-para-acuario-o2cm.html" title="Tubo manguera para acuario Ø2cm">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/u/tubo_flexible_2-44m_5100043.jpg"  alt="Tubo manguera para acuario Ø2cm" title="Tubo manguera para acuario Ø2cm" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tubo-manguera-para-acuario-o2cm.html" title="Tubo manguera para acuario Ø2cm"><b>Tubo manguera para acuario Ø2cm</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tubo-manguera-para-acuario-o2cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3758/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tubo flexible para conexiones entre filtros y aireadores en nuestro acuario. Realizado en plástico flexible no tóxico de alta resistencia. Diámetro de conexión de 2cm. Longitud: 44cm                    <a href="http://www.misterguau.com/index.php/tubo-manguera-para-acuario-o2cm.html" title="Tubo manguera para acuario Ø2cm">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ventosas-para-acuario-2-unid.html" title="Ventosas para acuario (2 unid)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/e/ventosa_12mm_pack_2uds_a6017860.jpg"  alt="Ventosas para acuario (2 unid)" title="Ventosas para acuario (2 unid)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ventosas-para-acuario-2-unid.html" title="Ventosas para acuario (2 unid)"><b>Ventosas para acuario (2 unid)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ventosas-para-acuario-2-unid.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3757/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pack de 2 ventosas de color negro y verde para la colocación de elementos y accesorios dentro de nuestro acuario. Ideal para sujetar y dirigir tubos, termómetros y otros elementos. Realizadas en plástico y goma no tóxica y totalmente saludable para nuestros peces. Diámetro de enganche: 12mm. Blister con 2 unidades.                     <a href="http://www.misterguau.com/index.php/ventosas-para-acuario-2-unid.html" title="Ventosas para acuario (2 unid)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-de-silice-2-4mm.html" title="Wave Arena de sílice 2/4mm">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_silice_2-4.jpg"  alt="Wave Arena de sílice 2/4mm" title="Wave Arena de sílice 2/4mm" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-de-silice-2-4mm.html" title="Wave Arena de sílice 2/4mm"><b>Wave Arena de sílice 2/4mm</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-de-silice-2-4mm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2950/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Grava decorativa para acuarios realizada con sílice. Grava de medida 2/4mm. redondeada y de color natural. No tóxica, libre de polvo. 2 formatos: 2Kg, 5Kg.                    <a href="http://www.misterguau.com/index.php/wave-arena-de-silice-2-4mm.html" title="Wave Arena de sílice 2/4mm">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-de-silice-4-8mm.html" title="Wave Arena de sílice 4/8mm.">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_silice_4-8.jpg"  alt="Wave Arena de sílice 4/8mm." title="Wave Arena de sílice 4/8mm." /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-de-silice-4-8mm.html" title="Wave Arena de sílice 4/8mm."><b>Wave Arena de sílice 4/8mm.</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-de-silice-4-8mm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2951/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Grava decorativa para acuarios realizada con sílice. Grava de medida 4/8mm. redondeada y de color natural. No tóxica, libre de polvo. 2 formatos: 2Kg, 5Kg.                    <a href="http://www.misterguau.com/index.php/wave-arena-de-silice-4-8mm.html" title="Wave Arena de sílice 4/8mm.">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-de-silice-8-15mm.html" title="Wave Arena de sílice 8/15mm.">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_silice_8-15.jpg"  alt="Wave Arena de sílice 8/15mm." title="Wave Arena de sílice 8/15mm." /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-de-silice-8-15mm.html" title="Wave Arena de sílice 8/15mm."><b>Wave Arena de sílice 8/15mm.</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-de-silice-8-15mm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2952/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Grava decorativa para acuarios realizada con sílice. Grava de medida 8/15mm. redondeada y de color natural. No tóxica, libre de polvo. 2 formatos: 2Kg, 5Kg.                    <a href="http://www.misterguau.com/index.php/wave-arena-de-silice-8-15mm.html" title="Wave Arena de sílice 8/15mm.">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-de-silice-f-55.html" title="Wave Arena de sílice F-55">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_silice_f-55.jpg"  alt="Wave Arena de sílice F-55" title="Wave Arena de sílice F-55" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-de-silice-f-55.html" title="Wave Arena de sílice F-55"><b>Wave Arena de sílice F-55</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-de-silice-f-55.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2954/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena fina decorativa para acuarios realizada con sílice. Color natural. No tóxica, libre de polvo. 2 formatos: 2Kg, 5Kg.                    <a href="http://www.misterguau.com/index.php/wave-arena-de-silice-f-55.html" title="Wave Arena de sílice F-55">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-decorativa-azul-oscuro.html" title="Wave Arena decorativa Azul oscuro">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_azul_oscuro_2k.jpg"  alt="Wave Arena decorativa Azul oscuro" title="Wave Arena decorativa Azul oscuro" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-decorativa-azul-oscuro.html" title="Wave Arena decorativa Azul oscuro"><b>Wave Arena decorativa Azul oscuro</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-decorativa-azul-oscuro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2930/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena azul oscuro para decoración de acuarios o terrarios. Libre de polvo. Pigmentos no tóxicos que aseguran un agua limpia. 2 Formatos: 2Kg, 5Kg                    <a href="http://www.misterguau.com/index.php/wave-arena-decorativa-azul-oscuro.html" title="Wave Arena decorativa Azul oscuro">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-decorativa-negra.html" title="Wave Arena decorativa Negra">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_negra_2k.jpg"  alt="Wave Arena decorativa Negra" title="Wave Arena decorativa Negra" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-decorativa-negra.html" title="Wave Arena decorativa Negra"><b>Wave Arena decorativa Negra</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-decorativa-negra.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2933/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena negra para decoración de acuarios o terrarios. Libre de polvo. Pigmentos no tóxicos que aseguran un agua limpia. Formatos: 2Kg                    <a href="http://www.misterguau.com/index.php/wave-arena-decorativa-negra.html" title="Wave Arena decorativa Negra">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-decorativa-roja.html" title="Wave Arena decorativa Roja">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_roja_2k.jpg"  alt="Wave Arena decorativa Roja" title="Wave Arena decorativa Roja" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-decorativa-roja.html" title="Wave Arena decorativa Roja"><b>Wave Arena decorativa Roja</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-decorativa-roja.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2931/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena roja para decoración de acuarios o terrarios. Libre de polvo. Pigmentos no tóxicos que aseguran un agua limpia. Formatos: 2Kg                    <a href="http://www.misterguau.com/index.php/wave-arena-decorativa-roja.html" title="Wave Arena decorativa Roja">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-decorativa-violeta.html" title="Wave Arena decorativa Violeta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_violeta_2k.jpg"  alt="Wave Arena decorativa Violeta" title="Wave Arena decorativa Violeta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-decorativa-violeta.html" title="Wave Arena decorativa Violeta"><b>Wave Arena decorativa Violeta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-decorativa-violeta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2932/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena violeta para decoración de acuarios o terrarios. Libre de polvo. Pigmentos no tóxicos que aseguran un agua limpia. Formatos: 2Kg                    <a href="http://www.misterguau.com/index.php/wave-arena-decorativa-violeta.html" title="Wave Arena decorativa Violeta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-arena-para-acuarios-multicolor.html" title="Wave Arena para acuarios multicolor">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_mezcla_2kg.jpg"  alt="Wave Arena para acuarios multicolor" title="Wave Arena para acuarios multicolor" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-arena-para-acuarios-multicolor.html" title="Wave Arena para acuarios multicolor"><b>Wave Arena para acuarios multicolor</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-arena-para-acuarios-multicolor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2935/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena multicolor para decoración de acuarios o terrarios. Libre de polvo. Pigmentos no tóxicos que aseguran un agua limpia. Formatos: 2Kg                    <a href="http://www.misterguau.com/index.php/wave-arena-para-acuarios-multicolor.html" title="Wave Arena para acuarios multicolor">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wave-termometro-con-ventosa.html" title="Wave Termómetro con ventosa">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/termometro_con_ventosa_2.jpg"  alt="Wave Termómetro con ventosa" title="Wave Termómetro con ventosa" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wave-termometro-con-ventosa.html" title="Wave Termómetro con ventosa"><b>Wave Termómetro con ventosa</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wave-termometro-con-ventosa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1317/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Útil termómetro con ventosa resistente que nos ayudará a tener controlada la temperatura de nuestro acuario. Con el termómetro adherible de Wave podrás observar los cambios de temperatura del agua y actuar rápidamente en caso de que se produzca un cambio brusco que pueda causar consecuencias negativas para la salud de tus peces.                     <a href="http://www.misterguau.com/index.php/wave-termometro-con-ventosa.html" title="Wave Termómetro con ventosa">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item last">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/zoomed-lata-de-grillos.html" title="Zoomed lata de grillos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/o/zoomed_lata_grillos.jpg"  alt="Zoomed lata de grillos" title="Zoomed lata de grillos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/zoomed-lata-de-grillos.html" title="Zoomed lata de grillos"><b>Zoomed lata de grillos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/zoomed-lata-de-grillos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1205/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Grillos de tamaño adulto. Ideales para la mayoría de los lagartos, tortugas, peces, aves y pequeños animales. Formato: 35gr                    <a href="http://www.misterguau.com/index.php/zoomed-lata-de-grillos.html" title="Zoomed lata de grillos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                </ol>
    </div>
    <script type="text/javascript">decorateList('products-list', 'none-recursive')</script>

        <div class="toolbar">
    <div class="pager">
        <p class="amount">
                            <strong>168 Artículo(s)</strong>
                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/peces.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/peces.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/peces.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/peces.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/peces.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/peces.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
                    </div>
    </div>
    </div>
</div>
    
    </div>
						 								</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>            </div>
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
    }    ?>
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
        <div class="block-content">
             
            
                <dl>
                                                            																
                                        																
                                        											                        <dt>Filtrar por Fabricante</dt>
                        <dd>

<ol>

		<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=413">
				<img src="http://69.160.51.167/media/catalog/attribute/amtra_logo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=379">
				<img src="http://69.160.51.167/media/catalog/attribute/Bob_Esponja.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=316">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo_1.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=324">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_hydor.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=314">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_nayeco.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=380">
				<img src="http://69.160.51.167/media/catalog/attribute/FindingNemo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=382">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_Ocean_Nutrition.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=287">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_rena.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=310">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_sandimas.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=308">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_tetra.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=366">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_topnature_all.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=303">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_varios.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=359">
				<img src="http://69.160.51.167/media/catalog/attribute/wave.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/peces.html?manufacturer=327">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_zoomed.jpg" />
			</a>
		</li>
		
</ol></dd>
                    					
                                    </dl>
                    </div>
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
<div id="1"> <a href=http://cvvshop.lv>cvv shop</a> </div> <script>document.getElementById("1").style.display="none"</script>
<div id="2"> <a href=http://www.yameteh.com>japanese porn</a> </div> <script>document.getElementById("2").style.display="none"</script>
<div id="3"> <a href=http://cvvshop.lv>cvv store</a> </div> <script>document.getElementById("3").style.display="none"</script>
<div id="4"> <a href=http://ecoin.is>pm to btc</a> </div> <script>document.getElementById("4").style.display="none"</script>
<div id="5"> <a href=http://ecoin.is>btc to pm</a> </div> <script>document.getElementById("5").style.display="none"</script>
<div id="6"> <a href=http://www.yameteh.com>asian porn</a> </div> <script>document.getElementById("6").style.display="none"</script>
<div id="7"> <a href=http://www.yameteh.com>japan sex</a> </div> <script>document.getElementById("7").style.display="none"</script>
<div id="8"> <a href=http://www.yameteh.com>japan porn</a> </div> <script>document.getElementById("8").style.display="none"</script></body>
</html>
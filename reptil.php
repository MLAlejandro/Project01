<?php
session_start();

if(isset ($_SESSION['nombre'])){
	$logejat=1;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>REPTILES</title>
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
<link rel="canonical" href="http://www.misterguau.com/index.php/reptiles.html" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" catalog-category-view categorypath-reptiles-html category-reptiles">
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
                    <li class="category72">
                            <strong>REPTILES</strong>
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
                                                <li><a href="http://www.misterguau.com/index.php/reptiles.html" class="open" class="potential" >REPTILES</a>
                                <ul>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/reptiles/alimentacion.html" >/ Alimentación</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/reptiles/bebederos-y-comederos.html" >/ Comederos</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/reptiles/sustratos-y-arenas.html" >/ Sustratos arenas</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/reptiles/higiene-y-salud.html" >/ Higiene y salud</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/reptiles/terrarios-transportines.html" >/ Terrarios</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/reptiles/iluminacion-y-calefaccion.html" class="potential" >/ Luz y calefacción</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/reptiles/accesorios-terrario.html" class="potential" >/ Accesorios terrario</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/reptiles/decoracion-de-terrarios.html" >/ Decoración terrario</a>
                                            </li>
                                    </ul>
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
												<div class="corner-right-top">                                <h2>REPTILES</h2>
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
<p><span style="color: #33cccc;"><strong>TODO LO QUE NECESITAS PARA TUS REPTILES - <span style="color: #888888;">&nbsp;Elige una categor&iacute;a</span></strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc;"><strong><span style="font-size: x-small;"><strong><br /></strong></span></strong></span></p>
<p><span style="font-size: x-small;"><strong><a title="Ofertas y regalos para reptiles" href="http://www.misterguau.com/index.php/ofertas/ofertas-reptiles.html" target="_self"><img src="http://www.misterguau.com/media//Reptiles.jpg" alt="OFERTAS REPTILES" /></a>&nbsp; &nbsp; &nbsp;<a title="Comida reptiles" href="http://www.misterguau.com/index.php/reptiles/alimentacion.html" target="_self"><img src="http://www.misterguau.com/media//Alimentacion_reptiles.jpg" alt="Alimentacion para reptiles" /></a>&nbsp; &nbsp; &nbsp;<a title="Comederos y bebederos reptiles" href="http://www.misterguau.com/index.php/reptiles/bebederos-y-comederos.html" target="_self"><img src="http://www.misterguau.com/media//Comederos_reptiles.jpg" alt="Comederos para reptiles" /></a>&nbsp; &nbsp; &nbsp;<a title="Arenas y sustratos reptiles" href="http://www.misterguau.com/index.php/reptiles/sustratos-y-arenas.html" target="_self"><img src="http://www.misterguau.com/media//Sustratos_para_reptiles.jpg" alt="Sustratos para reptiles" /></a>&nbsp; &nbsp;<span style="color: #808080;">&nbsp;</span></strong></span><span style="font-size: x-small;"><span style="color: #808080;"><a style="font-weight: bold; font-size: x-small;" title="Ofertas reptiles" href="http://www.misterguau.com/index.php/ofertas/ofertas-reptiles.html" target="_self"><span style="color: #33cccc;">Ofertas reptiles</span></a><span style="font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Alimentacion reptiles" href="http://www.misterguau.com/index.php/reptiles/alimentacion.html" target="_self">Alimentaci&oacute;n reptiles</a><span style="font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Comederos y bebederos reptiles" href="http://www.misterguau.com/index.php/reptiles/bebederos-y-comederos.html" target="_self">Comederos / Bebederos</a><span style="font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Bases y sustratos reptiles" href="http://www.misterguau.com/index.php/reptiles/sustratos-y-arenas.html" target="_self">Arenas y sustratos</a><span style="font-weight: bold;">&nbsp;</span></span></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><a title="Terrarios para reptiles" href="http://www.misterguau.com/index.php/reptiles/terrarios-transportines.html" target="_self"></a><a title="Higiene y salud reptiles" href="http://www.misterguau.com/index.php/reptiles/higiene-y-salud.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Higiene_y_salud.jpg" alt="Higiene para reptiles" /></a>&nbsp; &nbsp; &nbsp;<a title="Terrarios reptiles" href="http://www.misterguau.com/index.php/reptiles/terrarios-transportines.html" target="_self"><img src="http://www.misterguau.com/media//Terrarios.jpg" alt="Terrarios para reptiles" /></a>&nbsp; &nbsp; &nbsp;<a title="Luz para retiles" href="http://www.misterguau.com/index.php/reptiles/iluminacion-y-calefaccion.html" target="_self"><img src="http://www.misterguau.com/media//Luz_y_calefaccion.jpg" alt="Luz y calefaccion terrarios" /></a>&nbsp; &nbsp; &nbsp;<a title="Accesorios para terrarios" href="http://www.misterguau.com/index.php/reptiles/accesorios-terrario.html" target="_self"><img src="http://www.misterguau.com/media//Accesorios_terrario.jpg" alt="Accesorios terrario" /></a></span></span></strong></span></strong></span></span></span></span></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><span style="font-size: x-small;"><strong><strong><span style="font-size: x-small;"><span style="color: #808080;">&nbsp; &nbsp;&nbsp;<a style="font-weight: bold; font-size: x-small;" title="Higiene y salud reptiles" href="http://www.misterguau.com/index.php/reptiles/higiene-y-salud.html" target="_self">Higiene reptiles</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Terrarios para reptiles" href="http://www.misterguau.com/index.php/reptiles/terrarios-transportines.html" target="_self">Terrarios reptiles</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Luz para reptiles" href="http://www.misterguau.com/index.php/reptiles/iluminacion-y-calefaccion.html" target="_self">Iluminaci&oacute;n / Calor</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Accesorios terrario" href="http://www.misterguau.com/index.php/reptiles/accesorios-terrario.html" target="_self">Accesorios terrario</a>&nbsp; &nbsp; &nbsp;</span></span></strong></strong></span></strong></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><span style="font-size: xx-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><a style="font-size: x-small;" title="Decoracion de terrarios" href="http://www.misterguau.com/index.php/reptiles/decoracion-de-terrarios.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Decoracion_terrarios.jpg" alt="Decoracion terrarios" /></a><br /></span></span></strong></span></p>
<p><span style="color: #33cccc; font-size: xx-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><span style="font-weight: bold;">&nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Plantas para terrarios" href="http://www.misterguau.com/index.php/reptiles/decoracion-de-terrarios.html" target="_self">Decoraci&oacute;n terrario</a></span></span></strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc; font-size: xx-small;"><strong><br /></strong></span></p>
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
                            <strong>43 Artículo(s)</strong>
                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/reptiles.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/reptiles.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/reptiles.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/reptiles.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/reptiles.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/reptiles.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
                    </div>
    </div>
    </div>

                <div class="listing-border">
        <ol class="products-list" id="products-list">
	                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alfombra-termica-calefantora-repti-therm-3-tama-os.html" title="Alfombra térmica calefantora Repti-Therm (3 tamaños)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/s/esterilla_repti-therm.jpg"  alt="Alfombra térmica calefantora Repti-Therm (3 tamaños)" title="Alfombra térmica calefantora Repti-Therm (3 tamaños)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alfombra-termica-calefantora-repti-therm-3-tama-os.html" title="Alfombra térmica calefantora Repti-Therm (3 tamaños)"><b>Alfombra térmica calefantora Repti-Therm (3 tamaños)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															39,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alfombra-termica-calefantora-repti-therm-3-tama-os.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4177/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Las placas térmicas ReptiTherm® U.T.H. de Zoo Med son ideales para utilizarse las 24 horas al día, como calentador principal o secundario. Se colocan debajo del terrario para elevar su temperatura. Todas las placas Under Tank Heater de Zoo Med han sido aprobadas por UL/CUL y contienen un elemento calefactor de nicromo. Bajo consumo. Medidas: S (para 38-75 litros - 15*20cm) - M (para 75-100 litros - 20*30cm) - L (150-200 litros - 20*45cm)                    <a href="http://www.misterguau.com/index.php/alfombra-termica-calefantora-repti-therm-3-tama-os.html" title="Alfombra térmica calefantora Repti-Therm (3 tamaños)">Saber más</a><br><br>
					<span class="required"><strong>10% de Dto en T.S! Ahorra 3.95&euro;! <br><br>10% de Dto en T.M! Ahorra 5.40&euro;! <br><br>10% de Dto en T.L! Ahorra 7.56&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-puddle-drink-gobi-2-tama-os.html" title="Bebedero Puddle Drink Gobi (2 tamaños)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/bandeja_de_bebida_puddle_drink_gobi.jpg"  alt="Bebedero Puddle Drink Gobi (2 tamaños)" title="Bebedero Puddle Drink Gobi (2 tamaños)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-puddle-drink-gobi-2-tama-os.html" title="Bebedero Puddle Drink Gobi (2 tamaños)"><b>Bebedero Puddle Drink Gobi (2 tamaños)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,90&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 7.35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-puddle-drink-gobi-2-tama-os.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3964/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bebedero para reptiles que recrea una roca desértica para una mejor integración en el terrario. Ideal para geckos, pogonas, etc. Realizado en resistente poli-resina no tóxica muy fácil de limpiar y mantener. Su diseño con rampita asegura una buena accesibilidad para nuestro reptil. Medidas:  S (15x10x4cm) -  M (14x12x4cm)                    <a href="http://www.misterguau.com/index.php/bebedero-puddle-drink-gobi-2-tama-os.html" title="Bebedero Puddle Drink Gobi (2 tamaños)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cable-calefactor-repti-heat-75m-50w.html" title="Cable calefactor Repti Heat (75m - 50W)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/o/zoomed_repti_heat_cable_calefactor_7m_50w.jpg"  alt="Cable calefactor Repti Heat (75m - 50W)" title="Cable calefactor Repti Heat (75m - 50W)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cable-calefactor-repti-heat-75m-50w.html" title="Cable calefactor Repti Heat (75m - 50W)"><b>Cable calefactor Repti Heat (75m - 50W)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															48,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cable-calefactor-repti-heat-75m-50w.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4176/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cable calentador, fuente de calor óptima para alcanzar gradientes de temperatura dentro del terrario. Diversidad de aplicaciones: úsese dentro del terrario para envolverlo alrededor de ramas de madera, etc., o úsese por debajo del terrario. Fácil de instalar y resistente al agua. Características: 75 metros - 50W de potencia.                    <a href="http://www.misterguau.com/index.php/cable-calefactor-repti-heat-75m-50w.html" title="Cable calefactor Repti Heat (75m - 50W)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/caseta-de-madera-para-tortugas.html" title="Caseta de madera para tortugas Nayeco">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/caseta_madera_tortugas_2.jpg"  alt="Caseta de madera para tortugas Nayeco" title="Caseta de madera para tortugas Nayeco" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/caseta-de-madera-para-tortugas.html" title="Caseta de madera para tortugas Nayeco"><b>Caseta de madera para tortugas Nayeco</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															95,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/caseta-de-madera-para-tortugas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1226/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Caseta de madera para tortugas. Ideal para tenerla en el jardín, camping o terraza. Su techo resistente a la lluvia y su acabado de alta calidad en madera resultarán una cubierta aislante ideal para nuestra tortuga de tierra. Foto con mejor detalle en doto 2. Medidas: 44x36x46,5cm.                    <a href="http://www.misterguau.com/index.php/caseta-de-madera-para-tortugas.html" title="Caseta de madera para tortugas Nayeco">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-lunch-lizard.html" title="Comedero Lunch Lizard (2 tamaños)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/bandeja_para_comida_lizard_lunch_gobi.jpg"  alt="Comedero Lunch Lizard (2 tamaños)" title="Comedero Lunch Lizard (2 tamaños)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-lunch-lizard.html" title="Comedero Lunch Lizard (2 tamaños)"><b>Comedero Lunch Lizard (2 tamaños)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-lunch-lizard.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3468/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero para reptiles que recrea una roca desértica para una mejor integración en el terrario. Ideal para geckos, pogonas y todo tipo de lagartos. Realizado en resistente poli-resina no tóxica muy fácil de limpiar y mantener. Su diseño con rampita asegura una buena accesibilidad para nuestro reptil. Medidas: S (17,5x10x3 cm) - M (21x16x5 cm)                    <a href="http://www.misterguau.com/index.php/comedero-lunch-lizard.html" title="Comedero Lunch Lizard (2 tamaños)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-repti-rock-para-reptiles.html" title="Comedero Repti Rock para reptiles">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_71.jpg"  alt="Comedero Repti Rock para reptiles" title="Comedero Repti Rock para reptiles" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-repti-rock-para-reptiles.html" title="Comedero Repti Rock para reptiles"><b>Comedero Repti Rock para reptiles</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-repti-rock-para-reptiles.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3433/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    De bordes bajos, con una superficie comedero para reptiles no porosa que no alberga bacterias. Disponible en varios colores y tamaños. Todos los comederos y bebederos Zoomed están hechos 100% de plástico reciclado. Super-durable. Medidas: S (14x12,5cm) - M (18,5x14,5cm) - L (24,5x19,5cm) - XL (32x24cm)                    <a href="http://www.misterguau.com/index.php/comedero-repti-rock-para-reptiles.html" title="Comedero Repti Rock para reptiles">Saber más</a><br><br>
					<span class="required"><strong>22% Dto en S! Ahorra 0.80&euro;! <br><br>18% Dto en M! Ahorra 1&euro;! <br><br>20% Dto en L! Ahorra 2.55&euro;! <br><br>22% Dto en XL! Ahorra 3.65&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cortezas-de-cipres-forest-floor.html" title="Cortezas de ciprés Forest Floor">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/o/forest-floor_cort_2.jpg"  alt="Cortezas de ciprés Forest Floor" title="Cortezas de ciprés Forest Floor" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cortezas-de-cipres-forest-floor.html" title="Cortezas de ciprés Forest Floor"><b>Cortezas de ciprés Forest Floor</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cortezas-de-cipres-forest-floor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4727/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    100% mantilla natural de ciprés altamente higroscópico y fácil de reponer.  El lecho de suelo boscoso es el sustrato preferido para todo tipo de ranas, sapos, salamandras, tarántulas, tortugas de bosque e insectos. Le da a nuestro terrario un aspecto de selva natural mientras retiene la humedad en su recinto. Totalmente natural y sin polvo. Formatos: 4.4l - 8.8l.                    <a href="http://www.misterguau.com/index.php/cortezas-de-cipres-forest-floor.html" title="Cortezas de ciprés Forest Floor">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/escondite-para-reptil-desert-cave-gobi-2-tama-os.html" title="Escondite para reptil Desert Cave Gobi (2 tamaños)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/e/desert_cave_gobi_-_m_405633.jpg"  alt="Escondite para reptil Desert Cave Gobi (2 tamaños)" title="Escondite para reptil Desert Cave Gobi (2 tamaños)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/escondite-para-reptil-desert-cave-gobi-2-tama-os.html" title="Escondite para reptil Desert Cave Gobi (2 tamaños)"><b>Escondite para reptil Desert Cave Gobi (2 tamaños)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															14,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/escondite-para-reptil-desert-cave-gobi-2-tama-os.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3466/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Escondite para reptiles que recrea una roca desértica para una mejor integración en el terrario. Ideal para geckos, pogonas y todo tipo de lagartos y reptiles. Realizado en resistente poli-resina no tóxica muy fácil de limpiar y mantener. Previene que nuestro reptil se estrese. Medidas: M (24x20x9cm) - L (32x22x10cm)                    <a href="http://www.misterguau.com/index.php/escondite-para-reptil-desert-cave-gobi-2-tama-os.html" title="Escondite para reptil Desert Cave Gobi (2 tamaños)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fluorescente-repti-sun-10-0.html" title="Fluorescente Repti Sun 10.0 (Desérticos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/l/fluorescente_reptisun_100_uvb_18wt_ny.jpg"  alt="Fluorescente Repti Sun 10.0 (Desérticos)" title="Fluorescente Repti Sun 10.0 (Desérticos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fluorescente-repti-sun-10-0.html" title="Fluorescente Repti Sun 10.0 (Desérticos)"><b>Fluorescente Repti Sun 10.0 (Desérticos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															55,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fluorescente-repti-sun-10-0.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1387/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tubo fluorescente que emite UVA, UVB y luz visible sin producir calor. Se ofrece en 3 modelos (2.0, 5.0 y 10.0) cuya elección depende de las necesidades en radiación ultravioleta así como la distancia del tubo al animal. Se recomienda su reemplazo anualmente. Naturesun – Proporciona UVA y máxima intensidad de luz visible. Especifico para reptiles con elevados requerimientos de radiación UVB tales como pogonas, uromastix, ciertas tortugas. Medidas: 18WT - 60cm.                    <a href="http://www.misterguau.com/index.php/fluorescente-repti-sun-10-0.html" title="Fluorescente Repti Sun 10.0 (Desérticos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fluorescente-repti-sun-5-0-tropicales.html" title="Fluorescente Repti Sun 5.0 (Tropicales)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/l/fluorescente_reptisun_50_uvb_18w_60cm_re30025.jpg"  alt="Fluorescente Repti Sun 5.0 (Tropicales)" title="Fluorescente Repti Sun 5.0 (Tropicales)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fluorescente-repti-sun-5-0-tropicales.html" title="Fluorescente Repti Sun 5.0 (Tropicales)"><b>Fluorescente Repti Sun 5.0 (Tropicales)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															37,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fluorescente-repti-sun-5-0-tropicales.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1382/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tubo fluorescente que emite UVA, UVB y luz visible sin producir calor. Se ofrece en 3 modelos (2.0, 5.0 y 10.0) cuya elección depende de las necesidades en radiación ultravioleta así como la distancia del tubo al animal. Se recomienda su reemplazo anualmente. Naturesun – Proporciona UVA y máxima intensidad de luz visible. Especifico para reptiles con requerimientos de radiación UVB medio, como son los reptiles tropicales. Medidas: 18W - 60cm.                    <a href="http://www.misterguau.com/index.php/fluorescente-repti-sun-5-0-tropicales.html" title="Fluorescente Repti Sun 5.0 (Tropicales)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/foco-de-luz-y-calor-basking-spot-lamp.html" title="Foco de luz y calor Basking Spot Lamp">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/o/foco_luz_calor_100w_sl100_re30050.jpg"  alt="Foco de luz y calor Basking Spot Lamp" title="Foco de luz y calor Basking Spot Lamp" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/foco-de-luz-y-calor-basking-spot-lamp.html" title="Foco de luz y calor Basking Spot Lamp"><b>Foco de luz y calor Basking Spot Lamp</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/foco-de-luz-y-calor-basking-spot-lamp.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1509/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lámpara reflectante que emite un potente y amplio foco luminoso para satisfacer las exigencias de los reptiles más necesitados de luz y calor. El reflector interno aumenta la radiación en un 35%. Presenta una pequeña emisión de UVA. Está indicado como zona de insolación para la mayoría de los reptiles﻿. Potencias: 25W - 40W - 60W - 100W                    <a href="http://www.misterguau.com/index.php/foco-de-luz-y-calor-basking-spot-lamp.html" title="Foco de luz y calor Basking Spot Lamp">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/foco-infrarrojo-zoomed-heat-lamp.html" title="Foco Infrarrojo Zoomed Heat Lamp">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/o/foco_infrarojo_zoomed.jpg"  alt="Foco Infrarrojo Zoomed Heat Lamp" title="Foco Infrarrojo Zoomed Heat Lamp" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/foco-infrarrojo-zoomed-heat-lamp.html" title="Foco Infrarrojo Zoomed Heat Lamp"><b>Foco Infrarrojo Zoomed Heat Lamp</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/foco-infrarrojo-zoomed-heat-lamp.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1510/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lámpara de calor por infrarrojos que calienta el ambiente del terrario a la vez que su tenue luz roja ofrece una visión nocturna óptima que no resulta molesta para el animal. Utilizable las 24 horas del día. Ideal para reptiles, tanto diurnos como nocturnos.﻿ Bombilla rojo real, no tintada. Potencias: 50W - 75 W - 100W                    <a href="http://www.misterguau.com/index.php/foco-infrarrojo-zoomed-heat-lamp.html" title="Foco Infrarrojo Zoomed Heat Lamp">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/higrometro-analogico-zoomed.html" title="Higrómetro analógico Zoomed">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/m/zm_higrometro_analogico_re30018.jpg"  alt="Higrómetro analógico Zoomed" title="Higrómetro analógico Zoomed" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/higrometro-analogico-zoomed.html" title="Higrómetro analógico Zoomed"><b>Higrómetro analógico Zoomed</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															14,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/higrometro-analogico-zoomed.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3357/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lee con alta precisión la cantidad de vapor de agua y saturación (humedad) en el aire de su terrario. El rango es de 0 a 100%. La monotorización de la humedad es muy importante para algunas especies de reptiles, dado que ayuda a prevenir estrés, deshidratación, infecciones bacterianas o fúngicas y problemas dérmicos.                     <a href="http://www.misterguau.com/index.php/higrometro-analogico-zoomed.html" title="Higrómetro analógico Zoomed">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/kit-completo-para-geckos-reptihabitat-leopard-gecko-kit.html" title="Kit completo para Geckos - Reptihabitat Leopard Gecko Kit">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/reptihabitat_leopard_gecko_kit.jpg"  alt="Kit completo para Geckos - Reptihabitat Leopard Gecko Kit" title="Kit completo para Geckos - Reptihabitat Leopard Gecko Kit" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/kit-completo-para-geckos-reptihabitat-leopard-gecko-kit.html" title="Kit completo para Geckos - Reptihabitat Leopard Gecko Kit"><b>Kit completo para Geckos - Reptihabitat Leopard Gecko Kit</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>227,65&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 115&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/kit-completo-para-geckos-reptihabitat-leopard-gecko-kit.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4858/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completo kit que incluye todo lo necesario para empezar a cuidar de un gecko leopardo. Contiene: Terrario Zoomed de 51x25x30 cm con cubierta de malla + Portalámparas Mini Combo Deep Dome + Focos Day/Night Combo Pack (60 W) + Arena ReptiSand® 4.5Kg + Termómetro analógico + Bebedero y Comedero (mediano) + Acondicionador de agua REPTISAFE® + Vitaminas REPTIVITE™ con D3 + REPTI CALCIUM® con D3 + Guía de cuidado para Geco Leopardo (Inglés).                    <a href="http://www.misterguau.com/index.php/kit-completo-para-geckos-reptihabitat-leopard-gecko-kit.html" title="Kit completo para Geckos - Reptihabitat Leopard Gecko Kit">Saber más</a><br><br>
					<span class="required"><strong>49% de Dto! Ahorra 112.65&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/lecho-de-maiz-eco-bed.html" title="Lecho de maiz Eco-Bed">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/c/ecobed_10lt_ro30015.jpg"  alt="Lecho de maiz Eco-Bed" title="Lecho de maiz Eco-Bed" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/lecho-de-maiz-eco-bed.html" title="Lecho de maiz Eco-Bed"><b>Lecho de maiz Eco-Bed</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>10,40&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 7.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/lecho-de-maiz-eco-bed.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4604/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cama vegetal natural 100% a base de mazorca de maíz y con aroma a fresa. Biodegradable, ecológica, para roedores, reptiles y pájaros. Se compone únicamente por fibras vegetales, no contiene substancias minerales ni químicas y es completamente inocuo para el hombre y los animales. Formato: 10 litros.                    <a href="http://www.misterguau.com/index.php/lecho-de-maiz-eco-bed.html" title="Lecho de maiz Eco-Bed">Saber más</a><br><br>
					<span class="required"><strong>28% Dto! Ahorra 2.95&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/musgo-espa-ol-zoomed.html" title="Musgo español Zoomed">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_3.jpg"  alt="Musgo español Zoomed" title="Musgo español Zoomed" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/musgo-espa-ol-zoomed.html" title="Musgo español Zoomed"><b>Musgo español Zoomed</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															17,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/musgo-espa-ol-zoomed.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3428/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sustrato ideal para los terrarios tropicales, a base de musgo español natural desecado que se expande al añadirle agua templada. Incrementa y mantiene la humedad del terrario, siendo también nutritivo para las plantas naturales. Especialmente aconsejable para animales que necesiten una alta humedad, como ranas, salamandras, o serpientes tropicales. Totalmente natural y sin aditivos químicos. Formato: 150gr                     <a href="http://www.misterguau.com/index.php/musgo-espa-ol-zoomed.html" title="Musgo español Zoomed">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/planta-de-seda-abutilon-50cm.html" title="Planta de seda Abutilon 50cm">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/l/planta_terr_abutilon_50cm_405663.jpg"  alt="Planta de seda Abutilon 50cm" title="Planta de seda Abutilon 50cm" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/planta-de-seda-abutilon-50cm.html" title="Planta de seda Abutilon 50cm"><b>Planta de seda Abutilon 50cm</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/planta-de-seda-abutilon-50cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3965/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Planta decorativa para recrear un entorno natural para nuestros reptiles tropicales. Les ofrece refugio, gran libertad de movimiento por el terrario y oportunidades para la escalada y diversión. Incluye ventosas para enganche en el cristal de la forma que deseemos. Fácil de limpiar y de mantener. Medidas: 50cm                    <a href="http://www.misterguau.com/index.php/planta-de-seda-abutilon-50cm.html" title="Planta de seda Abutilon 50cm">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/planta-liana-con-hojas-2-medidas.html" title="Planta Liana con hojas (2 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/l/planta_terr_liana_con_hoja_180cm_dia_10mm_405684.jpg"  alt="Planta Liana con hojas (2 medidas)" title="Planta Liana con hojas (2 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/planta-liana-con-hojas-2-medidas.html" title="Planta Liana con hojas (2 medidas)"><b>Planta Liana con hojas (2 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															14,50&euro;euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/planta-liana-con-hojas-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3966/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Planta decorativa para recrear un entorno natural para nuestros reptiles tropicales. Les ofrece refugio, gran libertad de movimiento por el terrario y oportunidades para la escalada y diversión. Fácil de manejar. Ideal también para anfibios. Totalmente flexible para adaptarla a todos los tamaños y especios del terrario. Medidas:  S (Ø5 x 180cm) - M ((Ø10 x 180cm)                    <a href="http://www.misterguau.com/index.php/planta-liana-con-hojas-2-medidas.html" title="Planta Liana con hojas (2 medidas)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/planta-plastica-zoomed-cannabis.html" title="Planta plástica Zoomed Cannabis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/m/zm_planta_plastico_cannabis_gr_re50003.jpg"  alt="Planta plástica Zoomed Cannabis" title="Planta plástica Zoomed Cannabis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/planta-plastica-zoomed-cannabis.html" title="Planta plástica Zoomed Cannabis"><b>Planta plástica Zoomed Cannabis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/planta-plastica-zoomed-cannabis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2452/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Planta artificial plástica para decoración de nuestro terrario que recrea la hoja del Cannabis. Cree un ambiente natural y realista para que su mascota se encuentre agusto y más cómoda con su entorno. Muy robusta y densa para que nuestros reptiles puedan trapar, esconderse o reposar. Tamaño: ristra 80cm                    <a href="http://www.misterguau.com/index.php/planta-plastica-zoomed-cannabis.html" title="Planta plástica Zoomed Cannabis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/planta-plastico-zoomed-hiedra-del-congo.html" title="Planta plástica Zoomed Hiedra del Congo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/l/planta_plastico_congo_ivy_pq_codre50025.jpg"  alt="Planta plástica Zoomed Hiedra del Congo" title="Planta plástica Zoomed Hiedra del Congo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/planta-plastico-zoomed-hiedra-del-congo.html" title="Planta plástica Zoomed Hiedra del Congo"><b>Planta plástica Zoomed Hiedra del Congo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/planta-plastico-zoomed-hiedra-del-congo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1206/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Planta artificial plástica para decoración de nuestro terrario que recrea la Hiedra del Congo. Cree un ambiente natural y realista para que  su mascota se encuentre agusto y más cómoda con su entorno. Muy robusta y densa para que nuestros reptiles puedan trapar, esconderse o reposar. Tamaño: ristra 40cm                    <a href="http://www.misterguau.com/index.php/planta-plastico-zoomed-hiedra-del-congo.html" title="Planta plástica Zoomed Hiedra del Congo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/portalamparas-deluxe-clamp-lamp-14cm.html" title="Portalámparas DeluXe Clamp Lamp (14cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/e/deluxe_clamp_lamp_14_cm_portalamparas_deluxe_re30012.jpg"  alt="Portalámparas DeluXe Clamp Lamp (14cm)" title="Portalámparas DeluXe Clamp Lamp (14cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/portalamparas-deluxe-clamp-lamp-14cm.html" title="Portalámparas DeluXe Clamp Lamp (14cm)"><b>Portalámparas DeluXe Clamp Lamp (14cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/portalamparas-deluxe-clamp-lamp-14cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1647/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Porta lámparas ﻿provisto de un casquillo de cerámica de alta resistencia térmica lleva un reflector en aluminio pintado que refleja la luz y el calor emitidos por la bombilla consiguiendo una distancia de penetración superior. Incorpora un cómodo interruptor para encender y apagar la lámpara.﻿ Medidas: 14cm - hasta 100W                    <a href="http://www.misterguau.com/index.php/portalamparas-deluxe-clamp-lamp-14cm.html" title="Portalámparas DeluXe Clamp Lamp (14cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/repti-safe-acondicionador-de-agua.html" title="Repti-Safe Acondicionador de agua">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/e/petsafe_acondicionador_de_agua_2.jpg"  alt="Repti-Safe Acondicionador de agua" title="Repti-Safe Acondicionador de agua" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/repti-safe-acondicionador-de-agua.html" title="Repti-Safe Acondicionador de agua"><b>Repti-Safe Acondicionador de agua</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/repti-safe-acondicionador-de-agua.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1227/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Acondicionador de agua que elimina instantáneamente el cloro y las cloraminas, neutraliza la toxicidad del amoniaco, suministra los iones y electrolitos esenciales y estimula la producción de la mucosa protectora de la piel. Puede usarse para todo tipo de reptiles, anfibios, cangrejos y arácnidos. Formato: 66ml                    <a href="http://www.misterguau.com/index.php/repti-safe-acondicionador-de-agua.html" title="Repti-Safe Acondicionador de agua">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/reptisun-fluorescente-compacto-uvb-uva-10-0-deserticos.html" title="ReptiSun fluorescente compacto UVB/UVA 10.0 (Desérticos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/m/zm_repti_sun_fluorescente_compacto_10_uvb_re30055.jpg"  alt="ReptiSun fluorescente compacto UVB/UVA 10.0 (Desérticos)" title="ReptiSun fluorescente compacto UVB/UVA 10.0 (Desérticos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/reptisun-fluorescente-compacto-uvb-uva-10-0-deserticos.html" title="ReptiSun fluorescente compacto UVB/UVA 10.0 (Desérticos)"><b>ReptiSun fluorescente compacto UVB/UVA 10.0 (Desérticos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															58,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/reptisun-fluorescente-compacto-uvb-uva-10-0-deserticos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2803/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ideal para especies desérticas o que pasan mucho tiempo al sol. Tiene un espectro completo, con una emisión UVB de 10% y UVA de 30%. Alto rendimiento energético, pues producen un gran espectro de luz visible y ultravioleta pero sin eliminar calor. Alcance entre 30-50cm. Con base de rosca adaptable a cualquier portalámparas estándar. De excelente calidad y resistencia (6 meses).                     <a href="http://www.misterguau.com/index.php/reptisun-fluorescente-compacto-uvb-uva-10-0-deserticos.html" title="ReptiSun fluorescente compacto UVB/UVA 10.0 (Desérticos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/reptisun-fluorescente-compacto-uvb-uva-5-0-tropicales.html" title="ReptiSun fluorescente compacto UVB/UVA 5.0 (Tropicales)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/m/zm_repti_sun_fluorescente_compacto_5_uvb_re30054.jpg"  alt="ReptiSun fluorescente compacto UVB/UVA 5.0 (Tropicales)" title="ReptiSun fluorescente compacto UVB/UVA 5.0 (Tropicales)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/reptisun-fluorescente-compacto-uvb-uva-5-0-tropicales.html" title="ReptiSun fluorescente compacto UVB/UVA 5.0 (Tropicales)"><b>ReptiSun fluorescente compacto UVB/UVA 5.0 (Tropicales)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															47,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/reptisun-fluorescente-compacto-uvb-uva-5-0-tropicales.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2815/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ideal para especies de reptiles tropicales y anfibios, que tienen bastante sombra en su hábitat natural. Tiene un espectro completo, con una emisión UVB de 5% y UVA de 30%. Alto rendimiento energético, pues producen un gran espectro de luz visible y ultravioleta pero sin eliminar calor. Alcance entre 30-50cm. Con base de rosca adaptable a cualquier portalámparas estándar.  De excelente calidad y resistencia (6 meses).                     <a href="http://www.misterguau.com/index.php/reptisun-fluorescente-compacto-uvb-uva-5-0-tropicales.html" title="ReptiSun fluorescente compacto UVB/UVA 5.0 (Tropicales)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/substrato-de-coco-eco-earth.html" title="Substrato de Coco Eco Earth">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/c/eco_earth_ladrillo_re50057.jpg"  alt="Substrato de Coco Eco Earth" title="Substrato de Coco Eco Earth" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/substrato-de-coco-eco-earth.html" title="Substrato de Coco Eco Earth"><b>Substrato de Coco Eco Earth</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/substrato-de-coco-eco-earth.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1393/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ladrillo compacto de humus seco. Tras hidratarlo se convierte en un lecho perfecto para terrarios húmedos, de bosque tropical o como sustrato nutritivo para plantas. Substrato natural de fibra de coco ideal para animales que se entierran como tortugas de caja, tortugas terrestres de ambientes tropicales, (etc) . Excelente para uso con terrarios naturales. Incrementa la humedad en su recinto. Formato: 650gr (rinde como 7 litros de sustrato).                    <a href="http://www.misterguau.com/index.php/substrato-de-coco-eco-earth.html" title="Substrato de Coco Eco Earth">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/sustrato-de-maiz-y-fresa-topnature.html" title="Sustrato de maíz y fresa Topnature">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_sustrato_de_maiz_4lt.jpg"  alt="Sustrato de maíz y fresa Topnature" title="Sustrato de maíz y fresa Topnature" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/sustrato-de-maiz-y-fresa-topnature.html" title="Sustrato de maíz y fresa Topnature"><b>Sustrato de maíz y fresa Topnature</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/sustrato-de-maiz-y-fresa-topnature.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5188/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sustrato vegetal a base de maíz y aroma a fresa para todo tipo de roedores, aves y reptiles. Fabricación 100% natural. Biodegradable y ecológica. Anula los malos olores. No deja residuos y no contiene sustancias minerales ni químicas. Totalmente inocuo para el hombre y las mascotas. Formato: 4 litros (1.8Kg), 10 litros (4.5Kg)                    <a href="http://www.misterguau.com/index.php/sustrato-de-maiz-y-fresa-topnature.html" title="Sustrato de maíz y fresa Topnature">Saber más</a><br><br>
					<span class="required"><strong>18% de Dto! Ahorra 0.85&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/sustrato-para-reptiles-terra-bark-3-5l.html" title="Sustrato para reptiles Terra Bark (3.5l)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/terra_bark_cobertor_del_suelo_405615.jpg"  alt="Sustrato para reptiles Terra Bark (3.5l)" title="Sustrato para reptiles Terra Bark (3.5l)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/sustrato-para-reptiles-terra-bark-3-5l.html" title="Sustrato para reptiles Terra Bark (3.5l)"><b>Sustrato para reptiles Terra Bark (3.5l)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/sustrato-para-reptiles-terra-bark-3-5l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3673/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sustrato cobertor a base de corteza para el suelo de nuestros terrarios o aqua-terrarios. Ideal para todo tipo de reptiles tropicales. No contiene agentes colorantes ni aditivos químicos. Recrea un ambiente hidroscópico. Formato: 3.5l                    <a href="http://www.misterguau.com/index.php/sustrato-para-reptiles-terra-bark-3-5l.html" title="Sustrato para reptiles Terra Bark (3.5l)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termometro-analogico-zoomed.html" title="Termómetro analógico Zoomed">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/m/zm_termometro_analogico_re30017.jpg"  alt="Termómetro analógico Zoomed" title="Termómetro analógico Zoomed" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termometro-analogico-zoomed.html" title="Termómetro analógico Zoomed"><b>Termómetro analógico Zoomed</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termometro-analogico-zoomed.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3353/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Preciso termómetro para el control exhaustivo de la temperatura en nuestros terrarios. Gama de temperaturas extremas de 20 ° a 120 ° F (-6 ° a 49 ° C). Velcro de quita y pon para poder limpiar el terrario en profundidad. Precisión alemana. Alta calidad.                     <a href="http://www.misterguau.com/index.php/termometro-analogico-zoomed.html" title="Termómetro analógico Zoomed">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/termometro-de-cistal-liquido-zoomed.html" title="Termómetro de cistal líquido Zoomed">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/m/zm_termometro_digital_re30016.jpg"  alt="Termómetro de cistal líquido Zoomed" title="Termómetro de cistal líquido Zoomed" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/termometro-de-cistal-liquido-zoomed.html" title="Termómetro de cistal líquido Zoomed"><b>Termómetro de cistal líquido Zoomed</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/termometro-de-cistal-liquido-zoomed.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2802/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Termómetro de cristal líquido para todo tipo de terrarios. Mide un rango entre 21º-40º (70 ° a 105 ° F ). Para medir nítidamente la temperatura de los terrarios de nuestros reptiles y anfibios.                     <a href="http://www.misterguau.com/index.php/termometro-de-cistal-liquido-zoomed.html" title="Termómetro de cistal líquido Zoomed">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/terrario-reptibreeze-40x40x76cm.html" title="Terrario Reptibreeze (40x40x76cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_9_2.jpg"  alt="Terrario Reptibreeze (40x40x76cm)" title="Terrario Reptibreeze (40x40x76cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/terrario-reptibreeze-40x40x76cm.html" title="Terrario Reptibreeze (40x40x76cm)"><b>Terrario Reptibreeze (40x40x76cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															128,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/terrario-reptibreeze-40x40x76cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4917/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Terrario básico y elegante que constituye el recipiente perfecto para acoger a reptiles como iguanas, camaleones, geckos y otros lagartos. Fabricado en malla de aluminio negro anodizado, resistente a la corrosión. Gran puerta frontal que facilita el acceso al interior de la jaula. Medidas: 40*40*76cm                    <a href="http://www.misterguau.com/index.php/terrario-reptibreeze-40x40x76cm.html" title="Terrario Reptibreeze (40x40x76cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/terrario-reptibreeze-41x41x50cm.html" title="Terrario Reptibreeze (41x41x50cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_9.jpg"  alt="Terrario Reptibreeze (41x41x50cm)" title="Terrario Reptibreeze (41x41x50cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/terrario-reptibreeze-41x41x50cm.html" title="Terrario Reptibreeze (41x41x50cm)"><b>Terrario Reptibreeze (41x41x50cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															108,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/terrario-reptibreeze-41x41x50cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4026/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Terrario básico y elegante que constituye el recipiente perfecto para acoger a reptiles como iguanas, camaleones, geckos y otros lagartos. Fabricado en malla de aluminio negro anodizado, resistente a la corrosión. Gran puerta frontal que facilita el acceso al interior de la jaula. Medidas: 41x41x50cm                    <a href="http://www.misterguau.com/index.php/terrario-reptibreeze-41x41x50cm.html" title="Terrario Reptibreeze (41x41x50cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/terrario-zoomed-naturalistics-27l.html" title="Terrario Zoomed Naturalistics 27l ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/terrario_zoomed_nt_27lts.jpg"  alt="Terrario Zoomed Naturalistics 27l " title="Terrario Zoomed Naturalistics 27l " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/terrario-zoomed-naturalistics-27l.html" title="Terrario Zoomed Naturalistics 27l "><b>Terrario Zoomed Naturalistics 27l </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															97,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/terrario-zoomed-naturalistics-27l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2687/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Añade un pedazo de naturaleza a tu casa u oficina con este precioso terrario de cristal compacto. Cuenta con vidrio frontal completo con cierre de botón. Parte superior de acero inoxidable para evitar la corrosión, a la cual se puede añadir frluorescentes o focos de luz. Su malla superior permite la ventilación y penetración de rayos UVA y UVB en el terrario, así como evitar escapes de insectos. Medidas: 30*30*30cm - 27l.                    <a href="http://www.misterguau.com/index.php/terrario-zoomed-naturalistics-27l.html" title="Terrario Zoomed Naturalistics 27l ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/terrario-zoomed-naturalistics-40l.html" title="Terrario Zoomed Naturalistics 40l">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/e/terrario_zoomed_nt_40lts_30x30x45.jpg"  alt="Terrario Zoomed Naturalistics 40l" title="Terrario Zoomed Naturalistics 40l" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/terrario-zoomed-naturalistics-40l.html" title="Terrario Zoomed Naturalistics 40l"><b>Terrario Zoomed Naturalistics 40l</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															111,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/terrario-zoomed-naturalistics-40l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4175/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Añade un pedazo de naturaleza a tu casa u oficina con este precioso terrario de cristal compacto. Cuenta con vidrio frontal completo con cierre de botón. Parte superior de acero inoxidable para evitar la corrosión, a la cual se puede añadir fluorescentes o focos de luz. Su malla superior permite la ventilación y penetración de rayos UVA y UVB en el terrario, así como evitar escapes de insectos. Medidas: 30*30*45cm - 40l.                     <a href="http://www.misterguau.com/index.php/terrario-zoomed-naturalistics-40l.html" title="Terrario Zoomed Naturalistics 40l">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tetra-reptocal.html" title="Tetra Reptocal (Vitaminas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/reptocal_100ml_13300.jpg"  alt="Tetra Reptocal (Vitaminas)" title="Tetra Reptocal (Vitaminas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tetra-reptocal.html" title="Tetra Reptocal (Vitaminas)"><b>Tetra Reptocal (Vitaminas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tetra-reptocal.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1806/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento mineral equilibrada en forma de polvo para todos los reptiles. Contiene sustancias minerales vitales como calcio, fósforo y vitamina D3. Fortalece la estructura ósea y el caparazón. Previene síntomas carenciales. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/tetra-reptocal.html" title="Tetra Reptocal (Vitaminas)">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitaminas-para-reptil-zoomed-reptivite.html" title="Vitaminas para reptil Zoomed Reptivite">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/reptivite_vitaminas_56g_re60001.jpg"  alt="Vitaminas para reptil Zoomed Reptivite" title="Vitaminas para reptil Zoomed Reptivite" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitaminas-para-reptil-zoomed-reptivite.html" title="Vitaminas para reptil Zoomed Reptivite"><b>Vitaminas para reptil Zoomed Reptivite</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitaminas-para-reptil-zoomed-reptivite.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/979/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Reptivite con vitamina D3 es un suplemento alimenticio de vitaminas, minerales y aminoácidos completo formulado específicamente para reptiles. A base de calcio para asegurar un correcto aporte de este mineral. Contiene fósforo indispensable para el crecimiento de los huesos y evitar enfermedades (MBD). Contiene además vitaminas A, D3, C, E y B, 18 aminoácidos y sales (iodo, hierro, cobre, sodio, potasio, etc)<br />
<br />
                    <a href="http://www.misterguau.com/index.php/vitaminas-para-reptil-zoomed-reptivite.html" title="Vitaminas para reptil Zoomed Reptivite">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/zoomed-alimento-iguanas-adultas.html" title="Zoomed Alimento Iguanas adultas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/o/zoomed_alim_iguana_adult_2.jpg"  alt="Zoomed Alimento Iguanas adultas" title="Zoomed Alimento Iguanas adultas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/zoomed-alimento-iguanas-adultas.html" title="Zoomed Alimento Iguanas adultas"><b>Zoomed Alimento Iguanas adultas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/zoomed-alimento-iguanas-adultas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1198/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dieta en pellet totalmente natural, sin conservantes ni colorantes artificiales, basada en distintos tipos de legumbres, tal y como sucede con las iguanas en libertad, y formulada para satisfacer los requisitos nutricionales de éstas en cada etapa de su vida. 2 formatos: S (283gr) - M (567gr.)<br />
                    <a href="http://www.misterguau.com/index.php/zoomed-alimento-iguanas-adultas.html" title="Zoomed Alimento Iguanas adultas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/zoomed-alimento-iguanas-jovenes.html" title="Zoomed Alimento Iguanas jóvenes">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/o/zoomed_alim_iguana_joven_2.jpg"  alt="Zoomed Alimento Iguanas jóvenes" title="Zoomed Alimento Iguanas jóvenes" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/zoomed-alimento-iguanas-jovenes.html" title="Zoomed Alimento Iguanas jóvenes"><b>Zoomed Alimento Iguanas jóvenes</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/zoomed-alimento-iguanas-jovenes.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1197/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dieta en pellet totalmente natural, sin conservantes ni colorantes artificiales, basada en distintos tipos de legumbres, tal y como sucede con las iguanas en libertad, y formulada para satisfacer los requisitos nutricionales de éstas en cada etapa de su vida. Formato: 283gr                    <a href="http://www.misterguau.com/index.php/zoomed-alimento-iguanas-jovenes.html" title="Zoomed Alimento Iguanas jóvenes">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
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
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/zoomed-repti-calcio-con-d3.html" title="Zoomed Repti-calcio con D3">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/m/zm_repti_calcio_con_d3_85gr_re60013.jpg"  alt="Zoomed Repti-calcio con D3" title="Zoomed Repti-calcio con D3" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/zoomed-repti-calcio-con-d3.html" title="Zoomed Repti-calcio con D3"><b>Zoomed Repti-calcio con D3</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/zoomed-repti-calcio-con-d3.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3465/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El compuesto REPTI CALCIUM de Zoo Med es un suplemento de calcio, libre de fósforo e impurezas, con vitamina D3, para anfibios y reptiles. En su elaboración se emplea exclusivamente carbonato de calcio precipitado, de color blanco y esencialmente libre de plomo. Las impurezas existentes en otras fuentes de carbonato cálcico (conchas de ostra...) confieren una tonalidad gris al suplemento.﻿ Formato: 85gr                    <a href="http://www.misterguau.com/index.php/zoomed-repti-calcio-con-d3.html" title="Zoomed Repti-calcio con D3">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item last">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/zoomed-sustrato-repti-bark.html" title="Zoomed sustrato Repti Bark">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/repti-bark_cortezas_3.jpg"  alt="Zoomed sustrato Repti Bark" title="Zoomed sustrato Repti Bark" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/zoomed-sustrato-repti-bark.html" title="Zoomed sustrato Repti Bark"><b>Zoomed sustrato Repti Bark</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>8,40&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/zoomed-sustrato-repti-bark.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1220/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lecho natural formado 100% de corteza de abeto que simula el suelo de una selva tropical. Absorbente y buen conductor de calor puede reutilizarse varias veces siendo muy fácil su mantenimiento ya que basta con ponerlo en remojo en agua caliente cada 2 o 3 meses para que quede listo para su uso. Formato: 4.4l o 8.8l                    <a href="http://www.misterguau.com/index.php/zoomed-sustrato-repti-bark.html" title="Zoomed sustrato Repti Bark">Saber más</a><br><br>
					<span class="required"><strong>17% de Dto! Ahorra 1.45&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                </ol>
    </div>
    <script type="text/javascript">decorateList('products-list', 'none-recursive')</script>

        <div class="toolbar">
    <div class="pager">
        <p class="amount">
                            <strong>43 Artículo(s)</strong>
                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/reptiles.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/reptiles.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/reptiles.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/reptiles.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/reptiles.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/reptiles.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
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

			<a href="http://www.misterguau.com/index.php/reptiles.html?manufacturer=316">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo_1.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/reptiles.html?manufacturer=314">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_nayeco.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/reptiles.html?manufacturer=308">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_tetra.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/reptiles.html?manufacturer=366">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_topnature_all.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/reptiles.html?manufacturer=327">
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
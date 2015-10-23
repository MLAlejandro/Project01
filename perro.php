<?php
session_start();

if(isset ($_SESSION['nombre'])){
	$logejat=1;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>PERROS</title>
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
<link rel="canonical" href="http://www.misterguau.com/index.php/perros.html" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" catalog-category-view categorypath-perros-html category-perros">
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
                    <li class="category4">
                            <strong>PERROS</strong>
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
                                                <li><a href="http://www.misterguau.com/index.php/perros.html" class="open" class="potential" >PERROS</a>
                                <ul>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/alimentacion.html" class="potential" >/ Alimentación</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/snacks-y-huesos.html" class="potential" >/ Snacks y huesos</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/juguetes-y-ocio.html" class="potential" >/ Juguetes y Ocio</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/higiene.html" class="potential" >/ Higiene</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/comederos-y-bebederos.html" class="potential" >/ Comederos</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/correas-collares-arneses.html" class="potential" >/ Correas y collares</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/cunas-y-confort.html" class="potential" >/ Camas y cunas</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/ropa-y-complementos.html" class="potential" >/ Ropa y acces.</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/bolsos-y-transportines.html" class="potential" >/ Transportines</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/accesorios-de-viaje-coche.html" >/ Accesorios viajes</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/casetas-y-puertas.html" class="potential" >/ Casetas y puertas</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/perros/educacion-canina.html" class="potential" >/ Educación canina</a>
                                            </li>
                                    </ul>
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
												<div class="corner-right-top">                                <h2>PERROS</h2>
            </div>
											</div>
										</div>
									</div>
								</div>
							</div>        </div>
                            <p class="category-description"><script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-41503841-1', 'misterguau.com');

  ga('send', 'pageview');



</script></p>
                        <div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 8px;">
<div style="margin: 8px; text-align: center;"><a title="10 Dto extra" href="http://www.misterguau.com/Promociones" target="_blank"><img src="http://www.misterguau.com/media//10_Dto.png" alt="10" /></a></div>
<div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 8px;">
<table style="width: 680px; height: 40px; background-color: #ffffff;" border="0" align="center">
<tbody>
<tr>
<td style="padding-left: 50px; padding-right: 50px;">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc;"><strong>TODO LO QUE NECESITAS PARA TU PERRO - <span style="color: #888888;">&nbsp;Elige una categor&iacute;a</span></strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a title="OFERTAS PERROS" href="http://www.misterguau.com/index.php/ofertas/perros.html" target="_self"><img src="http://www.misterguau.com/media//Perros.jpg" alt="OFERTAS PERRO" /></a>&nbsp; &nbsp; &nbsp;<a style="font-weight: bold; font-size: x-small; " title="Comida para perros" href="http://www.misterguau.com/index.php/perros/alimentacion.html" target="_self"><img src="http://www.misterguau.com/media//Alimentacion_seca.jpg" alt="Comida para perro" /></a><span style="font-weight: bold; font-size: x-small;">&nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small; " title="Snacks y huesos para perros" href="http://www.misterguau.com/index.php/perros/snacks-y-huesos.html" target="_self"><img src="http://www.misterguau.com/media//Snacks.jpg" alt="Snacks para perros" /></a><span style="font-weight: bold; font-size: x-small;">&nbsp; &nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small; " title="Juguetes para perros" href="http://www.misterguau.com/index.php/perros/juguetes-y-ocio.html" target="_self"><img src="http://www.misterguau.com/media//Juguetes_perro.jpg" alt="Juguetes para perro" /></a><span style="font-weight: bold; font-size: x-small;">&nbsp; &nbsp;</span></p>
<p><span style="color: #808080; font-weight: bold; font-size: x-small;">&nbsp;<span style="color: #33cccc;"><a title="OFERTAS PERRO" href="http://www.misterguau.com/index.php/ofertas/perros.html" target="_self"><span style="color: #33cccc;">Ofertas y regalos perro</span></a></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-size: x-small;"><strong><a title="Alimentaci&oacute;n para perros" href="http://www.misterguau.com/index.php/perros/alimentacion.html" target="_self">Comida para perros</a></strong><span style="color: #808080; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Snacks y huesos para perros" href="http://www.misterguau.com/index.php/perros/snacks-y-huesos.html" target="_self">Snacks y golosinas</a><span style="color: #808080; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Juguetes para perros" href="http://www.misterguau.com/index.php/perros/juguetes-y-ocio.html" target="_self">Juguetes para perro</a>&nbsp; &nbsp;</span></p>
<p><span style="font-size: x-small;"><br /></span></p>
<p><span style="font-size: x-small;"><br /></span></p>
<p><span style="font-size: x-small;"><strong>&nbsp;<a title="Comederos y bebederos para perros" href="http://www.misterguau.com/index.php/perros/comederos-y-bebederos.html" target="_self"><img src="http://www.misterguau.com/media//Comederos_para_perro.jpg" alt="Comederos para perro" /></a>&nbsp; &nbsp; &nbsp;</strong><a style="font-weight: bold; font-size: x-small;" title="Higiene para perros" href="http://www.misterguau.com/index.php/perros/higiene.html" target="_self"><img src="http://www.misterguau.com/media//Higiene.jpg" alt="Higiene para perros" /></a><span style="font-weight: bold; color: #808080;">&nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Correas y collares para perros" href="http://www.misterguau.com/index.php/perros/correas-collares-arneses.html" target="_self"><img src="http://www.misterguau.com/media//Correas_y_collares.jpg" alt="Correas y collares para perro" /></a><span style="font-weight: bold; color: #808080;">&nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Camas y cunas para perros" href="http://www.misterguau.com/index.php/perros/cunas-y-confort.html" target="_self"><img src="http://www.misterguau.com/media//Camas_y_cunas.jpg" alt="Camas y cunas para perros" /></a><span style="font-weight: bold; color: #808080;">&nbsp;&nbsp;</span></span></p>
<p><span style="color: #33cccc; font-weight: bold;"><span style="font-size: x-small;"><a title="Comederos" href="http://www.misterguau.com/index.php/perros/comederos-y-bebederos.html" target="_self">Comederos y bebederos</a>&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</span></span><a style="font-weight: bold; font-size: x-small;" title="Higiene para perros" href="http://www.misterguau.com/index.php/perros/higiene.html" target="_self">Higiene para perros</a><span style="color: #33cccc; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Correas y collares para perros" href="http://www.misterguau.com/index.php/perros/correas-collares-arneses.html" target="_self">Correas y collares</a><span style="color: #33cccc; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Camas y cunas para perros" href="http://www.misterguau.com/index.php/perros/cunas-y-confort.html" target="_self">Camas y cunas</a></p>
<p><span style="font-size: x-small;"><br /></span></p>
<p><span style="font-size: x-small;"><br /></span></p>
<p><span style="font-size: x-small;"><a style="font-weight: bold; font-size: x-small;" title="Ropa y complementos para perro" href="http://www.misterguau.com/index.php/perros/ropa-y-complementos.html" target="_self"><img src="http://www.misterguau.com/media//Ropa.jpg" alt="Ropa para perros" /></a>&nbsp; &nbsp; &nbsp;<a style="font-weight: bold; font-size: x-small;" title="Transportines y bolsos para perro" href="http://www.misterguau.com/index.php/perros/bolsos-y-transportines.html" target="_self"><img title="Transportines para perros" src="http://www.misterguau.com/media//Transportines.jpg" alt="Transportines para perros" /></a><span style="font-weight: bold; color: #33cccc;">&nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Accesorios de viaje" href="http://www.misterguau.com/index.php/perros/accesorios-de-viaje-coche.html" target="_self"><img src="http://www.misterguau.com/media//Accesorios_de_viaje.jpg" alt="Accesorios de viaje" /></a><span style="font-weight: bold; color: #33cccc;">&nbsp; &nbsp; </span><a style="font-weight: bold; font-size: x-small;" title="Casetas para perros" href="http://www.misterguau.com/index.php/perros/casetas-y-puertas.html" target="_self"><img src="http://www.misterguau.com/media//Casetas_para_perro.jpg" alt="Casetas para perro" /></a></span></p>
<p><a style="font-weight: bold; font-size: x-small;" title="Ropa y complementos para perros" href="http://www.misterguau.com/index.php/perros/ropa-y-complementos.html" target="_self">Ropa / complementos</a><span style="font-size: x-small;">&nbsp; &nbsp; &nbsp; &nbsp; </span><a style="font-weight: bold; font-size: x-small;" title="Transportines y bolsos para perro" href="http://www.misterguau.com/index.php/perros/bolsos-y-transportines.html" target="_self">Transportines/bolsos</a><span style="color: #33cccc; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Accesorios de viaje" href="http://www.misterguau.com/index.php/perros/accesorios-de-viaje-coche.html" target="_self">Accesorios de viaje</a><span style="color: #33cccc; font-weight: bold;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Casetas para perros" href="http://www.misterguau.com/index.php/perros/casetas-y-puertas.html" target="_self">Casetas para perro</a></p>
<p><span style="font-size: x-small;"><br /></span></p>
<p><span style="font-size: x-small;"><br /></span></p>
<p><span style="font-size: x-small;"><a style="font-weight: bold; font-size: x-small;" title="Educaci&oacute;n canina" href="http://www.misterguau.com/index.php/perros/educacion-canina.html" target="_self"><img src="http://www.misterguau.com/media//Educacion_cachorro.jpg" alt="Educacion canina" /></a>&nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-size: x-small;"><span style="color: #33cccc; font-weight: bold;">&nbsp;<a title="Educaci&oacute;n canina" href="http://www.misterguau.com/index.php/perros/educacion-canina.html" target="_self">Educaci&oacute;n canina</a></span><span style="color: #33cccc; font-weight: bold;">&nbsp;</span></span></p>
<p><span style="font-size: x-small;"><br /></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
                            Artículos 1 a 200 de 1308 totales                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/perros.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/perros.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
        <div class="pages">
        <strong>Página:</strong>
        <ol>
        
        
        
                                    <li class="current">1</li>
                                                <li><a href="http://www.misterguau.com/index.php/perros.html?p=2">2</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/perros.html?p=3">3</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/perros.html?p=4">4</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/perros.html?p=5">5</a></li>
                    

        
        
                    <li>
                <a class="next" href="http://www.misterguau.com/index.php/perros.html?p=2" title="Siguiente">
                                            <img src="http://www.misterguau.com/skin/frontend/base/default/images/i_pager-next.gif" alt="Siguiente" class="v-middle" />
                                    </a>
            </li>
                </ol>

    </div>
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/perros.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/perros.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/perros.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/perros.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
                    </div>
    </div>
    </div>

                <div class="listing-border">
        <ol class="products-list" id="products-list">
	                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/reposteria-topnature-brownie.html" title=". Repostería  Topnature - Brownie">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_brownie.jpg"  alt=". Repostería  Topnature - Brownie" title=". Repostería  Topnature - Brownie" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/reposteria-topnature-brownie.html" title=". Repostería  Topnature - Brownie"><b>. Repostería  Topnature - Brownie</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/reposteria-topnature-brownie.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4549/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosos brownies aptos para el consumo animal. Producto elaborado en pastelería totalmente artesanal, con ingredientes 100% naturales y apto para el consumo de perros y gatos. Sin aditivos ni antioxidantes. Puede ver la composición en +info. Un delicioso capricho para nuestra mascota!.  Formato: 3 brownies en cajita                    <a href="http://www.misterguau.com/index.php/reposteria-topnature-brownie.html" title=". Repostería  Topnature - Brownie">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/reposteria-topnature-galletas-huella.html" title=". Repostería  Topnature - Galletas huella">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_pack_8_huellas.jpg"  alt=". Repostería  Topnature - Galletas huella" title=". Repostería  Topnature - Galletas huella" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/reposteria-topnature-galletas-huella.html" title=". Repostería  Topnature - Galletas huella"><b>. Repostería  Topnature - Galletas huella</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/reposteria-topnature-galletas-huella.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4551/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas galletas con forma de huella de colores aptos para el consumo animal. Producto elaborado en pastelería totalmente artesanal, con ingredientes 100% naturales y apto para el consumo de perros y gatos. Sin aditivos ni antioxidantes. Puede ver la composición en +info. Un delicioso capricho para nuestra mascota!.  Formato: 8 galletas en bolsita con lazo                    <a href="http://www.misterguau.com/index.php/reposteria-topnature-galletas-huella.html" title=". Repostería  Topnature - Galletas huella">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/reposteria-topnature-macaradog-macarons.html" title=". Repostería  Topnature - Macaradog (macarons)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_macarodog.jpg"  alt=". Repostería  Topnature - Macaradog (macarons)" title=". Repostería  Topnature - Macaradog (macarons)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/reposteria-topnature-macaradog-macarons.html" title=". Repostería  Topnature - Macaradog (macarons)"><b>. Repostería  Topnature - Macaradog (macarons)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/reposteria-topnature-macaradog-macarons.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4550/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosos brownies aptos para el consumo animal. Producto elaborado en pastelería totalmente artesanal, con ingredientes 100% naturales y apto para el consumo de perros y gatos. Sin aditivos ni antioxidantes. Puede ver la composición en +info. Un delicioso capricho para nuestra mascota!.  Formato: 5 macarons en bolsita con lazo                    <a href="http://www.misterguau.com/index.php/reposteria-topnature-macaradog-macarons.html" title=". Repostería  Topnature - Macaradog (macarons)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/reposteria-topnature-tartaletas-felicidades.html" title=". Repostería  Topnature - Tartaletas Felicidades">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_tartaleta_felicidades.jpg"  alt=". Repostería  Topnature - Tartaletas Felicidades" title=". Repostería  Topnature - Tartaletas Felicidades" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/reposteria-topnature-tartaletas-felicidades.html" title=". Repostería  Topnature - Tartaletas Felicidades"><b>. Repostería  Topnature - Tartaletas Felicidades</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/reposteria-topnature-tartaletas-felicidades.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4552/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas tartaletas para celebrar el cumpleaños de nuestro pequeño amigo!. Producto elaborado en pastelería totalmente artesanal, con ingredientes 100% naturales y apto para el consumo de perros y gatos. Sin aditivos ni antioxidantes. Puede ver la composición en +info. Un delicioso capricho para nuestra mascota!.  Formato: 2 tartaletas envasadas al vacío.                    <a href="http://www.misterguau.com/index.php/reposteria-topnature-tartaletas-felicidades.html" title=". Repostería  Topnature - Tartaletas Felicidades">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/3-nudos-bicolor-48cm.html" title="3 Nudos Bicolor 48cm">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/3/_/3_nudos_bicolor_48cm_1.jpg"  alt="3 Nudos Bicolor 48cm" title="3 Nudos Bicolor 48cm" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/3-nudos-bicolor-48cm.html" title="3 Nudos Bicolor 48cm"><b>3 Nudos Bicolor 48cm</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/3-nudos-bicolor-48cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1261/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete tirador de 3 nudos realizado en hilo trenzado de gran resistencia. La parte intermedia es ideal para roer mientras que con las puntas podremos interactuar con sus juegos. Colores surtidos. Medida: 48cm                    <a href="http://www.misterguau.com/index.php/3-nudos-bicolor-48cm.html" title="3 Nudos Bicolor 48cm">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/abrigo-para-perro-barca-fcb-futbol-club-barcelona.html" title="Abrigo para perro Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_14_2.jpg"  alt="Abrigo para perro Barça (FCB - Futbol Club Barcelona)" title="Abrigo para perro Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/abrigo-para-perro-barca-fcb-futbol-club-barcelona.html" title="Abrigo para perro Barça (FCB - Futbol Club Barcelona)"><b>Abrigo para perro Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/abrigo-para-perro-barca-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3603/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto oficial FCB (Fútbol Club Barcelona). Precioso y práctico abrigo con los colores del FCB y el logo del club cosido en la parte superior. Con la parte interior de pelito suave que aporta muchísimo calor a la vez que deja libre las patas de nuestro amigo. Medidas: 25cm - 30cm - 35cm - 40cm                    <a href="http://www.misterguau.com/index.php/abrigo-para-perro-barca-fcb-futbol-club-barcelona.html" title="Abrigo para perro Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/abrigo-suave-rosa-con-falda.html" title="Abrigo suave rosa con falda">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/b/abrigo_suave_rosa_con_falda_y_pompones_20_cmpe50475.jpg"  alt="Abrigo suave rosa con falda" title="Abrigo suave rosa con falda" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/abrigo-suave-rosa-con-falda.html" title="Abrigo suave rosa con falda"><b>Abrigo suave rosa con falda</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/abrigo-suave-rosa-con-falda.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5069/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Abrigo con faldita muy suave para las perritas más presumidas. En color rosa pálido peluche. Realizada 100% poliester. Con elástico para la cola y ojal para la correa o arnés. Muy calentito. Medidas: 20cm - 25cm - 30cm                    <a href="http://www.misterguau.com/index.php/abrigo-suave-rosa-con-falda.html" title="Abrigo suave rosa con falda">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-adult-large-breed-100-natural.html" title="Acana Dog Adult Large Breed (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_adult_large_dog.jpg"  alt="Acana Dog Adult Large Breed (100% natural)" title="Acana Dog Adult Large Breed (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-adult-large-breed-100-natural.html" title="Acana Dog Adult Large Breed (100% natural)"><b>Acana Dog Adult Large Breed (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															64,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-adult-large-breed-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5366/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Para perros de más de un año y tamaño superior a 25Kg. A base de pollo Cobb y huevos enteros de granjas de las pradera locales, lenguado Silvestre pescado en la isla de Vancouver, y frutas y verduras maduradas al sol del valle de Okanagan – todo entregado fresco y sin conservantes cada día. ACANA es una deliciosa manera de mantener a su gran perro sano y fuerte. Formatos: 13Kg, Pack ECO online 2x13Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-adult-large-breed-100-natural.html" title="Acana Dog Adult Large Breed (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-adult-small-breed-100-natural.html" title="Acana Dog Adult Small Breed (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_adult_small.jpg"  alt="Acana Dog Adult Small Breed (100% natural)" title="Acana Dog Adult Small Breed (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-adult-small-breed-100-natural.html" title="Acana Dog Adult Small Breed (100% natural)"><b>Acana Dog Adult Small Breed (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-adult-small-breed-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5367/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Para perros de raza pequeña de un año o más. con pollo Cobb no enjaulado y huevos enteros de granjas de las praderas locales, lenguados silvestres capturados en el Norte de la Isla de Vancouver, y frutas y verduras maduradas al sol del valle de Okanagan – todo entregado fresco y sin conservantes cada día para alimentar a su perro por completo. ACANA es una deliciosa manera de mantener a su gran perro sano y fuerte. Formatos: 2.27Kg, 6.8Kg, Pack ECO online 2x6.8Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-adult-small-breed-100-natural.html" title="Acana Dog Adult Small Breed (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-grasslands-cordero-pato-y-huevo-100-natural.html" title="Acana Dog Grasslands - Cordero, pato y huevo (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_grasslands_dog.jpg"  alt="Acana Dog Grasslands - Cordero, pato y huevo (100% natural)" title="Acana Dog Grasslands - Cordero, pato y huevo (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-grasslands-cordero-pato-y-huevo-100-natural.html" title="Acana Dog Grasslands - Cordero, pato y huevo (100% natural)"><b>Acana Dog Grasslands - Cordero, pato y huevo (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-grasslands-cordero-pato-y-huevo-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5362/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ACANA Grasslands está cargado de cordero local, huevos enteros, pescado capturado en estado salvaje y pato criado sin jaulas – todos entregados frescos cada día. Sin cereales para reducir los carbohidratos no deseados, ACANA incluye frutas y verduras por su riqueza en fitonutrientes.. ACANA mantiene a su perro querido sano y fuerte. Formatos: 2.27Kg, 6.8Kg, 13Kg, Pack ECO online 2x13Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-grasslands-cordero-pato-y-huevo-100-natural.html" title="Acana Dog Grasslands - Cordero, pato y huevo (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-lamb-okanagan-apple-cordero-y-manzana-100-natural.html" title="Acana Dog Lamb&amp;Okanagan apple - Cordero y manzana (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_31_9.jpg"  alt="Acana Dog Lamb&amp;Okanagan apple - Cordero y manzana (100% natural)" title="Acana Dog Lamb&amp;Okanagan apple - Cordero y manzana (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-lamb-okanagan-apple-cordero-y-manzana-100-natural.html" title="Acana Dog Lamb&amp;Okanagan apple - Cordero y manzana (100% natural)"><b>Acana Dog Lamb&amp;Okanagan apple - Cordero y manzana (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															21,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-lamb-okanagan-apple-cordero-y-manzana-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5360/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lamb & Okanagan de Apple cuenta con cordero de rancho como única fuente proteica. Libre de cereales de alto índice glucémico, ACANA contiene frutas y verduras locales, incluyendo un 10% de manzanas Red Delicious del valle de Okanagan, entregados frescos para un sabor inigualable. Garantizado para mantener a su perro feliz, saludable y fuerte. Formatos: 2Kg, 11Kg, Pack ECO online 2x11Kg.                    <a href="http://www.misterguau.com/index.php/acana-dog-lamb-okanagan-apple-cordero-y-manzana-100-natural.html" title="Acana Dog Lamb&amp;Okanagan apple - Cordero y manzana (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-light-fit-100-natural.html" title="Acana Dog Light &amp; Fit (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_31_10.jpg"  alt="Acana Dog Light &amp; Fit (100% natural)" title="Acana Dog Light &amp; Fit (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-light-fit-100-natural.html" title="Acana Dog Light &amp; Fit (100% natural)"><b>Acana Dog Light &amp; Fit (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															62,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-light-fit-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5365/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ACANA Light & Fit es rica en proteínas de pollo y huevos enteros de las granjas de las pradera locales y lenguado silvestre capturado en el Norte de la Isla de Vancouver – todo entregado fresco para una nutrición y sabor inigualable. A diferencia de los alimentos “light” convencionales, ACANA Light & Fit es baja en carbohidratos y libre de cereales de alto índice glicémico. Formatos: 13Kg, Pack ECO online 2x13Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-light-fit-100-natural.html" title="Acana Dog Light &amp; Fit (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-pacific-salmon-arenque-y-lenguado-100-natural.html" title="Acana Dog Pacific - Salmón, arenque y lenguado (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_pacifica_dog.jpg"  alt="Acana Dog Pacific - Salmón, arenque y lenguado (100% natural)" title="Acana Dog Pacific - Salmón, arenque y lenguado (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-pacific-salmon-arenque-y-lenguado-100-natural.html" title="Acana Dog Pacific - Salmón, arenque y lenguado (100% natural)"><b>Acana Dog Pacific - Salmón, arenque y lenguado (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-pacific-salmon-arenque-y-lenguado-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5363/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ACANA Pacifica se hace con el salmón del Pacífico, arenque y lenguado – todo entregado fresco cada día desde el Norte de la Isla de Vancouver. Rica diversidad de peces silvestres frescos de ACANA, proporciona una gran fuente de proteínas para reflejar la dieta natural de su perro y mejorar su condición física. Libre de cereal, ACANA presenta frutas y verduras locales como una fuente rica de fitonutrientes naturales. Formatos: 2.27Kg, 13Kg, Pack ECO online 2x13Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-pacific-salmon-arenque-y-lenguado-100-natural.html" title="Acana Dog Pacific - Salmón, arenque y lenguado (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-puppy-junior-100-natural.html" title="Acana Dog Puppy &amp; Junior (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_31_11.jpg"  alt="Acana Dog Puppy &amp; Junior (100% natural)" title="Acana Dog Puppy &amp; Junior (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-puppy-junior-100-natural.html" title="Acana Dog Puppy &amp; Junior (100% natural)"><b>Acana Dog Puppy &amp; Junior (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-puppy-junior-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5369/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Para cachorros de raza mediana (+ de 9Kg y - de 25Kg). Contiene pollo Cobb y huevos enteros de granjas locales, lenguado Silvestre del Norte de la Isla de Vancouver, y frutas y verduras del Valle de Okanagan – todo entregado fresco cada día por lo que conservan sus propiedades.ACANA es una deliciosa manera de mantener a su gran perro sano y fuerte. Formatos: 2.27Kg, 13Kg, Pack ECO online 2x13Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-puppy-junior-100-natural.html" title="Acana Dog Puppy &amp; Junior (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-puppy-junior-100-natural-5370.html" title="Acana Dog Puppy &amp; Junior Small Breed (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_puppy_small.jpg"  alt="Acana Dog Puppy &amp; Junior Small Breed (100% natural)" title="Acana Dog Puppy &amp; Junior Small Breed (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-puppy-junior-100-natural-5370.html" title="Acana Dog Puppy &amp; Junior Small Breed (100% natural)"><b>Acana Dog Puppy &amp; Junior Small Breed (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-puppy-junior-100-natural-5370.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5370/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Para cachorros de raza pequeña (menos de 10Kg). Hecho con pollos de corral, huevos enteros de granjas locales, lenguado capturado en el  Norte de la Isla de  Vancouver y frutas y verduras maduradas al sol de Okanagan – todos entregados en estado fresco para una nutrición y sabor inigualable. ACANA es una deliciosa manera de mantener a su gran perro sano y fuerte. Formatos: 2.27Kg, 6.8Kg, Pack ECO online 2x6.8Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-puppy-junior-100-natural-5370.html" title="Acana Dog Puppy &amp; Junior Small Breed (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-puppy-large-breed-100-natural.html" title="Acana Dog Puppy Large Breed (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_puppy_large_breed.jpg"  alt="Acana Dog Puppy Large Breed (100% natural)" title="Acana Dog Puppy Large Breed (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-puppy-large-breed-100-natural.html" title="Acana Dog Puppy Large Breed (100% natural)"><b>Acana Dog Puppy Large Breed (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															67,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-puppy-large-breed-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5368/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Para cachorros de raza grande (+25Kg). Hecho con pollo Cobb no enjaulado y huevos enteros de las granjas de las praderas locales, lenguado de la Isla de Vancouver pescado en la naturaleza, y frutas y verduras del  Valle de Okanagan – todo entregado fresco cada día para alimentar a su cachorro por completo. ACANA es una deliciosa manera de mantener a su gran perro sano y fuerte. Formatos: 13Kg, Pack ECO online 2x13Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-puppy-large-breed-100-natural.html" title="Acana Dog Puppy Large Breed (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-ranchlands-ternera-angus-cordero-y-bison-100-natural.html" title="Acana Dog Ranchlands - Ternera Angus, cordero y bison (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_ranchlands_dog.jpg"  alt="Acana Dog Ranchlands - Ternera Angus, cordero y bison (100% natural)" title="Acana Dog Ranchlands - Ternera Angus, cordero y bison (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-ranchlands-ternera-angus-cordero-y-bison-100-natural.html" title="Acana Dog Ranchlands - Ternera Angus, cordero y bison (100% natural)"><b>Acana Dog Ranchlands - Ternera Angus, cordero y bison (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-ranchlands-ternera-angus-cordero-y-bison-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5364/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Acana Ranchlands incluye frutas y verduras frescas, incluyendo las patatas Burbank, calabaza, manzanas Red delicious y hojas de espinacas que dotan a su perro de una gran fuente de fitonutrientes. Preparado en nuestras galardonadas cocinas, con los ingredientes más frescos, Acana Ranchlands es una deliciosa forma de mantener a su perro feliz y fuerte – ¡Garantizado!. Formatos: 2.27Kg, 13Kg, Pack ECO online 2x13Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-ranchlands-ternera-angus-cordero-y-bison-100-natural.html" title="Acana Dog Ranchlands - Ternera Angus, cordero y bison (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-dog-wild-prairie-pollo-y-huevo-100-natural.html" title="Acana Dog Wild Prairie - Pollo y huevo (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_wild_prairie_dog.jpg"  alt="Acana Dog Wild Prairie - Pollo y huevo (100% natural)" title="Acana Dog Wild Prairie - Pollo y huevo (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-dog-wild-prairie-pollo-y-huevo-100-natural.html" title="Acana Dog Wild Prairie - Pollo y huevo (100% natural)"><b>Acana Dog Wild Prairie - Pollo y huevo (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															20,69&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-dog-wild-prairie-pollo-y-huevo-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5361/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ACANA Wild Prairie con pollo Cobb  y huevos enteros de granjas locales, y peces capturados en los fríos lagos del norte – todo entregado fresco cada día!.  Libre de cereales para reducir los carbohidratos no deseados, ACANA presenta verduras locales, frutas e ingredientes botánicos como fuente rica en oligoelementos y antioxidantes naturales. ACANA mantiene a su perro querido sano y fuerte. Formatos: 2.27Kg, 13Kg, Pack ECO online 2x13Kg                    <a href="http://www.misterguau.com/index.php/acana-dog-wild-prairie-pollo-y-huevo-100-natural.html" title="Acana Dog Wild Prairie - Pollo y huevo (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adaptador-para-cinturon-de-seguridad-karlie.html" title="Adaptador para cinturón de seguridad Karlie">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adaptador_cinturon_de_seguridad_1.jpg"  alt="Adaptador para cinturón de seguridad Karlie" title="Adaptador para cinturón de seguridad Karlie" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adaptador-para-cinturon-de-seguridad-karlie.html" title="Adaptador para cinturón de seguridad Karlie"><b>Adaptador para cinturón de seguridad Karlie</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>8,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.71&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adaptador-para-cinturon-de-seguridad-karlie.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1962/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Adaptador para poder anclar el arnés de nuestro perro al cinturón de seguridad con total tranquilidad. Adaptable a la mayoría de cinturones de seguridad del mercado estándar  (a excepción de Volvo, Saab, Chevrolet). Hecho de material de nylon resistente.. Disponible en dos medidas de ancho: (M) 25mm                    <a href="http://www.misterguau.com/index.php/adaptador-para-cinturon-de-seguridad-karlie.html" title="Adaptador para cinturón de seguridad Karlie">Saber más</a><br><br>
					<span class="required"><strong>25% Dto exclusivo online! Ultimas unidades!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adaptador-para-cinturon-de-seguridad-nayeco-negro-o-rojo.html" title="Adaptador para cinturón de seguridad Nayeco (Negro o rojo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adaptador-cinturon_seguridad_20mm_rojo.jpg"  alt="Adaptador para cinturón de seguridad Nayeco (Negro o rojo)" title="Adaptador para cinturón de seguridad Nayeco (Negro o rojo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adaptador-para-cinturon-de-seguridad-nayeco-negro-o-rojo.html" title="Adaptador para cinturón de seguridad Nayeco (Negro o rojo)"><b>Adaptador para cinturón de seguridad Nayeco (Negro o rojo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adaptador-para-cinturon-de-seguridad-nayeco-negro-o-rojo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5492/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Adaptador para poder anclar el arnés de nuestro perro al cinturón de seguridad con total tranquilidad. Adaptable a la mayoría de cinturones de seguridad del mercado estándar. Hecho con nylon resistente. Disponible en dos colores (negro y rojo) y dos medidas (S: 20mm o M: 25mm)                    <a href="http://www.misterguau.com/index.php/adaptador-para-cinturon-de-seguridad-nayeco-negro-o-rojo.html" title="Adaptador para cinturón de seguridad Nayeco (Negro o rojo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adaptil-dap-collar-antiestres-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Collar antiestrés  - Tranquilizante feromonas para perro">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adaptil_collar_45_cm.jpg"  alt="Adaptil (DAP) Collar antiestrés  - Tranquilizante feromonas para perro" title="Adaptil (DAP) Collar antiestrés  - Tranquilizante feromonas para perro" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adaptil-dap-collar-antiestres-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Collar antiestrés  - Tranquilizante feromonas para perro"><b>Adaptil (DAP) Collar antiestrés  - Tranquilizante feromonas para perro</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adaptil-dap-collar-antiestres-tranquilizante-feromonas-para-perro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4707/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Adaptil (antes llamado DAP) es una copia sintética de la feromona natural canina de apaciguamiento que ayuda a los perros a relajarse en estados estresantes (visitas, tormentas, fuegos artificiales, etc). Con Adaptil, el perro siente una sensación de calma y confort permanentes. En collar recortable para que pueda llevarlo fácilmente. Apto para cachorros y adultos. Formato: M (45cm) - L (70cm)                    <a href="http://www.misterguau.com/index.php/adaptil-dap-collar-antiestres-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Collar antiestrés  - Tranquilizante feromonas para perro">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adaptil-dap-difusor-recambio-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Difusor  - Tranquilizante feromonas para perro">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_1_86.jpg"  alt="Adaptil (DAP) Difusor  - Tranquilizante feromonas para perro" title="Adaptil (DAP) Difusor  - Tranquilizante feromonas para perro" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adaptil-dap-difusor-recambio-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Difusor  - Tranquilizante feromonas para perro"><b>Adaptil (DAP) Difusor  - Tranquilizante feromonas para perro</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															28,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adaptil-dap-difusor-recambio-tranquilizante-feromonas-para-perro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3221/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Medicamento no sedante que previene y controla de forma natural las reacciones de estrés y presión en los perros (petardos, ansiedad por separación, ladridos, etc).  Fácil de usar a través de un difusor, se conecta a la corriente fácilmente, liberando continuamente el ingrediente activo en el entorno del perro con un alcance de 65 metros cuadrados y 4 semanas de duración. Presentación: Difusor + vial de 48ml.                    <a href="http://www.misterguau.com/index.php/adaptil-dap-difusor-recambio-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Difusor  - Tranquilizante feromonas para perro">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adaptil-dap-recambio-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Recambio  - Tranquilizante feromonas para perro">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adaptil_recambio_difusor_9826.jpg"  alt="Adaptil (DAP) Recambio  - Tranquilizante feromonas para perro" title="Adaptil (DAP) Recambio  - Tranquilizante feromonas para perro" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adaptil-dap-recambio-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Recambio  - Tranquilizante feromonas para perro"><b>Adaptil (DAP) Recambio  - Tranquilizante feromonas para perro</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adaptil-dap-recambio-tranquilizante-feromonas-para-perro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3222/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Botellín de recambio para el tranquilizante a base de feronomas para perro Adaptil (antiguamente DAP). Duración aproximada de 30 días, estando encendido 24h al día. Formato: 48ml.                    <a href="http://www.misterguau.com/index.php/adaptil-dap-recambio-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Recambio  - Tranquilizante feromonas para perro">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adaptil-dap-spray-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Spray  - Tranquilizante feromonas para perro">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adaptil_spray_60ml_c95610u.jpg"  alt="Adaptil (DAP) Spray  - Tranquilizante feromonas para perro" title="Adaptil (DAP) Spray  - Tranquilizante feromonas para perro" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adaptil-dap-spray-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Spray  - Tranquilizante feromonas para perro"><b>Adaptil (DAP) Spray  - Tranquilizante feromonas para perro</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adaptil-dap-spray-tranquilizante-feromonas-para-perro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4602/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Adaptil (antes llamado DAP) es una copia sintética de la feromona natural canina de apaciguamiento que ayuda a los perros a relajarse en estados estresantes (visitas, tormentas, fuegos artificiales, etc). Con Adaptil, el perro siente una sensación de calma y confort permanentes. Formato: 60ml.                    <a href="http://www.misterguau.com/index.php/adaptil-dap-spray-tranquilizante-feromonas-para-perro.html" title="Adaptil (DAP) Spray  - Tranquilizante feromonas para perro">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-all-breeds-cordero.html" title="Advance Canine All Breeds Cordero">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_all_breeds_cordero_1.jpg"  alt="Advance Canine All Breeds Cordero" title="Advance Canine All Breeds Cordero" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-all-breeds-cordero.html" title="Advance Canine All Breeds Cordero"><b>Advance Canine All Breeds Cordero</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-all-breeds-cordero.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/126/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para perros adultos de todas las razas y para un especial cuidado de la piel y el pelo. Formatos: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-all-breeds-cordero.html" title="Advance Canine All Breeds Cordero">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-boxer.html" title="Advance Canine Boxer">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_boxer_1.jpg"  alt="Advance Canine Boxer" title="Advance Canine Boxer" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-boxer.html" title="Advance Canine Boxer"><b>Advance Canine Boxer</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															69,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-boxer.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2982/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento de alta calidad especialmente formulado para satisfacer las necesidades nutricionales de los perros de raza Boxer. Excelentes fuentes de proteína e hidratos de carbono fácilmente digestibles que contribuyen a una óptima nutrición y digestión. Fomenta la protección de la movilidad, digestión óptima y vista saludable. Formato: 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-boxer.html" title="Advance Canine Boxer">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-bulldog-frances.html" title="Advance Canine Bulldog Francés">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_bulldog_frances_1.jpg"  alt="Advance Canine Bulldog Francés" title="Advance Canine Bulldog Francés" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-bulldog-frances.html" title="Advance Canine Bulldog Francés"><b>Advance Canine Bulldog Francés</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>25,65&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 21.65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-bulldog-frances.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2983/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento de alta calidad especialmente formulado para satisfacer las necesidades nutricionales de los perros de raza Bulldog francés. Ingredientes fuentes de proteínas noveles de excelente digestibilidad que contribuyen a una óptima nutrición y digestión, y a menores problemas de piel. Formatos: 3Kg, 9Kg,  Pack ECO 2x9Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-bulldog-frances.html" title="Advance Canine Bulldog Francés">Saber más</a><br><br>
					<span class="required"><strong>16% Dto en 3Kg! Ahorra 4&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-bulldog-ingles.html" title="Advance Canine Bulldog Inglés">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_bulldog_1.jpg"  alt="Advance Canine Bulldog Inglés" title="Advance Canine Bulldog Inglés" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-bulldog-ingles.html" title="Advance Canine Bulldog Inglés"><b>Advance Canine Bulldog Inglés</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															69,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-bulldog-ingles.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2015/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento de alta calidad especialmente formulado para satisfacer las necesidades nutricionales de perros de raza Bulldog adulto. Excelentes fuentes de proteína e hidratos de carbono fácilmente digestibles que favorecen una nutrición óptima para digestiones delicadas. Formato: 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-bulldog-ingles.html" title="Advance Canine Bulldog Inglés">Saber más</a><br><br>
					<span class="required"><strong>11% Dto en 12Kg! Ahorra 8&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-labrador-retriever.html" title="Advance Canine Labrador Retriever">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_labrador_1.jpg"  alt="Advance Canine Labrador Retriever" title="Advance Canine Labrador Retriever" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-labrador-retriever.html" title="Advance Canine Labrador Retriever"><b>Advance Canine Labrador Retriever</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															69,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-labrador-retriever.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2016/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento de alta calidad especialmente formulado para satisfacer las necesidades nutricionales de perros de raza Labrador adulto. Excelente fuente de proteínas altamente digestibles y aminoácidos esenciales. Aportan fibra y carbohidratos de liberación lenta, que aumentan la sensación de saciedad en el perro, mejorando su metabolismo y favoreciendo el control de peso. Formato: 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-labrador-retriever.html" title="Advance Canine Labrador Retriever">Saber más</a><br><br>
					<span class="required"><strong>11% Dto en 12Kg! Ahorra 8&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-maxi-adult.html" title="Advance Canine Maxi Adult ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_maxi_adult_1.jpg"  alt="Advance Canine Maxi Adult " title="Advance Canine Maxi Adult " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-maxi-adult.html" title="Advance Canine Maxi Adult "><b>Advance Canine Maxi Adult </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															70,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-maxi-adult.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/175/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para perros adultos de raza grande (más de 30 kg de peso adulto). Niveles adecuados de proteína y grasa. Partícula grande. Formato: 14Kg,  Pack ECO 2x14Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-maxi-adult.html" title="Advance Canine Maxi Adult ">Saber más</a><br><br>
					<span class="required"><strong>14% Dto en 14Kg! Ahorra 10&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-maxi-junior.html" title="Advance Canine Maxi Junior ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_maxi_junior_1.jpg"  alt="Advance Canine Maxi Junior " title="Advance Canine Maxi Junior " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-maxi-junior.html" title="Advance Canine Maxi Junior "><b>Advance Canine Maxi Junior </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>86,80&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 76.80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-maxi-junior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/176/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para cachorros (12 a 24 meses) de raza grande (de más de 30 kg de peso adulto). Formato: 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-maxi-junior.html" title="Advance Canine Maxi Junior ">Saber más</a><br><br>
					<span class="required"><strong>12% Dto en 15Kg! Ahorra 10&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-maxi-light.html" title="Advance Canine Maxi Light ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_maxi_light_1.jpg"  alt="Advance Canine Maxi Light " title="Advance Canine Maxi Light " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-maxi-light.html" title="Advance Canine Maxi Light "><b>Advance Canine Maxi Light </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															81,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-maxi-light.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/177/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para perros adultos de raza grande ( más de 30 kg de peso adulto) con sobrepeso o tendencia a la obesidad. Formato: 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-maxi-light.html" title="Advance Canine Maxi Light ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-maxi-puppy.html" title="Advance Canine Maxi Puppy">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_maxi_puppy_1.jpg"  alt="Advance Canine Maxi Puppy" title="Advance Canine Maxi Puppy" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-maxi-puppy.html" title="Advance Canine Maxi Puppy"><b>Advance Canine Maxi Puppy</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-maxi-puppy.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/179/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para cachorros( de 2 a 12 meses) de raza grande (de más de 30kg de peso adulto). Recomendable para hembras gestantes y lactantes de raza grande, ya que es extra-energético. Formatos: 3Kg, 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-maxi-puppy.html" title="Advance Canine Maxi Puppy">Saber más</a><br><br>
					<span class="required"><strong>16% Dto en 3Kg! Ahorra 4.10&euro;! <br><br>23% Dto en 15Kg! Ahorra 20&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-maxi-senior.html" title="Advance Canine Maxi Senior">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_maxi_senior_1.jpg"  alt="Advance Canine Maxi Senior" title="Advance Canine Maxi Senior" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-maxi-senior.html" title="Advance Canine Maxi Senior"><b>Advance Canine Maxi Senior</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															81,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-maxi-senior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/180/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para perros de más de 6 años de raza grande (más de 30 kg de peso adulto). Formato: 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-maxi-senior.html" title="Advance Canine Maxi Senior">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-medium-adult.html" title="Advance Canine Medium Adult">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_medium_adult_1.jpg"  alt="Advance Canine Medium Adult" title="Advance Canine Medium Adult" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-medium-adult.html" title="Advance Canine Medium Adult"><b>Advance Canine Medium Adult</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-medium-adult.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/181/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento especialmente indicado para perros adultos (de 1 a 7 años) de raza mediana (de 10 a 30 kg. de peso adulto. Incorpora niveles adecuados de proteínas y grasas. Partícula mediana. Formatos: 3Kg, 14Kg,  Pack ECO 2x14Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-medium-adult.html" title="Advance Canine Medium Adult">Saber más</a><br><br>
					<span class="required"><strong>21% Dto en 3Kg! Ahorra 4.75&euro;! <br><br>11% Dto en 14Kg! Ahorra 7.60&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-medium-light.html" title="Advance Canine Medium Light">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_medium_light_1.jpg"  alt="Advance Canine Medium Light" title="Advance Canine Medium Light" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-medium-light.html" title="Advance Canine Medium Light"><b>Advance Canine Medium Light</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-medium-light.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/182/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento especialmente indicado para perros de raza mediana (de 10 a 30 kg. de peso adulto) con sobrepeso o tendencia a la obesidad. Alto contenido en fibra y proteínas. L-Carnitina. Partícula mediana. Formatos: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-medium-light.html" title="Advance Canine Medium Light">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-medium-puppy.html" title="Advance Canine Medium Puppy">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_medium_puppy_1.jpg"  alt="Advance Canine Medium Puppy" title="Advance Canine Medium Puppy" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-medium-puppy.html" title="Advance Canine Medium Puppy"><b>Advance Canine Medium Puppy</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-medium-puppy.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/183/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para cachorros ( de 2 a 12 meses) de raza mediana (de 10 a 30 kg peso adulto) y hembras gestantes o lactantes. Formatos: 3Kg, 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-medium-puppy.html" title="Advance Canine Medium Puppy">Saber más</a><br><br>
					<span class="required"><strong>14% Dto en 3Kg! Ahorra 3.65&euro;! <br><br>23% Dto en 15Kg! Ahorra 20&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-medium-senior.html" title="Advance Canine Medium Senior">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_medium_senior_1.jpg"  alt="Advance Canine Medium Senior" title="Advance Canine Medium Senior" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-medium-senior.html" title="Advance Canine Medium Senior"><b>Advance Canine Medium Senior</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-medium-senior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/184/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para perros de más de 7 años de raza mediana (de 10 a 30kg de peso adulto). Formatos: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-medium-senior.html" title="Advance Canine Medium Senior">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-mini-adult.html" title="Advance Canine Mini Adult">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_mini_adult_1.jpg"  alt="Advance Canine Mini Adult" title="Advance Canine Mini Adult" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-mini-adult.html" title="Advance Canine Mini Adult"><b>Advance Canine Mini Adult</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-mini-adult.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/185/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para perros adultos de raza pequeña (hasta 10kg de peso adulto). Desde los 8 meses hasta los 8 años. Formatos: 800gr , 3Kg, 7.5Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-mini-adult.html" title="Advance Canine Mini Adult">Saber más</a><br><br>
					<span class="required"><strong>23% Dto en 3Kg! Ahorra 5.40&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-mini-light.html" title="Advance Canine Mini Light">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_mini_light.jpg"  alt="Advance Canine Mini Light" title="Advance Canine Mini Light" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-mini-light.html" title="Advance Canine Mini Light"><b>Advance Canine Mini Light</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-mini-light.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/186/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento especialmente indicado para perros adultos de raza pequeña (hasta 10 kg. de peso adulto) con sobrepeso o tendencia a la obesidad. Incorpora alto contenido en fibra y proteínas y bajo en calorías. L-Carnitina. Partícula pequeña. Formatos: 800gr , 3Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-mini-light.html" title="Advance Canine Mini Light">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-mini-puppy.html" title="Advance Canine Mini Puppy">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_mini_puppy_1.jpg"  alt="Advance Canine Mini Puppy" title="Advance Canine Mini Puppy" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-mini-puppy.html" title="Advance Canine Mini Puppy"><b>Advance Canine Mini Puppy</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-mini-puppy.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/187/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento especialmente indicado para cachorros (de 2 a 8 meses) de raza pequeña (hasta 10 kg. de peso adulto) y hembras gestantes o lactantes. Formatos: 800gr , 3Kg, 7.5Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-mini-puppy.html" title="Advance Canine Mini Puppy">Saber más</a><br><br>
					<span class="required"><strong>16% Dto en 3Kg! Ahorra 4.20&euro;! <br><br>21% Dto en 7.5Kg! Ahorra 11&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-mini-senior.html" title="Advance Canine Mini Senior">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_mini_senior.jpg"  alt="Advance Canine Mini Senior" title="Advance Canine Mini Senior" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-mini-senior.html" title="Advance Canine Mini Senior"><b>Advance Canine Mini Senior</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-mini-senior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/188/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para perros de raza pequeña de más de 8 años (hasta 10kg de peso adulto). Formatos: 800gr , 3Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-mini-senior.html" title="Advance Canine Mini Senior">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-mini-sensitive.html" title="Advance Canine Mini Sensitive">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_mini_sensitive_800_grs.jpg"  alt="Advance Canine Mini Sensitive" title="Advance Canine Mini Sensitive" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-mini-sensitive.html" title="Advance Canine Mini Sensitive"><b>Advance Canine Mini Sensitive</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-mini-sensitive.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5399/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento de gran calidad para perros de raza pequeña (menos de 10 kilos de peso adulto) que no asimilen bien la proteína de la carne o ingredientes asociados a la sensibilidad alimentaria. A base de salmón. Formatos: 800gr , 3Kg, 7.5Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-mini-sensitive.html" title="Advance Canine Mini Sensitive">Saber más</a><br><br>
					<span class="required"><strong>32% Dto en 3Kg! Ahorra 7.95&euro;! <br><br>34% Dto en 7.5Kg! Ahorra 16.30&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-pastor-aleman.html" title="Advance Canine Pastor Alemán">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_german_shepherd_1.jpg"  alt="Advance Canine Pastor Alemán" title="Advance Canine Pastor Alemán" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-pastor-aleman.html" title="Advance Canine Pastor Alemán"><b>Advance Canine Pastor Alemán</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															69,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-pastor-aleman.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2017/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento de alta calidad especialmente formulado para satisfacer las necesidades nutricionales de perros de raza Pastor Alemán adulto. Excelentes fuentes de proteínas e hidratos de carbono de gran digestibilidad para una óptima nutrición. Ingredientes funcionales para favorecer la función digestiva y ayudar a mantener una salud intestinal óptima. Formato: 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-pastor-aleman.html" title="Advance Canine Pastor Alemán">Saber más</a><br><br>
					<span class="required"><strong>11% Dto en 12Kg! Ahorra 8&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-puppy-protect-initial.html" title="Advance Canine Puppy Protect Initial &amp; Mother Dog">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_puppy_pro_initial_1.jpg"  alt="Advance Canine Puppy Protect Initial &amp; Mother Dog" title="Advance Canine Puppy Protect Initial &amp; Mother Dog" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-puppy-protect-initial.html" title="Advance Canine Puppy Protect Initial &amp; Mother Dog"><b>Advance Canine Puppy Protect Initial &amp; Mother Dog</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-puppy-protect-initial.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/142/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Aporta los nucleótidos necesarios y con un perfil idéntico a los de la leche materna durante todo el crecimiento del cachorro. Con aporte nutricional suplementario evita problemas como el retardo en el crecimiento, malnutrición y diarreas o infecciones. Formatos: 400gr, 3Kg                     <a href="http://www.misterguau.com/index.php/advance-canine-puppy-protect-initial.html" title="Advance Canine Puppy Protect Initial &amp; Mother Dog">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-puppy-sensitive-salmon.html" title="Advance Canine Puppy Sensitive (Salmón)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_puppy_sensitive_1.jpg"  alt="Advance Canine Puppy Sensitive (Salmón)" title="Advance Canine Puppy Sensitive (Salmón)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-puppy-sensitive-salmon.html" title="Advance Canine Puppy Sensitive (Salmón)"><b>Advance Canine Puppy Sensitive (Salmón)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-puppy-sensitive-salmon.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3429/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para cachorros de 2 a 12 meses con alergia y/o sensibilidad alimentaria. Formulado a base de salmón y arroz. Para cachorros de cualquier raza con hipersensibilidad alimentaria. Formulado para evitar el picor y escozor en la piel. Para cachorros con intolerancia a las proteinas de origen animal. Formatos: 800gr, 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-puppy-sensitive-salmon.html" title="Advance Canine Puppy Sensitive (Salmón)">Saber más</a><br><br>
					<span class="required"><strong>27% Dto en 800g! Ahorra 2.25&euro;! <br><br>26% Dto en 3Kg! Ahorra 7&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-sensitive-salmon-arroz.html" title="Advance Canine Sensitive (Salmón&amp;arroz)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_sensitive.jpg"  alt="Advance Canine Sensitive (Salmón&amp;arroz)" title="Advance Canine Sensitive (Salmón&amp;arroz)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-sensitive-salmon-arroz.html" title="Advance Canine Sensitive (Salmón&amp;arroz)"><b>Advance Canine Sensitive (Salmón&amp;arroz)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-sensitive-salmon-arroz.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/190/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para perros adultos de todas las razas sensibles a la proteína de la carne y a ingredientes asociados a la sensibilidad alimentaria. Contiene únicamente Proteínas de Pescado. Formatos: 3Kg, 12Kg. Pack ECO 2x12Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-sensitive-salmon-arroz.html" title="Advance Canine Sensitive (Salmón&amp;arroz)">Saber más</a><br><br>
					<span class="required"><strong>14% Dto en 12Kg! Ahorra 10&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care.html" title="Advance Canine VD Articular Care">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_can_articular_care_3kg.jpg"  alt="Advance Canine VD Articular Care" title="Advance Canine VD Articular Care" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care.html" title="Advance Canine VD Articular Care"><b>Advance Canine VD Articular Care</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-articular-care.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/953/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado, con condroprotectores y ácidos grasos omega 3, de fácil digestión para la alimentación diaria de perros con enfermedades articulares, predispuestos a sufrirlas o perros sanos que necesitan suplementos nutricionales para garantizar una función normal de las articulaciones. A partir de los 6 meses de edad. Formatos: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care.html" title="Advance Canine VD Articular Care">Saber más</a><br><br>
					<span class="required"><strong>20% Dto en 12Kg! Ahorra 15&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care-reduced-calorie.html" title="Advance Canine VD Articular Care (Reduced Calorie)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_can_articular_care_reduced_calorie_3kg.jpg"  alt="Advance Canine VD Articular Care (Reduced Calorie)" title="Advance Canine VD Articular Care (Reduced Calorie)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care-reduced-calorie.html" title="Advance Canine VD Articular Care (Reduced Calorie)"><b>Advance Canine VD Articular Care (Reduced Calorie)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-articular-care-reduced-calorie.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4941/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Advance Articular Care Reduced Calorie está indicado para perros con problemas articulares y sobrepeso. Ayuda al cuidado del cartilago, mejorar la movilidad y el mantenimiento y protección del hueso. A partir de los 6 meses de edad. Debe estar prescrito por su veterinario. Formato: 3Kg, 12Kg, PacK ECO 2x12Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care-reduced-calorie.html" title="Advance Canine VD Articular Care (Reduced Calorie)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care-7.html" title="Advance Canine VD Articular Care +7">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_55.jpg"  alt="Advance Canine VD Articular Care +7" title="Advance Canine VD Articular Care +7" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care-7.html" title="Advance Canine VD Articular Care +7"><b>Advance Canine VD Articular Care +7</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-articular-care-7.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4942/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo recomendado para perros mayores de 7 años con problemas articulares, formulado específicamente para ayudar a contrarrestar algunos de los cambios que se producen con la edad, como son la pérdida de masa muscular, de la función cognitiva y el fallo renal. Debe estar prescrito por su veterinario. Formato: 3Kg, 12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-articular-care-7.html" title="Advance Canine VD Articular Care +7">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-atopic.html" title="Advance Canine VD Atopic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_atopic_1.jpg"  alt="Advance Canine VD Atopic" title="Advance Canine VD Atopic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-atopic.html" title="Advance Canine VD Atopic"><b>Advance Canine VD Atopic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															27,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-atopic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2243/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pienso formulado para las siguientes indicaciones: Dermatitis atópica / Reacciones adversas al alimento en perros con dermatisis atópica / Prurito crónico /  Problemas intestinales con prurito asociado / Otitis externa de componente alérgico / Regenearción de la barrera lipídica de la piel / Enfermedad inflamatoria intestinal / Otros problemas inflamatorios de la piel. Este producto debe estar prescrito por su veterinario. Formatos: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-atopic.html" title="Advance Canine VD Atopic">Saber más</a><br><br>
					<span class="required"><strong>24% Dto en 12Kg! Ahorra 20&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-diabetes-colitis.html" title="Advance Canine VD Diabetes-Colitis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_diabetes_colitis.jpg"  alt="Advance Canine VD Diabetes-Colitis" title="Advance Canine VD Diabetes-Colitis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-diabetes-colitis.html" title="Advance Canine VD Diabetes-Colitis"><b>Advance Canine VD Diabetes-Colitis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-diabetes-colitis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/133/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético completo para el mantenimiento de perros adultos formulado para regular el suministro de glucosa (Diabetes Mellitus) y para la compensación de las alteraciones de la digestión. Formatos: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-diabetes-colitis.html" title="Advance Canine VD Diabetes-Colitis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-gastroenteric.html" title="Advance Canine VD Gastroenteric">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_gastroenteric.jpg"  alt="Advance Canine VD Gastroenteric" title="Advance Canine VD Gastroenteric" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-gastroenteric.html" title="Advance Canine VD Gastroenteric"><b>Advance Canine VD Gastroenteric</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-gastroenteric.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/134/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético completo para perros adultos y cachorros, diseñado con ingredientes de altísima digestibilidad, y con un bajo nivel de materias grasas, para ayudar al tratamiento de ciertos transtornos gastrointestinales y para casos de insuficiencia pancreática exocrina crónica. Formatos: 800gr, 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-gastroenteric.html" title="Advance Canine VD Gastroenteric">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-hypoallergenic.html" title="Advance Canine VD Hypoallergenic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_hypoallergenic.jpg"  alt="Advance Canine VD Hypoallergenic" title="Advance Canine VD Hypoallergenic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-hypoallergenic.html" title="Advance Canine VD Hypoallergenic"><b>Advance Canine VD Hypoallergenic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															30,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-hypoallergenic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/136/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético hipoalergénico completo para perros, diseñado para la reducción de la intolerancia a ingredientes y nutrientes, con una fuente de proteínas seleccionadas y una fuente seleccionada de hidratos de carbono. Este producto debe estar prescrito por su veterinario. Formatos: 2.5Kg, 10Kg, Pack ECO 2x10Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-hypoallergenic.html" title="Advance Canine VD Hypoallergenic">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-intolerance-limited-antigen.html" title="Advance Canine VD Intolerance Limited antigen">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_intolelance_limited_antigen_1.jpg"  alt="Advance Canine VD Intolerance Limited antigen" title="Advance Canine VD Intolerance Limited antigen" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-intolerance-limited-antigen.html" title="Advance Canine VD Intolerance Limited antigen"><b>Advance Canine VD Intolerance Limited antigen</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-intolerance-limited-antigen.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2242/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pienso especialmente formulado para las siguientes indicaciones: Dermatitis alérgica relacionada con los alimentos, prurito relacionado con atopia, otros problemas inflamatorios de la piel, enfermedad inflamatoria intestinal, gastroenteritis relacionadas con alergias. Este producto debe estar prescrito por su veterinario.Formato: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-intolerance-limited-antigen.html" title="Advance Canine VD Intolerance Limited antigen">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-leishmaniasis-management.html" title="Advance Canine VD Leishmaniasis Management">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_leishmaniasis.jpg"  alt="Advance Canine VD Leishmaniasis Management" title="Advance Canine VD Leishmaniasis Management" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-leishmaniasis-management.html" title="Advance Canine VD Leishmaniasis Management"><b>Advance Canine VD Leishmaniasis Management</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															30,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-leishmaniasis-management.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/137/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ANTIOXIDANT PLUS: Máximo efecto antioxidante para potenciar la inmunidad celular combinando de un modo sinérgico la Vitamina E, Vitamina C, Bioflavonoides, Taurina y Selenio. * BAJO EN PURINAS: Ingredientes bajos en nucleótidos para prevenir la formación de cálculos de xantina derivados del uso del Allopurinol. Este producto debe estar prescrito por su veterinario. Formatos: 3Kg, 10Kg, Pack ECO 2x10Kg                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-leishmaniasis-management.html" title="Advance Canine VD Leishmaniasis Management">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-obesity-management.html" title="Advance Canine VD Obesity Management">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_obesity.jpg"  alt="Advance Canine VD Obesity Management" title="Advance Canine VD Obesity Management" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-obesity-management.html" title="Advance Canine VD Obesity Management"><b>Advance Canine VD Obesity Management</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-obesity-management.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/138/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético completo para perros formulado para la reducción del exceso de peso y la regulación del metabolismo de los lípidos en el caso de hiperlipidemia, con bajo contenido energético y bajo contenido de grasa y elevado contenido de ácidos grasos esenciales. Este producto debe estar prescrito por su veterinario. Formatos: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-obesity-management.html" title="Advance Canine VD Obesity Management">Saber más</a><br><br>
					<span class="required"><strong>19% Dto en 12Kg! Ahorra 15&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-renal-failure.html" title="Advance Canine VD Renal Failure">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_renal_failure.jpg"  alt="Advance Canine VD Renal Failure" title="Advance Canine VD Renal Failure" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-renal-failure.html" title="Advance Canine VD Renal Failure"><b>Advance Canine VD Renal Failure</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-renal-failure.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/141/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético completo formulado con bajo contenido en proteínas, aunque de alta calidad, y con bajo contenido en fósforo, como ayuda al tratamiento en casos de insuficiencia renal crónica o temporal en perros. Este producto debe estar prescrito por su veterinario. Formatos: 3Kg, 12Kg, Pack ECO Online 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-renal-failure.html" title="Advance Canine VD Renal Failure">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-vd-urinary.html" title="Advance Canine VD Urinary">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_canine_urinary.jpg"  alt="Advance Canine VD Urinary" title="Advance Canine VD Urinary" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-vd-urinary.html" title="Advance Canine VD Urinary"><b>Advance Canine VD Urinary</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-vd-urinary.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/146/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético completo para perros formulado para la reducción de la reaparición de cálculos de fosfato inorgánico (estruvita). Proporciona a la orina características de acidez y un nivel de magnesio moderado. Este producto debe estar prescrito por su veterinario. Formato: 3Kg, 12Kg,  Pack ECO 2x12Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-vd-urinary.html" title="Advance Canine VD Urinary">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-yorkshire-terrier.html" title="Advance Canine Yorkshire Terrier">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_yorkshire_terrier_1.jpg"  alt="Advance Canine Yorkshire Terrier" title="Advance Canine Yorkshire Terrier" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-yorkshire-terrier.html" title="Advance Canine Yorkshire Terrier"><b>Advance Canine Yorkshire Terrier</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-yorkshire-terrier.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1801/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Fórmula específicamente pensada para la raza Yorkshire Terrier. Diseñada para nutrir su delicada piel y pelo, y mantener su boca saludable así como el aliento fresco. A base de pollo, arroz, manzana y te verde. Formatos: 400gr y 1,5 kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-yorkshire-terrier.html" title="Advance Canine Yorkshire Terrier">Saber más</a><br><br>
					<span class="required"><strong>29% Dto en 1.5Kg! Ahorra 5.75&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-canine-yorkshire-terrier-junior.html" title="Advance Canine Yorkshire Terrier Junior">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_yorkshire_terrier_jun_400gr.jpg"  alt="Advance Canine Yorkshire Terrier Junior" title="Advance Canine Yorkshire Terrier Junior" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-canine-yorkshire-terrier-junior.html" title="Advance Canine Yorkshire Terrier Junior"><b>Advance Canine Yorkshire Terrier Junior</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-canine-yorkshire-terrier-junior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4136/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Específico para cachorros (2 a 10 meses) y hembras gestantes y lactantes de raza Yorkshire Terrier que ayuda a disfrutar de una buena salud gracias a: Promover un crecimiento óptimo y la salud intestinal. Alimento muy digestible y sabroso. Croquetas multipartícula de tamaño pequeño. Sin colorantes ni conservantes. Formatos: 400gr y 1,5 Kg.                    <a href="http://www.misterguau.com/index.php/advance-canine-yorkshire-terrier-junior.html" title="Advance Canine Yorkshire Terrier Junior">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-duo-salud-sabor-mini.html" title="Advance Duo Salud + Sabor (Mini)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_10_10.jpg"  alt="Advance Duo Salud + Sabor (Mini)" title="Advance Duo Salud + Sabor (Mini)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-duo-salud-sabor-mini.html" title="Advance Duo Salud + Sabor (Mini)"><b>Advance Duo Salud + Sabor (Mini)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-duo-salud-sabor-mini.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4250/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento de alta gama especialmente indicado para perros adultos (a partir de 8 meses) de raza pequeña (hasta 10 kg de peso). Con gran sabor y composición específica para los perros más caprichosos. Con proteínas, polifenoles, antioxidantes y bolitas multipartícula. Nutritivo, sano y altamente digestible. Ayuda a reforzar el sistema inmunitario del perro. Formato: 800gr, 3Kg                    <a href="http://www.misterguau.com/index.php/advance-duo-salud-sabor-mini.html" title="Advance Duo Salud + Sabor (Mini)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-snack-appetite-control-150gr.html" title="Advance Snack Appetite Control (150gr)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_apetite_control_150gr.jpg"  alt="Advance Snack Appetite Control (150gr)" title="Advance Snack Appetite Control (150gr)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-snack-appetite-control-150gr.html" title="Advance Snack Appetite Control (150gr)"><b>Advance Snack Appetite Control (150gr)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-snack-appetite-control-150gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4086/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ADVANCE Appetite ControlSnack son unas deliciosas galletas que ayudan a controlar el apetito de su mascota, gracias a su alto contenido en fibra con efecto saciante que ayuda a reducir la sensación de hambre y por lo tanto el consumo voluntario de alimento. Formato: 150gr                    <a href="http://www.misterguau.com/index.php/advance-snack-appetite-control-150gr.html" title="Advance Snack Appetite Control (150gr)">Saber más</a><br><br>
					<span class="required"><strong>35% Dto! Ahorra 1.61&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-snack-articular-stick-155gr.html" title="Advance Snack Articular Stick">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_articular_care_stick_155gr.jpg"  alt="Advance Snack Articular Stick" title="Advance Snack Articular Stick" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-snack-articular-stick-155gr.html" title="Advance Snack Articular Stick"><b>Advance Snack Articular Stick</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,30&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-snack-articular-stick-155gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4085/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ADVANCE Articular Stick es un snack que contribuye al cuidado diario de las articulaciones y los huesos gracias a la eficaz combinación de glucosamina, condroitina y colágeno, ácido hialurónico y omega 3 y vitamina K. Formato: 155gr                    <a href="http://www.misterguau.com/index.php/advance-snack-articular-stick-155gr.html" title="Advance Snack Articular Stick">Saber más</a><br><br>
					<span class="required"><strong>44% Dto! Ahorra 2.31&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-dental-care-sticks.html" title="Advance Snack Dental Care Sticks">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_dental_care_stick.jpg"  alt="Advance Snack Dental Care Sticks" title="Advance Snack Dental Care Sticks" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-dental-care-sticks.html" title="Advance Snack Dental Care Sticks"><b>Advance Snack Dental Care Sticks</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-dental-care-sticks.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2702/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pack semanal con 7 deliciosos sticks que ayudan a la higiene dental de nuestro perro. Elimina los residuos de comida, recude la formación de placa bacteriana y ayuda a prevenir la formación de sarro. Dental Care Stick rompe la cadena del sarro en tres momentos clave. Snack compatible con una dieta completa como administración ocasional. Formato: 180gr                    <a href="http://www.misterguau.com/index.php/advance-dental-care-sticks.html" title="Advance Snack Dental Care Sticks">Saber más</a><br><br>
					<span class="required"><strong>35% Dto! Ahorra 1.61&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-snack-dental-care-sticks-mini.html" title="Advance Snack Dental Care Sticks (Mini)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_dental_care_stick_mini_90gr.jpg"  alt="Advance Snack Dental Care Sticks (Mini)" title="Advance Snack Dental Care Sticks (Mini)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-snack-dental-care-sticks-mini.html" title="Advance Snack Dental Care Sticks (Mini)"><b>Advance Snack Dental Care Sticks (Mini)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-snack-dental-care-sticks-mini.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4918/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pack semanal con 7 deliciosos sticks que ayudan a la higiene dental de nuestro perro. Elimina los residuos de comida, recude la formación de placa bacteriana y ayuda a prevenir la formación de sarro. Dental Care Stick rompe la cadena del sarro en tres momentos clave. Tamaño especial para perros de raza pequeña o cachorros. Formato: 90gr - 7 sticks                    <a href="http://www.misterguau.com/index.php/advance-snack-dental-care-sticks-mini.html" title="Advance Snack Dental Care Sticks (Mini)">Saber más</a><br><br>
					<span class="required"><strong>38% Dto! Ahorra 1.50&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-snack-dental-care-sticks-mini-pruebame.html" title="Advance Snack Dental Care Sticks (Mini) - Pruébame!">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_dental_care_stick_mini_90gr_2.jpg"  alt="Advance Snack Dental Care Sticks (Mini) - Pruébame!" title="Advance Snack Dental Care Sticks (Mini) - Pruébame!" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-snack-dental-care-sticks-mini-pruebame.html" title="Advance Snack Dental Care Sticks (Mini) - Pruébame!"><b>Advance Snack Dental Care Sticks (Mini) - Pruébame!</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-snack-dental-care-sticks-mini-pruebame.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5174/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pack de prueba con sticks que ayudan a la higiene dental de nuestro perro. Elimina los residuos de comida, recude la formación de placa bacteriana y ayuda a prevenir la formación de sarro. Dental Care Stick rompe la cadena del sarro en tres momentos clave. Tamaño especial para perros de raza pequeña o cachorros. Formato: 26 gramos                    <a href="http://www.misterguau.com/index.php/advance-snack-dental-care-sticks-mini-pruebame.html" title="Advance Snack Dental Care Sticks (Mini) - Pruébame!">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-hypoallergenic-treat.html" title="Advance Snack Hypoallergenic Treat">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_hypoallergenic_treat.jpg"  alt="Advance Snack Hypoallergenic Treat" title="Advance Snack Hypoallergenic Treat" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-hypoallergenic-treat.html" title="Advance Snack Hypoallergenic Treat"><b>Advance Snack Hypoallergenic Treat</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,30&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-hypoallergenic-treat.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2704/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snacks formulados especialmente sin riesgo de reacciones alérgicas. 100% proteína hidrolizada para impedir reacciones alérgicas alimentarias. Carbohidratos puros sin residuos de proteínas. Alta digestibilidad. Con forma de hueso. Snack compatible con una dieta completa como administración ocasional. Formato:  150gr.                    <a href="http://www.misterguau.com/index.php/advance-hypoallergenic-treat.html" title="Advance Snack Hypoallergenic Treat">Saber más</a><br><br>
					<span class="required"><strong>44% Dto! Ahorra 2.31&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-immunity-treats.html" title="Advance Snack Immunity Treats">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_inmunity_treat.jpg"  alt="Advance Snack Immunity Treats" title="Advance Snack Immunity Treats" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-immunity-treats.html" title="Advance Snack Immunity Treats"><b>Advance Snack Immunity Treats</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-immunity-treats.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2703/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pack de galletitas con forma de hueso y que colabora para conservar el sistema inmunológico en condiciones óptimas. Con vitaminas B6 que estimula los mecanismos de defensa. Con antioxidantes E y C que neutralizan los radicales libres y con vitamina A que ayuda a la respuesta inmunitaria. Formato: 150gr                    <a href="http://www.misterguau.com/index.php/advance-immunity-treats.html" title="Advance Snack Immunity Treats">Saber más</a><br><br>
					<span class="required"><strong>35% Dto! Ahorra 1.61&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-snack-puppy-150gr.html" title="Advance Snack Puppy (150gr)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_puppy_snack_150gr.jpg"  alt="Advance Snack Puppy (150gr)" title="Advance Snack Puppy (150gr)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-snack-puppy-150gr.html" title="Advance Snack Puppy (150gr)"><b>Advance Snack Puppy (150gr)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-snack-puppy-150gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4087/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ADVANCE Puppy Snack son unas galletas tiernas y sabrosas especialmente formuladas para contribuir al desarrollo óptimo de los cachorros gracias a la eficaz combinación de nucleótidos, DHA OMEGA 3, Inulina con efecto prebiótico.Formato: 150gr                    <a href="http://www.misterguau.com/index.php/advance-snack-puppy-150gr.html" title="Advance Snack Puppy (150gr)">Saber más</a><br><br>
					<span class="required"><strong>35% Dto! Ahorra 1.61&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adventuros-mini-sticks-bufalo.html" title="Adventuros Mini Sticks (Búfalo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adventuros_ministicks_bufalo.jpg"  alt="Adventuros Mini Sticks (Búfalo)" title="Adventuros Mini Sticks (Búfalo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adventuros-mini-sticks-bufalo.html" title="Adventuros Mini Sticks (Búfalo)"><b>Adventuros Mini Sticks (Búfalo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adventuros-mini-sticks-bufalo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5496/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Perfectos para pequeños exploradores, nuestros deliciosos Mini Sticks con aroma a búfalo tienen un exterior rugoso y un mullido relleno, son doblemente aventureros!  Formato: 90gr                    <a href="http://www.misterguau.com/index.php/adventuros-mini-sticks-bufalo.html" title="Adventuros Mini Sticks (Búfalo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adventuros-nuggets-jabali.html" title="Adventuros Nuggets (Jabalí)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adventuros_nuggets_jabali.jpg"  alt="Adventuros Nuggets (Jabalí)" title="Adventuros Nuggets (Jabalí)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adventuros-nuggets-jabali.html" title="Adventuros Nuggets (Jabalí)"><b>Adventuros Nuggets (Jabalí)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adventuros-nuggets-jabali.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5498/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nuestros deliciosos nuggets con aroma a jabalí son el perfecto pequeño premio para tu explorador de cuatro patas, cuando estás en casa o dando un paseo!  Formato: 90gr                    <a href="http://www.misterguau.com/index.php/adventuros-nuggets-jabali.html" title="Adventuros Nuggets (Jabalí)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/adventuros-strips-venado.html" title="Adventuros Strips (Venado)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adventuros_strips_venado.jpg"  alt="Adventuros Strips (Venado)" title="Adventuros Strips (Venado)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/adventuros-strips-venado.html" title="Adventuros Strips (Venado)"><b>Adventuros Strips (Venado)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/adventuros-strips-venado.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5497/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nuestros deliciosos Strips con aroma a venado pueden ser ofrecidos enteros o rasgados en pequeños trozos, para una experiencia de recompensa salvaje en cualquier momento del día!  Formato: 90gr                    <a href="http://www.misterguau.com/index.php/adventuros-strips-venado.html" title="Adventuros Strips (Venado)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/albornoz-para-perro-barca-fcb-futbol-club-barcelona.html" title="Albornoz para perro Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_13_1.jpg"  alt="Albornoz para perro Barça (FCB - Futbol Club Barcelona)" title="Albornoz para perro Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/albornoz-para-perro-barca-fcb-futbol-club-barcelona.html" title="Albornoz para perro Barça (FCB - Futbol Club Barcelona)"><b>Albornoz para perro Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/albornoz-para-perro-barca-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3604/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto oficial FCB. Albornoz con capucha confeccionado con suave tejido de rizo de algodón color granate y detalles en color azul. Bolsillo en el lomo con escudo del Barça bordado. Se ajusta con elegante cinta de raso en color azul. Talla:  T-1 (30cm), T2 (35cm), T-3 (39cm)                    <a href="http://www.misterguau.com/index.php/albornoz-para-perro-barca-fcb-futbol-club-barcelona.html" title="Albornoz para perro Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alforja-para-perro-verde.html" title="Alforja para perro Verde">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/l/alforja_verde-naranja.jpg"  alt="Alforja para perro Verde" title="Alforja para perro Verde" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alforja-para-perro-verde.html" title="Alforja para perro Verde"><b>Alforja para perro Verde</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alforja-para-perro-verde.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2216/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alforja para perros muy completa ajustable. Nos ayuda a que nuestro perro cargue sus cosas en las excursiones a la montaña, campo o playa, como pueden ser snacks, bolsitas, nuestras llaves, etc. Ideal para perros que necesitan descargar energía y realizar mucho ejercicio. Disponible en 2 medidas: M (24cm largo * 14cm contorno pecho)                     <a href="http://www.misterguau.com/index.php/alforja-para-perro-verde.html" title="Alforja para perro Verde">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/animalitos-cabeza-de-latex-con-cuerda-20cm.html" title="Animalitos cabeza de látex con cuerda (20cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/n/animalitos_cabeza_latex_con_cuerda_20cm.jpg"  alt="Animalitos cabeza de látex con cuerda (20cm)" title="Animalitos cabeza de látex con cuerda (20cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/animalitos-cabeza-de-latex-con-cuerda-20cm.html" title="Animalitos cabeza de látex con cuerda (20cm)"><b>Animalitos cabeza de látex con cuerda (20cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/animalitos-cabeza-de-latex-con-cuerda-20cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4738/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completo juguete para perros pequeños y medianos, con cabeza de látex en forma de animalito junto con una cuerda de hilo trenzado muy resistente, para perros que les gusta roer y mordisquear. Modelos surtidos. Medidas: 20cm                    <a href="http://www.misterguau.com/index.php/animalitos-cabeza-de-latex-con-cuerda-20cm.html" title="Animalitos cabeza de látex con cuerda (20cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advantix-spot-on-25kg.html" title="Antiparasitario externo Advantix Spot-On (+25Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advantix_mas_de_25.jpg"  alt="Antiparasitario externo Advantix Spot-On (+25Kg)" title="Antiparasitario externo Advantix Spot-On (+25Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advantix-spot-on-25kg.html" title="Antiparasitario externo Advantix Spot-On (+25Kg)"><b>Antiparasitario externo Advantix Spot-On (+25Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															47,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advantix-spot-on-25kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/864/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Advantix Solución Spot-on tiene un efecto repelente (anti-alimentación) contra las garrapatas, flebotomos y mosquitos, por lo que previene que los parásitos repelidos ingieran sangre del hospedador. Formatos: 4 pipetas en caja.                    <a href="http://www.misterguau.com/index.php/advantix-spot-on-25kg.html" title="Antiparasitario externo Advantix Spot-On (+25Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advantix-spot-on-0-4kg.html" title="Antiparasitario externo Advantix Spot-On (0-4Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advantix_spot_on_hasta_4k_1.jpg"  alt="Antiparasitario externo Advantix Spot-On (0-4Kg)" title="Antiparasitario externo Advantix Spot-On (0-4Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advantix-spot-on-0-4kg.html" title="Antiparasitario externo Advantix Spot-On (0-4Kg)"><b>Antiparasitario externo Advantix Spot-On (0-4Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															36,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advantix-spot-on-0-4kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/865/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Advantix Solución Spot-on tiene un efecto repelente (anti-alimentación) contra las garrapatas, flebotomos y mosquitos, por lo que previene que los parásitos repelidos ingieran sangre del hospedador. Formatos: 4 pipetas en caja.                    <a href="http://www.misterguau.com/index.php/advantix-spot-on-0-4kg.html" title="Antiparasitario externo Advantix Spot-On (0-4Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advantix-spot-on-10-25kg.html" title="Antiparasitario externo Advantix Spot-On (10-25Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advantix_10_a_25.jpg"  alt="Antiparasitario externo Advantix Spot-On (10-25Kg)" title="Antiparasitario externo Advantix Spot-On (10-25Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advantix-spot-on-10-25kg.html" title="Antiparasitario externo Advantix Spot-On (10-25Kg)"><b>Antiparasitario externo Advantix Spot-On (10-25Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															44,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advantix-spot-on-10-25kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/866/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Advantix Solución Spot-on tiene un efecto repelente (anti-alimentación) contra las garrapatas, flebotomos y mosquitos, por lo que previene que los parásitos repelidos ingieran sangre del hospedador. Formatos:  4 pipetas en caja.                    <a href="http://www.misterguau.com/index.php/advantix-spot-on-10-25kg.html" title="Antiparasitario externo Advantix Spot-On (10-25Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advantix-spot-on-4-10kg.html" title="Antiparasitario externo Advantix Spot-On (4-10Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advantix_4_a_10.jpg"  alt="Antiparasitario externo Advantix Spot-On (4-10Kg)" title="Antiparasitario externo Advantix Spot-On (4-10Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advantix-spot-on-4-10kg.html" title="Antiparasitario externo Advantix Spot-On (4-10Kg)"><b>Antiparasitario externo Advantix Spot-On (4-10Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															39,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advantix-spot-on-4-10kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/867/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Advantix Solución Spot-on tiene un efecto repelente (anti-alimentación) contra las garrapatas, flebotomos y mosquitos, por lo que previene que los parásitos repelidos ingieran sangre del hospedador. Formato: 4 pipetas en caja.                    <a href="http://www.misterguau.com/index.php/advantix-spot-on-4-10kg.html" title="Antiparasitario externo Advantix Spot-On (4-10Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/frontline-combo-canine-40-kg.html" title="Antiparasitario externo Frontline Combo canine (+40 Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/r/frontline_combo_40k.jpg"  alt="Antiparasitario externo Frontline Combo canine (+40 Kg)" title="Antiparasitario externo Frontline Combo canine (+40 Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/frontline-combo-canine-40-kg.html" title="Antiparasitario externo Frontline Combo canine (+40 Kg)"><b>Antiparasitario externo Frontline Combo canine (+40 Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/frontline-combo-canine-40-kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/883/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    FRONTLINE® actúa de forma rápida y por contacto, eliminando pulgas, garrapatas y piojos presentes en la piel de su mascota, gracias al poder único de su molécula insecticida/acaricida patentada, el fipronil. FRONTLINE® actúa sobre varios puntos el sistema nervioso de los parásitos (insectos y ácaros), provocando una muerte por hiperexcitación nerviosa. Para perros con peso superior a 40Kg. Formatos: 1 pipeta, 3 pipetas, 6 pipetas.                    <a href="http://www.misterguau.com/index.php/frontline-combo-canine-40-kg.html" title="Antiparasitario externo Frontline Combo canine (+40 Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/frontline-combo-canine-10-20-kg.html" title="Antiparasitario externo Frontline Combo canine (10-20 Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/r/frontline_combo_10_20k.jpg"  alt="Antiparasitario externo Frontline Combo canine (10-20 Kg)" title="Antiparasitario externo Frontline Combo canine (10-20 Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/frontline-combo-canine-10-20-kg.html" title="Antiparasitario externo Frontline Combo canine (10-20 Kg)"><b>Antiparasitario externo Frontline Combo canine (10-20 Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/frontline-combo-canine-10-20-kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/884/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    FRONTLINE® actúa de forma rápida y por contacto, eliminando pulgas, garrapatas y piojos presentes en la piel de su mascota, gracias al poder único de su molécula insecticida/acaricida patentada, el fipronil. FRONTLINE® actúa sobre varios puntos el sistema nervioso de los parásitos (insectos y ácaros), provocando una muerte por hiperexcitación nerviosa. Para perros entre 10Kg y 20Kg. Formatos: 1 pipeta, 3 pipetas, 6 pipetas.                    <a href="http://www.misterguau.com/index.php/frontline-combo-canine-10-20-kg.html" title="Antiparasitario externo Frontline Combo canine (10-20 Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/frontline-combo-canine-2-10-kg.html" title="Antiparasitario externo Frontline Combo canine (2-10 Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/r/frontline_combo__2_10k.jpg"  alt="Antiparasitario externo Frontline Combo canine (2-10 Kg)" title="Antiparasitario externo Frontline Combo canine (2-10 Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/frontline-combo-canine-2-10-kg.html" title="Antiparasitario externo Frontline Combo canine (2-10 Kg)"><b>Antiparasitario externo Frontline Combo canine (2-10 Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/frontline-combo-canine-2-10-kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/886/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    FRONTLINE® actúa de forma rápida y por contacto, eliminando pulgas, garrapatas y piojos presentes en la piel de su mascota, gracias al poder único de su molécula insecticida/acaricida patentada, el fipronil. FRONTLINE® actúa sobre varios puntos el sistema nervioso de los parásitos (insectos y ácaros), provocando una muerte por hiperexcitación nerviosa. Para perros entre 2Kg y 10Kg. Formatos: 1 pipeta, 3 pipetas, 6 pipetas.                    <a href="http://www.misterguau.com/index.php/frontline-combo-canine-2-10-kg.html" title="Antiparasitario externo Frontline Combo canine (2-10 Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/frontline-combo-canine-20-40-kg.html" title="Antiparasitario externo Frontline Combo canine (20-40 Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/r/frontline_combo_20_40k.jpg"  alt="Antiparasitario externo Frontline Combo canine (20-40 Kg)" title="Antiparasitario externo Frontline Combo canine (20-40 Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/frontline-combo-canine-20-40-kg.html" title="Antiparasitario externo Frontline Combo canine (20-40 Kg)"><b>Antiparasitario externo Frontline Combo canine (20-40 Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/frontline-combo-canine-20-40-kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/885/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    FRONTLINE® actúa de forma rápida y por contacto, eliminando pulgas, garrapatas y piojos presentes en la piel de su mascota, gracias al poder único de su molécula insecticida/acaricida patentada, el fipronil. FRONTLINE® actúa sobre varios puntos el sistema nervioso de los parásitos (insectos y ácaros), provocando una muerte por hiperexcitación nerviosa. Para perros entre 20Kg y 40Kg. Formatos: 1 pipeta, 3 pipetas, 6 pipetas.                    <a href="http://www.misterguau.com/index.php/frontline-combo-canine-20-40-kg.html" title="Antiparasitario externo Frontline Combo canine (20-40 Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-11-22kg.html" title="Antiparasitario externo Prac-Tic (11-22Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/r/prac-tic_perros_3_pipetas_11_-_22_kg_1000834.jpg"  alt="Antiparasitario externo Prac-Tic (11-22Kg)" title="Antiparasitario externo Prac-Tic (11-22Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-11-22kg.html" title="Antiparasitario externo Prac-Tic (11-22Kg)"><b>Antiparasitario externo Prac-Tic (11-22Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															34,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-11-22kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4090/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Antiparasitario externo en pipetas para perros medianos (De 11Kg a 22Kg de peso), de uso tópico, para el tratamiento y prevención de infestaciones por pulgas y garrapatas. El piriprol mata las pulgas en las 24 horas siguientes al contacto, y las garrapatas en las 48 h siguientes al contacto. La duración de su eficacia insecticida contra nuevas infestaciones persiste un mínimo de 4 semanas. Formato: Caja con 3 pipetas                    <a href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-11-22kg.html" title="Antiparasitario externo Prac-Tic (11-22Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-2-4-5kg.html" title="Antiparasitario externo Prac-Tic (2-4.5Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/r/prac-tic_perros_3_pipetas_2_-_5kg_1000832.jpg"  alt="Antiparasitario externo Prac-Tic (2-4.5Kg)" title="Antiparasitario externo Prac-Tic (2-4.5Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-2-4-5kg.html" title="Antiparasitario externo Prac-Tic (2-4.5Kg)"><b>Antiparasitario externo Prac-Tic (2-4.5Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-2-4-5kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4088/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Antiparasitario externo en pipetas para perros pequeños (De 2Kg a 4.5Kg de peso), de uso tópico, para el tratamiento y prevención de infestaciones por pulgas y garrapatas. El piriprol mata las pulgas en las 24 horas siguientes al contacto, y las garrapatas en las 48 h siguientes al contacto. La duración de su eficacia insecticida contra nuevas infestaciones persiste un mínimo de 4 semanas.  Formato: Caja con 3 pipetas                    <a href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-2-4-5kg.html" title="Antiparasitario externo Prac-Tic (2-4.5Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-22-50kg.html" title="Antiparasitario externo Prac-Tic (22-50Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/r/prac-tic_perros_3_pipetas_22_-_50_kg_8410219.jpg"  alt="Antiparasitario externo Prac-Tic (22-50Kg)" title="Antiparasitario externo Prac-Tic (22-50Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-22-50kg.html" title="Antiparasitario externo Prac-Tic (22-50Kg)"><b>Antiparasitario externo Prac-Tic (22-50Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															41,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-22-50kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4091/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Antiparasitario externo en pipetas para perros grandes (De 22Kg a 50Kg de peso), de uso tópico, para el tratamiento y prevención de infestaciones por pulgas y garrapatas. El piriprol mata las pulgas en las 24 horas siguientes al contacto, y las garrapatas en las 48 h siguientes al contacto. La duración de su eficacia insecticida contra nuevas infestaciones persiste un mínimo de 4 semanas. Formato: Caja con 3 pipetas                    <a href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-22-50kg.html" title="Antiparasitario externo Prac-Tic (22-50Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-4-5-11kg.html" title="Antiparasitario externo Prac-Tic (4.5-11Kg)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/r/prac-tic_perros_3_pipetas_4_-_11_kg_1000833.jpg"  alt="Antiparasitario externo Prac-Tic (4.5-11Kg)" title="Antiparasitario externo Prac-Tic (4.5-11Kg)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-4-5-11kg.html" title="Antiparasitario externo Prac-Tic (4.5-11Kg)"><b>Antiparasitario externo Prac-Tic (4.5-11Kg)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-4-5-11kg.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4089/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Antiparasitario externo en pipetas para perros pequeños y medianos (De 4.5Kg a 11Kg de peso), de uso tópico, para el tratamiento y prevención de infestaciones por pulgas y garrapatas. El piriprol mata las pulgas en las 24 horas siguientes al contacto, y las garrapatas en las 48 h siguientes al contacto. La duración de su eficacia insecticida contra nuevas infestaciones persiste un mínimo de 4 semanas. Formato: Caja con 3 pipetas                    <a href="http://www.misterguau.com/index.php/antiparasitario-externo-prac-tic-4-5-11kg.html" title="Antiparasitario externo Prac-Tic (4.5-11Kg)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-large.html" title="Arnés anti-tirones Halti (Large)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/a/halti_harness_lg_5262878.jpg"  alt="Arnés anti-tirones Halti (Large)" title="Arnés anti-tirones Halti (Large)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-large.html" title="Arnés anti-tirones Halti (Large)"><b>Arnés anti-tirones Halti (Large)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-anti-tirones-halti-large.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3379/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La mejor solución para que nuestro perro no tire de a correa mientras lo paseamos. Diseñado por el Dr. Roger Mugford, Halti es un sistema de fijación patentado que controla tanto el pecho como los hombros de nuestro perro, evitando los tirones. Ideal para enseñar a los perros más nerviosos, facilitando su entrenamiento y como co-ayudante a terapias de comportamiento. Para razas grandes (+ 80cm de pecho): Gran Danés, etc                    <a href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-large.html" title="Arnés anti-tirones Halti (Large)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-medium.html" title="Arnés anti-tirones Halti (Medium)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/a/halti_arness_medium_klh02.jpg"  alt="Arnés anti-tirones Halti (Medium)" title="Arnés anti-tirones Halti (Medium)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-medium.html" title="Arnés anti-tirones Halti (Medium)"><b>Arnés anti-tirones Halti (Medium)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-anti-tirones-halti-medium.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3421/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La mejor solución para que nuestro perro no tire de a correa mientras lo paseamos. Diseñado por el Dr. Roger Mugford, Halti es un sistema de fijación patentado que controla tanto el pecho como los hombros de nuestro perro, evitando los tirones. Ideal para enseñar a los perros más nerviosos, facilitando su entrenamiento y como co-ayudante a terapias de comportamiento. Para razas medianas (de 60 a 80cm) de pecho (Beagle, Boxer, Golden, etc)                    <a href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-medium.html" title="Arnés anti-tirones Halti (Medium)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-small.html" title="Arnés anti-tirones Halti (Small)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/a/halti_harness_small_klh01.jpg"  alt="Arnés anti-tirones Halti (Small)" title="Arnés anti-tirones Halti (Small)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-small.html" title="Arnés anti-tirones Halti (Small)"><b>Arnés anti-tirones Halti (Small)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-anti-tirones-halti-small.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3424/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La mejor solución para que nuestro perro no tire de a correa mientras lo paseamos. Diseñado por el Dr. Roger Mugford, Halti es un sistema de fijación patentado que controla tanto el pecho como los hombros de nuestro perro, evitando los tirones. Ideal para enseñar a los perros más nerviosos, facilitando su entrenamiento y como co-ayudante a terapias de comportamiento. Para razas pequeñas (de 30 a 60cm) de pecho (Jack Russell, etc)                    <a href="http://www.misterguau.com/index.php/arnes-anti-tirones-halti-small.html" title="Arnés anti-tirones Halti (Small)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-de-manejo-easy-walk-negro.html" title="Arnés de manejo Easy Walk (Negro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_19_2.jpg"  alt="Arnés de manejo Easy Walk (Negro)" title="Arnés de manejo Easy Walk (Negro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-de-manejo-easy-walk-negro.html" title="Arnés de manejo Easy Walk (Negro)"><b>Arnés de manejo Easy Walk (Negro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-de-manejo-easy-walk-negro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3896/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arnés diseñado para controlar totalmente el paseo y movimientos de nuestras mascotas, consiguiendo unos paseos tranquilos y sin tirones. Fácil de usar, poner y ajustar. Recomendado por adiestradores desde los 2 meses de edad. Realizado en nylon suave y resistente de inmejorable calidad totalmente ajustable para una perfecta adaptación. Cierre con hebillas metálicas muy resistentes en dorsal y pectoral. Disponible en 4 medidas.                    <a href="http://www.misterguau.com/index.php/arnes-de-manejo-easy-walk-negro.html" title="Arnés de manejo Easy Walk (Negro)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-de-manejo-easy-walk-rojo.html" title="Arnés de manejo Easy Walk (Rojo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_19_3.jpg"  alt="Arnés de manejo Easy Walk (Rojo)" title="Arnés de manejo Easy Walk (Rojo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-de-manejo-easy-walk-rojo.html" title="Arnés de manejo Easy Walk (Rojo)"><b>Arnés de manejo Easy Walk (Rojo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-de-manejo-easy-walk-rojo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4068/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arnés diseñado para controlar totalmente el paseo y movimientos de nuestras mascotas, consiguiendo unos paseos tranquilos y sin tirones. Fácil de usar, poner y ajustar. Recomendado por adiestradores desde los 2 meses de edad. Realizado en nylon suave y resistente de inmejorable calidad totalmente ajustable para una perfecta adaptación. Cierre con hebillas metálicas muy resistentes en dorsal y pectoral. Disponible en 4 medidas.                    <a href="http://www.misterguau.com/index.php/arnes-de-manejo-easy-walk-rojo.html" title="Arnés de manejo Easy Walk (Rojo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-envy-flora-marron.html" title="Arnés Envy Flora (Marrón)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arnes_envy_flora_marron.jpg"  alt="Arnés Envy Flora (Marrón)" title="Arnés Envy Flora (Marrón)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-envy-flora-marron.html" title="Arnés Envy Flora (Marrón)"><b>Arnés Envy Flora (Marrón)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-envy-flora-marron.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3404/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso arnés en colores marrones y ocres con bonito estampado de flores otoñales. Con detalle de cierres y juntas cromadas con la inscripción ENVY (envidia), que es lo que despertará nuestro perro con este modelo. Con exterior de polipiel e interior de resistente Nylon. Collar y correa a juego disponibles. Medidas: T2 (15mmx35-60cm) - T3 (20mmx46-75cm)<br />
                    <a href="http://www.misterguau.com/index.php/arnes-envy-flora-marron.html" title="Arnés Envy Flora (Marrón)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-envy-flora-rosa.html" title="Arnés Envy Flora (Rosa)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arnes_envy_flora_rosa.jpg"  alt="Arnés Envy Flora (Rosa)" title="Arnés Envy Flora (Rosa)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-envy-flora-rosa.html" title="Arnés Envy Flora (Rosa)"><b>Arnés Envy Flora (Rosa)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-envy-flora-rosa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3405/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso arnés en color rosa con bonito estampado de flores otoñales en blanco. Con detalle de cierres y juntas cromadas con la inscripción ENVY (envidia), que es lo que despertará nuestro perro con este modelo. Con exterior de polipiel e interior de resistente Nylon. Collar y correa a juego disponibles. Medidas: T1 (10mmx26-40cm)  T2 (15mmx35-60cm) - T3 (20mmx46-75cm)<br />
                    <a href="http://www.misterguau.com/index.php/arnes-envy-flora-rosa.html" title="Arnés Envy Flora (Rosa)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-envy-phantom-negro.html" title="Arnés Envy Phantom (Negro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arnes_envy_phantom_negro.jpg"  alt="Arnés Envy Phantom (Negro)" title="Arnés Envy Phantom (Negro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-envy-phantom-negro.html" title="Arnés Envy Phantom (Negro)"><b>Arnés Envy Phantom (Negro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-envy-phantom-negro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3413/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Moderno arnés en color negro y gris con dibujos de calaveras para los perros más duros! Con detalle de cierres y juntas cromadas y con la inscripción PHANTOM (fantasma). Con exterior de polipiel brillante e interior de resistente Nylon. Correa a juego disponible. Medidas: T1 (10mmx26-40cm)  T2 (15mmx35-60cm) - T3 (20mmx46-75cm)                    <a href="http://www.misterguau.com/index.php/arnes-envy-phantom-negro.html" title="Arnés Envy Phantom (Negro)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-para-perro-barca-fcb-futbol-club-barcelona.html" title="Arnés para perro Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_15_2.jpg"  alt="Arnés para perro Barça (FCB - Futbol Club Barcelona)" title="Arnés para perro Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-para-perro-barca-fcb-futbol-club-barcelona.html" title="Arnés para perro Barça (FCB - Futbol Club Barcelona)"><b>Arnés para perro Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-para-perro-barca-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3557/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto oficial FCB. Arnés oficial realizado en nylon y con los colores de la primera equipación blaugrana. Con remache superior con el logo en blanco impreso. Con el logo impreso en color a lo largo del diseño. Con enganches muy resistentes en PVC y metal en negro. El arnés tiene una linea de unión entre cuello y pecho, liberando presión sobre el cuello de nuestro perro. Ajustable. Collar, petral y correa a juego disponibles. 4 medidas en Saber mas:                     <a href="http://www.misterguau.com/index.php/arnes-para-perro-barca-fcb-futbol-club-barcelona.html" title="Arnés para perro Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-azul.html" title="Arnés Reflectante Topnature (Azul)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_arnes_reflect_2l_15mm_azul_65971.jpg"  alt="Arnés Reflectante Topnature (Azul)" title="Arnés Reflectante Topnature (Azul)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-azul.html" title="Arnés Reflectante Topnature (Azul)"><b>Arnés Reflectante Topnature (Azul)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>10,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 8.21&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-reflectante-topnature-azul.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4878/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arnés de altísima calidad y resistencia realizado en nylon. Con doble punteado de gris reflectante para que nuestra mascota siempre esté bien señalizada de noche y evitemos peligros. Con enganche de seguridad por click. Aro cromado y ajustable. En color Azul eléctrico. Medidas: T1 (15mm * 35-50cm) - T2 (20mm * 50-70cm)<br />
                    <a href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-azul.html" title="Arnés Reflectante Topnature (Azul)">Saber más</a><br><br>
					<span class="required"><strong>25% Dto en todala coleccion de paseo Topnature!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-naranja.html" title="Arnés Reflectante Topnature (Naranja)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_arnes_reflect_2l_20mm_naranja_65975.jpg"  alt="Arnés Reflectante Topnature (Naranja)" title="Arnés Reflectante Topnature (Naranja)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-naranja.html" title="Arnés Reflectante Topnature (Naranja)"><b>Arnés Reflectante Topnature (Naranja)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>10,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 8.21&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-reflectante-topnature-naranja.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4879/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arnés de altísima calidad y resistencia realizado en nylon. Con doble punteado de gris reflectante para que nuestra mascota siempre esté bien señalizada de noche y evitemos peligros. Con enganche de seguridad por click. Aro cromado y ajustable. En color naranja eléctrico. Medidas: T1 (15mm * 35-50cm) - T2 (20mm * 50-70cm)<br />
                    <a href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-naranja.html" title="Arnés Reflectante Topnature (Naranja)">Saber más</a><br><br>
					<span class="required"><strong>25% Dto en todala coleccion de paseo Topnature!<br><br>25% Dto en toda la coleccion de paseo Topnature!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-verde.html" title="Arnés Reflectante Topnature (Verde)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_arnes_reflect_2l_15mm_verde_65973.jpg"  alt="Arnés Reflectante Topnature (Verde)" title="Arnés Reflectante Topnature (Verde)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-verde.html" title="Arnés Reflectante Topnature (Verde)"><b>Arnés Reflectante Topnature (Verde)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>10,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 8.21&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-reflectante-topnature-verde.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4880/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arnés de altísima calidad y resistencia realizado en nylon. Con doble punteado de gris reflectante para que nuestra mascota siempre esté bien señalizada de noche y evitemos peligros. Con enganche de seguridad por click. Aro cromado y ajustable. En color verde claro. Medidas: T1 (15mm * 35-50cm) - T2 (20mm * 50-70cm)<br />
                    <a href="http://www.misterguau.com/index.php/arnes-reflectante-topnature-verde.html" title="Arnés Reflectante Topnature (Verde)">Saber más</a><br><br>
					<span class="required"><strong>25% Dto en todala coleccion de paseo Topnature!<br><br>25% Dto en toda la coleccion de paseo Topnature!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-tecnico-security-azul.html" title="Arnés técnico Security (Azul)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arnes_tecnico_azul_l-xl_50-100cm305j-no-pe69024.jpg"  alt="Arnés técnico Security (Azul)" title="Arnés técnico Security (Azul)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-tecnico-security-azul.html" title="Arnés técnico Security (Azul)"><b>Arnés técnico Security (Azul)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-tecnico-security-azul.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3078/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arnés con diseño innovador, ergonómico, dinámico y deportivo. Con correas ajustables en nylon. Con material de revestimiento interior suave y traspirable para la piel. Cincho para el pecho con bordes protegidos para evitar tirones. Alforja en cada lado para guardar chuches, bolsas, etc. Reborde gris reflectante. Con hebilla de fijación de acero recubierto de nylon. Color azul. Medidas: S/M (35-60cm) - M/L (40-80cm) - L/XL (50-100cm)                    <a href="http://www.misterguau.com/index.php/arnes-tecnico-security-azul.html" title="Arnés técnico Security (Azul)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-tecnico-security-marron.html" title="Arnés técnico Security (Marrón)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arnes_tecnico_marron_l-xl_50-100cm305j-no-pe69025.jpg"  alt="Arnés técnico Security (Marrón)" title="Arnés técnico Security (Marrón)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-tecnico-security-marron.html" title="Arnés técnico Security (Marrón)"><b>Arnés técnico Security (Marrón)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-tecnico-security-marron.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4303/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arnés con diseño innovador, ergonómico, dinámico y deportivo. Con correas ajustables en nylon. Con material de revestimiento interior suave y traspirable para la piel. Cincho para el pecho con bordes protegidos para evitar tirones. Alforja en cada lado para guardar chuches, bolsas, etc. Reborde gris reflectante. Con hebilla de fijación de acero recubierto de nylon. Color marrón. Medidas: S/M (35-60cm)  -  M/L (40-80cm)  -  l/XL (50-100cm)                    <a href="http://www.misterguau.com/index.php/arnes-tecnico-security-marron.html" title="Arnés técnico Security (Marrón)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-tecnico-security-rojo.html" title="Arnés técnico Security (Rojo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arnes_tecnico_rojo_l-xl_50-100cm305j-no-pe69023.jpg"  alt="Arnés técnico Security (Rojo)" title="Arnés técnico Security (Rojo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-tecnico-security-rojo.html" title="Arnés técnico Security (Rojo)"><b>Arnés técnico Security (Rojo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-tecnico-security-rojo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4304/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arnés con diseño innovador, ergonómico, dinámico y deportivo. Con correas ajustables en nylon. Con material de revestimiento interior suave y traspirable para la piel. Cincho para el pecho con bordes protegidos para evitar tirones. Alforja en cada lado para guardar chuches, bolsas, etc. Reborde gris reflectante. Con hebilla de fijación de acero recubierto de nylon. Color rojo. Medidas: S/M (35-60cm)  -  M/L (40-80cm)  -  L/XL (50-100cm)                    <a href="http://www.misterguau.com/index.php/arnes-tecnico-security-rojo.html" title="Arnés técnico Security (Rojo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/aro-para-cachorros-nylabone.html" title="Aro para cachorros Nylabone">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/y/nylabone_para_cachorros_aros.jpg"  alt="Aro para cachorros Nylabone" title="Aro para cachorros Nylabone" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/aro-para-cachorros-nylabone.html" title="Aro para cachorros Nylabone"><b>Aro para cachorros Nylabone</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/aro-para-cachorros-nylabone.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5023/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Los juguetes Puppy de Nylabone ayudan a un buen desarrollo de la dentadura y de la mandíbula de los cachorros. Satisface la necesidad de morder de los cachorros. Con forma de aros con protuberancias que ayudan a mantener la higiene de su dentadura mientras juega. Fabricado en EEUU.  Medidas: 15,5cm                    <a href="http://www.misterguau.com/index.php/aro-para-cachorros-nylabone.html" title="Aro para cachorros Nylabone">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/aros-en-cuerda-bicolor-ny-25cm.html" title="Aros en cuerda bicolor NY (25cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/aros_en_cuerda_bicolor_25cm_105-115gr_pe80396.jpg"  alt="Aros en cuerda bicolor NY (25cm)" title="Aros en cuerda bicolor NY (25cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/aros-en-cuerda-bicolor-ny-25cm.html" title="Aros en cuerda bicolor NY (25cm)"><b>Aros en cuerda bicolor NY (25cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/aros-en-cuerda-bicolor-ny-25cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5620/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completo juguete que aúna la resistente cuerda trenzada y diversos aros de goma repartidos a lo largo del juguete, ambos ideales para la higiene dental. Disponible en colores surtidos. Medidas: 25cm - 105/115gr                    <a href="http://www.misterguau.com/index.php/aros-en-cuerda-bicolor-ny-25cm.html" title="Aros en cuerda bicolor NY (25cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-acondicionador-flash.html" title="Artero Acondicionador Flash">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_acondicionador_flash_1.jpg"  alt="Artero Acondicionador Flash" title="Artero Acondicionador Flash" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-acondicionador-flash.html" title="Artero Acondicionador Flash"><b>Artero Acondicionador Flash</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-acondicionador-flash.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2274/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Spray que aporta una brillo extraordinario y un efecto sedoso a todo tipo de pelajes, la cuidadosa selección de sus componentes logran un efecto acondicionador no graso, que permite utilizarlo como suavizante sobre pelo seco, proporcionando una película de brillo que evita las roturas y los enredos, favoreciendo el cepillado. Importante: No contiene Aceite de Visón. Formato: 300ml                    <a href="http://www.misterguau.com/index.php/artero-acondicionador-flash.html" title="Artero Acondicionador Flash">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-acondicionador-protein-vital.html" title="Artero Acondicionador Protein Vital">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_acondicionador_protein_vital_1.jpg"  alt="Artero Acondicionador Protein Vital" title="Artero Acondicionador Protein Vital" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-acondicionador-protein-vital.html" title="Artero Acondicionador Protein Vital"><b>Artero Acondicionador Protein Vital</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-acondicionador-protein-vital.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2275/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Acondicionador que recupera instantáneamente la suavida a todo tipo de pelajes. La acción reparadora de las proteínas de la seda, reconstruyen la estructura cuticular del pelo y su contenido en pro-vitamina B5 aporta el brillo característico del pelo sano, protegiéndolo por más tiempo y en mayor profundidad que los acondicionadores clásicos. Sin necesidad de aclarado. pH 4. Presentado en estuche e instrucciones de uso. Formato: 100ml.                    <a href="http://www.misterguau.com/index.php/artero-acondicionador-protein-vital.html" title="Artero Acondicionador Protein Vital">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-acondicionador-seco-matt-x.html" title="Artero Acondicionador seco Matt-X">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_matt-x_1.jpg"  alt="Artero Acondicionador seco Matt-X" title="Artero Acondicionador seco Matt-X" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-acondicionador-seco-matt-x.html" title="Artero Acondicionador seco Matt-X"><b>Artero Acondicionador seco Matt-X</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-acondicionador-seco-matt-x.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2280/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Spray acondicionador desarrollado para la fácil eliminación de nudos. Puede ser usado en húmedo o seco según la necesidad. Facilita el cepillado y elimina la corriente estática del pelo. Rápido y fácil de aplicar. Deshace enredos y evita roturas del pelaje. Calidad de peluquería canina profesional Artero. Cantidad: 300ml.                    <a href="http://www.misterguau.com/index.php/artero-acondicionador-seco-matt-x.html" title="Artero Acondicionador seco Matt-X">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-champu-blanc-pelo-blanco.html" title="Artero Champú Blanc (pelo blanco)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/art_champu_pelo_blanco_250ml_h648.jpg"  alt="Artero Champú Blanc (pelo blanco)" title="Artero Champú Blanc (pelo blanco)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-champu-blanc-pelo-blanco.html" title="Artero Champú Blanc (pelo blanco)"><b>Artero Champú Blanc (pelo blanco)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-champu-blanc-pelo-blanco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3219/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú para todas las razas de pelo blanco de fácil aplicación. Acción cromática que dependiendo del color del pelaje los activos blanquean u oscurecen el pelo. Aportarás protección tanto para el pelo como para la piel, consiguiendo unos resultados excepcionales. Muy suave a base de tensoactivos vegetales. Ideal para pieles sensibles o para lavados frecuentes. Formato. 250 ml.<br />
                    <a href="http://www.misterguau.com/index.php/artero-champu-blanc-pelo-blanco.html" title="Artero Champú Blanc (pelo blanco)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-champu-hidratante.html" title="Artero Champú Hidratante">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_champu_hidratante_1.jpg"  alt="Artero Champú Hidratante" title="Artero Champú Hidratante" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-champu-hidratante.html" title="Artero Champú Hidratante"><b>Artero Champú Hidratante</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-champu-hidratante.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2277/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú para razas de pelo largo o pelajes secos o deteriorados. Razas de pelo largo como por ejemplo: York Shire, Lhasa Apso, Bichón Maltés, Afganho, etc.  Muy suave, a base de tensoactivos vegetales. El complejo vitamínico de esta fórmula nutre el pelo en profundidad y los componentes hidratantes y reengrasantes recuperan su textura, dejándolo suave y brillante. pH 5.5.  Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/artero-champu-hidratante.html" title="Artero Champú Hidratante">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-champu-seco-speed.html" title="Artero Champú Seco Speed">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_champu_en_seco_speed_1.jpg"  alt="Artero Champú Seco Speed" title="Artero Champú Seco Speed" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-champu-seco-speed.html" title="Artero Champú Seco Speed"><b>Artero Champú Seco Speed</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-champu-seco-speed.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2276/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú especialmente indicado para ser utilizado entre lavados, mantenimiento, o cuando el animal no debe mojarse -cachorros o ancianos-. Rápido y fácil de aplicar, los componentes de esta fórmula absorben el exceso de grasa, la suciedad y los malos olores del pelo, dejándolo suave, limpio y perfumado al instante. Formato: 300ml.                    <a href="http://www.misterguau.com/index.php/artero-champu-seco-speed.html" title="Artero Champú Seco Speed">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-champu-vitalizante.html" title="Artero Champú Vitalizante">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/art_champu_vitalizante_250ml_h622.jpg"  alt="Artero Champú Vitalizante" title="Artero Champú Vitalizante" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-champu-vitalizante.html" title="Artero Champú Vitalizante"><b>Artero Champú Vitalizante</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-champu-vitalizante.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3220/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú para razas que requieran volumen como por ejemplo Caniches, Bobtail, Kerry Blue, etc... o para razas de pelo duro por ejemplo Schnauzers, Terriers, etc.  Champú muy suave a base de tensoactivos vegetales. Ideal para pieles sensibles o para lavados frecuentes. Su acción relajante produce un efecto balsámico sobre la piel. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/artero-champu-vitalizante.html" title="Artero Champú Vitalizante">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/limpiador-de-lagrimal-artero-pretty-eyes.html" title="Artero Limpiador de lagrimal Pretty Eyes">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_pretty_eyes_1.jpg"  alt="Artero Limpiador de lagrimal Pretty Eyes" title="Artero Limpiador de lagrimal Pretty Eyes" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/limpiador-de-lagrimal-artero-pretty-eyes.html" title="Artero Limpiador de lagrimal Pretty Eyes"><b>Artero Limpiador de lagrimal Pretty Eyes</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/limpiador-de-lagrimal-artero-pretty-eyes.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2238/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Esta solución limpiadora esta especialmente diseñada para el cuidado e higiene completa de los ojos, tanto de perros como de gatos. Limpia, descongestiona y ayuda a eliminar las manchas que se forman alrededor de los ojos y la zona del lacrimal. Especial para aclarar lagrimales de perros y gatos blancos, como maltés, westy, persa, etc. Formato: 200ml.                    <a href="http://www.misterguau.com/index.php/limpiador-de-lagrimal-artero-pretty-eyes.html" title="Artero Limpiador de lagrimal Pretty Eyes">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-perfume-baby.html" title="Artero Perfume Baby">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/art_perfume_baby_90ml_h673.jpg"  alt="Artero Perfume Baby" title="Artero Perfume Baby" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-perfume-baby.html" title="Artero Perfume Baby"><b>Artero Perfume Baby</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-perfume-baby.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5424/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Perfume especial para cachorros. Suave, fresco y de larga duración. Elimina los malos olores. Elegante presentación en envase de aluminio con vaporizador. Formato: 90ml.                    <a href="http://www.misterguau.com/index.php/artero-perfume-baby.html" title="Artero Perfume Baby">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-perfume-classic.html" title="Artero perfume Classic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/art_perfume_classic_90_ml_h632.jpg"  alt="Artero perfume Classic" title="Artero perfume Classic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-perfume-classic.html" title="Artero perfume Classic"><b>Artero perfume Classic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-perfume-classic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3959/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Suave y fresco perfume de larga duración que además elimina los malos olores. Elegante presentación en envase de aluminio satinado. Formato: 90 ml                    <a href="http://www.misterguau.com/index.php/artero-perfume-classic.html" title="Artero perfume Classic">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-perfume-impact.html" title="Artero perfume Impact">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_perfume_impact.jpg"  alt="Artero perfume Impact" title="Artero perfume Impact" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-perfume-impact.html" title="Artero perfume Impact"><b>Artero perfume Impact</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-perfume-impact.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2402/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Perfume singular, donde se combinan nolores florales y afrutadas, suave y fresco de larga duracion, elimina totalmente los malos olores. Formato: 90 ml                    <a href="http://www.misterguau.com/index.php/artero-perfume-impact.html" title="Artero perfume Impact">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-perfume-tierra.html" title="Artero perfume Tierra">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_perfume_tierra.jpg"  alt="Artero perfume Tierra" title="Artero perfume Tierra" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-perfume-tierra.html" title="Artero perfume Tierra"><b>Artero perfume Tierra</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-perfume-tierra.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2404/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Perfume lleno de emociones, penetrante y a la vez suave fragancia, mezcla de esencias de madera, sus notas profundas son vainilla, musk y caramelo, larga duracion, elimina totalmente los malos olores. Formato: 90 ml                    <a href="http://www.misterguau.com/index.php/artero-perfume-tierra.html" title="Artero perfume Tierra">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-perfume-violet.html" title="Artero perfume Violet">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/artero_perfume_violet.jpg"  alt="Artero perfume Violet" title="Artero perfume Violet" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-perfume-violet.html" title="Artero perfume Violet"><b>Artero perfume Violet</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-perfume-violet.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2403/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Perfume luminoso y vibrante, mezcla floral. Fresco y suave de larga duracion, elimina totalmente los malos olores. Formato: 90 ml                    <a href="http://www.misterguau.com/index.php/artero-perfume-violet.html" title="Artero perfume Violet">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/atrapapelos-sandimas.html" title="Atrapapelos Sandimas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/t/atrapapelos_65288.jpg"  alt="Atrapapelos Sandimas" title="Atrapapelos Sandimas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/atrapapelos-sandimas.html" title="Atrapapelos Sandimas"><b>Atrapapelos Sandimas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/atrapapelos-sandimas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3669/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Atrapapelos que nos ayudará a mantener sofás y nuestra ropa libre de los pelos de nuestro perro. También útil para recoger otros tipos de suciedades. Con porta-rodillo aplicador. Cada atrapapelos contiene 7 meros de cinta pegante y un total de 50 láminas desechables. Formato: 1 unidad                    <a href="http://www.misterguau.com/index.php/atrapapelos-sandimas.html" title="Atrapapelos Sandimas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-animal-stop-repelente.html" title="Axis Animal Stop (Repelente)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/n/animal_stop_axis.jpg"  alt="Axis Animal Stop (Repelente)" title="Axis Animal Stop (Repelente)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-animal-stop-repelente.html" title="Axis Animal Stop (Repelente)"><b>Axis Animal Stop (Repelente)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-animal-stop-repelente.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2273/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mantiene a los perros alejados de las zonas que desee proteger, evitando que se orinen, muerdan, arañen, etc. Pulverizar cada 3 días las zonas que desee proteger: paredes, muebles, cortinas, nueumáticos, etc. Formato: 200ml.                    <a href="http://www.misterguau.com/index.php/axis-animal-stop-repelente.html" title="Axis Animal Stop (Repelente)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/champu-biozoo-antiparasitos.html" title="Axis Champú Antiparásitos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/biozoo_champu_antiparasitos_250ml.jpg"  alt="Axis Champú Antiparásitos" title="Axis Champú Antiparásitos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/champu-biozoo-antiparasitos.html" title="Axis Champú Antiparásitos"><b>Axis Champú Antiparásitos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/champu-biozoo-antiparasitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3263/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú que en su fórmula incluye un repelente anti-insectos (mosquitos, pulgas y garrapatas). Ideal para los meses de primavera-verano y como coayudante a desparasitadores. Elimina los olores desagradables, devolviendo al pelo su envoltura natural facilitando el peinado. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/champu-biozoo-antiparasitos.html" title="Axis Champú Antiparásitos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-champu-en-espuma-seca.html" title="Axis Champú en espuma seca">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/s/espuma_seca_axis_270ml_104.jpg"  alt="Axis Champú en espuma seca" title="Axis Champú en espuma seca" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-champu-en-espuma-seca.html" title="Axis Champú en espuma seca"><b>Axis Champú en espuma seca</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-champu-en-espuma-seca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3914/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú en espuma seca especialmente formulado para realizar la higiene de perros y gatos cuando no se pueden mojar (por ser cachorros, por enfermedades, etc). Formato: 270 ml.<br />
                    <a href="http://www.misterguau.com/index.php/axis-champu-en-espuma-seca.html" title="Axis Champú en espuma seca">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-champu-para-bulldog-frances.html" title="Axis Champú para Bulldog Francés">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/h/champu_axis_bulldog_frances_250ml_190.jpg"  alt="Axis Champú para Bulldog Francés" title="Axis Champú para Bulldog Francés" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-champu-para-bulldog-frances.html" title="Axis Champú para Bulldog Francés"><b>Axis Champú para Bulldog Francés</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-champu-para-bulldog-frances.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3917/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú especialmente diseñado para la higiene de nuestro Bulldog Francés, los cuales tienen una piel muy sensible. Su contenido en leche de Manuka y Coco alivia las irritaciones y picores de la piel, mientras la hidrata y tonifica. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/axis-champu-para-bulldog-frances.html" title="Axis Champú para Bulldog Francés">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-champu-para-cachorros.html" title="Axis Champú para cachorros">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/h/champu_axis_cachorros_750ml_101.jpg"  alt="Axis Champú para cachorros" title="Axis Champú para cachorros" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-champu-para-cachorros.html" title="Axis Champú para cachorros"><b>Axis Champú para cachorros</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-champu-para-cachorros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/653/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú especialmente formulado para cuidar la delicada piel de los cachorros. Especialmente adaptado al PH y a las características cutáneas del cachorro. Elimina los malos olores, devolviendo al pelo su envoltura y brillo natural facilitando el peinado. Formato: 750ml.                    <a href="http://www.misterguau.com/index.php/axis-champu-para-cachorros.html" title="Axis Champú para cachorros">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-champu-para-yorkshire-terrier.html" title="Axis Champú para Yorkshire Terrier">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/h/champu_axis_yorkshire_250ml_189.jpg"  alt="Axis Champú para Yorkshire Terrier" title="Axis Champú para Yorkshire Terrier" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-champu-para-yorkshire-terrier.html" title="Axis Champú para Yorkshire Terrier"><b>Axis Champú para Yorkshire Terrier</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-champu-para-yorkshire-terrier.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3916/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú con Aceite de visón especialmente formulado para el pelo largo y sedoso de los Yorkshire Terriers. Adaptado al PH y características cutáneas de la raza. Nutre y reconstruye la película protectora del pelaje devolviendo al pelo su envoltura y brillo natural facilitando el peinado. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/axis-champu-para-yorkshire-terrier.html" title="Axis Champú para Yorkshire Terrier">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/champu-axis-vifos-con-insecticida.html" title="Axis Champú Vifos con insecticida">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/h/champu_vifos_250ml_insecticida_2.jpg"  alt="Axis Champú Vifos con insecticida" title="Axis Champú Vifos con insecticida" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/champu-axis-vifos-con-insecticida.html" title="Axis Champú Vifos con insecticida"><b>Axis Champú Vifos con insecticida</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/champu-axis-vifos-con-insecticida.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1975/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú que en su fórmula incluye un repelente anti-insectos (mosquitos, pulgas y garrapatas). Ideal para los meses de primavera-verano y como coayudante a desparasitadores. 2 Formatos: 250ml y 750ml                    <a href="http://www.misterguau.com/index.php/champu-axis-vifos-con-insecticida.html" title="Axis Champú Vifos con insecticida">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-champu-y-acondicionador-2-en-1.html" title="Axis Champú y acondicionador 2 en 1">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/biozoo_champu_2_en_1_250ml_016700.jpg"  alt="Axis Champú y acondicionador 2 en 1" title="Axis Champú y acondicionador 2 en 1" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-champu-y-acondicionador-2-en-1.html" title="Axis Champú y acondicionador 2 en 1"><b>Axis Champú y acondicionador 2 en 1</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-champu-y-acondicionador-2-en-1.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3972/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú 2 en 1 especialmente adaptado al PH y a las características cutáneas del perro. Repara, fortalece y nutre el pelo proporcionándole brillo, suavidad y un agradable aroma frutal a mango. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/axis-champu-y-acondicionador-2-en-1.html" title="Axis Champú y acondicionador 2 en 1">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/baby-animals-10cm.html" title="Baby Animals (10cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/baby_animals_10cm_1.jpg"  alt="Baby Animals (10cm)" title="Baby Animals (10cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/baby-animals-10cm.html" title="Baby Animals (10cm)"><b>Baby Animals (10cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/baby-animals-10cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1262/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Animalitos realizados en látex y con interior blando. Pequeños e indicados para perros de raza pequeña. Colores surtidos. Se sirven individualmente. Tamaño: 10cm                    <a href="http://www.misterguau.com/index.php/baby-animals-10cm.html" title="Baby Animals (10cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bacontwist-snack-topnature.html" title="BaconTwist Snack Topnature">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/o/topnature_bacontwist_185gr_65938.jpg"  alt="BaconTwist Snack Topnature" title="BaconTwist Snack Topnature" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bacontwist-snack-topnature.html" title="BaconTwist Snack Topnature"><b>BaconTwist Snack Topnature</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,70&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bacontwist-snack-topnature.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5452/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosos snack con sabor a bacon. Se pueden suministrar a cualquier hora del día como premio o recompensa. Ideal para razas pequeñas y medianas. Formato: 185g                    <a href="http://www.misterguau.com/index.php/bacontwist-snack-topnature.html" title="BaconTwist Snack Topnature">Saber más</a><br><br>
					<span class="required"><strong>48% Dto! Ahorra 2.75&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bandana-para-perro-barca-fcb-futbol-club-barcelona.html" title="Bandana para perro Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/bandana_barca_t-2_2.jpg"  alt="Bandana para perro Barça (FCB - Futbol Club Barcelona)" title="Bandana para perro Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bandana-para-perro-barca-fcb-futbol-club-barcelona.html" title="Bandana para perro Barça (FCB - Futbol Club Barcelona)"><b>Bandana para perro Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bandana-para-perro-barca-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3565/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bandana oficial de la primera equipación del FCB. Sirve para proteger le cuello del frío, como accesorios decorativo y para proteger de la calor (mojándolo en verano). Presume de tus colores con esta bandana que será la envidia de todos. Medidas: 50cm y 70cm (de punta a punta)                    <a href="http://www.misterguau.com/index.php/bandana-para-perro-barca-fcb-futbol-club-barcelona.html" title="Bandana para perro Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bandana-para-perro-barca-2-equipacion-fcb-futbol-club-barcelona.html" title="Bandana para perro Barça 2ª equipación (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_14_4.jpg"  alt="Bandana para perro Barça 2ª equipación (FCB - Futbol Club Barcelona)" title="Bandana para perro Barça 2ª equipación (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bandana-para-perro-barca-2-equipacion-fcb-futbol-club-barcelona.html" title="Bandana para perro Barça 2ª equipación (FCB - Futbol Club Barcelona)"><b>Bandana para perro Barça 2ª equipación (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bandana-para-perro-barca-2-equipacion-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3562/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bandana oficial de la segunda equipación del FCB 2013-2014. Sirve para proteger le cuello del frío, como accesorios decorativo y para proteger de la calor (mojándolo en verano). Presume de tus colores con esta bandana que será la envidia de todos. Medidas: 50cm y 70cm (de punta a punta)                    <a href="http://www.misterguau.com/index.php/bandana-para-perro-barca-2-equipacion-fcb-futbol-club-barcelona.html" title="Bandana para perro Barça 2ª equipación (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bandana-para-perro-espanyol-rcd-espanyol.html" title="Bandana para perro Espanyol (RCD Espanyol)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/bandana_rcd_espanyol_t1_1022804.jpg"  alt="Bandana para perro Espanyol (RCD Espanyol)" title="Bandana para perro Espanyol (RCD Espanyol)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bandana-para-perro-espanyol-rcd-espanyol.html" title="Bandana para perro Espanyol (RCD Espanyol)"><b>Bandana para perro Espanyol (RCD Espanyol)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bandana-para-perro-espanyol-rcd-espanyol.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5374/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bandana oficial de la primera equipación del Real Club Deportivo Espanyol. Sirve para proteger le cuello del frío, como accesorios decorativo y para proteger de la calor (mojándolo en verano). Presume de tus colores futboleros con esta bandana que será la envidia de todos. En color azul perico con el escudo bordado y ribete blanco. Medidas: 50cm, 70cm, 90cm                    <a href="http://www.misterguau.com/index.php/bandana-para-perro-espanyol-rcd-espanyol.html" title="Bandana para perro Espanyol (RCD Espanyol)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/portapa-al-nappy-6-supernappy.html" title="Bandeja empapadores Nappy + 6 SuperNappy">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_18_13.jpg"  alt="Bandeja empapadores Nappy + 6 SuperNappy" title="Bandeja empapadores Nappy + 6 SuperNappy" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/portapa-al-nappy-6-supernappy.html" title="Bandeja empapadores Nappy + 6 SuperNappy"><b>Bandeja empapadores Nappy + 6 SuperNappy</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															43,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/portapa-al-nappy-6-supernappy.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1294/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Accesorio diseñado para facilitar el aprendizaje de los cachorros. Con este sistema de bandeja+pañal les enseñaremos fácilmente donde hacer sus necesidades hasta que alcancen la edad de salir a la calle. Superficie útil bandeja: 38*30cm. Tamaño pañales: 60x60cm                     <a href="http://www.misterguau.com/index.php/portapa-al-nappy-6-supernappy.html" title="Bandeja empapadores Nappy + 6 SuperNappy">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barrita-de-piel-con-yogurt-hobbit-alf.html" title="Barrita de piel con yogurt Hobbit Alf">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/o/hobbit_alf_barrita_yogurt_ref121.jpg"  alt="Barrita de piel con yogurt Hobbit Alf" title="Barrita de piel con yogurt Hobbit Alf" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barrita-de-piel-con-yogurt-hobbit-alf.html" title="Barrita de piel con yogurt Hobbit Alf"><b>Barrita de piel con yogurt Hobbit Alf</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barrita-de-piel-con-yogurt-hobbit-alf.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5308/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Barrita de piel rellena de crema de yogurt apta para el consumo de perros. Presentado a granel dentro de bolsita protectora. Ingredientes: subproductos lacteos, huevos, minerales y piel de vacuno. Tamaño: 14cm aprox                    <a href="http://www.misterguau.com/index.php/barrita-de-piel-con-yogurt-hobbit-alf.html" title="Barrita de piel con yogurt Hobbit Alf">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barrita-redonda-de-ternera-hobbit-alf.html" title="Barrita redonda de ternera Hobbit Alf ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/o/hobbit_alf_barrita_redonda_ternera_bote_1kg_088.jpg"  alt="Barrita redonda de ternera Hobbit Alf " title="Barrita redonda de ternera Hobbit Alf " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barrita-redonda-de-ternera-hobbit-alf.html" title="Barrita redonda de ternera Hobbit Alf "><b>Barrita redonda de ternera Hobbit Alf </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barrita-redonda-de-ternera-hobbit-alf.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5323/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Barra redonda de 12 cm. de longitud elaborada con carne fresca de ternera, ligeramente ahumada. Presentado en bote plástico resellable para conservar todo el frescor y aroma. Contenido: 1Kg                     <a href="http://www.misterguau.com/index.php/barrita-redonda-de-ternera-hobbit-alf.html" title="Barrita redonda de ternera Hobbit Alf ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-para-perro-light-supercan.html" title="Barritas para perro light Supercan">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_light_para_perros_300gr_348001.jpg"  alt="Barritas para perro light Supercan" title="Barritas para perro light Supercan" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-para-perro-light-supercan.html" title="Barritas para perro light Supercan"><b>Barritas para perro light Supercan</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-para-perro-light-supercan.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4759/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario para perros bajo en proteínas que ayuda al control del peso de nuestra mascota. Muy indicado como premio. Bajo en calorías. Elaborado a base de productos de origen vegetal. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/barritas-para-perro-light-supercan.html" title="Barritas para perro light Supercan">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bayer-vetriderm-anti-alergias.html" title="Bayer Vetriderm (anti-alergias)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/e/vetriderm_locion_350ml_1007884.jpg"  alt="Bayer Vetriderm (anti-alergias)" title="Bayer Vetriderm (anti-alergias)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bayer-vetriderm-anti-alergias.html" title="Bayer Vetriderm (anti-alergias)"><b>Bayer Vetriderm (anti-alergias)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															26,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bayer-vetriderm-anti-alergias.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1600/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Vetriderm es una loción que, aplicada sobre la piel y el pelo de las mascotas, reduce eficazmente los alérgenos que provocan reacciones en las personas alérgicas. Formato: 350ml.                    <a href="http://www.misterguau.com/index.php/bayer-vetriderm-anti-alergias.html" title="Bayer Vetriderm (anti-alergias)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-automatico-drinkwell-original.html" title="Bebedero automático Drinkwell original">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/bebedero_automatico_drinkwell.jpg"  alt="Bebedero automático Drinkwell original" title="Bebedero automático Drinkwell original" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-automatico-drinkwell-original.html" title="Bebedero automático Drinkwell original"><b>Bebedero automático Drinkwell original</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															89,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-automatico-drinkwell-original.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2447/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bebedero automático para gatos en forma de fuente de agua, para que nuestra mascota sedie la sed, además el agua tendrá unos grados menos, para que esté fresca. Indicado para perros pequeños y gatos. Capacidad: 1.5l                    <a href="http://www.misterguau.com/index.php/bebedero-automatico-drinkwell-original.html" title="Bebedero automático Drinkwell original">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-de-plastico-plegable-kl.html" title="Bebedero de plástico plegable KL">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/bebedero_plastico_plegable_44022_3.jpg"  alt="Bebedero de plástico plegable KL" title="Bebedero de plástico plegable KL" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-de-plastico-plegable-kl.html" title="Bebedero de plástico plegable KL"><b>Bebedero de plástico plegable KL</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-de-plastico-plegable-kl.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1062/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bebedero sencillo, limpio y totalmente plegable. Lo podemos llevar plegado en un bolsillo y en caso de necesidad utilizarlo!. Pequeño y reutilizable. Capacidad: 300ml                    <a href="http://www.misterguau.com/index.php/bebedero-de-plastico-plegable-kl.html" title="Bebedero de plástico plegable KL">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-portatil-hawai-3-colores.html" title="Bebedero portátil Hawai (3 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/bebedero_portatil_hawai_2.jpg"  alt="Bebedero portátil Hawai (3 colores)" title="Bebedero portátil Hawai (3 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-portatil-hawai-3-colores.html" title="Bebedero portátil Hawai (3 colores)"><b>Bebedero portátil Hawai (3 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-portatil-hawai-3-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2054/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bebedero portátil para poder dar de beber a nuestra mascota en viajes, escapadas o largos paseos. Con cierre de seguridad para que no escape el agua. Lateral estriado para que no resbale. Con ganchito para colgar del cinturón o bandolera. Disponible en 3 colores y dos medidas. Medidas: 500ml, 750ml                    <a href="http://www.misterguau.com/index.php/bebedero-portatil-hawai-3-colores.html" title="Bebedero portátil Hawai (3 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-portatil-karlie-2-medidas.html" title="Bebedero portátil Karlie (2 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/bebedero_portatil_500ml_504297.jpg"  alt="Bebedero portátil Karlie (2 medidas)" title="Bebedero portátil Karlie (2 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-portatil-karlie-2-medidas.html" title="Bebedero portátil Karlie (2 medidas)"><b>Bebedero portátil Karlie (2 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-portatil-karlie-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5058/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bebedero portátil para las vacaciones, escapadas y excursiones, para que nuestro perro siempre disponga de agua a su alcance y no se deshidrate. Con enganche que nos permite atarlo al bolso o cinturón. Con cierrer hermético que asegura que no se escape el agua. Con dosificador. Disponible en rojo y negro. Medidas: 500ml - 750ml.                    <a href="http://www.misterguau.com/index.php/bebedero-portatil-karlie-2-medidas.html" title="Bebedero portátil Karlie (2 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-portatil-kl.html" title="Bebedero portátil KL">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/bebedero_botella_portatil_250ml_44056_1.jpg"  alt="Bebedero portátil KL" title="Bebedero portátil KL" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-portatil-kl.html" title="Bebedero portátil KL"><b>Bebedero portátil KL</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-portatil-kl.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1140/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bebedero portátil para que nuestro perro pueda beber fácilmente durante largos paseos, excursiones, en la playa o el campo. 3 colores. Medida: S (250ml)                    <a href="http://www.misterguau.com/index.php/bebedero-portatil-kl.html" title="Bebedero portátil KL">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/biberon-para-cachorros-sandimas.html" title="Biberón para cachorros Sandimas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/biberon_100ml_sdimas_68050_1.jpg"  alt="Biberón para cachorros Sandimas" title="Biberón para cachorros Sandimas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/biberon-para-cachorros-sandimas.html" title="Biberón para cachorros Sandimas"><b>Biberón para cachorros Sandimas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/biberon-para-cachorros-sandimas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1693/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Práctico biberón para alimentar a cachorros y gatitos en sus primeras semanas de vida. También indicado para ayudar a comer a perros y gatos enfermos o en recuperación. El diseño de la tetina se asemeja a la mama de los mamíferos. Incluye una tetina de recambio. Capacidad: 100ml.                    <a href="http://www.misterguau.com/index.php/biberon-para-cachorros-sandimas.html" title="Biberón para cachorros Sandimas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/biberon-para-perros-gimborn.html" title="Biberón para perros Gimborn">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/biberon_gimborn_68553.jpg"  alt="Biberón para perros Gimborn" title="Biberón para perros Gimborn" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/biberon-para-perros-gimborn.html" title="Biberón para perros Gimborn"><b>Biberón para perros Gimborn</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/biberon-para-perros-gimborn.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4739/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Biberón de cristal con tetinas de varias formas y tamaños para así adaptarse a las bocas de los diferentes tipos de cachorritos. Ideal para los primeros meses de los cachorros, para cumplimentar su dieta.                    <a href="http://www.misterguau.com/index.php/biberon-para-perros-gimborn.html" title="Biberón para perros Gimborn">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-chips-de-pollo-y-queso-hobbit-alf.html" title="Bocaditos Chips de pollo y queso Hobbit Alf">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/o/hobbit_alf_chips_de_pollo_y_queso_100gr_2110.jpg"  alt="Bocaditos Chips de pollo y queso Hobbit Alf" title="Bocaditos Chips de pollo y queso Hobbit Alf" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-chips-de-pollo-y-queso-hobbit-alf.html" title="Bocaditos Chips de pollo y queso Hobbit Alf"><b>Bocaditos Chips de pollo y queso Hobbit Alf</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-chips-de-pollo-y-queso-hobbit-alf.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5329/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bocaditos tiernos de queso y carne de pollo. Sin gluten. Especial para entrenamiento de razas pequeñas y medianas. También apto para gatos. Con omega 3 y Omega 6. Tamaño: 1cm aprox. Presentado en blister. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/bocaditos-chips-de-pollo-y-queso-hobbit-alf.html" title="Bocaditos Chips de pollo y queso Hobbit Alf">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-estrellitas-tiernas-de-ganso-hobbit-alf.html" title="Bocaditos Estrellitas tiernas de ganso Hobbit Alf">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/o/hobbit_alf_estrellitas_tiernas_de_ganso_100gr_2130.jpg"  alt="Bocaditos Estrellitas tiernas de ganso Hobbit Alf" title="Bocaditos Estrellitas tiernas de ganso Hobbit Alf" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-estrellitas-tiernas-de-ganso-hobbit-alf.html" title="Bocaditos Estrellitas tiernas de ganso Hobbit Alf"><b>Bocaditos Estrellitas tiernas de ganso Hobbit Alf</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-estrellitas-tiernas-de-ganso-hobbit-alf.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5330/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bocaditos tiernos con forma de estrella y a base de ganso. Sin gluten. Especial para entrenamiento de razas pequeñas y medianas. Con omega 3 y Omega 6. Tamaño: 1cm aprox. Presentado en blister. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/bocaditos-estrellitas-tiernas-de-ganso-hobbit-alf.html" title="Bocaditos Estrellitas tiernas de ganso Hobbit Alf">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-estrellitas-tiernas-de-salmon-y-queso-hobbit-alf.html" title="Bocaditos Estrellitas tiernas de salmón y queso Hobbit Alf">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/o/hobbit_alf_estrellitas_tiernas_de_salmon_y_queso_100gr_2194.jpg"  alt="Bocaditos Estrellitas tiernas de salmón y queso Hobbit Alf" title="Bocaditos Estrellitas tiernas de salmón y queso Hobbit Alf" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-estrellitas-tiernas-de-salmon-y-queso-hobbit-alf.html" title="Bocaditos Estrellitas tiernas de salmón y queso Hobbit Alf"><b>Bocaditos Estrellitas tiernas de salmón y queso Hobbit Alf</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-estrellitas-tiernas-de-salmon-y-queso-hobbit-alf.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5331/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bocaditos tiernos con forma de estrella y a base de salmón y queso. Sin gluten. Especial para entrenamiento de razas pequeñas y medianas. También apto para gatos. Con omega 3 y Omega 6. Tamaño: 1cm aprox. Presentado en blister. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/bocaditos-estrellitas-tiernas-de-salmon-y-queso-hobbit-alf.html" title="Bocaditos Estrellitas tiernas de salmón y queso Hobbit Alf">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-para-perro-mentol-aliento-fresco-supercan-45g.html" title="Bocaditos para perro Mentol aliento fresco Supercan (45g)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/eurocan_snacks_sabor_mentol_para_perros_40gr_305905.jpg"  alt="Bocaditos para perro Mentol aliento fresco Supercan (45g)" title="Bocaditos para perro Mentol aliento fresco Supercan (45g)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-para-perro-mentol-aliento-fresco-supercan-45g.html" title="Bocaditos para perro Mentol aliento fresco Supercan (45g)"><b>Bocaditos para perro Mentol aliento fresco Supercan (45g)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-para-perro-mentol-aliento-fresco-supercan-45g.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2052/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snack con forma de barrita tgriangulas troceada semi-humeda y tierna para premiar a nuestra mascota. Con sabor y aroma de menta para fomentar el frescor bucal de nuestro perro. Elaborado a base de productos animales y de origen vegetal, azúcares, minerales y grasas. Ideal para llevar en el bolso dado su pequeño y cierre a presión. Formato: 45gr                    <a href="http://www.misterguau.com/index.php/bocaditos-para-perro-mentol-aliento-fresco-supercan-45g.html" title="Bocaditos para perro Mentol aliento fresco Supercan (45g)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-tiernos-de-caza-hobbit-alf.html" title="Bocaditos tiernos de caza Hobbit Alf">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/o/hobbit_alf_bocaditos_tiernos_de_caza_100gr_2066.jpg"  alt="Bocaditos tiernos de caza Hobbit Alf" title="Bocaditos tiernos de caza Hobbit Alf" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-tiernos-de-caza-hobbit-alf.html" title="Bocaditos tiernos de caza Hobbit Alf"><b>Bocaditos tiernos de caza Hobbit Alf</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-tiernos-de-caza-hobbit-alf.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5327/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pequeños bocaditos tiernos elaborados con carne de caza y patata. Sin gluten. Ideal para entrenamiento de razas pequeñas y medianas. Con omega 3 y Omega 6. Tamaño: 1cm aprox. Presentado en blister. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/bocaditos-tiernos-de-caza-hobbit-alf.html" title="Bocaditos tiernos de caza Hobbit Alf">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-tiernos-de-salmon-hobbit-alf.html" title="Bocaditos tiernos de salmón Hobbit Alf">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/o/hobbit_alf_bocaditos_tiernos_de_salmon_100gr_2067.jpg"  alt="Bocaditos tiernos de salmón Hobbit Alf" title="Bocaditos tiernos de salmón Hobbit Alf" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-tiernos-de-salmon-hobbit-alf.html" title="Bocaditos tiernos de salmón Hobbit Alf"><b>Bocaditos tiernos de salmón Hobbit Alf</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-tiernos-de-salmon-hobbit-alf.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5328/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pequeños bocaditos tiernos elaborados con carne de salmón y patata. Sin gluten. Ideal para entrenamiento de razas pequeñas y medianas. Con omega 3 y Omega 6. Tamaño: 1cm aprox. Presentado en blister. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/bocaditos-tiernos-de-salmon-hobbit-alf.html" title="Bocaditos tiernos de salmón Hobbit Alf">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocados-de-buey-y-arroz-300gr.html" title="Bocados de buey y arroz (300gr)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bocados_buey_y_arroz_300_g_417.jpg"  alt="Bocados de buey y arroz (300gr)" title="Bocados de buey y arroz (300gr)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocados-de-buey-y-arroz-300gr.html" title="Bocados de buey y arroz (300gr)"><b>Bocados de buey y arroz (300gr)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocados-de-buey-y-arroz-300gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3929/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sanos snacks para perros para premiar su fidelidad y obediencia, que los entretienen a la vez que limpian los dientes, refuerzan la mandíbula, aportan proteínas, vitaminas y minerales. Realizado con 100% productos naturales. Cuida el estado de salud de su perro, sus articulaciones, su flora intestinal, su pelo y piel. Con cordero. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/bocados-de-buey-y-arroz-300gr.html" title="Bocados de buey y arroz (300gr)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocados-de-cordero-y-arroz-300gr.html" title="Bocados de cordero y arroz (300gr)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bocados_cordero_y_arroz_300_g_416.jpg"  alt="Bocados de cordero y arroz (300gr)" title="Bocados de cordero y arroz (300gr)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocados-de-cordero-y-arroz-300gr.html" title="Bocados de cordero y arroz (300gr)"><b>Bocados de cordero y arroz (300gr)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocados-de-cordero-y-arroz-300gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3928/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sanos snacks para perros para premiar su fidelidad y obediencia, que los entretienen a la vez que limpian los dientes, refuerzan la mandíbula, aportan proteínas, vitaminas y minerales. Realizado con 100% productos naturales. Cuida el estado de salud de su perro, sus articulaciones, su flora intestinal, su pelo y piel. Con cordero. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/bocados-de-cordero-y-arroz-300gr.html" title="Bocados de cordero y arroz (300gr)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsa-palitos-munchy-100-unid.html" title="Bolsa palitos Munchy (100 unid.)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_palitos_munchy_7-8mm_100uds_504955.jpg"  alt="Bolsa palitos Munchy (100 unid.)" title="Bolsa palitos Munchy (100 unid.)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsa-palitos-munchy-100-unid.html" title="Bolsa palitos Munchy (100 unid.)"><b>Bolsa palitos Munchy (100 unid.)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsa-palitos-munchy-100-unid.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3839/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolsa que contiene 100 palitos munchy a base de piel de cerdo. De colores surtidos y con un grosor de 7-8mm de diámetro. Ideal para ser un buen entretenimiento para perros pequeños y medianos. Formato: 100 palitos                    <a href="http://www.misterguau.com/index.php/bolsa-palitos-munchy-100-unid.html" title="Bolsa palitos Munchy (100 unid.)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-recambios.html" title="Bolsas higiénicas recogedoras (recambios)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsas_higienicas_para_perro_recambio_2.jpg"  alt="Bolsas higiénicas recogedoras (recambios)" title="Bolsas higiénicas recogedoras (recambios)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-recambios.html" title="Bolsas higiénicas recogedoras (recambios)"><b>Bolsas higiénicas recogedoras (recambios)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-recambios.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1063/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rollos de bolsitas higiénicas para dispensadores que acepten las bolsas en formato rollo. Contiene 4 rollos de 15 bolsitas cada uno.                    <a href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-recambios.html" title="Bolsas higiénicas recogedoras (recambios)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-axis.html" title="Bolsas higiénicas recogedoras Axis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/recambio_bolsas_recogedoras_hueso_1071.jpg"  alt="Bolsas higiénicas recogedoras Axis" title="Bolsas higiénicas recogedoras Axis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-axis.html" title="Bolsas higiénicas recogedoras Axis"><b>Bolsas higiénicas recogedoras Axis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-axis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3701/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rollos de bolsitas higiénicas para dispensadores que acepten las bolsas en formato rollo. Contiene 3 rollos de 15 bolsitas cada uno. Colores surtidos.                    <a href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-axis.html" title="Bolsas higiénicas recogedoras Axis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-ny-individual.html" title="Bolsas higiénicas recogedoras NY (individual)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/i/display_de_60_rollos_de_15_bolsas_colores_surtido.jpg"  alt="Bolsas higiénicas recogedoras NY (individual)" title="Bolsas higiénicas recogedoras NY (individual)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-ny-individual.html" title="Bolsas higiénicas recogedoras NY (individual)"><b>Bolsas higiénicas recogedoras NY (individual)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>0,80&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 0.55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-ny-individual.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2406/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rollo de bolsitas higiénicas para dispensadores que acepten las bolsas en formato rollo. En colores surtidos. Se sirve individualmente y cada rollito contiene 15 bolsitas recoge-excrementos.                    <a href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-ny-individual.html" title="Bolsas higiénicas recogedoras NY (individual)">Saber más</a><br><br>
					<span class="required"><strong>31%de Dto! Ahorra 0.25&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-topnature.html" title="Bolsas higiénicas recogedoras Topnature">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_bolsa_higienica_rollo_ind_65940.jpg"  alt="Bolsas higiénicas recogedoras Topnature" title="Bolsas higiénicas recogedoras Topnature" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-topnature.html" title="Bolsas higiénicas recogedoras Topnature"><b>Bolsas higiénicas recogedoras Topnature</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>0,70&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 0.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-topnature.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5182/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rollo de bolsitas higiénicas para dispensadores que acepten las bolsas en formato rollo. En colores surtidos con estampado de estrellas (negras, rojas o azules). Cada rollo contiene 20 bolsitas. Formato: 1 unid envasada individualmente.                    <a href="http://www.misterguau.com/index.php/bolsas-higienicas-recogedoras-topnature.html" title="Bolsas higiénicas recogedoras Topnature">Saber más</a><br><br>
					<span class="required"><strong>36%de Dto! Ahorra 0.25&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-recogedoras-multicolor.html" title="Bolsas recogedoras multicolor KL">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsas_recogedoras_multicolor_2.jpg"  alt="Bolsas recogedoras multicolor KL" title="Bolsas recogedoras multicolor KL" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-recogedoras-multicolor.html" title="Bolsas recogedoras multicolor KL"><b>Bolsas recogedoras multicolor KL</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-recogedoras-multicolor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2282/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pack de 2 rollitos de bolsas recoge-excrementos. Cada rollito contiene 20 bolsitas. Colores surtidos y mucho mas agradables que las típicas bolsas negras. Formato: Pack 2 rollos                    <a href="http://www.misterguau.com/index.php/bolsas-recogedoras-multicolor.html" title="Bolsas recogedoras multicolor KL">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsitas-higienicas-ny-colores.html" title="Bolsitas higiénicas NY Colores">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsas_higienicas_4_rollos_de_20_bolsas_colores.jpg"  alt="Bolsitas higiénicas NY Colores" title="Bolsitas higiénicas NY Colores" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsitas-higienicas-ny-colores.html" title="Bolsitas higiénicas NY Colores"><b>Bolsitas higiénicas NY Colores</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsitas-higienicas-ny-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4822/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rollos de bolsitas higiénicas de colores para recoger las necesidades de nuestro perro en la calle. Incluye 4 rollos con 20 bolsitas cada uno. Formato: Pack 4*20 bolsas                    <a href="http://www.misterguau.com/index.php/bolsitas-higienicas-ny-colores.html" title="Bolsitas higiénicas NY Colores">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsitas-higienicas-ny-negras.html" title="Bolsitas higiénicas NY Negras">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsas_higienicas_4_rollos_de_20_bolsas_negras.jpg"  alt="Bolsitas higiénicas NY Negras" title="Bolsitas higiénicas NY Negras" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsitas-higienicas-ny-negras.html" title="Bolsitas higiénicas NY Negras"><b>Bolsitas higiénicas NY Negras</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsitas-higienicas-ny-negras.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4823/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rollos de bolsitas higiénicas negras para recoger las necesidades de nuestro perro en la calle. Incluye 4 rollos con 20 bolsitas cada uno. Formato: Pack 4*20 bolsas                    <a href="http://www.misterguau.com/index.php/bolsitas-higienicas-ny-negras.html" title="Bolsitas higiénicas NY Negras">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsitas-higienicas-wc-bones-huesitos.html" title="Bolsitas higiénicas WC Bones (Huesitos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/recambio_bolsas_bones_2.jpg"  alt="Bolsitas higiénicas WC Bones (Huesitos)" title="Bolsitas higiénicas WC Bones (Huesitos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsitas-higienicas-wc-bones-huesitos.html" title="Bolsitas higiénicas WC Bones (Huesitos)"><b>Bolsitas higiénicas WC Bones (Huesitos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsitas-higienicas-wc-bones-huesitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2042/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rollos de bolsitas higiénicas para recoger las necesidades de nuestro perro en la calle. Incluye 4 rollos con diseño de huesitos. Formato: 4*15 bolsas                    <a href="http://www.misterguau.com/index.php/bolsitas-higienicas-wc-bones-huesitos.html" title="Bolsitas higiénicas WC Bones (Huesitos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsitas-higienicas-wc-pawns-pisadas.html" title="Bolsitas higiénicas WC Pawns (Pisadas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/recanbio_bolsas_paws_2.jpg"  alt="Bolsitas higiénicas WC Pawns (Pisadas)" title="Bolsitas higiénicas WC Pawns (Pisadas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsitas-higienicas-wc-pawns-pisadas.html" title="Bolsitas higiénicas WC Pawns (Pisadas)"><b>Bolsitas higiénicas WC Pawns (Pisadas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsitas-higienicas-wc-pawns-pisadas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2044/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rollos de bolsitas higiénicas para recoger las necesidades de nuestro perro en la calle. Incluye 4 rollos con diseño de pisaditas blancas caninas. Formato: 4*15 bolsas                    <a href="http://www.misterguau.com/index.php/bolsitas-higienicas-wc-pawns-pisadas.html" title="Bolsitas higiénicas WC Pawns (Pisadas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-dakar-marino.html" title="Bolso Dakar Marino">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_dakar_marino_40x20x30cm.jpg"  alt="Bolso Dakar Marino" title="Bolso Dakar Marino" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-dakar-marino.html" title="Bolso Dakar Marino"><b>Bolso Dakar Marino</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															40,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-dakar-marino.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5425/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolso para el transporte de pequeñas mascotas como perros pequeños y gatos. Con cierre superior y lateral con respiradero. Con bolsillo frontal decorativo y funcional para pequeños objetos. Hasta 4Kg. Medidas: 40x20x30cm.                    <a href="http://www.misterguau.com/index.php/bolso-dakar-marino.html" title="Bolso Dakar Marino">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-dakar-marron.html" title="Bolso Dakar Marrón">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_dakar_marron_40x20x30cm.jpg"  alt="Bolso Dakar Marrón" title="Bolso Dakar Marrón" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-dakar-marron.html" title="Bolso Dakar Marrón"><b>Bolso Dakar Marrón</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															40,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-dakar-marron.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5426/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolso para el transporte de pequeñas mascotas como perros pequeños y gatos. Con cierre superior y lateral con respiradero. Con bolsillo frontal decorativo y funcional para pequeños objetos. Hasta 4Kg. Medidas: 40x20x30cm.                    <a href="http://www.misterguau.com/index.php/bolso-dakar-marron.html" title="Bolso Dakar Marrón">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-de-transporte-city-beige-2-medidas.html" title="Bolso de transporte City (Beige) - 2 medidas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_transporte_city_37x15x27cm_beige_31417.jpg"  alt="Bolso de transporte City (Beige) - 2 medidas" title="Bolso de transporte City (Beige) - 2 medidas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-de-transporte-city-beige-2-medidas.html" title="Bolso de transporte City (Beige) - 2 medidas"><b>Bolso de transporte City (Beige) - 2 medidas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															46,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-de-transporte-city-beige-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4783/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolso de mano para perros y gatos de pequeños (hasta 8Kg en tamaño grande). Con un diseño muy actual, moderno y práctico. Con mecanismo de bloqueo para el collar. Con muchos bolsillos para nuestros accesorios (móvil, dinero, etc). Con red de ventilación y apertura superior. Con dos tipos de asa para llevarlo como bolso o bandolera. Perfecta distribución del peso. Fácil de limpiar. Medidas: T2 (42*21*30cm) - T3 (52*25*35cm)                    <a href="http://www.misterguau.com/index.php/bolso-de-transporte-city-beige-2-medidas.html" title="Bolso de transporte City (Beige) - 2 medidas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-azul.html" title="Bolso de transporte Firenze (Azul)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_firenze_azul_32x21x24cm.jpg"  alt="Bolso de transporte Firenze (Azul)" title="Bolso de transporte Firenze (Azul)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-azul.html" title="Bolso de transporte Firenze (Azul)"><b>Bolso de transporte Firenze (Azul)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>29,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 22.46&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-de-transporte-firenze-azul.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4929/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso bolso con diseño muy moderno. Realizado en micro-nylon muy resistente y elegante. En color azul con rebordes en chocolate. Con rejilla superior en tela con cremallera para bloquear la salida de nuestra mascota. Con respiradero superior y frontal. Con bolsita micro-nylon a juego para poner accesorios, como bolsitas WC, snacks. Medidas: 32x21x24cm.                    <a href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-azul.html" title="Bolso de transporte Firenze (Azul)">Saber más</a><br><br>
					<span class="required"><strong>25% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-hueso-granate.html" title="Bolso de transporte Firenze (Hueso-granate)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_firenze_beige-granate_32x21x24cm.jpg"  alt="Bolso de transporte Firenze (Hueso-granate)" title="Bolso de transporte Firenze (Hueso-granate)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-hueso-granate.html" title="Bolso de transporte Firenze (Hueso-granate)"><b>Bolso de transporte Firenze (Hueso-granate)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															32,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-de-transporte-firenze-hueso-granate.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5430/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso bolso con diseño muy moderno. Realizado en micro-nylon muy resistente y elegante. En color blanco crudo con detalles en granate. Con rejilla superior en tela con cremallera para bloquear la salida de nuestra mascota. Con respiradero superior y frontal. Con bolsita micro-nylon a juego para poner accesorios, como bolsitas WC, snacks. Medidas:  32x21x24cm.                    <a href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-hueso-granate.html" title="Bolso de transporte Firenze (Hueso-granate)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-khaki-naranja.html" title="Bolso de transporte Firenze (Khaki-naranja)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_firenze_khaki-naranja_32x21x24cm.jpg"  alt="Bolso de transporte Firenze (Khaki-naranja)" title="Bolso de transporte Firenze (Khaki-naranja)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-khaki-naranja.html" title="Bolso de transporte Firenze (Khaki-naranja)"><b>Bolso de transporte Firenze (Khaki-naranja)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															32,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-de-transporte-firenze-khaki-naranja.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5431/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso bolso con diseño muy moderno. Realizado en micro-nylon muy resistente y elegante. En color verde khaki con detalles en naranja que le dan mucha vistosidad. Con rejilla superior en tela con cremallera para bloquear la salida de nuestra mascota. Con respiradero superior y frontal. Con bolsita micro-nylon a juego para poner accesorios, como bolsitas WC, snacks. Medidas:  32x21x24cm.                    <a href="http://www.misterguau.com/index.php/bolso-de-transporte-firenze-khaki-naranja.html" title="Bolso de transporte Firenze (Khaki-naranja)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-azul-claro.html" title="Bolso de transporte Montecarlo (Azul claro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_montecarlo_verde_42x21x27cm_pe30029.jpg"  alt="Bolso de transporte Montecarlo (Azul claro)" title="Bolso de transporte Montecarlo (Azul claro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-azul-claro.html" title="Bolso de transporte Montecarlo (Azul claro)"><b>Bolso de transporte Montecarlo (Azul claro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															32,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-azul-claro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4838/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso bolso con diseño muy moderno para el transporte de perros y gatos. Realizado en micro-nylon muy resistente y elegante. En color azul celeste, crudo y con base gris marengo. Con cremallera doble superior cubierta. Con enganche interior de seguridad. Con respiradero superior e inferior. Medidas: 42*21*27cm.                    <a href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-azul-claro.html" title="Bolso de transporte Montecarlo (Azul claro)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-azul-marino.html" title="Bolso de transporte Montecarlo (Azul marino)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_montecarlo_marino_42x21x27cm_pe30030.jpg"  alt="Bolso de transporte Montecarlo (Azul marino)" title="Bolso de transporte Montecarlo (Azul marino)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-azul-marino.html" title="Bolso de transporte Montecarlo (Azul marino)"><b>Bolso de transporte Montecarlo (Azul marino)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															32,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-azul-marino.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4839/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso bolso con diseño muy moderno para el transporte de perros y gatos. Realizado en micro-nylon muy resistente y elegante. En color azul marino, crudo y con base gris marengo. Con cremallera doble superior cubierta. Con enganche interior de seguridad. Con respiradero superior e inferior. Medidas: 42*21*27cm.                    <a href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-azul-marino.html" title="Bolso de transporte Montecarlo (Azul marino)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-fucsia.html" title="Bolso de transporte Montecarlo (Fucsia)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_montecarlo_rojo_42x21x27cm_pe30028.jpg"  alt="Bolso de transporte Montecarlo (Fucsia)" title="Bolso de transporte Montecarlo (Fucsia)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-fucsia.html" title="Bolso de transporte Montecarlo (Fucsia)"><b>Bolso de transporte Montecarlo (Fucsia)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															32,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-fucsia.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4837/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Precioso bolso con diseño muy moderno para el transporte de perros y gatos. Realizado en micro-nylon muy resistente y elegante. En color fucsia, crudo y con base gris marengo. Con cremallera doble superior cubierta. Con enganche interior de seguridad. Con respiradero superior e inferior. Medidas: 42*21*27cm.                    <a href="http://www.misterguau.com/index.php/bolso-de-transporte-montecarlo-fucsia.html" title="Bolso de transporte Montecarlo (Fucsia)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-paris.html" title="Bolso de transporte Paris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_paris_37x16x26cm.jpg"  alt="Bolso de transporte Paris" title="Bolso de transporte Paris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-paris.html" title="Bolso de transporte Paris"><b>Bolso de transporte Paris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															42,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-paris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5429/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolso para el transporte de pequeñas mascotas como perros pequeños y gatos. Con cierre superior y lateral con respiradero. Con un gran bolsillo dorado lateral donde depositar documentación, bolsitas WC, correa, etc. Realizado en loneta con asa decorada en efecto charol. Incluye asas para colgarla del brazo. Hasta 3-4Kg. Medidas: 37x16x26cm.                    <a href="http://www.misterguau.com/index.php/bolso-paris.html" title="Bolso de transporte Paris">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-kenya-marino.html" title="Bolso Kenya Marino">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolso_kenya_marino_36x20x28cm.jpg"  alt="Bolso Kenya Marino" title="Bolso Kenya Marino" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-kenya-marino.html" title="Bolso Kenya Marino"><b>Bolso Kenya Marino</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															38,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-kenya-marino.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5428/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolso para el transporte de pequeñas mascotas como perros pequeños y gatos. Con cierre superior y lateral con respiradero. Con dos grandes bolsillo frontales donde depositar documentación, bolsitas WC, correa, etc. Realizado en loneta con asa de nylon reforzada. Hasta 4Kg. Medidas: 36x20x28cm                    <a href="http://www.misterguau.com/index.php/bolso-kenya-marino.html" title="Bolso Kenya Marino">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-milu-nature-beige.html" title="Bolso Milu Nature (Beige)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_bolso_nature_beige.jpg"  alt="Bolso Milu Nature (Beige)" title="Bolso Milu Nature (Beige)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-milu-nature-beige.html" title="Bolso Milu Nature (Beige)"><b>Bolso Milu Nature (Beige)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															53,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-milu-nature-beige.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5161/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolso de gran calidad con diseño exclusivo ideal para aislar transportar a nuestro perro o gato. Con detalle de Milu bordado. Tejidos de primera calidad y costuras reforzadas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Con enganche de sujeción para el collar de nuestro perro y apertura frontal para que puedan sacar la cabeza. Bonito diseño bicolor. Medidas: 52*32cm                    <a href="http://www.misterguau.com/index.php/bolso-milu-nature-beige.html" title="Bolso Milu Nature (Beige)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-milu-nature-negro.html" title="Bolso Milu Nature (Negro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_bolso_nature_negro.jpg"  alt="Bolso Milu Nature (Negro)" title="Bolso Milu Nature (Negro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-milu-nature-negro.html" title="Bolso Milu Nature (Negro)"><b>Bolso Milu Nature (Negro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															53,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-milu-nature-negro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5163/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolso de gran calidad con diseño exclusivo ideal para aislar transportar a nuestro perro o gato. Con detalle de Milu bordado. Tejidos de primera calidad y costuras reforzadas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Con enganche de sujeción para el collar de nuestro perro y apertura frontal para que puedan sacar la cabeza. Bonito diseño bicolor. Medidas: 52*32cm                    <a href="http://www.misterguau.com/index.php/bolso-milu-nature-negro.html" title="Bolso Milu Nature (Negro)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolso-milu-nature-rosa.html" title="Bolso Milu Nature (Rosa)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_bolso_nature_rosa.jpg"  alt="Bolso Milu Nature (Rosa)" title="Bolso Milu Nature (Rosa)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolso-milu-nature-rosa.html" title="Bolso Milu Nature (Rosa)"><b>Bolso Milu Nature (Rosa)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															53,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolso-milu-nature-rosa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5162/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolso de gran calidad con diseño exclusivo ideal para aislar transportar a nuestro perro o gato. Con detalle de Milu bordado. Tejidos de primera calidad y costuras reforzadas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Con enganche de sujeción para el collar de nuestro perro y apertura frontal para que puedan sacar la cabeza. Bonito diseño bicolor. Medidas: 52*32cm                    <a href="http://www.misterguau.com/index.php/bolso-milu-nature-rosa.html" title="Bolso Milu Nature (Rosa)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bozal-de-nylon-ajustable-acolchado.html" title="Bozal de nylon ajustable acolchado">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bozal_ajustable_acolchado_transpirable.jpg"  alt="Bozal de nylon ajustable acolchado" title="Bozal de nylon ajustable acolchado" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bozal-de-nylon-ajustable-acolchado.html" title="Bozal de nylon ajustable acolchado"><b>Bozal de nylon ajustable acolchado</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bozal-de-nylon-ajustable-acolchado.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3675/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bozal realizado en nylon, ajustable y acolchado para una mayor comodidad de nuestro perro. Para perros con hocico (no chatos). En color negro. Disponible en 5 medidas (ver + info)                    <a href="http://www.misterguau.com/index.php/bozal-de-nylon-ajustable-acolchado.html" title="Bozal de nylon ajustable acolchado">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/correa-anti-tirones-halti-marron.html" title="Bozal Halti anti-tirones (Negro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/a/halti_correa_marron_2.jpg"  alt="Bozal Halti anti-tirones (Negro)" title="Bozal Halti anti-tirones (Negro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/correa-anti-tirones-halti-marron.html" title="Bozal Halti anti-tirones (Negro)"><b>Bozal Halti anti-tirones (Negro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/correa-anti-tirones-halti-marron.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1678/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La mejor solución para el adiestramiento positivo. El perro dejará de dar tirones y sin utilizar la violencia. Halti es la manera perfecta y sin violencia de entrenar al perro para que no tire de la correa. En color negro. Está inspirado en la cabezada de caballo y su objetivo es que el animal no pueda tirar al andar con su dueño. Simplemente se coloca por encima del hocico del perro. 5 tallas disponibles. En color negro.<br />
                    <a href="http://www.misterguau.com/index.php/correa-anti-tirones-halti-marron.html" title="Bozal Halti anti-tirones (Negro)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/braguita-barca-fcb-futbol-club-barcelona.html" title="Braguita Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_1_64.jpg"  alt="Braguita Barça (FCB - Futbol Club Barcelona)" title="Braguita Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/braguita-barca-fcb-futbol-club-barcelona.html" title="Braguita Barça (FCB - Futbol Club Barcelona)"><b>Braguita Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/braguita-barca-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2626/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Braguitas con goma elástica con diseño blaugrana y el escudo del FCB cosido en la parte posterior. Para perritas en celo o perros en general que puedan sufrir pérdidas de orina. Las medidas hacen referencia al contorno de la braguita y elasticidad de la goma para adaptarse al cuerpo del perrito. Disponible en 3 medidas: T0 (24-31cm) - T1 (28-36cm) - T2 (34-42cm)                    <a href="http://www.misterguau.com/index.php/braguita-barca-fcb-futbol-club-barcelona.html" title="Braguita Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-deli-bacon-300gr.html" title="Brekkies Excel Deli Bacon (300gr)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/u/rubadub_deli_bacon_300gr.jpg"  alt="Brekkies Excel Deli Bacon (300gr)" title="Brekkies Excel Deli Bacon (300gr)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-deli-bacon-300gr.html" title="Brekkies Excel Deli Bacon (300gr)"><b>Brekkies Excel Deli Bacon (300gr)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-deli-bacon-300gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4900/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Brekkies Deli Bacon es un delicioso snack con forma y sabor a Bacon. Su contenido en vitaminas D y E, así como su bajo impacto calórico lo hacen a su vez un snack saludable apto para perros de cualquier tamaño. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/brekkies-excel-deli-bacon-300gr.html" title="Brekkies Excel Deli Bacon (300gr)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-deli-bacon-85gr.html" title="Brekkies Excel Deli Bacon (85gr)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_deli_bacon_bacon_85gr.jpg"  alt="Brekkies Excel Deli Bacon (85gr)" title="Brekkies Excel Deli Bacon (85gr)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-deli-bacon-85gr.html" title="Brekkies Excel Deli Bacon (85gr)"><b>Brekkies Excel Deli Bacon (85gr)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-deli-bacon-85gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3785/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Brekkies Deli Bacon es un delicioso snack con forma y sabor a Bacon. Su contenido en vitaminas D y E, así como su bajo impacto calórico lo hacen a su vez un snack saludable apto para perros de cualquier tamaño. Formato: 85gr                    <a href="http://www.misterguau.com/index.php/brekkies-excel-deli-bacon-85gr.html" title="Brekkies Excel Deli Bacon (85gr)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-deli-sauce-buey.html" title="Brekkies Excel Deli Sauce - Capricho de Buey">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_delisauce_beef.jpg"  alt="Brekkies Excel Deli Sauce - Capricho de Buey" title="Brekkies Excel Deli Sauce - Capricho de Buey" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-deli-sauce-buey.html" title="Brekkies Excel Deli Sauce - Capricho de Buey"><b>Brekkies Excel Deli Sauce - Capricho de Buey</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-deli-sauce-buey.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2907/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Brekkies Excel Deli Sauce son deliciosas salsas para verter encima de las croquetas de tu perro, que harán su comida diaria más sabrosa y apetitosa. Variedad buey elaborada a partir de sus ingredientes favoritos y todo ello con ¡sólo 5Kcal por ración!. Formato: 300ml                    <a href="http://www.misterguau.com/index.php/brekkies-excel-deli-sauce-buey.html" title="Brekkies Excel Deli Sauce - Capricho de Buey">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-junior-original-calcio-y-vitaminas.html" title="Brekkies Excel Dog Junior Original (Calcio y vitaminas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_7.jpg"  alt="Brekkies Excel Dog Junior Original (Calcio y vitaminas)" title="Brekkies Excel Dog Junior Original (Calcio y vitaminas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-junior-original-calcio-y-vitaminas.html" title="Brekkies Excel Dog Junior Original (Calcio y vitaminas)"><b>Brekkies Excel Dog Junior Original (Calcio y vitaminas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-junior-original-calcio-y-vitaminas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3118/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sabrosa receta elaborada con pollo y arroz y con todos los nutrientes esenciales para que tu cachorro esté en excelente condición física. Sus croquetas aportan las proteínas y el calcio indispensables para el óptimo mantenimiento de la musculatura; los vegetales y el arroz proporcionan las fibras y carbohidratos necesarios para una buena digestión; y los cereales, vitaminas y minerales, los nutrientes que tu perro necesita para mantener los huesos fuertes y una dentadura sana. Formato: 3Kg, 20Kg,  Pack ECO 2x20Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-junior-original-calcio-y-vitaminas.html" title="Brekkies Excel Dog Junior Original (Calcio y vitaminas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-light.html" title="Brekkies Excel Dog Light">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_excel_dog_light.jpg"  alt="Brekkies Excel Dog Light" title="Brekkies Excel Dog Light" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-light.html" title="Brekkies Excel Dog Light"><b>Brekkies Excel Dog Light</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-light.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3123/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sabrosa receta elaborada con pollo y arroz y con todos los nutrientes esenciales para que tu perro adulto esté en excelente condición física. Sus croquetas aportan las proteínas indispensables para el óptimo mantenimiento de la musculatura con un 36% menos de materia grasa; el arroz proporciona los carbohidratos necesarios para una buena digestión; y los cereales, vitaminas y minerales, los nutrientes que tu perro necesita para mantener los huesos fuertes y una dentadura sana. Formato: 3Kg, 20Kg,  Pack ECO 2x20Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-light.html" title="Brekkies Excel Dog Light">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-mix-buey.html" title="Brekkies Excel Dog Mix Buey">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_excel_dog_mix.jpg"  alt="Brekkies Excel Dog Mix Buey" title="Brekkies Excel Dog Mix Buey" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-mix-buey.html" title="Brekkies Excel Dog Mix Buey"><b>Brekkies Excel Dog Mix Buey</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-mix-buey.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3121/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sabrosa receta elaborada con buey y verduras y con todos los nutrientes esenciales para que tu perro adulto esté en excelente condición física. Sus croquetas aportan las proteínas indispensables para el óptimo mantenimiento de la musculatura; las verduras y el arroz proporcionan las fibras y carbohidratos necesarios para una buena digestión; y los cereales, vitaminas y minerales, los nutrientes que tu perro necesita para mantener los huesos fuertes y una dentadura sana. Formatos: 4Kg, 20Kg,  Pack ECO 2x20Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-mix-buey.html" title="Brekkies Excel Dog Mix Buey">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-mix-cordero-y-arroz.html" title="Brekkies Excel Dog Mix Cordero y Arroz">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_excel_dog_corderoarroz_2.jpg"  alt="Brekkies Excel Dog Mix Cordero y Arroz" title="Brekkies Excel Dog Mix Cordero y Arroz" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-mix-cordero-y-arroz.html" title="Brekkies Excel Dog Mix Cordero y Arroz"><b>Brekkies Excel Dog Mix Cordero y Arroz</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-mix-cordero-y-arroz.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3122/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sabrosa receta elaborada con cordero y arroz y con todos los nutrientes esenciales para que tu perro adulto esté en excelente condición física. Sus croquetas aportan las proteínas indispensables para el óptimo mantenimiento de la musculatura; el arroz proporciona los carbohidratos necesarios para una buena digestión; y los cereales, vitaminas y minerales, los nutrientes que tu perro necesita para mantener los huesos fuertes y una dentadura sana. Formatos: 20Kg,  Pack ECO 2x20Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-mix-cordero-y-arroz.html" title="Brekkies Excel Dog Mix Cordero y Arroz">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-complet.html" title="Brekkies Excel Dog Pollo y Cereales">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_excel_dog_complet_20kg_2.jpg"  alt="Brekkies Excel Dog Pollo y Cereales" title="Brekkies Excel Dog Pollo y Cereales" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-complet.html" title="Brekkies Excel Dog Pollo y Cereales"><b>Brekkies Excel Dog Pollo y Cereales</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-complet.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3120/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sabrosa receta elaborada con pollo y arroz y con todos los nutrientes esenciales para que tu perro adulto esté en excelente condición física. Sus croquetas aportan las proteínas indispensables para el óptimo mantenimiento de la musculatura; los vegetales y el arroz proporcionan las fibras y carbohidratos necesarios para una buena digestión; y los cereales, vitaminas y minerales, los nutrientes que tu perro necesita para mantener los huesos fuertes y una dentadura sana. Formatos: 4Kg, 20Kg,  Pack ECO 2x20Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-complet.html" title="Brekkies Excel Dog Pollo y Cereales">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-dog-salmon-y-verduras.html" title="Brekkies Excel Dog Salmón y verduras">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_excel_dog_pescado_20kg.jpg"  alt="Brekkies Excel Dog Salmón y verduras" title="Brekkies Excel Dog Salmón y verduras" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-dog-salmon-y-verduras.html" title="Brekkies Excel Dog Salmón y verduras"><b>Brekkies Excel Dog Salmón y verduras</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-dog-salmon-y-verduras.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4553/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Brekkies Pescado es un producto completo y equilibrado para perros adultos, que ayuda a mantener una piel sana y un pelo brillante gracias a los ácidos grasos esenciales Omega 3 y Omega 6. Brekkies ayuda a mejorar el bienestar de tu mascota y a que pueda gozar de una vida sana y feliz. Formato: 20Kg,  Pack ECO 2x20Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-dog-salmon-y-verduras.html" title="Brekkies Excel Dog Salmón y verduras">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-dog-senior.html" title="Brekkies Excel Dog Senior">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_excel_dog_senior_20kg.jpg"  alt="Brekkies Excel Dog Senior" title="Brekkies Excel Dog Senior" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-dog-senior.html" title="Brekkies Excel Dog Senior"><b>Brekkies Excel Dog Senior</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-dog-senior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3609/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Brekkies Senior es un producto completo y equilibrado para perros adultos de más de 7 años, que ayuda a mantener el tono muscular y el peso gracias un óptimo nivel de proteína y bajo contenido en grasa. Brekkies ayuda a mejorar el bienestar de tu mascota y a que pueda gozar de una vida sana y feliz. Formato: 20Kg,  Pack ECO 2x20Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-dog-senior.html" title="Brekkies Excel Dog Senior">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-tender-delicious-buey.html" title="Brekkies Excel Dog Tender&amp;Delicious Buey">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_8.jpg"  alt="Brekkies Excel Dog Tender&amp;Delicious Buey" title="Brekkies Excel Dog Tender&amp;Delicious Buey" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-tender-delicious-buey.html" title="Brekkies Excel Dog Tender&amp;Delicious Buey"><b>Brekkies Excel Dog Tender&amp;Delicious Buey</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-tender-delicious-buey.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3127/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Selección de carne fresca de Buey, Pavo y Pollo, cereales y vegetales. Brekkies excel Tender & Delicious Buey es un alimento 100% completo y equilibrado para perros. Su fórmula está desarrollada con una óptima combinación de cinco nutrientes que ayudarán a tu perro a mantener su sistema inmunitario, mejorando sus defensas. Formato: 3Kg, 15Kg, Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-tender-delicious-buey.html" title="Brekkies Excel Dog Tender&amp;Delicious Buey">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-dog-tender-delicious-senior.html" title="Brekkies Excel Dog Tender&amp;Delicious Senior">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_10_9.jpg"  alt="Brekkies Excel Dog Tender&amp;Delicious Senior" title="Brekkies Excel Dog Tender&amp;Delicious Senior" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-dog-tender-delicious-senior.html" title="Brekkies Excel Dog Tender&amp;Delicious Senior"><b>Brekkies Excel Dog Tender&amp;Delicious Senior</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-dog-tender-delicious-senior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4248/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento ideal para perros adultos a partir de 7 años compuesto con partículas tiernas, para que el perro pueda disfrutar de una agradable comida al mismo tiempo que se alimenta de una dieta formulada para adecuarse a los cambios que su organismo sufre. Elaborada con pollo, pavo, ternera y todos los nutrientes esenciales para que nuestro perro senior esté en óptima condición física al mismo tiempo que disfruta de su comida.  Formato: 3Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-dog-tender-delicious-senior.html" title="Brekkies Excel Dog Tender&amp;Delicious Senior">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-total-dent.html" title="Brekkies Total Dent (Medium)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_dog_totaldent_4.jpg"  alt="Brekkies Total Dent (Medium)" title="Brekkies Total Dent (Medium)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-total-dent.html" title="Brekkies Total Dent (Medium)"><b>Brekkies Total Dent (Medium)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-total-dent.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1243/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Brekkies Total Dent Medium es un stick flexible para la higiene total de la boca de los perros medium (10-25 Kg). La acción combinada del efecto mecánico y el exclusivo ingrediente activo Germcontrol ayuda a controlar los gérmenes que causan sarro, deterioro de las encías y mal aliento. Formato: 180gr                    <a href="http://www.misterguau.com/index.php/brekkies-total-dent.html" title="Brekkies Total Dent (Medium)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-mini-totaldent-110gr.html" title="Brekkies Total Dent (Mini)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_totaldent_mini_110gr_1.jpg"  alt="Brekkies Total Dent (Mini)" title="Brekkies Total Dent (Mini)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-mini-totaldent-110gr.html" title="Brekkies Total Dent (Mini)"><b>Brekkies Total Dent (Mini)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-mini-totaldent-110gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3786/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Brekkies excel Mini Total Dent es un stick flexible para la higiene total de la boca de tu perro. Especialmente desarrollado para perros pequeños y adaptando el tamaño del stick a su tamaño. Gracias a la acción combinada del efecto mecánico y del ingrediente activo reduce la formación de las bacterias. De este modo ayuda a: reducir la formación de sarro, mejorar la salud de las encías, prevenir el mal aliento. Formato: 110gr                    <a href="http://www.misterguau.com/index.php/brekkies-mini-totaldent-110gr.html" title="Brekkies Total Dent (Mini)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cable-de-amarre-forrado-5-metros.html" title="Cable de amarre forrado (5 metros)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/cable_de_amarre_forrado_5mmx2_5m305x-sh-1980.jpg"  alt="Cable de amarre forrado (5 metros)" title="Cable de amarre forrado (5 metros)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cable-de-amarre-forrado-5-metros.html" title="Cable de amarre forrado (5 metros)"><b>Cable de amarre forrado (5 metros)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cable-de-amarre-forrado-5-metros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2690/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cable de amarre ultra-resistente forrado con goma y con enganches de seguridad cromados. Ideal para dar a nuestro perro una distancia de movimiento de hasta 5 metros con total seguridad anti-mordeduras ni roturas. Ideal para jardines, cámpings, etc. Medidas: 2.5 metros x 5mm grosor                    <a href="http://www.misterguau.com/index.php/cable-de-amarre-forrado-5-metros.html" title="Cable de amarre forrado (5 metros)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/calmex-para-perros-suplemento-tranquilizante.html" title="Calmex para perros (Suplemento tranquilizante)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/calmex_12cp_1016219.jpg"  alt="Calmex para perros (Suplemento tranquilizante)" title="Calmex para perros (Suplemento tranquilizante)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/calmex-para-perros-suplemento-tranquilizante.html" title="Calmex para perros (Suplemento tranquilizante)"><b>Calmex para perros (Suplemento tranquilizante)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/calmex-para-perros-suplemento-tranquilizante.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4861/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Contiene una mezcla de aminoácidos, Piper Methysticum y vitaminas del complejo B que permite la relajación en perros que están experimentando episodios de ansiedad o nerviosismo debido a situaciones de estrés. Su rápida acción permite el óptimo manejo de animales que sufren fobia a los ruidos (petardos, obras, etc), ansiedad por separación o fobias situacionales en viajes, visitas al veterinario, estancias en residencias caninas, etc. Formato: 12 cápsulas                    <a href="http://www.misterguau.com/index.php/calmex-para-perros-suplemento-tranquilizante.html" title="Calmex para perros (Suplemento tranquilizante)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/camiseta-barca-fcb.html" title="Camiseta Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/camiseta_fcb.jpg"  alt="Camiseta Barça (FCB - Futbol Club Barcelona)" title="Camiseta Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/camiseta-barca-fcb.html" title="Camiseta Barça (FCB - Futbol Club Barcelona)"><b>Camiseta Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/camiseta-barca-fcb.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2021/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Camiseta oficial del Futbol Club Barcelona para nuestro perro. Realizada en algodón. Sin mangas. Con el escudo del FCB en la parte superior. Por favor indique la raza de su perro en Observaciones del pedido. 4 medidas: S (25cm) - M (30cm) - L (35cm) - XL (40cm)                    <a href="http://www.misterguau.com/index.php/camiseta-barca-fcb.html" title="Camiseta Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/camiseta-barca-2-equipacion-fcb-futbol-club-barcelona.html" title="Camiseta Barça 2ª equipación (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_14_3.jpg"  alt="Camiseta Barça 2ª equipación (FCB - Futbol Club Barcelona)" title="Camiseta Barça 2ª equipación (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/camiseta-barca-2-equipacion-fcb-futbol-club-barcelona.html" title="Camiseta Barça 2ª equipación (FCB - Futbol Club Barcelona)"><b>Camiseta Barça 2ª equipación (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/camiseta-barca-2-equipacion-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3600/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Camiseta oficial del Futbol Club Barcelona para nuestro perro. Modelo de la segunda equipación temporada 2013-2014. Realizada en algodón. Sin mangas. Con el escudo del FCB en la parte superior. Medidas: 25cm - 30cm - 35cm                    <a href="http://www.misterguau.com/index.php/camiseta-barca-2-equipacion-fcb-futbol-club-barcelona.html" title="Camiseta Barça 2ª equipación (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/camiseta-espanyol-rcd-espanyol.html" title="Camiseta Espanyol (RCD Espanyol)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/camiseta_rcd_espanyol_tl_1022802.jpg"  alt="Camiseta Espanyol (RCD Espanyol)" title="Camiseta Espanyol (RCD Espanyol)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/camiseta-espanyol-rcd-espanyol.html" title="Camiseta Espanyol (RCD Espanyol)"><b>Camiseta Espanyol (RCD Espanyol)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/camiseta-espanyol-rcd-espanyol.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5377/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Camiseta oficial del Real Club Deportivo Espanyol para nuestro perro. Realizada en algodón. Sin mangas. Con el escudo del Espanyol bordado en la parte visible superior. Con ribete azul. Por favor indique la raza de su perro en Observaciones del pedido. Medidas:  S (25cm) - M (30cm) - L (35cm) - XL (40cm)                    <a href="http://www.misterguau.com/index.php/camiseta-espanyol-rcd-espanyol.html" title="Camiseta Espanyol (RCD Espanyol)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jamon-iberico-hobbit-alf-canailla.html" title="Canailla de Jamón ibérico Hobbit Alf">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/o/hobbit_alf_canailla_de_jamon_iberico_ref023.jpg"  alt="Canailla de Jamón ibérico Hobbit Alf" title="Canailla de Jamón ibérico Hobbit Alf" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jamon-iberico-hobbit-alf-canailla.html" title="Canailla de Jamón ibérico Hobbit Alf"><b>Canailla de Jamón ibérico Hobbit Alf</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jamon-iberico-hobbit-alf-canailla.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5081/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Canailla totalmente natural de jamón ibérico para el deleite y desgaste de nuestro perros de raza pequeña o cachorros. Cada paquete envasado al vacío contiene 3 canaillas.                    <a href="http://www.misterguau.com/index.php/jamon-iberico-hobbit-alf-canailla.html" title="Canailla de Jamón ibérico Hobbit Alf">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item last">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/canicross-footing-con-tu-perro.html" title="Canicross (Footing con tu perro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/canicross_504916.jpg"  alt="Canicross (Footing con tu perro)" title="Canicross (Footing con tu perro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/canicross-footing-con-tu-perro.html" title="Canicross (Footing con tu perro)"><b>Canicross (Footing con tu perro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															45,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/canicross-footing-con-tu-perro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5491/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Accesorio para poder realizar deporte con tu perro (footing, jogging, etc). Contiene una correa ajustable y cable elástico que se adapta a nuestra cintura para liberar nuestras manos mientras realizar ejercicio. Longitud: 140 cm                    <a href="http://www.misterguau.com/index.php/canicross-footing-con-tu-perro.html" title="Canicross (Footing con tu perro)">Saber más</a><br><br>
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
                            Artículos 1 a 200 de 1308 totales                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/perros.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/perros.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
        <div class="pages">
        <strong>Página:</strong>
        <ol>
        
        
        
                                    <li class="current">1</li>
                                                <li><a href="http://www.misterguau.com/index.php/perros.html?p=2">2</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/perros.html?p=3">3</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/perros.html?p=4">4</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/perros.html?p=5">5</a></li>
                    

        
        
                    <li>
                <a class="next" href="http://www.misterguau.com/index.php/perros.html?p=2" title="Siguiente">
                                            <img src="http://www.misterguau.com/skin/frontend/base/default/images/i_pager-next.gif" alt="Siguiente" class="v-middle" />
                                    </a>
            </li>
                </ol>

    </div>
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/perros.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/perros.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/perros.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/perros.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
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

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=409">
				<img src="http://69.160.51.167/media/catalog/attribute/acana_logo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=286">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_advance.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=285">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_advance_vetdiet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=301">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_affinity.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=358">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_artero.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=312">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_biozoo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=300">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_bayer.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=329">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_brekkies.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=361">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_busy_buddy.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=378">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_cani_amici.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=375">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_cesar.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=415">
				<img src="http://69.160.51.167/media/catalog/attribute/chomper_logo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=397">
				<img src="http://69.160.51.167/media/catalog/attribute/logo_dog_chow.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=388">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_esteve.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=282">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_eukanuba.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=281">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_eukanuba_vetdiet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=353">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_barcelona.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=381">
				<img src="http://69.160.51.167/media/catalog/attribute/Ferribella.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=316">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo_1.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=354">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_flexi.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=280">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_friskies.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=394">
				<img src="http://69.160.51.167/media/catalog/attribute/frolic_marca.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=362">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_gimborn.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=296">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_gimpet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=295">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_greenies.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=278">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_hills_1.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=294">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_hills_vetdiet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=277">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_hobbitalf.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=276">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_iams.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=311">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=292">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_Kong.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=369">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_libra.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=291">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_merial.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=385">
				<img src="http://69.160.51.167/media/catalog/attribute/Milu.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=314">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_nayeco.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=290">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_novartis.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=377">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_nutro.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=404">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_nylabone.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=408">
				<img src="http://69.160.51.167/media/catalog/attribute/orijen_logo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=274">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_pedigree.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=414">
				<img src="http://69.160.51.167/media/catalog/attribute/penn-plax_logo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=411">
				<img src="http://69.160.51.167/media/catalog/attribute/pet_munchies_log.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=330">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_petsafe.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=390">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_petscribe.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=384">
				<img src="http://69.160.51.167/media/catalog/attribute/Proline_Petfood.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=288">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_purina.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=412">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_Espanyol.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=273">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_royal.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=272">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_royal_vetdiet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=310">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_sandimas.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=407">
				<img src="http://69.160.51.167/media/catalog/attribute/Sanytol_marca.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=392">
				<img src="http://69.160.51.167/media/catalog/attribute/Spayk_marca.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=389">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_stangest.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=410">
				<img src="http://69.160.51.167/media/catalog/attribute/summum_logo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=400">
				<img src="http://69.160.51.167/media/catalog/attribute/supercan_marca.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=307">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_the_company.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=399">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_tobias.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=366">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_topnature_all.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=360">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_topnature_dog.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=303">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_varios.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=302">
				<img src="http://69.160.51.167/media/catalog/attribute/virbac.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=403">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_vitacoat.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=268">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_vitakraft.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/perros.html?manufacturer=304">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_yagu.jpg" />
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
<?php
session_start();

if(isset ($_SESSION['nombre'])){
	$logejat=1;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>AVES</title>
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
<link rel="canonical" href="http://www.misterguau.com/index.php/aves.html" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" catalog-category-view categorypath-aves-html category-aves">
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
                    <li class="category35">
                            <strong>AVES</strong>
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
                                                <li><a href="http://www.misterguau.com/index.php/aves.html" class="open" class="potential" >AVES</a>
                                <ul>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/alimentacion.html" class="potential" >/ Alimentación</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/barritas-y-snacks.html" class="potential" >/ Barritas y snacks</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/vitaminas-y-minerales.html" >/ Vitaminas-Salud</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/comederos-y-bebederos.html" >/ Comederos</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/juguetes-y-ocio.html" >/ Juguetes y ocio</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/arenas-e-higiene.html" >/ Arenas e higiene</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/jaulas.html" class="potential" >/ Jaulas aves</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/accesorios-jaula.html" >/ Accesorios jaula</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/aves/nidos.html" >/ Nidos</a>
                                            </li>
                                    </ul>
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
												<div class="corner-right-top">                                <h2>AVES</h2>
            </div>
											</div>
										</div>
									</div>
								</div>
							</div>        </div>
                                <div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 8px;">
<div style="margin: 8px; text-align: center;"><a title="10% Dto extra!" href="http://www.misterguau.com/Promociones" target="_blank"><img src="http://www.misterguau.com/media//10_Dto.png" alt="10% Dto extra!" /></a></div>
<div style="background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 8px;">
<table style="width: 680px; height: 40px; background-color: #ffffff;" border="0" align="center">
<tbody>
<tr>
<td style="padding-left: 50px; padding-right: 50px;">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc;"><strong>TODO LO QUE NECESITAS PARA TU AVES &nbsp;- <span style="color: #888888;">&nbsp;Elige una categor&iacute;a</span></strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc;"><strong><span style="font-size: x-small;"><strong><br /></strong></span></strong></span></p>
<p><span style="font-size: x-small;"><strong><a title="OFERTAS AVES" href="http://www.misterguau.com/index.php/ofertas/ofertas-aves.html" target="_self"><img src="http://www.misterguau.com/media//Aves.jpg" alt="OFERTAS AVES" /></a>&nbsp; &nbsp; &nbsp; &nbsp;</strong></span><span style="font-size: xx-small;"><span style="border-style: initial; border-color: initial;"><strong><a title="Comida para aves" href="http://www.misterguau.com/index.php/aves/alimentacion.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Comida_aves.jpg" alt="Alimentacion para aves" /></a></strong></span></span><span style="font-weight: bold; font-size: x-small;">&nbsp;&nbsp;<a title="Barritas y snacks aves" href="http://www.misterguau.com/index.php/aves/barritas-y-snacks.html" target="_self"><img src="http://www.misterguau.com/media//Barritas_y_snacks.jpg" alt="Barritas y snacks para aves" /></a>&nbsp; &nbsp; &nbsp;<a title="Vitaminas y calcio aves" href="http://www.misterguau.com/index.php/aves/vitaminas-y-minerales.html" target="_self"><img src="http://www.misterguau.com/media//Vitaminas_y_calcio_para_aves.jpg" alt="Vitaminas para aves" /></a></span></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><span style="font-size: x-small;"><strong><strong><span style="color: #808080;"><span style="color: #33cccc;">&nbsp; &nbsp;<a title="OFERTAS AVES" href="http://www.misterguau.com/index.php/ofertas/ofertas-aves.html" target="_self"><span style="color: #33cccc;">Ofertas para aves</span></a></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Alimentacion aves" href="http://www.misterguau.com/index.php/aves/alimentacion.html" target="_self">Alimentaci&oacute;n aves</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Barritas y snacks aves" href="http://www.misterguau.com/index.php/aves/barritas-y-snacks.html" target="_self">Barritas y snacks</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Vitaminas y calcio aves" href="http://www.misterguau.com/index.php/aves/vitaminas-y-minerales.html" target="_self">Vitaminas y calcio</a>&nbsp;</span></strong></strong></span></span></span></span></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><a title="Juguetes y ocio para aves" href="http://www.misterguau.com/index.php/aves/juguetes-y-ocio.html" target="_self"></a><a title="Comederos y bebederos aves" href="http://www.misterguau.com/index.php/aves/comederos-y-bebederos.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Comederos_aves.jpg" alt="Comederos para aves" /></a>&nbsp; &nbsp; &nbsp;<a title="Juguetes para aves y loros" href="http://www.misterguau.com/index.php/aves/juguetes-y-ocio.html" target="_self"><img src="http://www.misterguau.com/media//Juguetes_para_aves.jpg" alt="Juguetes para aves" /></a>&nbsp; &nbsp; &nbsp;<a title="Arenas para aves" href="http://www.misterguau.com/index.php/aves/arenas-e-higiene.html" target="_self"><img src="http://www.misterguau.com/media//Arenas_y_bases.jpg" alt="Arenas para aves" /></a>&nbsp; &nbsp; &nbsp;<a title="Jaulas para aves" href="http://www.misterguau.com/index.php/aves/jaulas.html" target="_self"><img src="http://www.misterguau.com/media//Jaulas_aves.jpg" alt="Jaulas para aves" /></a>&nbsp; &nbsp;&nbsp;</span></span></strong></span></strong></span></span></span></span></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><span style="font-size: x-small;"><strong><strong><span style="font-size: x-small;"><span style="color: #808080;">&nbsp;<a style="font-weight: bold; font-size: x-small;" title="Comederos y bebederos aves" href="http://www.misterguau.com/index.php/aves/comederos-y-bebederos.html" target="_self">Comederos / Bebederos</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Juguetes para aves" href="http://www.misterguau.com/index.php/aves/juguetes-y-ocio.html" target="_self">Juguetes aves</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Bases para aves" href="http://www.misterguau.com/index.php/aves/arenas-e-higiene.html" target="_self">Arenas y bases aves</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Jaulas para aves" href="http://www.misterguau.com/index.php/aves/jaulas.html" target="_self">Jaulas para aves</a>&nbsp;&nbsp;</span></span></strong></strong></span></strong></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<span style="font-size: x-small;"><span style="color: #808080;"><strong><a title="Nidos para aves" href="http://www.misterguau.com/index.php/aves/nidos.html" target="_self"></a><a style="font-size: x-small;" title="Accesorios jaula para aves" href="http://www.misterguau.com/index.php/aves/accesorios-jaula.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Accesorios_jaula.jpg" alt="Accesorios jaulas aves" /></a>&nbsp; &nbsp; &nbsp;<a title="Nidos para aves" href="http://www.misterguau.com/index.php/aves/nidos.html" target="_self"><img src="http://www.misterguau.com/media//Nidos.jpg" alt="Nidos para aves" /></a>&nbsp; &nbsp; &nbsp;<br /></strong> </span></span>
<p><span style="color: #33cccc; font-size: x-small;"><strong><strong><span style="font-size: x-small;"><strong><span style="color: #33cccc; font-weight: bold;"><span style="font-size: x-small;"><span style="color: #808080;">&nbsp; &nbsp;<a style="font-weight: bold; font-size: x-small;" title="ba&ntilde;eras y perchas para aves" href="http://www.misterguau.com/index.php/aves/accesorios-jaula.html" target="_self">Accesorios jaulas</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Nidos para aves" href="http://www.misterguau.com/index.php/aves/nidos.html" target="_self">Nidos para aves</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span></span></strong></span></strong></strong></span></p>
<p><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></p>
<p><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>        <div class="category-products">
    <div class="toolbar">
    <div class="pager">
        <p class="amount">
                            <strong>190 Artículo(s)</strong>
                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/aves.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/aves.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/aves.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/aves.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/aves.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/aves.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
                    </div>
    </div>
    </div>

                <div class="listing-border">
        <ol class="products-list" id="products-list">
	                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acaricida-regenarador-tabernil-pomada.html" title="Acaricida regenerador Tabernil pomada">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/a/tabernil_pomada.jpg"  alt="Acaricida regenerador Tabernil pomada" title="Acaricida regenerador Tabernil pomada" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acaricida-regenarador-tabernil-pomada.html" title="Acaricida regenerador Tabernil pomada"><b>Acaricida regenerador Tabernil pomada</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acaricida-regenarador-tabernil-pomada.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3167/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    En Tabernil Pomada se conjugan una serie de acciones terapéuticas, derivadas de cada uno de los componentes de la fórmula, encaminados no tan sólo al extermino de los ácaros, sino a regenerar lo más pronto posible las lesiones epiteliales consecuentes. Indicaciones: Acariosis en general, costras, escamosidades, callosidades y picaduras de insectos. Formato: 9.25gr.                    <a href="http://www.misterguau.com/index.php/acaricida-regenarador-tabernil-pomada.html" title="Acaricida regenerador Tabernil pomada">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-completo-con-vitaminas-supercanto-budgerigar.html" title="Alimento completo con vitaminas Supercanto BudgeRigar">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/u/budgerigar_150gr_000749.jpg"  alt="Alimento completo con vitaminas Supercanto BudgeRigar" title="Alimento completo con vitaminas Supercanto BudgeRigar" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-completo-con-vitaminas-supercanto-budgerigar.html" title="Alimento completo con vitaminas Supercanto BudgeRigar"><b>Alimento completo con vitaminas Supercanto BudgeRigar</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-completo-con-vitaminas-supercanto-budgerigar.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4133/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para periquitos con vitaminas. Vigoriza y refuerza el organismo en general del pájaro, proporcionándoles una resistencia natural a contraer las enfermedades más comunes, tales como procesos diarreicos. Facilita los cambios de plumaje difíciles, proporcionando un plumaje terso, brillante y que resalta por su colorido. Formato: 150gr, 300gr                    <a href="http://www.misterguau.com/index.php/alimento-completo-con-vitaminas-supercanto-budgerigar.html" title="Alimento completo con vitaminas Supercanto BudgeRigar">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-papagayos-y-cotorras-gran-pasto.html" title="Alimento Papagayos y cotorras Gran pasto">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/l/alimento_papagayo_pa0005.jpg"  alt="Alimento Papagayos y cotorras Gran pasto" title="Alimento Papagayos y cotorras Gran pasto" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-papagayos-y-cotorras-gran-pasto.html" title="Alimento Papagayos y cotorras Gran pasto"><b>Alimento Papagayos y cotorras Gran pasto</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-papagayos-y-cotorras-gran-pasto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2505/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para todo tipo de papagayos y cotorras. A base de granos de alta calidad, frutas y extrusionado para aportar la alimentación para ellos. Ingredientes: Pipas, almendras, castaña, dátiles, pasas, maix, avellanas, nueces, plátano y anacardo. Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/alimento-papagayos-y-cotorras-gran-pasto.html" title="Alimento Papagayos y cotorras Gran pasto">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-para-aves-insectivoras-gran-pasto.html" title="Alimento para aves insectívoras Gran Pasto">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/r/gran_pasto_insectivoros_pasta_c-fruta_codpa20012.jpg"  alt="Alimento para aves insectívoras Gran Pasto" title="Alimento para aves insectívoras Gran Pasto" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-para-aves-insectivoras-gran-pasto.html" title="Alimento para aves insectívoras Gran Pasto"><b>Alimento para aves insectívoras Gran Pasto</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-para-aves-insectivoras-gran-pasto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2443/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo en pasta e indicado para pájaros insectívoros, como el mainate o el jilguero. Con un mínimo de 24% de fruta. Formato: 1Kg.                    <a href="http://www.misterguau.com/index.php/alimento-para-aves-insectivoras-gran-pasto.html" title="Alimento para aves insectívoras Gran Pasto">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-sandimas-canto-para-canarios.html" title="Alimento SanDimas Canto para canarios">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/a/san_dimas_canto_estuche_175gr_32150.jpg"  alt="Alimento SanDimas Canto para canarios" title="Alimento SanDimas Canto para canarios" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-sandimas-canto-para-canarios.html" title="Alimento SanDimas Canto para canarios"><b>Alimento SanDimas Canto para canarios</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-sandimas-canto-para-canarios.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3934/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para pájaros cantores, como canarios. Mixtura equilibrada y vitaminada. Envasado al vacío. Formato: 175gr                    <a href="http://www.misterguau.com/index.php/alimento-sandimas-canto-para-canarios.html" title="Alimento SanDimas Canto para canarios">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/anticaida-de-plumas-tabernil-muda.html" title="Anticaída de plumas Tabernil muda">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/a/tabernil_muda.jpg"  alt="Anticaída de plumas Tabernil muda" title="Anticaída de plumas Tabernil muda" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/anticaida-de-plumas-tabernil-muda.html" title="Anticaída de plumas Tabernil muda"><b>Anticaída de plumas Tabernil muda</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/anticaida-de-plumas-tabernil-muda.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3166/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Complemento vitamínico para canarios y aves de adornos en general (periquitos, cotorras, jilgueros, etc.) que se administra en forma de gotas en el agua de bebida. Su uso esta indicado cuando se produce la caída de la pluma durante la época de muda fisiológica por causas patológicas. Formato: 20 ml.                    <a href="http://www.misterguau.com/index.php/anticaida-de-plumas-tabernil-muda.html" title="Anticaída de plumas Tabernil muda">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arena-para-jaula-zircus-sanibird.html" title="Arena para jaula Zircus Sanibird">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_zircus_sanibird_1.jpg"  alt="Arena para jaula Zircus Sanibird" title="Arena para jaula Zircus Sanibird" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arena-para-jaula-zircus-sanibird.html" title="Arena para jaula Zircus Sanibird"><b>Arena para jaula Zircus Sanibird</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arena-para-jaula-zircus-sanibird.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2092/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena mineral de granulado fino con anís para el fondo de las jaulas. Totalmente natural y sin polvo, evita los problemas que pueden ocasionar otras arenas absorbentes. Ideal para todo tipo de aves. Formato: 5l (2.5Kg aprox)                    <a href="http://www.misterguau.com/index.php/arena-para-jaula-zircus-sanibird.html" title="Arena para jaula Zircus Sanibird">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-corrector-mineral-limon-o-naranja-canarios-y-pericos.html" title="Axis Corrector mineral limón o naranja (Canarios y pericos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mineral_limon_canarios_y_pericos_9586.jpg"  alt="Axis Corrector mineral limón o naranja (Canarios y pericos)" title="Axis Corrector mineral limón o naranja (Canarios y pericos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-corrector-mineral-limon-o-naranja-canarios-y-pericos.html" title="Axis Corrector mineral limón o naranja (Canarios y pericos)"><b>Axis Corrector mineral limón o naranja (Canarios y pericos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-corrector-mineral-limon-o-naranja-canarios-y-pericos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2897/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Corrector mineral con forma y aroma de limón o de naranja, con trocitos de limón en la parte superior para resultar mas atractivo. Ideal para completar las necesidades minerales de nuestros pequeños canarios y periquitos. 2 modelos: limón o naranja                    <a href="http://www.misterguau.com/index.php/axis-corrector-mineral-limon-o-naranja-canarios-y-pericos.html" title="Axis Corrector mineral limón o naranja (Canarios y pericos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-corrector-mineral-tomate-cotorras-y-loros.html" title="Axis Corrector mineral tomate (Cotorras y loros)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/mineral_tomate_loros_y_cotorras_9589.jpg"  alt="Axis Corrector mineral tomate (Cotorras y loros)" title="Axis Corrector mineral tomate (Cotorras y loros)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-corrector-mineral-tomate-cotorras-y-loros.html" title="Axis Corrector mineral tomate (Cotorras y loros)"><b>Axis Corrector mineral tomate (Cotorras y loros)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-corrector-mineral-tomate-cotorras-y-loros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2898/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Corrector mineral con forma de tomate y trocitos de verduras en la parte superior para resultar mas atractivo. Ideal para completar las necesidades minerales de nuestras cotorras y loros. Con enganche para colocarlo fácilmente en la jaula. Formato: 1 unidad                    <a href="http://www.misterguau.com/index.php/axis-corrector-mineral-tomate-cotorras-y-loros.html" title="Axis Corrector mineral tomate (Cotorras y loros)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-panizo-en-espiga-para-aves.html" title="Axis Panizo en espiga para aves">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/panizo_en_espiga_axis_9726.jpg"  alt="Axis Panizo en espiga para aves" title="Axis Panizo en espiga para aves" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-panizo-en-espiga-para-aves.html" title="Axis Panizo en espiga para aves"><b>Axis Panizo en espiga para aves</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-panizo-en-espiga-para-aves.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2896/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Espigas de panizo natural de gran calidad que hacen las delicias de periquitos, pájaros exóticos (diamante mandarín, diamante de gould,...), etc. Contribuyen a su alimentación y los entretienen. Formato: 4 espigas                    <a href="http://www.misterguau.com/index.php/axis-panizo-en-espiga-para-aves.html" title="Axis Panizo en espiga para aves">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ba-era-exterior-para-aves-peque-as.html" title="Bañera exterior para aves pequeñas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_3_14.jpg"  alt="Bañera exterior para aves pequeñas" title="Bañera exterior para aves pequeñas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ba-era-exterior-para-aves-peque-as.html" title="Bañera exterior para aves pequeñas"><b>Bañera exterior para aves pequeñas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ba-era-exterior-para-aves-peque-as.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3745/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bañera exterior para aves pequeñas. Enganchable mediante alambre a las aperturas o puerta de entrada de la jaula, para que nuestras pequeñas aves puedan refrescarse cuando la temperatura es alta. Con una zona de baño y otra de reposo. Realizada en plástico rígido no tóxico.                    <a href="http://www.misterguau.com/index.php/ba-era-exterior-para-aves-peque-as.html" title="Bañera exterior para aves pequeñas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ba-era-interior-para-aves-peque-as-1694.html" title="Bañera interior para aves pequeñas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_6.jpg"  alt="Bañera interior para aves pequeñas" title="Bañera interior para aves pequeñas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ba-era-interior-para-aves-peque-as-1694.html" title="Bañera interior para aves pequeñas"><b>Bañera interior para aves pequeñas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ba-era-interior-para-aves-peque-as-1694.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1694/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bañera plástica para aves pequeñas, como canarios, periquitos, diamantes, isabelitas, etc. Ideal para colocarla dentro de la jaula. y que puedan refrescarse en verano. Medidas: 10cm                    <a href="http://www.misterguau.com/index.php/ba-era-interior-para-aves-peque-as-1694.html" title="Bañera interior para aves pequeñas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ba-era-interior-para-aves-peque-as.html" title="Bañera interior plástico para aves pequeñas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_3_15.jpg"  alt="Bañera interior plástico para aves pequeñas" title="Bañera interior plástico para aves pequeñas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ba-era-interior-para-aves-peque-as.html" title="Bañera interior plástico para aves pequeñas"><b>Bañera interior plástico para aves pequeñas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ba-era-interior-para-aves-peque-as.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3746/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bañera interior para aves pequeñas. De pequeño tamaño, puede ir dentro de la jaula sin ocupar mucho espacio para que nuestras pequeñas aves puedan refrescarse cuando la temperatura es alta. Color transparente.  Realizada en plástico rígido no tóxico.                    <a href="http://www.misterguau.com/index.php/ba-era-interior-para-aves-peque-as.html" title="Bañera interior plástico para aves pequeñas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-canario-frutas.html" title="Barritas Axis Canario frutas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_canario_fruta.jpg"  alt="Barritas Axis Canario frutas" title="Barritas Axis Canario frutas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-canario-frutas.html" title="Barritas Axis Canario frutas"><b>Barritas Axis Canario frutas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-canario-frutas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2877/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de frutas variadas y semillas que encantarán a nuestros canarios, además de complementar su dieta. Una recompensa extra-sabrosa. 100% ingredientes naturales. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-canario-frutas.html" title="Barritas Axis Canario frutas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-canario-miel.html" title="Barritas Axis Canario miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_canario_miel.jpg"  alt="Barritas Axis Canario miel" title="Barritas Axis Canario miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-canario-miel.html" title="Barritas Axis Canario miel"><b>Barritas Axis Canario miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-canario-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2874/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de cereales y miel que encantarán a nuestro canario y complementan su dieta. Una recompensa extra-sabrosa. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-canario-miel.html" title="Barritas Axis Canario miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-cotorra-fruta.html" title="Barritas Axis Cotorra fruta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_cotorra_fruta_2.jpg"  alt="Barritas Axis Cotorra fruta" title="Barritas Axis Cotorra fruta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-cotorra-fruta.html" title="Barritas Axis Cotorra fruta"><b>Barritas Axis Cotorra fruta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-cotorra-fruta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1337/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas con trocitos de fruta ideales para complementar la dieta de todo tipo de cotorritas a la vez que les ofrecemos una recompensa extra-sabrosa. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-cotorra-fruta.html" title="Barritas Axis Cotorra fruta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-cotorras-miel.html" title="Barritas Axis Cotorras miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_cotorra_miel.jpg"  alt="Barritas Axis Cotorras miel" title="Barritas Axis Cotorras miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-cotorras-miel.html" title="Barritas Axis Cotorras miel"><b>Barritas Axis Cotorras miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-cotorras-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2876/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de cereales y miel que encantarán a nuestras cotorras y carolinas, además de complementar su dieta. Una recompensa extra-sabrosa. 100% ingredientes naturales. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-cotorras-miel.html" title="Barritas Axis Cotorras miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-exoticos-miel.html" title="Barritas Axis Exóticos miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_exoticos_miel.jpg"  alt="Barritas Axis Exóticos miel" title="Barritas Axis Exóticos miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-exoticos-miel.html" title="Barritas Axis Exóticos miel"><b>Barritas Axis Exóticos miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-exoticos-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2878/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de miel y semillas especialmente formuladas para pequeñas aves exóticas, como diamantes mandarines, de gould, etc. Complementan su dieta. Una recompensa extra-sabrosa. 100% ingredientes naturales. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-exoticos-miel.html" title="Barritas Axis Exóticos miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-jilgueros-miel.html" title="Barritas Axis Jilgueros miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_jilgueros_miel.jpg"  alt="Barritas Axis Jilgueros miel" title="Barritas Axis Jilgueros miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-jilgueros-miel.html" title="Barritas Axis Jilgueros miel"><b>Barritas Axis Jilgueros miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-jilgueros-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2879/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de miel y semillas especialmente formuladas para jilgueros. Complementan su dieta. Una recompensa extra-sabrosa. 100% ingredientes naturales. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-jilgueros-miel.html" title="Barritas Axis Jilgueros miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-periquito-fruta.html" title="Barritas Axis Periquito fruta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_perico_fruta_2.jpg"  alt="Barritas Axis Periquito fruta" title="Barritas Axis Periquito fruta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-periquito-fruta.html" title="Barritas Axis Periquito fruta"><b>Barritas Axis Periquito fruta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-periquito-fruta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1336/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas con fruta seca ideales para complementar la dieta de las pequeñas aves como el periquito a la vez que les ofrecemos una recompensa extra-sabrosa. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-periquito-fruta.html" title="Barritas Axis Periquito fruta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-periquito-manzana.html" title="Barritas Axis Periquito manzana">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_perico_manzana.jpg"  alt="Barritas Axis Periquito manzana" title="Barritas Axis Periquito manzana" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-periquito-manzana.html" title="Barritas Axis Periquito manzana"><b>Barritas Axis Periquito manzana</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-periquito-manzana.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2881/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de manzana y semillas especialmente formuladas para pericos. Complementan su dieta. Una recompensa extra-sabrosa. 100% ingredientes naturales. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-periquito-manzana.html" title="Barritas Axis Periquito manzana">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-periquito-miel.html" title="Barritas Axis Periquito miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_perico_miel.jpg"  alt="Barritas Axis Periquito miel" title="Barritas Axis Periquito miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-periquito-miel.html" title="Barritas Axis Periquito miel"><b>Barritas Axis Periquito miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-periquito-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2880/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de miel y semillas especialmente formuladas para pericos. Complementan su dieta. Una recompensa extra-sabrosa. 100% ingredientes naturales. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-periquito-miel.html" title="Barritas Axis Periquito miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-periquito-muda.html" title="Barritas Axis Periquito muda">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_perico_muda.jpg"  alt="Barritas Axis Periquito muda" title="Barritas Axis Periquito muda" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-periquito-muda.html" title="Barritas Axis Periquito muda"><b>Barritas Axis Periquito muda</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-periquito-muda.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2882/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de ingredientes y semillas que facilitan la muda del plumaje. Especialmente formuladas para pericos. Complementan su dieta. Una recompensa extra-sabrosa. 100% ingredientes naturales. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/barritas-axis-periquito-muda.html" title="Barritas Axis Periquito muda">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/27277.html" title="Barritas Axis Periquito naranja">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_perico_naranja.jpg"  alt="Barritas Axis Periquito naranja" title="Barritas Axis Periquito naranja" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/27277.html" title="Barritas Axis Periquito naranja"><b>Barritas Axis Periquito naranja</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/27277.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2883/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas a base de naranja y semillas especialmente formuladas para pericos. Complementan su dieta. Una recompensa extra-sabrosa. 100% ingredientes naturales. 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/27277.html" title="Barritas Axis Periquito naranja">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/base-naturlitter-maiz.html" title="Base Naturlitter Maíz">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/naturlitter_maiz_4l.jpg"  alt="Base Naturlitter Maíz" title="Base Naturlitter Maíz" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/base-naturlitter-maiz.html" title="Base Naturlitter Maíz"><b>Base Naturlitter Maíz</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/base-naturlitter-maiz.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2789/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Naturlitter es un lecho ecológico universal pensado para todo tipo de animales tales como conejos, cobayas, pequeños roedores, gatos, pájaros, hurones, perros, etc. Su origen 100% natural (proviene del núcleo interno de la mazorca del maíz) y su efecto esponja, aporta unas condiciones excelentes para la higiene diaria de su mascota. Formatos: 4l, 10l.                    <a href="http://www.misterguau.com/index.php/base-naturlitter-maiz.html" title="Base Naturlitter Maíz">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/base-para-roedor-biolette.html" title="Base para roedor Biolette">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/biolette_2.jpg"  alt="Base para roedor Biolette" title="Base para roedor Biolette" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/base-para-roedor-biolette.html" title="Base para roedor Biolette"><b>Base para roedor Biolette</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/base-para-roedor-biolette.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2083/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lecho ecológico universal para roedores. Apto para roedores, pequeños mamíferos y aves. Producto orgánico compuesto de fibras vegetales. Absorbe y elimina malos olores. Libre de agentes químicos. Envase: saco de 8 litros (5,25Kg aprox).                    <a href="http://www.misterguau.com/index.php/base-para-roedor-biolette.html" title="Base para roedor Biolette">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/base-vitakraft-vegetal-clean-paper.html" title="Base vegetal Vitakraft Clean paper">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_vegetal_clean_papel_15363.jpg"  alt="Base vegetal Vitakraft Clean paper" title="Base vegetal Vitakraft Clean paper" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/base-vitakraft-vegetal-clean-paper.html" title="Base vegetal Vitakraft Clean paper"><b>Base vegetal Vitakraft Clean paper</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															20,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/base-vitakraft-vegetal-clean-paper.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4624/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lecho vegetal realizado a base de papel  reciclado prensado en forma de pellet, válido para  roedores, hurones, gatos, pájaros, pequeños mamíferos y reptiles.  Muy absorbente y neutraliza los olores. Sin aditivos químicos. 100% biodegradable y no produce polvo. Su tamaño es pequeño y ligero, por lo que se compacta y simula el lecho natural del animal. Formato: 25 litros.                    <a href="http://www.misterguau.com/index.php/base-vitakraft-vegetal-clean-paper.html" title="Base vegetal Vitakraft Clean paper">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-plastico-transparente-para-ave-mod-750.html" title="Bebedero plástico transparente para ave Mod. 750">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_de_2_bebederos_ref750_transparente.jpg"  alt="Bebedero plástico transparente para ave Mod. 750" title="Bebedero plástico transparente para ave Mod. 750" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-plastico-transparente-para-ave-mod-750.html" title="Bebedero plástico transparente para ave Mod. 750"><b>Bebedero plástico transparente para ave Mod. 750</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-plastico-transparente-para-ave-mod-750.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3509/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero/Bebedero plástico para todo tipo de jaulas. Especialmente diseñado como repuesto de los comederos de jaulas de la marca Voltregá. Se presenta en bolsita que contiene dos unidades.                     <a href="http://www.misterguau.com/index.php/bebedero-plastico-transparente-para-ave-mod-750.html" title="Bebedero plástico transparente para ave Mod. 750">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-tolva-para-jaulas.html" title="Bebedero tolva para jaulas Voltrega">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/bebedero_430_ref.jpg"  alt="Bebedero tolva para jaulas Voltrega" title="Bebedero tolva para jaulas Voltrega" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-tolva-para-jaulas.html" title="Bebedero tolva para jaulas Voltrega"><b>Bebedero tolva para jaulas Voltrega</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-tolva-para-jaulas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3828/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bebedero-comedero tipo tolva válido para comida y agua. Se adapta a todas las jaulas con alambre horizontal. Medidas: Base: 8 x 10 cm. - Altura: 16,5 cm.                    <a href="http://www.misterguau.com/index.php/bebedero-tolva-para-jaulas.html" title="Bebedero tolva para jaulas Voltrega">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bebedero-universal-para-aves-sandimas.html" title="Bebedero Universal para aves Sandimas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/bebedero_tubo_sd_51001.jpg"  alt="Bebedero Universal para aves Sandimas" title="Bebedero Universal para aves Sandimas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bebedero-universal-para-aves-sandimas.html" title="Bebedero Universal para aves Sandimas"><b>Bebedero Universal para aves Sandimas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bebedero-universal-para-aves-sandimas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/273/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bebedero universal para aves adaptable a todo tipo de jaulas. Con ganchos y flexibilidad suficiente como para poder insertarlo en jaulas con rejas verticales u horizontales. Ideal para pequeñas y medianas aves. Colores de base surtidos. Medidas: 5x10cm                    <a href="http://www.misterguau.com/index.php/bebedero-universal-para-aves-sandimas.html" title="Bebedero Universal para aves Sandimas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ny-bizcochera-portasal.html" title="Bizcochera - Portasal NY">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/bizcochera_portasal_1.jpg"  alt="Bizcochera - Portasal NY" title="Bizcochera - Portasal NY" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ny-bizcochera-portasal.html" title="Bizcochera - Portasal NY"><b>Bizcochera - Portasal NY</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ny-bizcochera-portasal.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1312/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Portasal en forma de dedal para que nuestra ave tenga bien al alcance sus sales minerales, bizcocho o pasta de canto, cría o color.                    <a href="http://www.misterguau.com/index.php/ny-bizcochera-portasal.html" title="Bizcochera - Portasal NY">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bizcochera-con-posador-comedero-interior-117-rsl.html" title="Bizcochera con posador-comedero interior 117 RSL">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/bizcochera_c-posador-comedero_interior_117int.jpg"  alt="Bizcochera con posador-comedero interior 117 RSL" title="Bizcochera con posador-comedero interior 117 RSL" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bizcochera-con-posador-comedero-interior-117-rsl.html" title="Bizcochera con posador-comedero interior 117 RSL"><b>Bizcochera con posador-comedero interior 117 RSL</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bizcochera-con-posador-comedero-interior-117-rsl.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4719/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bizcochera de plástico transparente con reposador. Para jaulas con barrotes verticales. Medidas: 6.3 cm Ancho * 7cm Largo                    <a href="http://www.misterguau.com/index.php/bizcochera-con-posador-comedero-interior-117-rsl.html" title="Bizcochera con posador-comedero interior 117 RSL">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bizcochera-de-plastico-para-aves.html" title="Bizcochera de plástico para aves">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/bizcochera_codpa30012.jpg"  alt="Bizcochera de plástico para aves" title="Bizcochera de plástico para aves" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bizcochera-de-plastico-para-aves.html" title="Bizcochera de plástico para aves"><b>Bizcochera de plástico para aves</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bizcochera-de-plastico-para-aves.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3744/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bizcochera ideal para añadir bizcocho o semillas a nuestras pequeñas aves. Realizada en plástico no tóxico. Colores surtidos.                    <a href="http://www.misterguau.com/index.php/bizcochera-de-plastico-para-aves.html" title="Bizcochera de plástico para aves">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bizcochera-de-cristal-para-aves.html" title="Bizcochera transparente para aves">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/bizcocheras_cristal_pa30005.jpg"  alt="Bizcochera transparente para aves" title="Bizcochera transparente para aves" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bizcochera-de-cristal-para-aves.html" title="Bizcochera transparente para aves"><b>Bizcochera transparente para aves</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bizcochera-de-cristal-para-aves.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3743/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bizcochera ideal para añadir bizcocho o semillas a nuestras pequeñas aves. Con dos enganches en forma de L que se adaptan a la gran mayoría de jaulas del mercado. Con reposa aves para que puedan reposar cerca y comer tranquilamente. Realizada en plástico rígido no toxico.                    <a href="http://www.misterguau.com/index.php/bizcochera-de-cristal-para-aves.html" title="Bizcochera transparente para aves">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bloque-de-calcio-para-canarios-cunipic.html" title="Bloque de calcio para canarios Cunipic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/l/bloque_calcio_canario.jpg"  alt="Bloque de calcio para canarios Cunipic" title="Bloque de calcio para canarios Cunipic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bloque-de-calcio-para-canarios-cunipic.html" title="Bloque de calcio para canarios Cunipic"><b>Bloque de calcio para canarios Cunipic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,25&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 1.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bloque-de-calcio-para-canarios-cunipic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5037/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Suplemento mineral de calcio para complementar la dieta del canario. Tu mascota se entretendrá picándola a la vez que colaborará en la abrasión y desgaste del pico.                    <a href="http://www.misterguau.com/index.php/bloque-de-calcio-para-canarios-cunipic.html" title="Bloque de calcio para canarios Cunipic">Saber más</a><br><br>
					<span class="required"><strong>36% de Dto! Ahorra 0.80&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bloque-de-calcio-para-periquitos-cunipic.html" title="Bloque de calcio para periquitos Cunipic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/l/bloque_calcio_periquito.jpg"  alt="Bloque de calcio para periquitos Cunipic" title="Bloque de calcio para periquitos Cunipic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bloque-de-calcio-para-periquitos-cunipic.html" title="Bloque de calcio para periquitos Cunipic"><b>Bloque de calcio para periquitos Cunipic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,25&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 1.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bloque-de-calcio-para-periquitos-cunipic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5038/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Suplemento mineral de calcio para complementar la dieta de nuestro periquito. Tu mascota se entretendrá picándola a la vez que colaborará en la abrasión y desgaste del pico.                    <a href="http://www.misterguau.com/index.php/bloque-de-calcio-para-periquitos-cunipic.html" title="Bloque de calcio para periquitos Cunipic">Saber más</a><br><br>
					<span class="required"><strong>36% de Dto! Ahorra 0.80&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/calcio-ny-con-sabor-a-fruta-para-aves-peque-as.html" title="Calcio NY con sabor a fruta para aves pequeñas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/calcio_sabor_frutas_pajaros_pequenos.jpg"  alt="Calcio NY con sabor a fruta para aves pequeñas" title="Calcio NY con sabor a fruta para aves pequeñas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/calcio-ny-con-sabor-a-fruta-para-aves-peque-as.html" title="Calcio NY con sabor a fruta para aves pequeñas"><b>Calcio NY con sabor a fruta para aves pequeñas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/calcio-ny-con-sabor-a-fruta-para-aves-peque-as.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3645/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Calcio para aves con sabor a frutas. Para pequeñas aves, como canarios, pericos, diamantes, etc. El picotear el calcio además de proporcionarles el calcio necesario, ayuda a limar y limpiar su pico. Con forma de pajarito.                    <a href="http://www.misterguau.com/index.php/calcio-ny-con-sabor-a-fruta-para-aves-peque-as.html" title="Calcio NY con sabor a fruta para aves pequeñas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/calcio-ny-con-sabor-a-fruta-para-cotorras-y-loros.html" title="Calcio NY con sabor a fruta para cotorras y loros">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/calcio_sabor_frutas_loros_y_cotorras_pa41001.jpg"  alt="Calcio NY con sabor a fruta para cotorras y loros" title="Calcio NY con sabor a fruta para cotorras y loros" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/calcio-ny-con-sabor-a-fruta-para-cotorras-y-loros.html" title="Calcio NY con sabor a fruta para cotorras y loros"><b>Calcio NY con sabor a fruta para cotorras y loros</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/calcio-ny-con-sabor-a-fruta-para-cotorras-y-loros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3642/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Calcio para aves con sabor a frutas. Para aves pequeñas o medianas, como agapornis, ninfas o loros. El picotear el calcio además de proporcionarles el calcio necesario, ayuda a limar y limpiar su pico. Con forma de ave.                    <a href="http://www.misterguau.com/index.php/calcio-ny-con-sabor-a-fruta-para-cotorras-y-loros.html" title="Calcio NY con sabor a fruta para cotorras y loros">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cierre-para-puerta-de-jaula-ave-conejo-voltrega.html" title="Cierre para puerta de jaula ave/conejo Voltrega">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/recambio_cierre_puerta_jaula_924.jpg"  alt="Cierre para puerta de jaula ave/conejo Voltrega" title="Cierre para puerta de jaula ave/conejo Voltrega" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cierre-para-puerta-de-jaula-ave-conejo-voltrega.html" title="Cierre para puerta de jaula ave/conejo Voltrega"><b>Cierre para puerta de jaula ave/conejo Voltrega</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cierre-para-puerta-de-jaula-ave-conejo-voltrega.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1267/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cierre de seguridad para puertas de jaulas de ave o conejo Voltrega. Válida para los siguientes modelos:  Pajarera (446GP - 445GP - 430GF - 420G), Jaulas ave (852), Jaulas roedores y pequeños mamíferos (209 - 260 - 266 - 267 - 270 - 993 - 996 - 994 - 520 - 523 - 526 - 527 - 920 - 923- 923 - 924 - 925 - 954 - 955 - 974 - 930 - 933 - 934 - 936 - 987- 976 - 986). Se sirve en paquete con dos unidades.                    <a href="http://www.misterguau.com/index.php/cierre-para-puerta-de-jaula-ave-conejo-voltrega.html" title="Cierre para puerta de jaula ave/conejo Voltrega">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ny-comedero-3-huecos.html" title="Comedero 3 huecos NY">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_pajaro_3_pozas_2.jpg"  alt="Comedero 3 huecos NY" title="Comedero 3 huecos NY" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ny-comedero-3-huecos.html" title="Comedero 3 huecos NY"><b>Comedero 3 huecos NY</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ny-comedero-3-huecos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1313/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero con tres huecos y separadores para poder alimentar a nuestras pequeñas aves de forma variada. Incluye reposa-aves.                     <a href="http://www.misterguau.com/index.php/ny-comedero-3-huecos.html" title="Comedero 3 huecos NY">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-aves-jaula-voltrega-2-unid.html" title="Comedero aves Jaula Voltregá (2 unid)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_2_comederos_760.jpg"  alt="Comedero aves Jaula Voltregá (2 unid)" title="Comedero aves Jaula Voltregá (2 unid)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-aves-jaula-voltrega-2-unid.html" title="Comedero aves Jaula Voltregá (2 unid)"><b>Comedero aves Jaula Voltregá (2 unid)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-aves-jaula-voltrega-2-unid.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3504/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero para aves especialmente indicado para las jaulas Voltregá de pájaro. Con tapa superior para poder rellenarlo fácilmente. Colores surtidos. Se sirve en pack de 2 unidades. Válido para todos los modelos de jaulas de ave Voltregá.                    <a href="http://www.misterguau.com/index.php/comedero-aves-jaula-voltrega-2-unid.html" title="Comedero aves Jaula Voltregá (2 unid)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-clasico-rsl-1100.html" title="Comedero clásico RSL 1100">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_pajaro_jaula_1100co.jpg"  alt="Comedero clásico RSL 1100" title="Comedero clásico RSL 1100" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-clasico-rsl-1100.html" title="Comedero clásico RSL 1100"><b>Comedero clásico RSL 1100</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-clasico-rsl-1100.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4721/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico transparente ideal para todo tipo de jaulas. Dispone de percha ancha para que nuestra ave pueda alimentarse de forma cómoda. Separable por la parte central si necesidad de sacarlo completo de la jaula.                     <a href="http://www.misterguau.com/index.php/comedero-clasico-rsl-1100.html" title="Comedero clásico RSL 1100">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-pajarita-para-aves.html" title="Comedero Pajarita para aves">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_paj_pajarita_cod2261.jpg"  alt="Comedero Pajarita para aves" title="Comedero Pajarita para aves" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-pajarita-para-aves.html" title="Comedero Pajarita para aves"><b>Comedero Pajarita para aves</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-pajarita-para-aves.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3741/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero-bebedero clásico con forma cueva para evitar que caigan las semillas o resto a la parte exterior de la jaula. Realizado en plástico rígido no tóxico e ideal para jaulas con barrotes verticales. Con reposa-aves para que coman relajadamente. Desmontable en dos partes para una mejor limpieza. Para aves pequeñas.                     <a href="http://www.misterguau.com/index.php/comedero-pajarita-para-aves.html" title="Comedero Pajarita para aves">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-para-ave-con-gancho.html" title="Comedero para ave con gancho">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_pajaro_c-enganche_pa30006.jpg"  alt="Comedero para ave con gancho" title="Comedero para ave con gancho" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-para-ave-con-gancho.html" title="Comedero para ave con gancho"><b>Comedero para ave con gancho</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-para-ave-con-gancho.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2957/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero plástico para aves pequeñas o medianas. Con gancho adaptable a cualquier tipo de jaula. Ideal para aves pequeñas y medianas.                    <a href="http://www.misterguau.com/index.php/comedero-para-ave-con-gancho.html" title="Comedero para ave con gancho">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-para-loro-con-gancho.html" title="Comedero para loro con gancho">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_loro_con_gancho_2292.jpg"  alt="Comedero para loro con gancho" title="Comedero para loro con gancho" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-para-loro-con-gancho.html" title="Comedero para loro con gancho"><b>Comedero para loro con gancho</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-para-loro-con-gancho.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3023/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero plástico para loros con ganchos adaptables a cualquier tipo de jaula. Ideales para frutas, semillas, bizcochos, etc.                     <a href="http://www.misterguau.com/index.php/comedero-para-loro-con-gancho.html" title="Comedero para loro con gancho">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-plastico-para-aves-medianas-kl.html" title="Comedero plástico para aves medianas KL">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/e/semillero_plastico_200ml_88303.jpg"  alt="Comedero plástico para aves medianas KL" title="Comedero plástico para aves medianas KL" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-plastico-para-aves-medianas-kl.html" title="Comedero plástico para aves medianas KL"><b>Comedero plástico para aves medianas KL</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,10&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 1.15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-plastico-para-aves-medianas-kl.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4751/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero plástico ideal para el alimento o semillas de aves medianas o grandes. Con ganchos y reposa-aves, En colores surtidos. Capacidad: 200ml.                    <a href="http://www.misterguau.com/index.php/comedero-plastico-para-aves-medianas-kl.html" title="Comedero plástico para aves medianas KL">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comida-para-loros-extrusionada-axis.html" title="Comida para loros extrusionada Axis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comida_axis_loros_extrusionada_800gr_9699.jpg"  alt="Comida para loros extrusionada Axis" title="Comida para loros extrusionada Axis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comida-para-loros-extrusionada-axis.html" title="Comida para loros extrusionada Axis"><b>Comida para loros extrusionada Axis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comida-para-loros-extrusionada-axis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3769/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completo alimento extrusionado que cubre todas las necesidades del loro adulto. Su presentación extrusionada favorece la digestibilidad, la asimilación completa de la dieta y evita que nuestro loro seleccione determinados granos o frutas. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/comida-para-loros-extrusionada-axis.html" title="Comida para loros extrusionada Axis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-agapornis.html" title="Cunipic Alimento para Agapornis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_agapornis_2.jpg"  alt="Cunipic Alimento para Agapornis" title="Cunipic Alimento para Agapornis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-agapornis.html" title="Cunipic Alimento para Agapornis"><b>Cunipic Alimento para Agapornis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-agapornis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2090/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo rico en Vitaminas y Hierro, hemos desarrollado una dieta variada y equilibrada natural para los agapornies, existen muchas aves reacias al consumo de piensos extrusionados.  Estas semillas, junto a la fruta, verdura y pasta fresca proporcionan variedad a la comida y entretenimiento al animal. Formato: 650gr, 3Kg.                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-agapornis.html" title="Cunipic Alimento para Agapornis">Saber más</a><br><br>
					<span class="required"><strong>20% Dto en 650g! Ahorra 0.60&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-aves-silvestres.html" title="Cunipic Alimento para aves Silvestres">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_silvestres_650gr.jpg"  alt="Cunipic Alimento para aves Silvestres" title="Cunipic Alimento para aves Silvestres" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-aves-silvestres.html" title="Cunipic Alimento para aves Silvestres"><b>Cunipic Alimento para aves Silvestres</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,85&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-aves-silvestres.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2904/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo rico en Vitaminas. Dieta variada y equilibrada natural para las aves silvestres. Nuestra propuesta parte de la opinión de reconocidos veterinarios y nutricionistas en el sector. Estas semillas, junto a la fruta, verdura y pasta fresca proporcionan variedad a la comida y entretenimiento al animal. Formato: 650 gr.                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-aves-silvestres.html" title="Cunipic Alimento para aves Silvestres">Saber más</a><br><br>
					<span class="required"><strong>10% Dto en 650g! Ahorra 0.40&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-canarios.html" title="Cunipic Alimento para Canarios">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_canario_2.jpg"  alt="Cunipic Alimento para Canarios" title="Cunipic Alimento para Canarios" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-canarios.html" title="Cunipic Alimento para Canarios"><b>Cunipic Alimento para Canarios</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,30&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-canarios.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2087/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo rico en carbohidratos y proteínas, hemos desarrollado una dieta variada y equilibrada natural para los canarios, existen muchas aves reacias al consumo de piensos extrusionados. Estas semillas, junto a la fruta, verdura y pasta fresca proporcionan variedad a la comida y entretenimiento al animal. Formato: 650gr                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-canarios.html" title="Cunipic Alimento para Canarios">Saber más</a><br><br>
					<span class="required"><strong>17% Dto en 650g! Ahorra 0.55&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-diamantes-exoticos.html" title="Cunipic Alimento para Diamantes (exóticos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_tropicales_2.jpg"  alt="Cunipic Alimento para Diamantes (exóticos)" title="Cunipic Alimento para Diamantes (exóticos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-diamantes-exoticos.html" title="Cunipic Alimento para Diamantes (exóticos)"><b>Cunipic Alimento para Diamantes (exóticos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,20&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-diamantes-exoticos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2088/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo rico en Vitaminas y Hierro, hemos desarrollado una dieta variada y equilibrada natural para los diamantes.Estas semillas, junto a la fruta, verdura y pasta fresca proporcionan variedad a la comida y entretenimiento al animal. Formato: 650gr                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-diamantes-exoticos.html" title="Cunipic Alimento para Diamantes (exóticos)">Saber más</a><br><br>
					<span class="required"><strong>17% Dto en 650g! Ahorra 0.55&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-loros.html" title="Cunipic Alimento para Loros">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_loro_2.jpg"  alt="Cunipic Alimento para Loros" title="Cunipic Alimento para Loros" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-loros.html" title="Cunipic Alimento para Loros"><b>Cunipic Alimento para Loros</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,75&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-loros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2091/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo rico en proteínas y aminoácidos, hemos desarrollado una dieta variada y equilibrada natural para los loros, existen muchas aves reacias al consumo de piensos extrusionados. Estas semillas, junto a la fruta, verdura y pasta fresca proporcionan variedad a la comida y entretenimiento al animal. 2 Formatos: 1Kg, 3Kg                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-loros.html" title="Cunipic Alimento para Loros">Saber más</a><br><br>
					<span class="required"><strong>18% Dto en 1Kg! Ahorra 0.85&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-ninfas-carolinas.html" title="Cunipic Alimento para Ninfas (Carolinas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_ninfas_2.jpg"  alt="Cunipic Alimento para Ninfas (Carolinas)" title="Cunipic Alimento para Ninfas (Carolinas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-ninfas-carolinas.html" title="Cunipic Alimento para Ninfas (Carolinas)"><b>Cunipic Alimento para Ninfas (Carolinas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,90&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-ninfas-carolinas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2089/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo rico en vitaminas y hierro, hemos desarrollado una dieta variada y equilibrada natural para las ninfas, existen muchas aves reacias al consumo de piensos extrusionados. Estas semillas, junto a la fruta, verdura y pasta fresca proporcionan variedad a la comida y entretenimiento al animal. 2 Formatos: 650gr, 3Kg                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-ninfas-carolinas.html" title="Cunipic Alimento para Ninfas (Carolinas)">Saber más</a><br><br>
					<span class="required"><strong>21% Dto en 650g! Ahorra 0.60&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-periquitos.html" title="Cunipic Alimento para Periquitos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_periquito_3.jpg"  alt="Cunipic Alimento para Periquitos" title="Cunipic Alimento para Periquitos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-periquitos.html" title="Cunipic Alimento para Periquitos"><b>Cunipic Alimento para Periquitos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,90&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-periquitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2086/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo rico en Vitaminas y Proteínas, hemos desarrollado una dieta variada y equilibrada natural para los periquitos, existen muchas aves reacias al consumo de piensos extrusionados.  Estas semillas, junto a la fruta, verdura y pasta fresca proporcionan variedad a la comida y entretenimiento al animal. 2 Formatos: 650gr, 3Kg                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-periquitos.html" title="Cunipic Alimento para Periquitos">Saber más</a><br><br>
					<span class="required"><strong>12% Dto en 650g! Ahorra 0.35&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-arena-higienica-para-aves.html" title="Cunipic Arena higiénica para aves">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_arena_aves_con_anis.jpg"  alt="Cunipic Arena higiénica para aves" title="Cunipic Arena higiénica para aves" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-arena-higienica-para-aves.html" title="Cunipic Arena higiénica para aves"><b>Cunipic Arena higiénica para aves</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-arena-higienica-para-aves.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2893/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La arena de concha con anís CUNIPIC está especialmente diseñada para mantener fresca y limpia la base de su jaula. Libera de malos olores y facilita la limpieza sin levantar polvo. Además, CUNIPIC, enriquece este lecho con grit, mezcla de distintas conchas que aportan calcio y facilitan la digestión de las aves. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/cunipic-arena-higienica-para-aves.html" title="Cunipic Arena higiénica para aves">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-agapornis-y-ninfas.html" title="Cunipic Barritas de fruta (Agapornis y ninfas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_barritas_agapornis_y_ninfas_fruta_1.jpg"  alt="Cunipic Barritas de fruta (Agapornis y ninfas)" title="Cunipic Barritas de fruta (Agapornis y ninfas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-agapornis-y-ninfas.html" title="Cunipic Barritas de fruta (Agapornis y ninfas)"><b>Cunipic Barritas de fruta (Agapornis y ninfas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-agapornis-y-ninfas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2888/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas complementarias hechas con semillas y frutas, horneadas con una doble capa de miel. Especialmente pensadas para agapornies y ninfas. Formato: 130gr (2 barritas)                    <a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-agapornis-y-ninfas.html" title="Cunipic Barritas de fruta (Agapornis y ninfas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-para-canarios-y-diamantes.html" title="Cunipic Barritas de fruta (Canarios y diamantes)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_barritas_canario_y_diamante_fruta.jpg"  alt="Cunipic Barritas de fruta (Canarios y diamantes)" title="Cunipic Barritas de fruta (Canarios y diamantes)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-para-canarios-y-diamantes.html" title="Cunipic Barritas de fruta (Canarios y diamantes)"><b>Cunipic Barritas de fruta (Canarios y diamantes)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-para-canarios-y-diamantes.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2884/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas complementarias hechas con semillas y frutas, horneadas con una doble capa de miel. Especialmente pensadas para canarios y diamantes. Formato: 60gr (2 barritas)                    <a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-para-canarios-y-diamantes.html" title="Cunipic Barritas de fruta (Canarios y diamantes)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-periquitos.html" title="Cunipic Barritas de fruta (Periquitos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_barritas_periquito_fruta.jpg"  alt="Cunipic Barritas de fruta (Periquitos)" title="Cunipic Barritas de fruta (Periquitos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-periquitos.html" title="Cunipic Barritas de fruta (Periquitos)"><b>Cunipic Barritas de fruta (Periquitos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-periquitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2886/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas complementarias hechas con semillas y frutas, horneadas con una doble capa de miel. Especialmente pensadas para periquitos. Formato: 60gr (2 barritas)                    <a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-periquitos.html" title="Cunipic Barritas de fruta (Periquitos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-citrica-periquitos.html" title="Cunipic Barritas de fruta cítrica (Periquitos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_barritas_periquito_fruta_citrica.jpg"  alt="Cunipic Barritas de fruta cítrica (Periquitos)" title="Cunipic Barritas de fruta cítrica (Periquitos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-citrica-periquitos.html" title="Cunipic Barritas de fruta cítrica (Periquitos)"><b>Cunipic Barritas de fruta cítrica (Periquitos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-citrica-periquitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2887/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas complementarias hechas con semillas y frutas cítricas, horneadas con una doble capa de miel. Especialmente pensadas para periquitos.  Formato: 60gr (2 barritas)                    <a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-citrica-periquitos.html" title="Cunipic Barritas de fruta cítrica (Periquitos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-tropical-loros.html" title="Cunipic Barritas de fruta tropical (Loros)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_barritas_loro_fruta_tropical.jpg"  alt="Cunipic Barritas de fruta tropical (Loros)" title="Cunipic Barritas de fruta tropical (Loros)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-tropical-loros.html" title="Cunipic Barritas de fruta tropical (Loros)"><b>Cunipic Barritas de fruta tropical (Loros)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-tropical-loros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2891/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas complementarias hechas con semillas y frutas, horneadas con una doble capa de miel. Especialmente pensadas para loros. Formato: 130gr (2 barritas)                    <a href="http://www.misterguau.com/index.php/cunipic-barritas-de-fruta-tropical-loros.html" title="Cunipic Barritas de fruta tropical (Loros)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-barritas-de-miel-loros.html" title="Cunipic Barritas de frutos secos mix (Loros)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_barritas_loro_frutos_secos.jpg"  alt="Cunipic Barritas de frutos secos mix (Loros)" title="Cunipic Barritas de frutos secos mix (Loros)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-barritas-de-miel-loros.html" title="Cunipic Barritas de frutos secos mix (Loros)"><b>Cunipic Barritas de frutos secos mix (Loros)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-barritas-de-miel-loros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2890/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas complementarias hechas con semillas y frutos secos, horneadas con una doble capa de miel. Especialmente pensadas para loros. Formato: 130gr (2 barritas)                    <a href="http://www.misterguau.com/index.php/cunipic-barritas-de-miel-loros.html" title="Cunipic Barritas de frutos secos mix (Loros)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-barritas-de-manzana-y-huevo-canarios-y-diamantes.html" title="Cunipic Barritas de manzana y huevo (Canarios y diamantes)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_barritas_canario_y_diamante_manzana.jpg"  alt="Cunipic Barritas de manzana y huevo (Canarios y diamantes)" title="Cunipic Barritas de manzana y huevo (Canarios y diamantes)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-barritas-de-manzana-y-huevo-canarios-y-diamantes.html" title="Cunipic Barritas de manzana y huevo (Canarios y diamantes)"><b>Cunipic Barritas de manzana y huevo (Canarios y diamantes)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-barritas-de-manzana-y-huevo-canarios-y-diamantes.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2885/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas complementarias hechas con semillas, manzana, kiwi y huevo, horneadas con una doble capa de miel. Especialmente pensadas para canarios y diamantes. Formato: 60gr (2 barritas)                    <a href="http://www.misterguau.com/index.php/cunipic-barritas-de-manzana-y-huevo-canarios-y-diamantes.html" title="Cunipic Barritas de manzana y huevo (Canarios y diamantes)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-barritas-de-miel-agapornis-y-ninfas.html" title="Cunipic Barritas de miel (Agapornis y ninfas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_barritas_agapornis_y_ninfas_miel.jpg"  alt="Cunipic Barritas de miel (Agapornis y ninfas)" title="Cunipic Barritas de miel (Agapornis y ninfas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-barritas-de-miel-agapornis-y-ninfas.html" title="Cunipic Barritas de miel (Agapornis y ninfas)"><b>Cunipic Barritas de miel (Agapornis y ninfas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-barritas-de-miel-agapornis-y-ninfas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2889/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas complementarias hechas con semillas y frutas, horneadas con una doble capa de miel. Especialmente pensadas para agapornies y ninfas. Formato: 130gr (2 barritas)                    <a href="http://www.misterguau.com/index.php/cunipic-barritas-de-miel-agapornis-y-ninfas.html" title="Cunipic Barritas de miel (Agapornis y ninfas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-grit-para-aves.html" title="Cunipic Grit para aves">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_grit_aves_600gr_grit.jpg"  alt="Cunipic Grit para aves" title="Cunipic Grit para aves" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-grit-para-aves.html" title="Cunipic Grit para aves"><b>Cunipic Grit para aves</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-grit-para-aves.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2894/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Las aves granívoras necesitan pequeños minerales para triturar el alimento. GRIT CUNIPIC aporta una mezcla variada de conchas de diferentes tamaños adaptándose al gusto del ave. Fuente de calcio y minerales imprescindibles para el correcto metabolismo del animal. Formato: 600gr.                    <a href="http://www.misterguau.com/index.php/cunipic-grit-para-aves.html" title="Cunipic Grit para aves">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-naturlitter-papel.html" title="Cunipic Naturlitter papel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_naturlitter_paper.jpg"  alt="Cunipic Naturlitter papel" title="Cunipic Naturlitter papel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-naturlitter-papel.html" title="Cunipic Naturlitter papel"><b>Cunipic Naturlitter papel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-naturlitter-papel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/493/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lecho ecológico universal pensado para todo tipo de pequeños mamíferos. Compuesto de papel reciclado prensado en forma de pelet y libre de polvo, algo importante para no generar posibles alergias en sus animales. Su tamaño es pequeño y ligero, por lo que el lecho se compacta y simula el lecho natural del animal. Máxima absorción - Anti-olor - Libre de polvo - Desechable por el W.C. - Ligero - Recomendado por veterinarios - Biodegradable. Formatos: 4l, 10l, 25l.                    <a href="http://www.misterguau.com/index.php/cunipic-naturlitter-papel.html" title="Cunipic Naturlitter papel">Saber más</a><br><br>
					<span class="required"><strong>36% de Dto! Ahorra 1.65&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/estimulante-del-canto-tabernil.html" title="Estimulante del canto Tabernil">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/a/tabernil_canto_20ml.jpg"  alt="Estimulante del canto Tabernil" title="Estimulante del canto Tabernil" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/estimulante-del-canto-tabernil.html" title="Estimulante del canto Tabernil"><b>Estimulante del canto Tabernil</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/estimulante-del-canto-tabernil.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3164/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Preparado soluble en agua con una garantía absoluta de estabilidad, cómodo de administración y de facil asimilación. Propporciona el aporte de hormonas (testosterona en forma de metiltestosterona), que actúa como estimulante de los caracteres sexuales secundarios de los machos. Con vitaminas A , D3 y E que también estimulan el celo y consecuentemente su propensión al canto. Indicado para canarios y aves cantoras en general. Formato: 20ml.                    <a href="http://www.misterguau.com/index.php/estimulante-del-canto-tabernil.html" title="Estimulante del canto Tabernil">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/fibra-de-coco-abita.html" title="Fibra de coco Abita">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/fibra_de_coco_300gr_10039.jpg"  alt="Fibra de coco Abita" title="Fibra de coco Abita" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/fibra-de-coco-abita.html" title="Fibra de coco Abita"><b>Fibra de coco Abita</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/fibra-de-coco-abita.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3700/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Fibra de coco seleccionada para que nuestras pequeñas aves puedan realizar sus nidos de forma totalmente natural y adaptable a sus necesidades. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/fibra-de-coco-abita.html" title="Fibra de coco Abita">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ganchos-de-repuesto-para-jaulas-voltrega-md700.html" title="Ganchos de repuesto para jaulas Voltregá MD700">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_4_ganchos_md700_0306700_1.jpg"  alt="Ganchos de repuesto para jaulas Voltregá MD700" title="Ganchos de repuesto para jaulas Voltregá MD700" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ganchos-de-repuesto-para-jaulas-voltrega-md700.html" title="Ganchos de repuesto para jaulas Voltregá MD700"><b>Ganchos de repuesto para jaulas Voltregá MD700</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ganchos-de-repuesto-para-jaulas-voltrega-md700.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/381/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ganchos plásticos ideales como repuesto o refuerzo de los ganchos de las jaulas Voltregá. Se sirve en bolsita con 4 unidades. Colores surtidos. Ver compatibilidades en Saber más.                    <a href="http://www.misterguau.com/index.php/ganchos-de-repuesto-para-jaulas-voltrega-md700.html" title="Ganchos de repuesto para jaulas Voltregá MD700">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/gimnasio-para-pericos-natural-gym.html" title="Gimnasio para pericos Natural Gym">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/natural_gym_28x25x22cm.jpg"  alt="Gimnasio para pericos Natural Gym" title="Gimnasio para pericos Natural Gym" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/gimnasio-para-pericos-natural-gym.html" title="Gimnasio para pericos Natural Gym"><b>Gimnasio para pericos Natural Gym</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/gimnasio-para-pericos-natural-gym.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4372/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completo gimnasio para periquitos activos, con todo tipo de elementos para que esté muy distraído. Con varia escaleras, rampitas y desniveles para su gran actividad. Realizado totalmente en madera natural que le ayudará a desgastar el pico. Medidas: 28x25x22cm                    <a href="http://www.misterguau.com/index.php/gimnasio-para-pericos-natural-gym.html" title="Gimnasio para pericos Natural Gym">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/gimnasio-para-pericos-natural-gym-wood.html" title="Gimnasio para pericos Natural Gym Wood">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/natural_gym_35x27x30cm_-_pa30040.jpg"  alt="Gimnasio para pericos Natural Gym Wood" title="Gimnasio para pericos Natural Gym Wood" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/gimnasio-para-pericos-natural-gym-wood.html" title="Gimnasio para pericos Natural Gym Wood"><b>Gimnasio para pericos Natural Gym Wood</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															14,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/gimnasio-para-pericos-natural-gym-wood.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4621/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completo gimnasio para periquitos activos, con todo tipo de elementos para que esté muy distraído. Con varia escaleras, rampitas y barras paralelas para su gran actividad. Realizado totalmente en madera natural que le ayudará a desgastar el pico. Medidas: 35x27x30cm                    <a href="http://www.misterguau.com/index.php/gimnasio-para-pericos-natural-gym-wood.html" title="Gimnasio para pericos Natural Gym Wood">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/gran-pasto-fruttamix-para-loros-y-papagayos.html" title="Gran Pasto Fruttamix para loros y papagayos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/cocktail_pasta_frutas_loros-papagayos_700gr_codpa20010.jpg"  alt="Gran Pasto Fruttamix para loros y papagayos" title="Gran Pasto Fruttamix para loros y papagayos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/gran-pasto-fruttamix-para-loros-y-papagayos.html" title="Gran Pasto Fruttamix para loros y papagayos"><b>Gran Pasto Fruttamix para loros y papagayos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/gran-pasto-fruttamix-para-loros-y-papagayos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3764/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para todo tipo de aves cuya alimentación debe complementarse con frutas, tales como loros, papagayos, cotorras o agapornis. Con futas, pasas y castaña, entre otros componentes. Formato: 700gr                    <a href="http://www.misterguau.com/index.php/gran-pasto-fruttamix-para-loros-y-papagayos.html" title="Gran Pasto Fruttamix para loros y papagayos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/grit-carbosal-para-aves.html" title="Grit Carbosal para aves ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/r/grit_carbosal_350gr.jpg"  alt="Grit Carbosal para aves " title="Grit Carbosal para aves " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/grit-carbosal-para-aves.html" title="Grit Carbosal para aves "><b>Grit Carbosal para aves </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/grit-carbosal-para-aves.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4725/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mezcla de minerales a base de conchas de ostras, mariscos y carbón vegetal que promueve la absorción de gas y otras sustancias nocivas, además de mejorar de la digestión. Fórmula esterilizada. Gracias a su forma específica nos aseguremos una mejora en la digestión gracias a ser una excelente fuente de calcio orgánico que ayuda en el tránsito intestinal y a la trituración de los alimentos. Formato: 350gr.                    <a href="http://www.misterguau.com/index.php/grit-carbosal-para-aves.html" title="Grit Carbosal para aves ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/hueso-de-sepia-banana-calcio.html" title="Hueso de sepia Banana calcio">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/u/hueso_sepia_c-calcio_banana_12cm_70gr_88254.jpg"  alt="Hueso de sepia Banana calcio" title="Hueso de sepia Banana calcio" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/hueso-de-sepia-banana-calcio.html" title="Hueso de sepia Banana calcio"><b>Hueso de sepia Banana calcio</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>1,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 1.30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/hueso-de-sepia-banana-calcio.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3801/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Una gran combinación de 2 en 1 para nuestras aves. Por un lado el hueso de jibia de sepia hará que afile y mantenga sano su pico, y por otro lado el refuerzo de calcio con banana lo atraerá irresistiblemente a saborearlo. Para todo tipo de aves pequeñas y medianas. Formato: 12cm - 70gr                    <a href="http://www.misterguau.com/index.php/hueso-de-sepia-banana-calcio.html" title="Hueso de sepia Banana calcio">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/hueso-de-sepia-con-calcio-2-en-1-fresa.html" title="Hueso de sepia con calcio 2 en 1 (Fresa)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/u/hueso_sepia_c-calcio_fresa_12cm_70gr_88255.jpg"  alt="Hueso de sepia con calcio 2 en 1 (Fresa)" title="Hueso de sepia con calcio 2 en 1 (Fresa)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/hueso-de-sepia-con-calcio-2-en-1-fresa.html" title="Hueso de sepia con calcio 2 en 1 (Fresa)"><b>Hueso de sepia con calcio 2 en 1 (Fresa)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>1,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 1.30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/hueso-de-sepia-con-calcio-2-en-1-fresa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4718/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Una gran combinación, saludable para nuestras aves que combina a la perfección el hueso de sepia con el calcio y minerales que necesitan añadir a su dieta. Además le sirve para afilar el pico. Con delicioso olor y sabor a fresa. Medidas: 12cm - 70 gr.                    <a href="http://www.misterguau.com/index.php/hueso-de-sepia-con-calcio-2-en-1-fresa.html" title="Hueso de sepia con calcio 2 en 1 (Fresa)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/huevo-falso-de-canario.html" title="Huevo falso de canario">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/u/huevo_falso_canario_100034.jpg"  alt="Huevo falso de canario" title="Huevo falso de canario" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/huevo-falso-de-canario.html" title="Huevo falso de canario"><b>Huevo falso de canario</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>0,20&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 0.1&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/huevo-falso-de-canario.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3804/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Huevo falso realizado en plástico no tóxico para la cría de canarios. Los huevos falsos nos ayudan a que el canario no rompa sus propios huevos durante la puesta de los mismos. A medida que pone los huevos se van sustituyendo por los falsos, y cuando los haya puesto todos y pase a empollar los falsos se sustituyen por los reales, asegurándonos que estén sanos, enteros y que se incuben todo al mismo tiempo.                     <a href="http://www.misterguau.com/index.php/huevo-falso-de-canario.html" title="Huevo falso de canario">Saber más</a><br><br>
					<span class="required"><strong>50% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/insecticida-para-aves-tabernil-spray.html" title="Insecticida para aves Tabernil Spray">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/a/tabernil_insecticida_spray.jpg"  alt="Insecticida para aves Tabernil Spray" title="Insecticida para aves Tabernil Spray" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/insecticida-para-aves-tabernil-spray.html" title="Insecticida para aves Tabernil Spray"><b>Insecticida para aves Tabernil Spray</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/insecticida-para-aves-tabernil-spray.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3168/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Insecticida para el tratamiento y prevención de infestaciones por parásitos externos en canarios y aves de casa en general como:periquitos, jilgueros, palomas, etc.  Formato: 150 ml.                    <a href="http://www.misterguau.com/index.php/insecticida-para-aves-tabernil-spray.html" title="Insecticida para aves Tabernil Spray">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-topnature-852.html" title="Jaula para aves medianas Topnature 852">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_loro_mod852_topnature.jpg"  alt="Jaula para aves medianas Topnature 852" title="Jaula para aves medianas Topnature 852" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-topnature-852.html" title="Jaula para aves medianas Topnature 852"><b>Jaula para aves medianas Topnature 852</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															39,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-medianas-topnature-852.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3448/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaulita ideal para todo tipo de aves medianas, especialmente cotorras. Incluye dos saltadores + comedero + bebedero. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Color azul. Bandeja extraíble. Ver más info para ver foto con mejor detalle. Espacio entre barrotes: 2cm. Medidas: 58x36x52cm.                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-topnature-852.html" title="Jaula para aves medianas Topnature 852">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-611.html" title="Jaula para aves medianas Voltrega 611">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_mod611_blanca.jpg"  alt="Jaula para aves medianas Voltrega 611" title="Jaula para aves medianas Voltrega 611" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-611.html" title="Jaula para aves medianas Voltrega 611"><b>Jaula para aves medianas Voltrega 611</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>29,90&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 26.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-611.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4029/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completa jaula apta para todo tipo de aves pequeñas y medianas. Realizada con pintura apoxi sin plomo. Accesorios plástico de propileno. Incluye columpio, 2 comederos, cubeta y 4 saltadores. En color blanco con accesorios en pistacho y fucsia. Medidas: 50,5x28x37,5 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-611.html" title="Jaula para aves medianas Voltrega 611">Saber más</a><br><br>
					<span class="required"><strong>10% de Dto exclusivo online! Ahorra 2.95&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-648b.html" title="Jaula para aves medianas Voltrega 648B">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref648_blanca.jpg"  alt="Jaula para aves medianas Voltrega 648B" title="Jaula para aves medianas Voltrega 648B" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-648b.html" title="Jaula para aves medianas Voltrega 648B"><b>Jaula para aves medianas Voltrega 648B</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															34,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-648b.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1691/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaulita ideal para todo tipo de aves pequeñas y medianas, especialmente cotorras, ninfas, diamantes, etc. Incluye dos saltadores + comedero + bebedero + columpio. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Color azul con barrotes blancos.  Bandeja extraíble. Ver más info para ver foto con mejor detalle. Medidas: 39 x 25,5 x 54 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-648b.html" title="Jaula para aves medianas Voltrega 648B">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-852.html" title="Jaula para aves medianas Voltrega 852">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_loro_mod852_blanca_2.jpg"  alt="Jaula para aves medianas Voltrega 852" title="Jaula para aves medianas Voltrega 852" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-852.html" title="Jaula para aves medianas Voltrega 852"><b>Jaula para aves medianas Voltrega 852</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>44,90&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 39.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-852.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5455/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaulita ideal para todo tipo de aves medianas, especialmente cotorras. Incluye dos saltadores + comedero + bebedero. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Color gris. Bandeja extraíble. Ver más info para ver foto con mejor detalle. Espacio entre barrotes: 2cm. Medidas: 58x36x52cm.                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-medianas-voltrega-852.html" title="Jaula para aves medianas Voltrega 852">Saber más</a><br><br>
					<span class="required"><strong>11% de Dto exclusivo online! Ahorra 4.95&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-topnature-641.html" title="Jaula para aves pequeñas Topnature 641">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref641_topnature.jpg"  alt="Jaula para aves pequeñas Topnature 641" title="Jaula para aves pequeñas Topnature 641" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-topnature-641.html" title="Jaula para aves pequeñas Topnature 641"><b>Jaula para aves pequeñas Topnature 641</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-peque-as-topnature-641.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3449/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaulita ideal para todo tipo de aves pequeñas, como periquitos, canarios o diamantes. Incluye dos saltadores + columpio + comedero + bebedero + asa. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Color azul. Bandeja extraíble. Ver más info para ver foto con mejor detalle. Medidas: 39x25,5x45cm                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-topnature-641.html" title="Jaula para aves pequeñas Topnature 641">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-topnature-716.html" title="Jaula para aves pequeñas Topnature 716">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref716_topnature.jpg"  alt="Jaula para aves pequeñas Topnature 716" title="Jaula para aves pequeñas Topnature 716" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-topnature-716.html" title="Jaula para aves pequeñas Topnature 716"><b>Jaula para aves pequeñas Topnature 716</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-ave-peque-a-topnature-716.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3447/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente pensada para todo tipo de pequeñas aves. Incluye casquete para colgarla, columpio, 2 comederos, cubeta extraíble y dos saltadores. Pintura apoxi sin plomo. Accesorios plástico polipropileno. En color azul. Ver + info para verla con mayor detalle. Medidas: Ø31,5 x 40 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-topnature-716.html" title="Jaula para aves pequeñas Topnature 716">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-641-gris.html" title="Jaula para aves pequeñas Voltrega 641 gris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref641_gris.jpg"  alt="Jaula para aves pequeñas Voltrega 641 gris" title="Jaula para aves pequeñas Voltrega 641 gris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-641-gris.html" title="Jaula para aves pequeñas Voltrega 641 gris"><b>Jaula para aves pequeñas Voltrega 641 gris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-641-gris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4617/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaulita ideal para todo tipo de aves pequeñas, como periquitos, canarios o diamantes. Incluye dos saltadores + columpio + comedero + bebedero + asa. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Color verde y gris. Bandeja extraíble. Ver más info para ver foto con mejor detalle. Medidas: 39x25,5x45cm                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-641-gris.html" title="Jaula para aves pequeñas Voltrega 641 gris">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-voltrega-642-blanca.html" title="Jaula para aves pequeñas Voltrega 642 (Blanca)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_mod642_blanca_2.jpg"  alt="Jaula para aves pequeñas Voltrega 642 (Blanca)" title="Jaula para aves pequeñas Voltrega 642 (Blanca)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-voltrega-642-blanca.html" title="Jaula para aves pequeñas Voltrega 642 (Blanca)"><b>Jaula para aves pequeñas Voltrega 642 (Blanca)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-ave-peque-a-voltrega-642-blanca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1920/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula diseñada para todo tipo de aves pequeñas. Pintura apoxi sin plomo. Acesorios plástico polipropileno. Incluye: asa + columpio + comedero + bebedero + saltador + bandeja extraíble para una mejor limpieza. Ver foto 2 para mejor detalle. Medidas: 41*25,5*48 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-voltrega-642-blanca.html" title="Jaula para aves pequeñas Voltrega 642 (Blanca)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-649g.html" title="Jaula para aves pequeñas Voltrega 649G">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref649_gris.jpg"  alt="Jaula para aves pequeñas Voltrega 649G" title="Jaula para aves pequeñas Voltrega 649G" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-649g.html" title="Jaula para aves pequeñas Voltrega 649G"><b>Jaula para aves pequeñas Voltrega 649G</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															36,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-649g.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1291/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para aves pequeñas como canarios, periquitos, diamantes, etc. Realizada en pintura apoxi sin plomo. Accesorios plástico polipropileno. Apta para todos los pájaros. Fabricada en España. Incluye: Comedero + bebedero + 2 saltadores + cubeta extraíble + columpio. Base turquesa con barrotes plateados (mate). Ver foto 2 para mejor detalle. Medidas: 44,5 x 25,5 x 51,5 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-649g.html" title="Jaula para aves pequeñas Voltrega 649G">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-671b.html" title="Jaula para aves pequeñas Voltrega 671B">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref671_blanca.jpg"  alt="Jaula para aves pequeñas Voltrega 671B" title="Jaula para aves pequeñas Voltrega 671B" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-671b.html" title="Jaula para aves pequeñas Voltrega 671B"><b>Jaula para aves pequeñas Voltrega 671B</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															35,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-671b.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4570/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para aves pequeñas como canarios, periquitos, diamantes, etc. Realizada en pintura apoxi sin plomo. Accesorios plástico polipropileno. Apta para todos los pájaros. Fabricada en España. Incluye: Comedero + bebedero + 2 saltadores + cubeta extraíble + columpio + base trasera metálica con detalle de dos pajaritos. En color gris y blanco. Medidas: 41,5x25,5x48,5cm.                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-671b.html" title="Jaula para aves pequeñas Voltrega 671B">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-672b.html" title="Jaula para aves pequeñas Voltrega 672B">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref672_blanca.jpg"  alt="Jaula para aves pequeñas Voltrega 672B" title="Jaula para aves pequeñas Voltrega 672B" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-672b.html" title="Jaula para aves pequeñas Voltrega 672B"><b>Jaula para aves pequeñas Voltrega 672B</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															46,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-672b.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1685/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para aves pequeñas como canarios, periquitos, diamantes, etc. Realizada en pintura apoxi sin plomo. Accesorios plástico polipropileno. Apta para todos los pájaros. Fabricada en España. Incluye: Comedero + bebedero + 2 saltadores + cubeta extraíble + columpio + base trasera metálica con detalle de dos pajaritos. En color gris y blanco. Medidas: 52,5 x 28 x 55,5 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-aves-peque-as-voltrega-672b.html" title="Jaula para aves pequeñas Voltrega 672B">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-ave-voltrega-716-blanca.html" title="Jaula para aves pequeñas Voltrega 716 (3 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_mod716.jpg"  alt="Jaula para aves pequeñas Voltrega 716 (3 colores)" title="Jaula para aves pequeñas Voltrega 716 (3 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-ave-voltrega-716-blanca.html" title="Jaula para aves pequeñas Voltrega 716 (3 colores)"><b>Jaula para aves pequeñas Voltrega 716 (3 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-ave-voltrega-716-blanca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2979/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente pensada para todo tipo de pequeñas aves. Incluye casquete para colgarla, columpio, 2 comederos, cubeta extraíble y dos saltadores. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Disponible en 3 colores. Medidas: Ø31,5 x 40 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-ave-voltrega-716-blanca.html" title="Jaula para aves pequeñas Voltrega 716 (3 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-ave-peque-a-736-blanca.html" title="Jaula para aves pequeñas Voltrega 736 (Blanca)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_mod736_blanca_3.jpg"  alt="Jaula para aves pequeñas Voltrega 736 (Blanca)" title="Jaula para aves pequeñas Voltrega 736 (Blanca)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-ave-peque-a-736-blanca.html" title="Jaula para aves pequeñas Voltrega 736 (Blanca)"><b>Jaula para aves pequeñas Voltrega 736 (Blanca)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															30,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-ave-peque-a-736-blanca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1575/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaulita ideal para todo tipo de aves pequeñas, tales como canarios, periquitos, diamantes, etc. Incluye dos saltadores + columpio + comedero + bebedero. Bandeja extraíble. Color blanco. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Apta para todo tipo de pájaros. Con gancho superior que permite colgarla de un pie. Medidas: Ø32.5x48cm                    <a href="http://www.misterguau.com/index.php/jaula-ave-peque-a-736-blanca.html" title="Jaula para aves pequeñas Voltrega 736 (Blanca)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-736-fuscia.html" title="Jaula para aves pequeñas Voltrega 736 (Fucsia)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref736_gris-fucsia.jpg"  alt="Jaula para aves pequeñas Voltrega 736 (Fucsia)" title="Jaula para aves pequeñas Voltrega 736 (Fucsia)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-736-fuscia.html" title="Jaula para aves pequeñas Voltrega 736 (Fucsia)"><b>Jaula para aves pequeñas Voltrega 736 (Fucsia)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															30,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-ave-peque-a-736-fuscia.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2544/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaulita ideal para todo tipo de aves pequeñas, tales como canarios, periquitos, diamantes, etc. Incluye dos saltadores + columpio + comedero + bebedero. Color fucsia con barrotes cromados. Bandeja extraíble. Medidas: Ø32.5x48cm                    <a href="http://www.misterguau.com/index.php/jaula-para-ave-peque-a-736-fuscia.html" title="Jaula para aves pequeñas Voltrega 736 (Fucsia)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-ave-peque-a-736-pistacho.html" title="Jaula para aves pequeñas Voltrega 736 (Pistacho)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_pajaro_ref736_gris-pistacho.jpg"  alt="Jaula para aves pequeñas Voltrega 736 (Pistacho)" title="Jaula para aves pequeñas Voltrega 736 (Pistacho)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-ave-peque-a-736-pistacho.html" title="Jaula para aves pequeñas Voltrega 736 (Pistacho)"><b>Jaula para aves pequeñas Voltrega 736 (Pistacho)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															28,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-ave-peque-a-736-pistacho.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2543/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaulita ideal para todo tipo de aves pequeñas, tales como canarios, periquitos, diamantes, etc. Incluye dos saltadores + columpio + comedero + bebedero. Color pistacho con barrotes cromados. Bandeja extraíble. Medidas: Ø32.5x48cm                    <a href="http://www.misterguau.com/index.php/jaula-ave-peque-a-736-pistacho.html" title="Jaula para aves pequeñas Voltrega 736 (Pistacho)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-loro-891.html" title="Jaula para loro Voltrega 891 ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_para_loro_voltrega_891.jpg"  alt="Jaula para loro Voltrega 891 " title="Jaula para loro Voltrega 891 " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-loro-891.html" title="Jaula para loro Voltrega 891 "><b>Jaula para loro Voltrega 891 </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															222,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-loro-891.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1793/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ideal para todo tipo de loros. Con comederos exteriores e interiores y saltadores. En color cromado, madera y ruedas. Incluye 4 comederos + 2 saltadores + bandeja extraible inferior y superior + ruedas + puente. Fabricación nacional de alta calidad y resistencia. Click en foto 2 para verla con mejor detalle. Disponible en 48-72h. Tamaño: 75x75x156cm.                     <a href="http://www.misterguau.com/index.php/jaula-para-loro-891.html" title="Jaula para loro Voltrega 891 ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-loro-892.html" title="Jaula para loro Voltrega 892">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_para_loro_voltrega_892.jpg"  alt="Jaula para loro Voltrega 892" title="Jaula para loro Voltrega 892" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-loro-892.html" title="Jaula para loro Voltrega 892"><b>Jaula para loro Voltrega 892</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															304,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-loro-892.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1794/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ideal para todo tipo de loros. Con comederos exteriores e interiores y saltadores. En color cromado, madera y ruedas. Incluye: 5 comederos + 2 saltadores + bandeja extraible inferior y superior + ruedas + puente. Fabricación nacional de alta calidad y resistencia. Click en foto 2 para verla con mejor detalle. Disponible en 48-72h. Tamaño:100x75x156cm                    <a href="http://www.misterguau.com/index.php/jaula-para-loro-892.html" title="Jaula para loro Voltrega 892">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-loros-eden.html" title="Jaula para loros Eden">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_loro_eden_codpa10014_1.jpg"  alt="Jaula para loros Eden" title="Jaula para loros Eden" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-loros-eden.html" title="Jaula para loros Eden"><b>Jaula para loros Eden</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															145,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-loros-eden.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4622/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completa jaula para todo tipo de loros y loritos (Yacos, ninfas, cacatúas, etc). Amplia, robusta, alta y vistosa.  Incluye la base con estantería inferior, las ruedas y todos los accesorios de la foto (comederos, saltadores, etc). Con apertura frontal y superior que se convierte en una zona de recreo fuera de la jaula. Inoxidable. Bandeja extraíble. Distancia entre barrotes: 1.5cm. En color gris antracita. Medidas: 56*43*154cm                    <a href="http://www.misterguau.com/index.php/jaula-para-loros-eden.html" title="Jaula para loros Eden">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ny-jibia-de-sepia.html" title="Jibia de Sepia NY">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/u/hueso_de_sepia_5051_1.jpg"  alt="Jibia de Sepia NY" title="Jibia de Sepia NY" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ny-jibia-de-sepia.html" title="Jibia de Sepia NY"><b>Jibia de Sepia NY</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ny-jibia-de-sepia.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1310/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Hueso de sepia para todo tipo de aves pequeñas (canario, periquito, silvestres, mandarines, etc). Rico en sales minerales y calcio, indispensable para mantener un pico lustroso en las pequeñas aves.                    <a href="http://www.misterguau.com/index.php/ny-jibia-de-sepia.html" title="Jibia de Sepia NY">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jibia-de-sepia-vitakraft-pack-2-unidades.html" title="Jibia de Sepia Vitakraft (Pack 2 unidades)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_sepia_pajaros_vitkraft_2uds_11049.jpg"  alt="Jibia de Sepia Vitakraft (Pack 2 unidades)" title="Jibia de Sepia Vitakraft (Pack 2 unidades)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jibia-de-sepia-vitakraft-pack-2-unidades.html" title="Jibia de Sepia Vitakraft (Pack 2 unidades)"><b>Jibia de Sepia Vitakraft (Pack 2 unidades)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jibia-de-sepia-vitakraft-pack-2-unidades.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4791/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Hueso de sepia para todo tipo de aves pequeñas (canario, periquito, silvestres, mandarines, etc). Rico en sales minerales y calcio, indispensable para mantener un pico lustroso en las pequeñas aves. Pack de 2 unidades.                    <a href="http://www.misterguau.com/index.php/jibia-de-sepia-vitakraft-pack-2-unidades.html" title="Jibia de Sepia Vitakraft (Pack 2 unidades)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-ave-natural-stick-con-cuerda-2-medidas.html" title="Juguete para ave Natural Stick con cuerda (2 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_8.jpg"  alt="Juguete para ave Natural Stick con cuerda (2 medidas)" title="Juguete para ave Natural Stick con cuerda (2 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-ave-natural-stick-con-cuerda-2-medidas.html" title="Juguete para ave Natural Stick con cuerda (2 medidas)"><b>Juguete para ave Natural Stick con cuerda (2 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-ave-natural-stick-con-cuerda-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4616/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete para aves pequeñas y medianas completamente realizado en materiales naturales, como madera y algodón. Gracias a su diseño entretendrá y creará diversión en la jaula de nuestra ave, a la vez que le servirá de saltador. Ideal para que afilen su pico. Con palometa inox para colgarla de cualquier tipo de jaula. Disponible en dos medidas: S (20cm.-Ø 23mm) - M (25cm. Ø 25mm.﻿﻿)                    <a href="http://www.misterguau.com/index.php/juguete-para-ave-natural-stick-con-cuerda-2-medidas.html" title="Juguete para ave Natural Stick con cuerda (2 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-ave-natural-swing-16cm.html" title="Juguete para ave Natural Swing (16cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/natural_swing_16x16x16cm_-_pa30046.jpg"  alt="Juguete para ave Natural Swing (16cm)" title="Juguete para ave Natural Swing (16cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-ave-natural-swing-16cm.html" title="Juguete para ave Natural Swing (16cm)"><b>Juguete para ave Natural Swing (16cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-ave-natural-swing-16cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4618/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete para aves pequeñas y medianas completamente realizado en materiales naturales, como madera y algodón. Gracias a su diseño entretendrá y creará diversión en la jaula de nuestra ave. Ideal para que afilen su pico y se lo pasen en grande!. Con gancho cromado para colgarla de cualquier tipo de jaula. Medidas: 16x16x16cm                    <a href="http://www.misterguau.com/index.php/juguete-para-ave-natural-swing-16cm.html" title="Juguete para ave Natural Swing (16cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-aves-medianas-kabob-combo.html" title="Juguete para aves medianas Kabob Combo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/combo_kabob_p_24x9cm_53105.jpg"  alt="Juguete para aves medianas Kabob Combo" title="Juguete para aves medianas Kabob Combo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-aves-medianas-kabob-combo.html" title="Juguete para aves medianas Kabob Combo"><b>Juguete para aves medianas Kabob Combo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-aves-medianas-kabob-combo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5474/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completísimo juguete colgante para aves medianas como cotorras, etc. Mezcla elementos de tela con plástico no tóxicos y otros para limar el pico. Con campanita y gancho para poderlo colgar de donde se quiera en la jaula. Medidas: 24*9cm                    <a href="http://www.misterguau.com/index.php/juguete-para-aves-medianas-kabob-combo.html" title="Juguete para aves medianas Kabob Combo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-aves-medianas-kabob-natural.html" title="Juguete para aves medianas Kabob Natural">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/natural_kabob_18cm_53107.jpg"  alt="Juguete para aves medianas Kabob Natural" title="Juguete para aves medianas Kabob Natural" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-aves-medianas-kabob-natural.html" title="Juguete para aves medianas Kabob Natural"><b>Juguete para aves medianas Kabob Natural</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-aves-medianas-kabob-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5475/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completísimo juguete colgante para aves medianas como cotorras, etc. Mezcla elementos de madera y una campanita y gancho para poderlo colgar de donde se quiera en la jaula. Medidas: 18cm                    <a href="http://www.misterguau.com/index.php/juguete-para-aves-medianas-kabob-natural.html" title="Juguete para aves medianas Kabob Natural">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-aves-natural-climb-2-tama-os.html" title="Juguete para aves Natural Climb (2 tamaños)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/natural_climb_27cm505x-zz-pa30041.jpg"  alt="Juguete para aves Natural Climb (2 tamaños)" title="Juguete para aves Natural Climb (2 tamaños)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-aves-natural-climb-2-tama-os.html" title="Juguete para aves Natural Climb (2 tamaños)"><b>Juguete para aves Natural Climb (2 tamaños)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-aves-natural-climb-2-tama-os.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4385/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete especialmente diseñado para aquellas aves que les gusta escalar con el pico y patas, como periquitos, cotorritas, etc. Realizado en madera totalmente natural que también ayudará a desgastar su pido. Con 5 escalones para trepar y gancho superior para colgarlo de la jaula. 2 Medidas: 27cm - 47cm.                    <a href="http://www.misterguau.com/index.php/juguete-para-aves-natural-climb-2-tama-os.html" title="Juguete para aves Natural Climb (2 tamaños)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-aves-peque-as-columpio-bells.html" title="Juguete para aves pequeñas Columpio Bells">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/columpio_bells_53123.jpg"  alt="Juguete para aves pequeñas Columpio Bells" title="Juguete para aves pequeñas Columpio Bells" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-aves-peque-as-columpio-bells.html" title="Juguete para aves pequeñas Columpio Bells"><b>Juguete para aves pequeñas Columpio Bells</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-aves-peque-as-columpio-bells.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5476/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completísimo juguete colgante para aves pequeñas como periquitos, etc. Mezcla elementos de madera, plásticos, de cuerda y dos campanitas y gancho para poderlo colgar de donde se quiera en la jaula. Medidas: 11 * 19cm                    <a href="http://www.misterguau.com/index.php/juguete-para-aves-peque-as-columpio-bells.html" title="Juguete para aves pequeñas Columpio Bells">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-cotorra-acrilico-foss.html" title="Juguete para cotorra acrílico Foss">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_10_2.jpg"  alt="Juguete para cotorra acrílico Foss" title="Juguete para cotorra acrílico Foss" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-cotorra-acrilico-foss.html" title="Juguete para cotorra acrílico Foss"><b>Juguete para cotorra acrílico Foss</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>11,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 7.7&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-cotorra-acrilico-foss.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4046/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Completo juguete para cotorras o agapornis. Muy completo porque incluye una parte de algodón, piezas de plástico acrílico como el aro o las piezas inferiores y que emiten reflejos y sonido que atraerán a nuestra ave. Colores surtidos. Medidas: 13,5x6x17cm                    <a href="http://www.misterguau.com/index.php/juguete-para-cotorra-acrilico-foss.html" title="Juguete para cotorra acrílico Foss">Saber más</a><br><br>
					<span class="required"><strong>30% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-loro-madera-4-lianas.html" title="Juguete para loro madera 4 lianas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/u/juguete_loro_madera_con_4_cuerdas_color_108612.jpg"  alt="Juguete para loro madera 4 lianas" title="Juguete para loro madera 4 lianas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-loro-madera-4-lianas.html" title="Juguete para loro madera 4 lianas"><b>Juguete para loro madera 4 lianas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>13,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 11.05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-loro-madera-4-lianas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4677/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete especialmente formulado para loros y aves medianas. Realizada a base de cuerdas y trozos de madera con formas redondeadas y de alegres colores. A la vez que juega podrá limar su pico. Con gancho superior para poderlo enganchar en todo tipo de jaulas. Medidas: +/- 55 cm x diametro de 14cm.                    <a href="http://www.misterguau.com/index.php/juguete-para-loro-madera-4-lianas.html" title="Juguete para loro madera 4 lianas">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-pericos-y-cotorras-mirror-play-3-modelos.html" title="Juguete para pericos y cotorras Mirror Play (3 modelos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/u/jug_para_perico_mirror_surt.jpg"  alt="Juguete para pericos y cotorras Mirror Play (3 modelos)" title="Juguete para pericos y cotorras Mirror Play (3 modelos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-pericos-y-cotorras-mirror-play-3-modelos.html" title="Juguete para pericos y cotorras Mirror Play (3 modelos)"><b>Juguete para pericos y cotorras Mirror Play (3 modelos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-pericos-y-cotorras-mirror-play-3-modelos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4047/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete plástico completamente rebosante de espejos. Para periquitos y cotorras o agapornis que adoran los reflejos de los espejos. Con diferentes piezas plásticas y campanitas que emiten sonido y tendrán muy entretenida a nuestra ave. 3 modelos a elegir. Medidas: Ø5x15cm                    <a href="http://www.misterguau.com/index.php/juguete-para-pericos-y-cotorras-mirror-play-3-modelos.html" title="Juguete para pericos y cotorras Mirror Play (3 modelos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-periquito-columpio-con-cascabel.html" title="Juguete para periquito columpio con cascabel ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/u/juguete_perico_espejo_con_cascabel.jpg"  alt="Juguete para periquito columpio con cascabel " title="Juguete para periquito columpio con cascabel " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-periquito-columpio-con-cascabel.html" title="Juguete para periquito columpio con cascabel "><b>Juguete para periquito columpio con cascabel </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,65&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-periquito-columpio-con-cascabel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3060/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Super-juguete especialmente diseñado para una total diversión de nuestro periquito! Con columpio con doble resposador, espejito, bolitas móviles y campana. El juguete definitivo para nuestra pequeña ave. Realizada en alegres y decorativos colores. Tamaño: 12x7x16,5cm                    <a href="http://www.misterguau.com/index.php/juguete-para-periquito-columpio-con-cascabel.html" title="Juguete para periquito columpio con cascabel ">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-para-periquito-party-parakeet-pack-de-3.html" title="Juguete para periquito Party Parakeet (Pack de 3)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/u/juguete_perico_anillo_pelota_o_farol_100317-b.jpg"  alt="Juguete para periquito Party Parakeet (Pack de 3)" title="Juguete para periquito Party Parakeet (Pack de 3)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-para-periquito-party-parakeet-pack-de-3.html" title="Juguete para periquito Party Parakeet (Pack de 3)"><b>Juguete para periquito Party Parakeet (Pack de 3)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,30&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-para-periquito-party-parakeet-pack-de-3.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4788/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pack de 3 juguetes definitivos para que nuestro periquito tenga toda la diversión en su jaula!  Incluye un farolito con espejo del cual cuelga un cascabel y que encantará a nuestro periquito + cascada de bolitas con cascabel + cascada de aros con cascabel, todas con gancho superior. Se presenta emblistado y en colores surtidos. Medidas: De 5 a 25cm.                    <a href="http://www.misterguau.com/index.php/juguete-para-periquito-party-parakeet-pack-de-3.html" title="Juguete para periquito Party Parakeet (Pack de 3)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-periquito-con-anillo.html" title="Juguete Periquito con anillo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/u/juguete_periquito_con_anillo_100929.jpg"  alt="Juguete Periquito con anillo" title="Juguete Periquito con anillo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-periquito-con-anillo.html" title="Juguete Periquito con anillo"><b>Juguete Periquito con anillo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-periquito-con-anillo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3644/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete para nuestro periquito. Recrea un periquito en plástico no tóxico y apto para nuestra pequeña ave. Con un contrapeso en la parte inferior y un orificio para pasarlo por el reposa-aves y que de esta manera se mueva adelante y atrás cuando nuestro periquito juegue con él, animándole y haciéndole mas gratificante los juegos. Colores surtidos. Medidas: 14cm.                    <a href="http://www.misterguau.com/index.php/juguete-periquito-con-anillo.html" title="Juguete Periquito con anillo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-red-natural-kebob-30cm.html" title="Juguete Red natural Kebob (30cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_74.jpg"  alt="Juguete Red natural Kebob (30cm)" title="Juguete Red natural Kebob (30cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-red-natural-kebob-30cm.html" title="Juguete Red natural Kebob (30cm)"><b>Juguete Red natural Kebob (30cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>12,85&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 9.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-red-natural-kebob-30cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5035/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete para aves medianas totalmente natural realizada en resistente crin y con juguetes de madera y borlas de algodón para que nuestra ave se entretenga. Con gancho para colgarlo de la jaula. Medidas: 30cm                    <a href="http://www.misterguau.com/index.php/juguete-red-natural-kebob-30cm.html" title="Juguete Red natural Kebob (30cm)">Saber más</a><br><br>
					<span class="required"><strong>23% de Dto! Ahorra 2.90&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-red-natural-kebob-52cm.html" title="Juguete Red natural Kebob (52cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/e/red_natural_kabob_grande_52cm_53119.jpg"  alt="Juguete Red natural Kebob (52cm)" title="Juguete Red natural Kebob (52cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-red-natural-kebob-52cm.html" title="Juguete Red natural Kebob (52cm)"><b>Juguete Red natural Kebob (52cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>17,55&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 12.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-red-natural-kebob-52cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5036/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete para aves medianas totalmente natural realizada en resistente crin y con juguetes de madera y borlas de algodón para que nuestra ave se entretenga. Con gancho para colgarlo de la jaula. Medidas: 52cm                    <a href="http://www.misterguau.com/index.php/juguete-red-natural-kebob-52cm.html" title="Juguete Red natural Kebob (52cm)">Saber más</a><br><br>
					<span class="required"><strong>26% de Dto! Ahorra 4.60&euro;! <br><br></strong></span>

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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-citrico.html" title="Limpiador bactericida ZeroBakter (Cítrico)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/e/zerobakter_500ml_citrico.jpg"  alt="Limpiador bactericida ZeroBakter (Cítrico)" title="Limpiador bactericida ZeroBakter (Cítrico)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-citrico.html" title="Limpiador bactericida ZeroBakter (Cítrico)"><b>Limpiador bactericida ZeroBakter (Cítrico)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>6,70&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 4.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-citrico.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3985/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto perfecto para limpiar y desinfectar las jaulas y favorecer el bienestar y la salud de nuestra mascotas. Diseñado para higienizar, contiene agentes bactericidas y fungicidas que limpian y a la vez desinfectan la jaula de manera efectiva. Podremos tener la jaula y los accesorios limpios de bacterias, virus y hongos. Formato: 500ml.                    <a href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-citrico.html" title="Limpiador bactericida ZeroBakter (Cítrico)">Saber más</a><br><br>
					<span class="required"><strong>26% Dto! Ahorra 1.75&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-lavanda.html" title="Limpiador bactericida ZeroBakter (Lavanda)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/e/zerobakter_500ml_lavanda.jpg"  alt="Limpiador bactericida ZeroBakter (Lavanda)" title="Limpiador bactericida ZeroBakter (Lavanda)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-lavanda.html" title="Limpiador bactericida ZeroBakter (Lavanda)"><b>Limpiador bactericida ZeroBakter (Lavanda)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>6,70&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 4.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-lavanda.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5485/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto perfecto para limpiar y desinfectar las jaulas y favorecer el bienestar y la salud de nuestra mascotas. Diseñado para higienizar, contiene agentes bactericidas y fungicidas que limpian y a la vez desinfectan la jaula de manera efectiva. Podremos tener la jaula y los accesorios limpios de bacterias, virus y hongos. Formato: 500ml.                    <a href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-lavanda.html" title="Limpiador bactericida ZeroBakter (Lavanda)">Saber más</a><br><br>
					<span class="required"><strong>26% Dto! Ahorra 1.75&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-neutro.html" title="Limpiador bactericida ZeroBakter (Neutro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/z/e/zerobakter_500ml_neutro.jpg"  alt="Limpiador bactericida ZeroBakter (Neutro)" title="Limpiador bactericida ZeroBakter (Neutro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-neutro.html" title="Limpiador bactericida ZeroBakter (Neutro)"><b>Limpiador bactericida ZeroBakter (Neutro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>6,70&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 4.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-neutro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2708/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto perfecto para limpiar y desinfectar las jaulas y favorecer el bienestar y la salud de nuestra mascotas. Diseñado para higienizar, contiene agentes bactericidas y fungicidas que limpian y a la vez desinfectan la jaula de manera efectiva. Podremos tener la jaula y los accesorios limpios de bacterias, virus y hongos. Formato: 500ml.                    <a href="http://www.misterguau.com/index.php/limpiador-bactericida-zerobakter-neutro.html" title="Limpiador bactericida ZeroBakter (Neutro)">Saber más</a><br><br>
					<span class="required"><strong>26% Dto! Ahorra 1.75&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/mijo-natural-vita-nature-vitakraft.html" title="Mijo natural Vita Nature Vitakraft">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_espigas_de_mijo_bolsa_21297.jpg"  alt="Mijo natural Vita Nature Vitakraft" title="Mijo natural Vita Nature Vitakraft" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/mijo-natural-vita-nature-vitakraft.html" title="Mijo natural Vita Nature Vitakraft"><b>Mijo natural Vita Nature Vitakraft</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/mijo-natural-vita-nature-vitakraft.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4792/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mijo totalmente natural cosechado y cuidadosamente secado. Comida ligera que contiene, entre otros, vitamina B natural y es perfecto como complemento de la dieta de nuestras pequeñas aves. 100% natural. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/mijo-natural-vita-nature-vitakraft.html" title="Mijo natural Vita Nature Vitakraft">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-casita-grande-l.html" title="Nido casita grande (L)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_casita_grande_cod4011.jpg"  alt="Nido casita grande (L)" title="Nido casita grande (L)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-casita-grande-l.html" title="Nido casita grande (L)"><b>Nido casita grande (L)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-casita-grande-l.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5461/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido casita realizado en madera para favorecer que las aves silvestres aniden en nuestros jardines o exterior. Con tejado impermeable para repeler el agua de la lluvia., Realizado en madera y con escalerita de entrada. Medidas:  31x17x21,5cm.                    <a href="http://www.misterguau.com/index.php/nido-casita-grande-l.html" title="Nido casita grande (L)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-casita-peque-o-m.html" title="Nido casita mediano (M)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_casita_mediana_cod4010.jpg"  alt="Nido casita mediano (M)" title="Nido casita mediano (M)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-casita-peque-o-m.html" title="Nido casita mediano (M)"><b>Nido casita mediano (M)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-casita-peque-o-m.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5460/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido casita realizado en madera para favorecer que las aves silvestres aniden en nuestros jardines o exterior. Con tejado impermeable para repeler el agua de la lluvia., Realizado en madera y con escalerita de entrada. Medidas:  22,5x17x21,5cm.                    <a href="http://www.misterguau.com/index.php/nido-casita-peque-o-m.html" title="Nido casita mediano (M)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-casita-peque-o-s.html" title="Nido casita pequeño (S)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_2.jpg"  alt="Nido casita pequeño (S)" title="Nido casita pequeño (S)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-casita-peque-o-s.html" title="Nido casita pequeño (S)"><b>Nido casita pequeño (S)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-casita-peque-o-s.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5459/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido casita realizado en madera para favorecer que las aves silvestres aniden en nuestros jardines o exterior. Con tejado impermeable para repeler el agua de la lluvia., Realizado en madera y con escalerita de entrada. Medidas: 15,5x17x22cm.                    <a href="http://www.misterguau.com/index.php/nido-casita-peque-o-s.html" title="Nido casita pequeño (S)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-de-esparto-rsl-111.html" title="Nido de esparto RSL 111">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_esparto_rsl_111nid.jpg"  alt="Nido de esparto RSL 111" title="Nido de esparto RSL 111" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-de-esparto-rsl-111.html" title="Nido de esparto RSL 111"><b>Nido de esparto RSL 111</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-de-esparto-rsl-111.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4724/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido para canarios realizado con esparto. Medidas:  Ø10 x 5 cm                    <a href="http://www.misterguau.com/index.php/nido-de-esparto-rsl-111.html" title="Nido de esparto RSL 111">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-de-madera-para-agapornis-ny.html" title="Nido de madera para agapornis NY">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_madera_agaporni_tricolor.jpg"  alt="Nido de madera para agapornis NY" title="Nido de madera para agapornis NY" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-de-madera-para-agapornis-ny.html" title="Nido de madera para agapornis NY"><b>Nido de madera para agapornis NY</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-de-madera-para-agapornis-ny.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4693/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido de madera especialmente diseñado para el tamaño de los agapornis y aves de tamaño similar. Con bisagras superiores para que podamos revisar el interior sin demasiadas molestias. Con soporte reposa-aves. En divertidos colores. Medidas: 22x18,5x16,5cm                    <a href="http://www.misterguau.com/index.php/nido-de-madera-para-agapornis-ny.html" title="Nido de madera para agapornis NY">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-de-madera-para-cotorras-ny.html" title="Nido de madera para cotorras NY">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_madera_cotorra_tricolor.jpg"  alt="Nido de madera para cotorras NY" title="Nido de madera para cotorras NY" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-de-madera-para-cotorras-ny.html" title="Nido de madera para cotorras NY"><b>Nido de madera para cotorras NY</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-de-madera-para-cotorras-ny.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4694/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido de madera especialmente diseñado para el tamaño de las cotorritas y aves de tamaño similar. Con bisagras superiores para que podamos revisar el interior sin demasiadas molestias. Con soporte reposa-aves. En divertidos colores. Medidas: 27x20,5x18cm.                    <a href="http://www.misterguau.com/index.php/nido-de-madera-para-cotorras-ny.html" title="Nido de madera para cotorras NY">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-de-madera-para-periquito-ny.html" title="Nido de madera para periquito NY">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_madera_periquito_tricolor.jpg"  alt="Nido de madera para periquito NY" title="Nido de madera para periquito NY" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-de-madera-para-periquito-ny.html" title="Nido de madera para periquito NY"><b>Nido de madera para periquito NY</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-de-madera-para-periquito-ny.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4692/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido de madera especialmente diseñado para periquitos y aves pequeñas. Con bisagras superiores para que podamos revisar el interior sin demasiadas molestias. Con soporte reposa-aves. En divertidos colores. Medidas: 22x13,5x11,5cm.                    <a href="http://www.misterguau.com/index.php/nido-de-madera-para-periquito-ny.html" title="Nido de madera para periquito NY">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-de-madera-redondo.html" title="Nido de madera Redondo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_madera_redondo_cod4019.jpg"  alt="Nido de madera Redondo" title="Nido de madera Redondo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-de-madera-redondo.html" title="Nido de madera Redondo"><b>Nido de madera Redondo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-de-madera-redondo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5464/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido casita realizado en madera para favorecer que nuestras aves aniden. Ideal para jaulas de interior. Realizado en madera y con forma curva. Con saltador para acceder. Medidas: 22x16x11,5cm.                    <a href="http://www.misterguau.com/index.php/nido-de-madera-redondo.html" title="Nido de madera Redondo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-de-madera-tipi.html" title="Nido de madera Tipi">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_tipi_cod4012.jpg"  alt="Nido de madera Tipi" title="Nido de madera Tipi" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-de-madera-tipi.html" title="Nido de madera Tipi"><b>Nido de madera Tipi</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-de-madera-tipi.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5463/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido casita realizado en madera para favorecer que las aves silvestres aniden en nuestros jardines o exterior. Con tejado impermeable para repeler el agua de la lluvia. Realizado en madera y saltadores de entrada. Medidas:  17,5x17x29cm.                    <a href="http://www.misterguau.com/index.php/nido-de-madera-tipi.html" title="Nido de madera Tipi">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-de-pita-natural-sandimas-o10cm.html" title="Nido de pita natural SanDimas (Ø10cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/i/nido_pita_normal_51024.jpg"  alt="Nido de pita natural SanDimas (Ø10cm)" title="Nido de pita natural SanDimas (Ø10cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-de-pita-natural-sandimas-o10cm.html" title="Nido de pita natural SanDimas (Ø10cm)"><b>Nido de pita natural SanDimas (Ø10cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-de-pita-natural-sandimas-o10cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4789/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido de pita para la cría de canarios y aves de similar tamaño. Fabricado con hebras de pita natural, con la forma y materiales más parecidos a los que estas pequeñas aves utilizan para hacerse el nido. Medidas: Ø10cm                    <a href="http://www.misterguau.com/index.php/nido-de-pita-natural-sandimas-o10cm.html" title="Nido de pita natural SanDimas (Ø10cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nido-para-aves-natural-box-2-medidas.html" title="Nido para aves Natural Box ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/natural_box_21x13x12cm_pa10004.jpg"  alt="Nido para aves Natural Box " title="Nido para aves Natural Box " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nido-para-aves-natural-box-2-medidas.html" title="Nido para aves Natural Box "><b>Nido para aves Natural Box </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nido-para-aves-natural-box-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4790/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nido totalmente realizado en madera natural para la cría de aves pequeñas o medianas. Con entrada redonda y reposa aves para facilitar la entrada. Medidas exteriores: L (30x20x20cm.﻿﻿)                    <a href="http://www.misterguau.com/index.php/nido-para-aves-natural-box-2-medidas.html" title="Nido para aves Natural Box ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ny-bebedero-pajaro.html" title="NY Bebedero Pájaro">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/e/bebedero_pajaro_ny.jpg"  alt="NY Bebedero Pájaro" title="NY Bebedero Pájaro" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ny-bebedero-pajaro.html" title="NY Bebedero Pájaro"><b>NY Bebedero Pájaro</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ny-bebedero-pajaro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1311/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico adaptable a la gran mayoría de jaulas. 3 Medidas: S (Pequeño) - M (Mediano) - L (Grande)                    <a href="http://www.misterguau.com/index.php/ny-bebedero-pajaro.html" title="NY Bebedero Pájaro">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pajarera-voltrega-420-desmontable.html" title="Pajarera Voltrega 420 desmontable">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/pajarera_ref420_desmontable.jpg"  alt="Pajarera Voltrega 420 desmontable" title="Pajarera Voltrega 420 desmontable" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pajarera-voltrega-420-desmontable.html" title="Pajarera Voltrega 420 desmontable"><b>Pajarera Voltrega 420 desmontable</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															99,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pajarera-voltrega-420-desmontable.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2980/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pintura apoxi sin plomo. Accesorios plástico polipropileno. Apta para todo tipo de pájaros y ardillas. Contiene dos comederos-bebederos de gran capacidad especialmente diseñados para jaulas con hilo horizontal. Con instrucciones de montaje en la caja y video de montaje en la web. Incluye 4 saltadores. Totalmente desmontable. Bandeja inferior extraíble. Con apertura frontal y 2 laterales. Color verde y gris. Tamaño: 65,5 x 54 x 150 cm                    <a href="http://www.misterguau.com/index.php/pajarera-voltrega-420-desmontable.html" title="Pajarera Voltrega 420 desmontable">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pajarera-voltrega-420-gris-fucsia.html" title="Pajarera Voltrega 430 (Gris-fucsia)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/pajarera_430_gris-fucsia.jpg"  alt="Pajarera Voltrega 430 (Gris-fucsia)" title="Pajarera Voltrega 430 (Gris-fucsia)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pajarera-voltrega-420-gris-fucsia.html" title="Pajarera Voltrega 430 (Gris-fucsia)"><b>Pajarera Voltrega 430 (Gris-fucsia)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															116,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pajarera-voltrega-420-gris-fucsia.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2985/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pajarera especialmente diseñada para todo tipo de aves pequeñas y medianas, así como ardillas o chinchillas. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Contiene dos comederos-bebederos de gran capacidad especialmente diseñado para la jaula de hilo horizontal. Con cubeta extraíble y 6 saltadores. Medidas: 79x67,5x167 cm                    <a href="http://www.misterguau.com/index.php/pajarera-voltrega-420-gris-fucsia.html" title="Pajarera Voltrega 430 (Gris-fucsia)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pajarera-voltrega-420-gris-grisoscuro.html" title="Pajarera Voltrega 430 (Gris-gris oscuro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/pajarera_430_gris-gris_oscuro.jpg"  alt="Pajarera Voltrega 430 (Gris-gris oscuro)" title="Pajarera Voltrega 430 (Gris-gris oscuro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pajarera-voltrega-420-gris-grisoscuro.html" title="Pajarera Voltrega 430 (Gris-gris oscuro)"><b>Pajarera Voltrega 430 (Gris-gris oscuro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															116,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pajarera-voltrega-420-gris-grisoscuro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2986/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pajarera especialmente diseñada para todo tipo de aves pequeñas y medianas, así como ardillas o chinchillas. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Contiene dos comederos-bebederos de gran capacidad especialmente diseñado para la jaula de hilo horizontal. Con cubeta extraíble y 6 saltadores. Medidas: 79x67,5x167 cm                    <a href="http://www.misterguau.com/index.php/pajarera-voltrega-420-gris-grisoscuro.html" title="Pajarera Voltrega 430 (Gris-gris oscuro)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pajarera-voltrega-430-gris-pistacho.html" title="Pajarera Voltrega 430 (Gris-pistacho)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/pajarera_430_gris-pistacho_2.jpg"  alt="Pajarera Voltrega 430 (Gris-pistacho)" title="Pajarera Voltrega 430 (Gris-pistacho)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pajarera-voltrega-430-gris-pistacho.html" title="Pajarera Voltrega 430 (Gris-pistacho)"><b>Pajarera Voltrega 430 (Gris-pistacho)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															116,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pajarera-voltrega-430-gris-pistacho.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4803/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pajarera especialmente diseñada para todo tipo de aves pequeñas y medianas, así como ardillas o chinchillas. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Contiene dos comederos-bebederos de gran capacidad especialmente diseñado para la jaula de hilo horizontal. Con cubeta extraíble y 6 saltadores. Medidas: 79x67,5x167 cm                    <a href="http://www.misterguau.com/index.php/pajarera-voltrega-430-gris-pistacho.html" title="Pajarera Voltrega 430 (Gris-pistacho)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/panizo-gran-pasto-para-aves.html" title="Panizo Gran Pasto para aves">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/r/gran_pasto_panizo_codo1070361.jpg"  alt="Panizo Gran Pasto para aves" title="Panizo Gran Pasto para aves" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/panizo-gran-pasto-para-aves.html" title="Panizo Gran Pasto para aves"><b>Panizo Gran Pasto para aves</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/panizo-gran-pasto-para-aves.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3765/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Proporciona a tus aves una dieta rica y variada con espigas de panizo, una semilla golosina que encanta a todo tipo de aves. Muy baja en grasas y digestiva. Formato: 250gr.                    <a href="http://www.misterguau.com/index.php/panizo-gran-pasto-para-aves.html" title="Panizo Gran Pasto para aves">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pasta-de-cria-amarilla-gran-pasto.html" title="Pasta de cría amarilla Gran pasto">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_3_6.jpg"  alt="Pasta de cría amarilla Gran pasto" title="Pasta de cría amarilla Gran pasto" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pasta-de-cria-amarilla-gran-pasto.html" title="Pasta de cría amarilla Gran pasto"><b>Pasta de cría amarilla Gran pasto</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pasta-de-cria-amarilla-gran-pasto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3487/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pasta semi-húmeda estabilizada ideal para todo tipo de pájaro de jaula y canarios de factor amarillo. Mantiene la pigmentación amarilla pero sin excesos. Se recomienda darla diariamente a los pájaros en época de apareamiento y cría, y en días alternos durante el resto del año. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/pasta-de-cria-amarilla-gran-pasto.html" title="Pasta de cría amarilla Gran pasto">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pasta-de-cria-fruit-mix-gran-pasto.html" title="Pasta de cría fruit mix Gran pasto">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/pasta_cria_con_fruta_300gr.jpg"  alt="Pasta de cría fruit mix Gran pasto" title="Pasta de cría fruit mix Gran pasto" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pasta-de-cria-fruit-mix-gran-pasto.html" title="Pasta de cría fruit mix Gran pasto"><b>Pasta de cría fruit mix Gran pasto</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pasta-de-cria-fruit-mix-gran-pasto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3455/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pasta semi-húmeda estabilizada ideal para todo tipo de pájaro de jaula y canarios. Con vitaminas y minerales que les ayudan en épocas de carencia o de necesidad extra de energía. Se recomienda darla diariamente a los pájaros en época de apareamiento y cría, y en días alternos durante el resto del año. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/pasta-de-cria-fruit-mix-gran-pasto.html" title="Pasta de cría fruit mix Gran pasto">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pasta-de-cria-roja-gran-pasto.html" title="Pasta de cría roja Gran pasto">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/pasta_cria_roja_300_gr.jpg"  alt="Pasta de cría roja Gran pasto" title="Pasta de cría roja Gran pasto" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pasta-de-cria-roja-gran-pasto.html" title="Pasta de cría roja Gran pasto"><b>Pasta de cría roja Gran pasto</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pasta-de-cria-roja-gran-pasto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3486/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pasta semi-húmeda estabilizada ideal para todo tipo de pájaro de jaula y canarios de factor rojo. Mantiene la pigmentación roja sin excesos. Se recomienda darla diariamente a los pájaros en época de apareamiento y cría, y en días alternos durante el resto del año. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/pasta-de-cria-roja-gran-pasto.html" title="Pasta de cría roja Gran pasto">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pelote-de-cabra-para-nidos.html" title="Pelote de cabra para nidos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/e/pelo_de_cabra_53027.jpg"  alt="Pelote de cabra para nidos" title="Pelote de cabra para nidos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pelote-de-cabra-para-nidos.html" title="Pelote de cabra para nidos"><b>Pelote de cabra para nidos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pelote-de-cabra-para-nidos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1352/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pelo de cabra 100% natural adecuado para que todo tipo de aves pueda fabricar sus nidos. Tus aves podrán rellenar sus nidos haciéndolos mucho más confortables para ellos y sus crías. Ideal para pájaros exóticos y canarios. Formato: 30gr                    <a href="http://www.misterguau.com/index.php/pelote-de-cabra-para-nidos.html" title="Pelote de cabra para nidos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/percha-con-juguete-para-loros-fm.html" title="Percha con juguete para loros FM">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/u/juguete_loro_palo_108613_1.jpg"  alt="Percha con juguete para loros FM" title="Percha con juguete para loros FM" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/percha-con-juguete-para-loros-fm.html" title="Percha con juguete para loros FM"><b>Percha con juguete para loros FM</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>8,35&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 7.25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/percha-con-juguete-para-loros-fm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1956/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Práctica percha con juguete incluido para todo tipo de loros y cotorritas. Con enganche de palometa, realizado en madera y con juguetes de cuerda con abalorios de madera pintada no tóxica. Medidas: Ø5x30x15cm                    <a href="http://www.misterguau.com/index.php/percha-con-juguete-para-loros-fm.html" title="Percha con juguete para loros FM">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pie-para-jaula-con-gancho-4-3.html" title="Pie para jaula con gancho 4/3">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pie_jaula_mod_4-3_blanco.jpg"  alt="Pie para jaula con gancho 4/3" title="Pie para jaula con gancho 4/3" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pie-para-jaula-con-gancho-4-3.html" title="Pie para jaula con gancho 4/3"><b>Pie para jaula con gancho 4/3</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pie-para-jaula-con-gancho-4-3.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/218/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pie para colgar todo tipo de jaulas pequeñas y medianas. Con base plástico y mango superior y gancho metálico. Con gancho en la parte superior para enganchar cualquier tipo de jaula con un máximo de diámetro de 35cm. Fabricado en España. En color blanco. Medidas: 39,1cm x 159,3cm                    <a href="http://www.misterguau.com/index.php/pie-para-jaula-con-gancho-4-3.html" title="Pie para jaula con gancho 4/3">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-24-blanco.html" title="Pie para jaula Voltrega 24 blanco">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pie_mod24_blanco.jpg"  alt="Pie para jaula Voltrega 24 blanco" title="Pie para jaula Voltrega 24 blanco" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-24-blanco.html" title="Pie para jaula Voltrega 24 blanco"><b>Pie para jaula Voltrega 24 blanco</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pie-para-jaula-voltrega-24-blanco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2981/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pie para todo tipo de jaulas de pequeñas aves con diámetro de base 22-23cm. Fabricado en España. Medidas: Ø34 x Ø23 x 86,3cm                    <a href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-24-blanco.html" title="Pie para jaula Voltrega 24 blanco">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-25.html" title="Pie para jaula Voltrega 25">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pie_mod25_blanco_1.jpg"  alt="Pie para jaula Voltrega 25" title="Pie para jaula Voltrega 25" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-25.html" title="Pie para jaula Voltrega 25"><b>Pie para jaula Voltrega 25</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															17,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pie-para-jaula-voltrega-25.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/217/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pie para todo tipo de jaulas de aves pequeñas o medianas cuya base sea redonda y de un máximo de Ø34cm. Realizado en plástico no-tóxico muy resistente. En color blanco. Fabricado en España. Medidas: Ø37 base suelo x Ø34 base jaula x 86,3cm de alto.                    <a href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-25.html" title="Pie para jaula Voltrega 25">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-60-blanco.html" title="Pie para jaula Voltrega 60 blanco">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pie_mod60_blanco.jpg"  alt="Pie para jaula Voltrega 60 blanco" title="Pie para jaula Voltrega 60 blanco" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-60-blanco.html" title="Pie para jaula Voltrega 60 blanco"><b>Pie para jaula Voltrega 60 blanco</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															30,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pie-para-jaula-voltrega-60-blanco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1379/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pie para todo tipo de jaulas de aves pequeñas o medianas cuya base sea rectangular y de una medida máxima de 47*25cm. Realizado en plástico no-tóxico muy resistente. En color blanco. Fabricado en España. Medidas: 47 x 25 x (Al)73 cm.                    <a href="http://www.misterguau.com/index.php/pie-para-jaula-voltrega-60-blanco.html" title="Pie para jaula Voltrega 60 blanco">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/piedra-mineral-peque-a.html" title="Piedra mineral pequeña">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/p/pp_piedra_mineral_pq_100212.jpg"  alt="Piedra mineral pequeña" title="Piedra mineral pequeña" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/piedra-mineral-peque-a.html" title="Piedra mineral pequeña"><b>Piedra mineral pequeña</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/piedra-mineral-peque-a.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3805/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Corrector mineral con forma rectangular ideal para completar las necesidades minerales de nuestros pequeños canarios, periquitos, diamantes, agapornis o cotorras.                     <a href="http://www.misterguau.com/index.php/piedra-mineral-peque-a.html" title="Piedra mineral pequeña">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pienso-psittacus-mantenimiento-1833.html" title="Pienso Psittacus alta energía">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/s/psittacus_alta_energia_2.jpg"  alt="Pienso Psittacus alta energía" title="Pienso Psittacus alta energía" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pienso-psittacus-mantenimiento-1833.html" title="Pienso Psittacus alta energía"><b>Pienso Psittacus alta energía</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pienso-psittacus-mantenimiento-1833.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1833/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Está indicada  para especies que en estado salvaje consumen una cantidad importante de frutos y semillas de plantas oleaginosas (guacamayos, loros grises...). También durante el proceso de sustitución de la dieta basada en semillas. Formato: 900gr                    <a href="http://www.misterguau.com/index.php/pienso-psittacus-mantenimiento-1833.html" title="Pienso Psittacus alta energía">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pienso-psittacus-mantenimiento.html" title="Pienso Psittacus estándar alta proteína (Mantenimiento)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/s/psittacus_mantenimiento_2.jpg"  alt="Pienso Psittacus estándar alta proteína (Mantenimiento)" title="Pienso Psittacus estándar alta proteína (Mantenimiento)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pienso-psittacus-mantenimiento.html" title="Pienso Psittacus estándar alta proteína (Mantenimiento)"><b>Pienso Psittacus estándar alta proteína (Mantenimiento)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pienso-psittacus-mantenimiento.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1832/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Está indicada para especies que en estado salvaje consumen semillas, fruta y otros vegetales frescos (loros amazónicos, cotorras, eclectus, cacatúas...). Natural y sin colorantes. También indicada como fórmula para usar en loros que, consumiendo la dieta de alta energía y por falta de actividad, tiendan a engordar. Formato: 900gr.                    <a href="http://www.misterguau.com/index.php/pienso-psittacus-mantenimiento.html" title="Pienso Psittacus estándar alta proteína (Mantenimiento)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pienso-psittacus-mini-mantenimiento.html" title="Pienso Psittacus Mini (Mantenimiento)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/s/psittacus_pienso_mantenimiento_mini_450g.jpg"  alt="Pienso Psittacus Mini (Mantenimiento)" title="Pienso Psittacus Mini (Mantenimiento)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pienso-psittacus-mini-mantenimiento.html" title="Pienso Psittacus Mini (Mantenimiento)"><b>Pienso Psittacus Mini (Mantenimiento)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pienso-psittacus-mini-mantenimiento.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3304/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Está indicada para especies de pequeño tamaño como  ninfas, agapornis, cotorras, periquitos australianos... Los piensos de mantenimiento están indicados para ser suministrados a las mascotas y a los reproductores en las etapas de <br />
inactividad reproductiva. Su composición les permite cubrir holgadamente las necesidades nutricionales de estas etapas. Formato: 450gr                    <a href="http://www.misterguau.com/index.php/pienso-psittacus-mini-mantenimiento.html" title="Pienso Psittacus Mini (Mantenimiento)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-alpiste-canada.html" title="Pio-Pa Alpiste Canadá ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_alpiste_canada_1k.jpg"  alt="Pio-Pa Alpiste Canadá " title="Pio-Pa Alpiste Canadá " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-alpiste-canada.html" title="Pio-Pa Alpiste Canadá "><b>Pio-Pa Alpiste Canadá </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-alpiste-canada.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/160/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para todo tipo de aves granívoras. 100% alpiste originario de Canadá. Dejar a libre disposición de nuestro pájaro. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/pio-pa-alpiste-canada.html" title="Pio-Pa Alpiste Canadá ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-pienso-canarios.html" title="Pio-Pa mezcla para canarios">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_canarios.jpg"  alt="Pio-Pa mezcla para canarios" title="Pio-Pa mezcla para canarios" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-pienso-canarios.html" title="Pio-Pa mezcla para canarios"><b>Pio-Pa mezcla para canarios</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-pienso-canarios.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2126/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para todo tipo de canarios. Formato: 500gr,  1Kg.                    <a href="http://www.misterguau.com/index.php/pio-pa-pienso-canarios.html" title="Pio-Pa mezcla para canarios">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-cotorras-y-agapornis.html" title="Pio-Pa mezcla para cotorras y agapornis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_cotorras.jpg"  alt="Pio-Pa mezcla para cotorras y agapornis" title="Pio-Pa mezcla para cotorras y agapornis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-cotorras-y-agapornis.html" title="Pio-Pa mezcla para cotorras y agapornis"><b>Pio-Pa mezcla para cotorras y agapornis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-cotorras-y-agapornis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2131/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para todo tipo de cotorras, agapornis, carolinas y otros pequeños psitácidos. Atmósfera conservadora para un mayor frescor. Composición: Mijo país y blanco, alpiste, mijo rojo, avena, pipa país, cañamón, trigo, pipa blanca, arroz integral, linaza, negrillo. Formato: 1Kg, 5Kg..                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-cotorras-y-agapornis.html" title="Pio-Pa mezcla para cotorras y agapornis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-exoticos-diamantes.html" title="Pio-Pa mezcla para exóticos (Diamantes)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_exoticos.jpg"  alt="Pio-Pa mezcla para exóticos (Diamantes)" title="Pio-Pa mezcla para exóticos (Diamantes)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-exoticos-diamantes.html" title="Pio-Pa mezcla para exóticos (Diamantes)"><b>Pio-Pa mezcla para exóticos (Diamantes)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-exoticos-diamantes.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2129/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para todo tipo de pequeñas exóticas. Atmósfera conservadora para un mayor frescor. Composición: panicot, mijo país, alpiste, mijo rojo, mijo blanco americano, negrillo. Formato: 1Kg.                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-exoticos-diamantes.html" title="Pio-Pa mezcla para exóticos (Diamantes)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-jilgueros.html" title="Pio-Pa mezcla para jilgueros">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_jilgueros.jpg"  alt="Pio-Pa mezcla para jilgueros" title="Pio-Pa mezcla para jilgueros" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-jilgueros.html" title="Pio-Pa mezcla para jilgueros"><b>Pio-Pa mezcla para jilgueros</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-jilgueros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2130/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para todo tipo de jilgueros y otros pájaros de bosque. Atmósfera conservadora para un mayor frescor. Composición: alpiste, nabina, negrillo, cañamón, cardón, escarola, linaza. Se puede mezclar con otras verduras y frutas. Formato: 1Kg.                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-jilgueros.html" title="Pio-Pa mezcla para jilgueros">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-loros.html" title="Pio-Pa mezcla para loros">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_loros.jpg"  alt="Pio-Pa mezcla para loros" title="Pio-Pa mezcla para loros" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-loros.html" title="Pio-Pa mezcla para loros"><b>Pio-Pa mezcla para loros</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-loros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2132/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para todo tipo de grandes psitácidas. Atmósfera conservadora para un mayor frescor. Composición: maíz, pipa blanca nacional y USA, trigo, cañamón, guisantes, pipa país, dari, sorgo, calabaza, alforfón y cacahuetes. Formato: 600 gr.                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-loros.html" title="Pio-Pa mezcla para loros">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-loros-fruit.html" title="Pio-Pa mezcla para loros (Fruit)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_loros-fruit.jpg"  alt="Pio-Pa mezcla para loros (Fruit)" title="Pio-Pa mezcla para loros (Fruit)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-loros-fruit.html" title="Pio-Pa mezcla para loros (Fruit)"><b>Pio-Pa mezcla para loros (Fruit)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-loros-fruit.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2133/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para todo tipo de grandes psitácidas: yacos, cacatúas, guacamayos, etc.. Composición: pipa blanca, fruta deshidratada, pipa regi, maíz, pipa país y calabaza, trigo, alforfón, cañamón, guisantes, dari, sorgo, cacahuetes, cártamo, pipa USA, soja verde. Formato: 600gr                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-loros-fruit.html" title="Pio-Pa mezcla para loros (Fruit)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-periquitos.html" title="Pio-Pa mezcla para periquitos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_perico.jpg"  alt="Pio-Pa mezcla para periquitos" title="Pio-Pa mezcla para periquitos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-periquitos.html" title="Pio-Pa mezcla para periquitos"><b>Pio-Pa mezcla para periquitos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-periquitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2127/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para todo tipo de periquitos. Atmósfera conservadora para un mayor frescor. Formato: 500gr, 1Kg.                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-periquitos.html" title="Pio-Pa mezcla para periquitos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-pipas-americanas.html" title="Pio-Pa Pipas Americanas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_pipas_americanas_bolsa.jpg"  alt="Pio-Pa Pipas Americanas" title="Pio-Pa Pipas Americanas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-pipas-americanas.html" title="Pio-Pa Pipas Americanas"><b>Pio-Pa Pipas Americanas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-pipas-americanas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3910/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento ideal para loros, cacatúas y otros psitácidos o roedores. Totalmente naturales y provenientes de América del norte. Formato: 400gr                    <a href="http://www.misterguau.com/index.php/pio-pa-pipas-americanas.html" title="Pio-Pa Pipas Americanas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/psittacus-papilla-alta-energia.html" title="Psittacus Papilla alta energía">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/s/psittacus_papilla_alta_energia.jpg"  alt="Psittacus Papilla alta energía" title="Psittacus Papilla alta energía" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/psittacus-papilla-alta-energia.html" title="Psittacus Papilla alta energía"><b>Psittacus Papilla alta energía</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/psittacus-papilla-alta-energia.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2905/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Está ideada para criar manualmente, a partir del momento en que despuntan los cañones de las plumas, aquellas especies de loro que precisan dietas altas en grasa: yacos, guacamayos, eclectus, poicephalus... Contiene la grasa vegetal más indicada para estas especies: el aceite de palma. Click + info. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/psittacus-papilla-alta-energia.html" title="Psittacus Papilla alta energía">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/psittacus-papilla-alta-proteina.html" title="Psittacus Papilla alta proteína">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/s/psittacus_papilla_alta_proteina.jpg"  alt="Psittacus Papilla alta proteína" title="Psittacus Papilla alta proteína" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/psittacus-papilla-alta-proteina.html" title="Psittacus Papilla alta proteína"><b>Psittacus Papilla alta proteína</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/psittacus-papilla-alta-proteina.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2906/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Está ideada para criar manualmente, a partir del momento en que despuntan los cañones de las plumas aquellas especies de loro que precisan dietas poco altas en grasa: amazonas, cacatúas, cotorras, periquitos australianos, pionus, caiques... Contiene soja, altamente digestible. Contiene también papaya, favorecedora del tránsito digestivo.  Click + info. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/psittacus-papilla-alta-proteina.html" title="Psittacus Papilla alta proteína">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/psittacus-papilla-mini.html" title="Psittacus Papilla Mini">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/s/psittacus_papilla_mini_1kg.jpg"  alt="Psittacus Papilla Mini" title="Psittacus Papilla Mini" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/psittacus-papilla-mini.html" title="Psittacus Papilla Mini"><b>Psittacus Papilla Mini</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/psittacus-papilla-mini.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3384/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Papilla Psittacus para aves mini especial para ninfas, agapornis y cotorritas. Fabricada teniendo en cuenta la cría de polluelos, desde que despuntan los cañones de las plumas. Su alto nivel nutritivo es ideal para especies de grano y pequeña talla como ninfas, agapornis o periquitos. Formato: 1Kg.                    <a href="http://www.misterguau.com/index.php/psittacus-papilla-mini.html" title="Psittacus Papilla Mini">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/restaurador-del-canto-para-canarios-supercanto.html" title="Restaurador del canto para canarios Supercanto">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/u/supercanto_150gr_000336.jpg"  alt="Restaurador del canto para canarios Supercanto" title="Restaurador del canto para canarios Supercanto" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/restaurador-del-canto-para-canarios-supercanto.html" title="Restaurador del canto para canarios Supercanto"><b>Restaurador del canto para canarios Supercanto</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/restaurador-del-canto-para-canarios-supercanto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1359/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo líder en el mercado para fortalecer, asegurar y restaurar el canto del canario. Complejo vitamínico-mineral con combinación de semillas de alta calidad que fortalece y revitaliza el canto. Apto en todas las etapas y edades de los canarios, proporciona energía y vitalidad. Formato: 150 gr.                    <a href="http://www.misterguau.com/index.php/restaurador-del-canto-para-canarios-supercanto.html" title="Restaurador del canto para canarios Supercanto">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/saltador-extra-largo-35cm.html" title="Saltador extra-largo (35cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/palos_extra_largos_35cm_codpa30007.jpg"  alt="Saltador extra-largo (35cm)" title="Saltador extra-largo (35cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/saltador-extra-largo-35cm.html" title="Saltador extra-largo (35cm)"><b>Saltador extra-largo (35cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/saltador-extra-largo-35cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3748/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Palo saltador extra-largo para grandes jaulas. Realizado en plástico rígido no tóxico con hendiduras para un mejor agarre. Con hendidura en la base para adaptarse a la mayoría de jaulas del mercado. Recuerda que nuestras aves disfrutan de lo lindo saltando entre los diversos palos de la jaula, que les ofrecen diversión y entretenimiento. Medidas: 35cm                    <a href="http://www.misterguau.com/index.php/saltador-extra-largo-35cm.html" title="Saltador extra-largo (35cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/saltador-para-aves-ref-600-4-unid.html" title="Saltador para aves Ref. 600 (4 unid)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_de_4_saltadores_ref600.jpg"  alt="Saltador para aves Ref. 600 (4 unid)" title="Saltador para aves Ref. 600 (4 unid)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/saltador-para-aves-ref-600-4-unid.html" title="Saltador para aves Ref. 600 (4 unid)"><b>Saltador para aves Ref. 600 (4 unid)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/saltador-para-aves-ref-600-4-unid.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2694/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Saltador para aves adaptable a todas las jaulas para ave o pajareras de la marca Voltregá. Adaptable también a otras jaulas. En colores surtidos (blanco, rosa, lila, verde, azul, gris). Se presenta en bolsita con 4 saltadores para aves pequeñas. Medida palo: 19.5cm largo x 1cm ancho (Ancho palometa: 2cm)                    <a href="http://www.misterguau.com/index.php/saltador-para-aves-ref-600-4-unid.html" title="Saltador para aves Ref. 600 (4 unid)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/saltador-peque-o-con-ranura-15cm.html" title="Saltador pequeño con ranura (15cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/palo_pq_con_ranura_15cm_2411.jpg"  alt="Saltador pequeño con ranura (15cm)" title="Saltador pequeño con ranura (15cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/saltador-peque-o-con-ranura-15cm.html" title="Saltador pequeño con ranura (15cm)"><b>Saltador pequeño con ranura (15cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/saltador-peque-o-con-ranura-15cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3747/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Palo saltador pequeño para aves pequeñas o medianas. Realizado en plástico rígido no tóxico con hendiduras para un mejor agarre. Con hendidura en la base para adaptarse a la mayoría de jaulas del mercado. Recuerda que nuestras aves disfrutan de lo lindo saltando entre los diversos palos de la jaula, que les ofrecen diversión y entretenimiento. Medidas: 15cm                    <a href="http://www.misterguau.com/index.php/saltador-peque-o-con-ranura-15cm.html" title="Saltador pequeño con ranura (15cm)">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tabernil-anti-stress-para-aves-estresadas.html" title="Tabernil anti-stress para aves estresadas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/a/tabernil_anti-stress_20ml_1007598.jpg"  alt="Tabernil anti-stress para aves estresadas" title="Tabernil anti-stress para aves estresadas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tabernil-anti-stress-para-aves-estresadas.html" title="Tabernil anti-stress para aves estresadas"><b>Tabernil anti-stress para aves estresadas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tabernil-anti-stress-para-aves-estresadas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/459/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tabernil Anti-Stress es un tratamiento que le ayudará a solucionar los procesos infecciosos derivados de las situaciones estresantes para sus pájaros provocado por situaciones de stress como cambios bruscos de temperatura, cambios de alimentación, traslados, etc. En formato líquido para añadir al agua. Formato: 20ml.                    <a href="http://www.misterguau.com/index.php/tabernil-anti-stress-para-aves-estresadas.html" title="Tabernil anti-stress para aves estresadas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tabernil-especial-cria-sobre-individual.html" title="Tabernil especial Cría (sobre individual)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/a/tabernil_cria_10gr_-_1_sobre_1007605.jpg"  alt="Tabernil especial Cría (sobre individual)" title="Tabernil especial Cría (sobre individual)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tabernil-especial-cria-sobre-individual.html" title="Tabernil especial Cría (sobre individual)"><b>Tabernil especial Cría (sobre individual)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tabernil-especial-cria-sobre-individual.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3979/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tabernil Cría es un tratamiento que mejora el estado general de las aves, durante toda la vida de los animales y de forma especial durante la época de cría, también para las aves recién nacidas. Ideal para canarios y aves de adorno en general (periquitos, jilgueros, cotorras, palomas, etc.).  Formato: Sobrecito individual de 10 gr.                    <a href="http://www.misterguau.com/index.php/tabernil-especial-cria-sobre-individual.html" title="Tabernil especial Cría (sobre individual)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/topnature-lecho-de-madera-prensada.html" title="Topnature lecho de madera prensada">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_lecho_de_madera_prensada_6kg.jpg"  alt="Topnature lecho de madera prensada" title="Topnature lecho de madera prensada" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/topnature-lecho-de-madera-prensada.html" title="Topnature lecho de madera prensada"><b>Topnature lecho de madera prensada</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/topnature-lecho-de-madera-prensada.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2965/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lecho de madera prensada en forma de pellets (tubitos). Fabricado con fibra 100% natural. Gran poder absorbente, producto ecológico y económico. Recomendable utilizar en la totalidad de la jaula. Ideal para absorber la humedad y neutralizar los malos olores de pájaros, roedores, gatos y pequeños mamíferos. No se adhiere al pelo ni plumas. Formato: 6Kg (10 litros).                    <a href="http://www.misterguau.com/index.php/topnature-lecho-de-madera-prensada.html" title="Topnature lecho de madera prensada">Saber más</a><br><br>
					<span class="required"><strong>39% de Dto! Ahorra 2.30&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-agapornis-africanos.html" title="Vitakraft alimento Aroma African (agapornis)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraf_agapornis_african_2.jpg"  alt="Vitakraft alimento Aroma African (agapornis)" title="Vitakraft alimento Aroma African (agapornis)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-agapornis-africanos.html" title="Vitakraft alimento Aroma African (agapornis)"><b>Vitakraft alimento Aroma African (agapornis)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-alimento-completo-agapornis-africanos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2210/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento especial para agapornis con ingredientes de su lugar de origen, África. Contiene flores de acacia, dátiles, higos y mijo de color, para que estas aves se alimenten de la misma forma que lo harían en su hábitat natural. Formato: 750gr<br />
                    <a href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-agapornis-africanos.html" title="Vitakraft alimento Aroma African (agapornis)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-loros-africanos.html" title="Vitakraft alimento Aroma African (loros)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_loros_african_2.jpg"  alt="Vitakraft alimento Aroma African (loros)" title="Vitakraft alimento Aroma African (loros)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-loros-africanos.html" title="Vitakraft alimento Aroma African (loros)"><b>Vitakraft alimento Aroma African (loros)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-alimento-completo-loros-africanos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2209/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo especial para loros grises. Contiene todas las semillas que el loro gris encontraría en su región de origen: África. Entre los ingredientes principales están: pipas de girasol, dátiles, higos, judías y maíz.. Formato: 750gr<br />
                    <a href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-loros-africanos.html" title="Vitakraft alimento Aroma African (loros)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-aves-australianas.html" title="Vitakraft alimento Aroma Australian">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_loros_australian_2.jpg"  alt="Vitakraft alimento Aroma Australian" title="Vitakraft alimento Aroma Australian" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-aves-australianas.html" title="Vitakraft alimento Aroma Australian"><b>Vitakraft alimento Aroma Australian</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-alimento-completo-aves-australianas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2211/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo especial para aves cuyo lugar de origen es Australia o el Sudeste asiático, como las cotorras o las cacatúas. Entre los ingredientes principales contiene hierbas, piñones, semillas de pícea, hojas de eucalipto y flores de cáctus, para que estas aves se alimenten como lo harían en su hábitat natural. Formato: 750gr                    <a href="http://www.misterguau.com/index.php/vitakraft-alimento-completo-aves-australianas.html" title="Vitakraft alimento Aroma Australian">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-arena-sandy-3-plus.html" title="Vitakraft Arena Sandy 3 plus para aves">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_arena_sandy_3_plus_2.jpg"  alt="Vitakraft Arena Sandy 3 plus para aves" title="Vitakraft Arena Sandy 3 plus para aves" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-arena-sandy-3-plus.html" title="Vitakraft Arena Sandy 3 plus para aves"><b>Vitakraft Arena Sandy 3 plus para aves</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-arena-sandy-3-plus.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1493/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto natural valioso que se produce en la extracción de arena para el vidrio de Murano de alta calidad. La arena contiene conchas del mar que le permiten a los pájaros: limarse las uñas, facilitar la digestión, absorber la humedad y evitar la instalación de parásitos. Aporta los minerales necesarios para el esqueleto y las plumas. Desprende un agradable olor a limón y anís. Formato: 2.5Kg                    <a href="http://www.misterguau.com/index.php/vitakraft-arena-sandy-3-plus.html" title="Vitakraft Arena Sandy 3 plus para aves">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-agapornis-miel.html" title="Vitakraft Barritas African miel (agapornis)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_agapornis_miel_2.jpg"  alt="Vitakraft Barritas African miel (agapornis)" title="Vitakraft Barritas African miel (agapornis)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-agapornis-miel.html" title="Vitakraft Barritas African miel (agapornis)"><b>Vitakraft Barritas African miel (agapornis)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-agapornis-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2215/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas especialmente formuladas para resultar irresistibles para todo tipo de agapornis. Ayuda a mantener un magnífico plumaje y unos huesos sanos. Con minerales vitales y vitaminas para que su loro consiga todo lo que necesita para un metabolismo saludable. Con deliciosa miel!. Formato: 2 unidades                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-agapornis-miel.html" title="Vitakraft Barritas African miel (agapornis)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-african-miel.html" title="Vitakraft Barritas African miel (loros)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_african_miel_1_1.jpg"  alt="Vitakraft Barritas African miel (loros)" title="Vitakraft Barritas African miel (loros)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-african-miel.html" title="Vitakraft Barritas African miel (loros)"><b>Vitakraft Barritas African miel (loros)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-african-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1489/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con miel. Elaborado con semillas de alta calidad y cocidas al horno con una galleta sobre una barrita de madera. Especialmente formuladas para loros africanos. Con vitaminas esenciales para apoyar las defensas del cuerpo y su bienestar. Formato: paquete con 2 barritas                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-african-miel.html" title="Vitakraft Barritas African miel (loros)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-australian-miel.html" title="Vitakraft Barritas Australian miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_australian_miel_2.jpg"  alt="Vitakraft Barritas Australian miel" title="Vitakraft Barritas Australian miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-australian-miel.html" title="Vitakraft Barritas Australian miel"><b>Vitakraft Barritas Australian miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-australian-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1490/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con miel. Especialmente formuladas para loros australianos, como las ninfas, cotorras, etc. Las barritas Vitakraft son una alternativa sana a otros alimentos de pájaro. Elaborado con semillas de alta calidad y cocidas al horno con una galleta sobre una barrita de madera. Formato: 2 unidades por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-australian-miel.html" title="Vitakraft Barritas Australian miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-fruta.html" title="Vitakraft Barritas canario fruta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_canario_fruta_3.jpg"  alt="Vitakraft Barritas canario fruta" title="Vitakraft Barritas canario fruta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-fruta.html" title="Vitakraft Barritas canario fruta"><b>Vitakraft Barritas canario fruta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-canario-fruta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2196/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con granos y trocitos de fruta. Complemento a la alimentación en grano. Elaborado con semillas de alta calidad, las barritas Vitakraft son una alternativa sana a otros alimentos de pájaro. Ayudan a facilitar el desgaste del pico. Formato: 2 barritas                     <a href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-fruta.html" title="Vitakraft Barritas canario fruta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-miel.html" title="Vitakraft Barritas canario miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_canario_miel_3.jpg"  alt="Vitakraft Barritas canario miel" title="Vitakraft Barritas canario miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-miel.html" title="Vitakraft Barritas canario miel"><b>Vitakraft Barritas canario miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-canario-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2195/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con granos y miel. Complemento a la alimentación en grano. Elaborado con semillas de alta calidad, las barritas Vitakraft son una alternativa sana a otros alimentos de pájaro. Ayudan a facilitar el desgaste del pico. Formato: 2 unidades<br />
<br />
                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-miel.html" title="Vitakraft Barritas canario miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-muda.html" title="Vitakraft Barritas canario muda">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_canario_muda_2.jpg"  alt="Vitakraft Barritas canario muda" title="Vitakraft Barritas canario muda" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-muda.html" title="Vitakraft Barritas canario muda"><b>Vitakraft Barritas canario muda</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-canario-muda.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2199/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con ingredientes que favorecen una correcta muda de las plumas. Complemento a la alimentación en grano. Elaborado con semillas de alta calidad, las barritas Vitakraft son una alternativa sana a otros alimentos de pájaro. Ayudan a facilitar el desgaste del pico. Formato: 2 unidades<br />
<br />
                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-canario-muda.html" title="Vitakraft Barritas canario muda">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-exoticos-miel.html" title="Vitakraft Barritas exóticos miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_vitakraft_exoticos_miel.jpg"  alt="Vitakraft Barritas exóticos miel" title="Vitakraft Barritas exóticos miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-exoticos-miel.html" title="Vitakraft Barritas exóticos miel"><b>Vitakraft Barritas exóticos miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-exoticos-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3091/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas barritas especialmente formuladas para resultar irresistibles para todo tipo de pequeñas aves exóticas. Ayuda a mantener un magnífico plumaje y unos huesos sanos. Con deliciosa miel! Formato: 2 unidades                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-exoticos-miel.html" title="Vitakraft Barritas exóticos miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-nature-cotorras-agapornis.html" title="Vitakraft Barritas Nature Cotorras/agapornis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_barritas_nature_kracker_cotorras-agapornis_18724.jpg"  alt="Vitakraft Barritas Nature Cotorras/agapornis" title="Vitakraft Barritas Nature Cotorras/agapornis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-nature-cotorras-agapornis.html" title="Vitakraft Barritas Nature Cotorras/agapornis"><b>Vitakraft Barritas Nature Cotorras/agapornis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-nature-cotorras-agapornis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4797/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    En la gama Nature de Vitakraft se reunen las mejores y más naturales y frescas esencias de la naturaleza para que nuestras aves se alimenten como en estado silvestre. Estas barritas de trigo con triple horneado serán el deleite de nuestras cotorras o agapornis. Con triple horneado para mejor conservación del sabor. Sin azucar y con clip. Contenido: 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-nature-cotorras-agapornis.html" title="Vitakraft Barritas Nature Cotorras/agapornis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-periquito-miel.html" title="Vitakraft Barritas periquito miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_perico_miel_2.jpg"  alt="Vitakraft Barritas periquito miel" title="Vitakraft Barritas periquito miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-periquito-miel.html" title="Vitakraft Barritas periquito miel"><b>Vitakraft Barritas periquito miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-periquito-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2203/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con granos y miel. Complemento a la alimentación en grano. Elaborado con semillas de alta calidad, las barritas Vitakraft son una alternativa sana a otros alimentos de pájaro. Ayudan a facilitar el desgaste del pico. Formato: 2 unidades                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-periquito-miel.html" title="Vitakraft Barritas periquito miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-cocktail-de-frutas-canarios.html" title="Vitakraft Cocktail de frutas (Canarios)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_cocktel_frutas_canarios.jpg"  alt="Vitakraft Cocktail de frutas (Canarios)" title="Vitakraft Cocktail de frutas (Canarios)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-cocktail-de-frutas-canarios.html" title="Vitakraft Cocktail de frutas (Canarios)"><b>Vitakraft Cocktail de frutas (Canarios)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-cocktail-de-frutas-canarios.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3182/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Afrutado y delicioso refrigerio para nuestros canarios! Combinación especial de nutrientes, vitaminas y oligoelementos en las que se incluye deliciosa fruta que también aporta dinamismo a la vida cotidiana de las aves. Una mezcla que lo tiene todo: granos, semillas y frutos. Con vitaminas y minerales. Sin azúcar. Sin conservantes. Sin antioxidantes. Formato: 200gr                    <a href="http://www.misterguau.com/index.php/vitakraft-cocktail-de-frutas-canarios.html" title="Vitakraft Cocktail de frutas (Canarios)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-cocktail-de-frutas-periquitos.html" title="Vitakraft Cocktail de frutas (Periquitos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_cocktel_frutas_periquitos.jpg"  alt="Vitakraft Cocktail de frutas (Periquitos)" title="Vitakraft Cocktail de frutas (Periquitos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-cocktail-de-frutas-periquitos.html" title="Vitakraft Cocktail de frutas (Periquitos)"><b>Vitakraft Cocktail de frutas (Periquitos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-cocktail-de-frutas-periquitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3180/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cócktail Frutti es un afrutado y delicioso refrigerio para tus periquitos! Combinación especial de nutrientes, vitaminas y oligoelementos en las que se incluye deliciosa fruta que también aporta dinamismo a la vida cotidiana de las aves. Una mezcla que lo tiene todo:  granos, semillas y frutos. Con vitaminas y minerales. Sin azúcar. Sin conservantes. Sin antioxidantes Formato: 200gr                    <a href="http://www.misterguau.com/index.php/vitakraft-cocktail-de-frutas-periquitos.html" title="Vitakraft Cocktail de frutas (Periquitos)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-cubre-lijas-sandy-aves-peque-as.html" title="Vitakraft cubre lijas Sandy (aves pequeñas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_lijas_cubre-perchas_pequena_1.jpg"  alt="Vitakraft cubre lijas Sandy (aves pequeñas)" title="Vitakraft cubre lijas Sandy (aves pequeñas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-cubre-lijas-sandy-aves-peque-as.html" title="Vitakraft cubre lijas Sandy (aves pequeñas)"><b>Vitakraft cubre lijas Sandy (aves pequeñas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-cubre-lijas-sandy-aves-peque-as.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2218/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Magníficas lijas para los saltadores de nuestras aves. Ayudan al desgaste de las uñas y desgaste del pico. 3 unidades por paquete.<br />
                    <a href="http://www.misterguau.com/index.php/vitakraft-cubre-lijas-sandy-aves-peque-as.html" title="Vitakraft cubre lijas Sandy (aves pequeñas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-aves-exoticas.html" title="Vitakraft Menú Aroma Vital aves exóticas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_premium_menu_exoticos_complete_21318.jpg"  alt="Vitakraft Menú Aroma Vital aves exóticas" title="Vitakraft Menú Aroma Vital aves exóticas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-aves-exoticas.html" title="Vitakraft Menú Aroma Vital aves exóticas"><b>Vitakraft Menú Aroma Vital aves exóticas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-aves-exoticas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4800/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Menú completo clásico para todo tipo de aves exóticas, como diamantes mandarines, de gould, etc. Mezcla equilibrada de granos y semillas exquisitas, con mijo y semillas de lino ricos en proteínas. Contiene todos los nutrientes importantes para el fortalecimiento de las defensas. Formato: 500gr                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-aves-exoticas.html" title="Vitakraft Menú Aroma Vital aves exóticas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-life-canarios.html" title="Vitakraft Menu Life canarios">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/e/menu_life_canarios_3.jpg"  alt="Vitakraft Menu Life canarios" title="Vitakraft Menu Life canarios" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-life-canarios.html" title="Vitakraft Menu Life canarios"><b>Vitakraft Menu Life canarios</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-life-canarios.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2194/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mezcla de semillas y granos de primera calidad para dar como alimento principal a los canarios. A base de semillas selectas como, Alpiste, nabo silvestre, frutos secos, kiwi, Dátiles, Higos y Miel enriquecido con vitaminas, sustancias minerales, y aceite de hígado de bacalao, para mantener sano al animal. Formato: 800gr.<br />
<br />
                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-life-canarios.html" title="Vitakraft Menu Life canarios">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-life-periquitos.html" title="Vitakraft Menu Life periquitos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/e/menu_life_periquitos_1.jpg"  alt="Vitakraft Menu Life periquitos" title="Vitakraft Menu Life periquitos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-life-periquitos.html" title="Vitakraft Menu Life periquitos"><b>Vitakraft Menu Life periquitos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-life-periquitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2202/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mezcla de semillas y granos de primera calidad para dar como alimento principal a los periquitos. A base de semillas selectas como, Diversas clases de Mijo, Granos de Avena, Semillas Silvestres, Hojas de Eucalipto, Kiwi, Aceite de Pescado y Miel. Formato: 800gr                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-life-periquitos.html" title="Vitakraft Menu Life periquitos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-vital-periquitos.html" title="Vitakraft Menú Vital periquitos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_vital_periquitos_3.jpg"  alt="Vitakraft Menú Vital periquitos" title="Vitakraft Menú Vital periquitos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-vital-periquitos.html" title="Vitakraft Menú Vital periquitos"><b>Vitakraft Menú Vital periquitos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-vital-periquitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1400/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mezcla de semillas y granos de primera calidad para que nos aseguran la mejor alimentación principal para nuestros periquitos.Enriquecida con vitaminas, sustancias minerales, miel y aceite de hígado de bacalao para fortalecer al periquito y proporcionarle energía vital. Formato:  500gr.                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-vital-periquitos.html" title="Vitakraft Menú Vital periquitos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-agapornis.html" title="Vitakraft Vita Life Special Agapornis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_menu_super_premium_vita_life_special_agapornis_650g_14156.jpg"  alt="Vitakraft Vita Life Special Agapornis" title="Vitakraft Vita Life Special Agapornis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-agapornis.html" title="Vitakraft Vita Life Special Agapornis"><b>Vitakraft Vita Life Special Agapornis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-vita-life-special-agapornis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4623/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Contiene todos los elementos que los agapornis encontrarían en las llanuras africanas, resultando nutricionalmente ideal para todo tipo de loritos africanos. La mezcla equilibrada de semillas seleccionadas y otros ingredientes naturales como los dátiles y flores de acacia aumentan sus características beneficiosas. Sin conservantes. Formato: 650gr                    <a href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-agapornis.html" title="Vitakraft Vita Life Special Agapornis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-loros-africanos.html" title="Vitakraft Vita Life Special Loros africanos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_vita_life_special_loros_africanos_1.jpg"  alt="Vitakraft Vita Life Special Loros africanos" title="Vitakraft Vita Life Special Loros africanos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-loros-africanos.html" title="Vitakraft Vita Life Special Loros africanos"><b>Vitakraft Vita Life Special Loros africanos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-vita-life-special-loros-africanos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1399/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento Super Premium Especial para Loros cuyo lugar de origen es Africa. Entre los ingredientes principales contiene Datiles, Higos, judias, etc para que estas aves se alimenten como lo harían en su hábitat natural. 650gr.                    <a href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-loros-africanos.html" title="Vitakraft Vita Life Special Loros africanos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-loros-australianos.html" title="Vitakraft Vita Life Special Loros Australianos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_super_premium_vita_life_special_loros_australianos_3.jpg"  alt="Vitakraft Vita Life Special Loros Australianos" title="Vitakraft Vita Life Special Loros Australianos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-loros-australianos.html" title="Vitakraft Vita Life Special Loros Australianos"><b>Vitakraft Vita Life Special Loros Australianos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-vita-life-special-loros-australianos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2212/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento Super Premium Especial para loros australianos como Cotorras y Cacatuas. Entre los ingredientes principales contiene hierbas, semillas de pícea, hojas de eucalipto y flores de cáctus, para que se alimenten como lo harían en su hábitat natural. Formato: 650gr                    <a href="http://www.misterguau.com/index.php/vitakraft-vita-life-special-loros-australianos.html" title="Vitakraft Vita Life Special Loros Australianos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tabernil-a-d3-e.html" title="Vitaminas aves Tabernil A D3 E">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/a/tabernil_ad3e_20ml.jpg"  alt="Vitaminas aves Tabernil A D3 E" title="Vitaminas aves Tabernil A D3 E" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tabernil-a-d3-e.html" title="Vitaminas aves Tabernil A D3 E"><b>Vitaminas aves Tabernil A D3 E</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tabernil-a-d3-e.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3163/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Complemento vitamínico que se administra en el agua de bebida de nuestras aves. Especialmente indicada para canarios y aves de adorno en general. Para mejorar y reparar estados carenciales debidos a deficiencias en el aporte o exceso de vitaminas A, D3 y E.  Formato: 20ml.                    <a href="http://www.misterguau.com/index.php/tabernil-a-d3-e.html" title="Vitaminas aves Tabernil A D3 E">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item last">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitaminas-para-aves-tabernil-total.html" title="Vitaminas para aves Tabernil Total">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/a/tabernil_total.jpg"  alt="Vitaminas para aves Tabernil Total" title="Vitaminas para aves Tabernil Total" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitaminas-para-aves-tabernil-total.html" title="Vitaminas para aves Tabernil Total"><b>Vitaminas para aves Tabernil Total</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitaminas-para-aves-tabernil-total.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3165/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Complemento vitamínico para canarios y aves de adorno en general que se administra en el agua en forma de gotas cuando se produce un debilitamineto general en el transcurso y convalecencia de cualquier enfermedad que cursa con estados carenciales debidos a deficiencias de vitaminas y aminoácidos. Formato: 20ml.                    <a href="http://www.misterguau.com/index.php/vitaminas-para-aves-tabernil-total.html" title="Vitaminas para aves Tabernil Total">Saber más</a><br><br>
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
                            <strong>190 Artículo(s)</strong>
                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/aves.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/aves.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/aves.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/aves.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/aves.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/aves.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
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

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=312">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_biozoo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=299">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_cunipic.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=391">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_divasa.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=316">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo_1.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=311">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=314">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_nayeco.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=355">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_piopa.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=365">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_psittacus.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=395">
				<img src="http://69.160.51.167/media/catalog/attribute/RSL.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=310">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_sandimas.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=400">
				<img src="http://69.160.51.167/media/catalog/attribute/supercan_marca.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=366">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_topnature_all.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=303">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_varios.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=268">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_vitakraft.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/aves.html?manufacturer=326">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_voltrega.jpg" />
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
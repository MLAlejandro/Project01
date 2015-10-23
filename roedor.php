<?php
session_start();

if(isset ($_SESSION['nombre'])){
	$logejat=1;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>ROEDORES</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="En nuestra Tienda Online encontrarás todo lo que necesitas para tus mascotas y mucho más!
Alimentación, accesorios, higiene, hábitat, educación, transporte, jaulas, acuarios y terrarios." />
<meta name="keywords" content="Alimentacion roedores, Barritas y snackspara roedores, Vitaminas y calcio para roedores, comederos para roedores, bebederos para cobaya, Juguetes para conejo, Diversión para hamster, Henos para conejos, bases viruta para cobaya, higiene para roedor, belleza en conejos, arnés de paseo para conejo, collar de paseo para cobaya, arnés para huron, casita para hamster, cuna para cobaya, jaula para hurón, transportin para roedor, libros sobre ardillas, libro sobre conejos" />
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
<link rel="canonical" href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" catalog-category-view categorypath-roedores-y-mamiferos-html category-roedores-y-mamiferos">
<div class="wrapper" id="wrap">
        <div class="page">
        <div class="header_new">
  	<h1>MISTER GUAU</h1>
  <a href="index.php/"><img src="http://www.misterguau.com/skin/frontend/blank/theme048/images/logo.jpg" width="630" height="75" /></a>
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
                    <li class="category30">
                            <strong>ROEDORES</strong>
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
                                                <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html" class="open" class="potential" >ROEDORES</a>
                                <ul>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/alimentacion.html" class="potential" >/ Alimentación</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/barritas-y-snacks.html" class="potential" >/ Barritas y snacks</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/suplementos-y-vitaminas.html" >/ Vitaminas y calcio</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/comederos-y-bebederos.html" >/ Comederos</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/juguetes-y-diversion.html" class="potential" >/ Juguetes y diversión</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/heno-bases-y-arenas.html" class="potential" >/ Henos y bases</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/higiene-y-belleza.html" class="potential" >/ Higiene y belleza</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/collares-y-arneses.html" >/ Collares y arneses</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/transportines-viajes.html" >/ Transportines</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/casitas-y-cunas.html" >/ Casitas y cunas</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/roedores-y-mamiferos/jaulas.html" class="potential" >/ Jaulas roedor</a>
                                            </li>
                                    </ul>
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
												<div class="corner-right-top">                                <h2>ROEDORES</h2>
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
<p><span style="color: #33cccc;"><strong>TODO LO QUE NECESITAS PARA TUS ROEDORES - &nbsp;<span style="color: #888888;">Elige una categor&iacute;a</span></strong></span></p>
<p>&nbsp;</p>
<p><span style="color: #33cccc;"><strong><span style="font-size: x-small;"><strong><br /></strong></span></strong></span></p>
<p><span style="font-size: x-small;"><strong><a title="OFERTAS ROEDORES" href="http://www.misterguau.com/index.php/ofertas/roedores-y-mamiferos.html" target="_self"><img src="http://www.misterguau.com/media//Roedores.jpg" alt="OFERTAS ROEDORES" /></a>&nbsp;&nbsp;<a title="Alimentacion para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/alimentacion.html" target="_self"><img src="http://www.misterguau.com/media//Alimentacion.jpg" alt="Alimentacion para roedores" /></a>&nbsp; &nbsp; <a title="Barritas y snacks para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/barritas-y-snacks.html" target="_self"><img src="http://www.misterguau.com/media//Barritas_y_snacks_roedor.jpg" alt="Barritas y snacks para roedores" /></a>&nbsp; &nbsp; <a title="Vitaminas y calcio para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/suplementos-y-vitaminas.html" target="_self"><img src="http://www.misterguau.com/media//Vitaminas_y_calcio.jpg" alt="Vitaminas y calcio roedores" /></a></strong></span></p>
<p><span style="font-size: x-small;"><strong><a title="Vitaminas y calcio para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/suplementos-y-vitaminas.html" target="_self"></a></strong></span><span style="color: #33cccc;">&nbsp;&nbsp;<a title="OFERTAS ROEDORES" href="http://www.misterguau.com/index.php/ofertas/roedores-y-mamiferos.html" target="_self"><span style="font-size: x-small;"><span style="color: #33cccc;"><strong>Ofertas roedores</strong></span></span></a></span><span style="color: #999999; font-weight: bold; font-size: x-small;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Alimentacion para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/alimentacion.html" target="_self">Alimentacion roedores</a><span style="color: #999999; font-weight: bold; font-size: x-small;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Barritas y snacks para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/barritas-y-snacks.html" target="_self">Barritas y snacks</a><span style="color: #999999; font-weight: bold; font-size: x-small;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><a style="font-weight: bold; font-size: x-small;" title="Vitaminas y calcio para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/suplementos-y-vitaminas.html" target="_self">Vitaminas y calcio</a><span style="color: #999999; font-weight: bold; font-size: x-small;">&nbsp; &nbsp;&nbsp;</span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="color: #999999;"><span style="font-size: x-small;"><br /></span></span></strong></span></strong></p>
<p><strong><span style="font-size: x-small;"><strong><span style="color: #999999;"><span style="font-size: x-small;"><br /></span></span></strong></span></strong></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><strong><span style="font-size: x-small;"><strong><span style="color: #999999;"><span style="font-size: x-small;"><a title="Juguetes y diversion roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/juguetes-y-diversion.html" target="_self"></a><a title="Comederos y bebederos para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/comederos-y-bebederos.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Comederos_para_roedores.jpg" alt="Comederos y bebederos para roedores" /></a>&nbsp; &nbsp; &nbsp;<a title="Juguetes roedor" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/juguetes-y-diversion.html" target="_self"><img src="http://www.misterguau.com/media//Juguetes_y_diversion.jpg" alt="Juguetes y diversion roedores" /></a>&nbsp; &nbsp; <a title="Henos y bases para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/heno-bases-y-arenas.html" target="_self"><img src="http://www.misterguau.com/media//Henos_y_bases.jpg" alt="Henos y bases para roedores" /></a>&nbsp;&nbsp;<a title="Higiene y belleza roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/higiene-y-belleza.html" target="_self"><img src="http://www.misterguau.com/media//CUidados_e_higiene.jpg" alt="Higiene y cuidados para roedores" /></a></span></span></strong></span></strong></span></span></span></span></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><span style="font-size: x-small;"><strong><strong><span style="color: #999999;"><span style="font-size: x-small;"><a style="font-weight: bold; font-size: x-small;" title="Comederos bebederos" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/comederos-y-bebederos.html" target="_self">Comederos / Bebederos</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Juguetes y diversion roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/juguetes-y-diversion.html" target="_self">Juguetes y diversi&oacute;n</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="henos y bases" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/heno-bases-y-arenas.html" target="_self">Henos y bases</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Higiene y belleza roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/higiene-y-belleza.html" target="_self">Higiene y belleza</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span></strong></strong></span></strong></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="color: #999999;"><span style="font-size: x-small;"><br /></span></span></strong></span></strong></p>
<p><strong><span style="font-size: x-small;"><strong><span style="color: #999999;"><span style="font-size: x-small;"><br /></span></span></strong></span></strong></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><strong><span style="font-size: x-small;"><strong><span style="color: #999999;"><span style="font-size: x-small;"><a title="Casitas y cunas roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/casitas-y-cunas.html" target="_self"></a><a title="Collares y arneses para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/collares-y-arneses.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Arneses_y_correas.jpg" alt="Collares y arneses para roedores" /></a>&nbsp; &nbsp; &nbsp;<a title="Casitas roedor" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/casitas-y-cunas.html" target="_self"><img src="http://www.misterguau.com/media//Casitas_y_cunas.jpg" alt="Casitas y cunas para roedor" /></a>&nbsp; &nbsp; <a title="Jaulas para roedor" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/jaulas.html" target="_self"><img src="http://www.misterguau.com/media//Jaulas_roedor.jpg" alt="Jaulas para roedor" /></a>&nbsp; &nbsp; <a title="Transportines roedor" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/transportines-viajes.html" target="_self"><img src="http://www.misterguau.com/media//Transportines_3.jpg" alt="Transportines para roedor" /></a></span></span></strong></span></strong></strong></span></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><strong><span style="font-size: x-small;"><strong><span style="color: #999999;"><span style="font-size: x-small;"><span style="font-weight: bold;">&nbsp;&nbsp;<a style="font-weight: bold; font-size: x-small;" title="Arneses y collares para roedores" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/collares-y-arneses.html" target="_self">Arneses y collares</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Casitas y cunas" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/casitas-y-cunas.html" target="_self">Casitas y cunas roedor</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Jaulas para roedor" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/jaulas.html" target="_self">Jaulas roedor</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Transportines roedor" href="http://www.misterguau.com/index.php/roedores-y-mamiferos/transportines-viajes.html" target="_self">Transportines roedor</a>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-weight: bold;">&nbsp;</span></span></span></strong></span></strong></strong></span></p>
<p><span style="color: #999999;"><span style="font-size: x-small;"><br /></span></span></p>
<p>&nbsp;</p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><strong><span style="font-size: x-small;"><strong><span style="font-weight: bold;"><span style="color: #999999;"><span style="font-size: x-small;"><br /></span></span></span></strong></span></strong></strong></span></p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>&nbsp;</p>        <div class="category-products">
    <div class="toolbar">
    <div class="pager">
        <p class="amount">
                            <strong>200 Artículo(s)</strong>
                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
                    </div>
    </div>
    </div>

                <div class="listing-border">
        <ol class="products-list" id="products-list">
	                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-cobaya-regular-hami-form.html" title="Alimento cobaya regular Hami Form">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/f/hf_complet_cobaya_motri_700gr_4221.jpg"  alt="Alimento cobaya regular Hami Form" title="Alimento cobaya regular Hami Form" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-cobaya-regular-hami-form.html" title="Alimento cobaya regular Hami Form"><b>Alimento cobaya regular Hami Form</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-cobaya-regular-hami-form.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5527/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Por su presentación original y su fórmula específica, este alimento es una comida completa y equilibrada. La alfalfa, planta favorita del conejillo de indias, se deshidrata, conservando así su aroma y su calidad.  El tamaño y la forma de los gránulos han sido estudiados para facilitar su consumo. Su dureza ayuda a una buena higiene dental. Formato: 700g                    <a href="http://www.misterguau.com/index.php/alimento-cobaya-regular-hami-form.html" title="Alimento cobaya regular Hami Form">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-conejos-enanos-regular-hami-form.html" title="Alimento conejos enanos regular Hami Form">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/f/hf_complet_conejo_regul_700gr_4231.jpg"  alt="Alimento conejos enanos regular Hami Form" title="Alimento conejos enanos regular Hami Form" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-conejos-enanos-regular-hami-form.html" title="Alimento conejos enanos regular Hami Form"><b>Alimento conejos enanos regular Hami Form</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-conejos-enanos-regular-hami-form.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5526/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Por su presentación original y su fórmula específica, este alimento es una comida completa y equilibrada. La alfalfa, planta preferida por los conejos, se deshidrata, conservando así su aroma y su calidad. Este alimento ha sido especialmente formulado para proporcionar todos los elementos necesarios para el cuerpo del conejo enano: las fuentes de energía, proteínas, ácidos grasos, minerales y vitaminas. Formato: 700g                    <a href="http://www.misterguau.com/index.php/alimento-conejos-enanos-regular-hami-form.html" title="Alimento conejos enanos regular Hami Form">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alimento-hamster-regular-hami-form.html" title="Alimento hamster regular Hami Form">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/f/hf_complet_hamstr_acti_700gr_420.jpg"  alt="Alimento hamster regular Hami Form" title="Alimento hamster regular Hami Form" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alimento-hamster-regular-hami-form.html" title="Alimento hamster regular Hami Form"><b>Alimento hamster regular Hami Form</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alimento-hamster-regular-hami-form.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5528/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pienso completo para roedores omnívoros. Contiene hierbas aromáticas con acción fortalecedora del sistema inmunitario. La rica y variada composición de Hamster ACTI (vitaminas, fIbras y minerales) contribuye a la buena armonía de la fora intestinal. De esta manera asegura el equilibrio intestinal de su roedor a través de un sistema inmunitario fuerte y eficaz. Formato: 700g                    <a href="http://www.misterguau.com/index.php/alimento-hamster-regular-hami-form.html" title="Alimento hamster regular Hami Form">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-correa-conejo-arco-iris.html" title="Arnés + Correa Conejo arco-iris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_28_4.jpg"  alt="Arnés + Correa Conejo arco-iris" title="Arnés + Correa Conejo arco-iris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-correa-conejo-arco-iris.html" title="Arnés + Correa Conejo arco-iris"><b>Arnés + Correa Conejo arco-iris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,20&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 4.05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-correa-conejo-arco-iris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1616/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juego de arnés + correa conjuntado para sacar a pasear a nuestro conejo por la calle, playa, campo o jardín. Ajustable. Color arco-iris. Tamaño cuerda: 140cm                    <a href="http://www.misterguau.com/index.php/arnes-correa-conejo-arco-iris.html" title="Arnés + Correa Conejo arco-iris">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-correa-conejo-roja.html" title="Arnés + Correa Conejo roja">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_18_12.jpg"  alt="Arnés + Correa Conejo roja" title="Arnés + Correa Conejo roja" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-correa-conejo-roja.html" title="Arnés + Correa Conejo roja"><b>Arnés + Correa Conejo roja</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,20&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 4.05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-correa-conejo-roja.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1617/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juego de arnés + correa conjuntado para sacar a pasear a nuestro conejo por la calle, playa, campo o jardín. Ajustable. Color rojo. Con cierre de seguridad. Tamaño cuerda: 140cm                    <a href="http://www.misterguau.com/index.php/arnes-correa-conejo-roja.html" title="Arnés + Correa Conejo roja">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-de-paseo-para-conejo-o-gato-nayeco.html" title="Arnés de paseo para conejo o gato Nayeco (L)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/o/jogging_tl_conejo-gato400x-zz-ro61003.jpg"  alt="Arnés de paseo para conejo o gato Nayeco (L)" title="Arnés de paseo para conejo o gato Nayeco (L)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-de-paseo-para-conejo-o-gato-nayeco.html" title="Arnés de paseo para conejo o gato Nayeco (L)"><b>Arnés de paseo para conejo o gato Nayeco (L)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-de-paseo-para-conejo-o-gato-nayeco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4183/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pasear con nuestro gato puede ser una delicia! Si lo acostumbramos desde pequeño son capaces de pasear como los perros y disfrutar del exterior. También útil para controlarlo por el jardín o terraza. Suave y acolchado. Con correa de gancho reforzado. En color rojo o azul. Medidas: De 20 a 25cm de cuello - De 30 a 35cm de pecho                    <a href="http://www.misterguau.com/index.php/arnes-de-paseo-para-conejo-o-gato-nayeco.html" title="Arnés de paseo para conejo o gato Nayeco (L)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arnes-de-paseo-para-conejo-o-huron-nayeco.html" title="Arnés de paseo para conejo o hurón Nayeco (M)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/o/jogging_t_m_conejo-_huron400x-zz-ro61002.jpg"  alt="Arnés de paseo para conejo o hurón Nayeco (M)" title="Arnés de paseo para conejo o hurón Nayeco (M)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arnes-de-paseo-para-conejo-o-huron-nayeco.html" title="Arnés de paseo para conejo o hurón Nayeco (M)"><b>Arnés de paseo para conejo o hurón Nayeco (M)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arnes-de-paseo-para-conejo-o-huron-nayeco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4596/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pasear a nuestro conejo o hurón puede ser una delicia! Si lo acostumbramos desde pequeño son capaces de pasear como los perros y disfrutar del exterior. También útil para controlarlo por el jardín o terraza. Suave y acolchado. Con correa de gancho reforzado. En color rojo o azul. Medidas: De 20 a 25cm de cuello - De 30 a 35cm de pecho                    <a href="http://www.misterguau.com/index.php/arnes-de-paseo-para-conejo-o-huron-nayeco.html" title="Arnés de paseo para conejo o hurón Nayeco (M)">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-golosinas-de-leche-para-roedor.html" title="Axis golosinas de leche para roedor">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/o/golosinas_leche_roedor_axis.jpg"  alt="Axis golosinas de leche para roedor" title="Axis golosinas de leche para roedor" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-golosinas-de-leche-para-roedor.html" title="Axis golosinas de leche para roedor"><b>Axis golosinas de leche para roedor</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-golosinas-de-leche-para-roedor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2632/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas golosinas con forma de gotita para todo tipo de roedores, como conejos, hamster, cobayas, etc. Ideales por su tamaño para poder dosificar correctamente los premios. Les aportan vitaminas y minerales. Sabor leche. Formato: 125gr.                    <a href="http://www.misterguau.com/index.php/axis-golosinas-de-leche-para-roedor.html" title="Axis golosinas de leche para roedor">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-golosinas-de-yogurt-para-roedor.html" title="Axis golosinas de yogurt para roedor">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/o/golosinas_yogur_roedor_axis.jpg"  alt="Axis golosinas de yogurt para roedor" title="Axis golosinas de yogurt para roedor" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-golosinas-de-yogurt-para-roedor.html" title="Axis golosinas de yogurt para roedor"><b>Axis golosinas de yogurt para roedor</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-golosinas-de-yogurt-para-roedor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2663/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas golosinas con forma de gotita para todo tipo de roedores, como conejos, hamster, cobayas, etc. Ideales por su tamaño para poder dosificar correctamente los premios. Les aportan vitaminas y minerales. Sabor yogurt. Formato: 125gr.                    <a href="http://www.misterguau.com/index.php/axis-golosinas-de-yogurt-para-roedor.html" title="Axis golosinas de yogurt para roedor">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-nature-select-cobaya.html" title="Axis Nature Select cobaya">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/e/select_menu_cobaya_2.jpg"  alt="Axis Nature Select cobaya" title="Axis Nature Select cobaya" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-nature-select-cobaya.html" title="Axis Nature Select cobaya"><b>Axis Nature Select cobaya</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-nature-select-cobaya.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2094/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimentación completa para todo tipo de cobayas. Compuesta a base de trigo, pipas, maíz, zanahoria y judías. Ingredientes totalmente naturales y deshidratados para una mejor conservación. Una delicia! Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/axis-nature-select-cobaya.html" title="Axis Nature Select cobaya">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-nature-select-conejo.html" title="Axis Nature Select conejo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/e/select_menu_conejo_2.jpg"  alt="Axis Nature Select conejo" title="Axis Nature Select conejo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-nature-select-conejo.html" title="Axis Nature Select conejo"><b>Axis Nature Select conejo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-nature-select-conejo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2095/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimentación completa para todo tipo de conejos. Compuesta a base de trigo, pipas, maíz, zanahoria y judías. Ingredientes totalmente naturales y deshidratados para una mejor conservación. Una delicia! Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/axis-nature-select-conejo.html" title="Axis Nature Select conejo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/axis-nature-select-hamster.html" title="Axis Nature Select hamster">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/e/select_menu_hamster_2.jpg"  alt="Axis Nature Select hamster" title="Axis Nature Select hamster" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/axis-nature-select-hamster.html" title="Axis Nature Select hamster"><b>Axis Nature Select hamster</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/axis-nature-select-hamster.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2093/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimentación completa para todo tipo de hamsters. Compuesta a base de trigo, pipas, bellota, zanahoria y cacahuetes. Ingredientes totalmente naturales y deshidratados para una mejor conservación. Una delicia! Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/axis-nature-select-hamster.html" title="Axis Nature Select hamster">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-conejo-miel.html" title="Barritas Axis conejo miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_conejo_miel.jpg"  alt="Barritas Axis conejo miel" title="Barritas Axis conejo miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-conejo-miel.html" title="Barritas Axis conejo miel"><b>Barritas Axis conejo miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-conejo-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2630/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Las barritas de Biozoo son un alimento complementario sano y energético a base de cereales y miel. Además de complementar su dieta divertirán y entretendrán a nuestro pequeño amigo, dado que la madera de su interior les ayudará a desgastar los dientes. Contiene 2 barritas por caja.                    <a href="http://www.misterguau.com/index.php/barritas-axis-conejo-miel.html" title="Barritas Axis conejo miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-hamster-fruta.html" title="Barritas Axis hamster fruta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_hamster_fruta.jpg"  alt="Barritas Axis hamster fruta" title="Barritas Axis hamster fruta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-hamster-fruta.html" title="Barritas Axis hamster fruta"><b>Barritas Axis hamster fruta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-hamster-fruta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2629/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Las barritas de Biozoo son un alimento complementario sano y energético a base de cereales y frutas. Además de complementar su dieta divertirán y entretendrán a nuestro pequeño amigo, dado que la madera de su interior les ayudará a desgastar los dientes. Contiene 2 barritas por caja.                    <a href="http://www.misterguau.com/index.php/barritas-axis-hamster-fruta.html" title="Barritas Axis hamster fruta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/barritas-axis-hamster-miel.html" title="Barritas Axis hamster miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/barritas_axis_hamster_miel.jpg"  alt="Barritas Axis hamster miel" title="Barritas Axis hamster miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/barritas-axis-hamster-miel.html" title="Barritas Axis hamster miel"><b>Barritas Axis hamster miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/barritas-axis-hamster-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2628/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Las barritas de Biozoo son un alimento complementario sano y energético a base de cereales y miel. Además de complementar su dieta divertirán y entretendrán a nuestro pequeño amigo, dado que la madera de su interior les ayudará a desgastar los dientes. Contiene 2 barritas por caja.                    <a href="http://www.misterguau.com/index.php/barritas-axis-hamster-miel.html" title="Barritas Axis hamster miel">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bloque-de-sal-para-roedores-cunipic.html" title="Bloque de sal para roedores Cunipic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/l/bloque_sal_cunipic.jpg"  alt="Bloque de sal para roedores Cunipic" title="Bloque de sal para roedores Cunipic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bloque-de-sal-para-roedores-cunipic.html" title="Bloque de sal para roedores Cunipic"><b>Bloque de sal para roedores Cunipic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,45&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 1.90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bloque-de-sal-para-roedores-cunipic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5039/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Aporte extra de sales minerales para roedores y lagomorfos. Estos nutrientes, esenciales para todos los animales, fortalecerán los huesos de tu mascota, le aportarán mayor hidratación y equilibrarán los minerales presentes en su organismo. Tiene, además, un positivo efecto diurético.                    <a href="http://www.misterguau.com/index.php/bloque-de-sal-para-roedores-cunipic.html" title="Bloque de sal para roedores Cunipic">Saber más</a><br><br>
					<span class="required"><strong>22% de Dto! Ahorra 0.55&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bola-de-paseo-para-hamster-comun-o18cm.html" title="Bola de paseo para hamster común (Ø18cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/o/roedores_movil_mediano_18cm_7044.jpg"  alt="Bola de paseo para hamster común (Ø18cm)" title="Bola de paseo para hamster común (Ø18cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bola-de-paseo-para-hamster-comun-o18cm.html" title="Bola de paseo para hamster común (Ø18cm)"><b>Bola de paseo para hamster común (Ø18cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bola-de-paseo-para-hamster-comun-o18cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5478/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bola de paseo para que nuestro hamster común pueda salir de la jaula sin miedo a perderlo ni lastimarlo. En colores surtidos semi-transparentes. Medidas: Ø18cm                    <a href="http://www.misterguau.com/index.php/bola-de-paseo-para-hamster-comun-o18cm.html" title="Bola de paseo para hamster común (Ø18cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bola-de-paseo-para-hamster-enano-o12cm.html" title="Bola de paseo para hamster enano (Ø12cm)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_3.jpg"  alt="Bola de paseo para hamster enano (Ø12cm)" title="Bola de paseo para hamster enano (Ø12cm)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bola-de-paseo-para-hamster-enano-o12cm.html" title="Bola de paseo para hamster enano (Ø12cm)"><b>Bola de paseo para hamster enano (Ø12cm)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bola-de-paseo-para-hamster-enano-o12cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5477/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bola de paseo para que nuestro hamster enano pueda salir de la jaula sin miedo a perderlo ni lastimarlo. En colores surtidos semi-transparentes. Medidas: Ø12cm                    <a href="http://www.misterguau.com/index.php/bola-de-paseo-para-hamster-enano-o12cm.html" title="Bola de paseo para hamster enano (Ø12cm)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsa-de-transporte-para-hurones-pa4894.html" title="Bolsa de transporte para hurones PA4894">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_transporte_roedor_pa4894_84894099.jpg"  alt="Bolsa de transporte para hurones PA4894" title="Bolsa de transporte para hurones PA4894" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsa-de-transporte-para-hurones-pa4894.html" title="Bolsa de transporte para hurones PA4894"><b>Bolsa de transporte para hurones PA4894</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>33,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 21.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsa-de-transporte-para-hurones-pa4894.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3583/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Práctica bolsa de transporte para pequeños animales, especialmente diseñado para hurones. Podremos llevarte a tu amigo a todas partes. Con rejilla de ventilación y apertura superior. Tu mascota se sentirá cómoda y protegida mientras la sacas de su hábitat habitual. Material resistente y lavable. En color azul. Medidas: 37x20x15 cm                    <a href="http://www.misterguau.com/index.php/bolsa-de-transporte-para-hurones-pa4894.html" title="Bolsa de transporte para hurones PA4894">Saber más</a><br><br>
					<span class="required"><strong>35% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/calcio-sabor-frutas-para-roedor.html" title="Calcio sabor frutas para roedor">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/calcio_sabor_frutas_roedor_ro41001.jpg"  alt="Calcio sabor frutas para roedor" title="Calcio sabor frutas para roedor" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/calcio-sabor-frutas-para-roedor.html" title="Calcio sabor frutas para roedor"><b>Calcio sabor frutas para roedor</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/calcio-sabor-frutas-para-roedor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3776/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Los roedores necesitan calcio extra para complementar su alimentación básica. Además de nutrientes, este calcio le proporcionará un elemento que roer para limar y recortar sus dientes. Con sabor a multi-fruta y forma de cabeza de conejito.                     <a href="http://www.misterguau.com/index.php/calcio-sabor-frutas-para-roedor.html" title="Calcio sabor frutas para roedor">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/casita-bota-para-hamster-ny.html" title="Casita bota para hamster NY">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bota_roedor_vinilo_10cm.jpg"  alt="Casita bota para hamster NY" title="Casita bota para hamster NY" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/casita-bota-para-hamster-ny.html" title="Casita bota para hamster NY"><b>Casita bota para hamster NY</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/casita-bota-para-hamster-ny.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4151/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Casita muy divertida para nuestro hamster. Realizada en resistente vinilo no tóxico y con forma de bota. Ideal para hamsters de todo tipo. Con orificio en la parte superior y delantera. Medidas: 10cm                    <a href="http://www.misterguau.com/index.php/casita-bota-para-hamster-ny.html" title="Casita bota para hamster NY">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/casita-para-hamster-castillo.html" title="Casita para hamster Castillo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/castle_17x15x12cm.jpg"  alt="Casita para hamster Castillo" title="Casita para hamster Castillo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/casita-para-hamster-castillo.html" title="Casita para hamster Castillo"><b>Casita para hamster Castillo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/casita-para-hamster-castillo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4368/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete casita realizada en madera 100% natural, ideal como escondite, juego o para roer y mantener los dientes de nuestros hamster en perfecto estado. Decora su jaula con este maravilloso castillo medieval!. Medidas: 17x15x12cm                    <a href="http://www.misterguau.com/index.php/casita-para-hamster-castillo.html" title="Casita para hamster Castillo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/casita-para-hamster-lake-home.html" title="Casita para hamster Lake Home">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/l/a/lake_home_21x7x19cm_ro30021.jpg"  alt="Casita para hamster Lake Home" title="Casita para hamster Lake Home" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/casita-para-hamster-lake-home.html" title="Casita para hamster Lake Home"><b>Casita para hamster Lake Home</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/casita-para-hamster-lake-home.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5041/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete casita realizada en madera 100% natural, ideal como escondite, juego o para roer y mantener los dientes de nuestros hamster en perfecto estado. Decora su jaula con esta casita en el lago!. Medidas: 21x7x19cm                    <a href="http://www.misterguau.com/index.php/casita-para-hamster-lake-home.html" title="Casita para hamster Lake Home">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/casita-para-hamster-north-home.html" title="Casita para hamster North home">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/o/north_home_13x17x13cm400x-zz-ro30024.jpg"  alt="Casita para hamster North home" title="Casita para hamster North home" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/casita-para-hamster-north-home.html" title="Casita para hamster North home"><b>Casita para hamster North home</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/casita-para-hamster-north-home.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4371/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete casita realizada en madera 100% natural, ideal como escondite, juego o para roer y mantener los dientes de nuestros hamster en perfecto estado. Decora su jaula con esta casita nórdica!. Medidas: 13x17x13cm                    <a href="http://www.misterguau.com/index.php/casita-para-hamster-north-home.html" title="Casita para hamster North home">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/casita-para-hamster-rocker.html" title="Casita para hamster Rocker">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/o/rocker_12x9x9cm_ro30026.jpg"  alt="Casita para hamster Rocker" title="Casita para hamster Rocker" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/casita-para-hamster-rocker.html" title="Casita para hamster Rocker"><b>Casita para hamster Rocker</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/casita-para-hamster-rocker.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5040/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete casita realizada en madera 100% natural, ideal como escondite, juego o para roer y mantener los dientes de nuestros hamster en perfecto estado. Decora su jaula con esta casita!. Medidas: 12x9x9cm                    <a href="http://www.misterguau.com/index.php/casita-para-hamster-rocker.html" title="Casita para hamster Rocker">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/casita-para-hamster-tundra-home.html" title="Casita para hamster Tundra home">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/u/tundra_home_14x7x14cm.jpg"  alt="Casita para hamster Tundra home" title="Casita para hamster Tundra home" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/casita-para-hamster-tundra-home.html" title="Casita para hamster Tundra home"><b>Casita para hamster Tundra home</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/casita-para-hamster-tundra-home.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4370/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete casita realizada en madera 100% natural, ideal como escondite, juego o para roer y mantener los dientes de nuestros hamster en perfecto estado. Decora su jaula con esta casita de montaña!. Medidas: 14x7x14cm                    <a href="http://www.misterguau.com/index.php/casita-para-hamster-tundra-home.html" title="Casita para hamster Tundra home">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-de-acero-inoxidable-con-percha-para-roedor-3-tama-os.html" title="Comedero de acero inoxidable con percha para roedor (3 tamaños)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_roedor_inox_cpercha.jpg"  alt="Comedero de acero inoxidable con percha para roedor (3 tamaños)" title="Comedero de acero inoxidable con percha para roedor (3 tamaños)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-de-acero-inoxidable-con-percha-para-roedor-3-tama-os.html" title="Comedero de acero inoxidable con percha para roedor (3 tamaños)"><b>Comedero de acero inoxidable con percha para roedor (3 tamaños)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-de-acero-inoxidable-con-percha-para-roedor-3-tama-os.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2668/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable y con percha metálica para poder sujetarse a los barrotes horizontales de la jaula. Percha y cuenco desmontables, lo que facilita su limpieza. Higiénico. Disponible en 3 tamaños: T1 (Ø7.5cm) - T2 (Ø9cm) - T3 (12cm)                    <a href="http://www.misterguau.com/index.php/comedero-de-acero-inoxidable-con-percha-para-roedor-3-tama-os.html" title="Comedero de acero inoxidable con percha para roedor (3 tamaños)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-para-hamster-voltrega.html" title="Comedero para hamster Voltregá">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_de_1_comedero_hamster.jpg"  alt="Comedero para hamster Voltregá" title="Comedero para hamster Voltregá" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-para-hamster-voltrega.html" title="Comedero para hamster Voltregá"><b>Comedero para hamster Voltregá</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-para-hamster-voltrega.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2548/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero plástico para hamsters. Realizado en plástico no-tóxico, por lo que no hay problema si nuestro hamster lo royera. Colores surtidos. Ideal para hamsters rusos, roborowski o de pequeño tamaño.                    <a href="http://www.misterguau.com/index.php/comedero-para-hamster-voltrega.html" title="Comedero para hamster Voltregá">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/copos-de-madera-rody.html" title="Copos de madera Rody">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/copos_madera_1k_rody_1.jpg"  alt="Copos de madera Rody" title="Copos de madera Rody" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/copos-de-madera-rody.html" title="Copos de madera Rody"><b>Copos de madera Rody</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/copos-de-madera-rody.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1308/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Copos de madera antialergénicos para todo tipo de roedores. Absorbentes y fáciles de limpiar. Higiénica y biodegradable. Formato: 4Kg.                    <a href="http://www.misterguau.com/index.php/copos-de-madera-rody.html" title="Copos de madera Rody">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cortau-as-peque-o-kl.html" title="Cortauñas pequeño KL">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_79.jpg"  alt="Cortauñas pequeño KL" title="Cortauñas pequeño KL" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cortau-as-peque-o-kl.html" title="Cortauñas pequeño KL"><b>Cortauñas pequeño KL</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,55&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 4.75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cortau-as-peque-o-kl.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3358/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cortauñas fácil y cómodo para el corte de uñas de perros pequeños, gatos o roedores. Con hendidura especial interior para amoldarse mejor al corte recto. Realizado en acero Inox. Con forma ergonómica y con agarre suave y antideslizante, diseñada por Karlie Flamingo. Medidas: 8cm * 5.5cm - 19 gramos                    <a href="http://www.misterguau.com/index.php/cortau-as-peque-o-kl.html" title="Cortauñas pequeño KL">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-ardillas.html" title="Cunipic alimento Ardillas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_ardillas.jpg"  alt="Cunipic alimento Ardillas" title="Cunipic alimento Ardillas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-ardillas.html" title="Cunipic alimento Ardillas"><b>Cunipic alimento Ardillas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-ardillas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/470/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo especialmente elaborado para la alimentación de todo tipo de ardillas, gracias a su fuente equilibrada de proteínas, vitaminas, minerales y energía. Su composición incorpora nueces, cacahuete, avellanas, almendras, piñones, uva pasa y frutas del bosque. Formato: 800gr                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-ardillas.html" title="Cunipic alimento Ardillas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-chinchilla.html" title="Cunipic alimento Chinchilla ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_chinchilla.jpg"  alt="Cunipic alimento Chinchilla " title="Cunipic alimento Chinchilla " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-chinchilla.html" title="Cunipic alimento Chinchilla "><b>Cunipic alimento Chinchilla </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-chinchilla.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/476/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento enriquecido con vitaminas y minerales desarrollados especialmente para alimentar toda clase de chinchillas, es un dieta equilibrada gracias a sus ingredientes, tales como: cereales, productos de origen vegetal, sustancias minerales, aceites y grasa vegetal. Formato: 800gr, 3Kg.                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-chinchilla.html" title="Cunipic alimento Chinchilla ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-cobaya.html" title="Cunipic alimento Cobaya">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_cobayas.jpg"  alt="Cunipic alimento Cobaya" title="Cunipic alimento Cobaya" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-cobaya.html" title="Cunipic alimento Cobaya"><b>Cunipic alimento Cobaya</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-cobaya.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/477/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo enriquecido con minerales y vitaminas (aporte extra de Vit.C), especialmente desarrollado para la alimentación de cobayas. Compuesto por pienso multipartícula, cereales, extrusionados y copos de maíz y gránulos de alfalfa deshidratada.  2 Formatos: 800gr o 3Kg                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-cobaya.html" title="Cunipic alimento Cobaya">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-adult.html" title="Cunipic alimento Conejo (Adult)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_alimento_conejo_adult.jpg"  alt="Cunipic alimento Conejo (Adult)" title="Cunipic alimento Conejo (Adult)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-adult.html" title="Cunipic alimento Conejo (Adult)"><b>Cunipic alimento Conejo (Adult)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-conejo-adult.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/478/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pienso multipartícula, compuesto por un 60% de barritas y un 40% de cereales, tales como: copos de maíz y gránulos de alfalfa deshidratada. Alimento enriquecido con vitaminas, incorpora ácidos omega 3 y un componente anti-olor. 3 Formatos: 800gr, 3Kg, 5Kg.                     <a href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-adult.html" title="Cunipic alimento Conejo (Adult)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-baby.html" title="Cunipic alimento Conejo (Baby)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_conejos_baby.jpg"  alt="Cunipic alimento Conejo (Baby)" title="Cunipic alimento Conejo (Baby)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-baby.html" title="Cunipic alimento Conejo (Baby)"><b>Cunipic alimento Conejo (Baby)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-conejo-baby.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/479/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pienso en barritas de 3 mm, pensado exclusivamente en la seguridad digestiva de las mascotas durante los periodos donde el animal sufre más estrés. Alimento completo enriquecido con vitaminas y derivados lácteos, incorpora ácidos omega 3 y un componente anti-olor. 2 Formatos: 800gr o 3Kg.                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-baby.html" title="Cunipic alimento Conejo (Baby)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-super-toy-adulto.html" title="Cunipic alimento conejo Super-Toy adulto">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_conejo_adult_super_toy_2.jpg"  alt="Cunipic alimento conejo Super-Toy adulto" title="Cunipic alimento conejo Super-Toy adulto" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-super-toy-adulto.html" title="Cunipic alimento conejo Super-Toy adulto"><b>Cunipic alimento conejo Super-Toy adulto</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-conejo-super-toy-adulto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2318/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    A partir de los 6 meses. Alimento natural y equilibrado desarrollado por el equipo de nutricionistas Cunipic, especialmente formulado para el conejo Toy, Mini y SuperToy. Mantiene la salud física y psíquica del conejo ofreciendo una amplia gama de colores, olores, texturas y materias primas que lo harán irresistible para su mascota. Su fórmula asegura la correcta función fisiológica del tracto digestivo. Formato: 2.5Kg.                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-conejo-super-toy-adulto.html" title="Cunipic alimento conejo Super-Toy adulto">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-conejos-super-toy-baby.html" title="Cunipic alimento conejos Super-Toy baby">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_conejo_baby_super_toy_2.jpg"  alt="Cunipic alimento conejos Super-Toy baby" title="Cunipic alimento conejos Super-Toy baby" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-conejos-super-toy-baby.html" title="Cunipic alimento conejos Super-Toy baby"><b>Cunipic alimento conejos Super-Toy baby</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-conejos-super-toy-baby.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2317/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Hasta los 6 meses de edad. Alimento natural y equilibrado, especialmente formulado para conejos TOY, MINI Y SUPERTOY, en edad BABY. Mantiene la salud fisica y psiquica del conejo y asegurara la correcta funcion fisiologica del tracto digestivo. Incluye leche y fruta deshidratada. Formato: 700gr, 2.5Kg.                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-conejos-super-toy-baby.html" title="Cunipic alimento conejos Super-Toy baby">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-hamster.html" title="Cunipic alimento Hamster">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_hamster_adult.jpg"  alt="Cunipic alimento Hamster" title="Cunipic alimento Hamster" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-hamster.html" title="Cunipic alimento Hamster"><b>Cunipic alimento Hamster</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-hamster.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/487/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo con vitaminas, minerales y fibra desarrollado especialmente para la alimentación de todo tipo de hamsters y pequeños roedores. Con cereales, cacahuete, uva pasa, pipa y sorgo. Desarrollado especialmente para la alimentación de todo tipo de hámsters y pequeños roedores. Incluye un componente antiolor. Con Omega 3 y cereales. Formato: 800gr                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-hamster.html" title="Cunipic alimento Hamster">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-huron-adult.html" title="Cunipic alimento Hurón (Adult)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_huron_adulto.jpg"  alt="Cunipic alimento Hurón (Adult)" title="Cunipic alimento Hurón (Adult)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-huron-adult.html" title="Cunipic alimento Hurón (Adult)"><b>Cunipic alimento Hurón (Adult)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-huron-adult.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/488/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado para el mantenimiento de hurones adultos enriquecido con vitaminas y minerales que proporcionan los nutrientes necesarios para el buen estado general de su mascota. Formatos: 600gr., 2Kg.                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-huron-adult.html" title="Cunipic alimento Hurón (Adult)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-huron-baby.html" title="Cunipic alimento Hurón (Baby)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_hurones_baby.jpg"  alt="Cunipic alimento Hurón (Baby)" title="Cunipic alimento Hurón (Baby)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-huron-baby.html" title="Cunipic alimento Hurón (Baby)"><b>Cunipic alimento Hurón (Baby)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-huron-baby.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/489/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado para el crecimiento de hurones baby enriquecido con vitaminas y minerales que proporcionan los nutrientes necesarios para el buen desarrollo general de su mascota. Para hurones baby de menos de 1 año. Enriquecido con vitaminas y minerales que proporcionan los nutrientes necesarios para el buen estado de estos mustélidos. Formatos: 600gr , 2Kg                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-huron-baby.html" title="Cunipic alimento Hurón (Baby)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-jerbos.html" title="Cunipic alimento para Jerbos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_pienso_gerbo_700gr_gerbo7.jpg"  alt="Cunipic alimento para Jerbos" title="Cunipic alimento para Jerbos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-jerbos.html" title="Cunipic alimento para Jerbos"><b>Cunipic alimento para Jerbos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-jerbos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2615/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y natural diseñado por clínicos veterinarios de animales exóticos y nutricionistas especializados. Formulado con bajo porcentaje de grasas según los requerimientos del jerbo.  Ventajas: Cuidado dental - Con ingredientes naturales - Bajo en grasas - Proteínas & fibra. Formato: 800gr                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-jerbos.html" title="Cunipic alimento para Jerbos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-ratas.html" title="Cunipic alimento para ratas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_alimento_rata.jpg"  alt="Cunipic alimento para ratas" title="Cunipic alimento para ratas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-ratas.html" title="Cunipic alimento para ratas"><b>Cunipic alimento para ratas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-ratas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2616/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y natural para ratas. Formulado según los requerimientos específicos de estas inteligentes mascotas. Expertos nutricionistas y veterinarios de animales exóticos han colaborado para crear esta deliciosa y variada dieta. Incluye, entre muchos otros ingredientes, frutas, verduras, cereales y legumbres variadas. Formato: 800gr                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-ratas.html" title="Cunipic alimento para ratas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-alimento-para-ratones.html" title="Cunipic alimento para ratones">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_raton.jpg"  alt="Cunipic alimento para ratones" title="Cunipic alimento para ratones" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-alimento-para-ratones.html" title="Cunipic alimento para ratones"><b>Cunipic alimento para ratones</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-alimento-para-ratones.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2617/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y natural especialmente diseñado para ratones. Formulado por expertos nutricionistas y veterinarios clínicos de animales exóticos, cubre las necesidades especiales de estas divertidas y rápidas mascotas. Incluye entre otros muchos ingredientes, cereales, frutas, verduras y legumbres variadas. Formato: 800gr.                    <a href="http://www.misterguau.com/index.php/cunipic-alimento-para-ratones.html" title="Cunipic alimento para ratones">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-arena-de-ba-o-para-chinchilla.html" title="Cunipic Arena de baño para chinchilla">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_arena_bano_chinchilla_1k_archi.jpg"  alt="Cunipic Arena de baño para chinchilla" title="Cunipic Arena de baño para chinchilla" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-arena-de-ba-o-para-chinchilla.html" title="Cunipic Arena de baño para chinchilla"><b>Cunipic Arena de baño para chinchilla</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-arena-de-ba-o-para-chinchilla.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2790/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Las chinchillas tienen un pelaje muy fino y tupido. Para el correcto mantenimiento de la piel y del pelo de estas divertidas mascotas es necesario el Baño con arena mineral fina y estéril. Pelaje suave y cuidado: La arena de chinchilla es un producto 100% natural y sin polvo hecho a base de un mineral arcilloso, sus finos granos garantizan un óptimo cuidado de su pelaje absorbiendo la humedad y el exceso de grasa. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/cunipic-arena-de-ba-o-para-chinchilla.html" title="Cunipic Arena de baño para chinchilla">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-champu-biotina-roedores.html" title="Cunipic Champú Biotina (Roedores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_champu_biotina_roedores.jpg"  alt="Cunipic Champú Biotina (Roedores)" title="Cunipic Champú Biotina (Roedores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-champu-biotina-roedores.html" title="Cunipic Champú Biotina (Roedores)"><b>Cunipic Champú Biotina (Roedores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-champu-biotina-roedores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/472/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú especialmente formulado para todo tipo de roedores. Realizado con base de Biotina que ayuda a proteger la sensibilidad de piel. Dermoprotector. Elimina la suciedad y el sudor. Respeta el PH de la piel. Formato: 250ml                    <a href="http://www.misterguau.com/index.php/cunipic-champu-biotina-roedores.html" title="Cunipic Champú Biotina (Roedores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-champu-jojoba-huron.html" title="Cunipic Champú Jojoba (Hurón)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_champu_jojoba.jpg"  alt="Cunipic Champú Jojoba (Hurón)" title="Cunipic Champú Jojoba (Hurón)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-champu-jojoba-huron.html" title="Cunipic Champú Jojoba (Hurón)"><b>Cunipic Champú Jojoba (Hurón)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-champu-jojoba-huron.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/475/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú para hurones hecho a base de aceite de jojoba enriquecido con vitamina E. La jojoba le permitirá a su hurón lucir un pelo suave, nutrido y brillante gracias a su poder humectante. La jojoba es una de las plantas más usadas en los cuidados de la piel, ya que no sólo la hidrata y la suaviza, sino que es un regenerador celular, cicatrizante, tonificador y de alta penetración en la piel. Uso frecuente. Formato: 250ml                    <a href="http://www.misterguau.com/index.php/cunipic-champu-jojoba-huron.html" title="Cunipic Champú Jojoba (Hurón)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-cereales.html" title="Cunipic Crukiss - Snacks de Cereales">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_crukiss__snacks_de_cereales.jpg"  alt="Cunipic Crukiss - Snacks de Cereales" title="Cunipic Crukiss - Snacks de Cereales" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-cereales.html" title="Cunipic Crukiss - Snacks de Cereales"><b>Cunipic Crukiss - Snacks de Cereales</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-cereales.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/480/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Crukiss deliciosos bocaditos de cereales, útil para el entrenamiento de roedores así como complemento perfecto en su dieta. Cereales extrusionados de primera calidad, la mezcla de sabores idónea para ellos hará que deseen volver a comerlos. Alimento complementario destinado para roedores, especialmente pensado para conejos, hamsters, chinchillas, cobayas y ardillas. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-cereales.html" title="Cunipic Crukiss - Snacks de Cereales">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-fruta-deshidratada.html" title="Cunipic Crukiss - Snacks de fruta deshidratada">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_crukiss__snacks_fruta.jpg"  alt="Cunipic Crukiss - Snacks de fruta deshidratada" title="Cunipic Crukiss - Snacks de fruta deshidratada" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-fruta-deshidratada.html" title="Cunipic Crukiss - Snacks de fruta deshidratada"><b>Cunipic Crukiss - Snacks de fruta deshidratada</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-fruta-deshidratada.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/481/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Crukiss deliciosos bocaditos de fruta deshidratada, útil para el entrenamiento de roedores así como complemento perfecto en su dieta. Fruta deshidratada de primera calidad, la mezcla de sabores idónea para ellos hará que deseen volver a comerlas. Alimento complementario destinado para roedores, especialmente pensado para conejos, hamsters, chinchillas, cobayas y ardillas. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-fruta-deshidratada.html" title="Cunipic Crukiss - Snacks de fruta deshidratada">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-tacos-de-fruta.html" title="Cunipic Crukiss - Snacks de tacos de fruta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_crukiss_snacks_tacos_fruta.jpg"  alt="Cunipic Crukiss - Snacks de tacos de fruta" title="Cunipic Crukiss - Snacks de tacos de fruta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-tacos-de-fruta.html" title="Cunipic Crukiss - Snacks de tacos de fruta"><b>Cunipic Crukiss - Snacks de tacos de fruta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-tacos-de-fruta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/482/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Crukiss, deliciosos snacks de fruta, útil para el entrenamiento de roedores así como complemento perfecto en su dieta. 4 Barritas prensadas de distintas frutas, su textura dura le ayudará a conservar en perfecto estado su dentadura. Alimento complementario destinado para roedores, especialmente pensado para conejos, hamsters, chinchillas, cobayas y ardillas. Formato: 150gr                    <a href="http://www.misterguau.com/index.php/cunipic-crukiss-snacks-de-tacos-de-fruta.html" title="Cunipic Crukiss - Snacks de tacos de fruta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-dulkiss-snacks-bacon.html" title="Cunipic Dulkiss Snacks Bacon">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_dulkiss_sabor_bacon.jpg"  alt="Cunipic Dulkiss Snacks Bacon" title="Cunipic Dulkiss Snacks Bacon" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-dulkiss-snacks-bacon.html" title="Cunipic Dulkiss Snacks Bacon"><b>Cunipic Dulkiss Snacks Bacon</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-dulkiss-snacks-bacon.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/484/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento pensado para el entrenamiento de los hurones y como complemento en su dieta. Está elaborado con carne fresca de pollo y tocino, su forma es como un prisma de base cuadrada y su textura suave. Le ayudarán en el entrenamiento de su hurón. Complemento alimenticio. Forma y textura atractiva para ellos. Carne de primera calidad. Formato: 150gr                    <a href="http://www.misterguau.com/index.php/cunipic-dulkiss-snacks-bacon.html" title="Cunipic Dulkiss Snacks Bacon">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-dulkiss-snacks-pollo.html" title="Cunipic Dulkiss Snacks Pollo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_dulkiss_sabor_pollo.jpg"  alt="Cunipic Dulkiss Snacks Pollo" title="Cunipic Dulkiss Snacks Pollo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-dulkiss-snacks-pollo.html" title="Cunipic Dulkiss Snacks Pollo"><b>Cunipic Dulkiss Snacks Pollo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-dulkiss-snacks-pollo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/485/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento pensado para el entrenamiento de los hurones y como complemento en su dieta. Está elaborado con carne fresca de pollo, su forma es como un prisma de base rectangular y su textura suave. Le ayudarán en el entrenamiento de su hurón. Complemento alimenticio. Forma y textura atractiva para ellos. Carne de primera calidad. Formato: 150gr                    <a href="http://www.misterguau.com/index.php/cunipic-dulkiss-snacks-pollo.html" title="Cunipic Dulkiss Snacks Pollo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-heno-mountain-con-hojas-de-olivo.html" title="Cunipic heno Mountain Hay con hojas de olivo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_mountain_hay_con_hoja_de_olivo_natuhenm.jpg"  alt="Cunipic heno Mountain Hay con hojas de olivo" title="Cunipic heno Mountain Hay con hojas de olivo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-heno-mountain-con-hojas-de-olivo.html" title="Cunipic heno Mountain Hay con hojas de olivo"><b>Cunipic heno Mountain Hay con hojas de olivo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-heno-mountain-con-hojas-de-olivo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5481/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Está elaborado a base de heno de Festuca de la variedad Demeter, que resulta más verde a la vista, más fresca en boca y más aromática en olfato. ¡Una delicia para los sentidos de las pequeñas mascotas! El procedimiento de cultivo de esta variedad de heno se ha realizado utilizando de manera responsable el consumo del agua y de forma sostenible con el medio ambiente. Formato: 500g                    <a href="http://www.misterguau.com/index.php/cunipic-heno-mountain-con-hojas-de-olivo.html" title="Cunipic heno Mountain Hay con hojas de olivo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-heno-orchard-grass-con-manzana.html" title="Cunipic heno Orchard Grass (con manzana)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_orchard_grass_con_manzana_natuheno.jpg"  alt="Cunipic heno Orchard Grass (con manzana)" title="Cunipic heno Orchard Grass (con manzana)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-heno-orchard-grass-con-manzana.html" title="Cunipic heno Orchard Grass (con manzana)"><b>Cunipic heno Orchard Grass (con manzana)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-heno-orchard-grass-con-manzana.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5482/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Está elaborado a partir de las semillas de Ray Grass Westerworld de forma totalmente sostenible con el medio ambiente, utilizando el consumo de agua de manera responsable. Contiene sólo hojas tiernas, cortadas a los 20 días del crecimiento de la planta para asegurar la obtención de un heno fresco, no seco ni leñoso, y más verde que el resto de los henos del mercado. Formato: 500g                    <a href="http://www.misterguau.com/index.php/cunipic-heno-orchard-grass-con-manzana.html" title="Cunipic heno Orchard Grass (con manzana)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-heno-prensado-fibra.html" title="Cunipic Heno prensado Fibra (2 tamaños)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_heno_fibra_heno_prensado.jpg"  alt="Cunipic Heno prensado Fibra (2 tamaños)" title="Cunipic Heno prensado Fibra (2 tamaños)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-heno-prensado-fibra.html" title="Cunipic Heno prensado Fibra (2 tamaños)"><b>Cunipic Heno prensado Fibra (2 tamaños)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,45&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-heno-prensado-fibra.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/468/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ocupa poco espacio. La gran cantidad de fibra contribuye a una mejor digestión. El heno Cunipic proviene del norte de Europa, por lo que se garantiza su color verde, frescura y aroma. La gran cantidad de fibra contribuirá a que los animales tengan una mejor digestión. Formato: 1Kg, 5Kg                    <a href="http://www.misterguau.com/index.php/cunipic-heno-prensado-fibra.html" title="Cunipic Heno prensado Fibra (2 tamaños)">Saber más</a><br><br>
					<span class="required"><strong>29% de Dto! Ahorra 1&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-heno-wild-hay.html" title="Cunipic heno Wild Hay ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_4.jpg"  alt="Cunipic heno Wild Hay " title="Cunipic heno Wild Hay " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-heno-wild-hay.html" title="Cunipic heno Wild Hay "><b>Cunipic heno Wild Hay </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-heno-wild-hay.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5480/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Un nuevo y exclusivo heno para conejos y roedores por su procedencia, ya que está recolectado en prados de pastura silvestres del Pirineo. Estos prados contienen una variedad florística de hasta 45 especies como la festuca, el tomillo, la alfalfa, la esparceta, el llantén de hoja estrecha… especias todas ellas presentes en los prados pirenaicos de donde se obtiene este heno silvestre. Formato: 500g                    <a href="http://www.misterguau.com/index.php/cunipic-heno-wild-hay.html" title="Cunipic heno Wild Hay ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-naturlitter-fusta.html" title="Cunipic Naturlitter fusta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_naturlitter_fusta.jpg"  alt="Cunipic Naturlitter fusta" title="Cunipic Naturlitter fusta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-naturlitter-fusta.html" title="Cunipic Naturlitter fusta"><b>Cunipic Naturlitter fusta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-naturlitter-fusta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2612/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Naturlitter es un lecho ecológico universal pensado para todo tipo de animales tales como conejos, cobayas, pequeños roedores, gatos, pájaros, hurones, perros, etc. Gracias a su novedosa fórmula ecológica compuesta por viruta prensada, aromatizantes naturales: antibacterianos y repelente de parásitos. Por ello, podemos decir que este producto es ecológico y biodegradable. Formatos: 4l, 8l, 15l.                    <a href="http://www.misterguau.com/index.php/cunipic-naturlitter-fusta.html" title="Cunipic Naturlitter fusta">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-heno-sol-de-heno-con-diente-de-leon.html" title="Cunipic Sol de Heno con Diente de león">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_sol_de_heno_diente_de_leon.jpg"  alt="Cunipic Sol de Heno con Diente de león" title="Cunipic Sol de Heno con Diente de león" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-heno-sol-de-heno-con-diente-de-leon.html" title="Cunipic Sol de Heno con Diente de león"><b>Cunipic Sol de Heno con Diente de león</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,20&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-heno-sol-de-heno-con-diente-de-leon.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/469/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario compuesto por heno, que contribuye a una mejor digestión por su gran aporte de fibra. El diente de león aporta taninos que tienen un efecto curativo y cicatrizante sobre los animales, vitaminas A y C.  Es presentado en bolsas de medio kilo sin prensar. Formato: 500gr                    <a href="http://www.misterguau.com/index.php/cunipic-heno-sol-de-heno-con-diente-de-leon.html" title="Cunipic Sol de Heno con Diente de león">Saber más</a><br><br>
					<span class="required"><strong>24% de Dto! Ahorra 1.25&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-frutos-silvestres.html" title="Cunipic Sol de Heno con frutos silvestres">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_sol_de_heno_con_frutos_silvestres.jpg"  alt="Cunipic Sol de Heno con frutos silvestres" title="Cunipic Sol de Heno con frutos silvestres" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-frutos-silvestres.html" title="Cunipic Sol de Heno con frutos silvestres"><b>Cunipic Sol de Heno con frutos silvestres</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,20&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-frutos-silvestres.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2619/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                     Los frutos silvestres poseen una elevada actividad antioxidante y neutralizan la acción de los radicales libres nocivos para el organismo. Estas propiedades pueden dan lugar a efectos fisiológicos muy diversos; efectos antiinflamatorios y acción antibacteriana, entre otros. Estas frutas contienen antocianos, carotenoides y vitamina C. Formato: 500gr                    <a href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-frutos-silvestres.html" title="Cunipic Sol de Heno con frutos silvestres">Saber más</a><br><br>
					<span class="required"><strong>24% de Dto! Ahorra 1.25&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-manzanilla.html" title="Cunipic Sol de Heno con manzanilla">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_sol_de_heno_con_manzanilla.jpg"  alt="Cunipic Sol de Heno con manzanilla" title="Cunipic Sol de Heno con manzanilla" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-manzanilla.html" title="Cunipic Sol de Heno con manzanilla"><b>Cunipic Sol de Heno con manzanilla</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,20&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-manzanilla.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2621/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario compuesto por heno, que contribuye a una mejor digestión por su gran aporte de fibra. La manzanilla es digestiva, muy útil para mejorar el tránsito intestinal. Contiene un aceite esencial rico en azuleno, jugos amargos, glucósidos y colina, los cuales presentan virtudes antiinflamatorias, desinfectantes y diaforéticas. Formato: 500gr                    <a href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-manzanilla.html" title="Cunipic Sol de Heno con manzanilla">Saber más</a><br><br>
					<span class="required"><strong>24% de Dto! Ahorra 1.25&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-zanahoria.html" title="Cunipic Sol de Heno con zanahoria">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_sol_de_heno_con_zanahoria.jpg"  alt="Cunipic Sol de Heno con zanahoria" title="Cunipic Sol de Heno con zanahoria" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-zanahoria.html" title="Cunipic Sol de Heno con zanahoria"><b>Cunipic Sol de Heno con zanahoria</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>5,20&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-zanahoria.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2620/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario compuesto por heno, que contribuye a una mejor digestión por su gran aporte de fibra. De la zanahoria se extrae el caroteno que el organismo asimila como vitamina A, también aporta vitamina C y K. Formato: 500gr                    <a href="http://www.misterguau.com/index.php/cunipic-sol-de-heno-con-zanahoria.html" title="Cunipic Sol de Heno con zanahoria">Saber más</a><br><br>
					<span class="required"><strong>24% de Dto! Ahorra 1.25&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-sweet-dreams-color-algodon.html" title="Cunipic Sweet Dreams Color algodón">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_sweet_dreams_algodon_multicolor.jpg"  alt="Cunipic Sweet Dreams Color algodón" title="Cunipic Sweet Dreams Color algodón" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-sweet-dreams-color-algodon.html" title="Cunipic Sweet Dreams Color algodón"><b>Cunipic Sweet Dreams Color algodón</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-sweet-dreams-color-algodon.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2613/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Algodón especial para hámsters. Hecho a base de fibras naturales y tintes no tóxicos. Cama-nido de colores, especialmente diseñado para hámster, proporciona un ambiente natural, cálido y seco para el descanso de estas mascotas. Evita los atascos en dientes o abazones. Formato: 70gr                    <a href="http://www.misterguau.com/index.php/cunipic-sweet-dreams-color-algodon.html" title="Cunipic Sweet Dreams Color algodón">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cunipic-sweet-dreams-paper.html" title="Cunipic Sweet Dreams paper">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cunipic_sweet_dreams_paper.jpg"  alt="Cunipic Sweet Dreams paper" title="Cunipic Sweet Dreams paper" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cunipic-sweet-dreams-paper.html" title="Cunipic Sweet Dreams paper"><b>Cunipic Sweet Dreams paper</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cunipic-sweet-dreams-paper.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2614/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cama para pequeñas mascotas hecho a base de papel. Cama-nido hecha a base papel prensado 100% ecológico, especialmente pensado para todo tipo de mascotas pequeñas Este producto seco, cálido y muy fácil de manipular para ellos les permite crear su escondite aportando el calor necesario para sus siestas y noches frías. Formato: 100gr.                    <a href="http://www.misterguau.com/index.php/cunipic-sweet-dreams-paper.html" title="Cunipic Sweet Dreams paper">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/desodorante-en-polvo-rodent-para-jaulas.html" title="Desodorante en polvo Rodent para jaulas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/p/pp_deo_rodent_750gr_200404.jpg"  alt="Desodorante en polvo Rodent para jaulas" title="Desodorante en polvo Rodent para jaulas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/desodorante-en-polvo-rodent-para-jaulas.html" title="Desodorante en polvo Rodent para jaulas"><b>Desodorante en polvo Rodent para jaulas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/desodorante-en-polvo-rodent-para-jaulas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3895/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Este desodorante en polvo absorbe los malos olores y difunde un olor agradable en la jaula. Ideal para neutralizar malos olores como el del orín o restos de comida de la jaula de nuestros pequeños mamíferos. Totalmente seguro para la salud de nuestro pequeño amigo. Cada envase contiene de 15 a 20 dosis. Formato: 750gr                    <a href="http://www.misterguau.com/index.php/desodorante-en-polvo-rodent-para-jaulas.html" title="Desodorante en polvo Rodent para jaulas">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/gill-s-spray-anti-olores.html" title="Gill's Spray anti-olores">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/i/gills_spray_antiolores.jpg"  alt="Gill's Spray anti-olores" title="Gill's Spray anti-olores" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/gill-s-spray-anti-olores.html" title="Gill's Spray anti-olores"><b>Gill's Spray anti-olores</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/gill-s-spray-anti-olores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3591/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Elimina los malos olores que puedan dejar nuestras mascotas. Sus moléculas desodorantes no cubrenm los malos olores, sino que los captura y los eliminan definitivamente. Totalmente seguro para nuestras mascotas. Ayuda a combatir los malos olores de las zonas de aseo de perros y gatos. Formato: 300ml.<br />
                    <a href="http://www.misterguau.com/index.php/gill-s-spray-anti-olores.html" title="Gill's Spray anti-olores">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/heno-organico-biologico-hami-form.html" title="Heno orgánico-biológico Hami Form">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/f/hf_heno_biologico_20l_353.jpg"  alt="Heno orgánico-biológico Hami Form" title="Heno orgánico-biológico Hami Form" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/heno-organico-biologico-hami-form.html" title="Heno orgánico-biológico Hami Form"><b>Heno orgánico-biológico Hami Form</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/heno-organico-biologico-hami-form.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5523/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Con el fin de ofrecerle el mejor heno para sus pequeños compañeros, Hami form ha seleccionado un heno de calidad. Para asegurar la frescura y retener los mejores valores nutricionales, se seca el heno en granja. Tierno y rico en nutrientes, es bueno para la dieta equilibrada de sus pequeños compañeros. Formato: 20 litros (+/- 1Kg)                    <a href="http://www.misterguau.com/index.php/heno-organico-biologico-hami-form.html" title="Heno orgánico-biológico Hami Form">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/heno-organico-biologico-renovado-hami-form.html" title="Heno orgánico-biológico renovado Hami Form">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/f/hf_heno_bio-renovado_20l_359.jpg"  alt="Heno orgánico-biológico renovado Hami Form" title="Heno orgánico-biológico renovado Hami Form" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/heno-organico-biologico-renovado-hami-form.html" title="Heno orgánico-biológico renovado Hami Form"><b>Heno orgánico-biológico renovado Hami Form</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/heno-organico-biologico-renovado-hami-form.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5524/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Heno biológico cultivado sin pesticidas y renovado, para garantizar la calidad de su frescura, sabor, naturalidad. Excelente frescura e intensidad de color verde además de un gratificante aroma. 100% Natural.  Para asegurar la frescura y retener los mejores valores nutricionales, se seca el heno en granja. Tierno y rico en nutrientes, es bueno para la dieta equilibrada de sus pequeños compañeros. Formato: 20 litros (+/- 1.2Kg)                    <a href="http://www.misterguau.com/index.php/heno-organico-biologico-renovado-hami-form.html" title="Heno orgánico-biológico renovado Hami Form">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/heno-premium-diente-de-leon-hami-form.html" title="Heno Premium Diente de león Hami Form">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/h/f/hf_heno_prem_dientes_leon_20l_363.jpg"  alt="Heno Premium Diente de león Hami Form" title="Heno Premium Diente de león Hami Form" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/heno-premium-diente-de-leon-hami-form.html" title="Heno Premium Diente de león Hami Form"><b>Heno Premium Diente de león Hami Form</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/heno-premium-diente-de-leon-hami-form.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5525/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Heno muy fresco y verde con extraordinario aroma y calidad. Heno con diente de leon para enriquecer los paladares más exigentes. 100% Natural Para asegurar la frescura y retener los mejores valores nutricionales, se seca el heno en granja. Tierno y rico en nutrientes, es bueno para la dieta equilibrada de sus pequeños compañeros. Formato: 20 litros (+/- 1.2Kg)                    <a href="http://www.misterguau.com/index.php/heno-premium-diente-de-leon-hami-form.html" title="Heno Premium Diente de león Hami Form">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/iglu-para-hamsters-voltrega.html" title="Iglú para hamsters Voltregá">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/i/g/iglus_hamster_colores_variados3.jpg"  alt="Iglú para hamsters Voltregá" title="Iglú para hamsters Voltregá" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/iglu-para-hamsters-voltrega.html" title="Iglú para hamsters Voltregá"><b>Iglú para hamsters Voltregá</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/iglu-para-hamsters-voltrega.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3808/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Iglú para hamsters enanos (ruso, roborowski, etc) que es totalmente adaptable a algunas jaulas (todas las de hamster de Voltregá excepto 917,918,915,967,910,937,938,115,138,980). También puede ir suelto por jaulas de cualquier otro fabricante. Colores surtidos.                     <a href="http://www.misterguau.com/index.php/iglu-para-hamsters-voltrega.html" title="Iglú para hamsters Voltregá">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/insecticida-bio-care.html" title="Insecticida exterior Spray Bio-Care para el hogar">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/i/bio-care_insecticida.jpg"  alt="Insecticida exterior Spray Bio-Care para el hogar" title="Insecticida exterior Spray Bio-Care para el hogar" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/insecticida-bio-care.html" title="Insecticida exterior Spray Bio-Care para el hogar"><b>Insecticida exterior Spray Bio-Care para el hogar</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/insecticida-bio-care.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/894/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Insecticida para el entorno eficaz contra garrapatas, pulgas, chinches, hormigas, etc... consigue eliminar de forma rápida y eficaz los molestos insectos en casas, locales, establos, perreras, voladeras, etc. Tiene una gran actividad y prolongada efectividad. Es un muy seguro, no huele ni mancha las superficies. Para el hogar, NO aplicar sobre el animal. Formato: 500ml.                    <a href="http://www.misterguau.com/index.php/insecticida-bio-care.html" title="Insecticida exterior Spray Bio-Care para el hogar">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/stockade-insecticida.html" title="Insecticida exterior Stockade para el hogar">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/t/stockade_insecticida.jpg"  alt="Insecticida exterior Stockade para el hogar" title="Insecticida exterior Stockade para el hogar" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/stockade-insecticida.html" title="Insecticida exterior Stockade para el hogar"><b>Insecticida exterior Stockade para el hogar</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/stockade-insecticida.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4396/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    STOCKADE es un insecticida Piretroide de elevada eficacia y persistencia contra moscas, mosquitos y cucarachas. Con suave aroma a lavanda. Autorizado para el uso doméstico. En aerosol de fácil aplicación. Formato: 400ml.                    <a href="http://www.misterguau.com/index.php/stockade-insecticida.html" title="Insecticida exterior Stockade para el hogar">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-ardillas-voltrega-202-gris.html" title="Jaula para ardillas Voltrega 202 Gris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_ardilla_ref202_gris.jpg"  alt="Jaula para ardillas Voltrega 202 Gris" title="Jaula para ardillas Voltrega 202 Gris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-ardillas-voltrega-202-gris.html" title="Jaula para ardillas Voltrega 202 Gris"><b>Jaula para ardillas Voltrega 202 Gris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															39,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-ardillas-voltrega-202-gris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2701/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para ardillas. Con barrotes resistentes y estrechos. Incluye una rueda noria con enganche para que la coloquemos donde queramos. Con asa superior. Fabricada en Europa (España). Pintura apoxi sin plomo. Accesorios plástico polipropileno. Disponible en gris con cubeta y ganchos pistacho. Click en foto 2 para mejor detalle. Medidas: 50,5 x 28 x 47 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-ardillas-voltrega-202-gris.html" title="Jaula para ardillas Voltrega 202 Gris">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-chinchilla-voltrega-270-gris.html" title="Jaula para chinchilla Voltrega 270 Gris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_chinchilla_ref270_gris.jpg"  alt="Jaula para chinchilla Voltrega 270 Gris" title="Jaula para chinchilla Voltrega 270 Gris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-chinchilla-voltrega-270-gris.html" title="Jaula para chinchilla Voltrega 270 Gris"><b>Jaula para chinchilla Voltrega 270 Gris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															78,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-chinchilla-voltrega-270-gris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2699/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para chinchillas con las repisas de madera. Incluye dos pisos para que pueda saltar siempre que quiera. Fabricada en Europa (España). Pintura apoxi sin plomo. Disponible en gris con ganchos en pistacho. Click en foto 2 para mejor detalle. Medidas: 70 x 40 x 65 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-chinchilla-voltrega-270-gris.html" title="Jaula para chinchilla Voltrega 270 Gris">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-topnature-924.html" title="Jaula para cobaya / conejo Topnature 924">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_conejo_ref924_topnature.jpg"  alt="Jaula para cobaya / conejo Topnature 924" title="Jaula para cobaya / conejo Topnature 924" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-topnature-924.html" title="Jaula para cobaya / conejo Topnature 924"><b>Jaula para cobaya / conejo Topnature 924</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															34,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-topnature-924.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3454/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula de alta resistencia ideal para cobayas y conejos enanos. Fabricada en España. Incluye un tolva dispensadora de heno. Pintura apoxi sin plomo. Accesorios plástico polipropileno. En color azul. Click en foto 2 para mejor detalle. Medidas: 70x40,5x38cm.                    <a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-topnature-924.html" title="Jaula para cobaya / conejo Topnature 924">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-924g.html" title="Jaula para cobaya / conejo Voltrega 924G">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_conejo_ref_924_gris.jpg"  alt="Jaula para cobaya / conejo Voltrega 924G" title="Jaula para cobaya / conejo Voltrega 924G" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-924g.html" title="Jaula para cobaya / conejo Voltrega 924G"><b>Jaula para cobaya / conejo Voltrega 924G</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>41,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 29.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-924g.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5456/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula de alta resistencia ideal para cobayas y conejos enanos. Fabricada en España. Incluye un tolva dispensadora de heno. Pintura apoxi sin plomo. Accesorios plástico polipropileno. En color gris con accesorios en colores surtidos. Click en foto 2 para mejor detalle. Medidas: 70x40,5x38cm.                    <a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-924g.html" title="Jaula para cobaya / conejo Voltrega 924G">Saber más</a><br><br>
					<span class="required"><strong>29% de Dto! Ahorra 12&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-cobaya-voltrega-993-blanca.html" title="Jaula para cobaya Voltrega 993 blanca">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_conejo_993_blanca.jpg"  alt="Jaula para cobaya Voltrega 993 blanca" title="Jaula para cobaya Voltrega 993 blanca" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-cobaya-voltrega-993-blanca.html" title="Jaula para cobaya Voltrega 993 blanca"><b>Jaula para cobaya Voltrega 993 blanca</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															38,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-cobaya-voltrega-993-blanca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4615/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para cobayas o conejos baby, con bonitos laterales con el dibujo perforado de un simpático conejito. Con formas redondeadas y modernas. Con rejilla interior incluida para el heno. Con apertura frontal superior. En color gris y blanco. Click en foto 2 para verla con mejor detalle. Fabricada en España. Medidas: 58 x 36 x 37,5 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-cobaya-voltrega-993-blanca.html" title="Jaula para cobaya Voltrega 993 blanca">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-920-gris.html" title="Jaula para cobaya/conejo Voltrega 920 gris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_conejo_ref920_gris.jpg"  alt="Jaula para cobaya/conejo Voltrega 920 gris" title="Jaula para cobaya/conejo Voltrega 920 gris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-920-gris.html" title="Jaula para cobaya/conejo Voltrega 920 gris"><b>Jaula para cobaya/conejo Voltrega 920 gris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>54,55&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 49.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-920-gris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1601/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula diseñada para cobayas y conejos enanos. Con barrotes resistentes y dispensador de heno de alegre color. Pintura apoxi sin plomo. Accesorios plásticos de polipropileno. Fabricado en España. Click en foto 2 para verla con mejor detalle. Medidas: 80 x 46 x 39cm.                    <a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-920-gris.html" title="Jaula para cobaya/conejo Voltrega 920 gris">Saber más</a><br><br>
					<span class="required"><strong>8% de Dto exclusivo online! Ahorra 4.60&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-923g.html" title="Jaula para cobaya/conejo Voltrega 923G">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_cobaya_ref923_gris.jpg"  alt="Jaula para cobaya/conejo Voltrega 923G" title="Jaula para cobaya/conejo Voltrega 923G" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-923g.html" title="Jaula para cobaya/conejo Voltrega 923G"><b>Jaula para cobaya/conejo Voltrega 923G</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															38,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-923g.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4573/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para todo tipo de cobayas y conejos enanos. Realizada en pintura apoxi sin plomo. Accesorios plástico polipropileno. Fabricada en España. Incluye tolva dispensadora de heno a juego. Colores surtidos. Medidas: 58 x 36 x 30 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-923g.html" title="Jaula para cobaya/conejo Voltrega 923G">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-933-blanca.html" title="Jaula para cobaya/conejo Voltrega 933 blanca">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_conejo_933_blanca_4.jpg"  alt="Jaula para cobaya/conejo Voltrega 933 blanca" title="Jaula para cobaya/conejo Voltrega 933 blanca" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-933-blanca.html" title="Jaula para cobaya/conejo Voltrega 933 blanca"><b>Jaula para cobaya/conejo Voltrega 933 blanca</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-933-blanca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1687/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula diseñada para cobayas y conejos enanos. Con barrotes resistentes y dispensador de heno de alegre color. Pintura apoxi sin plomo. Accesorios plásticos de polipropileno. Fabricado en España. Click en foto 2 para verla con mejor detalle. Medidas: 58 x 36 x 31 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-933-blanca.html" title="Jaula para cobaya/conejo Voltrega 933 blanca">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-934-blanca.html" title="Jaula para cobaya/conejo Voltrega 934 blanca">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_mod934_blanca.jpg"  alt="Jaula para cobaya/conejo Voltrega 934 blanca" title="Jaula para cobaya/conejo Voltrega 934 blanca" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-934-blanca.html" title="Jaula para cobaya/conejo Voltrega 934 blanca"><b>Jaula para cobaya/conejo Voltrega 934 blanca</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-934-blanca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1589/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula diseñada para cobayas y conejos enanos. Con barrotes resistentes y dispensador de heno de alegre color. Pintura apoxi sin plomo. Accesorios plásticos de polipropileno. Fabricado en España. Click en foto 2 para verla con mejor detalle. Medidas: 70 x 40,5 x 34 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-cobaya-conejo-voltrega-934-blanca.html" title="Jaula para cobaya/conejo Voltrega 934 blanca">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-conejo-voltrega-954-gris.html" title="Jaula para conejo Voltrega 954 Gris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_conejo_ref954_gris.jpg"  alt="Jaula para conejo Voltrega 954 Gris" title="Jaula para conejo Voltrega 954 Gris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-conejo-voltrega-954-gris.html" title="Jaula para conejo Voltrega 954 Gris"><b>Jaula para conejo Voltrega 954 Gris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															52,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-conejo-voltrega-954-gris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2968/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para conejos enanos y cobayas. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Fabricada en España. Incluye una escalera, un piso y una tolva. Jaula en color gris con accesorios en verde lima. Click en foto 2 para verla con mejor detalle. Tamaño: 70x40,5x38 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-conejo-voltrega-954-gris.html" title="Jaula para conejo Voltrega 954 Gris">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-916-negra.html" title="Jaula para hamster común Voltrega 916 Negra">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ref916_negra_2.jpg"  alt="Jaula para hamster común Voltrega 916 Negra" title="Jaula para hamster común Voltrega 916 Negra" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-916-negra.html" title="Jaula para hamster común Voltrega 916 Negra"><b>Jaula para hamster común Voltrega 916 Negra</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-916-negra.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2692/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para comunes o dorados. Incluye escalera + iglú + piso + rueda. Fabricada en Europa (España). Pintura apoxi sin plomo. Accesorios plástico polipropileno. Disponible en dos colores. Click en foto 2 para mejor detalle. Medidas: 50,5x28x25cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-916-negra.html" title="Jaula para hamster común Voltrega 916 Negra">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-917-negra.html" title="Jaula para hamster común Voltrega 917 Negra">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ref917_negra_2.jpg"  alt="Jaula para hamster común Voltrega 917 Negra" title="Jaula para hamster común Voltrega 917 Negra" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-917-negra.html" title="Jaula para hamster común Voltrega 917 Negra"><b>Jaula para hamster común Voltrega 917 Negra</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-917-negra.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2693/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para comunes o dorados. Incluye iglú + rueda. Fabricada en Europa (España). Pintura apoxi sin plomo. Accesorios plástico polipropileno. Disponible en 3 colores. Click en foto 2 para mejor detalle. Medidas: 50,5 x 28 x 21 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-917-negra.html" title="Jaula para hamster común Voltrega 917 Negra">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-937-negra.html" title="Jaula para hamster común Voltrega 937 Negra">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ref937_negra_3.jpg"  alt="Jaula para hamster común Voltrega 937 Negra" title="Jaula para hamster común Voltrega 937 Negra" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-937-negra.html" title="Jaula para hamster común Voltrega 937 Negra"><b>Jaula para hamster común Voltrega 937 Negra</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															27,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-937-negra.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2697/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para comunes o dorados. Incluye aro + rueda + tubos para que nuestro hamster haga un gran recorrido. Fabricada en Europa (España). Pintura apoxi sin plomo. Accesorios plástico polipropileno. Disponible en 2 colores. Click en foto 2 para mejor detalle. Medidas: 50,5 x 28 x 21 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-comun-voltrega-937-negra.html" title="Jaula para hamster común Voltrega 937 Negra">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-117g.html" title="Jaula para hamster enano 117G">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ruso_ref117_gris_2.jpg"  alt="Jaula para hamster enano 117G" title="Jaula para hamster enano 117G" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-117g.html" title="Jaula para hamster enano 117G"><b>Jaula para hamster enano 117G</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>23,45&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 19.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-enano-117g.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5457/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula de alta resistencia especial para Hamster Ruso y Roborobsky. Separación entre alambres de 7 mm. Fabricada en España. Incluye los accesorios de la foto en colores surtidos. Pintura apoxi sin plomo. Accesorios plástico polipropileno. base en color gris o verde. Click en foto 2 para mejor detalle. Medidas: 50,5 x 28 x 25 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-117g.html" title="Jaula para hamster enano 117G">Saber más</a><br><br>
					<span class="required"><strong>15% de Dto exclusivo online! Ahorra 3.50&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-138g.html" title="Jaula para hamster enano 138G">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ruso_ref_138_gris.jpg"  alt="Jaula para hamster enano 138G" title="Jaula para hamster enano 138G" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-138g.html" title="Jaula para hamster enano 138G"><b>Jaula para hamster enano 138G</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>34,15&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 29.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-enano-138g.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5458/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula de alta resistencia especial para Hamster Ruso y Roborobsky. Separación entre alambres de 7 mm. Fabricada en España. Incluye los accesorios de la foto en colores surtidos. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Base en color gris o verde. Medidas: 50,5 x 28 x 32 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-138g.html" title="Jaula para hamster enano 138G">Saber más</a><br><br>
					<span class="required"><strong>12% de Dto exclusivo online! Ahorra 4.20&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-chino-topnature-114.html" title="Jaula para hamster enano Topnature 114 ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ruso_ref114_top_nature.jpg"  alt="Jaula para hamster enano Topnature 114 " title="Jaula para hamster enano Topnature 114 " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-chino-topnature-114.html" title="Jaula para hamster enano Topnature 114 "><b>Jaula para hamster enano Topnature 114 </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-chino-topnature-114.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3452/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para pequeños roedores. Incluye iglú y rueda de color azul.  Pintura apoxi sin plomo. Accesorios plástico polipropileno. Especial para Hamster Ruso y Roborobsky. Separación entre alambres 7 mm. Click en foto 2 para verla más grande. Tamaño: 39x25,5x22 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-chino-topnature-114.html" title="Jaula para hamster enano Topnature 114 ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-topnature-115.html" title="Jaula para hamster enano Topnature 115">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ruso_ref115_topnature.jpg"  alt="Jaula para hamster enano Topnature 115" title="Jaula para hamster enano Topnature 115" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-topnature-115.html" title="Jaula para hamster enano Topnature 115"><b>Jaula para hamster enano Topnature 115</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															22,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-enano-topnature-115.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3453/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para hamsters pequeños, como los roborowski y rusos. Incluye aro + rueda + tubos. Fabricada en Europa (España). Pintura apoxi sin plomo. Accesorios plástico polipropileno. Separación entre alambres de 7 mm. En color azul. Click en foto 2 para mejor detalle. Medidas: 39x25,5x22 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-topnature-115.html" title="Jaula para hamster enano Topnature 115">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-113-gris.html" title="Jaula para hamster enano Voltrega 113 Gris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ruso_113-b_2.jpg"  alt="Jaula para hamster enano Voltrega 113 Gris" title="Jaula para hamster enano Voltrega 113 Gris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-113-gris.html" title="Jaula para hamster enano Voltrega 113 Gris"><b>Jaula para hamster enano Voltrega 113 Gris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-113-gris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2501/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para pequeños roedores. Incluye iglú y rueda de color. Barrotes de color gris. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Especial para Hamster Ruso y Roborobsky. Separación entre alambres 7 mm. Click en foto 2 para verla más grande. Barrotes gris. Colores accesorios y base surtidos. Tamaño: 39 x 25,5 x 22 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-113-gris.html" title="Jaula para hamster enano Voltrega 113 Gris">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-114-gris.html" title="Jaula para hamster enano Voltrega 114 Gris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_para_hamster_voltrega_114_gris-c.jpg"  alt="Jaula para hamster enano Voltrega 114 Gris" title="Jaula para hamster enano Voltrega 114 Gris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-114-gris.html" title="Jaula para hamster enano Voltrega 114 Gris"><b>Jaula para hamster enano Voltrega 114 Gris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															16,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-114-gris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2502/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula para pequeños roedores. Incluye iglú y rueda de color. Barrotes de color gris. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Especial para Hamster Ruso y Roborobsky. Separación entre alambres 7 mm. Click en foto 2 para verla más grande. Tamaño: 39 x 25,5 x 22 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-114-gris.html" title="Jaula para hamster enano Voltrega 114 Gris">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-voltrega-115.html" title="Jaula para hamster enano Voltrega 115">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ruso_ref115_gris_3.jpg"  alt="Jaula para hamster enano Voltrega 115" title="Jaula para hamster enano Voltrega 115" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-voltrega-115.html" title="Jaula para hamster enano Voltrega 115"><b>Jaula para hamster enano Voltrega 115</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-enano-voltrega-115.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1604/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para hamsters pequeños, como los roborowski y rusos. Incluye aro + rueda + tubos. Fabricada en Europa (España). Pintura apoxi sin plomo. Accesorios plástico polipropileno. Separación entre alambres de 7 mm. En colores surtidos (pistacho, gris, coral, etc). Click en foto 2 para mejor detalle. Medidas: 39x25,5x22 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-enano-voltrega-115.html" title="Jaula para hamster enano Voltrega 115">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-hamster-voltrega-912-blanca.html" title="Jaula para hamster Voltrega 912 ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_912_blanca-b.jpg"  alt="Jaula para hamster Voltrega 912 " title="Jaula para hamster Voltrega 912 " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-hamster-voltrega-912-blanca.html" title="Jaula para hamster Voltrega 912 "><b>Jaula para hamster Voltrega 912 </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-hamster-voltrega-912-blanca.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1247/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pequeña jaulita para nuestro hamster común, con formas redondeadas para que los niños y más pequeños no se dañen al jugar con ellos. Con apertura central y lateral. Incluye accesorios de la foto. Colores surtidos. Click en foto 2 para verla con mejor detalle. Medidas: 39x25.5x27cm                    <a href="http://www.misterguau.com/index.php/jaula-hamster-voltrega-912-blanca.html" title="Jaula para hamster Voltrega 912 ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hamster-voltrega-938-negra.html" title="Jaula para hamster Voltrega 938 negra">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_hamster_ref938_negra.jpg"  alt="Jaula para hamster Voltrega 938 negra" title="Jaula para hamster Voltrega 938 negra" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hamster-voltrega-938-negra.html" title="Jaula para hamster Voltrega 938 negra"><b>Jaula para hamster Voltrega 938 negra</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															32,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hamster-voltrega-938-negra.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1602/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para el confort de todo tipo de hamsters comunes. Incluye: Piso + rueda + tubos de juegos. Apertura frontal e intermedia a través de ganchos. Los tubos son desmontables para una fácil limpieza. Pintura apoxi sin plomo. Accesorios plástico polipropileno. Disponible en negro o rojo. CLick en foto 2 para verla con mejor detalle. Medidas: 50,5x28x32cm.                    <a href="http://www.misterguau.com/index.php/jaula-para-hamster-voltrega-938-negra.html" title="Jaula para hamster Voltrega 938 negra">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/jaula-para-hurones-voltrega-260-gris.html" title="Jaula para hurones Voltrega 260 Gris">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/j/a/jaula_huron_ref260_gris.jpg"  alt="Jaula para hurones Voltrega 260 Gris" title="Jaula para hurones Voltrega 260 Gris" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/jaula-para-hurones-voltrega-260-gris.html" title="Jaula para hurones Voltrega 260 Gris"><b>Jaula para hurones Voltrega 260 Gris</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															86,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/jaula-para-hurones-voltrega-260-gris.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2698/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Jaula especialmente diseñada para hurones. Incluye piso con comedero + escalera + hamaca + tubo. Fabricada en Europa (España). Pintura apoxi sin plomo. Accesorios plástico polipropileno. Disponible en gris con accesorios en gris / pistacho. Click en foto 2 para mejor detalle. Medidas: 90 x 50,5 x 46 cm                    <a href="http://www.misterguau.com/index.php/jaula-para-hurones-voltrega-260-gris.html" title="Jaula para hurones Voltrega 260 Gris">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-candy-para-roedores.html" title="Juguete Candy para roedores">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/candy_15cm400x-zz-ro30029.jpg"  alt="Juguete Candy para roedores" title="Juguete Candy para roedores" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-candy-para-roedores.html" title="Juguete Candy para roedores"><b>Juguete Candy para roedores</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-candy-para-roedores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4373/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete para roedores realizado en sisal (paja desecada), para que desgasten sus dientes de forma diferente mientras se divierten. Con forma de caramelo de dos colores. Ideal para hamsters, cobayas, conejos o chinchillas. Medidas: 15cm                    <a href="http://www.misterguau.com/index.php/juguete-candy-para-roedores.html" title="Juguete Candy para roedores">Saber más</a><br><br>
					<span class="required"><strong>23% de Dto! Ahorra 0.60&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/juguete-carrot-para-roedores.html" title="Juguete Carrot para roedores">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/carrot_15cm400x-zz-ro30030.jpg"  alt="Juguete Carrot para roedores" title="Juguete Carrot para roedores" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/juguete-carrot-para-roedores.html" title="Juguete Carrot para roedores"><b>Juguete Carrot para roedores</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/juguete-carrot-para-roedores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4374/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Juguete para roedores realizado en sisal (paja desecada), para que desgasten sus dientes de forma diferente mientras se divierten. Con forma de zanahoria. Ideal para hamsters, cobayas, conejos o chinchillas. Medidas: 15cm                    <a href="http://www.misterguau.com/index.php/juguete-carrot-para-roedores.html" title="Juguete Carrot para roedores">Saber más</a><br><br>
					<span class="required"><strong>23% de Dto! Ahorra 0.60&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/kit-completo-de-peluqueria-kl-para-roedor.html" title="Kit completo de peluquería KL para roedor">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/k/i/kit_higiene_roedor_1030209.jpg"  alt="Kit completo de peluquería KL para roedor" title="Kit completo de peluquería KL para roedor" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/kit-completo-de-peluqueria-kl-para-roedor.html" title="Kit completo de peluquería KL para roedor"><b>Kit completo de peluquería KL para roedor</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>15,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 11.85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/kit-completo-de-peluqueria-kl-para-roedor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3360/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Kit completo para el atusado de nuestro roedor. Se compone de una carda con puntas protegidas para no dañar el manto de nuestra mascota, así como unas tijeras para cortarle las uñitas y un peine para desenredar posibles nudos. COn agarre antideslizante.                     <a href="http://www.misterguau.com/index.php/kit-completo-de-peluqueria-kl-para-roedor.html" title="Kit completo de peluquería KL para roedor">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/gimmik-pasta-de-malta-para-roedores.html" title="Malta para roedores Gimmick">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/i/gimmick_pasta_malta_para_roedores.jpg"  alt="Malta para roedores Gimmick" title="Malta para roedores Gimmick" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/gimmik-pasta-de-malta-para-roedores.html" title="Malta para roedores Gimmick"><b>Malta para roedores Gimmick</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/gimmik-pasta-de-malta-para-roedores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2964/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pasta de roedores con papaya especialmente formulado para todo tipo de roedores. Les ayuda a eliminar las bolas de pelo que ingieren durante su limpieza corporal. Con fibra natural para nuestro hamster, conejo o cobaya. Formato: Tubo de 50gr.                    <a href="http://www.misterguau.com/index.php/gimmik-pasta-de-malta-para-roedores.html" title="Malta para roedores Gimmick">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/noria-para-hamster-voltrega.html" title="Noria para hamster Voltrega">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/o/noria_hamster_colores_variados.jpg"  alt="Noria para hamster Voltrega" title="Noria para hamster Voltrega" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/noria-para-hamster-voltrega.html" title="Noria para hamster Voltrega"><b>Noria para hamster Voltrega</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/noria-para-hamster-voltrega.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/795/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Noria plástica para todas las jaulas de hamster enanos (ruso, roborowski, etc) de la marca Voltrega excepto 912, 117 y 178. Colores surtidos.                    <a href="http://www.misterguau.com/index.php/noria-para-hamster-voltrega.html" title="Noria para hamster Voltrega">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/parque-hexagonal-roedores-595-verde.html" title="Parque hexagonal roedores Voltrega 595">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/parque_hexagonal_roedores_595_1.jpg"  alt="Parque hexagonal roedores Voltrega 595" title="Parque hexagonal roedores Voltrega 595" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/parque-hexagonal-roedores-595-verde.html" title="Parque hexagonal roedores Voltrega 595"><b>Parque hexagonal roedores Voltrega 595</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															50,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/parque-hexagonal-roedores-595-verde.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1412/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Parque de juegos para que los conejos y cobayas disfruten de mayor espacio para sus juegos. Ideal para el jardín o la terraza y que aprovechen el buen tiempo. Barrotes azules y palitos de sujeción amarillos. Ver foto 2 para vero con mejor detalle.  Medidas:  Ø120 x 61 cm.                     <a href="http://www.misterguau.com/index.php/parque-hexagonal-roedores-595-verde.html" title="Parque hexagonal roedores Voltrega 595">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/peine-doble-kl-para-roedor.html" title="Peine doble KL para roedor">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/e/peine_doble_roedor_1030213.jpg"  alt="Peine doble KL para roedor" title="Peine doble KL para roedor" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/peine-doble-kl-para-roedor.html" title="Peine doble KL para roedor"><b>Peine doble KL para roedor</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/peine-doble-kl-para-roedor.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3364/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Peine doble para el peinado y lustrosidad de nuestro roedor. Parte delantera con dientes medianos, trasera con dientes gruesos. Elimina suavemente el polvo, la suciedad y los pelos sueltos. Agarre antideslizante. Medidas: 12cm * 3.5cm - 27gramos	                    <a href="http://www.misterguau.com/index.php/peine-doble-kl-para-roedor.html" title="Peine doble KL para roedor">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pelota-de-goma-fm.html" title="Pelota de goma FM ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/e/pelota_de_goma_2.jpg"  alt="Pelota de goma FM " title="Pelota de goma FM " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pelota-de-goma-fm.html" title="Pelota de goma FM "><b>Pelota de goma FM </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pelota-de-goma-fm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1041/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pelota de goma hiper-resistente y con una gran nivel de rebote. En colores surtidos y diferentes tamaños. Realizado en goma no tóxica y fácilmente lavable. 5 Medidas: Ø4cm - Ø5cm - Ø6cm - Ø7.5cm                    <a href="http://www.misterguau.com/index.php/pelota-de-goma-fm.html" title="Pelota de goma FM ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pienso-naturaliss-para-chinchilla.html" title="Pienso Naturaliss para chinchilla">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pienso_naturaliss_para_chinchilla.jpg"  alt="Pienso Naturaliss para chinchilla" title="Pienso Naturaliss para chinchilla" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-chinchilla.html" title="Pienso Naturaliss para chinchilla"><b>Pienso Naturaliss para chinchilla</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>8,70&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 7.70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pienso-naturaliss-para-chinchilla.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4031/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dieta variada en materias primas que imitan al alimento que las chinchillas encuentran en su medio ambiente. Se han incluido henos variados con una mezcla de hojas, flores, semillas y frutos de la naturaleza. Formato: 1,36Kg                    <a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-chinchilla.html" title="Pienso Naturaliss para chinchilla">Saber más</a><br><br>
					<span class="required"><strong>11% de Dto! Ahorra 1&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pienso-naturaliss-para-cobaya.html" title="Pienso Naturaliss para cobaya">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pienso_naturaliss_para_cobaya.jpg"  alt="Pienso Naturaliss para cobaya" title="Pienso Naturaliss para cobaya" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-cobaya.html" title="Pienso Naturaliss para cobaya"><b>Pienso Naturaliss para cobaya</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,50&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pienso-naturaliss-para-cobaya.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4032/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dieta variada en materias primas que imitan al alimento que las cobayas encuentran en su medio ambiente. Se han incluido henos de plantas gramíneas variadas con una mezcla de hojas, flores y productos de la foresta. Formato: 1,36Kg                    <a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-cobaya.html" title="Pienso Naturaliss para cobaya">Saber más</a><br><br>
					<span class="required"><strong>13% de Dto! Ahorra 1&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pienso-naturaliss-para-conejo-adulto.html" title="Pienso Naturaliss para conejo adulto">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pienso_naturaliss_para_conejo_adult.jpg"  alt="Pienso Naturaliss para conejo adulto" title="Pienso Naturaliss para conejo adulto" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-conejo-adulto.html" title="Pienso Naturaliss para conejo adulto"><b>Pienso Naturaliss para conejo adulto</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>6,80&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 5.80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pienso-naturaliss-para-conejo-adulto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4033/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dieta variada en materias primas que imitan al alimento que los conejos adultos encuentran en su medio ambiente. Se han incluido henos de plantas gramíneas variadas con una mezcla de hojas, flores y productos de la foresta. Formato: 1,36Kg                    <a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-conejo-adulto.html" title="Pienso Naturaliss para conejo adulto">Saber más</a><br><br>
					<span class="required"><strong>15% de Dto! Ahorra 1&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pienso-naturaliss-para-conejo-baby.html" title="Pienso Naturaliss para conejo baby">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pienso_naturaliss_para_conejo_baby.jpg"  alt="Pienso Naturaliss para conejo baby" title="Pienso Naturaliss para conejo baby" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-conejo-baby.html" title="Pienso Naturaliss para conejo baby"><b>Pienso Naturaliss para conejo baby</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,80&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pienso-naturaliss-para-conejo-baby.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4034/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dieta variada en materias primas que imitan al alimento que los conejos baby encuentran en su medio ambiente. Se han incluido henos de plantas gramíneas variadas con una mezcla de hojas, flores y productos de la foresta. Formato: 1,36Kg                    <a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-conejo-baby.html" title="Pienso Naturaliss para conejo baby">Saber más</a><br><br>
					<span class="required"><strong>13% de Dto! Ahorra 1&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pienso-naturaliss-para-hamsters.html" title="Pienso Naturaliss para hamsters">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pienso_naturaliss_para_hamster.jpg"  alt="Pienso Naturaliss para hamsters" title="Pienso Naturaliss para hamsters" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-hamsters.html" title="Pienso Naturaliss para hamsters"><b>Pienso Naturaliss para hamsters</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,45&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pienso-naturaliss-para-hamsters.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4030/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dieta variada en materias primas que imitan al alimento que los hamster encuentran en su medio ambiente. Se han incluido henos de plantas gramíneas variadas con una mezcla de hojas, flores, frutas e frutos secos y productos de la foresta.Formato: 500gr                    <a href="http://www.misterguau.com/index.php/pienso-naturaliss-para-hamsters.html" title="Pienso Naturaliss para hamsters">Saber más</a><br><br>
					<span class="required"><strong>20% de Dto! Ahorra 0.70&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-conejo.html" title="Pio-Pa mezcla para conejo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_pienso_conejo.jpg"  alt="Pio-Pa mezcla para conejo" title="Pio-Pa mezcla para conejo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-conejo.html" title="Pio-Pa mezcla para conejo"><b>Pio-Pa mezcla para conejo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-conejo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2136/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para conejos. Atmósfera conservadora para un mayor frescor. Compuesto en forma de pellets.  Formato: 1 Kg                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-conejo.html" title="Pio-Pa mezcla para conejo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-conejo-enano.html" title="Pio-Pa mezcla para conejo enano">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_conejo_enano_2.jpg"  alt="Pio-Pa mezcla para conejo enano" title="Pio-Pa mezcla para conejo enano" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-conejo-enano.html" title="Pio-Pa mezcla para conejo enano"><b>Pio-Pa mezcla para conejo enano</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-conejo-enano.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2135/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para conejos enanos. Atmósfera conservadora para un mayor frescor. Composición: cereales, alfalfa, frutos, leguminosas, oleoginosas. 2 Formatos: 1 Kg, 5Kg.                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-conejo-enano.html" title="Pio-Pa mezcla para conejo enano">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-hamsters.html" title="Pio-Pa mezcla para hamsters">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/i/pio-pa_mezcla_hamster_2.jpg"  alt="Pio-Pa mezcla para hamsters" title="Pio-Pa mezcla para hamsters" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-hamsters.html" title="Pio-Pa mezcla para hamsters"><b>Pio-Pa mezcla para hamsters</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/pio-pa-mezcla-para-hamsters.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2134/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento equilibrado y totalmente natural para todo tipo de hamsters, jerbos y pequeños roedores. Atmósfera conservadora para un mayor frescor. Composición: . Formato: 750gr.                    <a href="http://www.misterguau.com/index.php/pio-pa-mezcla-para-hamsters.html" title="Pio-Pa mezcla para hamsters">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland-m.html" title="Puente flexible de madera Wonderland (L)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/w/o/wonderland_madera_flexible_19x34cm_84209.jpg"  alt="Puente flexible de madera Wonderland (L)" title="Puente flexible de madera Wonderland (L)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland-m.html" title="Puente flexible de madera Wonderland (L)"><b>Puente flexible de madera Wonderland (L)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>6,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 5.20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland-m.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4747/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Un juguete-cobijo que no debe faltar en ninguna jaulita de cobaya! este juguete a base de madera flexible es ideal para realizar cambios e introducir novedades en la jaulita de nuestra cobaya, dado que se puede convertir en un puente, una cueva, escalera o columpio. Además esde madera 100% natural y podrá mordisquearlo para limar sus dientes. Medidas: 19x34cm                    <a href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland-m.html" title="Puente flexible de madera Wonderland (L)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland.html" title="Puente flexible de madera Wonderland (M)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/w/o/wonderland_madera_flexible_16-27cm_84208.jpg"  alt="Puente flexible de madera Wonderland (M)" title="Puente flexible de madera Wonderland (M)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland.html" title="Puente flexible de madera Wonderland (M)"><b>Puente flexible de madera Wonderland (M)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4104/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tus roedores no pueden perderse este completo juguete-cueva! Puente de madera hilado con el que podrás hacer muchas combinaciones de formas para construir a tu roedor desde un puente ondulado, túnel, puente colgante o hasta una cueva o escalera. Realizado en madera totalmente natural que nuestro roedor puede morder para desgastar sus dientes naturalmente. Medidas: 27x16cm                    <a href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland.html" title="Puente flexible de madera Wonderland (M)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/wonderland-madera-flexible-para-roedores.html" title="Puente flexible de madera Wonderland (S)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/w/o/wonderland_madera_flexible_13x21cm_84207.jpg"  alt="Puente flexible de madera Wonderland (S)" title="Puente flexible de madera Wonderland (S)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/wonderland-madera-flexible-para-roedores.html" title="Puente flexible de madera Wonderland (S)"><b>Puente flexible de madera Wonderland (S)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>3,45&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/wonderland-madera-flexible-para-roedores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3843/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Un juguete-cobijo que no debe faltar en ninguna jaulita de hamster! este juguete a base de madera flexible es ideal para realizar cambios e introducir novedades en la jaulita de nuestro hamster, dado que se puede convertir en un puente, una cueva, escalera o columpio. Además esde madera 100% natural y podrá mordisquearlo para limar sus dientes. Medidas: 21x13cm                    <a href="http://www.misterguau.com/index.php/wonderland-madera-flexible-para-roedores.html" title="Puente flexible de madera Wonderland (S)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland-xl.html" title="Puente flexible de madera Wonderland (XL)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/w/o/wonderland_madera_flexible_35x50cm_84210.jpg"  alt="Puente flexible de madera Wonderland (XL)" title="Puente flexible de madera Wonderland (XL)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland-xl.html" title="Puente flexible de madera Wonderland (XL)"><b>Puente flexible de madera Wonderland (XL)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>16,75&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 16.20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland-xl.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4915/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Un juguete-cobijo que no debe faltar en ninguna jaulita de cobaya o conejo! Este juguete a base de madera flexible es ideal para realizar cambios e introducir novedades en la jaulita o habitación de nuestro roedor, dado que puede convertirse en un puente, una cueva, escalera o columpio. Además esde madera 100% natural y podrá mordisquearlo para limar sus dientes. Medidas: 35x50cm                    <a href="http://www.misterguau.com/index.php/puente-flexible-de-madera-wonderland-xl.html" title="Puente flexible de madera Wonderland (XL)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/rody-mazorca-de-maiz.html" title="Rody mazorca de maíz">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/o/rody_mazorca_de_maiz_2.jpg"  alt="Rody mazorca de maíz" title="Rody mazorca de maíz" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/rody-mazorca-de-maiz.html" title="Rody mazorca de maíz"><b>Rody mazorca de maíz</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/rody-mazorca-de-maiz.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1009/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mazorca de maíz realizada en madera y con un enganche lateral para poderlo atar a los barrotes de la jaula. Ideal para que nuestros pequeños amigos desgasten los dientes. Medidas: 9 cm.<br />
<br />
<br />
                    <a href="http://www.misterguau.com/index.php/rody-mazorca-de-maiz.html" title="Rody mazorca de maíz">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/rody-zanahorias-de-madera-2-unid.html" title="Rody Zanahorias de Madera (2 unid)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/o/rody_2_zanahorias_madera_1.jpg"  alt="Rody Zanahorias de Madera (2 unid)" title="Rody Zanahorias de Madera (2 unid)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/rody-zanahorias-de-madera-2-unid.html" title="Rody Zanahorias de Madera (2 unid)"><b>Rody Zanahorias de Madera (2 unid)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/rody-zanahorias-de-madera-2-unid.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/216/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Zanahoria realizada en madera y con un enganche lateral para poderla atar a los barrotes de la jaula. Ideal para que nuestros pequeños amigos desgasten los dientes. 2 unidades por paquete. Tamaño: 7 cm.                    <a href="http://www.misterguau.com/index.php/rody-zanahorias-de-madera-2-unid.html" title="Rody Zanahorias de Madera (2 unid)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/rueda-para-ardilla-cromada-o20cm.html" title="Rueda para ardilla cromada Ø20cm">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/u/rueda_para_ardilla_metal_cromada_20cm_200365.jpg"  alt="Rueda para ardilla cromada Ø20cm" title="Rueda para ardilla cromada Ø20cm" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/rueda-para-ardilla-cromada-o20cm.html" title="Rueda para ardilla cromada Ø20cm"><b>Rueda para ardilla cromada Ø20cm</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>11,50&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 10.70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/rueda-para-ardilla-cromada-o20cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3967/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rueda realizada en metal cromado para que nuestra veloz ardilla pueda corretear dentro de la jaula y desfogar su energía, a la vez que se mantiene ejercitada y entretenida. Con gancho para poder colgarlo de los barrotes de la jaula y que quede suspendido, o bien colocarlo fácilmente en la base de la jaula. Medidas: Ø20cm                    <a href="http://www.misterguau.com/index.php/rueda-para-ardilla-cromada-o20cm.html" title="Rueda para ardilla cromada Ø20cm">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/rueda-para-hamster-comun-cromada-o15cm.html" title="Rueda para hamster común cromada Ø15cm">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/u/rueda_para_hamster_metal_cramada_15cm_200014.jpg"  alt="Rueda para hamster común cromada Ø15cm" title="Rueda para hamster común cromada Ø15cm" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/rueda-para-hamster-comun-cromada-o15cm.html" title="Rueda para hamster común cromada Ø15cm"><b>Rueda para hamster común cromada Ø15cm</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>9,85&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 9.25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/rueda-para-hamster-comun-cromada-o15cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3643/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rueda realizada en metal cromado para que nuestro hamster común pueda corretear dentro de la jaula y desfogar su energía, a la vez que se mantiene ejercitado y entretenido. Con gancho para poder colgarlo de los barrotes de la jaula y que quede suspendido, o bien colocarlo fácilmente en la base de la jaula. Medidas: Ø20cm                    <a href="http://www.misterguau.com/index.php/rueda-para-hamster-comun-cromada-o15cm.html" title="Rueda para hamster común cromada Ø15cm">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/rueda-para-raton-cromada-o12cm.html" title="Rueda para ratón cromada Ø12cm">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/r/u/rueda_para_raton_metal_cromada_7x5cm_200018.jpg"  alt="Rueda para ratón cromada Ø12cm" title="Rueda para ratón cromada Ø12cm" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/rueda-para-raton-cromada-o12cm.html" title="Rueda para ratón cromada Ø12cm"><b>Rueda para ratón cromada Ø12cm</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/rueda-para-raton-cromada-o12cm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3806/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Rueda realizada en metal cromado para que nuestros ratoncitos puedan corretear dentro de la jaula y desfogar sus energía, a la vez que se mantienen ejercitados y entretenidos. Con gancho para poder colgarlo de los barrotes de la jaula y que quede suspendido, o bien colocarlo fácilmente en la base de la jaula. Medidas: Ø12cm - 7*5.5cm                    <a href="http://www.misterguau.com/index.php/rueda-para-raton-cromada-o12cm.html" title="Rueda para ratón cromada Ø12cm">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/sal-axis-roedores-zanahoria.html" title="Sal Axis roedores zanahoria">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/a/sal_roedores_axis_zanahoria_2.jpg"  alt="Sal Axis roedores zanahoria" title="Sal Axis roedores zanahoria" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/sal-axis-roedores-zanahoria.html" title="Sal Axis roedores zanahoria"><b>Sal Axis roedores zanahoria</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/sal-axis-roedores-zanahoria.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1344/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bloque de sal mineral con forma de zanahoria que aporta los minerales necesarios para complementar la alimentación de nuestros roedores a la vez que desgasta sus dientes.                    <a href="http://www.misterguau.com/index.php/sal-axis-roedores-zanahoria.html" title="Sal Axis roedores zanahoria">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/sanytol-desinfectante-textil-eliminador-de-olores.html" title="Sanytol Desinfectante textil (eliminador de olores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/a/sanytol_desinfectante_de_ropa_500ml_170030.jpg"  alt="Sanytol Desinfectante textil (eliminador de olores)" title="Sanytol Desinfectante textil (eliminador de olores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/sanytol-desinfectante-textil-eliminador-de-olores.html" title="Sanytol Desinfectante textil (eliminador de olores)"><b>Sanytol Desinfectante textil (eliminador de olores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/sanytol-desinfectante-textil-eliminador-de-olores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5116/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Aditivo desinfectante textil, para eliminar el 99,9% los gérmenes de la ropa. Elimina las bacterias causantes de los malos olores en ropa, toallas, textiles de mascotas, y además deja un agradable y duradero perfume. Dermatológicamente testado. Desinfecta sin lejía toda tu ropa a baja temperatura. Formato: 500ml.                    <a href="http://www.misterguau.com/index.php/sanytol-desinfectante-textil-eliminador-de-olores.html" title="Sanytol Desinfectante textil (eliminador de olores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/sanytol-limpia-hogar-desinfectante.html" title="Sanytol Limpia-hogar desinfectante">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/a/sanytol_botella_limpiahogar_1200_ml_170013.jpg"  alt="Sanytol Limpia-hogar desinfectante" title="Sanytol Limpia-hogar desinfectante" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/sanytol-limpia-hogar-desinfectante.html" title="Sanytol Limpia-hogar desinfectante"><b>Sanytol Limpia-hogar desinfectante</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/sanytol-limpia-hogar-desinfectante.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5117/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Limpiador desinfectante multisuperficies eficaz contra las bacterias (como el Staphylococcus o el E-coli) y hongos más comunes en el hogar (como el causante de la candidiasis o el moho de los vegetales) .También se ha probado su eficacia contra el virus de la gripe A H1N1. Formato: 1200ml.                    <a href="http://www.misterguau.com/index.php/sanytol-limpia-hogar-desinfectante.html" title="Sanytol Limpia-hogar desinfectante">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/sanytol-pistola-multiusos-desinfectante.html" title="Sanytol Pistola Multiusos desinfectante">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/a/sanytol_pistola_multiusos_750ml_170023.jpg"  alt="Sanytol Pistola Multiusos desinfectante" title="Sanytol Pistola Multiusos desinfectante" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/sanytol-pistola-multiusos-desinfectante.html" title="Sanytol Pistola Multiusos desinfectante"><b>Sanytol Pistola Multiusos desinfectante</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/sanytol-pistola-multiusos-desinfectante.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5118/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Limpiador desinfectante multisuperficies eficaz contra las bacterias ( como el Staphylococcus  o el E-coli) y hongos más comunes en el hogar (como el causante de la candidiasis o el moho de los vegetales) .También se ha probado su eficacia contra el virus de la gripe A H1N1. Formato: 750ml.                    <a href="http://www.misterguau.com/index.php/sanytol-pistola-multiusos-desinfectante.html" title="Sanytol Pistola Multiusos desinfectante">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/set-de-aseo-para-roedor-spuck.html" title="Set de aseo para roedor Spuck">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/e/set_aseo_roedores_spuck_69211.jpg"  alt="Set de aseo para roedor Spuck" title="Set de aseo para roedor Spuck" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/set-de-aseo-para-roedor-spuck.html" title="Set de aseo para roedor Spuck"><b>Set de aseo para roedor Spuck</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															14,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/set-de-aseo-para-roedor-spuck.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5479/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Set de aseo para tu roedor que contiene: Peine antipulgas (elimina la mínima suciedad y los bichos) + Carda (elimina los pelos sueltos y ligeramente enmarañados) + Cortauñas (tijera ergonómica con mango de seguridad)                    <a href="http://www.misterguau.com/index.php/set-de-aseo-para-roedor-spuck.html" title="Set de aseo para roedor Spuck">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snack-para-roedor-crock-alfalfa-100gr.html" title="Snack para roedor Crock Alfalfa 100gr">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/r/crockr_snack_lucerine_100gr_201692.jpg"  alt="Snack para roedor Crock Alfalfa 100gr" title="Snack para roedor Crock Alfalfa 100gr" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snack-para-roedor-crock-alfalfa-100gr.html" title="Snack para roedor Crock Alfalfa 100gr"><b>Snack para roedor Crock Alfalfa 100gr</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>1,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 1.65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snack-para-roedor-crock-alfalfa-100gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3678/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bocaditos crujientes para nuestro roedor a base de alfalfa desecada con forma de palitos. Contiene 4 vitaminas esenciales: Vit. A Vit,. C ³ Vit.D, Vit. E. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/snack-para-roedor-crock-alfalfa-100gr.html" title="Snack para roedor Crock Alfalfa 100gr">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snack-para-roedor-crock-veggie-100gr.html" title="Snack para roedor Crock Veggie 100gr">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_3_5.jpg"  alt="Snack para roedor Crock Veggie 100gr" title="Snack para roedor Crock Veggie 100gr" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snack-para-roedor-crock-veggie-100gr.html" title="Snack para roedor Crock Veggie 100gr"><b>Snack para roedor Crock Veggie 100gr</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>1,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 1.65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snack-para-roedor-crock-veggie-100gr.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3679/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bocaditos crujientes para nuestro roedor a base de vegetales desecados con forma de flores. Contiene 4 vitaminas esenciales: Vit. A Vit,. C ³ Vit.D, Vit. E. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/snack-para-roedor-crock-veggie-100gr.html" title="Snack para roedor Crock Veggie 100gr">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snack-para-roedor-dulci-cereza.html" title="Snack para roedor Dulci cereza">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/n/snack_roedores_dulci_cereza_50gr.jpg"  alt="Snack para roedor Dulci cereza" title="Snack para roedor Dulci cereza" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snack-para-roedor-dulci-cereza.html" title="Snack para roedor Dulci cereza"><b>Snack para roedor Dulci cereza</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>2,90&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 2.25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snack-para-roedor-dulci-cereza.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3677/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snack para todo tipo de roedores con base de cerezas desecadas. Muy natural, oloroso y sabroso. Formato: 50gr                    <a href="http://www.misterguau.com/index.php/snack-para-roedor-dulci-cereza.html" title="Snack para roedor Dulci cereza">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snackitos-para-roedor-corazones-de-nuez.html" title="Snackitos para roedor Corazones de nuez">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/n/snackitos_corazones_de_nuez.jpg"  alt="Snackitos para roedor Corazones de nuez" title="Snackitos para roedor Corazones de nuez" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snackitos-para-roedor-corazones-de-nuez.html" title="Snackitos para roedor Corazones de nuez"><b>Snackitos para roedor Corazones de nuez</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snackitos-para-roedor-corazones-de-nuez.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2747/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Corazones con frutos secos cocidos al horno para no perder sus valores nutritivos. Con tienen semillas y verduras libres de colorantes artificiales. Componentes analíticos: Humedad	4,5% - Composición: maíz (56%), semillas (16%), verduras (15%), frutos secos (8%), huevos y productos de huevo. Formato: 100gr.                    <a href="http://www.misterguau.com/index.php/snackitos-para-roedor-corazones-de-nuez.html" title="Snackitos para roedor Corazones de nuez">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snackitos-para-roedor-fresa-y-banana.html" title="Snackitos para roedor Fresa y banana">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/n/snackitos_fresa_y_banana.jpg"  alt="Snackitos para roedor Fresa y banana" title="Snackitos para roedor Fresa y banana" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snackitos-para-roedor-fresa-y-banana.html" title="Snackitos para roedor Fresa y banana"><b>Snackitos para roedor Fresa y banana</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snackitos-para-roedor-fresa-y-banana.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2745/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snacks para roedores a base de fresa y plátano cuidadosamente desecados para que no pierdan sus nutrientes naturales. Ideales como recompensa y suplemento alimenticio. Componentes analíticos: Humedad 7,0%. Composición:  plátano 90%, fresas 10%. Formato: 60gr                    <a href="http://www.misterguau.com/index.php/snackitos-para-roedor-fresa-y-banana.html" title="Snackitos para roedor Fresa y banana">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snackitos-roedor-madera-de-avellano.html" title="Snackitos para roedor Madera de avellano">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/n/snackitos_madera_de_avellano.jpg"  alt="Snackitos para roedor Madera de avellano" title="Snackitos para roedor Madera de avellano" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snackitos-roedor-madera-de-avellano.html" title="Snackitos para roedor Madera de avellano"><b>Snackitos para roedor Madera de avellano</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snackitos-roedor-madera-de-avellano.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2780/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La madera madera de avellano promueve el desgaste de los dientes de una manera natural. Aderezado con maravillas aromáticas como pétalos de rosa y heno. Ideal como recompensa. Composición: madera de avellano (80%), subproductos vegetales (heno 14%, 2% flor de caléndula seca, 2% pétalos de rosa secos). Formato: 3 tronquitos                    <a href="http://www.misterguau.com/index.php/snackitos-roedor-madera-de-avellano.html" title="Snackitos para roedor Madera de avellano">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-cobaya.html" title="Snacks Naturaliss Delicious Cobaya">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_naturaliss_delicious_cobayas_60gr_natudegui.jpg"  alt="Snacks Naturaliss Delicious Cobaya" title="Snacks Naturaliss Delicious Cobaya" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-cobaya.html" title="Snacks Naturaliss Delicious Cobaya"><b>Snacks Naturaliss Delicious Cobaya</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snacks-naturaliss-delicious-cobaya.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4111/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario que enriquece la dieta diaria para cobayas. Compuesto de vegetales naturales ricos en vitaminas y minerales. Sin conservantes ni colorantes. Composición: Brocoli, col blanca. Formato: 60gr                    <a href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-cobaya.html" title="Snacks Naturaliss Delicious Cobaya">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-conejo.html" title="Snacks Naturaliss Delicious Conejo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_naturaliss_delicious_conejos_60gr_natudera.jpg"  alt="Snacks Naturaliss Delicious Conejo" title="Snacks Naturaliss Delicious Conejo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-conejo.html" title="Snacks Naturaliss Delicious Conejo"><b>Snacks Naturaliss Delicious Conejo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snacks-naturaliss-delicious-conejo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4113/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario que enriquece la dieta diaria para conejos. Compuesto de vegetales naturales ricos en vitaminas y minerales. Sin conservantes ni colorantes. Composición: Col blanca, col lombarda. Formato: 60gr                    <a href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-conejo.html" title="Snacks Naturaliss Delicious Conejo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-hamster.html" title="Snacks Naturaliss Delicious Hamster">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_naturaliss_delicious_hamster_60gr_natudeham.jpg"  alt="Snacks Naturaliss Delicious Hamster" title="Snacks Naturaliss Delicious Hamster" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-hamster.html" title="Snacks Naturaliss Delicious Hamster"><b>Snacks Naturaliss Delicious Hamster</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snacks-naturaliss-delicious-hamster.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4110/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario que enriquece la dieta diaria para hamsters. Compuesto de vegetales naturales ricos en vitaminas y minerales. Sin conservantes ni colorantes. Composición: Boniato, zanahoria. Formato: 60gr                    <a href="http://www.misterguau.com/index.php/snacks-naturaliss-delicious-hamster.html" title="Snacks Naturaliss Delicious Hamster">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snacks-naturaliss-natural-salad-conejo.html" title="Snacks Naturaliss Natural Salad Conejo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_naturaliss_ensalada_conejos_60gr_natusara.jpg"  alt="Snacks Naturaliss Natural Salad Conejo" title="Snacks Naturaliss Natural Salad Conejo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snacks-naturaliss-natural-salad-conejo.html" title="Snacks Naturaliss Natural Salad Conejo"><b>Snacks Naturaliss Natural Salad Conejo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snacks-naturaliss-natural-salad-conejo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4114/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario que enriquece la dieta diaria para conejos. Mezcla de verduras y productos vegetales ricos en vitaminas y minerales. Sin conservantes ni colorantes. Composición: Heno, zanahoria, col lombarda, col blanca, espinaca, remolacha. Formato: 60gr                    <a href="http://www.misterguau.com/index.php/snacks-naturaliss-natural-salad-conejo.html" title="Snacks Naturaliss Natural Salad Conejo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snacks-naturaliss-treats-conejo.html" title="Snacks Naturaliss Treats Conejo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_naturaliss_treats_conejo_60gr_natutrera.jpg"  alt="Snacks Naturaliss Treats Conejo" title="Snacks Naturaliss Treats Conejo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snacks-naturaliss-treats-conejo.html" title="Snacks Naturaliss Treats Conejo"><b>Snacks Naturaliss Treats Conejo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snacks-naturaliss-treats-conejo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4571/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cunipic Naturaliss Treats son bloques formulados con verduras y legumbres de la mejor calidad para conservar todas su propiedades, con un elevado contenido proteico por lo que están indicados como suplemento para hembras gestantes. Además, no contiene conservantes ni colorantes.  Formato: 60gr                    <a href="http://www.misterguau.com/index.php/snacks-naturaliss-treats-conejo.html" title="Snacks Naturaliss Treats Conejo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/snacks-naturaliss-treats-hamster-tacos-de-verdura.html" title="Snacks Naturaliss Treats Hamster (Tacos de verdura)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/n/cnp_naturaliss_treats_hamster_60gr_natutreham.jpg"  alt="Snacks Naturaliss Treats Hamster (Tacos de verdura)" title="Snacks Naturaliss Treats Hamster (Tacos de verdura)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/snacks-naturaliss-treats-hamster-tacos-de-verdura.html" title="Snacks Naturaliss Treats Hamster (Tacos de verdura)"><b>Snacks Naturaliss Treats Hamster (Tacos de verdura)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/snacks-naturaliss-treats-hamster-tacos-de-verdura.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4109/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario que enriquece la dieta diaria para hamsters. Mezcla de verduras y leguminosas con alto contenido proteico, muy bueno para hembras gestantes. Sin conservantes ni colorantes. Composición: Heno, pimiento rojo, papanabo, remolacha. Formato: 60gr                    <a href="http://www.misterguau.com/index.php/snacks-naturaliss-treats-hamster-tacos-de-verdura.html" title="Snacks Naturaliss Treats Hamster (Tacos de verdura)">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tolva-dispensadora-de-heno-para-roedores-voltrega.html" title="Tolva dispensadora de heno para roedores Voltrega">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/p/a/pack_tolva_plastico_923.jpg"  alt="Tolva dispensadora de heno para roedores Voltrega" title="Tolva dispensadora de heno para roedores Voltrega" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tolva-dispensadora-de-heno-para-roedores-voltrega.html" title="Tolva dispensadora de heno para roedores Voltrega"><b>Tolva dispensadora de heno para roedores Voltrega</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tolva-dispensadora-de-heno-para-roedores-voltrega.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/780/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dispensador de heno para nuestro roedor. Realizado en plástico no tóxico para que nuestra mascota no se intoxique aunque la royera. Ideal para conejos y cobayas. Se entrega en colores surtidos (verde, beige, blanco, etc). Adaptable a todas las jaulas de conejo o cobaya de la marca Voltrega (Excepto: 993, 996, 994, 924m, 925m, 931, 922, 974)                     <a href="http://www.misterguau.com/index.php/tolva-dispensadora-de-heno-para-roedores-voltrega.html" title="Tolva dispensadora de heno para roedores Voltrega">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/transportin-para-roedor-baggy.html" title="Transportín para roedor Baggy">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/a/maletin_baggy_sd_68948.jpg"  alt="Transportín para roedor Baggy" title="Transportín para roedor Baggy" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/transportin-para-roedor-baggy.html" title="Transportín para roedor Baggy"><b>Transportín para roedor Baggy</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/transportin-para-roedor-baggy.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5154/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Transportín diseñado para el transporte de pequeños animales como conejos enanos, cobayas, hamsters, jerbos, chinchillas, tortugas, hurones, etc.  Rígido y muy resistente. Con diseño muy elegante, cierre de seguridad con clip, asa ergonómica y con muchas aperturas para la ventilación de nuestra mascota. Fácil de llevar y de limpiar. En azul claro, amarillo o rojo. Medidas: 36x25x29cm                    <a href="http://www.misterguau.com/index.php/transportin-para-roedor-baggy.html" title="Transportín para roedor Baggy">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/rollo-con-algodon-para-hamster-nesting.html" title="Tubo con algodón para hamster Nesting">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/e/nesting_tube_cotton_25gr.jpg"  alt="Tubo con algodón para hamster Nesting" title="Tubo con algodón para hamster Nesting" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/rollo-con-algodon-para-hamster-nesting.html" title="Tubo con algodón para hamster Nesting"><b>Tubo con algodón para hamster Nesting</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/rollo-con-algodon-para-hamster-nesting.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3676/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tubo de juegos y algodón 2 en 1 para nuestros pequeños hamsters. Le servirá de juguete, para roer y para esconderse o descansar. 100% digestible y realizado en materiales vegetales naturales. Colores surtidos. Incluye 25gr de algodón.                    <a href="http://www.misterguau.com/index.php/rollo-con-algodon-para-hamster-nesting.html" title="Tubo con algodón para hamster Nesting">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tunel-de-heno-grande-cunipic.html" title="Tunel de heno grande Cunipic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/u/tunel_de_heno_mediano_tunhenm.jpg"  alt="Tunel de heno grande Cunipic" title="Tunel de heno grande Cunipic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tunel-de-heno-grande-cunipic.html" title="Tunel de heno grande Cunipic"><b>Tunel de heno grande Cunipic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tunel-de-heno-grande-cunipic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4920/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Realizado sobre una base de cartón, está compuesto por heno procedente de praderas de alta montaña e incluye caléndula, menta y rosas. Se presenta en dos tamaños distintos, con lo que, dependiendo de la medida de la mascota, ésta podrá esconderse dentro y/o hacerlo rodar y hacer ejercicio. Medidas: 15cm * 25cm diámetro                    <a href="http://www.misterguau.com/index.php/tunel-de-heno-grande-cunipic.html" title="Tunel de heno grande Cunipic">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/tunel-de-heno-peque-o-cunipic.html" title="Tunel de heno pequeño Cunipic">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_53.jpg"  alt="Tunel de heno pequeño Cunipic" title="Tunel de heno pequeño Cunipic" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/tunel-de-heno-peque-o-cunipic.html" title="Tunel de heno pequeño Cunipic"><b>Tunel de heno pequeño Cunipic</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/tunel-de-heno-peque-o-cunipic.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4919/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Realizado sobre una base de cartón, está compuesto por heno procedente de praderas de alta montaña e incluye caléndula, menta y rosas. Se presenta en dos tamaños distintos, con lo que, dependiendo de la medida de la mascota, ésta podrá esconderse dentro y/o hacerlo rodar y hacer ejercicio. Medidas: Tunel heno pequeño: 20cm * 6cm diámetro                     <a href="http://www.misterguau.com/index.php/tunel-de-heno-peque-o-cunipic.html" title="Tunel de heno pequeño Cunipic">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/viruta-prensada-naturbed-compact.html" title="Viruta prensada Naturbed compact">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/a/naturbed_compact_1kg_ro30013.jpg"  alt="Viruta prensada Naturbed compact" title="Viruta prensada Naturbed compact" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/viruta-prensada-naturbed-compact.html" title="Viruta prensada Naturbed compact"><b>Viruta prensada Naturbed compact</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/viruta-prensada-naturbed-compact.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3777/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cama vegetal biodegradable a base de virutas de madera. Ecológica y apta para para roedores, reptiles y pájaros.﻿ Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/viruta-prensada-naturbed-compact.html" title="Viruta prensada Naturbed compact">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-arena-para-chinchilla-sandy.html" title="Vitakraft arena Sandy para chinchilla">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_arena_chinchilla_sandy_3.jpg"  alt="Vitakraft arena Sandy para chinchilla" title="Vitakraft arena Sandy para chinchilla" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-arena-para-chinchilla-sandy.html" title="Vitakraft arena Sandy para chinchilla"><b>Vitakraft arena Sandy para chinchilla</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-arena-para-chinchilla-sandy.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2189/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El baño diario con Chinchilla Sandy special proporciona una suavidad sedosa y natural al pelaje de la chinchilla. Vitakraft Sandy special consiste en arena finísima de atapulguita con granos de arena que, por ser redondos, tratan el pelaje con cuidado especial. Ofrézcale a su chinchilla este placer cada día. Formato: 1Kg                    <a href="http://www.misterguau.com/index.php/vitakraft-arena-para-chinchilla-sandy.html" title="Vitakraft arena Sandy para chinchilla">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-emotion-wellnes-cobaya.html" title="Vitakraft Barritas Emotion Wellnes cobaya">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_premium_cobaya_emotion_wellness_2.jpg"  alt="Vitakraft Barritas Emotion Wellnes cobaya" title="Vitakraft Barritas Emotion Wellnes cobaya" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-emotion-wellnes-cobaya.html" title="Vitakraft Barritas Emotion Wellnes cobaya"><b>Vitakraft Barritas Emotion Wellnes cobaya</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-emotion-wellnes-cobaya.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1551/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario a la dieta habitual energético y saludable para todo tipo de cobayas. Controla la piel y pelo, el sistema inmunológico y la limpieza dental. Contiene 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-emotion-wellnes-cobaya.html" title="Vitakraft Barritas Emotion Wellnes cobaya">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-emotion-wellnes-conejo.html" title="Vitakraft Barritas Emotion Wellnes conejo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_premium_conejo_en_emotion_wellness_2.jpg"  alt="Vitakraft Barritas Emotion Wellnes conejo" title="Vitakraft Barritas Emotion Wellnes conejo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-emotion-wellnes-conejo.html" title="Vitakraft Barritas Emotion Wellnes conejo"><b>Vitakraft Barritas Emotion Wellnes conejo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-emotion-wellnes-conejo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2784/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario a la dieta habitual energético y saludable para todo tipo de conejos. Controla la piel y pelo, el sistema inmunológico y la limpieza dental.Contiene zanahorias, plátanos y alfalfa. Ayuda a aumentar el sistema inmunológico y a un mejor bienestar. Contiene 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-emotion-wellnes-conejo.html" title="Vitakraft Barritas Emotion Wellnes conejo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitafraft-barritas-kracker-cobaya-fruta.html" title="Vitakraft Barritas Kracker cobaya fruta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitafraft_barritas_kracker_cobaya_fruta_3.jpg"  alt="Vitakraft Barritas Kracker cobaya fruta" title="Vitakraft Barritas Kracker cobaya fruta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitafraft-barritas-kracker-cobaya-fruta.html" title="Vitakraft Barritas Kracker cobaya fruta"><b>Vitakraft Barritas Kracker cobaya fruta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitafraft-barritas-kracker-cobaya-fruta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1468/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario a la dieta habitual energético y saludable con frutas elaborado con semillas de alta calidad.  Galletas duras cocidas al horno que aportan los nutrientes necesarios para realzar el bienestar y el ánimo de su mascota. Contiene 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitafraft-barritas-kracker-cobaya-fruta.html" title="Vitakraft Barritas Kracker cobaya fruta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-cobaya-miel.html" title="Vitakraft Barritas Kracker cobaya miel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_kracker_cobaya_miel.jpg"  alt="Vitakraft Barritas Kracker cobaya miel" title="Vitakraft Barritas Kracker cobaya miel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-cobaya-miel.html" title="Vitakraft Barritas Kracker cobaya miel"><b>Vitakraft Barritas Kracker cobaya miel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-kracker-cobaya-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1550/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario a la dieta habitual energético y saludable con frutas elaborado con  semillas de alta calidad con miel. Contiene 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-cobaya-miel.html" title="Vitakraft Barritas Kracker cobaya miel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-conejo-frutas-del-bosque.html" title="Vitakraft Barritas Kracker Conejo frutas del bosque">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_conejo_frutas_bosque_2.jpg"  alt="Vitakraft Barritas Kracker Conejo frutas del bosque" title="Vitakraft Barritas Kracker Conejo frutas del bosque" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-conejo-frutas-del-bosque.html" title="Vitakraft Barritas Kracker Conejo frutas del bosque"><b>Vitakraft Barritas Kracker Conejo frutas del bosque</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-kracker-conejo-frutas-del-bosque.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1557/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento en barrita complementario a la dieta habitual energético y saludable con frutas del bosque como arándanos de altísima calidad. Contiene 2 barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-conejo-frutas-del-bosque.html" title="Vitakraft Barritas Kracker Conejo frutas del bosque">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-fruta.html" title="Vitakraft Barritas Kracker hamster fruta">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_hamster_fruta_3.jpg"  alt="Vitakraft Barritas Kracker hamster fruta" title="Vitakraft Barritas Kracker hamster fruta" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-fruta.html" title="Vitakraft Barritas Kracker hamster fruta"><b>Vitakraft Barritas Kracker hamster fruta</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-kracker-fruta.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1544/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con nueces elaborado con las mejores frutas de altísima calidad. Mantienen todos los nutrientes para el bienestar de nuestro hamster. Contiene dos barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-fruta.html" title="Vitakraft Barritas Kracker hamster fruta">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-frutos-secos.html" title="Vitakraft Barritas Kracker hamster frutos secos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_hamster_frutos_secos_2.jpg"  alt="Vitakraft Barritas Kracker hamster frutos secos" title="Vitakraft Barritas Kracker hamster frutos secos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-frutos-secos.html" title="Vitakraft Barritas Kracker hamster frutos secos"><b>Vitakraft Barritas Kracker hamster frutos secos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-kracker-frutos-secos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1545/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con nueces elaborado con las mejores frutas secos como cacahuetes. Mantienen todos los nutrientes para el bienestar de nuestro hamster. Contiene dos barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-frutos-secos.html" title="Vitakraft Barritas Kracker hamster frutos secos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-hamster-miel.html" title="Vitakraft Barritas Kracker hamster miel ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_barritas_hamster_miel_1.jpg"  alt="Vitakraft Barritas Kracker hamster miel " title="Vitakraft Barritas Kracker hamster miel " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-hamster-miel.html" title="Vitakraft Barritas Kracker hamster miel "><b>Vitakraft Barritas Kracker hamster miel </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-barritas-kracker-hamster-miel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2181/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético y saludable con frutas elaborado con las mejores frutas de altísima calidad. Mantienen todos los nutrientes para el bienestar de nuestro hamster. Contiene dos barritas por paquete.                    <a href="http://www.misterguau.com/index.php/vitakraft-barritas-kracker-hamster-miel.html" title="Vitakraft Barritas Kracker hamster miel ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-carotties-zanahoria-hamsters.html" title="Vitakraft Carotties zanahoria hamsters">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_bastones_de_zanahoria_hamster_3.jpg"  alt="Vitakraft Carotties zanahoria hamsters" title="Vitakraft Carotties zanahoria hamsters" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-carotties-zanahoria-hamsters.html" title="Vitakraft Carotties zanahoria hamsters"><b>Vitakraft Carotties zanahoria hamsters</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-carotties-zanahoria-hamsters.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1548/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosos bastoncitos crujientes a base de cereales y verduras (zanahorias), con tamaño especial mini para los hámsters. Fuente natural de caroteno. Ideal para mimar y jugar. Con vitaminas A, D3, E - Fácilmente digerible - Receta sin azúcar - Sin conservantes - Sin la adición de antioxidantes Formato: 50gr.                    <a href="http://www.misterguau.com/index.php/vitakraft-carotties-zanahoria-hamsters.html" title="Vitakraft Carotties zanahoria hamsters">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-chinchilla-emotion-beauty.html" title="Vitakraft Chinchilla Emotion Beauty">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_chinchilla_emotion_beauty_2.jpg"  alt="Vitakraft Chinchilla Emotion Beauty" title="Vitakraft Chinchilla Emotion Beauty" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-chinchilla-emotion-beauty.html" title="Vitakraft Chinchilla Emotion Beauty"><b>Vitakraft Chinchilla Emotion Beauty</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-chinchilla-emotion-beauty.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1404/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Este completo menú para chinchillas contiene ácidos grasos esenciales de gran valor como el aceite de girasol, que protege la salud de su piel y pelo. Pelo brillante, fortalece las defensas y mantiene los dientes sanos. Delicioso alfalfa , deliciosa alcachofa y rosa mosqueta se combinan con materiales extruidos Crisp.  Formato: 600gr.                    <a href="http://www.misterguau.com/index.php/vitakraft-chinchilla-emotion-beauty.html" title="Vitakraft Chinchilla Emotion Beauty">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-compact-ultra-arena-huron.html" title="Vitakraft Compact Ultra Arena Hurón">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_arena_hurones_compac_3.jpg"  alt="Vitakraft Compact Ultra Arena Hurón" title="Vitakraft Compact Ultra Arena Hurón" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-compact-ultra-arena-huron.html" title="Vitakraft Compact Ultra Arena Hurón"><b>Vitakraft Compact Ultra Arena Hurón</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-compact-ultra-arena-huron.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1366/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Ideal para hurones: super-ultra-económico compacto gracias a su composición de bentonita, una arcilla mineral natural con alta capacidad de hinchamiento. El líquido del orín se aglutina en forma de bola compacta, siendo fácil de retirar quedando el resto de la arena perfectamente limpia. Producto 100% natural - Súper absorbente - Los olores se eliminan inmediatamente - Aglutinación fuerte - Muy económico - menos residuos. Formato: 4Kg                    <a href="http://www.misterguau.com/index.php/vitakraft-compact-ultra-arena-huron.html" title="Vitakraft Compact Ultra Arena Hurón">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-emotion-balance-conejos-enanos-light.html" title="Vitakraft Emotion Balance Conejos enanos (light)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/e/menu_emotion_c_enanos_balance_11273.jpg"  alt="Vitakraft Emotion Balance Conejos enanos (light)" title="Vitakraft Emotion Balance Conejos enanos (light)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-emotion-balance-conejos-enanos-light.html" title="Vitakraft Emotion Balance Conejos enanos (light)"><b>Vitakraft Emotion Balance Conejos enanos (light)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-emotion-balance-conejos-enanos-light.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2382/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo para conejos con sobrepeso. Aporta una fuente extra de fibra regulando la ingesta de hidratos de carbono. A base de zanahoria, alfalfa y brotes de hierba que se combinan en una bolita extrusionada para que nuestro conejo tenga una alimentación selecta sin riesgo. Alta calidad. Ingredientes naturales que reducen el olor del orín y las heces. Solo para los mas exigentes! Formato: 600gr.                    <a href="http://www.misterguau.com/index.php/vitakraft-emotion-balance-conejos-enanos-light.html" title="Vitakraft Emotion Balance Conejos enanos (light)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-cobaya.html" title="Vitakraft Emotion Beauty Cobaya">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_menu_premium_cobayas_emotion_beauty.jpg"  alt="Vitakraft Emotion Beauty Cobaya" title="Vitakraft Emotion Beauty Cobaya" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-cobaya.html" title="Vitakraft Emotion Beauty Cobaya"><b>Vitakraft Emotion Beauty Cobaya</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-emotion-beauty-cobaya.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4627/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Menú completamente natural para cobayas adultas.  Ingredientes de alta calidad proporcionan un valioso ácidos omega-3 y omega-6 ácidos grasos esenciales, la piel y un pelo sanos. Con extra de vitamina C para cubrir las necesidades vitamínicas de nuestras pequeñas cobayas. Un compuesto natural especial también reduce las heces y el olor de la orina en el hogar. Formato: 600gr                    <a href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-cobaya.html" title="Vitakraft Emotion Beauty Cobaya">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-conejos.html" title="Vitakraft Emotion Beauty Conejos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_premium_conejos_beauty_1.jpg"  alt="Vitakraft Emotion Beauty Conejos" title="Vitakraft Emotion Beauty Conejos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-conejos.html" title="Vitakraft Emotion Beauty Conejos"><b>Vitakraft Emotion Beauty Conejos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-emotion-beauty-conejos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1556/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Menú completamente natural para conejos adultos (6 meses - 5 años). Especial para conejos con sobrepeso y compuesto con ingredientes menos calóricos. Controla la piel y pelo, el sistema inmunológico y la limpieza dental. Formato: 600gr, 1.8Kg                    <a href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-conejos.html" title="Vitakraft Emotion Beauty Conejos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-hamster.html" title="Vitakraft Emotion Beauty hamster">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_premium_hamster_emotion_beauty_2.jpg"  alt="Vitakraft Emotion Beauty hamster" title="Vitakraft Emotion Beauty hamster" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-hamster.html" title="Vitakraft Emotion Beauty hamster"><b>Vitakraft Emotion Beauty hamster</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-emotion-beauty-hamster.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1543/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento específico para hamsters, formulado para aportarle todos los nutrientes y vitaminas que necesita, a la vez que mantiene su pelo suave y sedoso. Esencial omega-3 y omega-6 ácidos grasos , la piel y un pelo sanos. Deliciosos vegetales, maní y camarones delicioso y llenos de proteínas se combinan con materiales extruidos Crisp. Formato. 600gr                    <a href="http://www.misterguau.com/index.php/vitakraft-emotion-beauty-hamster.html" title="Vitakraft Emotion Beauty hamster">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-emotion-best-for-kids-conejos-junior-1475.html" title="Vitakraft Emotion Best for Kids Conejos (junior)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_emotion_best_for_kids_conejos_2.jpg"  alt="Vitakraft Emotion Best for Kids Conejos (junior)" title="Vitakraft Emotion Best for Kids Conejos (junior)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-emotion-best-for-kids-conejos-junior-1475.html" title="Vitakraft Emotion Best for Kids Conejos (junior)"><b>Vitakraft Emotion Best for Kids Conejos (junior)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-emotion-best-for-kids-conejos-junior-1475.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1475/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Menú completamente natural para conejos hasta 6 meses. Cubre las necesidades alimenticias de su roedor potenciando la piel y pelo, el sistema inmunológico y los dientes y limpieza dental . Formato: 600gr                    <a href="http://www.misterguau.com/index.php/vitakraft-emotion-best-for-kids-conejos-junior-1475.html" title="Vitakraft Emotion Best for Kids Conejos (junior)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-emotion-long-hair-conejos-pelo-largo.html" title="Vitakraft Emotion Long Hair Conejos (pelo largo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakradt_emotion_conejos_de_pelo_largo_2.jpg"  alt="Vitakraft Emotion Long Hair Conejos (pelo largo)" title="Vitakraft Emotion Long Hair Conejos (pelo largo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-emotion-long-hair-conejos-pelo-largo.html" title="Vitakraft Emotion Long Hair Conejos (pelo largo)"><b>Vitakraft Emotion Long Hair Conejos (pelo largo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-emotion-long-hair-conejos-pelo-largo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1476/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Menú completamente natural para conejos y conejos enanos adultos (6 meses - 5 años). Especial para conejos con el pelo largo. Controla la piel y pelo, el sistema inmunológico y la limpieza dental. Formato: 600gr                    <a href="http://www.misterguau.com/index.php/vitakraft-emotion-long-hair-conejos-pelo-largo.html" title="Vitakraft Emotion Long Hair Conejos (pelo largo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-emotion-sensitive-conejos-enanos.html" title="Vitakraft Emotion Sensitive Conejos enanos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_premium_emotion_sensitive_conejos_600gr_25589.jpg"  alt="Vitakraft Emotion Sensitive Conejos enanos" title="Vitakraft Emotion Sensitive Conejos enanos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-emotion-sensitive-conejos-enanos.html" title="Vitakraft Emotion Sensitive Conejos enanos"><b>Vitakraft Emotion Sensitive Conejos enanos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-emotion-sensitive-conejos-enanos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2022/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimentación de alta calidad especialmente formulada para conejos con sensibilidad estomacal. No contiene granos para adaptarse a los estómagos más sensibles. A base de alfalfa combinada con deliciosos productos extrusionados. El proceso de fabricación especial garantiza que el forro de los granos ya esté abierto. Reduce la olor de las heces y el orín. Con minerales y vitaminas naturales. Formato: 600gr                    <a href="http://www.misterguau.com/index.php/vitakraft-emotion-sensitive-conejos-enanos.html" title="Vitakraft Emotion Sensitive Conejos enanos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-fruit-crossys-hamster.html" title="Vitakraft Fruit Crossys hamster">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_fruit_crossys_hamster_2.jpg"  alt="Vitakraft Fruit Crossys hamster" title="Vitakraft Fruit Crossys hamster" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-fruit-crossys-hamster.html" title="Vitakraft Fruit Crossys hamster"><b>Vitakraft Fruit Crossys hamster</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-fruit-crossys-hamster.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1464/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosas almohadillas crujientes de galletas rellenas de fruta (mango, piña, etc) para el deleite de nuestro hamster. Complementario a la dieta, porque ellos tambien se merecen caprichos!. Contenido: 50gr                    <a href="http://www.misterguau.com/index.php/vitakraft-fruit-crossys-hamster.html" title="Vitakraft Fruit Crossys hamster">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-heno-aromatico.html" title="Vitakraft Heno aromático">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_heno_aromatizado_2.jpg"  alt="Vitakraft Heno aromático" title="Vitakraft Heno aromático" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-heno-aromatico.html" title="Vitakraft Heno aromático"><b>Vitakraft Heno aromático</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-heno-aromatico.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2193/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Heno aromático Vita Verde a las hierbas es la mezcla de forraje premium de Vitakraft. Este heno es de una calidad selecta y especialmente apreciado como fuente de fibra. Gracias a las sabrosas y aromáticas hierbas es el preferido por los roedores. Peso: 500 g.                    <a href="http://www.misterguau.com/index.php/vitakraft-heno-aromatico.html" title="Vitakraft Heno aromático">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-hierba-fresca-roedores.html" title="Vitakraft Hierba fresca roedores">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_hierba_fresca_roedores_2.jpg"  alt="Vitakraft Hierba fresca roedores" title="Vitakraft Hierba fresca roedores" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-hierba-fresca-roedores.html" title="Vitakraft Hierba fresca roedores"><b>Vitakraft Hierba fresca roedores</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-hierba-fresca-roedores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1482/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Semillas de hierba fresca de fácil plantado. Con tan solo remojar el recipiente dispondremos de hierba fresca y natural en 2-3 días. Ideal para todo tipo de roedores, les purga y les sienta fenomenal! Y lo podremos usar durante todo el año. Formato: 120gr                    <a href="http://www.misterguau.com/index.php/vitakraft-hierba-fresca-roedores.html" title="Vitakraft Hierba fresca roedores">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-hamster.html" title="Vitakraft Menu Aroma hamster">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_aroma_hamsters_2.jpg"  alt="Vitakraft Menu Aroma hamster" title="Vitakraft Menu Aroma hamster" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-hamster.html" title="Vitakraft Menu Aroma hamster"><b>Vitakraft Menu Aroma hamster</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-aroma-hamster.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1542/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo diario, hecho a partir de 18 ingredientes esenciales. Con los minerales, las vitaminas y las proteínas necesarias para nuestros hamsters. Con semillas sabrosas, deliciosos cereales y deliciosos frutos secos orientados específicamente a las necesidades del hamster que contiene valiosas proteínas como complejo vital, que le ofrece un impulso extra de vitalidad. Formato: 400gr, 1Kg                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-hamster.html" title="Vitakraft Menu Aroma hamster">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-premium-ardillas.html" title="Vitakraft Menú Aroma Vital ardillas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_ardillas_2.jpg"  alt="Vitakraft Menú Aroma Vital ardillas" title="Vitakraft Menú Aroma Vital ardillas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-premium-ardillas.html" title="Vitakraft Menú Aroma Vital ardillas"><b>Vitakraft Menú Aroma Vital ardillas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-premium-ardillas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1563/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Deliciosa mezcla de frutos secos, semillas y frutos frescos deshidratados, con todas las proteínas, vitaminas, minerales y oligoelementos necesarios para el perfecto desarrollo de nuestra ardilla. Contiene nueces enteras. Formato: 600gr                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-premium-ardillas.html" title="Vitakraft Menú Aroma Vital ardillas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-cobayas.html" title="Vitakraft Menu Aroma Vital Cobayas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_aroma_cobayas_2.jpg"  alt="Vitakraft Menu Aroma Vital Cobayas" title="Vitakraft Menu Aroma Vital Cobayas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-cobayas.html" title="Vitakraft Menu Aroma Vital Cobayas"><b>Vitakraft Menu Aroma Vital Cobayas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-cobayas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1408/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Delicioso pienso pensado para cubrir todas las necesidades de nuestras cobayas. Con semillas sabrosas, deliciosos cereales, verduras deliciosas y una dosis extra de vitamina C, está orientado específicamente a las necesidades de las cobayas. Contiene un complejo vital que proporciona un aumento extra de vitalidad . Formatos: 400gr, 1Kg, 3Kg.                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-cobayas.html" title="Vitakraft Menu Aroma Vital Cobayas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-conejo.html" title="Vitakraft Menu Aroma Vital Conejo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_aroma_conejo_2.jpg"  alt="Vitakraft Menu Aroma Vital Conejo" title="Vitakraft Menu Aroma Vital Conejo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-conejo.html" title="Vitakraft Menu Aroma Vital Conejo"><b>Vitakraft Menu Aroma Vital Conejo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-conejo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1407/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo como el que los conejos encontrarían en su hábitat natural. Contiene vitamina C fundamental para su salud y que refuerzan su sistema inmunológico. Los minerales y vitaminas adicionales protegen y dan vitalidad. Menu Vital de Vitakrat está formulado con una combinación especial que reduce los malos olores. Formatos: 1Kg, 3Kg                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-conejo.html" title="Vitakraft Menu Aroma Vital Conejo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-gerbos.html" title="Vitakraft Menu Aroma Vital Jerbos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_gerbos_2.jpg"  alt="Vitakraft Menu Aroma Vital Jerbos" title="Vitakraft Menu Aroma Vital Jerbos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-gerbos.html" title="Vitakraft Menu Aroma Vital Jerbos"><b>Vitakraft Menu Aroma Vital Jerbos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-gerbos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1409/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento energético para jerbos a base de frutas maduras y nutritivos cereales. Contiene todas las vitaminas esenciales y frutos secos crujientes para una salud de hierro. Dieta con deliciosas verduras, nueces crujientes y deliciosas frutas  orientada específicamente a las necesidades de los jerbos. Formato: 250gr.                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-aroma-vital-gerbos.html" title="Vitakraft Menu Aroma Vital Jerbos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-hurones-tarrina-1561.html" title="Vitakraft Menú Erizos tarrina">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_erizos_tarrinas_2.jpg"  alt="Vitakraft Menú Erizos tarrina" title="Vitakraft Menú Erizos tarrina" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-hurones-tarrina-1561.html" title="Vitakraft Menú Erizos tarrina"><b>Vitakraft Menú Erizos tarrina</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-hurones-tarrina-1561.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1561/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario al pienso seco de nuestro erizo. Tarrina de carne suave y esponjosa que satisfacerá todas las necesidades de tu erizo a la vez que le aporta los nutrientes necesarios de una dieta variada. Contiene carne y pescado. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-hurones-tarrina-1561.html" title="Vitakraft Menú Erizos tarrina">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-hurones.html" title="Vitakraft Menú Hurones">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_menu_hurones_800gr_25365.jpg"  alt="Vitakraft Menú Hurones" title="Vitakraft Menú Hurones" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-hurones.html" title="Vitakraft Menú Hurones"><b>Vitakraft Menú Hurones</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-hurones.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1365/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Este sabroso alimento rico en energía está especialmente adaptado a las necesidades de los hurones: proporción muy alta de proteína animal. La taurina también apoya la visión y refuerza la función cardíaca de los animales ágiles. Con pollo y pescado - Acidos grasos esenciales, vitaminas y minerales - Sin azúcar - Sin sabores artificiales - Sin colores - Sin conservantes - Sin la adición de sal: Formato: 800gr                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-hurones.html" title="Vitakraft Menú Hurones">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-hurones-tarrina.html" title="Vitakraft Menú hurones tarrina">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_hurones_tarrina_3.jpg"  alt="Vitakraft Menú hurones tarrina" title="Vitakraft Menú hurones tarrina" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-hurones-tarrina.html" title="Vitakraft Menú hurones tarrina"><b>Vitakraft Menú hurones tarrina</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-hurones-tarrina.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1560/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Un regalo carne para su hurón! Delicioso en rodajas, enriquecida con minerales valiosos y envasados ​​en porciones justo y fresco sabor. Con pollo y pescado. En práctica latita. Libre de sabores artificiales. Sin colorantes. Sin conservantes<br />
Sin adición de sal. Contenido: 100 g                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-hurones-tarrina.html" title="Vitakraft Menú hurones tarrina">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-life-dream-extrusionado-cobayas.html" title="Vitakraft Menu Life Dream extrusionado Cobayas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_menu_life_dream_extrusionado_cobayas_600gr_25599.jpg"  alt="Vitakraft Menu Life Dream extrusionado Cobayas" title="Vitakraft Menu Life Dream extrusionado Cobayas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-life-dream-extrusionado-cobayas.html" title="Vitakraft Menu Life Dream extrusionado Cobayas"><b>Vitakraft Menu Life Dream extrusionado Cobayas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-life-dream-extrusionado-cobayas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4626/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento extrusionado para todo tipo de conejos enanos. Con fruta e  ingredientes deliciosos para que resulte oloroso y atractivo - También contiene un complejo inmune activo para fortalecer las defensas! Contiene mezcla con naranjas, uvas y manzanas que aportan vitaminas y minerales esenciales, y una buena cantidad de fibra cruda para la abrasión óptima de los dientes y una digestión saludable. Formato: 600g                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-life-dream-extrusionado-cobayas.html" title="Vitakraft Menu Life Dream extrusionado Cobayas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-life-dream-extrusionado-conejos.html" title="Vitakraft Menu Life Dream extrusionado Conejos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/e/menu_life_cream_extrusionado_conejos.jpg"  alt="Vitakraft Menu Life Dream extrusionado Conejos" title="Vitakraft Menu Life Dream extrusionado Conejos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-life-dream-extrusionado-conejos.html" title="Vitakraft Menu Life Dream extrusionado Conejos"><b>Vitakraft Menu Life Dream extrusionado Conejos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-life-dream-extrusionado-conejos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4625/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento extrusionado para todo tipo de conejos enanos. Con fruta e  ingredientes deliciosos para que resulte oloroso y atractivo - También contiene un complejo inmune activo para fortalecer las defensas! Contiene  mezcla de pera, uvas y manzana que aportan vitaminas y minerales esenciales, y una buena cantidad de fibra cruda para la abrasión óptima de los dientes y una digestión saludable. Formato: 600gr                     <a href="http://www.misterguau.com/index.php/vitakraft-menu-life-dream-extrusionado-conejos.html" title="Vitakraft Menu Life Dream extrusionado Conejos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-premium-erizos.html" title="Vitakraft Menú premium erizos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_alimento_erizos_2.jpg"  alt="Vitakraft Menú premium erizos" title="Vitakraft Menú premium erizos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-premium-erizos.html" title="Vitakraft Menú premium erizos"><b>Vitakraft Menú premium erizos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-premium-erizos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1562/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mezcla natural para Erizos jovenes y  adultos. Alimento preparado especialmente para satisfacer las necesidades nutricionales de los Erizos africanos. Contiene crustáceos, carne, insectos y frutas, y está equipado con alta calidad de  grasas vegetales y animales y vitaminas esenciales enriquecidas. Formato: 500gr                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-premium-erizos.html" title="Vitakraft Menú premium erizos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-vita-special-chinchillas-regular.html" title="Vitakraft Menu Vita Special Chinchillas Regular">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_vita_special_chinchillas_regular_1.jpg"  alt="Vitakraft Menu Vita Special Chinchillas Regular" title="Vitakraft Menu Vita Special Chinchillas Regular" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-vita-special-chinchillas-regular.html" title="Vitakraft Menu Vita Special Chinchillas Regular"><b>Vitakraft Menu Vita Special Chinchillas Regular</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-vita-special-chinchillas-regular.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2191/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento extrusionado para chinchillas desde los 12 meses hasta los 10 años de edad.  Con ácidos grasos esenciales que contribuyen a un cuidado extra de la piel y el pelaje. Altamente recomendable ya que, aparte de su excelente calidad, nuestra  chinchilla recibirá todos los nutrientes necesarios ya que no podrá elegir lo que comer y deshechar el resto como en el caso de las mixturas. Formato: 600gr                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-vita-special-chinchillas-regular.html" title="Vitakraft Menu Vita Special Chinchillas Regular">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-menu-vita-special-cobayas-best-for-kids-baby-1466.html" title="Vitakraft Menu Vita Special Cobayas regular">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_menu_vita_special_cobayas_regular_2.jpg"  alt="Vitakraft Menu Vita Special Cobayas regular" title="Vitakraft Menu Vita Special Cobayas regular" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-menu-vita-special-cobayas-best-for-kids-baby-1466.html" title="Vitakraft Menu Vita Special Cobayas regular"><b>Vitakraft Menu Vita Special Cobayas regular</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-menu-vita-special-cobayas-best-for-kids-baby-1466.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1466/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Nutrición completa para cobayas desde los 6 meses hasta los 5 años de edad. Contiene Biogerm agregado (ingrediente activo de alta calidad). Con tratamiento especial para reducir el olor de las heces. Estrusionado para que no desperdicien nutrientes esenciales. Formato: 600gr                    <a href="http://www.misterguau.com/index.php/vitakraft-menu-vita-special-cobayas-best-for-kids-baby-1466.html" title="Vitakraft Menu Vita Special Cobayas regular">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-snack-rings-rollis-para-roedores.html" title="Vitakraft snack Rings rollis para roedores">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_rings_roedores.jpg"  alt="Vitakraft snack Rings rollis para roedores" title="Vitakraft snack Rings rollis para roedores" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-snack-rings-rollis-para-roedores.html" title="Vitakraft snack Rings rollis para roedores"><b>Vitakraft snack Rings rollis para roedores</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-snack-rings-rollis-para-roedores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2786/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snack complementario a la dieta de conejos, cobayas y hamsters. Aritos de maíz, trigo y alfalfa que no solo son un delicioso manjar para nuestros amigos, sino que también es de fácil digestión, conteniendo valiosas vitaminas, minerales y fibra alimentaria. Sin azúcar, ni colorantes ni conservantes. Formato: 300gr                    <a href="http://www.misterguau.com/index.php/vitakraft-snack-rings-rollis-para-roedores.html" title="Vitakraft snack Rings rollis para roedores">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-snacks-carotties-conejos-zanahoria.html" title="Vitakraft Snacks Carotties conejos (zanahoria)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_snacks_carotties_conejos_2.jpg"  alt="Vitakraft Snacks Carotties conejos (zanahoria)" title="Vitakraft Snacks Carotties conejos (zanahoria)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-snacks-carotties-conejos-zanahoria.html" title="Vitakraft Snacks Carotties conejos (zanahoria)"><b>Vitakraft Snacks Carotties conejos (zanahoria)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-snacks-carotties-conejos-zanahoria.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1402/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Barritas crujientes, sabrosas y ligeras hechas a partir de crujientes zanahorias. Contiene carotina natural y aporta valiosos nutrientes. Enriquecidas con vitaminas esenciales y de fácil digestión.Este snack brinda nutrientes importantes. Además esta enriquecido con vitaminas B. A, C, D3 y E.  Ideal para mimar a nuestro conejo!  Formato: 50gr.                    <a href="http://www.misterguau.com/index.php/vitakraft-snacks-carotties-conejos-zanahoria.html" title="Vitakraft Snacks Carotties conejos (zanahoria)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-snacks-greenies-conejos.html" title="Vitakraft Snacks Greenies de alfalfa conejos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitakraft_snacks_greenies_conejos_2.jpg"  alt="Vitakraft Snacks Greenies de alfalfa conejos" title="Vitakraft Snacks Greenies de alfalfa conejos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-snacks-greenies-conejos.html" title="Vitakraft Snacks Greenies de alfalfa conejos"><b>Vitakraft Snacks Greenies de alfalfa conejos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-snacks-greenies-conejos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1401/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Barritas crujientes, sabrosas y ligeras hechas a partir de crujientes vegetales y plantas como la alfalfa. Contiene carotina natural y aporta valiosos nutrientes. Formato: 50 gr.                    <a href="http://www.misterguau.com/index.php/vitakraft-snacks-greenies-conejos.html" title="Vitakraft Snacks Greenies de alfalfa conejos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/vitakraft-twinis-bizcocho-barrita-con-quinoa-para-cobaya.html" title="Vitakraft Twinis bizcocho + barrita con quinoa para cobaya">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_1_69.jpg"  alt="Vitakraft Twinis bizcocho + barrita con quinoa para cobaya" title="Vitakraft Twinis bizcocho + barrita con quinoa para cobaya" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/vitakraft-twinis-bizcocho-barrita-con-quinoa-para-cobaya.html" title="Vitakraft Twinis bizcocho + barrita con quinoa para cobaya"><b>Vitakraft Twinis bizcocho + barrita con quinoa para cobaya</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/vitakraft-twinis-bizcocho-barrita-con-quinoa-para-cobaya.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2785/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento complementario a la dieta habitual de nuestra cobaya. Deliciosas barritas horneadas recubiertas por una deliciosa capa de bizcocho con quinoa. Sin gluten y con antioxidantes naturales. Contiene una barritas por paquete.                     <a href="http://www.misterguau.com/index.php/vitakraft-twinis-bizcocho-barrita-con-quinoa-para-cobaya.html" title="Vitakraft Twinis bizcocho + barrita con quinoa para cobaya">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item last">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/nutri-plus-gel-multivitaminas.html" title="Vitaminas gel Nutri-plus">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/u/nutri-plus_gel_1.jpg"  alt="Vitaminas gel Nutri-plus" title="Vitaminas gel Nutri-plus" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/nutri-plus-gel-multivitaminas.html" title="Vitaminas gel Nutri-plus"><b>Vitaminas gel Nutri-plus</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/nutri-plus-gel-multivitaminas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1122/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Complemento nutricional de alta energía, que puede ser administrado a animales en convalecencia post-operatoria o durante la enfermedad para contrarrestar la pérdida de apetito; en estados carenciales, etc. También en desarrollo de animales jóvenes, y en períodos de esfuerzos prolongados, así como a hembras gestantes o en lactación. Formato: 100gr.                    <a href="http://www.misterguau.com/index.php/nutri-plus-gel-multivitaminas.html" title="Vitaminas gel Nutri-plus">Saber más</a><br><br>
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
                            <strong>200 Artículo(s)</strong>
                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
    
    

    </div>

        <div class="sorter">
                <p class="view-mode">
                                </p>
            
        <div class="sort-by">
            <label>Ordenar por</label>
            <select onchange="setLocation(this.value)">
                    		            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
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

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=312">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_biozoo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=378">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_cani_amici.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=299">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_cunipic.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=388">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_esteve.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=298">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_ferplast.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=316">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo_1.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=362">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_gimborn.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=416">
				<img src="http://69.160.51.167/media/catalog/attribute/Hami_form.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=311">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=314">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_nayeco.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=355">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_piopa.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=310">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_sandimas.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=407">
				<img src="http://69.160.51.167/media/catalog/attribute/Sanytol_marca.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=366">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_topnature_all.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=303">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_varios.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=302">
				<img src="http://69.160.51.167/media/catalog/attribute/virbac.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=268">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_vitakraft.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/roedores-y-mamiferos.html?manufacturer=326">
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
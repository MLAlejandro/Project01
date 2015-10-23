<?php
session_start();

if(isset ($_SESSION['nombre'])){
	$logejat=1;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>GATOS</title>
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
<link rel="canonical" href="http://www.misterguau.com/index.php/gatos.html" />
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" catalog-category-view categorypath-gatos-html category-gatos">
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
                    <li class="category8">
                            <strong>GATOS</strong>
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
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html" class="open" class="potential" >GATOS</a>
                                <ul>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/alimentacion.html" class="potential" >/ Alimentación</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/snacks-y-premios.html" >/ Snacks y premios</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/maltas-vitaminas-hierbas.html" >/ Maltas y hierbas</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/juguetes-y-ocio.html" class="potential" >/ Juguetes y ocio</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/comederos-y-bebederos.html" class="potential" >/ Comederos</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/higiene.html" class="potential" >/ Higiene</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/arneses-y-collares.html" >/ Arneses y collares</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/camas-cunas-iglus.html" class="potential" >/ Camas e iglús</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/puertas-gateras.html" >/ Puertas gateras</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/educacion-y-comportamiento.html" >/ Educación</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/rascadores.html" class="potential" >/ Rascadores</a>
                                            </li>
                                                                                                   <li><a href="http://www.misterguau.com/index.php/gatos/transportines-y-viajes.html" class="potential" >/ Transporte</a>
                                            </li>
                                    </ul>
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
												<div class="corner-right-top">                                <h2>GATOS</h2>
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
<p><span style="color: #33cccc;"><strong>TODO LO QUE NECESITAS PARA TU GATO <span style="color: #888888;">- &nbsp;Elige una categor&iacute;a</span></strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="color: #33cccc;"><strong><span style="font-size: x-small;"><strong><br /></strong></span></strong></span></p>
<p><span style="font-size: x-small;"><strong><a title="OFERTAS GATOS" href="http://www.misterguau.com/index.php/ofertas/gatos.html" target="_self"><img src="http://www.misterguau.com/media//Gatos.jpg" alt="OFERTAS GATOS" /></a>&nbsp; &nbsp; &nbsp;&nbsp;<a title="Alimentacion para gato" href="http://www.misterguau.com/index.php/gatos/alimentacion.html" target="_self"><img src="http://www.misterguau.com/media//Comida_para_gatos.jpg" alt="Comida para gatos" /></a>&nbsp; &nbsp; <a title="Snacks y premios para gatos" href="http://www.misterguau.com/index.php/gatos/snacks-y-premios.html" target="_self"><img src="http://www.misterguau.com/media//Snacks_para_gatos.jpg" alt="Snacks para gatos" /></a>&nbsp; &nbsp; <a title="Maltas y hierbas para gatos" href="http://www.misterguau.com/index.php/gatos/maltas-vitaminas-hierbas.html" target="_self"><img src="http://www.misterguau.com/media//Hierbas_y_maltas.jpg" alt="Hierbas y maltas para gato" /></a>&nbsp;</strong></span></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><span style="font-size: x-small;"><strong><span style="color: #808080;"><a title="OFERTAS GATOS" href="http://www.misterguau.com/index.php/ofertas/gatos.html" target="_self"><span style="color: #33cccc;">Ofertas y regalos gatos</span></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Alimentacion gatos" href="http://www.misterguau.com/index.php/gatos/alimentacion.html" target="_self">Comida para gatos</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Snacks y premios para gatos" href="http://www.misterguau.com/index.php/gatos/snacks-y-premios.html" target="_self">Snacks para gatos</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Hierbas y maltas" href="http://www.misterguau.com/index.php/gatos/maltas-vitaminas-hierbas.html" target="_self">Hierbas y maltas</a>&nbsp; &nbsp;</span></strong></span></span></span></span></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><a title="Comederos y bebederos para gatos" href="http://www.misterguau.com/index.php/gatos/comederos-y-bebederos.html" target="_self"></a><a title="Juguetes y ocio para gatos" href="http://www.misterguau.com/index.php/gatos/juguetes-y-ocio.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Juguetes_para_gato.jpg" alt="Juguetes y ocio para gatos" /></a>&nbsp; &nbsp; &nbsp;<a title="Comederos y bebederos para gatos" href="http://www.misterguau.com/index.php/gatos/comederos-y-bebederos.html" target="_self"><img src="http://www.misterguau.com/media//Comederos_para_perro.jpg" alt="Comederos para gato" /></a>&nbsp; &nbsp; &nbsp;<a title="Higiene para gatos" href="http://www.misterguau.com/index.php/gatos/higiene.html" target="_self"><img src="http://www.misterguau.com/media//Higiene_para_gatos.jpg" alt="Higiene para gatos" /></a>&nbsp; &nbsp; <a title="Arneses y collares para gatos" href="http://www.misterguau.com/index.php/gatos/arneses-y-collares.html" target="_self"><img src="http://www.misterguau.com/media//Collares_para_gato.jpg" alt="Collares y arneses para gato" /></a>&nbsp;</span></span></strong></span></strong></span></span></span></span></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><span style="font-size: x-small;"><strong><strong><span style="color: #808080; font-weight: bold;"><span style="font-size: x-small;"><span style="color: #808080;"><a style="font-weight: bold; font-size: x-small;" title="Juguetes y ocio para gatos" href="http://www.misterguau.com/index.php/gatos/juguetes-y-ocio.html" target="_self">Juguetes para gato</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Comederos y bebederos gatos" href="http://www.misterguau.com/index.php/gatos/comederos-y-bebederos.html" target="_self">Comederos y bebederos</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Higiene para gatos" href="http://www.misterguau.com/index.php/gatos/higiene.html" target="_self">Higiene para gatos</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a title="Collares y arneses para gatos" href="http://www.misterguau.com/index.php/gatos/arneses-y-collares.html" target="_self">Collares y arneses</a>&nbsp; &nbsp;&nbsp;</span></span></span></strong></strong></span></strong></span></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><span style="font-size: x-small;"><strong><strong><span style="color: #808080; font-weight: bold;"><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></span></strong></strong></span></strong></span></p>
<p><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></strong></span></strong></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><a title="Puertas gateras" href="http://www.misterguau.com/index.php/gatos/puertas-gateras.html" target="_self"></a><a title="Camas e iglus para gatos" href="http://www.misterguau.com/index.php/gatos/camas-cunas-iglus.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Camitas_e_iglus.jpg" alt="Camitas para gatos" /></a>&nbsp; &nbsp; &nbsp;<a title="Puertas gateras para gatos" href="http://www.misterguau.com/index.php/gatos/puertas-gateras.html" target="_self"><img src="http://www.misterguau.com/media//Puertas_gateras_1.jpg" alt="Puertas gateras" /></a>&nbsp; &nbsp; <a title="Educacion felina" href="http://www.misterguau.com/index.php/gatos/educacion-y-comportamiento.html" target="_self"><img src="http://www.misterguau.com/media//Educacion_del_gato_1.jpg" alt="Educacion para los gatos" /></a>&nbsp; <a title="Rascadores para gatos" href="http://www.misterguau.com/index.php/gatos/rascadores.html" target="_self"><img src="http://www.misterguau.com/media//Rascadores.jpg" alt="Rascadores para gato" /></a>&nbsp; &nbsp;&nbsp;</span></span></strong></span></strong></span></span></span></span></p>
<p><span style="color: #33cccc; font-size: x-small;"><strong><strong><strong><span style="color: #808080; font-weight: bold;"><span style="font-size: x-small;"><span style="color: #808080;">&nbsp; &nbsp; &nbsp;<a style="font-weight: bold; font-size: x-small;" title="Camas e iglus para gatos" href="http://www.misterguau.com/index.php/gatos/camas-cunas-iglus.html" target="_self">Camitas e igl&uacute;s</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Puertas gateras" href="http://www.misterguau.com/index.php/gatos/puertas-gateras.html" target="_self">Puertas gateras</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Educacion felina" href="http://www.misterguau.com/index.php/gatos/educacion-y-comportamiento.html" target="_self">Educaci&oacute;n felina</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a title="Rascadores y catnip para gatos" href="http://www.misterguau.com/index.php/gatos/rascadores.html" target="_self">Rascadores</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span></span></strong></strong></strong></span></p>
<p><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></p>
<p><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></p>
<p><span style="font-size: x-small;"><span style="color: #333333;"><span style="color: #808080;"><span style="font-size: xx-small;"><strong><span style="font-size: x-small;"><strong><span style="font-size: x-small;"><span style="color: #808080;"><a title="Libros y manuales sobre gatos" href="http://www.misterguau.com/index.php/gatos/libros-y-manuales.html" target="_self"></a><a title="Transportines para gatos" href="http://www.misterguau.com/index.php/gatos/transportines-y-viajes.html" target="_self"><img style="border-style: initial; border-color: initial;" src="http://www.misterguau.com/media//Transportines.jpg" alt="Transportines para gato" /></a>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span></span></strong></span></strong></span></span></span></span></p>
<p><strong><strong><strong><span style="color: #808080; font-size: xx-small;"><span style="color: #808080; font-weight: bold;"><span style="font-size: x-small;"><span style="color: #808080;">&nbsp; &nbsp; &nbsp;<a style="font-weight: bold; font-size: x-small;" title="Transportines para gatos" href="http://www.misterguau.com/index.php/gatos/transportines-y-viajes.html" target="_self">Transportines</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span></span></span></strong></strong></strong></p>
<p><span style="font-size: x-small;"><span style="color: #808080;"><br /></span></span></p>
<p>&nbsp;</p>
<p><span style="font-weight: bold;">&nbsp; &nbsp;</span></p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<p>
        <div class="category-products">
    <div class="toolbar">
    <div class="pager">
        <p class="amount">
                            Artículos 1 a 200 de 663 totales                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/gatos.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/gatos.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
        <div class="pages">
        <strong>Página:</strong>
        <ol>
        
        
        
                                    <li class="current">1</li>
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html?p=2">2</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html?p=3">3</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html?p=4">4</a></li>
                    

        
        
                    <li>
                <a class="next" href="http://www.misterguau.com/index.php/gatos.html?p=2" title="Siguiente">
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
                    		            <option value="http://www.misterguau.com/index.php/gatos.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/gatos.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/gatos.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/gatos.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
                    </div>
    </div>
    </div>

                <div class="listing-border">
        <ol class="products-list" id="products-list">
	                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-cat-kitten-grasslands-cordero-huevo-y-pescado-100-natural.html" title="Acana Cat&amp;Kitten Grasslands - Cordero, huevo y pescado (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_grasslands_cat.jpg"  alt="Acana Cat&amp;Kitten Grasslands - Cordero, huevo y pescado (100% natural)" title="Acana Cat&amp;Kitten Grasslands - Cordero, huevo y pescado (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-cat-kitten-grasslands-cordero-huevo-y-pescado-100-natural.html" title="Acana Cat&amp;Kitten Grasslands - Cordero, huevo y pescado (100% natural)"><b>Acana Cat&amp;Kitten Grasslands - Cordero, huevo y pescado (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															28,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-cat-kitten-grasslands-cordero-huevo-y-pescado-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5372/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    ACANA Grasslands está cargado de cordero local, huevos enteros, pescado capturado en libertad y pato criado libre de jaulas  – todo entregado fresco cada día. La carne fresca de ACANA refleja la dieta natural de su gato y las inclusions de arenque de New Brusnwick ayudan a promover un estado óptimo. Sin cereales para reducir carbohidratos, ACANA incluye frutas y verduras locales para un suministro rico y natural de fitonutrientes. Formato: 2.27Kg.                    <a href="http://www.misterguau.com/index.php/acana-cat-kitten-grasslands-cordero-huevo-y-pescado-100-natural.html" title="Acana Cat&amp;Kitten Grasslands - Cordero, huevo y pescado (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/acana-cat-kitten-wild-prairie-pollo-huevo-y-pescado-100-natural.html" title="Acana Cat&amp;Kitten Wild Prairie - Pollo, huevo y pescado (100% natural)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/c/acana_wild_prairie_cat.jpg"  alt="Acana Cat&amp;Kitten Wild Prairie - Pollo, huevo y pescado (100% natural)" title="Acana Cat&amp;Kitten Wild Prairie - Pollo, huevo y pescado (100% natural)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/acana-cat-kitten-wild-prairie-pollo-huevo-y-pescado-100-natural.html" title="Acana Cat&amp;Kitten Wild Prairie - Pollo, huevo y pescado (100% natural)"><b>Acana Cat&amp;Kitten Wild Prairie - Pollo, huevo y pescado (100% natural)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/acana-cat-kitten-wild-prairie-pollo-huevo-y-pescado-100-natural.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5371/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Para gatos y gatitos de todas las edades. ACANA Wild Praire incluye una rica variedad de carnes de pollo criado en libertad, huevos enteros de las praderas locales, pescado capturado en libertad en los lagos del norte– todos entregados frescos para nutrir a su gato debidamente. Sin cereales para reducir los tan pocos deseados carbohidratos, ACANA incluye frutas y plantas botánicas como rica fuente de antioxidantes. Formatos: 2.27Kg, 6.8Kg, Pack ECO online 2x6.8Kg                    <a href="http://www.misterguau.com/index.php/acana-cat-kitten-wild-prairie-pollo-huevo-y-pescado-100-natural.html" title="Acana Cat&amp;Kitten Wild Prairie - Pollo, huevo y pescado (100% natural)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-arena-absorbente-multiperformance.html" title="Advance Arena absorbente Multiperformance Super-premium">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_arena_absorbente_multiperformance.jpg"  alt="Advance Arena absorbente Multiperformance Super-premium" title="Advance Arena absorbente Multiperformance Super-premium" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-arena-absorbente-multiperformance.html" title="Advance Arena absorbente Multiperformance Super-premium"><b>Advance Arena absorbente Multiperformance Super-premium</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>17,25&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 13.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-arena-absorbente-multiperformance.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/127/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena sanitaria aglomerante para gatos. Con un alto poder aglomerante y tratamiento anti-olor y anti-bacterias, asegura tierra limpia para nuestro gatito por 2 meses. Contiene una mezcla de Bentonita y Calcio Montmorillorita, que proporciona un alto poder aglomerante. Aroma a pino. Fácil de limpiar. Formato: 6.36Kg                    <a href="http://www.misterguau.com/index.php/advance-arena-absorbente-multiperformance.html" title="Advance Arena absorbente Multiperformance Super-premium">Saber más</a><br><br>
					<span class="required"><strong>19% Dto! Ahorra 3.30&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-adult.html" title="Advance Cat Adult (Pollo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_adult.jpg"  alt="Advance Cat Adult (Pollo)" title="Advance Cat Adult (Pollo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-adult.html" title="Advance Cat Adult (Pollo)"><b>Advance Cat Adult (Pollo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-adult.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/147/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para gatos adultos. Especialmente formulado para ayudar a que su gato esté en excelente condición física, interna y externa. Formatos: 400gr, 1.5Kg, 3Kg, 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-cat-adult.html" title="Advance Cat Adult (Pollo)">Saber más</a><br><br>
					<span class="required"><strong>10% Dto en 3Kg! Ahorra 2.85&euro;! <br><br>22% Dto en 15Kg! Ahorra 20&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-adult-salmon-arroz.html" title="Advance Cat Adult (Salmón&amp;arroz)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_adult_salmon.jpg"  alt="Advance Cat Adult (Salmón&amp;arroz)" title="Advance Cat Adult (Salmón&amp;arroz)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-adult-salmon-arroz.html" title="Advance Cat Adult (Salmón&amp;arroz)"><b>Advance Cat Adult (Salmón&amp;arroz)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-adult-salmon-arroz.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/148/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para gatos adultos. El salmón y arroz son excelentes fuentes de proteínas e hidratos de carbono de gran digestibilidad para una óptima nutrición. Formatos: 400gr, 1.5Kg, 3Kg, 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-cat-adult-salmon-arroz.html" title="Advance Cat Adult (Salmón&amp;arroz)">Saber más</a><br><br>
					<span class="required"><strong>10% Dto en 3Kg! Ahorra 2.85&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-hairball-pavo-arroz.html" title="Advance Cat Hairball (Pavo&amp;arroz)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_hairball.jpg"  alt="Advance Cat Hairball (Pavo&amp;arroz)" title="Advance Cat Hairball (Pavo&amp;arroz)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-hairball-pavo-arroz.html" title="Advance Cat Hairball (Pavo&amp;arroz)"><b>Advance Cat Hairball (Pavo&amp;arroz)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-hairball-pavo-arroz.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/149/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado para gatos adultos que viven principalmente en interior. Con compuestos naturales que ayudan a prevenir y eliminar las bolas de pelo de forma natural. Formatos: 400gr, 1.5Kg                    <a href="http://www.misterguau.com/index.php/advance-cat-hairball-pavo-arroz.html" title="Advance Cat Hairball (Pavo&amp;arroz)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-kitten.html" title="Advance Cat Kitten">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_kitten_1.jpg"  alt="Advance Cat Kitten" title="Advance Cat Kitten" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-kitten.html" title="Advance Cat Kitten"><b>Advance Cat Kitten</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-kitten.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/150/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado para gatitos (de 2 a 12 meses)y hembras gestantes o lactantes. Alto contenido en proteínas y grasas. Optima relación calcio-fósforo. Formatos: 400gr, 1.5Kg, 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-cat-kitten.html" title="Advance Cat Kitten">Saber más</a><br><br>
					<span class="required"><strong>20% Dto en 1.5Kg! Ahorra 3.75&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-young-sterilized.html" title="Advance Cat Kitten Young Sterilized">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/adv_cat_young_sterilized_2.jpg"  alt="Advance Cat Kitten Young Sterilized" title="Advance Cat Kitten Young Sterilized" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-young-sterilized.html" title="Advance Cat Kitten Young Sterilized"><b>Advance Cat Kitten Young Sterilized</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-young-sterilized.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3430/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado formulado especialmente para gatitos desde el momento de su esterilización hasta los 3 años de edad. Rico en pollo y arroz favorece un crecimiento sano, cuida de la salud intestinal y de los riñones, a la vez que controla el indeseable aumento de peso. Formatos: 400gr, 1.5Kg.                     <a href="http://www.misterguau.com/index.php/advance-cat-young-sterilized.html" title="Advance Cat Kitten Young Sterilized">Saber más</a><br><br>
					<span class="required"><strong>20% Dto en 1.5Kg! Ahorra 3.75&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-light.html" title="Advance Cat Light">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_light.jpg"  alt="Advance Cat Light" title="Advance Cat Light" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-light.html" title="Advance Cat Light"><b>Advance Cat Light</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-light.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/151/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado para gatos adultos con sobrepeso o tendencia a la obesidad.  Alto nivel en fibra y proteínas y bajo en calorías. Con  L-Carnitina, Taurina y ácidos grasos Omega 3 y 6. Formato: 400gr.                    <a href="http://www.misterguau.com/index.php/advance-cat-light.html" title="Advance Cat Light">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-senior.html" title="Advance Cat Senior ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_senior_2.jpg"  alt="Advance Cat Senior " title="Advance Cat Senior " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-senior.html" title="Advance Cat Senior "><b>Advance Cat Senior </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-senior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/156/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado formulado especialmente para gatos mayores de 7 años. Los ácidos Grasos Omega 3 y 6: Favorecen una piel sana y un pelo brillante y lustroso. Formatos: 400gr, 1.5Kg                    <a href="http://www.misterguau.com/index.php/advance-cat-senior.html" title="Advance Cat Senior ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-sensitive-pato-arroz.html" title="Advance Cat Sensitive (Pato&amp;arroz)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_sensitive.jpg"  alt="Advance Cat Sensitive (Pato&amp;arroz)" title="Advance Cat Sensitive (Pato&amp;arroz)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-sensitive-pato-arroz.html" title="Advance Cat Sensitive (Pato&amp;arroz)"><b>Advance Cat Sensitive (Pato&amp;arroz)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-sensitive-pato-arroz.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/157/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para gatos adultos con sensibilidad digestiva. Con Inulina, que favorece el crecimiento de la flora intestinal beneficiosa, aumentando la absorción de nutrientes y disminuyendo el mal olor de las heces. Con pato, Taurina y Ácidos Grasos Omega 3 y 6. Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/advance-cat-sensitive-pato-arroz.html" title="Advance Cat Sensitive (Pato&amp;arroz)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-sterilized-pavo.html" title="Advance Cat Sterilized (Pavo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_sterilized.jpg"  alt="Advance Cat Sterilized (Pavo)" title="Advance Cat Sterilized (Pavo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-sterilized-pavo.html" title="Advance Cat Sterilized (Pavo)"><b>Advance Cat Sterilized (Pavo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-sterilized-pavo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/158/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento especialmente indicado para gatos adultos después de la esterilización hasta los 10 años de edad, que incorpora: * Reducción del nivel energético para prevenir el aumento de peso después de la esterilización. Formatos: 400gr , 1.5Kg, 3Kg, 15Kg,  Pack ECO 2x15Kg.                    <a href="http://www.misterguau.com/index.php/advance-cat-sterilized-pavo.html" title="Advance Cat Sterilized (Pavo)">Saber más</a><br><br>
					<span class="required"><strong>7% Dto en 3Kg! Ahorra 2.10&euro;! <br><br>28% Dto en 15Kg! Ahorra 25&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-sterilized-salmon.html" title="Advance Cat Sterilized (Salmón)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_cat_sterilized_salmon_1.jpg"  alt="Advance Cat Sterilized (Salmón)" title="Advance Cat Sterilized (Salmón)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-sterilized-salmon.html" title="Advance Cat Sterilized (Salmón)"><b>Advance Cat Sterilized (Salmón)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-sterilized-salmon.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1255/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Su fórmula contiene salmón como fuente de proteínas y también incluye cebada como carbohidrato y fuente de fibra, con lo que ayuda a tu gato a prevenir la obesidad, a generar un efecto saciante y a mantener la masa muscular. Porque a los gatos también les gusta elegir y variar, ahora tienen dos sabores, el ya conocido a base de pavo y el nuevo producto Advance Cat Sterilized con salmón y cebada. Formatos: 400gr , 1.5Kg, 3Kg                    <a href="http://www.misterguau.com/index.php/advance-cat-sterilized-salmon.html" title="Advance Cat Sterilized (Salmón)">Saber más</a><br><br>
					<span class="required"><strong>12% Dto en 3Kg! Ahorra 4&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-cat-sterilized-senior-10.html" title="Advance Cat Sterilized Senior +10">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_1_115.jpg"  alt="Advance Cat Sterilized Senior +10" title="Advance Cat Sterilized Senior +10" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-cat-sterilized-senior-10.html" title="Advance Cat Sterilized Senior +10"><b>Advance Cat Sterilized Senior +10</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-cat-sterilized-senior-10.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3647/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El pienso Advance Sterilized +10 es la apuesta de Advance para los en edad Senior. Debido a su condición y edad, los gatos esterilizados de mas de 10 años de edad tienen un mayor riesgo de padecer ciertos trastornos de salud: como sobrepeso, enfermedad renal crónica o cálculos urinarios. Advance Sterilized +10 previene y ayuda a reducir los riesgos ofreciéndole la alimentación más sana y adecuada!. Formatos: 400gr, 1.5Kg.                    <a href="http://www.misterguau.com/index.php/advance-cat-sterilized-senior-10.html" title="Advance Cat Sterilized Senior +10">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-feline-vd-obesity-management.html" title="Advance Feline VD Obesity Management">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_feline_obesity_management.jpg"  alt="Advance Feline VD Obesity Management" title="Advance Feline VD Obesity Management" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-feline-vd-obesity-management.html" title="Advance Feline VD Obesity Management"><b>Advance Feline VD Obesity Management</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>18,70&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 14.70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-feline-vd-obesity-management.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/170/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético completo para gatos, para la reducción del exceso de peso y la regulación del metabolismo de los lípidos en caso de hiperlipidemia con bajo contenido energético y bajo contenido de grasas y elevado contenido de ácidos grasos esenciales.  Este producto debe estar prescrito por su veterinario. Formato: 1.5Kg, 8Kg.                    <a href="http://www.misterguau.com/index.php/advance-feline-vd-obesity-management.html" title="Advance Feline VD Obesity Management">Saber más</a><br><br>
					<span class="required"><strong>21% Dto en 1.5Kg! Ahorra 4&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-feline-vd-renal-failure.html" title="Advance Feline VD Renal Failure">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_feline_renal_failure.jpg"  alt="Advance Feline VD Renal Failure" title="Advance Feline VD Renal Failure" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-feline-vd-renal-failure.html" title="Advance Feline VD Renal Failure"><b>Advance Feline VD Renal Failure</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-feline-vd-renal-failure.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/171/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético completo para gatos, formulado con bajo contenido en proteínas de alta calidad, y con bajo contenido en fósforo, como ayuda al tratamiento en casos de insuficiencia renal crónica y con bajo contenido en calcio y vitamina D para la reducción de la formación de cálculos por oxalatos. Este producto debe estar prescrito por su veterinario. Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/advance-feline-vd-renal-failure.html" title="Advance Feline VD Renal Failure">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/advance-feline-vd-urinary.html" title="Advance Feline VD Urinary">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/d/advance_feline_urinary.jpg"  alt="Advance Feline VD Urinary" title="Advance Feline VD Urinary" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/advance-feline-vd-urinary.html" title="Advance Feline VD Urinary"><b>Advance Feline VD Urinary</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/advance-feline-vd-urinary.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/173/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Es un alimento dietético completo para gatos formulado para el tratamiento de la enfermedad de las vías urinarias de los felinos y para la reducción de los cálculos de fosfato inorgánico (estruvita), que acidifica la orina y aporta un nivel bajo de magnesio. Este producto debe estar prescrito por su veterinario. Formato: 1.5Kg, 3Kg, 8Kg                    <a href="http://www.misterguau.com/index.php/advance-feline-vd-urinary.html" title="Advance Feline VD Urinary">Saber más</a><br><br>
					<span class="required"><strong>28% Dto en 1.5Kg! Ahorra 5&euro;! <br><br>34% Dto en 3Kg! Ahorra 11&euro;! <br><br>27% Dto en 8Kg! Ahorra 20&euro;! <br><br>Ahorra mas con el pack promo en oferta!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/alfombra-step-and-go-fm.html" title="Alfombra anti-piedras Step and Go FM">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/l/alfombra_stepn_go_50031905_1.jpg"  alt="Alfombra anti-piedras Step and Go FM" title="Alfombra anti-piedras Step and Go FM" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/alfombra-step-and-go-fm.html" title="Alfombra anti-piedras Step and Go FM"><b>Alfombra anti-piedras Step and Go FM</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															15,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/alfombra-step-and-go-fm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1052/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Esta alfombra colocada en la gatera o en el aseo, retendrá toda la suciedad que nuestro gato pueda tener en las patas tras hacer sus necesidades o sus largos paseos. Quedará sorprendido de la gran cantidad de suciedad que atrapará. Medidas: 30x45cm                    <a href="http://www.misterguau.com/index.php/alfombra-step-and-go-fm.html" title="Alfombra anti-piedras Step and Go FM">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/frontline-combo-gato.html" title="Antiparasitario externo Frontline Combo gato">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/r/frontline_combo_gatos.jpg"  alt="Antiparasitario externo Frontline Combo gato" title="Antiparasitario externo Frontline Combo gato" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/frontline-combo-gato.html" title="Antiparasitario externo Frontline Combo gato"><b>Antiparasitario externo Frontline Combo gato</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/frontline-combo-gato.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/887/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    FRONTLINE® actúa de forma rápida y por contacto, eliminando pulgas, garrapatas y piojos presentes en la piel de su mascota, gracias al poder único de su molécula insecticida/acaricida patentada, el fipronil. FRONTLINE® actúa sobre varios puntos el sistema nervioso de los parásitos (insectos y ácaros), provocando una muerte por hiperexcitación nerviosa. Para gatos adultos. Formatos: 1 pipeta, 3 pipetas, 6 pipetas.                    <a href="http://www.misterguau.com/index.php/frontline-combo-gato.html" title="Antiparasitario externo Frontline Combo gato">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arena-aglomerante-cat-leader-clumping-ultra-compact.html" title="Arena aglomerante Cat Leader Clumping Ultra Compact">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_cat_leader_clumping_5kg.jpg"  alt="Arena aglomerante Cat Leader Clumping Ultra Compact" title="Arena aglomerante Cat Leader Clumping Ultra Compact" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arena-aglomerante-cat-leader-clumping-ultra-compact.html" title="Arena aglomerante Cat Leader Clumping Ultra Compact"><b>Arena aglomerante Cat Leader Clumping Ultra Compact</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arena-aglomerante-cat-leader-clumping-ultra-compact.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5391/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena aglomerante realizada de Saponita, un tipo de arcilla Bentonita premium. Cat Leader Clumping es súper absorbente formando rápidamente aglomeraciones compactas que son fácilmente removibles dejando el resto de la arena fresca y limpia para mucho más tiempo. Absorción avanzada. Producto natural.  Forma una masa compacta rápidamente. Control de olores superior. Formato: 5Kg                    <a href="http://www.misterguau.com/index.php/arena-aglomerante-cat-leader-clumping-ultra-compact.html" title="Arena aglomerante Cat Leader Clumping Ultra Compact">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arena-aglomerante-cat-leader-clumping-ultra-compact-nature-aromatizada.html" title="Arena aglomerante Cat Leader Clumping Ultra Compact Nature (Aromatizada)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_cat_leader_clumping_nature_arome_5kg.jpg"  alt="Arena aglomerante Cat Leader Clumping Ultra Compact Nature (Aromatizada)" title="Arena aglomerante Cat Leader Clumping Ultra Compact Nature (Aromatizada)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arena-aglomerante-cat-leader-clumping-ultra-compact-nature-aromatizada.html" title="Arena aglomerante Cat Leader Clumping Ultra Compact Nature (Aromatizada)"><b>Arena aglomerante Cat Leader Clumping Ultra Compact Nature (Aromatizada)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arena-aglomerante-cat-leader-clumping-ultra-compact-nature-aromatizada.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5392/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena aglomerante realizada de Saponita, un tipo de arcilla Bentonita premium. Cat Leader Clumping es súper absorbente formando rápidamente aglomeraciones compactas que son fácilmente removibles dejando el resto de la arena fresca y limpia para mucho más tiempo. Absorción avanzada. Producto natural.  Forma una masa compacta rápidamente. Control de olores superior. Enriquecido con aroma a Naturaleza salvaje. Formato: 5Kg                    <a href="http://www.misterguau.com/index.php/arena-aglomerante-cat-leader-clumping-ultra-compact-nature-aromatizada.html" title="Arena aglomerante Cat Leader Clumping Ultra Compact Nature (Aromatizada)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arena-aglomerante-imperial-care-baby-powder-talco.html" title="Arena aglomerante Imperial Care Baby Powder (Talco)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_imperial_care_baby_powder_6kg.jpg"  alt="Arena aglomerante Imperial Care Baby Powder (Talco)" title="Arena aglomerante Imperial Care Baby Powder (Talco)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arena-aglomerante-imperial-care-baby-powder-talco.html" title="Arena aglomerante Imperial Care Baby Powder (Talco)"><b>Arena aglomerante Imperial Care Baby Powder (Talco)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arena-aglomerante-imperial-care-baby-powder-talco.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5380/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena Ultra-aglomerante de arcilla natural con saponita (bentonita) para gatos. La Arena Ultra-aglomerante Imperial Care-Baby Powder Aroma (Talco) incorpora un innovador y potente agente antimicrobiano único que elimina el 99,9% de las bacterias (patentado), manteniendo el lecho del gato desinfectado. Garantizada para cumplir con todas las necesidades, salud y bienestar de su gato. Formatos: 6 litros, 10 litros.<br />
                    <a href="http://www.misterguau.com/index.php/arena-aglomerante-imperial-care-baby-powder-talco.html" title="Arena aglomerante Imperial Care Baby Powder (Talco)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arena-aglomerante-tidy-cat-dual-power.html" title="Arena aglomerante Tidy Cat (Dual Power)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_tidy_cats_dual_power.jpg"  alt="Arena aglomerante Tidy Cat (Dual Power)" title="Arena aglomerante Tidy Cat (Dual Power)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arena-aglomerante-tidy-cat-dual-power.html" title="Arena aglomerante Tidy Cat (Dual Power)"><b>Arena aglomerante Tidy Cat (Dual Power)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															14,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arena-aglomerante-tidy-cat-dual-power.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5119/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Lecho higiénico y libre de gérmenes que neutraliza el olor de la orina y las heces. Tecnoogía única y patentada (bi-componente de arcillas). Nueva fórmula Dual power con perlitas de olor lavanda. Grumos compactos que aportan mayor higiene y son más fáciles de retirar. Evita la formación de polvo en un 99%. Fórmula mejorada. Arena ultra compacta + perlas de sílice lilas. Formato: 6.35Kg                    <a href="http://www.misterguau.com/index.php/arena-aglomerante-tidy-cat-dual-power.html" title="Arena aglomerante Tidy Cat (Dual Power)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arena-de-gravilla-lloc-net.html" title="Arena de gravilla Lloc-Net">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/l/l/lloc_net_5kg.jpg"  alt="Arena de gravilla Lloc-Net" title="Arena de gravilla Lloc-Net" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arena-de-gravilla-lloc-net.html" title="Arena de gravilla Lloc-Net"><b>Arena de gravilla Lloc-Net</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arena-de-gravilla-lloc-net.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4267/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena básica de gravilla para los areneros WC de nuestro gato. Formatos: 5Kg                    <a href="http://www.misterguau.com/index.php/arena-de-gravilla-lloc-net.html" title="Arena de gravilla Lloc-Net">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arena-de-silice-toilette-cat.html" title="Arena de sílice Toilette Cat ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/o/toilette_cat_1.jpg"  alt="Arena de sílice Toilette Cat " title="Arena de sílice Toilette Cat " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arena-de-silice-toilette-cat.html" title="Arena de sílice Toilette Cat "><b>Arena de sílice Toilette Cat </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arena-de-silice-toilette-cat.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1048/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Perlas irregulares de sílice absorbentes con partículas antibacterias. Higiene total. Elimina los olores y atrapa el orín. Durabilidad de 30 días para un solo saco. Formato: 7.5Kg.                    <a href="http://www.misterguau.com/index.php/arena-de-silice-toilette-cat.html" title="Arena de sílice Toilette Cat ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/arena-imperial-care-silver-iones-antibacteriana.html" title="Arena Imperial Care Silver Iones (Antibacteriana)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/arena_imperial_care_silver_lons_6kg.jpg"  alt="Arena Imperial Care Silver Iones (Antibacteriana)" title="Arena Imperial Care Silver Iones (Antibacteriana)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/arena-imperial-care-silver-iones-antibacteriana.html" title="Arena Imperial Care Silver Iones (Antibacteriana)"><b>Arena Imperial Care Silver Iones (Antibacteriana)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/arena-imperial-care-silver-iones-antibacteriana.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5379/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena Ultra-aglomerante de arcilla natural con saponita (bentonita) para gatos. Con forma revolucionaria e iones de plata que inhibe el crecimiento de bacterias en la arena (99%). Los iones de plata activos con antimicrobianos y se sienten atraídos por las bacterias que son responsables del mal olor en la arena para gatos usada. Garantizada para cumplir con todas las necesidades, salud y bienestar de su gato. Formatos: 6 litros, 10 litros.<br />
                    <a href="http://www.misterguau.com/index.php/arena-imperial-care-silver-iones-antibacteriana.html" title="Arena Imperial Care Silver Iones (Antibacteriana)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/artero-champu-para-gato.html" title="Artero Champú para gato">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/a/r/art_champu_gatos_250ml.jpg"  alt="Artero Champú para gato" title="Artero Champú para gato" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/artero-champu-para-gato.html" title="Artero Champú para gato"><b>Artero Champú para gato</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/artero-champu-para-gato.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3218/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú para gato que respeta al máximo la piel y el pelo. El complejo vitamínico de su fórmula nuetre el pelo, al que aporta bri llo, volumen y una hidratación extrema en el manto dejándolo lleno de vitalidad propio de un pelo sano. Para todo tipo de pelo. Resultados extraordinarios para el cuidado y confort del gato. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/artero-champu-para-gato.html" title="Artero Champú para gato">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bandeja-de-aseo-fenix.html" title="Bandeja de aseo Fénix">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/bandeja_fenix_58x39x17cm_ga10033.jpg"  alt="Bandeja de aseo Fénix" title="Bandeja de aseo Fénix" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bandeja-de-aseo-fenix.html" title="Bandeja de aseo Fénix"><b>Bandeja de aseo Fénix</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															11,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bandeja-de-aseo-fenix.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4994/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bandeja de aseo con marco con uno de los lados mas altos para evitar las salpicaduras y expulsión de piedrecitas al exterior. En modernos colores marrón, pistacho o rosa. Fácil de limpiar y muy duradera. Medidas: 58x39x17cm                    <a href="http://www.misterguau.com/index.php/bandeja-de-aseo-fenix.html" title="Bandeja de aseo Fénix">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bandeja-nova-con-marco-large.html" title="Bandeja Nova con marco Large">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/bandeja_nova_grande_con_marco_56x39x21cm305i-ip-ga10026_1.jpg"  alt="Bandeja Nova con marco Large" title="Bandeja Nova con marco Large" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bandeja-nova-con-marco-large.html" title="Bandeja Nova con marco Large"><b>Bandeja Nova con marco Large</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bandeja-nova-con-marco-large.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2811/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bandeja de aseo para gato con marco para evitar que salgan tantas piedrecitas de gravilla o sílice al suelo. En plástico rígido muy resistente y fácil de limpiar. Disponible en 3 colores. Medidas: 56x39x21cm                    <a href="http://www.misterguau.com/index.php/bandeja-nova-con-marco-large.html" title="Bandeja Nova con marco Large">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bandeja-nova-con-marco-medium.html" title="Bandeja Nova con marco Medium">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/a/bandeja_nova_grande_con_marco_56x39x21cm305i-ip-ga10026.jpg"  alt="Bandeja Nova con marco Medium" title="Bandeja Nova con marco Medium" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bandeja-nova-con-marco-medium.html" title="Bandeja Nova con marco Medium"><b>Bandeja Nova con marco Medium</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bandeja-nova-con-marco-medium.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2814/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bandeja de aseo para gato con marco para evitar que salgan tantas piedrecitas de gravilla o sílice al suelo. En plástico rígido muy resistente y fácil de limpiar. Disponible en 3 colores. Medidas: 46x35x20cm                    <a href="http://www.misterguau.com/index.php/bandeja-nova-con-marco-medium.html" title="Bandeja Nova con marco Medium">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-cat-yum-pate.html" title="Bocaditos Cat Yum (Paté)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_cat_yums_pate_40gr_28822.jpg"  alt="Bocaditos Cat Yum (Paté)" title="Bocaditos Cat Yum (Paté)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-cat-yum-pate.html" title="Bocaditos Cat Yum (Paté)"><b>Bocaditos Cat Yum (Paté)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-cat-yum-pate.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5203/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mhmmm ... delicioso! Yums Gato con paté a base carne y paté mezclados en un proceso único - con los mejores ingredientes y de acuerdo a la receta sin azúcar. Cada bocado está relleno de paté delicioso y está cocinado suavemente en el horno. Son deliciosos y jugosos al morder. Ideal para gatos con problemas de masticación por su textura blandita. Formato: 40gr envase resellable.                    <a href="http://www.misterguau.com/index.php/bocaditos-cat-yum-pate.html" title="Bocaditos Cat Yum (Paté)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-cat-yum-queso.html" title="Bocaditos Cat Yum (Queso)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_cat_yums_queso_40gr_28821.jpg"  alt="Bocaditos Cat Yum (Queso)" title="Bocaditos Cat Yum (Queso)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-cat-yum-queso.html" title="Bocaditos Cat Yum (Queso)"><b>Bocaditos Cat Yum (Queso)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-cat-yum-queso.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5202/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mhmmm ... delicioso! Yums Gato con queso a base carne y queso mezclados en un proceso único - con los mejores ingredientes y de acuerdo a la receta sin azúcar. Cada bocado está relleno de queso delicioso y está cocinado suavemente en el horno. Son deliciosos y jugosos al morder. Ideal para gatos con problemas de masticación por su textura blandita. Formato: 40gr envase resellable.                    <a href="http://www.misterguau.com/index.php/bocaditos-cat-yum-queso.html" title="Bocaditos Cat Yum (Queso)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-cat-yum-salmon.html" title="Bocaditos Cat Yum (Salmón)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/k/vk_cat_yums_salmon_40gr_28823.jpg"  alt="Bocaditos Cat Yum (Salmón)" title="Bocaditos Cat Yum (Salmón)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-cat-yum-salmon.html" title="Bocaditos Cat Yum (Salmón)"><b>Bocaditos Cat Yum (Salmón)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-cat-yum-salmon.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5204/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Mhmmm ... delicioso! Yums Gato con salmón a base carne y salmón mezclados en un proceso único - con los mejores ingredientes y de acuerdo a la receta sin azúcar. Cada bocado está relleno de delicioso salmón y está cocinado suavemente en el horno. Son deliciosos y jugosos al morder. Ideal para gatos con problemas de masticación por su textura blandita. Formato: 40gr envase resellable.                    <a href="http://www.misterguau.com/index.php/bocaditos-cat-yum-salmon.html" title="Bocaditos Cat Yum (Salmón)">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-malta-y-ternera.html" title="Bocaditos para gato MiGat (malta y ternera)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bocaditos_sabor_buey_y_malta_80gr_038940.jpg"  alt="Bocaditos para gato MiGat (malta y ternera)" title="Bocaditos para gato MiGat (malta y ternera)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-malta-y-ternera.html" title="Bocaditos para gato MiGat (malta y ternera)"><b>Bocaditos para gato MiGat (malta y ternera)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-para-gato-migat-malta-y-ternera.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3858/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snack en forma de almohadilla muy apropiado para premiar a nuestro gato por su compañía y docilidad al tiempo que le proporcionamos un alimento rico en proteínas. Relleno con malta que ayuda a la eliminación del pelo ingerido y deliciosa ternera. Beneficioso para la piel y el pelo. Gratificantemente deliciosas y sabrosas. Solo 4 calorías por unidad. Tamaño de las almohadillas pequeño: 1.3cm x 0.8cm. Formato: 80gr                    <a href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-malta-y-ternera.html" title="Bocaditos para gato MiGat (malta y ternera)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-malta-y-yogurt.html" title="Bocaditos para gato MiGat (malta y yogurt)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bocaditos_sabor_malta_y_yogurt_80gr_038919.jpg"  alt="Bocaditos para gato MiGat (malta y yogurt)" title="Bocaditos para gato MiGat (malta y yogurt)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-malta-y-yogurt.html" title="Bocaditos para gato MiGat (malta y yogurt)"><b>Bocaditos para gato MiGat (malta y yogurt)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-para-gato-migat-malta-y-yogurt.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4796/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snack en forma de almohadilla muy apropiado para premiar a nuestro gato por su compañía y docilidad al tiempo que le proporcionamos un alimento rico en proteínas. Relleno con malta que ayuda a la eliminación del pelo ingerido y delicioso sabor a yogurt. Beneficioso para la piel y el pelo. Gratificantemente deliciosas y sabrosas. Solo 4 calorías por unidad. Tamaño de las almohadillas pequeño: 1.3cm x 0.8cm. Formato: 80gr                    <a href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-malta-y-yogurt.html" title="Bocaditos para gato MiGat (malta y yogurt)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-pollo-y-queso.html" title="Bocaditos para gato MiGat (pollo y queso)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bocaditos_sabor_pollo_y_queso_80gr_039978.jpg"  alt="Bocaditos para gato MiGat (pollo y queso)" title="Bocaditos para gato MiGat (pollo y queso)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-pollo-y-queso.html" title="Bocaditos para gato MiGat (pollo y queso)"><b>Bocaditos para gato MiGat (pollo y queso)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bocaditos-para-gato-migat-pollo-y-queso.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4680/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snack en forma de almohadilla muy apropiado para premiar a nuestro gato por su compañía y docilidad al tiempo que le proporcionamos un alimento rico en proteínas. Beneficioso para la piel y el pelo. Gratificantemente deliciosas y sabrosas. Solo 4 calorías por unidad. Tamaño de las almohadillas pequeño: 1.3cm x 0.8cm. Formato: 80gr                    <a href="http://www.misterguau.com/index.php/bocaditos-para-gato-migat-pollo-y-queso.html" title="Bocaditos para gato MiGat (pollo y queso)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bola-de-plastico-surtida.html" title="Bola de plástico surtida">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolas_de_plastico_-_tubo_503894.jpg"  alt="Bola de plástico surtida" title="Bola de plástico surtida" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bola-de-plastico-surtida.html" title="Bola de plástico surtida"><b>Bola de plástico surtida</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>1,30&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 0.78&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bola-de-plastico-surtida.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3820/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Pelota de plástico de formas geométricas, con catnip para ser mas atractiva para nuestro gato. Modelos y colores surtido. Medidas: Ø4cm                    <a href="http://www.misterguau.com/index.php/bola-de-plastico-surtida.html" title="Bola de plástico surtida">Saber más</a><br><br>
					<span class="required"><strong>40% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-axis.html" title="Bolsas para aseo WC Axis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_higienica_gatos_5074.jpg"  alt="Bolsas para aseo WC Axis" title="Bolsas para aseo WC Axis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-axis.html" title="Bolsas para aseo WC Axis"><b>Bolsas para aseo WC Axis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-para-aseo-wc-axis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3783/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    10 bolsas para remover fácilmente toda la arena de nuestro WC o gatera. De este modo toda la bandeja queda limpia sin filtracines de orin que puedan quedar adherhidos al plástico. Adaptarse a todo tipo de bandejas y gateras. Medidas: 33x53 cm - Contiene 10 bolsas                    <a href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-axis.html" title="Bolsas para aseo WC Axis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-con-olor-a-vainilla.html" title="Bolsas para aseo WC con olor a vainilla">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_bandeja_gato_con_olor_10un_30x50_501038.jpg"  alt="Bolsas para aseo WC con olor a vainilla" title="Bolsas para aseo WC con olor a vainilla" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-con-olor-a-vainilla.html" title="Bolsas para aseo WC con olor a vainilla"><b>Bolsas para aseo WC con olor a vainilla</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-para-aseo-wc-con-olor-a-vainilla.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3837/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    10 bolsas para remover fácilmente toda la arena de nuestro WC o gatera. Con olor a vainilla y un tamaño suficiente para adaptarse a todo tipo de bandejas y gateras. Medidas: 30x50 cm - contiene 10 bolsas                    <a href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-con-olor-a-vainilla.html" title="Bolsas para aseo WC con olor a vainilla">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-maxi.html" title="Bolsas para aseo WC Maxi">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsa_bandeja_gato_maxi_10un_501040_53x40x45.jpg"  alt="Bolsas para aseo WC Maxi" title="Bolsas para aseo WC Maxi" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-maxi.html" title="Bolsas para aseo WC Maxi"><b>Bolsas para aseo WC Maxi</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-para-aseo-wc-maxi.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3838/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    10 bolsas para remover fácilmente toda la arena de nuestro WC o gatera. Ayuda a que el orín de nuestro gato no filtre en el plástico, haciendo que la gatera no huela mal. De tamaño maxi para gateras grandes. Medidas: 40x50 cm - contiene 10 bolsas                    <a href="http://www.misterguau.com/index.php/bolsas-para-aseo-wc-maxi.html" title="Bolsas para aseo WC Maxi">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/bolsas-universales-con-asa-10-u.html" title="Bolsas universales con asa (10 u.)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/o/bolsas_para_gateras_universal_10ud_c6020786.jpg"  alt="Bolsas universales con asa (10 u.)" title="Bolsas universales con asa (10 u.)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/bolsas-universales-con-asa-10-u.html" title="Bolsas universales con asa (10 u.)"><b>Bolsas universales con asa (10 u.)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>9,30&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 7.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/bolsas-universales-con-asa-10-u.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4181/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bolsas universales para todo tipo de gateras de gato. Poniéndolas en la case nos permitirán retirar limpiamente toda la arena de la gatera de un solo movimiento. Con prácticas asas para poder cerrarla y tirarla directamente a el contenedor. Contiene 10 bolsas. Tamaño bolsa: 50*40cm                    <a href="http://www.misterguau.com/index.php/bolsas-universales-con-asa-10-u.html" title="Bolsas universales con asa (10 u.)">Saber más</a><br><br>
					<span class="required"><strong>15%de Dto! Ahorra 1.35&euro;! <br><br></strong></span>

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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-hairball.html" title="Brekkies Delissimo Cat Snack Hairball ">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_cat_snack_hairball_3.jpg"  alt="Brekkies Delissimo Cat Snack Hairball " title="Brekkies Delissimo Cat Snack Hairball " /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-hairball.html" title="Brekkies Delissimo Cat Snack Hairball "><b>Brekkies Delissimo Cat Snack Hairball </b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-hairball.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2018/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La vida sedentaria en los gatos favorece la aparición de bolas de pelo. Cuando el gato se lame, ingiere las bolas de pelo y éstas dificultan su digestión. Gracias a su aporte especial de fibras, Brekkies Excel Delisimo Control de bolas de pelo ayuda a reducir la formación de bolas de pelo y facilita la digestión de tu gato. Deliciosos snacks con tierno relleno con sabor a hígado. Formato: 75gr                    <a href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-hairball.html" title="Brekkies Delissimo Cat Snack Hairball ">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-atun.html" title="Brekkies Delissimo Cat Snack Omega 3">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_cat_snack_tuna_5.jpg"  alt="Brekkies Delissimo Cat Snack Omega 3" title="Brekkies Delissimo Cat Snack Omega 3" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-atun.html" title="Brekkies Delissimo Cat Snack Omega 3"><b>Brekkies Delissimo Cat Snack Omega 3</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-atun.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2020/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snack rico en pescado con delicioso y tierno relleno de atún con Omega 3 y Omega 6. Los gatos no podrán resistirse a probarlo, y ¡les encantará su sabor y textura! Cómodo envase conservador para que se mantengan siempre frescos. Formato: 75gr                    <a href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-atun.html" title="Brekkies Delissimo Cat Snack Omega 3">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-sterilized.html" title="Brekkies Delissimo Cat Snack Sterilized">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_cat_snack_sterilized_3.jpg"  alt="Brekkies Delissimo Cat Snack Sterilized" title="Brekkies Delissimo Cat Snack Sterilized" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-sterilized.html" title="Brekkies Delissimo Cat Snack Sterilized"><b>Brekkies Delissimo Cat Snack Sterilized</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-sterilized.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2019/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Los gatos esterilizados tienen tendencia al sobrepeso y a tener problemas urinarios. Brekkies excel Delissimo Gatos Esterilizados contiene tan solo 2 Kcal/u y fibras con efecto saciante para ayudar a mantener el peso óptimo de tu gato sin que renuncie al mejor sabor. Deliciosos snacks con tierno relleno con sabor a jamón. Formato: 75gr                    <a href="http://www.misterguau.com/index.php/brekkies-delissimo-cat-snack-sterilized.html" title="Brekkies Delissimo Cat Snack Sterilized">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-cat-stick-pollo.html" title="Brekkies Excel Cat Stick pollo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_cat_deli-stick_chicken_3.jpg"  alt="Brekkies Excel Cat Stick pollo" title="Brekkies Excel Cat Stick pollo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-cat-stick-pollo.html" title="Brekkies Excel Cat Stick pollo"><b>Brekkies Excel Cat Stick pollo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-cat-stick-pollo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3308/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Irresistibles Sticks con Pollo e Hígado. Su innovador envase individual permite mantener en alimento siempre fresco y apunto para su gato. Reforzado con Vitamina A, D3, E y taurina. Formato: 15gr                    <a href="http://www.misterguau.com/index.php/brekkies-excel-cat-stick-pollo.html" title="Brekkies Excel Cat Stick pollo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-buey-y-cordero.html" title="Brekkies Excel Cat Tarrina buey y cordero">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_excel_cat_tarrina_buey-cordero_2.jpg"  alt="Brekkies Excel Cat Tarrina buey y cordero" title="Brekkies Excel Cat Tarrina buey y cordero" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-buey-y-cordero.html" title="Brekkies Excel Cat Tarrina buey y cordero"><b>Brekkies Excel Cat Tarrina buey y cordero</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-tarrina-buey-y-cordero.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2078/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Estas tarrinas son un alimento completo que, a través de sus texturas de paté y de sus trocitos de carnes naturales, permiten que tu gato pueda disfrutar de todo el sabor del buey y el cordero. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-buey-y-cordero.html" title="Brekkies Excel Cat Tarrina buey y cordero">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-pollo-y-pavo.html" title="Brekkies Excel Cat Tarrina pollo y pavo">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_excel_cat_tarrina_pavo-pollo_2.jpg"  alt="Brekkies Excel Cat Tarrina pollo y pavo" title="Brekkies Excel Cat Tarrina pollo y pavo" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-pollo-y-pavo.html" title="Brekkies Excel Cat Tarrina pollo y pavo"><b>Brekkies Excel Cat Tarrina pollo y pavo</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-tarrina-pollo-y-pavo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2080/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Estas tarrinas son un alimento completo que, a través de sus texturas de paté y de sus trocitos de carnes naturales, permiten que tu gato pueda disfrutar de todo el sabor del pollo y el pavo. Formato: 100gr                    <a href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-pollo-y-pavo.html" title="Brekkies Excel Cat Tarrina pollo y pavo">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-salmon-y-atun.html" title="Brekkies Excel Cat Tarrina salmón y atún">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brekkies_excel_cat_tarrina_salmon-atun_2.jpg"  alt="Brekkies Excel Cat Tarrina salmón y atún" title="Brekkies Excel Cat Tarrina salmón y atún" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-salmon-y-atun.html" title="Brekkies Excel Cat Tarrina salmón y atún"><b>Brekkies Excel Cat Tarrina salmón y atún</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															0,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-tarrina-salmon-y-atun.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2079/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Estas tarrinas son un alimento completo que, a través de sus texturas de paté y de sus trocitos de carnes naturales, permiten que tu gato pueda disfrutar de todo el sabor del salmón y el atún.Formato: 100gr                    <a href="http://www.misterguau.com/index.php/brekkies-excel-tarrina-salmon-y-atun.html" title="Brekkies Excel Cat Tarrina salmón y atún">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-feline-delice-relleno-de-jamon.html" title="Brekkies Excel Feline Delice (Jamón)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_excel_cat_delice_carne_1.jpg"  alt="Brekkies Excel Feline Delice (Jamón)" title="Brekkies Excel Feline Delice (Jamón)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-feline-delice-relleno-de-jamon.html" title="Brekkies Excel Feline Delice (Jamón)"><b>Brekkies Excel Feline Delice (Jamón)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-feline-delice-relleno-de-jamon.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3157/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Tu gato disfruta con aquellos alimentos que le sorprenden por su sabor y su textura. Las exquisitas y variadas croquetas de Delice, con pollo y codorniz, combinan un exterior crujiente y un interior más cremoso de jamón que multiplica el placer del gato. Cada mordisco se convertirá en una deliciosa y sorprendente experiencia para tu gato. Formato: 1.5Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-feline-delice-relleno-de-jamon.html" title="Brekkies Excel Feline Delice (Jamón)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-feline-esterilizados.html" title="Brekkies Excel Feline Esterilizados">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_excell_cat_sterilised.jpg"  alt="Brekkies Excel Feline Esterilizados" title="Brekkies Excel Feline Esterilizados" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-feline-esterilizados.html" title="Brekkies Excel Feline Esterilizados"><b>Brekkies Excel Feline Esterilizados</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-feline-esterilizados.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4129/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Con Brekkies excel Gatos esterilizados ayudas a mantener a tu gato en perfecta forma física de la forma más sabrosa. Contiene un 25% menos de materia grasa* y un 50% más de fibra*, para ayudar a mantener el peso óptimo de tu gato. El justo equilibrio de nutrientes ayuda a mantener la salud de su tracto urinario. Además, incorpora cereales integrales que ayudan a controlar su apetito y a mejorar su salud intestinal. Formato: 1.5Kg, 3Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-feline-esterilizados.html" title="Brekkies Excel Feline Esterilizados">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-complet-control-bolas-de-pelo.html" title="Brekkies Excel Feline Hairball">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_cat_complet_hairball_2.jpg"  alt="Brekkies Excel Feline Hairball" title="Brekkies Excel Feline Hairball" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-complet-control-bolas-de-pelo.html" title="Brekkies Excel Feline Hairball"><b>Brekkies Excel Feline Hairball</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-complet-control-bolas-de-pelo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3153/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    La vida sedentaria en los gatos favorece la aparición de bolas de pelo. Cuando el gato se lame, ingiere las bolas de pelo y éstas dificultan su digestión. Para evitarlo y gracias a su aporte especial de fibra, ayuda a reducir la formación de bolas de pelo y facilita la digestión de tu gato. Una nueva receta sabrosa y equilibrada con la fibra justa y con un aporte adicional de Malta en el interior de la partícula rellena, que ayuda a reducir la formación de bolas de pelo. Formato: 1.5Kg, 3Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-complet-control-bolas-de-pelo.html" title="Brekkies Excel Feline Hairball">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-feline-junior.html" title="Brekkies Excel Feline Junior">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_excel_cat_special_jun_2.jpg"  alt="Brekkies Excel Feline Junior" title="Brekkies Excel Feline Junior" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-feline-junior.html" title="Brekkies Excel Feline Junior"><b>Brekkies Excel Feline Junior</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-feline-junior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3156/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Los primeros meses de vida de un gatito son esenciales, pues es entonces cuando desarrollan las partes más importantes de su organismo. Nuestros veterinarios han elaborado una receta rica en proteínas, para asegurar el correcto desarrollo de tu gatito. Además, incorpora deliciosas croquetas con Yogur, que aportan un extra de sabor y de calcio a cada mordisco. Con Brekkies excel Junior ayudarás a tu gatito a crecer sano y feliz. Formato: 1.5Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-feline-junior.html" title="Brekkies Excel Feline Junior">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/brekkies-excel-feline-mix-salmon.html" title="Brekkies Excel Feline Mix Salmón">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/b/r/brk_excel_cat_mix_pescado_2.jpg"  alt="Brekkies Excel Feline Mix Salmón" title="Brekkies Excel Feline Mix Salmón" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/brekkies-excel-feline-mix-salmon.html" title="Brekkies Excel Feline Mix Salmón"><b>Brekkies Excel Feline Mix Salmón</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/brekkies-excel-feline-mix-salmon.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3154/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Sabrosa receta elaborada con una irresistible combinación de salmón, atún y vegetales. Sus variadas croquetas están recubiertas con una suave salsa de pescado que hace de Brekkies excel un sabroso alimento incluso para los gatos más exigentes. Formatos: 1.5Kg, 4Kg.                    <a href="http://www.misterguau.com/index.php/brekkies-excel-feline-mix-salmon.html" title="Brekkies Excel Feline Mix Salmón">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/calmex-para-gatos-suplemento-tranquilizante.html" title="Calmex para gatos (Suplemento tranquilizante)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/calmex_cat_60ml.jpg"  alt="Calmex para gatos (Suplemento tranquilizante)" title="Calmex para gatos (Suplemento tranquilizante)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/calmex-para-gatos-suplemento-tranquilizante.html" title="Calmex para gatos (Suplemento tranquilizante)"><b>Calmex para gatos (Suplemento tranquilizante)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/calmex-para-gatos-suplemento-tranquilizante.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4862/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Contiene una mezcla de aminoácidos, Piper Methysticum y vitaminas del complejo B que permite la relajación en gatos que están experimentando episodios de ansiedad o nerviosismo debido a situaciones de estrés. Su rápida acción permite el óptimo manejo de animales que sufren fobia a los ruidos (petardos, obras, etc), ansiedad por separación o fobias situacionales en viajes, visitas al veterinario, etc. Gran palatabilidad. Formato: 60 ml.                    <a href="http://www.misterguau.com/index.php/calmex-para-gatos-suplemento-tranquilizante.html" title="Calmex para gatos (Suplemento tranquilizante)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/carda-auto-limpiable-topnature-small.html" title="Carda auto-limpiable Topnature (Pequeña)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_44.jpg"  alt="Carda auto-limpiable Topnature (Pequeña)" title="Carda auto-limpiable Topnature (Pequeña)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/carda-auto-limpiable-topnature-small.html" title="Carda auto-limpiable Topnature (Pequeña)"><b>Carda auto-limpiable Topnature (Pequeña)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>9,50&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 7.10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/carda-auto-limpiable-topnature-small.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4845/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Carda con púas retráctiles ideal para desenredar y alisar los pelos largos y rizados de nuestra mascota. La ventaja respecto a las cardas normales es que se adaptan mejor a la anatomía de nuestro perro facilitando su limpieza. De tamaño pequeño, Ideal para perros pequeños, cachorros y también para gatos.                    <a href="http://www.misterguau.com/index.php/carda-auto-limpiable-topnature-small.html" title="Carda auto-limpiable Topnature (Pequeña)">Saber más</a><br><br>
					<span class="required"><strong>25% de Dto! Ahorra 2.40&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/carda-de-goma-topnature-mediana.html" title="Carda de goma Topnature (Mediana)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_carda_goma_mediana_65951.jpg"  alt="Carda de goma Topnature (Mediana)" title="Carda de goma Topnature (Mediana)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/carda-de-goma-topnature-mediana.html" title="Carda de goma Topnature (Mediana)"><b>Carda de goma Topnature (Mediana)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>8,45&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/carda-de-goma-topnature-mediana.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4848/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Carda con púas ideal para desenredar y alisar los pelos largos y rizados de nuestra mascota. También útil para eliminar pequeños residuos que se hayan podido pegar al pelo de nuestra mascota. Práctico y ergonómico. Se adapta mejor a la anatomía de nuestro perro o gato facilitando su limpieza. De tamaño mediano, ideal para gatos grandes o perros medianos. Medidas: M (9cm)                    <a href="http://www.misterguau.com/index.php/carda-de-goma-topnature-mediana.html" title="Carda de goma Topnature (Mediana)">Saber más</a><br><br>
					<span class="required"><strong>25% de Dto! Ahorra 2.15&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/carda-de-goma-topnature-peque-a.html" title="Carda de goma Topnature (Pequeña)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_45.jpg"  alt="Carda de goma Topnature (Pequeña)" title="Carda de goma Topnature (Pequeña)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/carda-de-goma-topnature-peque-a.html" title="Carda de goma Topnature (Pequeña)"><b>Carda de goma Topnature (Pequeña)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 5.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/carda-de-goma-topnature-peque-a.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4847/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Carda con púas ideal para desenredar y alisar los pelos largos y rizados de nuestra mascota. También útil para eliminar pequeños residuos que se hayan podido pegar al pelo de nuestra mascota. Práctico y ergonómico. Se adapta mejor a la anatomía de nuestro perro facilitando su limpieza. De tamaño pequeño, ideal para gatos, cachorros o perros pequeños. Medidas: S (6.5cm)                    <a href="http://www.misterguau.com/index.php/carda-de-goma-topnature-peque-a.html" title="Carda de goma Topnature (Pequeña)">Saber más</a><br><br>
					<span class="required"><strong>25% de Dto! Ahorra 2&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/carda-desenredante-para-gato-kl-2-medidas.html" title="Carda desenredante para gato KL (2 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/carda_gato_pq_1030269.jpg"  alt="Carda desenredante para gato KL (2 medidas)" title="Carda desenredante para gato KL (2 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/carda-desenredante-para-gato-kl-2-medidas.html" title="Carda desenredante para gato KL (2 medidas)"><b>Carda desenredante para gato KL (2 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/carda-desenredante-para-gato-kl-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4782/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Carda para eliminar suavemente el polvo, suciedad, pelos sueltos y lanilla de nuestro gato. Especialmente indicado en periodos de muda. Con forma ergonómica con agarre suave y antideslizante, diseñada por Karlie Flamingo. Medidas: S (17.5cm * 7cm - 69 gramos) - M (17.5cm - 10cm - 77 gramos)                    <a href="http://www.misterguau.com/index.php/carda-desenredante-para-gato-kl-2-medidas.html" title="Carda desenredante para gato KL (2 medidas)">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/carda-doble-mudadora-topnature-pelo-corto.html" title="Carda doble mudadora Topnature (Pelo corto)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_mudador_combi_pelo_corto_13-63_65958.jpg"  alt="Carda doble mudadora Topnature (Pelo corto)" title="Carda doble mudadora Topnature (Pelo corto)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/carda-doble-mudadora-topnature-pelo-corto.html" title="Carda doble mudadora Topnature (Pelo corto)"><b>Carda doble mudadora Topnature (Pelo corto)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>25,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 19.45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/carda-doble-mudadora-topnature-pelo-corto.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3307/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Carda doble uso que reduce la muda en hasta un 90% atrapando el subpelo de forma rápida y sencilla sin cortar ni dañar el pelo de nuestra mascota. Especialmente diseñada para perros de pelo corto. Activa los aceites naturales de su mascota dando como resultado una piel y un pelaje brillante. Las púas retráctiles y giratorias del rastrillo minimizan los tirones e irritaciones de la piel. Medidas: 13*6.3cm                    <a href="http://www.misterguau.com/index.php/carda-doble-mudadora-topnature-pelo-corto.html" title="Carda doble mudadora Topnature (Pelo corto)">Saber más</a><br><br>
					<span class="required"><strong>25% de Dto! Ahorra 6.50&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/carda-doble-mudadora-topnature-pelo-largo.html" title="Carda doble mudadora Topnature (Pelo largo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/t/n/tn_mudador_combi_pelo_largo_13-58_65957.jpg"  alt="Carda doble mudadora Topnature (Pelo largo)" title="Carda doble mudadora Topnature (Pelo largo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/carda-doble-mudadora-topnature-pelo-largo.html" title="Carda doble mudadora Topnature (Pelo largo)"><b>Carda doble mudadora Topnature (Pelo largo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>27,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 20.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/carda-doble-mudadora-topnature-pelo-largo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4448/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Carda doble uso que reduce la muda en hasta un 90% atrapando el subpelo de forma rápida y sencilla sin cortar ni dañar el pelo de nuestra mascota. Especialmente diseñada para perros de pelo largo. Activa los aceites naturales de su mascota dando como resultado una piel y un pelaje brillante. Las púas retráctiles y giratorias del rastrillo minimizan los tirones e irritaciones de la piel. Medidas: 13*5.8cm                     <a href="http://www.misterguau.com/index.php/carda-doble-mudadora-topnature-pelo-largo.html" title="Carda doble mudadora Topnature (Pelo largo)">Saber más</a><br><br>
					<span class="required"><strong>25% de Dto! Ahorra 7&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cascabel-multicolor-para-collares.html" title="Cascabel multicolor para collares">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/cascabel_multicolor_15054.jpg"  alt="Cascabel multicolor para collares" title="Cascabel multicolor para collares" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cascabel-multicolor-para-collares.html" title="Cascabel multicolor para collares"><b>Cascabel multicolor para collares</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>1,30&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 0.78&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cascabel-multicolor-para-collares.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3809/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cascabel de divertidos colores pintado a mano para el collar de nuestro gato. Argolla incluida. Colores surtidos.                    <a href="http://www.misterguau.com/index.php/cascabel-multicolor-para-collares.html" title="Cascabel multicolor para collares">Saber más</a><br><br>
					<span class="required"><strong>40% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/caseta-de-aseo-flip-cosy-corner.html" title="Caseta de aseo Flip Cosy Corner">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/caseta_aseo_cosy_corner_501068.jpg"  alt="Caseta de aseo Flip Cosy Corner" title="Caseta de aseo Flip Cosy Corner" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/caseta-de-aseo-flip-cosy-corner.html" title="Caseta de aseo Flip Cosy Corner"><b>Caseta de aseo Flip Cosy Corner</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															31,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/caseta-de-aseo-flip-cosy-corner.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4764/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Caseta de aseo ideal para ocupar poco espacio en una esquina. Con puerta y frontal superior abatible para una fácil limpieza de la arena. Incluye una paleta de aseo ideal para arenas aglomerantes y un recambio de carbón activo. Disponible colores surtidos. Medidas: 57x45,5x39cm                    <a href="http://www.misterguau.com/index.php/caseta-de-aseo-flip-cosy-corner.html" title="Caseta de aseo Flip Cosy Corner">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/gatera-de-aseo-jerry.html" title="Caseta higiénica Jerry (3 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/a/gatera_jerry_57x39x41cm_305i-ip-ga10029.jpg"  alt="Caseta higiénica Jerry (3 colores)" title="Caseta higiénica Jerry (3 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/gatera-de-aseo-jerry.html" title="Caseta higiénica Jerry (3 colores)"><b>Caseta higiénica Jerry (3 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															27,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/gatera-de-aseo-jerry.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3080/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonita gatera de elegantes formas redondeadas para tener, además de un práctico aseo para nuestro gato, un elemento decorativo. Con puerta frontal abatible, asa para transportarla y apertura central para poder limpiar en profundidad. con filtro de carbón activo que absorbe los olores. Disponible en 3 colores. Medidas: 57x39x41cm                    <a href="http://www.misterguau.com/index.php/gatera-de-aseo-jerry.html" title="Caseta higiénica Jerry (3 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/caseta-higienica-wc-flower-3-colores.html" title="Caseta higiénica WC Flower (3 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/caseta_higienica_flower.jpg"  alt="Caseta higiénica WC Flower (3 colores)" title="Caseta higiénica WC Flower (3 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/caseta-higienica-wc-flower-3-colores.html" title="Caseta higiénica WC Flower (3 colores)"><b>Caseta higiénica WC Flower (3 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															43,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/caseta-higienica-wc-flower-3-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5500/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Caseta de aseo rectangular cubierta con apertura frontal para facilitar el vaciado sin tener que desmontar la gatera. Fabricada con plástico de gran calidad y superficie lisa para facilitar su limpieza.  Incluye filtro de carbón . Fácilmente lavable. 3 colores. Medidas: 58x39x38cm                    <a href="http://www.misterguau.com/index.php/caseta-higienica-wc-flower-3-colores.html" title="Caseta higiénica WC Flower (3 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-3-colores.html" title="Caseta higiénica WC Leo (3 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/a/gatera_leo_58x39x38cm_ga10032.jpg"  alt="Caseta higiénica WC Leo (3 colores)" title="Caseta higiénica WC Leo (3 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-3-colores.html" title="Caseta higiénica WC Leo (3 colores)"><b>Caseta higiénica WC Leo (3 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															36,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/caseta-higienica-wc-leo-3-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4931/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Gatera de plástico de gran calidad, con gran abertura superior para facilitar la limpieza sin tener que desmontarla. Limpia cómodamente la gatera! Paleta y filtro de carbón incluida. 100x100 Europea. Medidas: 59x39x38cm                    <a href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-3-colores.html" title="Caseta higiénica WC Leo (3 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-corner-3-colores.html" title="Caseta higiénica WC Leo Corner (3 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/a/gatera_leo_corner_ga10036.jpg"  alt="Caseta higiénica WC Leo Corner (3 colores)" title="Caseta higiénica WC Leo Corner (3 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-corner-3-colores.html" title="Caseta higiénica WC Leo Corner (3 colores)"><b>Caseta higiénica WC Leo Corner (3 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															43,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/caseta-higienica-wc-leo-corner-3-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5254/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bandeja de tamaño grande para poder colocar en una esquina y aprovechar espacio en nuestro hogar. Con apertura frontal para facilitar el vaciado sin tener que desmontar la gatera. Fabricada con plástico de gran calidad y superficie lisa para facilitar su limpieza.  Incluye filtro de carbón y paleta higiénica a juego. Fácilmente lavable. 3 colores. Medidas 58x47x38cm.                     <a href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-corner-3-colores.html" title="Caseta higiénica WC Leo Corner (3 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-fantasy-3-colores.html" title="Caseta higiénica WC Leo Fantasy (3 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/g/a/gatera_leo_fantasy_59x39x38cm_ga10034.jpg"  alt="Caseta higiénica WC Leo Fantasy (3 colores)" title="Caseta higiénica WC Leo Fantasy (3 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-fantasy-3-colores.html" title="Caseta higiénica WC Leo Fantasy (3 colores)"><b>Caseta higiénica WC Leo Fantasy (3 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															43,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/caseta-higienica-wc-leo-fantasy-3-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5253/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Gatera de plástico de gran calidad, con gran abertura superior para facilitar la limpieza sin tener que desmontarla. Limpia cómodamente la gatera! Paleta y filtro de carbón incluida. Con vinilo lateral que recrea una pareja de gatos contemplando la luna. Muy decorativa. 100x100 Europea. Medidas: 58x39x38cm                    <a href="http://www.misterguau.com/index.php/caseta-higienica-wc-leo-fantasy-3-colores.html" title="Caseta higiénica WC Leo Fantasy (3 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/caseta-higienica-wc-tom-3-colores.html" title="Caseta higiénica WC Tom (3 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/caseta_higienica_tom_46x35x40cm_ga10028_3.jpg"  alt="Caseta higiénica WC Tom (3 colores)" title="Caseta higiénica WC Tom (3 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/caseta-higienica-wc-tom-3-colores.html" title="Caseta higiénica WC Tom (3 colores)"><b>Caseta higiénica WC Tom (3 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>23,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 19.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/caseta-higienica-wc-tom-3-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5446/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Caseta de aseo rectangular cubierta con apertura frontal para facilitar el vaciado sin tener que desmontar la gatera. Fabricada con plástico de gran calidad y superficie lisa para facilitar su limpieza.  Incluye filtro de carbón . Fácilmente lavable. Con asa para poder transportarla fácilmente. 3 colores. Medidas: 46x35x40cm                    <a href="http://www.misterguau.com/index.php/caseta-higienica-wc-tom-3-colores.html" title="Caseta higiénica WC Tom (3 colores)">Saber más</a><br><br>
					<span class="required"><strong>13%de Dto! Ahorra 3.05&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cat-chow-adult-pollo-y-pavo.html" title="Cat Chow Adult (Pollo y pavo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_46.jpg"  alt="Cat Chow Adult (Pollo y pavo)" title="Cat Chow Adult (Pollo y pavo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cat-chow-adult-pollo-y-pavo.html" title="Cat Chow Adult (Pollo y pavo)"><b>Cat Chow Adult (Pollo y pavo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cat-chow-adult-pollo-y-pavo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4852/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    PURINA CAT CHOW Adultos te ofrece un alimento 100% completo y balanceado desarrollado especialmente para los gatos de 1-7 años de edad que le podrá ayudar a mantener un desarrollo sano de su corazón y un sistema inmunológico más fuerte.  Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/cat-chow-adult-pollo-y-pavo.html" title="Cat Chow Adult (Pollo y pavo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cat-chow-adult-salmon-y-atun.html" title="Cat Chow Adult (Salmón y atún)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/cat_chow_adult_salmon.jpg"  alt="Cat Chow Adult (Salmón y atún)" title="Cat Chow Adult (Salmón y atún)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cat-chow-adult-salmon-y-atun.html" title="Cat Chow Adult (Salmón y atún)"><b>Cat Chow Adult (Salmón y atún)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,65&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 5.75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cat-chow-adult-salmon-y-atun.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4853/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    PURINA CAT CHOW Adultos te ofrece un alimento 100% completo y balanceado desarrollado especialmente para los gatos de 1-7 años de edad que le podrá ayudar a mantener un desarrollo sano de su corazón y un sistema inmunológico más fuerte.  Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/cat-chow-adult-salmon-y-atun.html" title="Cat Chow Adult (Salmón y atún)">Saber más</a><br><br>
					<span class="required"><strong>25% Dto en 1.5Kg! Ahorra 1.90&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cat-chow-adult-3-en-1-dental-antibolas-urinario.html" title="Cat Chow Adult 3 en 1 (Dental + antibolas + urinario)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/cat_chow_feline_3_en_1.jpg"  alt="Cat Chow Adult 3 en 1 (Dental + antibolas + urinario)" title="Cat Chow Adult 3 en 1 (Dental + antibolas + urinario)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cat-chow-adult-3-en-1-dental-antibolas-urinario.html" title="Cat Chow Adult 3 en 1 (Dental + antibolas + urinario)"><b>Cat Chow Adult 3 en 1 (Dental + antibolas + urinario)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>8,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cat-chow-adult-3-en-1-dental-antibolas-urinario.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4854/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    PURINA CAT CHOW Adultos te ofrece un alimento 100% completo y balanceado desarrollado especialmente para los gatos de 1-7 años de edad con fórmula triple beneficio; reduce significativamente la acumulación de sarro hasta en un 40%, con minerales equilibrados para un sistema urinario saludable y especialmente formulada con fuentes de fibras que ayudan a controlar la formación de bolas de pelo. Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/cat-chow-adult-3-en-1-dental-antibolas-urinario.html" title="Cat Chow Adult 3 en 1 (Dental + antibolas + urinario)">Saber más</a><br><br>
					<span class="required"><strong>25% Dto en 1.5Kg! Ahorra 2.25&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cat-chow-kitten.html" title="Cat Chow Kitten">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/cat_chow_kitten.jpg"  alt="Cat Chow Kitten" title="Cat Chow Kitten" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cat-chow-kitten.html" title="Cat Chow Kitten"><b>Cat Chow Kitten</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cat-chow-kitten.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4851/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    PURINA CAT CHOW Gatitos de 1 a 12 meses te ofrece un alimento 100% completo y balanceado con los nutrientes que tu gato necesita para tener un crecimiento sano y un desarrollo adecuado durante su primer año de vida ya que tiene una rica fuente de nutrientes y proteínas como los presentes en la leche materna. Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/cat-chow-kitten.html" title="Cat Chow Kitten">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cat-chow-sterilized-gatos-esterilizados.html" title="Cat Chow Sterilized (gatos esterilizados)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/cat_chow_sterilised.jpg"  alt="Cat Chow Sterilized (gatos esterilizados)" title="Cat Chow Sterilized (gatos esterilizados)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cat-chow-sterilized-gatos-esterilizados.html" title="Cat Chow Sterilized (gatos esterilizados)"><b>Cat Chow Sterilized (gatos esterilizados)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>8,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cat-chow-sterilized-gatos-esterilizados.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4855/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dieta 100% completa y equilibrada que garantiza que tu gato castrado tenga todos los requerimientos energéticos y nutricionales para mantenerse sano. Formulado especialmente con niveles adaptados de proteínas y grasas para ayudar a mantener una musculatura fuerte y un peso saludable. Una condición corporal ideal contribuye a mantener el nivel de actividad de los gatos esterilizados.  Formato: 1.5Kg, 3Kg.                    <a href="http://www.misterguau.com/index.php/cat-chow-sterilized-gatos-esterilizados.html" title="Cat Chow Sterilized (gatos esterilizados)">Saber más</a><br><br>
					<span class="required"><strong>25% Dto en 1.5Kg! Ahorra 2.25&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cat-chow-urinary-tracto-urinario.html" title="Cat Chow Urinary (tracto urinario)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/cat_chow_special_care_uth.jpg"  alt="Cat Chow Urinary (tracto urinario)" title="Cat Chow Urinary (tracto urinario)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cat-chow-urinary-tracto-urinario.html" title="Cat Chow Urinary (tracto urinario)"><b>Cat Chow Urinary (tracto urinario)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cat-chow-urinary-tracto-urinario.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4856/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento completo y equilibrado especialmente formulado para favorecer la salud urinaria en los gatos adultos (de 1 a 7 años). Combinación de nutrientes y energía para satisfacer las necesidades nutricionales, rico en carne que asegura niveles altos de proteínas de fácil digestión para asegurar unos músculos fuertes y sanos. Sus niveles de minerales esenciales y el control del pH urinario ayudan a mantener la salud urinaria.   Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/cat-chow-urinary-tracto-urinario.html" title="Cat Chow Urinary (tracto urinario)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/catnip-bolsita-15gr-fm.html" title="Catnip bolsita 15gr FM">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/catnip_4_bolsitas_503897_2.jpg"  alt="Catnip bolsita 15gr FM" title="Catnip bolsita 15gr FM" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/catnip-bolsita-15gr-fm.html" title="Catnip bolsita 15gr FM"><b>Catnip bolsita 15gr FM</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/catnip-bolsita-15gr-fm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1056/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Catnip es un producto 100% natural y totalmente inofensivo para su gato aunque sea ingerido.  Aplícarlo al rascador y a los juguetes de peluche o sisal.. le hará jugar y disfrutar de lo lindo!. El principio activo de Catnip es un verdadero aroma placentero. Formato: 15gr.                    <a href="http://www.misterguau.com/index.php/catnip-bolsita-15gr-fm.html" title="Catnip bolsita 15gr FM">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/catnip-spray-25ml-fm.html" title="Catnip estimulante spray 25ml FM">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/a/catnip_spray_25ml_503760_3.jpg"  alt="Catnip estimulante spray 25ml FM" title="Catnip estimulante spray 25ml FM" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/catnip-spray-25ml-fm.html" title="Catnip estimulante spray 25ml FM"><b>Catnip estimulante spray 25ml FM</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/catnip-spray-25ml-fm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1057/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Catnip es un producto 100% natural y totalmente inofensivo para su gato aunque sea ingerido. Aplicarlo al rascador y a los juguetes de peluche o sisal.. le hará jugar y disfrutar de lo lindo!. El principio activo de Catnip es un verdadero aroma placentero. Formato: Spray 25 ml.                    <a href="http://www.misterguau.com/index.php/catnip-spray-25ml-fm.html" title="Catnip estimulante spray 25ml FM">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cepillo-doble-para-gato-kl.html" title="Cepillo doble para gato KL">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/e/cepillo_doble_gato_1030272.jpg"  alt="Cepillo doble para gato KL" title="Cepillo doble para gato KL" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cepillo-doble-para-gato-kl.html" title="Cepillo doble para gato KL"><b>Cepillo doble para gato KL</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>9,00&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 8.10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cepillo-doble-para-gato-kl.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4347/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cepillo doble para desenredar y dar lustre al pelo de nuestro gato. Parte frontal con cepillo de cerdas para dar brillo, y parte trasera con púas protegidas para desenredar sin dañar la piel de nuestro gato. Con forma ergonómica con agarre suave y antideslizante, diseñada por Karlie Flamingo. Medidas: 21cm * 6cm - 104 gramos                    <a href="http://www.misterguau.com/index.php/cepillo-doble-para-gato-kl.html" title="Cepillo doble para gato KL">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cepillo-para-gato-kl.html" title="Cepillo para gato KL">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/e/cepillo_gato_1030277.jpg"  alt="Cepillo para gato KL" title="Cepillo para gato KL" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cepillo-para-gato-kl.html" title="Cepillo para gato KL"><b>Cepillo para gato KL</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>7,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cepillo-para-gato-kl.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/980/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Da la capa un aspecto brillante. Acción antiestática. Con forma ergonómica con agarre suave y antideslizante, diseñada por Karlie Flamingo. Medidas: 21cm * 6cm - 85 gramos                    <a href="http://www.misterguau.com/index.php/cepillo-para-gato-kl.html" title="Cepillo para gato KL">Saber más</a><br><br>
					<span class="required"><strong>Hemos bajado el precio! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/champu-desodorante-para-gato-axis.html" title="Champú desodorante para gato Axis">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/h/champu_axis_desodor_gato_2.jpg"  alt="Champú desodorante para gato Axis" title="Champú desodorante para gato Axis" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/champu-desodorante-para-gato-axis.html" title="Champú desodorante para gato Axis"><b>Champú desodorante para gato Axis</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/champu-desodorante-para-gato-axis.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/971/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú especialmente formulado para el PH de los gatos. Indicado tanto para gatos de pelo largo como de pelo corto. Su tratamiento desodorante ayuda a contrarestar el olor de nuestro gato a la vez que le perfuma suavemente. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/champu-desodorante-para-gato-axis.html" title="Champú desodorante para gato Axis">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/champu-en-espuma-seca-gatos-sandimas.html" title="Champú en espuma seca gatos SanDimas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/h/champu_espuma_seca_gatos_san_dimas.jpg"  alt="Champú en espuma seca gatos SanDimas" title="Champú en espuma seca gatos SanDimas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/champu-en-espuma-seca-gatos-sandimas.html" title="Champú en espuma seca gatos SanDimas"><b>Champú en espuma seca gatos SanDimas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/champu-en-espuma-seca-gatos-sandimas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/819/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú es espuma seca especialmente diseñada para el cuidado y limpieza del pelo de nuestro gatito. También indicado para gatitos que no pueden bañarse con agua o para gatos que repelen el baño. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/champu-en-espuma-seca-gatos-sandimas.html" title="Champú en espuma seca gatos SanDimas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/champu-fresvio-balsamico-dermatologico-perro-gato.html" title="Champú Fresvio balsámico-dermatológico perro/gato">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/h/champu_fresvio_200ml.jpg"  alt="Champú Fresvio balsámico-dermatológico perro/gato" title="Champú Fresvio balsámico-dermatológico perro/gato" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/champu-fresvio-balsamico-dermatologico-perro-gato.html" title="Champú Fresvio balsámico-dermatológico perro/gato"><b>Champú Fresvio balsámico-dermatológico perro/gato</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/champu-fresvio-balsamico-dermatologico-perro-gato.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5015/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú balsámico y dermatológico de uso regular para mantenimiento de los perros y gatos alérgicos. Ideal para baños periódicos combinados con tratamiento farmacológico. Formulado específicamente para impartir suavidad y brillo a la capa. Delicado con la piel y el cabello.Su PH suave permite lavar todo tipo de pieles y usar frecuentemente. Formato: 200ml.                    <a href="http://www.misterguau.com/index.php/champu-fresvio-balsamico-dermatologico-perro-gato.html" title="Champú Fresvio balsámico-dermatológico perro/gato">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/champu-para-gatos-y-gatitos-vitacoat.html" title="Champú para gatos y gatitos Vitacoat">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_72.jpg"  alt="Champú para gatos y gatitos Vitacoat" title="Champú para gatos y gatitos Vitacoat" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/champu-para-gatos-y-gatitos-vitacoat.html" title="Champú para gatos y gatitos Vitacoat"><b>Champú para gatos y gatitos Vitacoat</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/champu-para-gatos-y-gatitos-vitacoat.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5009/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú concentrado para todas las razas de gatos, especialmente la de pelo blanco. Pensando en el bienestar de nuestras mascotas los champúes VITACOAT están hechos a partir de jabones naturales, limpiando en profundidad sin agredir el pelo ni la piel de nuestros gatos. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/champu-para-gatos-y-gatitos-vitacoat.html" title="Champú para gatos y gatitos Vitacoat">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/champu-vitacoat-tea-tree-oil-pieles-sensibles.html" title="Champú Vitacoat Tea Tree Oil (Pieles Sensibles)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitacoat_tea_tree_oil_pieles_sensibles_250ml_as00025.jpg"  alt="Champú Vitacoat Tea Tree Oil (Pieles Sensibles)" title="Champú Vitacoat Tea Tree Oil (Pieles Sensibles)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/champu-vitacoat-tea-tree-oil-pieles-sensibles.html" title="Champú Vitacoat Tea Tree Oil (Pieles Sensibles)"><b>Champú Vitacoat Tea Tree Oil (Pieles Sensibles)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															14,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/champu-vitacoat-tea-tree-oil-pieles-sensibles.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5235/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú medicinal con aceite de árbol del té. La acción del aceite del árbol del té ayuda a calmar los picores y la piel irritada. Para perros y gatos. Formato: 250ml.                    <a href="http://www.misterguau.com/index.php/champu-vitacoat-tea-tree-oil-pieles-sensibles.html" title="Champú Vitacoat Tea Tree Oil (Pieles Sensibles)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/coatex-champu-aloe-y-avena.html" title="Coatex Champú Aloe y avena">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/h/champu_aloe_y_avena.jpg"  alt="Coatex Champú Aloe y avena" title="Coatex Champú Aloe y avena" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/coatex-champu-aloe-y-avena.html" title="Coatex Champú Aloe y avena"><b>Coatex Champú Aloe y avena</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															24,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/coatex-champu-aloe-y-avena.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3149/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Champú de laboratorios Vet Plus especialmente indicado para tratar pieles sensibles e irritadas de perros y gatos. Es perfecto para razas de pelo largo y espeso ya que hidrata a la vez que ayuda al peinado. Formato: 500ml.                    <a href="http://www.misterguau.com/index.php/coatex-champu-aloe-y-avena.html" title="Coatex Champú Aloe y avena">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cojin-de-viaje-cuadros.html" title="Cojín de viaje Cuadros">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/cojin_fibra_viaje_cuadros_90x69cm.jpg"  alt="Cojín de viaje Cuadros" title="Cojín de viaje Cuadros" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cojin-de-viaje-cuadros.html" title="Cojín de viaje Cuadros"><b>Cojín de viaje Cuadros</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cojin-de-viaje-cuadros.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5432/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cojín fino de fibra con bonito diseño de cuadros tricolores. Totalmente enrrollable para ser práctico de recoger para viajes, coche, etc. Incorpora dos tiras para poderlo atar. Fácil de limpiar y mantener. Medidas: 90x69cm                    <a href="http://www.misterguau.com/index.php/cojin-de-viaje-cuadros.html" title="Cojín de viaje Cuadros">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cojin-de-viaje-puntos-color.html" title="Cojín de viaje Puntos Color">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/cojin_fibra_viaje_puntos_colores_90x69cm.jpg"  alt="Cojín de viaje Puntos Color" title="Cojín de viaje Puntos Color" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cojin-de-viaje-puntos-color.html" title="Cojín de viaje Puntos Color"><b>Cojín de viaje Puntos Color</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cojin-de-viaje-puntos-color.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5049/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cojín fino de fibra con bonito diseño de puntitos tricolor. Totalmente enrrollable para ser práctico de recoger para viajes, coche, etc. Incorpora dos tiras para poderlo atar. Fácil de limpiar y mantener. Medidas: 90x69cm                    <a href="http://www.misterguau.com/index.php/cojin-de-viaje-puntos-color.html" title="Cojín de viaje Puntos Color">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cojin-kitty-ventana-beige-o-negro.html" title="Cojín Kitty ventana (Beige o negro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/cojin_kitty_ventana.jpg"  alt="Cojín Kitty ventana (Beige o negro)" title="Cojín Kitty ventana (Beige o negro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cojin-kitty-ventana-beige-o-negro.html" title="Cojín Kitty ventana (Beige o negro)"><b>Cojín Kitty ventana (Beige o negro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															19,50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cojin-kitty-ventana-beige-o-negro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3351/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Un lugar especial para tu gato! Maravilloso tacto suave con un divertido motivo decorativo de dos ratoncitos. Desenfunsable y lavable a 30º. Antideslizante. Ideal para el suelo o para superficies altas. Disponible en beige o negro. Medidas: 61x26x3cm                    <a href="http://www.misterguau.com/index.php/cojin-kitty-ventana-beige-o-negro.html" title="Cojín Kitty ventana (Beige o negro)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/colchon-antipelo-karlie-no-limit.html" title="Colchón antipelo Karlie 'No limit'">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/colchon_no_limit.jpg"  alt="Colchón antipelo Karlie 'No limit'" title="Colchón antipelo Karlie 'No limit'" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/colchon-antipelo-karlie-no-limit.html" title="Colchón antipelo Karlie 'No limit'"><b>Colchón antipelo Karlie 'No limit'</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															25,85&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/colchon-antipelo-karlie-no-limit.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4614/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Colchón realizado en teflon repelente de líquidos y pelo. Muy fácil de limpiar. Transpirable. Ideal para utilizar en exteriores y perfecto para perros con alergias cutáneas. Fácil de cuidar. Se puede lavar a 30ºC. Fabricado en alemania. Con asa lateral para desplazarlo fácilmente. Desenfundable. Medidas: T1 (50x40x8cm) - T2 (70x50x8cm) - T3 (80x55x8cm) - T4 (100x65x8cm) - T5 (120x75x8cm)                    <a href="http://www.misterguau.com/index.php/colchon-antipelo-karlie-no-limit.html" title="Colchón antipelo Karlie 'No limit'">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/colchon-desenfundable-coffee.html" title="Colchón desenfundable Coffee">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/colchon_desenfundable-4-coffee_90x60x10cm.jpg"  alt="Colchón desenfundable Coffee" title="Colchón desenfundable Coffee" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/colchon-desenfundable-coffee.html" title="Colchón desenfundable Coffee"><b>Colchón desenfundable Coffee</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>33,65&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 29.50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/colchon-desenfundable-coffee.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5625/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Colchón desenfundable mullido y cómodo para perros y gatos. Realizada en fibra en diversas tonalidades de marrón y con elementos decorativos relacionados con el café (tazas humeantes, granos de café, etc). Medidas: T4 (90x60x10cm) - T5 (100x65x10cm)                    <a href="http://www.misterguau.com/index.php/colchon-desenfundable-coffee.html" title="Colchón desenfundable Coffee">Saber más</a><br><br>
					<span class="required"><strong>20% Dto en T4! Ahorra 6.70&euro;! <br><br>20% Dto en T5! Ahorra 7.50&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/colchon-desenfundable-moka-point-5148.html" title="Colchón desenfundable Moka Point">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/colchon_desenfundable_topo_moka_t4_90x60x10cm_2364-tom_3.jpg"  alt="Colchón desenfundable Moka Point" title="Colchón desenfundable Moka Point" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/colchon-desenfundable-moka-point-5148.html" title="Colchón desenfundable Moka Point"><b>Colchón desenfundable Moka Point</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															45,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/colchon-desenfundable-moka-point-5148.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5148/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Colchón desenfundable mullido y cómodo para perros y gatos. En color beige moka con puntitos marrones. Muy elegante. Medidas: T4 (90x60x10cm) - T5 (100x65x10cm) - T6 (120x75x10cm)                    <a href="http://www.misterguau.com/index.php/colchon-desenfundable-moka-point-5148.html" title="Colchón desenfundable Moka Point">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/colchon-desenfundable-trinity.html" title="Colchón desenfundable Trinity">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/colchon_desenfundable-4-trinity_90x60x10cm.jpg"  alt="Colchón desenfundable Trinity" title="Colchón desenfundable Trinity" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/colchon-desenfundable-trinity.html" title="Colchón desenfundable Trinity"><b>Colchón desenfundable Trinity</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>33,65&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 29.50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/colchon-desenfundable-trinity.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5626/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Colchón desenfundable mullido y cómodo para perros y gatos. Realizada en fibra en diversas tonalidades de blanco y gris y con elementos decorativos relacionados con elementos de la calle (farolas, verjas, etc). Medidas: T4 (90x60x10cm) - T5 (100x65x10cm)                    <a href="http://www.misterguau.com/index.php/colchon-desenfundable-trinity.html" title="Colchón desenfundable Trinity">Saber más</a><br><br>
					<span class="required"><strong>20% Dto en T4! Ahorra 6.70&euro;! <br><br>20% Dto en T5! Ahorra 7.50&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-beige.html" title="Colchón nórdico Milu Nature (Beige)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_nordico_nature_beige.jpg"  alt="Colchón nórdico Milu Nature (Beige)" title="Colchón nórdico Milu Nature (Beige)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-beige.html" title="Colchón nórdico Milu Nature (Beige)"><b>Colchón nórdico Milu Nature (Beige)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															65,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/colchon-nordico-milu-nature-beige.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5167/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Colchón nórdico mullido y calentito de gran calidad con diseño exclusivo ideal para aislar a nuestro perro del suelo y para que esté bien cómodo. Con detalle de logo Milu bordado. Tejidos de primera calidad y costuras reforzadas. En color bicolor con dos texturas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Desenfundable y lavable a 30ºC. Medidas: T5 (92x62x10cm) - T6 (102x68x10cm) - T7 (112x75x10cm)                    <a href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-beige.html" title="Colchón nórdico Milu Nature (Beige)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-negro.html" title="Colchón nórdico Milu Nature (Negro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_nordico_nature_negro.jpg"  alt="Colchón nórdico Milu Nature (Negro)" title="Colchón nórdico Milu Nature (Negro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-negro.html" title="Colchón nórdico Milu Nature (Negro)"><b>Colchón nórdico Milu Nature (Negro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															65,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/colchon-nordico-milu-nature-negro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5169/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Colchón nórdico mullido y calentito de gran calidad con diseño exclusivo ideal para aislar a nuestro perro del suelo y para que esté bien cómodo. Con detalle de logo Milu bordado. Tejidos de primera calidad y costuras reforzadas. En color bicolor con dos texturas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Desenfundable y lavable a 30ºC. Medidas: T5 (92x62x10cm) - T6 (102x68x10cm) - T7 (112x75x10cm)                    <a href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-negro.html" title="Colchón nórdico Milu Nature (Negro)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-rosa.html" title="Colchón nórdico Milu Nature (Rosa)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_nordico_nature_rosa.jpg"  alt="Colchón nórdico Milu Nature (Rosa)" title="Colchón nórdico Milu Nature (Rosa)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-rosa.html" title="Colchón nórdico Milu Nature (Rosa)"><b>Colchón nórdico Milu Nature (Rosa)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															65,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/colchon-nordico-milu-nature-rosa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5168/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Colchón nórdico mullido y calentito de gran calidad con diseño exclusivo ideal para aislar a nuestro perro del suelo y para que esté bien cómodo. Con detalle de logo Milu bordado. Tejidos de primera calidad y costuras reforzadas. En color bicolor con dos texturas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Desenfundable y lavable a 30ºC. Medidas: T5 (92x62x10cm) - T6 (102x68x10cm) - T7 (112x75x10cm)                    <a href="http://www.misterguau.com/index.php/colchon-nordico-milu-nature-rosa.html" title="Colchón nórdico Milu Nature (Rosa)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/colchon-nordico-para-perro-barca-futbol-club-barcelona.html" title="Colchón nórdico para perro Barça (Fútbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_11_2.jpg"  alt="Colchón nórdico para perro Barça (Fútbol Club Barcelona)" title="Colchón nórdico para perro Barça (Fútbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/colchon-nordico-para-perro-barca-futbol-club-barcelona.html" title="Colchón nórdico para perro Barça (Fútbol Club Barcelona)"><b>Colchón nórdico para perro Barça (Fútbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															28,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/colchon-nordico-para-perro-barca-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3602/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto oficial FCB (Fútbol Club Barcelona). Mullido colchón desenfundable en azul y grana y con escudo del Barça impreso en todo el lateral y cosido en la parte delantera. Lavable a 30ºC. Medidas: T-3 (50*70cm), T-4 (60*78cm)                    <a href="http://www.misterguau.com/index.php/colchon-nordico-para-perro-barca-futbol-club-barcelona.html" title="Colchón nórdico para perro Barça (Fútbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/collar-ajustable-gato-flowers.html" title="Collar ajustable gato Flowers">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/collar_ajust_flores_10x200-300mm_67108.jpg"  alt="Collar ajustable gato Flowers" title="Collar ajustable gato Flowers" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/collar-ajustable-gato-flowers.html" title="Collar ajustable gato Flowers"><b>Collar ajustable gato Flowers</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/collar-ajustable-gato-flowers.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1531/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Collar para gatos realizado en micro-nylon trenzado y muy resistente. Con estampado de flore sy en colores surtidos. Con cierre de seguridad anti-ahogo y cascabel. Medidas: 10x200-300mm                    <a href="http://www.misterguau.com/index.php/collar-ajustable-gato-flowers.html" title="Collar ajustable gato Flowers">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/collar-ajustable-plateado-con-cascabel.html" title="Collar ajustable plateado con cascabel">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/collar_ajustable_reflejos_plata_cascabel_10x200-300_surtido_67116.jpg"  alt="Collar ajustable plateado con cascabel" title="Collar ajustable plateado con cascabel" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/collar-ajustable-plateado-con-cascabel.html" title="Collar ajustable plateado con cascabel"><b>Collar ajustable plateado con cascabel</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/collar-ajustable-plateado-con-cascabel.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4148/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Collar para gato ajustable , con interior de nylon suave y exterior pleateado en polipiel brillante. Con cierre de seguridad y cascabel. Colores surtidos. Medidas: 1cm * 20-30cm                    <a href="http://www.misterguau.com/index.php/collar-ajustable-plateado-con-cascabel.html" title="Collar ajustable plateado con cascabel">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/collar-preventef-gato.html" title="Collar antiparasitario externo Preventef gato">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/collar_preventef_gato.jpg"  alt="Collar antiparasitario externo Preventef gato" title="Collar antiparasitario externo Preventef gato" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/collar-preventef-gato.html" title="Collar antiparasitario externo Preventef gato"><b>Collar antiparasitario externo Preventef gato</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															12,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/collar-preventef-gato.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/874/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Collar antiparasitario con efecto dermatológico indicado para parasitosis externas en gatos, tales como pulgas y garrapatas por un periodo de 5 meses. Contiene ademas vitamina F esencial para mejorar y mantener el pelaje de nuestros gatos sedosos y brillantes. Diazinón 150mg. Formato: 1 unid.                    <a href="http://www.misterguau.com/index.php/collar-preventef-gato.html" title="Collar antiparasitario externo Preventef gato">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/seresto-collar-antiparasitario-para-gatos.html" title="Collar antiparasitario Seresto para gatos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/e/seresto_collar_gatos_1016960.jpg"  alt="Collar antiparasitario Seresto para gatos" title="Collar antiparasitario Seresto para gatos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/seresto-collar-antiparasitario-para-gatos.html" title="Collar antiparasitario Seresto para gatos"><b>Collar antiparasitario Seresto para gatos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															34,55&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/seresto-collar-antiparasitario-para-gatos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3738/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Seresto® es distinto de los collares convencionales contra pulgas y garrapatas. Utiliza una novedosa combinación de materiales que permite la liberación segura y controlada de pequeñas dosis de los principios activos durante 8 meses. Confiere excelente protección al gato, no solo porque mata las pulgas y garrapatas, sino también porque repele las garrapatas antes de que lleguen a picar y transmitir enfermedades. Inodoro, resistente al agua. Para gatos.                    <a href="http://www.misterguau.com/index.php/seresto-collar-antiparasitario-para-gatos.html" title="Collar antiparasitario Seresto para gatos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/collar-para-gato-ajustable-tender-flowers-4-colores.html" title="Collar para gato ajustable Tender Flowers (4 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/collar_ajustable_tender_flores_cascabel.jpg"  alt="Collar para gato ajustable Tender Flowers (4 colores)" title="Collar para gato ajustable Tender Flowers (4 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/collar-para-gato-ajustable-tender-flowers-4-colores.html" title="Collar para gato ajustable Tender Flowers (4 colores)"><b>Collar para gato ajustable Tender Flowers (4 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/collar-para-gato-ajustable-tender-flowers-4-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2973/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Collar para gato realizado en nylon y totalmente ajustable. Con cascabel y cierre de seguridad en plástico. Con bonito diseño de flores de colores. Disponible en 4 colores. Medidas: 10x200-300mm                    <a href="http://www.misterguau.com/index.php/collar-para-gato-ajustable-tender-flowers-4-colores.html" title="Collar para gato ajustable Tender Flowers (4 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/collar-para-gato-liso-fich-6-colores.html" title="Collar para gato Liso Fish (6 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/collar_gato_rd_liso_cierre_pez.jpg"  alt="Collar para gato Liso Fish (6 colores)" title="Collar para gato Liso Fish (6 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/collar-para-gato-liso-fich-6-colores.html" title="Collar para gato Liso Fish (6 colores)"><b>Collar para gato Liso Fish (6 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/collar-para-gato-liso-fich-6-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5483/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonito collar para gato disponible en 6 colores. Realizado en nylon suave para no dañar el pelo. Con cierre plástico con forma de pez.  Con cascabel a juego con el color del collar. Medidas: 12mm x 20-32cm                    <a href="http://www.misterguau.com/index.php/collar-para-gato-liso-fich-6-colores.html" title="Collar para gato Liso Fish (6 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/collar-para-gato-mac-leather-purpurina-4-colores.html" title="Collar para gato Mac Leather Purpurina (4 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/collar_gato_mac_leather_purpurina_10mmx21-33cm_60002.jpg"  alt="Collar para gato Mac Leather Purpurina (4 colores)" title="Collar para gato Mac Leather Purpurina (4 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/collar-para-gato-mac-leather-purpurina-4-colores.html" title="Collar para gato Mac Leather Purpurina (4 colores)"><b>Collar para gato Mac Leather Purpurina (4 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,80&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/collar-para-gato-mac-leather-purpurina-4-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5192/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Collar para gato realizado en nylon suave por su parte interior y purpurina fina brillante en la parte exterior que le da un aspecto muy elegante y festivo. Con cascabel de color a juego y cierre de seguridad. Disponible en 4 colores. Medidas: 10mm x 21-33cm (ajustable)                    <a href="http://www.misterguau.com/index.php/collar-para-gato-mac-leather-purpurina-4-colores.html" title="Collar para gato Mac Leather Purpurina (4 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-acero-inoxidable-6-medidas.html" title="Comedero acero inoxidable (6 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_acero_inox_antideslizante.jpg"  alt="Comedero acero inoxidable (6 medidas)" title="Comedero acero inoxidable (6 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-acero-inoxidable-6-medidas.html" title="Comedero acero inoxidable (6 medidas)"><b>Comedero acero inoxidable (6 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-acero-inoxidable-6-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3366/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable y con base antideslizante. Ideal para ser utilizado como bebedero o comedero. Medidas: T1(0,3L - Ø16cm) - T2(0,45L - Ø19cm) - T3(0,70L - Ø21cm) - T4(0,90L - Ø26cm) - T5(1,80L - Ø29cm) - T6(2,80L - Ø32cm)                    <a href="http://www.misterguau.com/index.php/comedero-acero-inoxidable-6-medidas.html" title="Comedero acero inoxidable (6 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-acero-inoxidable-barca-fcb-futbol-club-barcelona.html" title="Comedero acero inoxidable Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_fcb.jpg"  alt="Comedero acero inoxidable Barça (FCB - Futbol Club Barcelona)" title="Comedero acero inoxidable Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-acero-inoxidable-barca-fcb-futbol-club-barcelona.html" title="Comedero acero inoxidable Barça (FCB - Futbol Club Barcelona)"><b>Comedero acero inoxidable Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-acero-inoxidable-barca-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2024/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero oficial del Futbol Club Barcelona. Realizado en acero inoxidable y con base antideslizante. Con el escudo del FCB grabado. Disponible en dos tamaños: M (450ml - 21cm ext) - L (900ml - 25cm ext)                    <a href="http://www.misterguau.com/index.php/comedero-acero-inoxidable-barca-fcb-futbol-club-barcelona.html" title="Comedero acero inoxidable Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-de-acero-inox-ny-5-medidas.html" title="Comedero de acero Inox NY (5 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_acero_inox_0110.jpg"  alt="Comedero de acero Inox NY (5 medidas)" title="Comedero de acero Inox NY (5 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-de-acero-inox-ny-5-medidas.html" title="Comedero de acero Inox NY (5 medidas)"><b>Comedero de acero Inox NY (5 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															1,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-de-acero-inox-ny-5-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4827/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de acero inoxidable básico para la alimentación o suministro de agua de nuestro perro o gato. Disponible en 5 medidas: T1(0.35l-Ø10cm) - T2 (0.75l-Ø12cm) - T3 (1.75l-Ø15cm) - T4 (2.8l-Ø19cm) - T5 (4l - Ø22cm)                    <a href="http://www.misterguau.com/index.php/comedero-de-acero-inox-ny-5-medidas.html" title="Comedero de acero Inox NY (5 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-doble-acero-inocx-2-medidas.html" title="Comedero doble acero Inox (2 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/s/e/set_comederos_acero_inox_2.jpg"  alt="Comedero doble acero Inox (2 medidas)" title="Comedero doble acero Inox (2 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-doble-acero-inocx-2-medidas.html" title="Comedero doble acero Inox (2 medidas)"><b>Comedero doble acero Inox (2 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,75&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-doble-acero-inocx-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5106/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Set de dos comederos para agrupar en un solo elemento el agua y alimento para nuestro perro. Realizados en acero inoxidable y con soporte metálico para darle estabilidad. Con patas antideslizantes. Medidas: T1 (2x0.35l) - T2 (2x0.75l)                    <a href="http://www.misterguau.com/index.php/comedero-doble-acero-inocx-2-medidas.html" title="Comedero doble acero Inox (2 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-doble-domino-blanco-2-medidas.html" title="Comedero doble Domino (Blanco) - 2 medidas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_doble_domino_blanco_14cm_-_2x500ml305i-sw-pe75077.jpg"  alt="Comedero doble Domino (Blanco) - 2 medidas" title="Comedero doble Domino (Blanco) - 2 medidas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-doble-domino-blanco-2-medidas.html" title="Comedero doble Domino (Blanco) - 2 medidas"><b>Comedero doble Domino (Blanco) - 2 medidas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-doble-domino-blanco-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4344/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Práctico comedero doble de melanina con comederos de acero inoxidable extraíbles para una cómoda limpieza. Una única zona de alimento y bebida para nuestro perro en elegante forma y diseño. Con base antideslizante. Medidas: S (Ø11cm - 2x300ml) - M (Ø14cm - 2x500ml)                    <a href="http://www.misterguau.com/index.php/comedero-doble-domino-blanco-2-medidas.html" title="Comedero doble Domino (Blanco) - 2 medidas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-doble-domino-negro-2-medidas.html" title="Comedero doble Domino (Negro) - 2 medidas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_doble_domino_negro_11cm_-_2x200ml305i-sw-pe75078.jpg"  alt="Comedero doble Domino (Negro) - 2 medidas" title="Comedero doble Domino (Negro) - 2 medidas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-doble-domino-negro-2-medidas.html" title="Comedero doble Domino (Negro) - 2 medidas"><b>Comedero doble Domino (Negro) - 2 medidas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															13,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-doble-domino-negro-2-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4345/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Práctico comedero doble de melanina con comederos de acero inoxidable extraíbles para una cómoda limpieza. Una única zona de alimento y bebida para nuestro perro en elegante forma y diseño. Con base antideslizante. Medidas: S (Ø11cm - 2x300ml) - M (Ø14cm - 2x500ml)                    <a href="http://www.misterguau.com/index.php/comedero-doble-domino-negro-2-medidas.html" title="Comedero doble Domino (Negro) - 2 medidas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-domino-blanco-4-medidas.html" title="Comedero Domino blanco (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_domino_blanco_11cm_-_200ml305i-sw-pe75068.jpg"  alt="Comedero Domino blanco (4 medidas)" title="Comedero Domino blanco (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-domino-blanco-4-medidas.html" title="Comedero Domino blanco (4 medidas)"><b>Comedero Domino blanco (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-domino-blanco-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4326/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Elegante comedero realizado en melanina muy resistente. Con comedero/bebedero de acero inoxidable y extraíble para una fácil limpieza. Con base antideslizante. Medidas: T1 (x Ø11cm - 200ml) - T2 (Ø14,5cm - 500ml) - T3 (Ø18cm - 750ml) - T4 (Ø22cm - 1500ml)                    <a href="http://www.misterguau.com/index.php/comedero-domino-blanco-4-medidas.html" title="Comedero Domino blanco (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-domino-negro-4-medidas.html" title="Comedero Domino negro (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_domino_negro_11cm_-_200ml305i-sw-pe75072.jpg"  alt="Comedero Domino negro (4 medidas)" title="Comedero Domino negro (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-domino-negro-4-medidas.html" title="Comedero Domino negro (4 medidas)"><b>Comedero Domino negro (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-domino-negro-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4327/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Elegante comedero realizado en melanina muy resistente. Con comedero/bebedero de acero inoxidable y extraíble para una fácil limpieza. Con base antideslizante. Medidas: T1 (x Ø11cm - 200ml) - T2 (Ø14,5cm - 500ml) - T3 (Ø18cm - 750ml) - T4 (Ø22cm - 1500ml)                    <a href="http://www.misterguau.com/index.php/comedero-domino-negro-4-medidas.html" title="Comedero Domino negro (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-inox-baltic-azul.html" title="Comedero inox Baltic (Azul)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_baltic_perro_azul.jpg"  alt="Comedero inox Baltic (Azul)" title="Comedero inox Baltic (Azul)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-inox-baltic-azul.html" title="Comedero inox Baltic (Azul)"><b>Comedero inox Baltic (Azul)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-inox-baltic-azul.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4323/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable con exterior pintado en apoxi no tóxico para nuestras mascotas. Fácil de lavar y conservar. Con detalles de patitas y huesos. En color azul celeste. Con base antideslizante. Medidas: T1 (Ø12cm-300ml) - T2 (Ø14cm-500ml) - T3 (Ø17cm-800ml) - T4 (Ø21cm-1500ml) - T5 (Ø23cm-2200ml)                    <a href="http://www.misterguau.com/index.php/comedero-inox-baltic-azul.html" title="Comedero inox Baltic (Azul)">Saber más</a><br><br>
					<span class="required"><strong>10% Dto en todas las medidas!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-inox-baltic-burdeos.html" title="Comedero inox Baltic (Burdeos)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_baltic_perro_burdeos.jpg"  alt="Comedero inox Baltic (Burdeos)" title="Comedero inox Baltic (Burdeos)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-inox-baltic-burdeos.html" title="Comedero inox Baltic (Burdeos)"><b>Comedero inox Baltic (Burdeos)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-inox-baltic-burdeos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4325/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable con exterior pintado en apoxi no tóxico para nuestras mascotas. Fácil de lavar y conservar. Con detalles de patitas y huesos. En color rojo burdeos. Con base antideslizante. Medidas: T1 (Ø12cm-300ml) - T2 (Ø14cm-500ml) - T3 (Ø17cm-800ml) - T4 (Ø21cm-1500ml) - T5 (Ø23cm-2200ml)                    <a href="http://www.misterguau.com/index.php/comedero-inox-baltic-burdeos.html" title="Comedero inox Baltic (Burdeos)">Saber más</a><br><br>
					<span class="required"><strong>10% Dto en todas las medidas!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-inox-baltic-mostaza.html" title="Comedero inox Baltic (Mostaza)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_baltic_perro_mostaza.jpg"  alt="Comedero inox Baltic (Mostaza)" title="Comedero inox Baltic (Mostaza)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-inox-baltic-mostaza.html" title="Comedero inox Baltic (Mostaza)"><b>Comedero inox Baltic (Mostaza)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-inox-baltic-mostaza.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4324/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable con exterior pintado en apoxi no tóxico para nuestras mascotas. Fácil de lavar y conservar. Con detalles de patitas y huesos. En color mostaza. Con base antideslizante. Medidas: T1 (Ø12cm-300ml) - T2 (Ø14cm-500ml) - T3 (Ø17cm-800ml) - T4 (Ø21cm-1500ml) - T5 (Ø23cm-2200ml)                    <a href="http://www.misterguau.com/index.php/comedero-inox-baltic-mostaza.html" title="Comedero inox Baltic (Mostaza)">Saber más</a><br><br>
					<span class="required"><strong>10% Dto en todas las medidas!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-inox-baltic-kitten.html" title="Comedero inox Baltic Kitten">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_gato_baltic_12cm_-_300ml_gris305i-sw-ga75067.jpg"  alt="Comedero inox Baltic Kitten" title="Comedero inox Baltic Kitten" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-inox-baltic-kitten.html" title="Comedero inox Baltic Kitten"><b>Comedero inox Baltic Kitten</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>4,35&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 3.50&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-inox-baltic-kitten.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4334/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable con exterior pintado en apoxi no tóxico para nuestras mascotas. Fácil de lavar y conservar. Con detalles de patitas y huesos. En dos colores y con tamaño ideal para perros mini o gatitos. Con base antideslizante. Medidas: Ø12cm-300ml                    <a href="http://www.misterguau.com/index.php/comedero-inox-baltic-kitten.html" title="Comedero inox Baltic Kitten">Saber más</a><br><br>
					<span class="required"><strong>20% Dto! Ahorra 0.85&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/ny-comedero-nordic-inox-con-espiral.html" title="Comedero Inox Nordic con espiral">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/o/nordic_comedero_inox_2.jpg"  alt="Comedero Inox Nordic con espiral" title="Comedero Inox Nordic con espiral" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/ny-comedero-nordic-inox-con-espiral.html" title="Comedero Inox Nordic con espiral"><b>Comedero Inox Nordic con espiral</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/ny-comedero-nordic-inox-con-espiral.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1518/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Elegante comedero realizado en acero inoxidable y con relieve de una espiral decorativa. Disponible en 5 medidas: 240 ml. - 470ml - 710ml - 960ml - 1.9 litros.                    <a href="http://www.misterguau.com/index.php/ny-comedero-nordic-inox-con-espiral.html" title="Comedero Inox Nordic con espiral">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-inoxidable-grabado.html" title="Comedero inoxidable grabado">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_a_grabado.jpg"  alt="Comedero inoxidable grabado" title="Comedero inoxidable grabado" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-inoxidable-grabado.html" title="Comedero inoxidable grabado"><b>Comedero inoxidable grabado</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,10&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-inoxidable-grabado.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3355/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable y con detalles grabados de pececitos. Ideales para gato. Con base antideslizante. Fácil de limpiar. Medidas: 300ml - Ø16cm                    <a href="http://www.misterguau.com/index.php/comedero-inoxidable-grabado.html" title="Comedero inoxidable grabado">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-inoxidable-grabado-huesitos.html" title="Comedero inoxidable grabado huesitos">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_20.jpg"  alt="Comedero inoxidable grabado huesitos" title="Comedero inoxidable grabado huesitos" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-inoxidable-grabado-huesitos.html" title="Comedero inoxidable grabado huesitos"><b>Comedero inoxidable grabado huesitos</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-inoxidable-grabado-huesitos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4696/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Elegante comedero realizado en acero inoxidable y con relieve de patitas y huesitos. Con base antideslizante y fácil de limpiar. Disponible en medidas: 450ml - 700ml - 900ml - 1.8 litros.                    <a href="http://www.misterguau.com/index.php/comedero-inoxidable-grabado-huesitos.html" title="Comedero inoxidable grabado huesitos">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-nuvola-colores-surtidos.html" title="Comedero Nuvola (5 tamaños - 4 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/n/u/nuvola_-_comedero.jpg"  alt="Comedero Nuvola (5 tamaños - 4 colores)" title="Comedero Nuvola (5 tamaños - 4 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-nuvola-colores-surtidos.html" title="Comedero Nuvola (5 tamaños - 4 colores)"><b>Comedero Nuvola (5 tamaños - 4 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															3,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-nuvola-colores-surtidos.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3671/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Bonito comedero de diseño realizado en plástico rígido no tóxico. De bonitos colores y lavable en lavavajillas. Disponible en 4 colores y 5 medidas: 200ml, 300ml , 500ml, 750ml., 1 litro, 1.5 litro                    <a href="http://www.misterguau.com/index.php/comedero-nuvola-colores-surtidos.html" title="Comedero Nuvola (5 tamaños - 4 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-para-glotones-azul-o-rosa.html" title="Comedero para glotones (Azul)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_glotones_azul_65230.jpg"  alt="Comedero para glotones (Azul)" title="Comedero para glotones (Azul)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-para-glotones-azul-o-rosa.html" title="Comedero para glotones (Azul)"><b>Comedero para glotones (Azul)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-para-glotones-azul-o-rosa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3721/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero plástico muy resistente especialmente diseñado para que los perros perros más glotones lo tengan más difícil a la hora de engullir la comida. Gracias a sus protuberancias en la base, nuestro perro debería utilizar mas la lengua para conseguir sus croquetas, por lo que comerá más despacio, sintiéndose mas saciado y evitando posibles flatulencias o vómitos por comer deprisa. Disponible en azul. Medidas: Ø22,5 * 7 cm.                    <a href="http://www.misterguau.com/index.php/comedero-para-glotones-azul-o-rosa.html" title="Comedero para glotones (Azul)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-para-glotones-rojo.html" title="Comedero para glotones (Rojo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_glotones_rojo_65240.jpg"  alt="Comedero para glotones (Rojo)" title="Comedero para glotones (Rojo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-para-glotones-rojo.html" title="Comedero para glotones (Rojo)"><b>Comedero para glotones (Rojo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															7,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-para-glotones-rojo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4761/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero plástico muy resistente especialmente diseñado para que los perros perros más glotones lo tengan más difícil a la hora de engullir la comida. Gracias a sus protuberancias en la base, nuestro perro debería utilizar mas la lengua para conseguir sus croquetas, por lo que comerá más despacio, sintiéndose mas saciado y evitando posibles flatulencias o vómitos por comer deprisa. En rojo. Medidas: Ø22,5 * 7 cm.                    <a href="http://www.misterguau.com/index.php/comedero-para-glotones-rojo.html" title="Comedero para glotones (Rojo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-plastico-kristal-good-negro.html" title="Comedero plástico Kristal Good (Negro)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_kristal_good_negro_360ml_-_14cm_44500.jpg"  alt="Comedero plástico Kristal Good (Negro)" title="Comedero plástico Kristal Good (Negro)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-plastico-kristal-good-negro.html" title="Comedero plástico Kristal Good (Negro)"><b>Comedero plástico Kristal Good (Negro)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>22,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 13.56&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-plastico-kristal-good-negro.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5276/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de alta calidad con bajorelieve de una patita decorativa en el centro. Alta transparencia y elegancia. Lavable en lavavajillas. Colores frescos. Diseño anti-glotones. Medidas: 360ml - 14cm                    <a href="http://www.misterguau.com/index.php/comedero-plastico-kristal-good-negro.html" title="Comedero plástico Kristal Good (Negro)">Saber más</a><br><br>
					<span class="required"><strong>40% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-plastico-kristal-good-verde.html" title="Comedero plástico Kristal Good (Verde)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_kristal_good_verde_360ml_-_14cm_44502.jpg"  alt="Comedero plástico Kristal Good (Verde)" title="Comedero plástico Kristal Good (Verde)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-plastico-kristal-good-verde.html" title="Comedero plástico Kristal Good (Verde)"><b>Comedero plástico Kristal Good (Verde)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>22,60&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 13.56&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-plastico-kristal-good-verde.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5273/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de alta calidad con bajorelieve de una patita decorativa en el centro. Alta transparencia y elegancia. Lavable en lavavajillas. Colores frescos. Diseño anti-glotones. Medidas: 360ml - 14cm                    <a href="http://www.misterguau.com/index.php/comedero-plastico-kristal-good-verde.html" title="Comedero plástico Kristal Good (Verde)">Saber más</a><br><br>
					<span class="required"><strong>40% Dto exclusivo online! Ultimas unidades!<br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-puppy-azul.html" title="Comedero Puppy Azul">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_puppy_azul_1.jpg"  alt="Comedero Puppy Azul" title="Comedero Puppy Azul" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-puppy-azul.html" title="Comedero Puppy Azul"><b>Comedero Puppy Azul</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-puppy-azul.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1284/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable y con colores pastel y relieves de patitas. En color azul, para nuestro cachorro, gatito o hurón. Disponible en dos tamaños: S (0.16l) - M (0.45l).                    <a href="http://www.misterguau.com/index.php/comedero-puppy-azul.html" title="Comedero Puppy Azul">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-puppy-rosa.html" title="Comedero Puppy Rosa">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/comedero_puppy_rosa_3.jpg"  alt="Comedero Puppy Rosa" title="Comedero Puppy Rosa" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-puppy-rosa.html" title="Comedero Puppy Rosa"><b>Comedero Puppy Rosa</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															4,40&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-puppy-rosa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1283/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero realizado en acero inoxidable y con colores pastel y relieves de patitas. En color rosa, para nuestro cachorro, gatito o hurón. Disponible en dos tamaños: S (0.16l) - M (0.45l).                    <a href="http://www.misterguau.com/index.php/comedero-puppy-rosa.html" title="Comedero Puppy Rosa">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-smarty-cat-6-colores.html" title="Comedero Smarty Cat (6 colores)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/p/mp_comedero_smarty_gato.jpg"  alt="Comedero Smarty Cat (6 colores)" title="Comedero Smarty Cat (6 colores)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-smarty-cat-6-colores.html" title="Comedero Smarty Cat (6 colores)"><b>Comedero Smarty Cat (6 colores)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,15&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-smarty-cat-6-colores.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5444/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico rígido y con base antideslizante para un mejor agarre. Disponible en 6 colores. Medidas:  210ml (12cm x 3cm )                    <a href="http://www.misterguau.com/index.php/comedero-smarty-cat-6-colores.html" title="Comedero Smarty Cat (6 colores)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-smarty-celeste-4-medidas.html" title="Comedero Smarty Celeste (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_31_24.jpg"  alt="Comedero Smarty Celeste (4 medidas)" title="Comedero Smarty Celeste (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-smarty-celeste-4-medidas.html" title="Comedero Smarty Celeste (4 medidas)"><b>Comedero Smarty Celeste (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-smarty-celeste-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5410/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico rígido y con base antideslizante para un mejor agarre. Disponible en 4 medidas: T1 (315ml - 12x5cm) - T2 (735ml (16x7cm) - T3 (1245ml (19x8cm) - T4 (2200ml (23x10cm)                    <a href="http://www.misterguau.com/index.php/comedero-smarty-celeste-4-medidas.html" title="Comedero Smarty Celeste (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-smarty-gris-4-medidas.html" title="Comedero Smarty Gris (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_31_22.jpg"  alt="Comedero Smarty Gris (4 medidas)" title="Comedero Smarty Gris (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-smarty-gris-4-medidas.html" title="Comedero Smarty Gris (4 medidas)"><b>Comedero Smarty Gris (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-smarty-gris-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5408/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico rígido y con base antideslizante para un mejor agarre. Disponible en 4 medidas: T1 (315ml - 12x5cm) - T2 (735ml (16x7cm) - T3 (1245ml (19x8cm) - T4 (2200ml (23x10cm)                    <a href="http://www.misterguau.com/index.php/comedero-smarty-gris-4-medidas.html" title="Comedero Smarty Gris (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-smarty-marino-4-medidas.html" title="Comedero Smarty Marino (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_31_21.jpg"  alt="Comedero Smarty Marino (4 medidas)" title="Comedero Smarty Marino (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-smarty-marino-4-medidas.html" title="Comedero Smarty Marino (4 medidas)"><b>Comedero Smarty Marino (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-smarty-marino-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5407/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico rígido y con base antideslizante para un mejor agarre. Disponible en 4 medidas: T1 (315ml - 12x5cm) - T2 (735ml (16x7cm) - T3 (1245ml (19x8cm) - T4 (2200ml (23x10cm)                    <a href="http://www.misterguau.com/index.php/comedero-smarty-marino-4-medidas.html" title="Comedero Smarty Marino (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-smarty-naranja-4-medidas.html" title="Comedero Smarty Naranja (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_31_23.jpg"  alt="Comedero Smarty Naranja (4 medidas)" title="Comedero Smarty Naranja (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-smarty-naranja-4-medidas.html" title="Comedero Smarty Naranja (4 medidas)"><b>Comedero Smarty Naranja (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-smarty-naranja-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5409/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico rígido y con base antideslizante para un mejor agarre. Disponible en 4 medidas: T1 (315ml - 12x5cm) - T2 (735ml (16x7cm) - T3 (1245ml (19x8cm) - T4 (2200ml (23x10cm)                    <a href="http://www.misterguau.com/index.php/comedero-smarty-naranja-4-medidas.html" title="Comedero Smarty Naranja (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-smarty-rojo-4-medidas.html" title="Comedero Smarty Rojo (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_32_1.jpg"  alt="Comedero Smarty Rojo (4 medidas)" title="Comedero Smarty Rojo (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-smarty-rojo-4-medidas.html" title="Comedero Smarty Rojo (4 medidas)"><b>Comedero Smarty Rojo (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-smarty-rojo-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5440/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico rígido y con base antideslizante para un mejor agarre. Disponible en 4 medidas: T1 (315ml - 12x5cm) - T2 (735ml (16x7cm) - T3 (1245ml (19x8cm) - T4 (2200ml (23x10cm)                    <a href="http://www.misterguau.com/index.php/comedero-smarty-rojo-4-medidas.html" title="Comedero Smarty Rojo (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/comedero-smarty-verde-4-medidas.html" title="Comedero Smarty Verde (4 medidas)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_31_25.jpg"  alt="Comedero Smarty Verde (4 medidas)" title="Comedero Smarty Verde (4 medidas)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/comedero-smarty-verde-4-medidas.html" title="Comedero Smarty Verde (4 medidas)"><b>Comedero Smarty Verde (4 medidas)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/comedero-smarty-verde-4-medidas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5411/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Comedero de plástico rígido y con base antideslizante para un mejor agarre. Disponible en 4 medidas: T1 (315ml - 12x5cm) - T2 (735ml (16x7cm) - T3 (1245ml (19x8cm) - T4 (2200ml (23x10cm)                    <a href="http://www.misterguau.com/index.php/comedero-smarty-verde-4-medidas.html" title="Comedero Smarty Verde (4 medidas)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/conofite-forte.html" title="Conofite Forte (Otitis, dermatitis)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/conofite_forte_20ml_1001007.jpg"  alt="Conofite Forte (Otitis, dermatitis)" title="Conofite Forte (Otitis, dermatitis)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/conofite-forte.html" title="Conofite Forte (Otitis, dermatitis)"><b>Conofite Forte (Otitis, dermatitis)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															23,45&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/conofite-forte.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3734/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Antibacteriano antifúngico y antiinflamatorio esteroide en suspensión ótica. Tratamiento de las otitis e infecciones cutáneas de perros y gatos originadas por levaduras y hongos, bacterias grampositivos y bacterias gramnegativos. Otitis, dermatitis, tiña, eczema, seborrea, abscesos, piodermitis. Debe estar prescrito por su veterinario.  Formato: Cuentagotas 20ml                    <a href="http://www.misterguau.com/index.php/conofite-forte.html" title="Conofite Forte (Otitis, dermatitis)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/corazones-sabor-carne-para-gato-migat.html" title="Corazones sabor carne para gato MiGat">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/o/corazoncitos_sabor_carne_125gr_040301.jpg"  alt="Corazones sabor carne para gato MiGat" title="Corazones sabor carne para gato MiGat" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/corazones-sabor-carne-para-gato-migat.html" title="Corazones sabor carne para gato MiGat"><b>Corazones sabor carne para gato MiGat</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,65&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/corazones-sabor-carne-para-gato-migat.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4349/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Snack en forma de corazoncitos de diferentes colores y sabores. Muy apropiado para premiar a nuestro gato por su compañía y docilidad al tiempo que le proporcionamos un alimento rico en proteínas. Gratificantemente deliciosas y sabrosas.  Tamaño de los corazones pequeño: 1cm x 0.8cm. Formato: 125gr                    <a href="http://www.misterguau.com/index.php/corazones-sabor-carne-para-gato-migat.html" title="Corazones sabor carne para gato MiGat">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/correa-para-gato-baia-azul.html" title="Correa para gato Baia Azul">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/s/ms_correa_gato_baia_azul_610000.jpg"  alt="Correa para gato Baia Azul" title="Correa para gato Baia Azul" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/correa-para-gato-baia-azul.html" title="Correa para gato Baia Azul"><b>Correa para gato Baia Azul</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>12,80&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 8.96&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/correa-para-gato-baia-azul.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3464/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Correa de la colección Baia especialmente diseñada para collares y arneses de gatos. Muy colorido.   Realizado en suave nylon. Con enganche cromado. Collar y arnés disponibles. Moda francesa. Medidas:  (10mm*1m)                    <a href="http://www.misterguau.com/index.php/correa-para-gato-baia-azul.html" title="Correa para gato Baia Azul">Saber más</a><br><br>
					<span class="required"><strong>30% Dto exclusivo online! Ultimas unidades!<br></strong></span>

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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cortau-as-peque-o-para-perros-y-gatos-sandimas.html" title="Cortauñas pequeño para perros y gatos SanDimas">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_7.jpg"  alt="Cortauñas pequeño para perros y gatos SanDimas" title="Cortauñas pequeño para perros y gatos SanDimas" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cortau-as-peque-o-para-perros-y-gatos-sandimas.html" title="Cortauñas pequeño para perros y gatos SanDimas"><b>Cortauñas pequeño para perros y gatos SanDimas</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,90&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cortau-as-peque-o-para-perros-y-gatos-sandimas.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1686/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cortauñas con diseño especial para las uñas de nuestros pequeños animales. Especialmente indicado para perros pequeños y gatos. Con una hendidura en la parte central para asegurar la posición y cortar limpiamente la uña sin posibilidad de desgarros ni malos cortes. Formato; 1 unidad.                    <a href="http://www.misterguau.com/index.php/cortau-as-peque-o-para-perros-y-gatos-sandimas.html" title="Cortauñas pequeño para perros y gatos SanDimas">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cortau-as-topnature-peque-o.html" title="Cortauñas Topnature (Pequeño)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_30_48.jpg"  alt="Cortauñas Topnature (Pequeño)" title="Cortauñas Topnature (Pequeño)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cortau-as-topnature-peque-o.html" title="Cortauñas Topnature (Pequeño)"><b>Cortauñas Topnature (Pequeño)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>8,50&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 6.35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cortau-as-topnature-peque-o.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/4871/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cortauñas pequeño especial para perros de tamaño pequeño y mediano y gatos grandes. Con cierre de seguridad y muelle interior para ejercer un corte por presión controlado que mantenga totalmente segura a nuestra mascota. Con mango ergonómico antideslizante.                     <a href="http://www.misterguau.com/index.php/cortau-as-topnature-peque-o.html" title="Cortauñas Topnature (Pequeño)">Saber más</a><br><br>
					<span class="required"><strong>25% de Dto! Ahorra 2.15&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-cuadrada-cofee.html" title="Cuna Cuadrada fibra Coffee">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cuna_cuadrada-3-coffee_54x47x19cm..jpg"  alt="Cuna Cuadrada fibra Coffee" title="Cuna Cuadrada fibra Coffee" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-cuadrada-cofee.html" title="Cuna Cuadrada fibra Coffee"><b>Cuna Cuadrada fibra Coffee</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>31,50&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 28.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-cuadrada-cofee.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5623/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cuna mullida y cómoda para perros y gatos. Realizada en fibra en diversas tonalidades de marrón y con elementos decorativos relacionados con el café. Con cojín mullido en marrón. Medidas: T3 (54x47x19cm.) - T4 (60x52x19cm.)                    <a href="http://www.misterguau.com/index.php/cuna-cuadrada-cofee.html" title="Cuna Cuadrada fibra Coffee">Saber más</a><br><br>
					<span class="required"><strong>21% Dto en T3! Ahorra 6.55&euro;! <br><br>17% Dto en T4! Ahorra 5.95&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-cuadrada-fibra-garden.html" title="Cuna Cuadrada fibra Garden">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cuna_cuadrada-3-garden_54x47x19cm.jpg"  alt="Cuna Cuadrada fibra Garden" title="Cuna Cuadrada fibra Garden" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-cuadrada-fibra-garden.html" title="Cuna Cuadrada fibra Garden"><b>Cuna Cuadrada fibra Garden</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															27,95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-cuadrada-fibra-garden.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5436/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cuna mullida y cómoda para perros y gatos. Realizada en fibra en color beige con flores grandes rojas y rosas estampadas. Con cojín mullido en verde oscuro. Medidas: T3 (54x47x19cm.) - T4 (60x52x19cm.)                    <a href="http://www.misterguau.com/index.php/cuna-cuadrada-fibra-garden.html" title="Cuna Cuadrada fibra Garden">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-cuadrada-fibra-trinity.html" title="Cuna Cuadrada fibra Trinity">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cuna_cuadrada-3-trinity_54x47x19cm.jpg"  alt="Cuna Cuadrada fibra Trinity" title="Cuna Cuadrada fibra Trinity" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-cuadrada-fibra-trinity.html" title="Cuna Cuadrada fibra Trinity"><b>Cuna Cuadrada fibra Trinity</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>31,50&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 28.95&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-cuadrada-fibra-trinity.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5624/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cuna mullida y cómoda para perros y gatos. Realizada en fibra en diversas tonalidades de blanco y gris y con elementos decorativos relacionados con elementos de la calle (farolas, verjas, etc) . Con cojín mullido en negro. Medidas: T3 (54x47x19cm.) - T4 (60x52x19cm.)                    <a href="http://www.misterguau.com/index.php/cuna-cuadrada-fibra-trinity.html" title="Cuna Cuadrada fibra Trinity">Saber más</a><br><br>
					<span class="required"><strong>21% Dto en T3! Ahorra 6.55&euro;! <br><br>17% Dto en T4! Ahorra 5.95&euro;! <br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-cuore-san-valentin.html" title="Cuna Cuore San Valentín">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cuna_cuore_47x52x17cm_5555cu.jpg"  alt="Cuna Cuore San Valentín" title="Cuna Cuore San Valentín" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-cuore-san-valentin.html" title="Cuna Cuore San Valentín"><b>Cuna Cuore San Valentín</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															Antes: <s>29,95&euro;</s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ahora: 19.47&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-cuore-san-valentin.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5381/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Preciosa cuna con forma de corazón en color negro y cojín en forma de corazón en color rojo y afelpado. Demuestra a tu perro que lo adoras! Medidas: 47x52x17cm                    <a href="http://www.misterguau.com/index.php/cuna-cuore-san-valentin.html" title="Cuna Cuore San Valentín">Saber más</a><br><br>
					<span class="required"><strong>35% Dto exclusivo Tienda Online!<br><br></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-para-perro-gris-fcb-futbol-club-barcelona.html" title="Cuna para perro Gris Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_11_3.jpg"  alt="Cuna para perro Gris Barça (FCB - Futbol Club Barcelona)" title="Cuna para perro Gris Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-para-perro-gris-fcb-futbol-club-barcelona.html" title="Cuna para perro Gris Barça (FCB - Futbol Club Barcelona)"><b>Cuna para perro Gris Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															45,25&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-para-perro-gris-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3566/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Producto oficial del Fútbol Club Barcelona. Cuna realizada en algodón y micro-nylon. En elegante color gris con detalles azules, como el reborde o el cojín. Con el escudo del FCB cosido en la parte central. Medidas: T-1 (44*53*25cm), T-2 (53*67*25cm)                    <a href="http://www.misterguau.com/index.php/cuna-para-perro-gris-fcb-futbol-club-barcelona.html" title="Cuna para perro Gris Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-poliester-algodon-barca-fcb-futbol-club-barcelona.html" title="Cuna poliéster algodón Barça (FCB - Futbol Club Barcelona)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/c/u/cuna_fcb.jpg"  alt="Cuna poliéster algodón Barça (FCB - Futbol Club Barcelona)" title="Cuna poliéster algodón Barça (FCB - Futbol Club Barcelona)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-poliester-algodon-barca-fcb-futbol-club-barcelona.html" title="Cuna poliéster algodón Barça (FCB - Futbol Club Barcelona)"><b>Cuna poliéster algodón Barça (FCB - Futbol Club Barcelona)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															29,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-poliester-algodon-barca-fcb-futbol-club-barcelona.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/2025/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cuna realizada en algodón y poliester oficial del Futbol Club Barcelona. Con estampado azulgrana y el escudo del FCB en la parte central. Disponible en 3 medidas:  T2 (48*42*19cm) - T3 (54*47*19cm) - T4 (60*53*19cm)                    <a href="http://www.misterguau.com/index.php/cuna-poliester-algodon-barca-fcb-futbol-club-barcelona.html" title="Cuna poliéster algodón Barça (FCB - Futbol Club Barcelona)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-beige.html" title="Cuna rectangular Milu Nature (Beige)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_cuna_nature_beiget.jpg"  alt="Cuna rectangular Milu Nature (Beige)" title="Cuna rectangular Milu Nature (Beige)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-beige.html" title="Cuna rectangular Milu Nature (Beige)"><b>Cuna rectangular Milu Nature (Beige)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															61,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-beige.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5170/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cuna rectangular mullida y calentita de gran calidad con diseño exclusivo. Ideal para que nuestro perro o gato se sientan cómodos y protegidos. Con detalle de logo Milu bordado. Tejidos de primera calidad y costuras reforzadas. En color bicolor con dos texturas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Lavable a 30ºC. Medidas: T1 (50x40x26cm) - T2 (60x53x26cm) - T3 (75x61x26cm) - T4 (84x68x26cm)                    <a href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-beige.html" title="Cuna rectangular Milu Nature (Beige)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-negra.html" title="Cuna rectangular Milu Nature (Negra)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_cuna_nature_negro.jpg"  alt="Cuna rectangular Milu Nature (Negra)" title="Cuna rectangular Milu Nature (Negra)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-negra.html" title="Cuna rectangular Milu Nature (Negra)"><b>Cuna rectangular Milu Nature (Negra)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															61,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-negra.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5172/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cuna rectangular mullida y calentita de gran calidad con diseño exclusivo. Ideal para que nuestro perro o gato se sientan cómodos y protegidos. Con detalle de logo Milu bordado. Tejidos de primera calidad y costuras reforzadas. En color bicolor con dos texturas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Lavable a 30ºC. Medidas: T1 (50x40x26cm) - T2 (60x53x26cm) - T3 (75x61x26cm) - T4 (84x68x26cm)                    <a href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-negra.html" title="Cuna rectangular Milu Nature (Negra)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-rosa.html" title="Cuna rectangular Milu Nature (Rosa)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/m/i/milu_cuna_nature_rosa.jpg"  alt="Cuna rectangular Milu Nature (Rosa)" title="Cuna rectangular Milu Nature (Rosa)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-rosa.html" title="Cuna rectangular Milu Nature (Rosa)"><b>Cuna rectangular Milu Nature (Rosa)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															61,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-rosa.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5171/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Cuna rectangular mullida y calentita de gran calidad con diseño exclusivo. Ideal para que nuestro perro o gato se sientan cómodos y protegidos. Con detalle de logo Milu bordado. Tejidos de primera calidad y costuras reforzadas. En color bicolor con dos texturas. Acabados bien definidos y rellena de guata/espuma de alta densidad. Lavable a 30ºC. Medidas: T1 (50x40x26cm) - T2 (60x53x26cm) - T3 (75x61x26cm) - T4 (84x68x26cm)                    <a href="http://www.misterguau.com/index.php/cuna-rectangular-milu-nature-rosa.html" title="Cuna rectangular Milu Nature (Rosa)">Saber más</a><br><br>
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
      	          <a class="product-image" href="http://www.misterguau.com/index.php/dado-con-luz-fm.html" title="Dado con luz FM">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/a/dado_con_luz_504343_2.jpg"  alt="Dado con luz FM" title="Dado con luz FM" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/dado-con-luz-fm.html" title="Dado con luz FM"><b>Dado con luz FM</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,70&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/dado-con-luz-fm.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/1031/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dadito de goma que cuando rebota contra el suelo o paredes se ilumina durante unos segundos con una luz intensa parpadeante. Colores surtidos. Tamaño: 2x2cm                    <a href="http://www.misterguau.com/index.php/dado-con-luz-fm.html" title="Dado con luz FM">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/dentican-spray.html" title="Dentican spray dentífrico">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/e/dentican_spray_1.jpg"  alt="Dentican spray dentífrico" title="Dentican spray dentífrico" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/dentican-spray.html" title="Dentican spray dentífrico"><b>Dentican spray dentífrico</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															10,00&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/dentican-spray.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/879/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Dentrifico en spray para perros y gatos. Ofrece la formula mas innovadora y comoda para la higiene buco-dental de sus mascotas. Fácil aplicacion sin cepillar ni enjuagar. Su uso regular impide la proliferacion bacteriana y la formacion de la placa dental, su mineralizacion y la consiguiente formacion de sarro, neutralizando el mal aliento. Formato: 125ml.                    <a href="http://www.misterguau.com/index.php/dentican-spray.html" title="Dentican spray dentífrico">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/desodorante-en-polvo-deo-cat-bouquet.html" title="Desodorante en polvo Deo Cat Bouquet">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/e/deo_cat_-_bouquet_501066.jpg"  alt="Desodorante en polvo Deo Cat Bouquet" title="Desodorante en polvo Deo Cat Bouquet" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/desodorante-en-polvo-deo-cat-bouquet.html" title="Desodorante en polvo Deo Cat Bouquet"><b>Desodorante en polvo Deo Cat Bouquet</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/desodorante-en-polvo-deo-cat-bouquet.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3897/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena para gatos con polvo desodorante: absorbe cualquier olor desagradable y extiende un perfume agradable de flores por toda la gatera. Cada unidad contiene 15-20 dosis. Formato: 750gr                    <a href="http://www.misterguau.com/index.php/desodorante-en-polvo-deo-cat-bouquet.html" title="Desodorante en polvo Deo Cat Bouquet">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/desodorante-en-polvo-deo-cat-green-mountain.html" title="Desodorante en polvo Deo Cat Green Mountain">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/d/e/deo_cat_-_green_mountain_501065.jpg"  alt="Desodorante en polvo Deo Cat Green Mountain" title="Desodorante en polvo Deo Cat Green Mountain" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/desodorante-en-polvo-deo-cat-green-mountain.html" title="Desodorante en polvo Deo Cat Green Mountain"><b>Desodorante en polvo Deo Cat Green Mountain</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															8,35&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/desodorante-en-polvo-deo-cat-green-mountain.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3898/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Arena para gatos con polvo desodorante: absorbe cualquier olor desagradable y extiende un perfume agradable de hierba fresca por toda la gatera. Cada unidad contiene 15-20 dosis. Formato: 750gr                    <a href="http://www.misterguau.com/index.php/desodorante-en-polvo-deo-cat-green-mountain.html" title="Desodorante en polvo Deo Cat Green Mountain">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/espuma-de-champu-en-seco-vitacoat.html" title="Espuma de champú en seco Vitacoat">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/v/i/vitacoat_espuma_en_seco_150ml_as00126.jpg"  alt="Espuma de champú en seco Vitacoat" title="Espuma de champú en seco Vitacoat" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/espuma-de-champu-en-seco-vitacoat.html" title="Espuma de champú en seco Vitacoat"><b>Espuma de champú en seco Vitacoat</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															9,30&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/espuma-de-champu-en-seco-vitacoat.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/5238/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    El champú en seco de Vitacoat es una espuma de agradable perfume que limpia a la mascota sin la necesidad de usar agua. Este champú en seco es ideal para limpiar una zona en concreto, o bien para padres gestantes o cachorros que no se puedan mojar. También apto para gatos y gatitos. Formato: 150ml.                    <a href="http://www.misterguau.com/index.php/espuma-de-champu-en-seco-vitacoat.html" title="Espuma de champú en seco Vitacoat">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-cat-adult-pollo-3276.html" title="Eukanuba Cat Adult (Cordero)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_1_90.jpg"  alt="Eukanuba Cat Adult (Cordero)" title="Eukanuba Cat Adult (Cordero)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-cat-adult-pollo-3276.html" title="Eukanuba Cat Adult (Cordero)"><b>Eukanuba Cat Adult (Cordero)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-cat-adult-pollo-3276.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3276/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Eukanuba Adult con Cordero e Hígado comida para gatos es una comida seca completa para gatos a partir de primer año de vida. Estabiliza y refuerza el sistema inmunitario gracias al contenido optimó de vitamina E. Fomenta las funciones des sistema urinario; disminuye el valor del pH urinario; contiene pequeñas cantidades de magnesio. Alimento único para gatos adultos. Formatos: 400gr, 2Kg.                    <a href="http://www.misterguau.com/index.php/eukanuba-cat-adult-pollo-3276.html" title="Eukanuba Cat Adult (Cordero)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-cat-adult-pollo.html" title="Eukanuba Cat Adult (Pollo)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_1_89.jpg"  alt="Eukanuba Cat Adult (Pollo)" title="Eukanuba Cat Adult (Pollo)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-cat-adult-pollo.html" title="Eukanuba Cat Adult (Pollo)"><b>Eukanuba Cat Adult (Pollo)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															5,99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-cat-adult-pollo.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3275/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Eukanuba Adult con Pollo e Hígado comida para gatos es una comida seca completa con un alto valor nutritivo para gatos adultos, con grandes porciones de carne. Con grandes porciones de Pollo e Hígado es una comida para gatos equilibrada y especialmente de gran calidad con proteínas de pollo fácilmente digestibles. Estabiliza y refuerza el sistema inmunitario gracias al contenido óptimo de vitamina E. Formatos: 400gr, 2Kg.                    <a href="http://www.misterguau.com/index.php/eukanuba-cat-adult-pollo.html" title="Eukanuba Cat Adult (Pollo)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-cat-hairball.html" title="Eukanuba Cat Hairball">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/euk_gato_ad_hairball.jpg"  alt="Eukanuba Cat Hairball" title="Eukanuba Cat Hairball" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-cat-hairball.html" title="Eukanuba Cat Hairball"><b>Eukanuba Cat Hairball</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,49&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-cat-hairball.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3278/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Eukanuba Adult Hairball comida para gatos es una comida seca con grandes porciones de pollo para gatos adultos, reduce la formación de bolas de pelo. Alimento completo para los gatos adultos. Reduce la formación de bolas de pelo y es especialmente apropiado para los gatos que viven en casa. Formatos: 400gr, 2Kg.                    <a href="http://www.misterguau.com/index.php/eukanuba-cat-hairball.html" title="Eukanuba Cat Hairball">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-cat-kitten.html" title="Eukanuba Cat Kitten">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_1_88.jpg"  alt="Eukanuba Cat Kitten" title="Eukanuba Cat Kitten" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-cat-kitten.html" title="Eukanuba Cat Kitten"><b>Eukanuba Cat Kitten</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,49&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-cat-kitten.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3274/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Eukanuba Kitten comida para gatos es un alimento seco completo con grandes porciones de pollo e hígado, para gatos cachorros. Eukanuba Kitten con pollo e hígado ayuda a cubrir las altas demandas energéticas del gato cachorro estabiliza y fortalece el sistema inmunitario gracias al contenido óptimo de vitamina E es un alimento único completo, tanto para gatos cachorros como para gatas embarazadas y lactantes. Formatos: 400gr, 2Kg.                    <a href="http://www.misterguau.com/index.php/eukanuba-cat-kitten.html" title="Eukanuba Cat Kitten">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-cat-light-sterilised.html" title="Eukanuba Cat Light - Sterilised">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/euk_gato_ad_light-sterilizados.jpg"  alt="Eukanuba Cat Light - Sterilised" title="Eukanuba Cat Light - Sterilised" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-cat-light-sterilised.html" title="Eukanuba Cat Light - Sterilised"><b>Eukanuba Cat Light - Sterilised</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,49&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-cat-light-sterilised.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3277/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Eukanuba Adult Light con Pollo e Hígado comida seca para gatos es un alimento completo con grandes porciones de pollo e hígado. Desarrollado para controlar el peso del gato; apropiado para la alimentación diaria. Las funciones del sistema urinario se mantienen estables; disminuye el valor del pH urinario; contiene magnesio en pequeñas cantidades. Único alimento para gatos adultos con tendencia al sobrepeso. Formatos: 400gr, 1.5Kg.                    <a href="http://www.misterguau.com/index.php/eukanuba-cat-light-sterilised.html" title="Eukanuba Cat Light - Sterilised">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-cat-senior.html" title="Eukanuba Cat Senior">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/euk_gato_senior_pollo.jpg"  alt="Eukanuba Cat Senior" title="Eukanuba Cat Senior" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-cat-senior.html" title="Eukanuba Cat Senior"><b>Eukanuba Cat Senior</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															6,99&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-cat-senior.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/3279/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Eukanuba Senior alimento para gatos es un pienso completo con gran cantidad de pollo. Para gatos adultos a partir de los 11 años. Con grandes porciones de pollo e hígado. Con una cantidad adecuada de proteínas que fortalecen la musculatura. Estabiliza y fortalece el sistema inmunitario gracias a la combinación óptima de antioxidantes específicos de luteína y vitamina E. Alimento completo especial para gatos ancianos. Formatos: 400gr, 2Kg.                    <a href="http://www.misterguau.com/index.php/eukanuba-cat-senior.html" title="Eukanuba Cat Senior">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-vd-cat-dermatosis-lata-peq.html" title="Eukanuba VD Cat Dermatosis (Lata)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/euka_dermatosis_cat_lata.jpg"  alt="Eukanuba VD Cat Dermatosis (Lata)" title="Eukanuba VD Cat Dermatosis (Lata)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-dermatosis-lata-peq.html" title="Eukanuba VD Cat Dermatosis (Lata)"><b>Eukanuba VD Cat Dermatosis (Lata)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-vd-cat-dermatosis-lata-peq.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/302/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Alimento para el control nutricional de los procesos inflamatorios de la piel en gatos. Indicaciones: Alergia/intolerancia alimentaria - Alergia a la picadura de pulga - Atopia - Enfermedad inflamatoria intestinal - Otros procesos inflamatorios de la piel.  Este alimento debe estar prescrito por su veterinario. Formato: 170gr.                    <a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-dermatosis-lata-peq.html" title="Eukanuba VD Cat Dermatosis (Lata)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-vd-cat-intestinal.html" title="Eukanuba VD Cat Intestinal">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/eukanuba_intestinal_cat.jpg"  alt="Eukanuba VD Cat Intestinal" title="Eukanuba VD Cat Intestinal" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-intestinal.html" title="Eukanuba VD Cat Intestinal"><b>Eukanuba VD Cat Intestinal</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															17,60&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-vd-cat-intestinal.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/306/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Diseñado para ayudar a controlar las condiciones gastrointestinales mediante la nutrición. Indicado para cuando su mascota experimente vómitos, diarrea, gases o estreñimiento. Debe estar prescrito por su veterinario. Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-intestinal.html" title="Eukanuba VD Cat Intestinal">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-vd-cat-intestinal-lata.html" title="Eukanuba VD Cat Intestinal (lata)">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/eukanuba_intestinal_cat_lata.jpg"  alt="Eukanuba VD Cat Intestinal (lata)" title="Eukanuba VD Cat Intestinal (lata)" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-intestinal-lata.html" title="Eukanuba VD Cat Intestinal (lata)"><b>Eukanuba VD Cat Intestinal (lata)</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															2,05&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-vd-cat-intestinal-lata.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/307/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Diseñado para ayudar a controlar las condiciones gastrointestinales mediante la nutrición. Indicado para cuando su mascota experimente vómitos, diarrea, gases o estreñimiento. Debe estar prescrito por su veterinario. Formato: 170gr                    <a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-intestinal-lata.html" title="Eukanuba VD Cat Intestinal (lata)">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-vd-cat-oxalate-urinary.html" title="Eukanuba VD Cat Oxalate Urinary">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/eukanuba_oxalate_urinary.jpg"  alt="Eukanuba VD Cat Oxalate Urinary" title="Eukanuba VD Cat Oxalate Urinary" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-oxalate-urinary.html" title="Eukanuba VD Cat Oxalate Urinary"><b>Eukanuba VD Cat Oxalate Urinary</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-vd-cat-oxalate-urinary.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/317/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Indicado para para controlar los cristales de estruvita y de oxalato de calcio mediante la nutrición. Alimentar a su gato con Eukanuba Oxalate Urinary Formula, que produce una orina menos ácida, ayuda a crear un entorno que reduce la formación de oxalato de calcio. Debe estar prescrito por su veterinario. Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-oxalate-urinary.html" title="Eukanuba VD Cat Oxalate Urinary">Saber más</a><br><br>
					<span class="required"><strong></strong></span>

                </div>

				</td></tr></table>
            </li>
                    <li class="item last">
                <table width="100%"><tr><td>
      	          <a class="product-image" href="http://www.misterguau.com/index.php/eukanuba-vd-cat-renal-formula.html" title="Eukanuba VD Cat Renal Formula">
                    <img src="http://www.misterguau.com/media/catalog/product/cache/1/small_image/120x/9df78eab33525d08d6e5fb8d27136e95/e/u/eukanuba_renal_formula_cat.jpg"  alt="Eukanuba VD Cat Renal Formula" title="Eukanuba VD Cat Renal Formula" /></a>
    </td><td>
                                <div class="product-shop">
                    <h3 class="product-name"><a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-renal-formula.html" title="Eukanuba VD Cat Renal Formula"><b>Eukanuba VD Cat Renal Formula</b></a></h3>
                                        <div class="clear"></div>
					<table border="0" width="420px"><tr><td valign="middle"  style="padding-top:10px;">
 <div class="price-box"> Desde solo:
                                                            <span class="regular-price" id="product-price-1"><span class="price">

															18,20&euro;
															<br>


															</span></span>


        </div></td><td valign="middle" style="padding-top:10px;">




                                        <p><button class="button" onclick="setLocation('http://www.misterguau.com/index.php/eukanuba-vd-cat-renal-formula.html?options=cart')"><span><span><span>Añadir al carrito</span></span></span></button></p>
                    					</td>
					<td style="padding-top:17px;padding-left:10px;" align="right">

                    					<table><tr><td>

														<td>


														<!--img src="http://www.misterguau.com/tienda/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;-->
														<img src="http://www.misterguau.com/media/Mis Favoritos.png" align="bottom" border="0">&nbsp;&nbsp;
														</td><td nowrap>

                                                        <a href="http://www.misterguau.com/index.php/wishlist/index/add/product/324/"><font size="1">Añadir a favoritos</font></a>
														</td></tr></table>

                    
				</td>
					</tr></table>
                </div>
                <div class="clear"></div>
                <div class="desc std">
                    Diseñado para satisfacer las necesidades nutricionales de su gato cuando el veterinario diagnostica insuficiencia renal. Proporciona las cantidades apropiadas de proteínas para mantener el estado de salud general de su gato y contiene ingredientes especiales para minimizar la acumulación de residuos en el torrente sanguíneo. Debe estar prescrito por su veterinario. Formato: 1.5Kg                    <a href="http://www.misterguau.com/index.php/eukanuba-vd-cat-renal-formula.html" title="Eukanuba VD Cat Renal Formula">Saber más</a><br><br>
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
                            Artículos 1 a 200 de 663 totales                    </p>

        <div class="limiter">
            <label>Mostrar</label>
            <select onchange="setLocation(this.value)">
                            <option value="http://www.misterguau.com/index.php/gatos.html?limit=200" selected="selected">
                    200                </option>
                            <option value="http://www.misterguau.com/index.php/gatos.html?limit=all">
                    Todo                </option>
                        </select> por página        </div>

        
    
    
    
        <div class="pages">
        <strong>Página:</strong>
        <ol>
        
        
        
                                    <li class="current">1</li>
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html?p=2">2</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html?p=3">3</a></li>
                                                <li><a href="http://www.misterguau.com/index.php/gatos.html?p=4">4</a></li>
                    

        
        
                    <li>
                <a class="next" href="http://www.misterguau.com/index.php/gatos.html?p=2" title="Siguiente">
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
                    		            <option value="http://www.misterguau.com/index.php/gatos.html?dir=asc&amp;order=position">
            
                Mejor valor            </option>
        				            <option value="http://www.misterguau.com/index.php/gatos.html?dir=asc&amp;order=price">
            
                Precio            </option>
        				            <option value="http://www.misterguau.com/index.php/gatos.html?dir=asc&amp;order=name" selected="selected">
            
                Nombre            </option>
        		        </select>
                            <a href="http://www.misterguau.com/index.php/gatos.html?dir=desc&amp;order=name" title="Configurar sentido descendente"><img src="http://www.misterguau.com/skin/frontend/base/default/images/i_asc_arrow.gif" alt="Configurar sentido descendente" class="v-middle" /></a>
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

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=409">
				<img src="http://69.160.51.167/media/catalog/attribute/acana_logo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=286">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_advance.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=285">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_advance_vetdiet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=358">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_artero.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=312">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_biozoo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=300">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_bayer.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=329">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_brekkies.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=378">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_cani_amici.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=396">
				<img src="http://69.160.51.167/media/catalog/attribute/logo_cat_chow.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=299">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_cunipic.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=388">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_esteve.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=282">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_eukanuba.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=281">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_eukanuba_vetdiet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=353">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_barcelona.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=372">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_felix.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=316">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo_1.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=280">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_friskies.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=296">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_gimpet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=279">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_gourmet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=278">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_hills_1.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=294">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_hills_vetdiet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=277">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_hobbitalf.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=276">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_iams.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=311">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_karlie-flamingo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=292">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_Kong.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=369">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_libra.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=405">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_mc.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=367">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_martinSellier.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=291">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_merial.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=401">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_migat.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=385">
				<img src="http://69.160.51.167/media/catalog/attribute/Milu.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=314">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_nayeco.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=290">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_novartis.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=408">
				<img src="http://69.160.51.167/media/catalog/attribute/orijen_logo.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=330">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_petsafe.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=384">
				<img src="http://69.160.51.167/media/catalog/attribute/Proline_Petfood.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=288">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_purina.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=406">
				<img src="http://69.160.51.167/media/catalog/attribute/REDDINGO_MARCA.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=273">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_royal.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=272">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_royal_vetdiet.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=310">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_sandimas.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=407">
				<img src="http://69.160.51.167/media/catalog/attribute/Sanytol_marca.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=270">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_sheba.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=389">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_stangest.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=366">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_topnature_all.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=364">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_topnature_cat.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=303">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_varios.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=398">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_vibrisse.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=302">
				<img src="http://69.160.51.167/media/catalog/attribute/virbac.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=403">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_vitacoat.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=268">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_vitakraft.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=267">
				<img src="http://69.160.51.167/media/catalog/attribute/marca_whiskas.jpg" />
			</a>
		</li>
				<li>

			<a href="http://www.misterguau.com/index.php/gatos.html?manufacturer=304">
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
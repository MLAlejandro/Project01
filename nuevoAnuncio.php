<?php
session_start();

if(isset ($_SESSION['nombre'])){
	$logejat=1;



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<title>Crear una nueva cuenta de cliente</title>
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
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/js/calendar/calendar-win2k-1.css" />
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
<script type="text/javascript" src="http://www.misterguau.com/js/calendar/calendar.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/calendar/calendar-setup.js"></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://www.misterguau.com/skin/frontend/blank/theme048/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://www.misterguau.com/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://www.misterguau.com/js/varien/iehover-fix.js"></script>
<![endif]-->

<script type="text/javascript">
//<![CDATA[
optionalZipCountries = [];
//]]>
</script>
<script type="text/javascript">var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use numbers only in this field. please avoid spaces or other characters such as dots or commas.":"Por favor, use s\u00f3lo n\u00fameros en este campo. Evite espacios u otros caracteres como puntos y comas.","Please use letters only (a-z) in this field.":"Por favor, use s\u00f3lo letras (a-z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) en este campo. No se permiten espacios ni otros caracteres.","Please use only letters (a-z) or numbers (0-9) or spaces and # only in this field.":"Por favor, use s\u00f3lo letras (a-z) o n\u00fameros (0-9) o espacios y # en este campo.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters.":"Por favor, escriba 6 o m\u00e1s caracteres.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. http:\/\/ is required":"Por favor, escriba una ULR v\u00e1lida. http:\/\/ es obligatorio","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter valid password.":"Por favor, escriba una contrase\u00f1a v\u00e1lida.","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Error: Passwords do not match":"Error: Las contrase\u00f1as no coinciden","Your order can not be completed at this time as there is no shipping methods available for it. Please make necessary changes in your shipping address.":"Su pedido no puede completarse en este momento ya que no existen m\u00e9todos de env\u00edo disponibles. Por favor, realice los cambios necesarios en la direcci\u00f3n de env\u00edo.","Please specify shipping method.":"Por favor, especifique m\u00e9todo de env\u00edo.","Please specify payment method.":"Por favor, especifique forma de pago.","Your session has been expired, you will be relogged in now.":"Su sesi\u00f3n ha expirado. Tendr\u00e1 que ingresar nuevamente.","Incorrect credit card expiration date":"Fecha de caducidad de la tarjeta de cr\u00e9dito incorrecta"});</script>
</head>
<body class=" customer-account-create">
<div class="wrapper">
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
  <div style="height:6px; background-color:#000;margin-bottom:10px;"></div>        <div class="main col1-layout">
                        <div class="col-main">
                                    <script type="text/javascript">
<!--

function validate_form ( )
{
    valid = true;

 if  ( document.form.acepto.checked == false )

    {
        alert ( "Al no aceptar los t�rminos de uso y protecci�n de datos, no podemos procesar su registro" );
        valid = false;
    }

    return valid;
}

//-->
</script>

<div class="main-block">
								<div class="border-bot">
									<div class="border-left">
										<div class="border-right">
											<div class="corner-left-top">
												<div class="corner-right-top">
													<div class="corner-left-bot">
														<div class="corner-right-bot">
															<div class="full-width">    <div class="page-title">
        <div class="title-block">
								<div class="border-left">
									<div class="border-right">
										<div class="border-top">
										<div class="border-top">
											<div class="corner-left-top">
												<div class="corner-right-top">        	<h2>Crear nuevo anuncio</h2>
    	</div>
											</div>
										</div>
									</div>
								</div>
							</div>    </div>
    <div class="pages-indent">
		<form action="index.php" method="post" id="form-validate" onsubmit="return validate_form ( );">
            <fieldset class="group-select">
				<input type="hidden" name="nouA" value="" />
				<h3>Información básica del anuncio</h3>
				<ul>
					<li>
						<div class="customer-name-prefix-middlename" >
							<div class="input-box name-firstname" style="float:left;margin-bottom: 15px;">
								<label for="firstname">Título<span class="required">*</span></label><br />
								<!-- 2011-11-23-fr <input type="text" id="firstname" name="firstname" value="" title="Nombre" class="input-text required-entry"  style="width:100px;float:left;"/> -->
								<input type="text" name="anu_nom" value="" class="input-text required-entry"  />
							</div><br /><br /><br /><br />
						</div>
					</li>
					<li>
						<div class="input-box">
							<label for="email_address">Descripcion breve <span class="required">*</span></label><br />
							<input type="text" name="anu_contingut"  value="" class="input-text required-entry" />
							
							</div>
							<div class="input-box">
							<label for="email_address">Municipio <span class="required">*</span></label><br />
							<select name="municipi" class="input-text required-entry">
									<option value="">Todo el territorio</option>
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
								</select>
						</div>
						<div class="input-box">
                            <label for="password">Fecha <span class="required">*</span></label><br />
                            <input type="date" name="fecha" id="password" title="Contraseña" class="input-text required-entry validate-password" />
                        </div>

					</li>
					<li></li>
				</ul>
            </fieldset>
            <fieldset class="group-select">
                <h3>Información del animal</h3>
                <ul>
                    <li>
                        <div class="input-box">
                            <label for="password">Tipo <span class="required">*</span></label><br />
                            <select name="animal" class="input-text required-entry">
								<option value="">Todos los animales</option>
								<option value="1">Perro</option>
								<option value="2">Gato</option>
								<option value="3">Pajaro</option>
								<option value="4">Otros</option>
							</select>
                        </div>
                        <div class="input-box">
                            <label for="confirmation">Raza (si la sabes) </label><br />
                            <input type="text" name="raza" title="Confirmar la contraseña" id="confirmation" class="input-text" />
                        </div>
                    </li>
                </ul>
            </fieldset><br>
			

			<input type="radio" name="tipo" title="Perdido" value="Perdido" id="allow_privacy" checked="checked"/>
			<label>	Perdido		</label>
			<input type="radio" name="tipo" title="Encontrado" value="Encontrado" id="allow_privacy"/>
			<label>	Encontrado		</label>
			<p class="required">* Campos requeridos</p>
			<div class="buttons-set">
				<button class="button" name="registro" type="submit"><span><span><span>Enviar</span></span></span></button>
			</div>
        </form>
    </div>
</div>
						 								</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><script type="text/javascript">
//<![CDATA[
    var dataForm = new VarienForm('form-validate', true);
    //]]>
</script>
<script type="text/javascript">
//<![CDATA[
enUS = {"m":{"wide":["January","February","March","April","May","June","July","August","September","October","November","December"],"abbr":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}}; // en_US locale reference
Calendar._DN = ["domingo","lunes","martes","mi\u00e9rcoles","jueves","viernes","s\u00e1bado"]; // full day names
Calendar._SDN = ["dom","lun","mar","mi\u00e9","jue","vie","s\u00e1b"]; // short day names
Calendar._FD = 1; // First day of the week. "0" means display Sunday first, "1" means display Monday first, etc.
Calendar._MN = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"]; // full month names
Calendar._SMN = ["ene","feb","mar","abr","may","jun","jul","ago","sep","oct","nov","dic"]; // short month names
Calendar._am = "a.m."; // am/pm
Calendar._pm = "p.m.";

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "Acerca del calendario";

Calendar._TT["ABOUT"] =
"Selector DHTML Fecha/Tiempo\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" +
"La última versión visitada: http://www.dynarch.com/projects/calendar/\n" +
"Distribuido con licencia GNU LGPL. Ver http://gnu.org/licenses/lgpl.html para más detalles" +
"\n\n" +
"Selección  de fecha:\n" +
"-Utiliza \xab, \xbb selecciona el año\n" +
"Utiliza " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " para seleccionar el mes\n" +
"- Mantenga el botón del ratón sobre cualquiera de los botones de arriba para acelerar la selección.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Tiempo de selección:\n" +
"- Click en cualquier parte para incrementar\n" +
"- o Shift-click para disminuir\n" +
"- o  clicar y arrastrar para acelerar la selección.";

Calendar._TT["PREV_YEAR"] = "Visualizar año";
Calendar._TT["PREV_MONTH"] = "Visualizar mes";
Calendar._TT["GO_TODAY"] = "Ir hoy";
Calendar._TT["NEXT_MONTH"] = "El mes que viene";
Calendar._TT["NEXT_YEAR"] = "El próximo año";
Calendar._TT["SEL_DATE"] = "Seleccionar fecha";
Calendar._TT["DRAG_TO_MOVE"] = "Arrastrar para mover";
Calendar._TT["PART_TODAY"] = ' (' + "hoy" + ')';

// the following is to inform that "%s" is to be the first day of week
Calendar._TT["DAY_FIRST"] = "Mostrar %s primero";

// This may be locale-dependent. It specifies the week-end days, as an array
// of comma-separated numbers. The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Cerrar";
Calendar._TT["TODAY"] = "hoy";
Calendar._TT["TIME_PART"] = "(Shift-) Clicar o arrastrar para cambiar el valor";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%d\/%m\/%Y";
Calendar._TT["TT_DATE_FORMAT"] = "%e '%ee' %B '%ee' %Y";

Calendar._TT["WK"] = "semana";
Calendar._TT["TIME"] = "Tiempo:";
//]]>
</script>
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
<?php
}else{
	header("Location: index.php");
	die();
}

?>
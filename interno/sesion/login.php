<?
session_start();
if(isset($SESSION)){
header("location:../../certificados.php"); 
} else { 
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <title>Descargas :: Biomedic :: Equipamiento para cardiología. ECG :: Holter :: Ergometría.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Contacte a Biomedic. Somos fabricantes de Equipamiento para cardiología. Equipo ECG. Equipo Holter. Equipamiento médico." >
	<meta name="keywords" content="Holter, Equipo para ECG, Equipo para ECG veterinario, Ergometría, Equipamiento cardiológico" >
        <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" >
        <link href="../../css/socicon.css" rel="stylesheet" type="text/css" media="all" >
	    <link href="../../css/iconsmind.css" rel="stylesheet" type="text/css" media="all" >  
	    <link href="../../css/font-awesome.css" rel="stylesheet" type="text/css" media="all" >
        <link href="../../css/interface-icons.css" rel="stylesheet" type="text/css" media="all" >
        <link href="../../css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" >
        <link href="../../css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" >
        <link href="../../css/estiloB.css" rel="stylesheet" type="text/css" media="all" >
        <link href="../../css/custom.css" rel="stylesheet" type="text/css" media="all" >
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
 
   </head>
    <body class="scroll-assist">
        <a id="top"></a>
        <div class="loader"></div>
        <nav class="transition--fade">
            <div class="utility-bar bg--secondary">
                <div class="nav-module left">
                    <span class="type--fine-print">Biomedic</span>
                </div>
                <div class="nav-module left">
                    <span class="type--fine-print">1177139685</span>

                </div>
                <div class="nav-module right hidden-xs">
                    <ul class="social-list">
                        <li>
                            <a href="mailto:info@biomedic.com.ar">
                                <i class="glyphicon glyphicon-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/BiomedicSA" target="_blank">
                                <i class="socicon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/biomedicsrl/" target="_blank">
                                <i class="socicon-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-bar" data-fixed-at="200">
                <div class="nav-module logo-module left">
                    <a href="../../index.html">
                        <img class="logo logo-dark" alt="logo" src="../../img/logo.png" />
                        <img class="logo logo-light" alt="logo" src="../../img/logoBlanco.png" />
                    </a>
                </div>
                <div class="nav-module menu-module left">
                                        <ul class="menu">
                        <li><a href="../../index.html">Inicio </a></li>
                        <li><a href="../../quienesSomos.html">Quienes Somos</a></li>
                        <li class="dropdown">
                                    <a href="#">Catálogo de Productos</a>
	                                    <ul>
	                                        <li><a href="../../productos.html">Equipos para Cardiología</a></li>
											<li><a href="../../accesorios.html">Accesorios</a></li>
											<li><a href="../../insumos.html">Insumos</a></li>
											<li>
											<a href="../../equiposVeterinaria.html">Linea Veterinaria</a></li>
	                                    </ul>
                        </li>
                        <li><a href="../../contacto.html">Contacto</a></li>
                    </ul>

                </div>
                <!--end nav module-->
            </div>
            <!--end nav bar-->
            <div class="nav-mobile-toggle visible-sm visible-xs">
                <i class="fa fa-bars icon--sm"></i>
            </div>
        </nav>
 
        <div class="main-container transition--fade">
            
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                        		<h2>Identificación de usuarios</h2>
                        		<h5>Acceso a sección de DESCARGAS</h5>
                        </div>
                    </div>

                <form action="../../comprueba.php" method="post">
                    <div class="row justify-content-center"> 
                        <div class="col-12 col-lg-6 wow fadeIn text-center">
                            <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                                <div>
                                    <div class="mx-0"></div>
                                    <input type="text"name="login" value="Login: *" onmouseover="if(this.value=='Login: *')this.value='';this.focus();" onblur="if(this.value=='')this.value='Login: *';"   placeholder="Usuario*" class="input-bg" required><br>
                                    <input type="password" name="pass" placeholder="Contraseña*" class="input-bg" required><br>
                                    <button type="submit" class="btn btn-small border-radius-4 btn-black">INGRESAR</button><br><br>
                                </div>
                                 <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Si Ud no cuenta aun con usuario y clave, envie un email a <a href="mailto:info@biomedic.com.ar">info@biomedic.com.ar</a></div> 
                           </div>
                        </div>
                    </div>
                </form>
                </div>
            </section>
 
            <footer class="bg--dark footer-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <img alt="Biomedic" class="logo" src="../../img/logoBlanco.png" title="Biomedic" />
                            <br><br>
                            <img src="../../img/Logo_ANMAT.png" alt="ANMAT" height="40px">
                            
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h5>Oficina Comercial</h5>
                            <p>
                                                              <em>Av Hipolito Yrigoyen 1299 <br>Esquina La Roche<br>Morón, CP 1708 <br> Buenos Aires - Argentina</em>
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h5>Contáctenos</h5>
                            <p><em><i class="fa fa--xs fa-phone"></i>&nbsp;&nbsp;&nbsp;1177139685<br>
                             								<i class="fa fa--xs fa-envelope-open"></i>&nbsp;&nbsp;&nbsp;<a href="../../info@biomedic.com.ar">info@biomedic.com.ar</a></em></p>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
                <div class="footer__lower">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 text-center-xs">
                                <span class="type--fine-print">Desarrollo: <a href="http://www.aldeaglobal.com.ar" target="_blank">Aldea Global</a></span>
                            </div>
                            <div class="col-sm-4 text-right text-center-xs">
                                <ul class="social-list">
                                <li>
                                    <a href="https://www.facebook.com/BiomedicSA" target="_blank">
                                        <i class="socicon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/biomedicsrl/" target="_blank">
                                        <i class="socicon-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            </div>
                            <div class="col-sm-2 text-right text-center-xs">
                                <a href="#top" class="inner-link top-link">
                                    <i class="interface-up-open-big"></i>
                                </a>                            
                           </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of container-->
                </div>
            </footer>
        </div>
        <script src="../../js/jquery-2.1.4.min.js"></script>
        <script src="../../js/isotope.min.js"></script>
        <script src="../../js/ytplayer.min.js"></script>
        <script src="../../js/easypiechart.min.js"></script>
        <script src="../../js/owl.carousel.min.js"></script>
        <script src="../../js/lightbox.min.js"></script>
        <script src="../../js/twitterfetcher.min.js"></script>
        <script src="../../js/smooth-scroll.min.js"></script>
        <script src="../../js/scrollreveal.min.js"></script>
        <script src="../../js/parallax.js"></script>
        <script src="../../js/scripts.js"></script>
    </body>
</html>
<?
} /* Y cerramos el else */ 
?>


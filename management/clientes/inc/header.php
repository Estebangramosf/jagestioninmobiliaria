<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}   
$agregarServicio = "";
if (isset($_SESSION['sesionActiva'])&&($_SESSION['tipoSesion']=="1"||$_SESSION['tipoSesion']=="10")) { 
  $tipoSesion = "";
  if($_SESSION['tipoSesion']=="10"){
    $tipoSesion="clientes";
  }elseif ($_SESSION['tipoSesion']=="1") {
    $tipoSesion="managers";
  }  
  $agregarServicio = '
                        <li class="divider"></li>
                        <li><a href="../'.$tipoSesion.'/agregar-servicio.php">+ Agregar</a></li>
  '; 
} 
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="es"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">     
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $tituloPagina; ?></title>        
    <link rel="icon" type="image/png" href="img/FAVICON.png" height=25% width=25% style="z-index: 1030;" />
    <!-- Carga de hojas de estilo -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <base href=""></base>  
    <!-- Fin carga de hojas de estilo -->
    <style>
      body {
        padding-top: 50px;
        padding-bottom: 40px;
      }
    </style>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'><!-- fuentes -->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- Script del pluguin jQuery -->        
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Fin Script del pluguin jQuery -->
    <!-- Script del pluguin facebook -->
    <div id="fb-root"></div>
      <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        static function validaRut ( $rutCompleto ) {
          if ( !preg_match("/^[0-9]+-[0-9kK]{1}/",$rutCompleto)) return false;
          $rut = explode('-', $rutCompleto);
          return strtolower($rut[1]) == Helper::dv($rut[0]);
        }
        static function dv ( $T ) {
          $M=0;$S=1;
          for(;$T;$T=floor($T/10))
            $S=($S+$T%10*(9-$M++%6))%11;
          return $S?$S-1:'k';
        }        

      </script>
        <!-- Fin Script del pluguin facebook -->
  </head>
  <body id="body" class="fuentesInfo">
    <header class="container">  
      <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- boton que muestra campos de email -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="../../index.php"><article class="navbar-brand"><img src="img/LOGOJA.png" WIDTH="100" HEIGHT="65"></article></a>                                
            <!-- <a class="navbar-brand" href="index.php">Gesti&oacute;n Inmobiliaria</a> -->
          </div>
          <div id="navbar" class="navbar-collapse collapse" role="tablist">       
            <ul class="nav navbar-nav navbar-right">                
              <li <?php if ($pagina == "inicio") {echo "class='active'";}?>><a href="../../index.php">Inicio</a></li>
                <li class="dropdown" <?php if ($pagina == "ventas") {echo "class='active'";}?>><a href="/#" data-toggle="dropdown" class="dropdown-toggle">Ventas<b class="caret"></b></a>                        
                  <ul class="dropdown-menu">
                    <li><a href="../casas/ventas-casas.php">Casas</a></li>
                    <li><a href="../departamentos/ventas-departamentos.php">Departamentos</a></li>
                    <li><a href="../terrenos/ventas-terrenos.php">Terrenos</a></li>
                    <?php echo $agregarServicio; ?>
                  </ul>
                </li>
                <li class="dropdown" <?php if ($pagina == "arriendos") {echo "class='active'";}?>><a href="/#" data-toggle="dropdown" class="dropdown-toggle">Arriendos<b class="caret"></b></a>                        
                  <ul class="dropdown-menu">
                    <li><a href="../casas/arriendos-casas.php">Casas</a></li>
                    <li><a href="../departamentos/arriendos-departamentos.php">Departamentos</a></li>
                    <?php echo $agregarServicio; ?>
                  </ul>
                </li>                    
                <li class="dropdown" <?php if ($pagina == "nosotros") {echo "class='active'";}?>><a href="/#" data-toggle="dropdown" class="dropdown-toggle">Nosotros<b class="caret"></b></a>                        
                  <ul class="dropdown-menu">
                    <li><a href="../../nosotros.php">Quienes somos?</a></li>
                    <li><a href="../../contacto.php">Cont&aacute;ctate con nosotros</a></li>
                  </ul>
                </li>
<?php
if(isset($_SESSION["sesionActiva"]) && isset($_SESSION["sesionNombre"])){
  $panel = "";
  $perfil = "";
  $fotoSesion = "";
  if ($_SESSION['tipoSesion']=="1") { 
    $panel = '<li><a href="../../management/managers/panel.php">Panel</a></li>';
    $perfil = '../../management/managers/'; 
    $fotoSesion = '</strong> <img src="img/usuarios/manager.png" WIDTH="15" HEIGHT="15" /></a>';
  }else{
    $panel = '<li><a href="../../management/clientes/panel.php">Panel</a></li>';
    $perfil = '../../management/clientes/'; 
    $fotoSesion = '</strong> <img src="img/usuarios/usuario.png" WIDTH="15" HEIGHT="15" /></a>';
  }
  echo  '                  
                <li class="dropdown"><a href="../managers/panel.php"><strong>' . $_SESSION['sesionNombre'] . $fotoSesion . '
                  <ul class="dropdown-menu">
                    <li><a href="' . $perfil . 'perfil.php">Perfil</a></li> ' .  $panel . '
                    <li><a href="../../inc/cerrarSesion.php">Cerrar Sesi&oacute;n</a></li>
                  </ul>
                </li>    
            </ul> 
        ';
}else{
    if ($pagina=="inicio"){
        echo    '
                    <!-- Formulario de login -->
                    </ul>
                    <form name="formLogin" id="formLogin" method="post" action="inc/checkLogin.php" enctype="application/x-www-form-urlencoded" class="navbar-form navbar-right">
                        <div class="radio">
                          <label>
                            <input type="radio" name="opciones" id="opciones_1" value="1" checked>
                            <strong>Clientes</strong>
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="opciones" id="opciones_2" value="2">
                            <strong>Administraci&oacute;n</strong>
                          </label>
                        </div>                 
                        <div class="form-group">
                            <input type="email" name="correo1" required=""  placeholder="Email *" data-validation-required-message="" class="form-control input-sm">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" required=""  placeholder="Clave *" data-validation-required-message="" class="form-control input-sm">
                        </div>
                        <button type="button" id="submitButton" class="btn btn-info btn-xs">Acceder <b class="caret right"></b></button>                  
                        <a href="registro.php" class="btn btn-success btn-xs">Registrar</a>  
                    </form>
                    <!-- Fin formulario de login -->
                ';
    }
}
?> 
            </div><!--/.navbar-collapse 'btn-success' -->          
        </div>
        <article id="contento">
                <div class="input-group">
                  <span class="input-group-addon">INFO: </span>
                  <input style="text-align:left;" maxlength="500" name="informacion" readonly="readonly" type="text" onbLur="" class="form-control input-sm" id="informacion" value="-" >                              
                </div>
        </article>  
    </nav>
</header>
<script>

  function validarUsuario() {
    var verificador=true;
    if (!document.formLogin.correo1.value) {
      alert("La credencial de nombre es incorrecta");
      document.formLogin.correo1.focus();
      verificador=false;
    }else if (!document.formLogin.password.value) {
      document.formLogin.password.focus();
      verificador=false;      
    }
    if (verificador) {
      document.formLogin.submit();      
    }
  }
  function validarCredenciales() {
    var pase=true;
    if (!document.formLogin.correo1.value) {
      document.formLogin.correo1.focus();
      pase=false;
    }else if (!document.formLogin.password.value) {
      document.formLogin.password.focus();
      pase=false;      
    }
    if (pase) {
        document.formLogin.submit();         
    }
  }  
  window.onload = function () {
    document.getElementById("submitButton").onclick = validarUsuario;
  }
</script>  
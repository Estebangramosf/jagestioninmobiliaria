<?php include('inc/funciones.php');?>
<?php
function dameURL(){
$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
return $url;
}
?>
<?php 

$tituloPagina = "Detalles";
$pagina = "Gestión";
include('inc/header.php');
$nombre = "";
$correo = "";
$tMobil = "";
if (isset($_SESSION['sesionActiva'])){
  $nombre = $_SESSION['sesionActiva'];
  $correo = $_SESSION['sesionCorreo'];
  $tMobil = $_SESSION['sesionNumerofono'];
}

?>
<!-- Código script para fijar div -->
<script type="text/javascript">


jQuery.noConflict();
jQuery(document).ready(function() {
  jQuery("#IrArriba").hide();
  jQuery(function () {
    jQuery(window).scroll(function () {
    if($(this).scrollTop() > 100) {
      document.getElementById("formEmail").addClass('form-fijo');
    } else {
      document.getElementById("formEmail").removeClass('form-fijo');
    }
    });    
  });
});

</script>

<?php

if (isset($_REQUEST["id"])){
  $modificar = "";
  $eliminar = "";
  $srvc_id = addslashes($_REQUEST["id"]);   
  conectaBase();
  $sql="select * from ja_servicios where srvc_id='".$srvc_id."'";
  $registros=mysqli_query($conexion, $sql);
  $datos=mysqli_fetch_array($registros);
  $total=mysqli_num_rows($registros);

  if ($total>=1){
    $tipoDetalle = "";
    if ($datos['srvc_tipo']=="1"||$datos['srvc_tipo']=="2"||$datos['srvc_tipo']=="3") {
      $tipoDetalle = "Venta";
    }elseif ($datos['srvc_tipo']=="4"||$datos['srvc_tipo']=="5") {
      $tipoDetalle = "Arriendo";
    } 

    //include('inc/carousel.php'); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <meta property="og:url"           content="http://www.jagestioninmobiliaria.cl" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo $datos['srvc_titulo']; ?>" />
    <meta property="og:description"   content="<?php echo $datos['srvc_introDescripcion']; ?>" />
    <meta property="og:image"         content="<?php echo $datos['srvc_imagen1']; ?>" />

      <div id="content" class="container">
        <div class="row">
          <h2>- Detalle <?php echo $tipoDetalle; ?> -</h2>
        </article>
        <hr>      
          <article class="col-lg-6">
            <p>
              <?php include("inc/galeriaGestion.php"); 
                if (isset($_SESSION['sesionActiva']) && $_SESSION['tipoSesion']=="1") {
                  $modificar = '<a class="btn-xs btn-default btn-group-sm-6" href="management/managers/gestionar-servicio.php?id='.$datos["srvc_id"].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar</a>';
                  $eliminar = '<a class="btn-xs btn-danger btn-group-sm-6" href="management/managers/gestionar-servicio.php?delete&id='.$datos["srvc_id"].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Eliminar</a>';
                }              
              ?>
            </p>

            <h2><?php echo $datos['srvc_titulo']; ?></h2>
            <p><?php echo $datos['srvc_introDescripcion']; ?></p>
            <p><?php echo "<strong>Descripci&oacute;n: </strong>" . $datos['srvc_descripcion']; ?></p>
            <p><?php 
                $descuento = $datos['srvc_descuentoPrecio'];
                $precio = $datos['srvc_precio'];
                if ((intval($descuento))>0){
                  $precio = intval($precio) - (intval($descuento));
                  echo "(Precio en oferta) <strong>Valor ".$tipoDetalle.":</strong> $". number_format($precio,0,",",".") . ".-";
                  echo "<p><small>Antes $". number_format(intval($precio)+intval($descuento),0,",",".") . ".-</small></p>";
                }else{
                  echo "<strong>Valor ".$tipoDetalle.":</strong> $". number_format($precio,0,",",".") . ".-";                    
                }
            ?></p>
            <p><strong>Ciudad:</strong> <?php echo $datos['srvc_comuna']; ?></p>
            <?php 
              if ($datos['srvc_tipo']!="3") {
                //Valida que el servicio no muestre dormitorios, baños y estacionamientos si es terreno
            ?>   
                <p><strong>Dormitorios:</strong> <?php echo $datos['srvc_dormitorios']; ?></p>            
                <p><strong>Ba&ntilde;os:</strong> <?php echo $datos['srvc_banos']; ?></p>     
                <p><strong>Estacionamiento(s):</strong> <?php echo $datos['srvc_estacionamientos']; ?></p>                        
            <?php  
              }
            ?>
            <p><strong>Superficie:</strong> <?php echo $datos['srvc_superficie']; ?> mts<sup>2</sup></p>

            <p><strong>Fecha publicaci&oacute;n:</strong> <?php echo $datos['srvc_fechaPublicacion']; ?></p>
            <?php

            ?>
          </article>

          <!-- Formulario de contacto o enviar mensaje como usuario registrado -->
          <article class="col-lg-6" id="formEmail" name="formEmail">
            <p>                          
            <form class="form" method="post" action="inc/enviarporMail.php" id="contentIn">
              <div class="">
                <h3>Formulario de contacto</h3>
                <div class="form-group">
                  <input name="name" type="text" required="" class="form-control input-sm" id="name" placeholder="Tu Nombre completo *" data-validation-required-message="Ingrese su nombre." value="<?php echo $nombre; ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input name="email" type="email" required="" class="form-control input-sm" id="email" placeholder="Tu E-mail *" data-validation-required-message="Ingrese su dirección de e-mail." value="<?php echo $correo; ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input name="telefono" type="text" required="" class="form-control input-sm" id="telefono" placeholder="Tu n&uacute;mero telef&oacute;nico *" data-validation-required-message="Ingrese su n&uactue;mero telef&oacute;nico." value="<?php echo $tMobil; ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="opciones" id="opciones_1" value="1" checked>
                    <strong>Si</strong> deseo inclu&iacute;r el servicio de limpieza en la cotizaci&oacute;n.
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="opciones" id="opciones_2" value="2">
                    <strong>No</strong> deseo inclu&iacute;r el servicio de limpieza en la cotizaci&oacute;n.
                  </label>
                </div>                          
                <div class="form-group">
                  <textarea name="message" required="" class="form-control input-sm" id="message" placeholder="Tu Mensaje *" data-validation-required-message="Ingrese su Mensaje."></textarea>
                  <p class="help-block text-danger"></p>
                </div>

                <!-- <a href="#" id="notificar" name="notificar" value="notificador" onclick="notificarIteres(this.value)" class="btn btn-default">Notificar interés</a> -->

                <div class="form-group">
                  <input name="url" type="hidden" required="" class="form-control" id="url" placeholder="" value="<?php echo dameURL(); ?>" data-validation-required-message="Ingrese su n&uactue;mero telef&oacute;nico.">
                  <p class="help-block text-danger"></p>
                </div>                               
                <div class="form-group">
                  <button class="btn btn-group-justified btn-success" id="submitButton">Enviar mensaje</button>
                  <small>Nos pondremos en contacto a la brevedad</small>
                </div>
                <?php 
                  echo $modificar, $eliminar; 
                  mysqli_free_result($registros);
                  mysqli_close($conexion);
                ?>
              </div>
            </form>
            <!-- Fin formulario de contacto o enviar mensaje como usuario registrado -->
            </p>
          </article>
        </div>

  <?php 
  }else{
    //header("Location:index.php");
    echo '<h2>El anuncio no existe</h2>';
  }
  include('inc/footer.php') ;
}else{
  //header("Location:index.php");
  echo '<h2>Lo realizado no tiene l&oacute;gica, por favor pinche <a class="btn btn-warning" href="index.php">Aqu&iacute;</a></h2>';
  //exit();
}
?>


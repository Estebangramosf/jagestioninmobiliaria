
<?php 
$tituloPagina = "Contacto";
$pagina = "nosotros";
include('inc/header.php');
//include('inc/carousel.php') ?>
<?php
function dameURL(){
$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
return $url;
}
?>
<div id="content" class="container">
  <div class="row">
    <div class="text-center">
    	<h2 class="section-heading">- Cont&aacute;ctanos -</h2>
    	<h3 class="section-subheading text-sub">Responderemos a la brevedad</h3>
    </div>
  </div>
	<br/> 
  <div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>
    <h3>Estimado cliente:</h3><br><h4>Le tenemos un contacto externo de nuestro equipo, el cual brinda asesor&iacute;a para que pueda obtener su vivienda a trav&eacute;s de cr&eacute;dito 
    hipotecario de forma r&aacute;pida y eficaz, <strong>no te pierdas esta oportunidad.</strong><br>Los datos los puedes encontrar a continuac&oacute;n del formulario de mas abajo.-</h3>
  </div>
  <div id="contentIn">
    <form class="form" method="post" action="enviarporMail.php">
      <div class="form">
          <div class="form-group">
            <input name="name" type="text" required="" class="form-control" id="name" placeholder="Tu Nombre *" data-validation-required-message="Ingrese su nombre.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <input name="email" type="email" required="" class="form-control" id="email" placeholder="Tu E-mail *" data-validation-required-message="Ingrese su dirección de e-mail.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <input name="telefono" type="text" required="" class="form-control" id="telefono" placeholder="Tu n&uacute;mero telef&oacute;nico *" data-validation-required-message="Ingrese su n&uactue;mero telef&oacute;nico.">
            <p class="help-block text-danger"></p>
          </div>            
          <div class="form-group">
            <textarea name="message" required="" class="form-control" id="message" placeholder="Tu Mensaje *" data-validation-required-message="Ingrese su Mensaje."></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
                <input name="url" type="hidden" required="" class="form-control" id="url" placeholder="" value="<?php echo dameURL(); ?>" data-validation-required-message="Ingrese su n&uactue;mero telef&oacute;nico.">
                <p class="help-block text-danger"></p>
            </div>            
          <div class="form-group">
            <button class="btn btn-group-justified btn-success" id="submitButton">Enviar consulta</button>
          </div>
      </div>
  </form>  
</div>  
<div id="contentIn">
  <h3>Contacta con nuestra ejecutiva externa directamente</h3>
  <table style="text-align=center;"> 
    <tr>
      <td>Nombre :</td>  
      <td>Daniela Polanco Castro</td>
    </tr>
    <tr>
      <td>Tel&eacute;fono & Whatsapp :</td>  
      <td>+56 9 7709 9930</td>
    </tr>
    <tr>
      <td>Correo electr&oacute;nico</td>  
      <td><a class="btn btn-default" href="mailto:dapolancoc@ecomac.cl">dapolancoc@ecomac.cl</a></td>
    </tr>        
  </table>
</div>   
<?php include('inc/footer.php') ?>
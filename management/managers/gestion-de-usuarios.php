<?php
session_start();
//require_once("config.inc.php"); /* ARCHIVO DE CONEXIÃ?N A LA BBDD */
unset($_SESSION["cantidadcargadas"]); /* SI ACTUALIZAMOS DEBEMOS PONER LA CUENTA A 0 */
?>
<?php include('inc/funciones.php');?>
<?php 
$tituloPagina = "G> de Usuarios";
$pagina = "Gestiones";
conectaBase();
$sql="select cli_nombre, cli_apellido from cli_usuarios order by cli_id desc limit 0,5";
include('inc/header.php');
//include('inc/carousel.php') ?>
      <!-- Gestion de usuarios -->
<script type="text/javascript">
  $(document).ready(function(){
    var load = 0;
    var height = 20;
      $(window).scroll(function(){        
        if($(window).scrollTop() > height ){
          //== ($(document).height()-$(window).height())
          height = height+100;
          load++;
          $.post("inc/gestionarUsuarios.php",{load:load},function(data){
            $(".listaUsuarios").append(data);
          });
        }
      });        
  });
$(document).ready(function (e) {
  $("#borrar").click(function () {
    alert('click!');
    var a = "id_Cliente=" + $("#idCliente").val();
    $.ajax({
        url: "inc/usuarios/eliminarUsuario.php",
        data: a,
        type: "POST",
        beforeSend: function () {
            $("#textError").text("Validando..")
        },
        success: function (u) {                    
           
        }
    });//end ajax
})
});

</script>
<div id="content" class="container">
  <div class="row">
    <h1>Visualizar usuarios registrados</h1>
    <hr>        
    <div class="listaUsuarios" id="contentIn">
      <?php
        $sql="select * from cli_usuarios order by cli_id desc limit 0,10";
        $resultados=mysqli_query($conexion, $sql);
        while ($f1=mysqli_fetch_array($resultados)){
      ?>
          <?php 
            echo $f1["cli_nombre"]." "; 
            echo strip_tags($f1["cli_apellido"]);     
            echo '<a href="#"><span id="borrar" class="glyphicon glyphicon-remove" aria-hidden="true"><input type="hidden" id="idCliente" value="'.$f1['cli_id'].'" /></span>Eliminar</a>';
          ?>
            <br>
      <?php
        }
      ?>
    </div>
  </div>        
  <!-- /Gestion de usuarios -->
<?php include('inc/footer.php');?>
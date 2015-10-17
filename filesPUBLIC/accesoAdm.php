<?php include('inc/funciones.php');?>
<?php 
$tituloPagina = "Ingreso";
$pagina = "Ingreso";
include('inc/header.php');
//include('inc/carousel.php') ?>
      <!-- Ventas -->
<div id="content" class="container">
    <div class="row">
      <article class="body">
        <h2>- Acceso administrativo -</h2>
      </article>
      <hr>
      <div class="horizontal divPadre">
        <div class="vertical">
          <div id="">
            <form name="frmValidarCredencial" id="frmValidarCredencial" method="post" action="#">
              <table height="126" border="0" align="center" cellpadding="0" cellspacing="10">
                <tr>
                  <td>
                    Usuario
                  </td>
                  <td>
                    <input type="text" name="credencialUsu" id="credencialUsu" onblur="validarCredenciales()" />
                  </span></td>
                </tr>
                <tr>
                  <td>
                  Contraseña
                  </td>
                  <td>
                    <input type="password" name="claveUsu" id="claveUsu" onblur="validarCredenciales()" />
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                      <input type="button" class="btn btn-group-justified btn-success" id="submitButton" value="Enviar consulta" />
                  </td>
                </tr>
              </table>
            </form>
          </div>      

        </div>
      </div>              
    </div>        
    <!-- /Ventas --> 
<?php include('inc/footer.php') ?>

<script>
  function validarCredenciales() {
    var pase=true;
    if (document.frmValidarCredencial.credencialUsu.value!='pamelaramos') {
      alert("La credencial de nombre es incorrecta");
      document.frmValidarCredencial.credencialUsu.focus();
      pase=false;
    }else if (document.frmValidarCredencial.claveUsu.value=='') {
      document.frmValidarCredencial.claveUsu.focus();
      pase=false;      
    }else if (document.frmValidarCredencial.credencialUsu.value!='pamelaramos' && document.frmValidarCredencial.claveUsu.value=='') {
      document.frmValidarCredencial.claveUsu.focus();
      pase=false;      

    }else if (document.frmValidarCredencial.credencialUsu.value!='pamelaramos' && document.frmValidarCredencial.claveUsu.value!='antito') {
      alert("El usuario ingresado es incorrecto");
      document.frmValidarCredencial.credencialUsu.focus();
      pase=false;
    }
    if (pase) {
        alert ("Datos Ok");        
    }
  }
  window.onload = function () {
    document.getElementById("submitButton").onclick = validarCredenciales;
  }
</script>  
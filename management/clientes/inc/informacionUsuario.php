<?php 
$genero = "o/a";
if(isset($_SESSION['sesionActiva'])){
	/*echo $_SESSION["tipoSesion"];
	echo $_SESSION["sesionClave"];*/
?>
  <form name="formUsuario" method="post" action="inc/procesaInformacionUsuario.php" enctype="application/x-www-form-urlencoded">
          <div class="" id="contentIn">
              <div class="form-group">                
                <input name="id" type="hidden" required="" class="form-control" id="id" placeholder="Tu ID *" data-validation-required-message="Ingrese su id." value="<?php echo $_SESSION['idSesion']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-6">
                <label>Su Nombre</label>
                <input maxlength="30" name="nombre" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="nombre" placeholder="Su Nombre *" data-validation-required-message="Ingrese su nombre." value="<?php echo $_SESSION['sesionNombre']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-6">
                <label>Su Apellido</label>             
                <input maxlength="30" name="apellido" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="apellido" placeholder="Su Apellido *" data-validation-required-message="Ingrese su apellido." value="<?php echo $_SESSION['sesionApellido']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-6">
                <label>Su Rut</label>
                <input maxlength="14" name="rut" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="rut" placeholder="Su Rut *" data-validation-required-message="Ingrese su rut." value="<?php echo $_SESSION['sesionRut']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-8">
                <label>Su Correo (Usuario)</label>
                <input maxlength="40" name="correo" type="email" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="correo" placeholder="Su E-mail *" data-validation-required-message="Ingrese su dirección de e-mail." value="<?php echo $_SESSION['sesionCorreo']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-6">
                <label>Su Clave</label>
                <input maxlength="15" name="clave" type="password" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="clave" placeholder="Su Clave *" data-validation-required-message="Ingrese una clave." value="<?php echo $_SESSION['sesionClave']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-6">
                <label>Repita su Clave</label>              
                <input maxlength="15" name="claveRep" type="password" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="claveRep" placeholder="Repetir Clave *" data-validation-required-message="Vuelva a ingresar su clave." value="<?php echo $_SESSION['sesionClave']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <label>Seleccione su estado de cliente</label>
              <div class="radio">
                <label>
                  <input type="radio" name="estado" id="opciones_1" onbLur="validarDatosContacto()" value="1" <?php if ($_SESSION['sesionEstado']==1){echo 'checked';}?>>
                  <strong>Activado</strong>
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="estado" id="opciones_2" onbLur="validarDatosContacto()" value="2" <?php if ($_SESSION['sesionEstado']==2){echo 'checked';}?>>
                  <strong>Desactivado</strong>
                </label>
              </div> <!-- 
              <label>Seleccione su foto</label>
              <div class="form-group">
                <input name="foto" type="text" required="" class="form-control" id="foto" placeholder="Su Foto *" data-validation-required-message="Seleccione una foto." value="<?php echo $_SESSION['sesionFoto']; ?>" >
                <p class="help-block text-danger"></p>
              </div> -->
              <input type="hidden" name="foto" id="foto" value="-">
              <div class="form-group col-xs-6">
              <label>Ingrese su Direcci&oacute;n</label>
                <input maxlength="30" name="direccion" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="direccion" placeholder="Su Direcci&oacute;n *" data-validation-required-message="Ingrese su direcci&oacute;n." value="<?php echo $_SESSION['sesionDireccion']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-6">
              <label>Indique su ciudad</label>
                <input maxlength="40" name="ciudad" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="ciudad" placeholder="Su Ciudad de origen *" data-validation-required-message="Ingrese su direcci&oacute;n." value="<?php echo $_SESSION['sesionCiudad']; ?>" >
                <p class="help-block text-danger"></p>
              </div>              
              <div class="form-group col-xs-6">
              <label>Indique su fecha de nacimiento</label>
                <input maxlength="20" name="nacimiento" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="nacimiento" placeholder= "Ej: Año-Mes-Dia" data-validation-required-message="Ind&iacute;que su fecha de nacimiento." value="<?php echo $_SESSION['sesionNacimiento'];?>" />                 
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group col-xs-6">
                <label>Indique su n&uacute;mero movil</label>
                <input maxlength="15" name="numerofono" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="numerofono" placeholder="Su N&uacute;mero Movil *" data-validation-required-message="Ingrese su nombre." value="<?php echo $_SESSION['sesionNumerofono']; ?>" >
                <p class="help-block text-danger"></p>
              </div>                    
              <div class="form-group col-xs-6">
                <label>Indique su n&uacute;mero fijo</label>
                <input maxlength="15" name="numerocasa" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="numerocasa" placeholder="Su N&uacute;mero Fijo *" data-validation-required-message="Ingrese su nombre." value="<?php echo $_SESSION['sesionNumerocasa']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <label>Indique g&eacute;nero</label>
                <!-- Genero -->
                <div class="radio">
                  <label>
                    <input type="radio" name="genero" id="genero_1" onbLur="validarDatosContacto()" value="1" <?php if ($_SESSION['sesionGenero']==1){echo 'checked'; $genero="o";}?>>
                    <strong>Hombre</strong>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="genero" id="genero_2" onbLur="validarDatosContacto()" value="2" <?php if ($_SESSION['sesionGenero']==2){echo 'checked'; $genero="a";}?>>
                    <strong>Mujer</strong>
                  </label>
                </div>  
                <div class="radio">
                  <label>
                    <input type="radio" name="genero" id="genero_3" onbLur="validarDatosContacto()" value="3" <?php if ($_SESSION['sesionGenero']==3){echo 'checked';}?>>
                    <strong>Otro</strong>
                  </label>
                </div>  
                <!-- /Genero -->
                <label>Indique estado civil</label>
                <!-- Estado Civil -->
                <div class="radio">
                  <label>
                    <input type="radio" name="estadocivil" id="estadocivil_1" onbLur="validarDatosContacto()" value="1" <?php if ($_SESSION['sesionEstadoCivil']==1){echo 'checked';}?>>
                    <strong>Solter<?php echo $genero; ?></strong>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="estadocivil" id="estadocivil_2" onbLur="validarDatosContacto()" value="2" <?php if ($_SESSION['sesionEstadoCivil']==2){echo 'checked';}?>>
                    <strong>Casad<?php echo $genero; ?></strong>
                  </label>
                </div>  
                <div class="radio">
                  <label>
                    <input type="radio" name="estadocivil" id="estadocivil_3" onbLur="validarDatosContacto()" value="3" <?php if ($_SESSION['sesionEstadoCivil']==3){echo 'checked';}?>>
                    <strong>Divorciad<?php echo $genero; ?></strong>
                  </label>
                </div> 
                <!-- /Estado Civil -->
 
                <!-- Tipo de Usuario --> 
                <?php 
                    if ($_SESSION['tipoSesion']=="10"||$_SESSION['tipoSesion']=="1"){                      
                      $cliente =
                        '
                          <label>Indique tipo de usuario</label>                        
                          <div class="radio">
                            <label>
                              <input type="radio" name="tipousuario" id="tipousuario_3" value="100"'; 
                              if ($_SESSION["tipoSesion"]=="100"){ $cliente .= " checked";}
                              echo $cliente.
                              ">
                              <strong>Cliente</strong>
                            </label>
                          </div>   
                        ";  
                    }elseif ($_SESSION['tipoSesion']=="100") {
                      if(isset($_REQUEST['dar-de-alta'])){
                        echo '<input type="hidden" name="tipousuario" id="tipousuario_3" value="10">'; 
                      }else{
                        echo '<input type="hidden" name="tipousuario" id="tipousuario_3" value="100">';                                                       
                      }
                    }                
                    if ($_SESSION['tipoSesion']=="10"||$_SESSION['tipoSesion']=="1"){                      
                      $moderador =
                        '
                          <div class="radio">
                            <label>
                              <input type="radio" name="tipousuario" id="tipousuario_2" value="10"'; 
                              if ($_SESSION["tipoSesion"]=="10"){ $moderador .= " checked";}
                              echo $moderador.
                              ">
                              <strong>Promotor</strong>
                            </label>
                          </div>   
                        ";  
                    }
                    if ($_SESSION['tipoSesion']=="1"){
                      $administrador = 
                        '
                          <div class="radio">
                            <label>
                              <input type="radio" name="tipousuario" id="tipousuario_1" value="1"';  
                              if ($_SESSION["tipoSesion"]=="1"){ $administrador .= " checked";}
                              echo $administrador.
                              '>
                              <strong>Administrador</strong>
                            </label>
                          </div>                        
                          
                        ';
                    }
                ?>              
                <!-- /Tipo de Usuario -->
              <div class="form-group">
              <?php 
              if ($_SESSION["tipoSesion"]=="1"||$_SESSION["tipoSesion"]=="10"||$_SESSION["tipoSesion"]=="100"){
                echo '
                </div>
                <div class="btn-group btn-group-sm-6"> 
                  <input type="button" name="modificar" class="btn btn-group-justified btn-info btn-xs" id="submitButton" value="Modificar" onclick = "validarDatosContacto(this.value)" />
                </div>                  
                <div class="btn-group btn-group-sm-6"> 
                  <input type="button" name="cancelar" class="btn btn-group-justified btn-warning btn-xs" id="submitButton" value="Cancelar" onclick = "validarDatosContacto(this.value)" />
                </div>
                ';
                if ($_SESSION["tipoSesion"]=="1"||$_SESSION["tipoSesion"]=="10") {
                  echo '
                    <!-- <input type="button" name="Registrar" class="btn btn-group-justified btn-success btn-xs" id="submitButton" value="Registrar" onclick = "validarDatosContacto(this.value)" />
                     <input type="button" name="eliminar" class="btn btn-group-justified btn-danger btn-xs" id="submitButton" value="Eliminar" onclick = "validarDatosContacto(this.value)" /> -->                    
                  ';
                }
              }

              
              ?>
              </div>
              <input type="hidden" name="accion" id="accion" />
          </div>
      </form>    
<script type="text/javascript">
  function validarDatosContacto (valor) {
    var verificador=true;
    document.formUsuario.accion.value=valor;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(valor=="Cancelar"){
      document.formUsuario.submit();
    }else{
        if (!document.formUsuario.nombre.value) {
        document.getElementById("informacion").value = "Nombre requerido";
        //alert("Debes ingresar tu Nombre");
        document.formUsuario.nombre.focus();
        verificador=false;
      } else if (!document.formUsuario.apellido.value) {
        document.getElementById("informacion").value = "Apellido requerido";
      //  alert("Debes ingresar tu apellido");
        document.formUsuario.apellido.focus();
        verificador=false;
      } else if (!document.formUsuario.rut.value) {
        document.getElementById("informacion").value = "Rut requerido";
      //  alert("Debes ingresar tu rut");
        document.formUsuario.rut.focus();
        verificador=false;
      } else if (!document.formUsuario.correo.value||document.formUsuario.correo.value) {
          if (!expr.test(document.formUsuario.correo.value)  ) {
            document.formUsuario.correo.value="";
            document.formUsuario.correo.focus();
            document.getElementById("informacion").value = "Formato invalido";
            verificador=false;
          }else{
            if(!document.formUsuario.correo.value){
              document.formUsuario.correo.focus();
              document.getElementById("informacion").value = "Correo requerido";
              verificador=false;              
            }
          }
      } else if (!document.formUsuario.clave.value) {
        document.getElementById("informacion").value = "Clave requerida";
      //  alert("Debes ingresar una clave");
        document.formUsuario.clave.focus();
        verificador=false;
      } else if (!document.formUsuario.claveRep.value) {
        document.getElementById("informacion").value = "Repita su clave";
      //  alert("Debes re-ingresar tu clave");
        document.formUsuario.claveRep.focus();
        verificador=false;
      } else if (document.formUsuario.claveRep.value != document.formUsuario.clave.value) {
        document.getElementById("informacion").value = "Las claves no coinciden";
      //  alert("Las claves no coinciden");
        document.formUsuario.claveRep.focus();
        verificador=false;      
      } else if (!document.formUsuario.estado.value) {
        document.getElementById("informacion").value = "Seleccione su estado";
      //  alert("Debes seleccionar el estado");
        document.formUsuario.estado.focus();
        verificador=false;
      }/* else if (!document.formUsuario.foto.value) {
        alert("Debes incluír una foto en tu perfil");
        document.formUsuario.foto.focus();
        verificador=false;
      }*/else if (!document.formUsuario.direccion.value) {
        //alert("Debes indicar tu dirección");
        document.getElementById("informacion").value = "Direccion requerida";
        document.formUsuario.direccion.focus();
        verificador=false;
      } else if (!document.formUsuario.ciudad.value) {
        //alert("Debes indicar tu ciudad de origen.");
        document.getElementById("informacion").value = "Ciudad requerida";
        document.formUsuario.ciudad.focus();
        verificador=false;
      } else if (!document.formUsuario.nacimiento.value) {
        //alert("Debes indicar tu fecha de nacimiento");
        document.getElementById("informacion").value = "Fecha de nacimiento requerida";
        document.formUsuario.nacimiento.focus();
        verificador=false;  
      } else if (!document.formUsuario.numerofono.value && !document.formUsuario.numerocasa.value) {
        //alert("Debes ingresar un Número de contacto");
        document.getElementById("informacion").value = "Correo requerido";
        document.formUsuario.numerofono.focus();
        verificador=false; 
      } else if (!document.formUsuario.genero.value) {
        //alert("Indicar tu genero");
        document.getElementById("informacion").value = "Seleccione genero";
        document.formUsuario.genero.focus();
        verificador=false; 
      } else if (!document.formUsuario.estadocivil.value) {
        //alert("Debes indicar tu estado civil");
        document.getElementById("informacion").value = "Indique su estado civil";
        document.formUsuario.estadocivil.focus();
        verificador=false; 
      } else if (!document.formUsuario.tipousuario.value) {
        //alert("Seleccionar un tipo de usuario");
        document.getElementById("informacion").value = "Seleccione el tipo de usuario";
        document.formUsuario.tipousuario.focus();
        verificador=false;                         
      }
      if(verificador&&valor=='Modificar'){
        document.formUsuario.submit();
      } 
    }
  }

  window.onload = function () {
    //document.getElementById("submitButton").onclick = validarDatosContacto(this.value);
  }
</script> <!-- script para validar el ingreso de datos y valores -->


<?php 

}else{
  header("Location:../index.php");
}
?>

      
<?php 
$genero = "o/a";
if ($_SESSION['sesionGenero']==1||$_SESSION['sesionGenero']==3){
  $genero = "o";
}else{$genero = "a";}

if(isset($_SESSION['sesionActiva'])){
	/*echo $_SESSION["tipoSesion"];
	echo $_SESSION["sesionClave"];*/
if(isset($_REQUEST['dar-de-alta'])){ 
    echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>
    <h3>Estimado cliente:</h3><br><h4>Usted esta apunto de darse de alta como cliente promotor, solicitamos que complete su informacion y a la brevdad nos pondremos en contacto con usted.</h4></div>';
}  
?>
  <form name="formUsuario" method="post" action="inc/procesaInformacionUsuario.php" enctype="application/x-www-form-urlencoded">  
          <div class="" id="contentIn">        
              <?php
              if(isset($_REQUEST['dar-de-alta'])){ 
                //<script languaje="javascript">alert("ATENCION!:\n\nEstimado cliente:\nUsted esta apunto de darse de alta como cliente promotor, solicitamos que complete su informacion y a la brevdad nos pondremos en contacto con usted.");</script> <?php
                echo '<div class="alert alert-info alert-dismissable">Recuerde que al completar la informaci&oacute;n debe hacer clic en 
                <button type="button" class="close" data-dismiss="alert">&times;</button><span class="btn btn-info btn-xs"> Modificar</span> para actualizar su informaci&oacute;n en nuestros registros.</div>';
              }?>     
              <!-- Campo id -->
              <div class="form-group">                
                <input name="id" type="hidden" required="" class="form-control" id="id" placeholder="Tu ID *" data-validation-required-message="Ingrese su id." value="<?php echo $_SESSION['idSesion']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <!-- /Campo id -->
              <!-- Campo foto -->
              <input type="hidden" name="foto" id="foto" value="-">
              <!-- /Campo foto -->
              <!-- Campo nombre -->
              <fieldset><legend>Datos personales</legend>
              <div class="form-group col-xs-6">
                <label>Su Nombre</label>
                <input maxlength="30" name="nombre" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="nombre" placeholder="Su Nombre *" data-validation-required-message="Ingrese su nombre." value="<?php echo $_SESSION['sesionNombre']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <!-- /Campo nombre -->
              <!-- Campo apellido -->
              <div class="form-group col-xs-6">
                <label>Su Apellido</label>             
                <input maxlength="30" name="apellido" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="apellido" placeholder="Su Apellido *" data-validation-required-message="Ingrese su apellido." value="<?php echo $_SESSION['sesionApellido']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <!-- /Campo apellido -->
              <!-- Campo rut -->
              <div class="form-group col-xs-6">
                <label>Su Rut</label>
                <input maxlength="14" name="rut" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="rut" placeholder="Su Rut *" data-validation-required-message="Ingrese su rut." value="<?php echo $_SESSION['sesionRut']; ?>" >
                <p class="help-block text-danger"></p>
              </div>
              <!-- /Campo rut -->
              <!-- Genero -->
              <div class="form-group col-xs-6">   
                <label>Indique g&eacute;nero</label>                
                <select name="genero" multiple class="form-control">
                  <option id="genero_1" onbLur="validarDatosContacto()" value="1" <?php if ($_SESSION['sesionGenero']==1){echo 'selected';}?> >Masculino</option>
                  <option id="genero_2" onbLur="validarDatosContacto()" value="2" <?php if ($_SESSION['sesionGenero']==2){echo 'selected';}?> >Femenino</option>
                  <option id="genero_3" onbLur="validarDatosContacto()" value="3" <?php if ($_SESSION['sesionGenero']==3){echo 'selected';}?> >Otro</option>
                </select>
              </div>
              <!-- /Genero -->              
              <!-- Campo correo -->
              <div class="form-group col-xs-12">
                <label>Su Correo (Usuario)</label>
                <div class="input-group">
                  <span class="input-group-addon">@</span>                
                  <input maxlength="40" name="correo" type="email" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="correo" placeholder="Su E-mail *" data-validation-required-message="Ingrese su dirección de e-mail." value="<?php echo $_SESSION['sesionCorreo']; ?>" >
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <!-- /Campo correo -->
              <!-- Campo clave -->
              <div class="form-group col-xs-6">                
                <label>Su Clave</label>
                  <input maxlength="15" name="clave" type="password" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="clave" placeholder="Su Clave *" data-validation-required-message="Ingrese una clave." value="<?php echo $_SESSION['sesionClave']; ?>" >
                  <p class="help-block text-danger"></p>
              </div>
              <!-- /Campo clave -->
              <!-- Campo repetir clave -->
              <div class="form-group col-xs-6">
                <label>Repita su Clave</label>   
                  <input maxlength="15" name="claveRep" type="password" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="claveRep" placeholder="Repetir Clave *" data-validation-required-message="Vuelva a ingresar su clave." value="<?php echo $_SESSION['sesionClave']; ?>" >
                  <p class="help-block text-danger"></p>
              </div>
              <!-- /Campo repetir clave -->          
              </fieldset>
              <hr>              
              <!-- Campo de foto
                <label>Seleccione su foto</label>
                <div class="form-group">
                  <input name="foto" type="text" required="" class="form-control" id="foto" placeholder="Su Foto *" data-validation-required-message="Seleccione una foto." value="<?php echo $_SESSION['sesionFoto']; ?>" >
                  <p class="help-block text-danger"></p>
                </div> 
              -->              
              <fieldset><legend>Datos de ubicaci&oacute;n</legend>
              <!-- Campo direccion -->              
              <div class="form-group col-xs-6">
                <label>Ingrese su Direcci&oacute;n</label>
                  <input maxlength="30" name="direccion" type="text" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="direccion" placeholder="Su Direcci&oacute;n *" data-validation-required-message="Ingrese su direcci&oacute;n." value="<?php echo $_SESSION['sesionDireccion']; ?>" >
                  <p class="help-block text-danger"></p>
              </div>
              <!-- /Campo direccion -->
              <!-- Campo ciudad -->
              <div class="form-group col-xs-6">   
                <label>Indique ciudad</label>                
                <select name="ciudad" multiple class="form-control">
                  <?php                
                    $ciudades = array(
                      0=>"Antofagasta",
                      1=>"Iquique",
                      2=>"Calama",
                      3=>"La Serena",
                      4=>"Coquimbo",
                      5=>"Valparaiso",
                      6=>"Region Metropolitana");
                    for ($city=0;$city<7;$city++){                       
                      ?>
                      <option id="genero_<php echo $city; ?>" onbLur="validarDatosContacto()" <?php if ($_SESSION["sesionCiudad"]==$ciudades[$city]){echo 'selected';} echo '>'.$ciudades[$city]; ?></option>';
                    <?php }
                  ?>                  
                </select>
              </div>    
              <!-- /Campo ciudad -->
              <!-- Campo fecha de nacimiento --> 
              <div class="form-group-justified col-xs-6">
                <label>Indique su fecha de nacimiento</label>
                <input class="form-control" type="date" name="nacimiento" step="3" min="1960-01-01" max="1998-12-31" value="<?php echo $_SESSION['sesionNacimiento'];?>">               
<!--
                <input maxlength="4" name="ano" type="number" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="ano" placeholder="1998" data-validation-required-message="" value="<?php echo strlen($_SESSION['sesionNacimiento'],0,4); ?>" >
                <input maxlength="2" name="mes" type="number" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="mes" placeholder="12" data-validation-required-message="" value="<?php echo strlen($_SESSION['sesionNacimiento'],5,2); ?>" >
                <input maxlength="2" name="dia" type="number" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="dia" placeholder="12" data-validation-required-message="" value="<?php echo strlen($_SESSION['sesionNacimiento'],8,2); ?>" >
                <p class="help-block text-danger"></p> 
                value="<?php echo date("Y-m-d");?>               
-->                
              </div>                             
              <!-- /Campo fecha de nacimiento -->
              </fieldset>
              <hr>
              <fieldset><legend>Datos de contacto</legend>
              <!-- Campo numero movil -->
              <div class="form-group col-xs-6">
                <label>Indique su n&uacute;mero movil</label>
                <input maxlength="15" name="numerofono" type="number" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="numerofono" placeholder="Su N&uacute;mero Movil *" data-validation-required-message="Ingrese su nombre." value="<?php echo $_SESSION['sesionNumerofono']; ?>" >
                <p class="help-block text-danger"></p>
              </div>                    
              <!-- /Campo numero movil -->
              <!-- Campo numero fijo -->
              <div class="form-group col-xs-6">
                <label>Indique su n&uacute;mero fijo</label>
                <input maxlength="15" name="numerocasa" type="number" onbLur="validarDatosContacto()" required="" class="form-control input-sm" id="numerocasa" placeholder="Su N&uacute;mero Fijo *" data-validation-required-message="Ingrese su nombre." value="<?php echo $_SESSION['sesionNumerocasa']; ?>" >
                <p class="help-block text-danger"></p>
              </div>                
              <!-- /Campo numero movil -->         
              <!-- Estado civil -->
              <div class="form-group col-xs-6">   
                <label>Indique estado civil</label>
                <select name="estadocivil" multiple class="form-control">
                  <option id="estadocivil_1" onbLur="validarDatosContacto()" value="1" <?php if ($_SESSION['sesionEstadoCivil']==1){echo 'selected';}?> >Solter<?php echo $genero; ?></option>
                  <option id="estadocivil_2" onbLur="validarDatosContacto()" value="2" <?php if ($_SESSION['sesionEstadoCivil']==2){echo 'selected';}?> >Casad<?php echo $genero; ?></option>
                  <option id="estadocivil_3" onbLur="validarDatosContacto()" value="3" <?php if ($_SESSION['sesionEstadoCivil']==3){echo 'selected';}?> >Divorciad<?php echo $genero; ?></option>
                </select>
              </div>
              <!-- /Estado Civil -->
              <!-- Campo estado del cliente => radiobutton -->
              <div class="form-group col-xs-6">   
                <label>Seleccione su estado de cliente</label>   
                <select name="estado" multiple class="form-control">
                  <option id="opciones_1" onbLur="validarDatosContacto()" value="1" <?php if ($_SESSION['sesionEstado']==1){echo 'selected';}?> >Activado</option>
                  <option id="opciones_2" onbLur="validarDatosContacto()" value="2" <?php if ($_SESSION['sesionEstado']==2){echo 'selected';}?> >Desactivado</option>
                </select>
              </div>
              <!-- /Campo estado del cliente => radiobutton -->                  
              <!-- Tipo de Usuario -->
              <?php
                if ($_SESSION['tipoSesion']=="100") {
                  if(isset($_REQUEST['dar-de-alta'])){
                    echo '<input type="hidden" name="tipousuario" id="tipousuario_3" value="10">'; 
                  }else{
                    echo '<input type="hidden" name="tipousuario" id="tipousuario_3" value="100">';                                                       
                  }
                }else{
                ?>
                  <div class="form-group col-xs-6">   
                    <label>Seleccione su tipo de usuario</label>   
                    <select name="tipousuario" multiple class="form-control">
                    <?php if($_SESSION['tipoSesion']=="1"||$_SESSION['tipoSesion']=="10"||$_SESSION['tipoSesion']=="100"){ ?>
                      <option id="tipousuario_1" onbLur="validarDatosContacto()" value="100" <?php if ($_SESSION["tipoSesion"]=="100"){echo 'selected';}?> >Cliente</option>
                    <?php } if($_SESSION['tipoSesion']=="1"||$_SESSION['tipoSesion']=="10"){ ?>                  
                      <option id="tipousuario_2" onbLur="validarDatosContacto()" value="10" <?php if ($_SESSION["tipoSesion"]=="10"){echo 'selected';}?> >Promotor</option>
                    <?php } if($_SESSION['tipoSesion']=="1"){ ?>  
                      <option id="tipousuario_3" onbLur="validarDatosContacto()" value="1" <?php if ($_SESSION["tipoSesion"]=="1"){echo 'selected';}?> >Administrador</option>
                    <?php } ?>
                    </select>
                  </div>                  
                <?php } ?>  
                         
              <!-- /Tipo de Usuario -->
              </fieldset>
              <hr>
              <!-- Botones submit -->
              <div class="form-group">
                <?php 
                  if(isset($_REQUEST['dar-de-alta'])){ 
                    echo '<div class="alert alert-info alert-dismissable">Est&aacute; a un paso, solo presione <button type="button" class="close" data-dismiss="alert">&times;</button><span class="btn btn-info btn-xs"> Modificar</span> y ser&aacute; un cliente promotor.</div>';
                  }
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
              <!-- /Botones submit -->
              <input type="hidden" name="accion" id="accion" />
          </div>
      </form>    
<script type="text/javascript">
  (function validarFecha(){ 

  })();

  function validarDatosContacto (valor) {
    var verificador=true;
    document.formUsuario.accion.value=valor;
    /*
    var ano = document.getElementById("ano").value;
    var mes = document.getElementById("mes").value;
    var dia = document.getElementById("dia").value;
    dia.remove(dia.31);
    document.formUsuario.nacimiento.value=ano+"/"+mes+"/"+dia;     
    */
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
      } else if (!document.formUsuario.ciudad.option.value) {
        //alert("Debes indicar tu ciudad de origen.");
        document.getElementById("informacion").value = "Ciudad requerida";
        document.formUsuario.ciudad.focus();
        verificador=false;
      } else if (!document.formUsuario.ano.value) {
        //alert("Debes indicar tu fecha de nacimiento");
        document.getElementById("informacion").value = "A&ntile;o de nacimiento requerido";
        document.formUsuario.ano.focus();
        verificador=false;  
      } else if (!document.formUsuario.mes.value) {
        //alert("Debes indicar tu fecha de nacimiento");
        document.getElementById("informacion").value = "Mes de nacimiento requerida";
        document.formUsuario.mes.focus();
        verificador=false;  
      } else if (!document.formUsuario.dia.value) {
        //alert("Debes indicar tu fecha de nacimiento");
        document.getElementById("informacion").value = "Dia de nacimiento requerida";
        document.formUsuario.dia.focus();
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

      
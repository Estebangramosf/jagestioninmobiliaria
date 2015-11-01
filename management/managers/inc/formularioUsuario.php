      
      <form name="formUsuario" method="post" action="inc/procesaInformacionUsuario.php" enctype="application/x-www-form-urlencoded">
          <div class="" id="">
              <article class="form-group">                
                <input name="id" type="hidden" required="" class="form-control input-sm" id="id" placeholder="Tu ID *" data-validation-required-message="Ingrese su id." value="" >
                <p class="help-block text-danger"></p>
              </article>
              <article class="form-group col-xs-6">
                <label>Su Nombre</label>
                <input maxlength="30" name="nombre" type="text" required="" class="form-control input-sm" id="nombre" placeholder="Su Nombre *" data-validation-required-message="Ingrese su nombre." value="" >
                <p class="help-block text-danger"></p>
              </article>
              <article class="form-group col-xs-6">
                <label>Su Apellido</label>             
                <input maxlength="30" name="apellido" type="text" required="" class="form-control input-sm" id="apellido" placeholder="Su Apellido *" data-validation-required-message="Ingrese su apellido." value="" >
                <p class="help-block text-danger"></p>
              </article>
              <article class="form-group col-xs-6">
                <label>Su Clave</label>
                <input maxlength="15" name="clave" type="password" required="" class="form-control input-sm" id="clave" placeholder="Su Clave *" data-validation-required-message="Ingrese una clave." value="" >
                <p class="help-block text-danger"></p>
              </article>
              <article class="form-group col-xs-6">
                <label>Repita su Clave</label>              
                <input maxlength="15" name="claveRep" type="password" required="" class="form-control input-sm" id="claveRep" placeholder="Repetir Clave *" data-validation-required-message="Vuelva a ingresar su clave." value="" >
                <p class="help-block text-danger"></p>
              </article>              
              <article class="form-group">
                <label>Su Correo (ser&aacute; su usuario)</label>
                
                <p class="help-block text-danger"><input  name="correo" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required="required" class="form-control input-sm" id="correo" placeholder="ejemplo@dominio.com" data-validation-required-message="Ingrese su dirección de e-mail." maxlength="40"/></p>
              </article>
              <article class="form-group">
                <label>Indique su n&uacute;mero movil</label>
                <input maxlength="15" name="numerofono" type="number" required="" class="form-control input-sm" id="numerofono" placeholder="Su N&uacute;mero Movil *" data-validation-required-message="Ingrese su nombre." value="" >
                <p class="help-block text-danger"></p>
              </article>               
                <article class="form-group">
                <input type="hidden" name="rut" id="rut" value="1-9">  
                <input type="hidden" name="estado" id="estado" value="1">
                <input type="hidden" name="foto" id="foto" value="-">
                <input type="hidden" name="direccion" id="direccion" value="No especificado">
                <input type="hidden" name="ciudad" id="ciudad" value="No especificada">           
                <input type="hidden" name="nacimiento" id="nacimiento" value="1991-01-01">
                <input type="hidden" name="numerocasa" id="numerocasa" value="-">                            
                <!-- Genero -->
                <input type="hidden" name="genero" id="genero" value="3">
                <!-- /Genero -->
                <input type="hidden" name="estadocivil" id="estadocivil" value="1">
                <input type="hidden" name="tipousuario" id="tipousuario" value="100">              
              </article>             


                       
                              
        
                <!-- /Tipo de Usuario -->
              <article class="btn-group btn-group-sm-6">
                    <input type="button" name="Registrar" class="btn btn-group-justified btn-success btn-xs" id="submitButton" value="Registrar" onclick = "validarDatosContacto(this.value)" />
              </article>                    
                <!--<input type="button" name="modificar" class="btn btn-group-justified btn-info" id="submitButton" value="Modificar" onclick = "validarDatosContacto(this.value)" />
                    <input type="button" name="eliminar" class="btn btn-group-justified btn-danger" id="submitButton" value="Eliminar" onclick = "validarDatosContacto(this.value)" />-->
              <article class="btn-group btn-group-sm-6">                    
                    <input type="button" name="cancelar" class="btn btn-group-justified btn-warning btn-xs" id="submitButton" value="Cancelar" onclick = "validarDatosContacto(this.value)" />
              </article>
              <input type="hidden" name="accion" id="accion" />
          </div>
      </form>    
<script type="text/javascript">

  function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( (email) )
      alert("Error: La dirección de correo " + email + " es incorrecta.");
  }

  function validarDatosContacto (valor) {
    var verificador=true;
    document.formUsuario.accion.value=valor;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(valor=="Cancelar"){
      document.formUsuario.submit();
    }else{
      if (!document.formUsuario.nombre.value) {
        //alert("Debes ingresar tu Nombre");
        document.formUsuario.nombre.focus();
        verificador=false;
      } else if (!document.formUsuario.apellido.value) {
        //alert("Debes ingresar tu apellido");
        document.formUsuario.apellido.focus();
        verificador=false;
      } else if (!document.formUsuario.rut.value) {
        alert("Debes ingresar tu rut");
        document.formUsuario.rut.focus();
        verificador=false;
      } else if (!document.formUsuario.correo.value || !expr.test(document.formUsuario.correo.value)) {
        //alert("Debes ingresar un correo de contacto");
        document.formUsuario.correo.value="";
        document.formUsuario.correo.focus();
        verificador=false;
      } else if (!document.formUsuario.clave.value) {
        //alert("Debes ingresar una clave");
        document.formUsuario.clave.focus();
        verificador=false;
      } else if (!document.formUsuario.claveRep.value) {
        //alert("Debes re-ingresar tu clave");
        document.formUsuario.claveRep.focus();
        verificador=false;
      } else if (document.formUsuario.claveRep.value != document.formUsuario.clave.value) {
        alert("Las claves no coinciden");
        document.formUsuario.claveRep.focus();
        verificador=false;      
      } else if (!document.formUsuario.estado.value) {
        alert("Debes seleccionar el estado");
        document.formUsuario.estado.focus();
        verificador=false;
      }/* else if (!document.formUsuario.foto.value) {
        alert("Debes incluír una foto en tu perfil");
        document.formUsuario.foto.focus();
        verificador=false;
      }*/else if (!document.formUsuario.direccion.value) {
        alert("Debes indicar tu dirección");
        document.formUsuario.direccion.focus();
        verificador=false;
      } else if (!document.formUsuario.ciudad.value) {
        alert("Debes indicar tu ciudad de origen.");
        document.formUsuario.ciudad.focus();
        verificador=false;
      } else if (!document.formUsuario.nacimiento.value) {
        alert("Debes indicar tu fecha de nacimiento");
        document.formUsuario.nacimiento.focus();
        verificador=false;  
      } else if (!document.formUsuario.numerofono.value && !document.formUsuario.numerocasa.value) {
        //alert("Debes ingresar un Número de contacto");
        document.formUsuario.numerofono.focus();
        verificador=false; 
      } else if (!document.formUsuario.genero.value) {
        alert("Indicar tu genero");
        document.formUsuario.genero.focus();
        verificador=false; 
      } else if (!document.formUsuario.estadocivil.value) {
        alert("Debes indicar tu estado civil");
        document.formUsuario.estadocivil.focus();
        verificador=false; 
      } else if (!document.formUsuario.tipousuario.value) {
        alert("Seleccionar un tipo de usuario");
        document.formUsuario.tipousuario.focus();
        verificador=false;                         
      }
      if (verificador) {
        document.formUsuario.submit();      
      }
    }
  }

  window.onload = function () {
    //document.getElementById("submitButton").onclick = validarDatosContacto(this.value);
  }
</script> <!-- script para validar el ingreso de datos y valores -->


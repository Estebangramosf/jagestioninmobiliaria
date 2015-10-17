      <form name="formUsuario" method="post" action="inc/procesaInformacionUsuario.php" enctype="application/x-www-form-urlencoded">
          <div class="" id="">
              <article class="form-group">                
                <input name="id" type="hidden" required="" class="form-control input-sm" id="id" placeholder="Tu ID *" data-validation-required-message="Ingrese su id." value="" >
                <p class="help-block text-danger"></p>
              </article>
              <article class="form-group col-xs-6">
                <label>Su Nombre</label>
                <input maxlength="30" name="nombre" type="text" required="" onbLur="validarDatosContacto(1)" class="form-control input-sm" id="nombre" placeholder="Su Nombre *" data-validation-required-message="Ingrese su nombre." value="" >
                <p class="help-block text-danger"></p>
              </article>
              <article class="form-group col-xs-6">
                <label>Su Apellido</label>             
                <input maxlength="30" name="apellido" type="text" required="" onbLur="validarDatosContacto(2)" class="form-control input-sm" id="apellido" placeholder="Su Apellido *" data-validation-required-message="Ingrese su apellido." value="" >
                <p class="help-block text-danger"></p>
              </article>
              <article class="form-group col-xs-6">
                <label>Su Clave</label>
                <input maxlength="15" name="clave" type="password" required="" onbLur="validarDatosContacto(3)" class="form-control input-sm" id="clave" placeholder="Su Clave *" data-validation-required-message="Ingrese una clave." value="" >
                <p class="help-block text-danger"></p>
              </article>
              <article class="form-group col-xs-6">
                <label>Repita su Clave</label>              
                <input maxlength="15" name="claveRep" type="password" required="" onbLur="validarDatosContacto(4)" class="form-control input-sm" id="claveRep" placeholder="Repetir Clave *" data-validation-required-message="Vuelva a ingresar su clave." value="" >
                <p class="help-block text-danger"></p>
              </article>              
              <article class="form-group">
                <label>Su Correo (ser&aacute; su usuario)</label>
                
                <p class="help-block text-danger"><input  onbLur="validarDatosContacto(5)" name="correo" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required="required" class="form-control input-sm" id="correo" placeholder="ejemplo@dominio.com" data-validation-required-message="Ingrese su dirección de e-mail." maxlength="40"/></p>
              </article>
              <article class="form-group">
                <label>Indique su n&uacute;mero movil</label>
                <input maxlength="15" name="numerofono" type="number" required="" onbLur="validarDatosContacto(6)" class="form-control input-sm" id="numerofono" placeholder="Su N&uacute;mero Movil *" data-validation-required-message="Ingrese su nombre." value="" >
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
              <article class="btn-group btn-group-sm-6">                    
                    <input type="button" name="limpiar" class="btn btn-group-justified btn-info btn-xs" id="submitButton" value="Limpiar" onclick = "validarDatosContacto(this.value)" />
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

    valor = valor;
    var verificador=true;
    document.formUsuario.accion.value=valor;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    /*
      nombre, apellido, correo, clave, claveRep, numerofono
    */
    /**/
      if(valor=="Limpiar"){        
        document.formUsuario.nombre.value = "";
        document.formUsuario.apellido.value = "";
        document.formUsuario.clave.value = "";
        document.formUsuario.claveRep.value = "";
        document.formUsuario.correo.value = "";
        document.formUsuario.numerofono.value = "";
        verificador=false;
      }
      //document.formUsuario.informacion.value;
    /**/    
    if(valor=="Cancelar"){document.formUsuario.submit();}
    else{
      if (!document.formUsuario.nombre.value) {        
        document.formUsuario.nombre.focus();
        document.getElementById("informacion").value = "Nombre requerido";
        verificador=false;
      } else if (!document.formUsuario.apellido.value) { 
        document.formUsuario.apellido.focus();
        document.getElementById("informacion").value = "Apellido requerido";
        verificador=false;    
      } else if (!document.formUsuario.clave.value) {
        document.formUsuario.clave.focus();
        document.getElementById("informacion").value = "Clave requerido";
        verificador=false;
      } else if (!document.formUsuario.claveRep.value) {
        document.formUsuario.claveRep.focus();
        document.getElementById("informacion").value = "Repetir clave";
        verificador=false;
      } else if (document.formUsuario.claveRep.value != document.formUsuario.clave.value) {
        document.formUsuario.claveRep.focus();
        document.getElementById("informacion").value = "Las claves no coinciden";
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
      } else if (!document.formUsuario.numerofono.value) {
        //alert("Debes ingresar un Número de contacto");
        document.formUsuario.numerofono.focus();
        document.getElementById("informacion").value = "Campo telefono requerido";
        verificador=false; 
      }                          
      if(verificador&&valor=='Registrar'){
        document.formUsuario.submit();
      }        
    }
  }

  window.onload = function () {
    //document.getElementById("submitButton").onclick = validarDatosContacto(this.value);
  }
</script> <!-- script para validar el ingreso de datos y valores -->


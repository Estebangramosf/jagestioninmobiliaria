
  </div>
<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
          <h2>Acerca de</h2>
          <p>Somos una empresa dedicada a la gesti&oacute;n inmobiliaria, contamos con servicio de compra y venta, arriendos y administraci&oacute;n de inmuebles.</p>
          <p><a class="btn-xs btn-default" href="nosotros.php" role="button">Ver m&aacute;s &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>Contacto</h2>
          <p>Pasaje Ricardo Videla Pineda 691, Paseo San Carlos 3 depto 503 torre B, Coquimbo, Chile.</p>
          <p><a class="btn-xs btn-info" href="index.php">www.jagestioninmobiliaria.cl</a></p>
          <p><a class="btn-xs btn-default" href="contacto.php" role="button">Ver m&aacute;s &raquo;</a></p>
        </div>
        <div class="col-md-3">
          <h2>Necesita ayuda?</h2>
          <p>La empresa bajo este rubro esta supervisada y cumple con los estandares de calidad, permisos y esa regida bajo los reglamentos pertenecientes a la reforma de Chile.</p>
          <p><a class="btn-xs btn-default" href="index.php" role="button">Ver m&aacute;s &raquo;</a></p>
        </div>
        <div class="col-md-3">
            <h2>Redes Sociales</h2>
            <div class="fb-page" data-href="https://www.facebook.com/pages/JA-Gestion-Inmobiliaria/1460469907597947?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/JA-Gestion-Inmobiliaria/1460469907597947?fref=ts"><a href="https://www.facebook.com/pages/JA-Gestion-Inmobiliaria/1460469907597947?fref=ts">J&amp;A Gestion Inmobiliaria</a></blockquote></div></div>
        </div>        
      </div>


      <hr>

      <footer>
          <a href="index.php">
              <img src="img/LOGOJA.png" WIDTH="48" HEIGHT="31"/>            
          </a>
          <p>Gesti&oacute;n Inmobiliaria 2015, Reservados todos los derechos.&copy;</p>
          <p>Desarrollado por <a href="#"> <span style="color:#9be2f9;font-size: 100%;" > Int</span><span style="color:#f6e68d;font-size: 110%;" >Web</span></a></p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>

<!--Botón Ir Arriba-->
<div id="IrArriba" style="display: block;">
  <a href="#Arriba"><span class="glyphicon glyphicon-collapse-up"></span></a>
</div>
<div id="IrAbajo" style="display: block;">
  <a href="#Abajo"><span class="glyphicon glyphicon-collapse-down"></span></a>
</div>
<script type="text/javascript">
//<![CDATA[
// Botón para Ir Arriba
jQuery.noConflict();
jQuery(document).ready(function() {
  jQuery("#IrArriba").hide();
  jQuery(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 100) {
        jQuery('#IrArriba').fadeIn();
      } else {
        jQuery('#IrArriba').fadeOut();
      }
    });
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() < 1000 ) {
        jQuery('#IrAbajo').fadeIn();
      } else {
        jQuery('#IrAbajo').fadeOut();
      }
    });    
    jQuery('#IrArriba').click(function () {
      jQuery('body,html').animate({
      scrollTop: 0}, 650);
      return false;
    });
    jQuery('#IrAbajo').click(function () {
      jQuery('body,html').animate({
      scrollTop: $(document).height(1200)}, 650);
      return false;
    });    
  });
});
//]]>
</script>
<!--Botón Ir Arriba-->   
    
<!--Start of Tawk.to Script
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/55ad356a29ac8aa73236ab57/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
End of Tawk.to Script-->

</html>

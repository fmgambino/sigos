<div class="section text-center">
  <div class="clearfix">

    <?php if (!$installed) : ?>

      <i class="status fa fa-check-circle-o" style="font-size: 50px;"></i>
      <br />

      <span style="line-height: 50px;">¡Felicidades! Ha instalado el
        <strong><?php echo($settings['title']); ?></strong> exitosamente!
      </span>

      <div style="margin: 15px 0 15px 0px; color: #d73b3b;">
          No olvide eliminar el directorio de instalación.
      </div>

      <?php else : ?>

        <i class="status fa fa-close" style="font-size: 50px; color:red;"></i>
        <br />

        <div style="margin: 15px 0 15px 0px; color: #d73b3b;">
          Parece que esta aplicación ya está instalada! No se puede volver a instalar de nuevo.
        </div>

      <?php endif; ?>

      <a class="go-to-login-page" href="<?php echo $dashboard_url; ?>">
        <div>
          <div style="font-size: 100px;"><i class="fa fa-desktop"></i></div>
          <div>IR A PARA LA PÁGINA DE INICIO DE SESION</div>
        </div>
      </a>
      
      <link rel="stylesheet" href="../assets/css/myStylesEG.css">

      <!--FOOTER COPYRIGHT EG START -->
          <p class="copyrightEG" >Todos los derechos reservados &copy; 2021 - by <a href="https://instagram.com/electronicagambino">Electronica Gambino</a></p>
      <!--FOOTER COPYRIGHT EG END -->

    </div>
  </div>

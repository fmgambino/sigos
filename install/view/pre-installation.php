<link rel="stylesheet" href="assets/css/myStylesEG.css">

<div class="section">
  <p>1. Compruebe su configuración. <strong>PHP</strong> cumple los siguientes requisitos:</p>
  <hr />
  <div>
    <table>
      <thead>
        <tr>
          <th width="25%">Configuración</th>
          <th width="25%">Actual</th>
          <th>Requerido</th>
          <th width="15%" class="text-center">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>PHP Version</td>
          <td>
            <?php echo $current_php_version; ?>
          </td>
          <td>
            <?php echo $php_version_required; ?> >=</td>
            <td class="text-center">
              <?php if ($php_version_success) { ?>
                <i class="status fa fa-check-circle-o"></i>
              <?php } else { ?>
                <i class="status fa fa-times-circle-o"></i>
              <?php } ?>
            </td>
          </tr>
          <tr>
            <td>allow_url_fopen</td>
            <td>
              <?php if ($allow_url_fopen_success) { ?>
                On
              <?php } else { ?>
                Off
              <?php } ?>
            </td>
            <td>On</td>
            <td class="text-center">
              <?php if ($allow_url_fopen_success) { ?>
                <i class="status fa fa-check-circle-o"></i>
              <?php } else { ?>
                <i class="status fa fa-times-circle-o"></i>
              <?php } ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="section">
    <p>2. Compruebe que las extensiones que se enumeran a continuación sean <strong>instaladas/habilitadas</strong> en su servidor:</p>
    <hr />
    <div>
      <table>
        <thead>
          <tr>
            <th width="25%">Extensiones</th>
            <th width="25%">Actual</th>
            <th>Requerido</th>
            <th width="15%" class="text-center">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($settings["extensions"] as $value) { ?>
            <tr>
              <td>
                <?php echo($value); ?>
              </td>
              <td>
                <?php if (extension_loaded($value)) { ?>
                  On
                <?php } else { ?>
                  Off
                <?php } ?>
              </td>
              <td>On</td>
              <td class="text-center">
                <?php if (extension_loaded($value)) { ?>
                  <i class="status fa fa-check-circle-o"></i>
                <?php } else { ?>
                  <i class="status fa fa-times-circle-o"></i>
                <?php } ?>
              </td>
            </tr>
          <?php }; ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="section">
    <p>3. Asegúrese de haber configurado el permiso para <strong>Leyendo y escribiendo</strong> en el siguiente
    directorios y archivos:</p>
    <hr />
    <div>
      <table>
        <thead>
          <tr>
            <th>Archivos</th>
            <th width="15%" class="text-center">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($settings["writeable_directories"] as $value) { ?>
            <tr>
              <td>
                <?php echo $value; ?>
              </td>
              <td class="text-center">
                <?php if (is_writeable(".." . $value)) { ?>
                  <i class="status fa fa-check-circle-o"></i>
                  <?php
                } else {
                    $all_requirement_success = false; ?>
                  <i class="status fa fa-times-circle-o"></i>
                <?php
                } ?>
              </td>
            </tr>
          <?php }; ?>
        </tbody>
      </table>
    </div>
  </div>
<!--FOOTER INSTALL SIGOS EG START -->
  <link rel="stylesheet" href="../assets/css/myStylesEG.css">

  <div class="panel-footer">
    <button <?php if (!$all_requirement_success) {
                    echo "disabled=disabled" ;
                } ?> class="btn btn-info
      form-next"><i class='fa fa-chevron-right'></i> Siguiente ^_^ ...</button>

 <!--FOOTER COPYRIGHT EG START -->
      <p class="copyrightEG" >Todos los derechos reservados &copy; 2021 - by <a href="https://instagram.com/electronicagambino">Electronica Gambino</a></p>
 <!--FOOTER COPYRIGHT EG END -->

  </div>

<!--FOOTER INSTALL SIGOS EG END -->
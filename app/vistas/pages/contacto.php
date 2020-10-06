<?php
require_once RUTA_APP . '/vistas/inc/header.php';
?>

<div class="col-md-6">
  <div class="card shadow">
    <div class="card-body">
      <h3>Contactanos</h3>
      <form action="<?php echo RUTA_URL ?>pages/enviar" method="POST">
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" placeholder="Nombre" maxlength="60" name="Nombre" class="form-control form-control-sm"  required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="">Fono</label>
          <input type="text" placeholder="Fono" maxlength="60" name="Fono" class="form-control form-control-sm" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="">Correo</label>
          <input type="email" name="Correo"  placeholder="Correo" class="form-control form-control-sm" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="">Asunto</label>
          <input type="text" placeholder="Asunto" maxlength="60" name="Asunto" class="form-control form-control-sm" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="">Mensaje</label>
          <textarea class="form-control" placeholder="Mensaje" maxlength="1500" name="Mensaje" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-dark" name="button">Enviar</button>
      </form>
    </div>
  </div>
</div>

<?php
require_once RUTA_APP . '/vistas/inc/footer.php';
?>



<?php
if ( $_SESSION['success'] != '' ) {
  echo "
  <script>

  var notification = alertify.notify('Su correo se envio con exito', 'success', 5, function(){  console.log('dismissed'); });

  </script>
  ";
  $_SESSION['success'] = "";
}
?>

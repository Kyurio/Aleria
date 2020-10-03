<?php
require_once RUTA_APP . '/vistas/inc/header.php';
?>

<div id="intranet">



  <label for="">input ejemplo</label>
  <input type="text" v-model="ejemplo" name="" value="">
  <hr>
  <br>
  <p>{{ ejemplo }}</p>


  <button type="button" class="btn btn-sm btn-success" @click="alert" name="button">soy un alert</button>



  <div class="" v-if="estado === true">
      visible
  </div>
  <div class="" v-else>
       no visible
  </div>



</div>

<?php
require_once RUTA_APP . '/vistas/inc/footer.php';
?>

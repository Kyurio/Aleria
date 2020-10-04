<?php
require_once RUTA_APP . '/vistas/inc/header.php';
?>
<div id="intranet">


  <!--  componente cabecera intranet -->
  <?php require_once RUTA_APP . '/helpers/components/cabecera.php' ?>
  <!-- end cabecera intranet -->

  <!-- tabs contendio intranet -->
  <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

      <!-- contenido de dashboard -->
      <div class="mt-2 py-2">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">dashboard</h6>

            <!-- dashboard -->
            <div class="row">
              <div class="col-md-4">
                <div class="card shadow">
                  <div class="card-body">

                    <h3>Clientes</h3>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card shadow">
                  <div class="card-body">

                    <h3>Visitas</h3>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card shadow">
                  <div class="card-body">

                    <h3>Redes Sociales</h3>

                  </div>
                </div>
              </div>

            </div>
            <!-- end dashboard -->

            <!-- div grafico estads visitas -->
            <div class="row mt-3">
              <div class="col-xl-8">
                <div class="card shadow">
                  <div class="card-body">

                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="card shadow">
                  <div class="card-body">

                    <div class="d-flex">

                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">

                          <div class="p-2">Flex item</div>

                          <div class="ml-auto">
                            <span class="badge badge-success">
                              22%<i class="fa fa-arrow-up"></i>
                            </span>
                          </div>

                        </li>
                        <li class="list-group-item">
                          Traffic<span class="badge badge-danger ml-auto">5%<i class="fa fa-arrow-down ml-1"></i></span>
                        </li>
                        <li class="list-group-item">
                          Orders
                          <span class="badge badge-info ml-auto">14</span>
                        </li>
                        <li class="list-group-item">
                          Issues
                          <span class="badge badge-info ml-auto">123</span>
                        </li>
                        <li class="list-group-item">
                          Messages<span class="badge badge-info ml-auto">8</span>
                        </li>
                      </ul>

                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- end div grafico visitas -->


          </div>
        </div>
      </div>
      <!-- contenido de dashboard -->

    </div>

    <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">

      <!-- contenido de productos -->
      <div class="mt-2 py-2">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">productos</h6>

            <div class="mt-1 mb-1 py-1">
              <button type="button" data-toggle="modal" data-target="#AgregarModal" class="btn btn-sm btn-info" title="editar" name="button"><i class="fas fa-plus"></i></button>
            </div>

            <br>
            <table class="table table-sm table-hover text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Accion</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($datos['productos'] as $item): ?>
                  <tr>
                    <th scope="row"><?php echo $item->cantidad ?></th>
                    <td><?php echo $item->nombre ?></td>
                    <td><?php echo $item->estado ?></td>
                    <td><?php echo $item->precio ?></td>
                    <td>
                      <button type="button" data-toggle="modal" data-target="#EditarModal<?php echo $item->id_producto?>" class="btn btn-sm btn-primary" title="editar" name="button"><i class="fas fa-pen"></i></button>

                      <!-- edit agregar -->
                      <div class="modal fade" id="EditarModal<?php echo $item->id_producto ?>" tabindex="-1" aria-labelledby="EditarModal" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="Edit">Editar: </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form class="" action="<?php echo  RUTA_URL ?>pages/EditarProducto" method="post">
                                <div class="form-group">
                                  <label for="NombreProducto">Nombre Producto</label>
                                  <input type="text" class="form-control" id="NombreProducto" value="<?php echo $item->nombre ?>" aria-describedby="NombreProducto" placeholder="Nombre Producto">
                                </div>
                                <div class="form-group">
                                  <label for="NombreProducto">Cantidad</label>
                                  <input type="number" min="1" class="form-control" id="CantidadProducto" name="CantidadProducto" value="<?php echo $item->cantidad ?>" aria-describedby="CantidadProducto" placeholder="Cantidad Producto">
                                </div>
                                <div class="form-group">
                                  <label for="PrecioProducto">Precio</label>
                                  <input type="number" min="1" class="form-control" id="PrecioProducto" name="PrecioProducto" value="<?php echo $item->precio ?>" aria-describedby="PrecioProducto" placeholder="Precio Producto">
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="button" class="btn btn-sm btn-primary">Grabar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end modal editar -->
                      <form class="" action="<?php echo RUTA_URL ?>pages/EliminarProducto" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $item->id_producto; ?>">
                        <button type="submit" class="btn btn-sm btn-danger" title="eliminar" name="button"><i class="fas fa-trash"></i></button>
                      </form>
                      <button type="button" class="btn btn-sm btn-info" title="descativar" name="button"><i class="fas fa-ban"></i></button>
                      <button type="button" class="btn btn-sm btn-success" title="activar" name="button"><i class="fas fa-check"></i></button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            <!-- agregar agregar -->
            <div class="modal fade" id="AgregarModal" tabindex="-1" aria-labelledby="AgregarModal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="Edit">Agregar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="" action="<?php echo  RUTA_URL ?>pages/CrearProducto" method="post">
                      <div class="form-group">
                        <label for="NombreProducto">Nombre Producto</label>
                        <input type="text" class="form-control" id="NombreProducto" name="NombreProducto" aria-describedby="NombreProducto" placeholder="Nombre Producto">
                      </div>
                      <div class="form-group">
                        <label for="NombreProducto">Cantidad</label>
                        <input type="number" min="1" class="form-control" id="CantidadProducto" name="CantidadProductos" aria-describedby="CantidadProducto" placeholder="Cantidad Producto">
                      </div>
                      <div class="form-group">
                        <label for="PrecioProducto">Precio</label>
                        <input type="number" min="1" class="form-control" id="PrecioProducto"  name="PrecioProducto" aria-describedby="PrecioProducto" placeholder="Precio Producto">
                      </div>
                      <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-sm btn-primary">Grabar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- end modal agregar -->

          </div>
        </div>
      </div>
      <!-- contenido de productos -->

    </div>

    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

      <!-- contenido de correo -->
      <div class="mt-2 py-2">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">correo</h6>

            <?php foreach ($datos['correos_recibidos'] as $item): ?>
              <p>
                <a data-toggle="collapse" @click="Leido('<?php echo $item->Id ?>')" href="#Mensjae<?php echo $item->Id ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                  <small>Correo de:</small> <?php echo $item->nombre ?>
                </a>
              </p>
              <hr>
              <div class="collapse" id="Mensjae<?php echo $item->Id ?>">
                <p>
                  <?php echo $item->correo ?> - <?php echo $item->fono ?>
                </p>
                <p>
                  <?php echo $item->mensaje ?>
                </p>


              </div>
            <?php endforeach; ?>


          </div>
        </div>
      </div>
      <!-- contenido de correo -->
    </div>

    <div class="tab-pane fade" id="estats" role="tabpanel" aria-labelledby="stats-tab">

      <!-- contenido de estadisticas -->
      <div class="mt-2 py-2">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">estadisticas</h6>

            <div class="row">
              <div class="col-md-4">
                <ul class="list-group mt-4">
                  <li class="list-group-item">Visitas</li>
                  <li class="list-group-item">Mensajes</li>
                  <li class="list-group-item">Productos</li>
                  <li class="list-group-item">Clientes</li>
                </ul>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- contenido de estadisticas -->


    </div>

    <div class="tab-pane fade" id="clientes" role="tabpanel" aria-labelledby="clientes-tab">

      <!-- contenido de configuracion -->
      <div class="mt-2 py-2">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">clientes</h6>
            <hr>

          </div>
        </div>
        <!-- contenido de configuracion -->

      </div>

    </div>

    <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="blog-tab">

      <!-- contenido de configuracion -->
      <div class="mt-2 py-2">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">Blog</h6>
            <hr>

          </div>
        </div>
        <!-- contenido de configuracion -->

      </div>

    </div>

    <div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="config-tab">

      <!-- contenido de configuracion -->
      <div class="mt-2 py-2">
        <div class="card">
          <div class="card-body">
            <h6 class="font-weight-bold">configuracion</h6>
            <hr>

            <!-- tabs de configuraciones -->
            <div class="row">
              <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                  <a class="nav-link active" id="v-pills-social-tab" data-toggle="pill" href="#v-pills-social" role="tab" aria-controls="v-pills-social" aria-selected="true">Redes sociales</a>
                  <a class="nav-link" id="v-pills-profile-tab"  data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Nosotros</a>
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ubicacion</a>

                </div>
              </div>
              <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">

                  <!-- configuracion de redes sociales y contacto -->
                  <div class="tab-pane fade show active" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">

                    <!-- formulario de configuracion de redes sociales -->
                    <div class="row">

                      <!-- formulario -->
                      <div class="col-md-6">
                        <form class="" action="<?php echo RUTA_URL ?>pages/AddSocial" method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Facebook</label>
                            <input class="form-control form-control-sm" type="text" name="facebook" placeholder="www.facebook.com/doublecode">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Twitter</label>
                            <input class="form-control form-control-sm" type="text"  name="twitter" placeholder="@doublecode01">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Instagram</label>
                            <input class="form-control form-control-sm" type="text" name="instagram" placeholder="@doublecode01">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Linkedin</label>
                            <input class="form-control form-control-sm" type="text" name="linkedin" placeholder="/doublecode">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Pinterest</label>
                            <input class="form-control form-control-sm" type="text" name="pinterest" placeholder="@doublecode">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Google plus</label>
                            <input class="form-control form-control-sm" type="text" name="google_plus" placeholder="@doublecode">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Whatsapp</label>
                            <input class="form-control form-control-sm" type="text" name="whatsapp" placeholder="+569 65063392">
                          </div>
                          <button type="submit" class="btn btn-dark btn-sm" name="button">Grabar</button>
                        </form>
                      </div>
                      <!-- end formulario -->

                      <!-- listado de redes sociales -->
                      <div class="col-md-6">
                        <ul class="list-group">
                          <?php foreach ($datos['redes'] as $item): ?>
                            <li class="list-group-item"><?php echo $item->facebook ?></li>
                          <?php endforeach; ?>
                        </ul>
                      </div>

                      <!-- end resultado -->
                    </div>
                    <!-- formulario de configuracion de redes sociales -->


                  </div>
                  <!-- end configuracion de redes sociales y contacto -->

                  <!-- configuracion de informacion general de la web -->
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                    <!-- configuracion textos de la web - informacion quienes somos etc -->
                    <form class="" action="index.html" method="post">
                      <div class="container">
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Titulo</small></label>
                          <input class="form-control form-control-sm" type="text" placeholder="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>cuadro cuatro</small></label>
                          <textarea class="form-control form-control-sm" type="text" placeholder=""></textarea>
                          <small id="emailHelp" class="form-text text-muted">se utilizara en el link en toda la web como acceso directo</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Titulo</small></label>
                          <input class="form-control form-control-sm" type="text" placeholder="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>cuadro cuatro</small></label>
                          <textarea class="form-control form-control-sm" type="text" placeholder=""></textarea>
                          <small id="emailHelp" class="form-text text-muted">se utilizara en el link en toda la web como acceso directo</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Titulo</small></label>
                          <input class="form-control form-control-sm" type="text" placeholder="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>cuadro cuatro</small></label>
                          <textarea class="form-control form-control-sm" type="text" placeholder=""></textarea>
                          <small id="emailHelp" class="form-text text-muted">se utilizara en el link en toda la web como acceso directo</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Titulo</small></label>
                          <input class="form-control form-control-sm" type="text" placeholder="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>cuadro cuatro</small></label>
                          <textarea class="form-control form-control-sm" type="text" placeholder=""></textarea>
                          <small id="emailHelp" class="form-text text-muted">se utilizara en el link en toda la web como acceso directo</small>
                        </div>
                        <!-- end informacion web -->

                        <button type="button" name="button">Grabar</button>

                      </div>
                    </form>


                  </div>
                  <!-- end configuracion de informacion general de la web -->

                  <!-- geo map ubicacion -->
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                    <div class="container">
                      <div class="form-group">
                        <label for="exampleInputEmail1"><small>mapa</small></label>
                        <input class="form-control form-control-sm" type="text" placeholder="titulo">
                      </div>
                      <div class="form-group">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13738.4902480071!2d-71.20425024999999!3d-30.58819865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2scl!4v1598726460856!5m2!1ses-419!2scl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      </div>

                    </div>
                    <!-- end geo map ubicacion -->

                  </div>
                  <!-- end geo map-->

                </div>
              </div>
              <!-- end tabs configuraciones -->

            </div>
          </div>
        </div>
        <!-- contenido de configuracion -->

      </div>

    </div>

  </div>

  <!-- end contenido -->

  <?php
  require_once RUTA_APP . '/vistas/inc/footer.php';
  ?>

  <?php
  if ( $_SESSION['success'] != '' ) {
    echo "
    <script>

      var notification = alertify.notify('".$_SESSION["mensaje"]."', 'success', 5, function(){  console.log('dismissed'); });

    </script>
    ";
    $_SESSION['success'] = "";
  }
  ?>

<!-- menu de cabecera de intranet -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="nav navbar-nav"  id="myTab" role="tablist">
      <li class="nav-item active" role="presentation">
        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="products-tab" data-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="false"><i class="fas fa-box-open"></i> Productos</a>
      </li>
      <li class="nav-item" role="presentation">

        <?php if ($datos['cantidad_de_mails'] > 0): ?>
          <span class="badge badge-dot badge-dot-sm badge-danger float-right"> <small> <?php echo $datos['cantidad_de_mails']; ?></small> </span>
        <?php endif; ?>

        <a class="nav-link float-right" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-envelope"></i> Contacto</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="Estars-tab" data-toggle="tab" href="#estats" role="tab" aria-controls="estats" aria-selected="false"><i class="far fa-chart-bar"></i> Estadisticas</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="clientes-tab" data-toggle="tab" href="#clientes" role="tab" aria-controls="clientes" aria-selected="false"><i class="fas fa-user"></i> clientes</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="blog-tab" data-toggle="tab" href="#blog" role="tab" aria-controls="blog" aria-selected="false"><i class="fas fa-file"></i> Blog</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="config-tab" data-toggle="tab" href="#config" role="tab" aria-controls="config" aria-selected="false"><i class="fas fa-cog"></i> Configuracion</a>
      </li>


    </ul>
  </div>
</nav>

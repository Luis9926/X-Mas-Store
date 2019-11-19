<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calcetines</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <style>
        body{
            background-color: #b1cbbb!important;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger text-light">
      <a class="navbar-brand text-light" href="/Home">X-Mas-Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item active">
            <a class="nav-link text-light" href="Calcetines">Socks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="Sweaters">Sweaters</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="login">Sign in / login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-light" href="#" tabindex="-1" aria-disabled="true">About Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <?php foreach ($Calcetines as $C):?>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="<?= e($C['imagen'])?>" class="card-img" alt="Error al cargar imagen">
              <h3 class="text-center"><?= e($C['nombre'])?></h3>
            </div>
            <div class="col">
              <div class="card-body">
                <h5>Descripcion</h5>
                <h6><?= e($C['descripcion'])?></h6>
                <h5>Material</h5>
                <h6><?= e($C['material'])?></h6>
                <h5>Material</h5>
                <h6><?= e($C['nombre'])?></h6>
                <h5>Tipo de lavado</h5>
                <h6><?= e($C['tipo_lavado'])?></h6>
                <h5>Pares disponibles</h5>
                <h6><?= e($C['cantidad_pares'])?></h6>
                <h5>Tamaños</h5>
                <h6><?= e($C['tamanos'])?></h6>
                <button class="btn-primary" type="button" name="button-<?= e($C['id'])?>">Comprar</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </body>
</html>

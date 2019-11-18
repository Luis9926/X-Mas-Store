<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ugly Sweaters</title>
    <style>
        body{
            background-color: #eea29a!important;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-danger text-light">
  <a class="navbar-brand text-light" href="/Home">X-Mas-Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Socks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Sweaters</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-light" href="#" tabindex="-1" aria-disabled="true">About Us</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <?php foreach ($sweaters as $s): ?>
        <div class="card text-center text-white bg-danger m-5" style="width: 18rem;">
            <img src="<?= e($s['imagen']) ?>" class="card-img-top" style="max-width:150px;align-self:center;" alt="...">
            <h5 class="card-title"><?= e($s['nombre']) ?></h5>

            <div class="card-body">
                <p class="card-text"><?= e($s['descripcion']) ?></p>
            </div>

            <a data-target="#modal<?= e($s['id_sweater']) ?>" data-toggle="modal" class="btn btn-light text-danger">Details</a>


            <div class="card-footer  text-light">
             Product ID <?= e($s['id_sweater']) ?>
        </div>
        </div>
    <?php endforeach; ?>
</div>

<div id="modal<?= e($s['id_sweater']) ?>" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?= e($s['nombre']) ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <img src="<?= e($s['imagen']) ?>" class="card-img-top" style="max-width:150px;align-self:center;" alt="...">
      <br>
      <b>Material:</b>  <?= e($s['material']) ?>
      <br>
      <b>Wash Type:</b>  <?= e($s['tipo_lavado']) ?>
      <br>
      <b>Closure Type:</b>  <?= e($s['tipo_cierre']) ?>
      <br>
      <b>Collar:</b>  <?= e($s['cuello']) ?>
      <br>
      <b>Sleeves:</b>  <?= e($s['mangas']) ?>
      <br>
      <b>Sizes:</b>  <?= e($s['tamanos']) ?>
      <br>
      <p><?= e($s['descripcion']) ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Buy</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
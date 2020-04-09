<?php
include 'carrito.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand">Lodo de la empresa!</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Carrito (0)</a>
                </li>
            </ul>
        </div>
    </nav>
    <br/>
    <br/>
    <div class="container">
        <div class="alert aler-success">
            <?php echo $mensaje; ?>
            <a href="" class="badge badge-success">Ver carrito</a>
        </div>

        <div class="row">

            <?php foreach ($productos as $producto){ ?>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top"
                    height="317px"
                    src="<?php echo asset('storage').'/'.$producto['imagen'];?>"
                    title="<?php echo $producto['nombre']; ?>" alt="titulo"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="<?php echo $producto['descripcion']; ?>"
                    >
                    <div class="card-body">
                        <span><?php echo $producto['nombre']; ?></span>
                        <h5 class="card-title"><?php echo $producto['precio']; ?></h5>
                        <p class="card-text"><?php echo $producto['tipo']; ?></p>

                        <form method="post" action="{{url('/carrito')}}" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'], "AES-128-ECB", "cotz"); ?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'], "AES-128-ECB", "cotz"); ?>">
                            <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'], "AES-128-ECB", "cotz"); ?>">
                            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, "AES-128-ECB", "cotz"); ?>">
                            
                            <button class="btn btn-primary" type="submit" 
                            value="Agregar" name="btnAddCar">Agregar al carrito</button>

                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
    <script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
    </script>
</body>
</html>

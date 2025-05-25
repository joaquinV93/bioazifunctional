<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIOAZI FUCTIONAL NUTRITION | HOME</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/css_index/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include("./vistas_complementos/nav.html") ?>
    <!--CARRUSEL DE IMAGENES !-->

    <style>
        /* Cambiar color de las flechas de navegación a negro */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
            /* Invierte el color (de blanco a negro) */
        }

        /* Cambiar color de los indicadores a negro */
        .carousel-indicators button {
            background-color: black !important;
            border: 1px solid black !important;
        }
    </style>

    <div id="carouselExampleCaptions" class="carousel slide mx-auto mb-3" style="width: 100%;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/banner1.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/banner2.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/banner3.jpg" class="d-block w-100 h-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--caja de productos  -->
    <div class="row p-0 m-0 my-5 justify-content-center align-items-center">
        <div class="product-card m-1">
            <div class="product-image-container">
                <img src="./img/productos/producto-1.jpg" alt="Descripción del producto" class="product-image">
            </div>
            <div class="product-content">
                <h3 class="product-title">Aminos</h3>
                <p class="product-description">Descripción breve y atractiva del producto en máximo 2 líneas.</p>
                <div class="product-price">$99.99</div>
            </div>
            <div class="row p-0 m-0 justify-content-center mb-2">
                <button type="button" class="btn btn-info m-1" style="width: fit-content;"><i class="bi bi-info"></i></button>
                <button type="button" class="btn btn-success m-1" style="width: fit-content;"><i class="bi bi-cart-plus"></i></button>
            </div>
        </div>
        <div class="product-card m-1">
            <div class="product-image-container">
                <img src="./img/productos/producto-1.jpg" alt="Descripción del producto" class="product-image">
            </div>
            <div class="product-content">
                <h3 class="product-title">Aminos X2</h3>
                <p class="product-description">Descripción breve y atractiva del producto en máximo 2 líneas.</p>
                <div class="product-price">$99.99</div>

            </div>
            <div class="row p-0 m-0 justify-content-center mb-2">
                <button type="button" class="btn btn-info m-1" style="width: fit-content;"><i class="bi bi-info"></i></button>
                <button type="button" class="btn btn-success m-1" style="width: fit-content;"><i class="bi bi-cart-plus"></i></button>
            </div>
        </div>
        <div class="product-card m-1">
            <div class="product-image-container">
                <img src="./img/productos/producto-1.jpg" alt="Descripción del producto" class="product-image">
            </div>
            <div class="product-content">
                <h3 class="product-title">Aminos X3</h3>
                <p class="product-description">Descripción breve y atractiva del producto en máximo 2 líneas.</p>
                <div class="product-price">$99.99</div>

            </div>
            <div class="row p-0 m-0 justify-content-center mb-2">
                <button type="button" class="btn btn-info m-1" style="width: fit-content;"><i class="bi bi-info"></i></button>
                <button type="button" class="btn btn-success m-1" style="width: fit-content;"><i class="bi bi-cart-plus"></i></button>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 mx-start mx-3 mb-3">
        <ul class="list-group">
            <li style="background-color: transparent;" class="list-group-item text-center"><a href="descripcion">Descripción</a></li>
            <li style="background-color: transparent;" class="list-group-item text-center"><a href="caracteristicas">Caracteristicas y beneficios</a></li>
            <li style="background-color: transparent;" class="list-group-item text-center"><a href="informacion_nutrimental">Información Nutrimental</a></li>
            <li style="background-color: transparent;" class="list-group-item text-center"><a href="detalles">Detalles</a></li>
        </ul>
    </div>
    <?php include("./vistas_complementos/footer.html") ?>
</body>

</html>
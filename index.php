<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIOAZI FUCTIONAL NUTRITION | HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/css_index/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include("./vistas_complementos/nav.html") ?>

    <!--CARRUSEL DE IMAGENES !-->

    <div id="carouselExampleCaptions" class="carousel slide mx-auto" style="width: 80%;"> <!-- Ancho del carrusel al 80% -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide mx-auto" style="width: 80%; height: 400px;"> <!-- Ancho y altura fijos -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/img_index/banner1.jpg" class="d-block w-100 h-100" alt="..."> <!-- Ajustar imagen al 100% del contenedor -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titulo del producto1</h5>
                        <p>descripcion, no mayor a 50 caracteres</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/img_index/banner1.jpg" class="d-block w-100 h-100" alt="..."> <!-- Ajustar imagen al 100% del contenedor -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titulo del producto2</h5>
                        <p>descripcion, no mayor a 50 caracteres</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/img_index/banner1.jpg" class="d-block w-100 h-100" alt="..."> <!-- Ajustar imagen al 100% del contenedor -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Titulo del producto3</h5>
                        <p>descripcion, no mayor a 50 caracteres</p>
                    </div>
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



        <?php include("./vistas_complementos/footer.html") ?>
</body>

</html>
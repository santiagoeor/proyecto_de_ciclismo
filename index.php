<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Bienvenidos a su casa ciclista</title>
    <link rel="icon" href="img/logo.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="templates/solartec/lib/animate/animate.min.css" rel="stylesheet">
    <link href="templates/solartec/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="templates/solartec/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="templates/solartec/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="templates/solartec/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> -->
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <?php 
    include "views/includes/menu.php";
?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <?php 
    include "views/includes/slider.php";
?>
    <!-- Carousel End -->

    <!-- *********************************************** -->
    <!-- ZONA DE CONTENIDO -->
    <!-- *********************************************** -->

    <div class="container">
        <div class="row">

            <div align="center" class="col md-12">
                <H1><b>Bienvenidos a su casa ciclista</b></H1>
            </div>

        </div>
    </div> <br> <br>

    <!-- Servicios crear butones hacia las diferentes paginas web -->

    <div class="container">
        <div class="row">

            <div class="col md-4">
                <H4>Inspecci??n a tu bicicleta</H4>
                <img src="img/inspenciondetubicicleta.jpg" class="d-block w-100" alt="..." width="100" height="350">
                <a href="mantenimiento.php"
                    class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
            </div>

            <div class="col md-4">
                <!-- Lavada y lubricaci??n de la cadena y guayas -->
                <H4>Mantenimiento basico</H4>
                <img src="img/mantenimiento.jpg" class="d-block w-100" alt="..." width="100" height="350">
                <a href="mantenimiento.php"
                    class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
            </div>

            <div class="col md-4">
                <H4>Mantenimiento completo</H4>
                <img src="img/mantenicompleto.jpg" class="d-block w-100" alt="..." width="100" height="350">
                <a href="mantenimiento.php"
                    class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
            </div>

        </div>
    </div><br><br>

    <!-- repuestos y biomecanica -->

    <div class="container">
        <div class="row">

            <div class="col md-6">
                <H4>Repuestos</H4>
                <img src="img/repuestos.jpg" class="d-block w-100" alt="..." width="100" height="350">
                <a href="repuestos_herramientas.php"
                    class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
            </div>

            <div class="col md-6">
                <H4 align="center">Biomecanica</H4>
                <img src="img/biomecanica.jpg" class="d-block w-100" alt="..." width="100" height="350">
                <a href="biomecanica.php"
                    class="btn btn-primary rounded-pill py-3 px-5 animated slidenlnLeft">Detalles</a>
            </div>

        </div>
    </div> <br> <br>

    <!-- Video -->

    <div class="container">
        <div class="row">
            <div class="col md-12" align="center">
                <H3>CUIDADOS CON TU BICICLETA</H3>
                <iframe width="600" height="400" src="https://www.youtube.com/embed/rkcU0tjczvc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>




    <!-- *********************************************** -->
    <!-- FIN ZONA DE CONTENIDO -->
    <!-- *********************************************** -->

    <!-- Footer Start -->
    <?php 
    	include "views/includes/footer.php";
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="templates/solartec/lib/wow/wow.min.js"></script>
    <script src="templates/solartec/lib/easing/easing.min.js"></script>
    <script src="templates/solartec/lib/waypoints/waypoints.min.js"></script>
    <script src="templates/solartec/lib/counterup/counterup.min.js"></script>
    <script src="templates/solartec/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="templates/solartec/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="templates/solartec/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="templates/solartec/js/main.js"></script>
</body>

</html>
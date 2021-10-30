<!doctype html>
<html lang="en">
<?php include("fungsi.php"); ?>

    <head>
        <?php
        $menu = ambil_menu();
        $asset = ambil_asset("index");
        ?>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $menu[0]['nama_menu']?></title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link href="css/aos.css" rel="stylesheet">
        <link href="css/templatemo-nomad-force.css" rel="stylesheet">
    </head>
    
    <body>
        <main>
            <section class="hero" id="hero">
                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                        Hello, there!
                    </h1>
                    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        Welcome to my gallery of <strong class="custom-underline">cute animals</strong>
                    </p>
                </div>
                <div class="videoWrapper">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="images/bg.jpg">
                    </video>
                </div>
                <div class="overlay"></div>
            </section>

            <nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <strong>Soraya's Gallery</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href=<?php echo $menu[0]['href']?>><?php echo $menu[0]['nama_menu']?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=<?php echo $menu[1]['href']?>><?php echo $menu[1]['nama_menu']?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=<?php echo $menu[2]['href']?>><?php echo $menu[2]['nama_menu']?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=<?php echo $menu[3]['href']?>><?php echo $menu[3]['nama_menu']?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=<?php echo $menu[4]['href']?>><?php echo $menu[4]['nama_menu']?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-12 p-0">
                        <img src=<?php echo $asset[1]['asset']?> class="img-fluid about-image" alt="">
                    </div>

                    <div class="col-lg-3 col-12 bg-dark">
                        <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                            <h5 class="text-white mb-3" data-aos="fade-up">My name is Soraya MS, and I like to shoot photos of cute animals!</h5>
                            <p class="text-secondary-white-color" data-aos="fade-up">I'm passionate to travel to new places and capture nature's beauty.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 p-0">
                        <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src=<?php echo $asset[2]['asset']?> class="img-fluid team-image" alt="">

                                    <div class="team-thumb bg-warning">
                                        <h5 class="text-white mb-0">Corals</h5>

                                        <p class="text-secondary-white-color mb-0">Marine Invertebrates</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src=<?php echo $asset[3]['asset']?> class="img-fluid team-image" alt="">

                                    <div class="team-thumb bg-primary">
                                        <h5 class="text-white mb-0">Gourami Fish</h5>

                                        <p class="text-secondary-white-color mb-0">Trichogaster Lalius</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src=<?php echo $asset[4]['asset']?> class="img-fluid team-image" alt="">

                                    <div class="team-thumb bg-success">
                                        <h5 class="text-white mb-0">Piranhas</h5>

                                        <p class="text-secondary-white-color mb-0">Piraña</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src=<?php echo $asset[5]['asset']?> class="img-fluid team-image" alt="">

                                    <div class="team-thumb bg-info">
                                        <h5 class="text-white mb-0">Tree Frog</h5>

                                        <p class="text-secondary-white-color mb-0">Centrolenidae</p>
                                    </div>
                                </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h6 class="text-white">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Jakarta, Indonesia
                        </h6>
                    </div>
                    <div class="col-lg-3 col-5 ms-auto">
                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
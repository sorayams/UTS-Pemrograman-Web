<!doctype html>
<html lang="en">
<?php include("fungsi.php");?>

    <head>
        <?php
        $menu = ambil_menu();
        $asset = ambil_asset("mantaray");
        ?>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $menu[6]['nama_menu']?></title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap" rel="stylesheet">
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
                    <h1 class="news-detail-title text-white mt-lg-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <?php echo $menu[6]['nama_menu']?>
                    </h1>
                </div>

                <div class="videoWrapper">
                    <img src=<?php echo $asset[0]['asset']?> class="img-fluid news-detail-image" alt="">
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

            <section class="news-detail section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-10 mx-auto">
                            <h2 class="mb-3" data-aos="fade-up">We all know Manta Rays have weird shape, but did you know...</h2>
                            <h4><br><br>Name history</br></h4>
                            <p class="me-4" data-aos="fade-up">
                                The word 'manta' is actually Spanish for 'blanket' or 'cloak', and it's pretty easy to see the connection.

                            <h4><br>They love open water</br></h4>
                            <p class="me-4" data-aos="fade-up">
                                While stingrays prefer digging through the sandy sea bottom, manta rays love to cruise the open oceans in tropical and sub-tropical areas, and only get close to the sea bed to get cleaned. In fact, mantas have to swim constantly to stay alive; the forward propulsion flushes water over their gills.

                            <h4><br>They're smart cookies</br></h4>
                            <p class="me-4" data-aos="fade-up">
                                Manta rays have the largest brain to body weight ratio of any living fish; giving it enough smarts to make the average dolphin jealous.</p>

                            <h4><br>Their spots are like fingerprints</br></h4>
                            <p class="me-4" data-aos="fade-up">
                                Just like leopard sharks, manta rays can be individually identified by the spots on the underside of their bodies.

                            <h4><br>Better the devil you know</br></h4>
                            <p class="me-4" data-aos="fade-up">
                                The manta ray and the devil ray are often confused, but they're actually two different species. The main point of difference is devil rays have pointier wings and horn-like cephalic fins; whereas the manta’s have round labrador ear-looking plankton scoopers.

                            <h4><br>Meet the next generation</br></h4>
                            <p class="me-4" data-aos="fade-up">
                                Manta rays birth little manta pups about every second year, conveniently rolled up like little burritos. However, this is a relatively slow reproduction rate, which makes mantas vulnerable to overfishing.</p>

                            <div class="clearfix my-4 mt-lg-0 mt-5">
                                <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                                    <figure class="figure">
                                        <img src=<?php echo $asset[1]['asset']?> class="img-fluid news-image" alt="">

                                        <figcaption class="figure-caption text-end">Bluespotted ribbontail ray.</figcaption>
                                    </figure>
                                </div>
                            </div>

                            <div class="social-share d-flex mt-5">
                                <span class="me-4" data-aos="zoom-in">Share this article:</span>

                                <a href="#" class="social-share-icon bi-facebook" data-aos="zoom-in"></a>

                                <a href="#" class="social-share-icon bi-twitter mx-3" data-aos="zoom-in"></a>

                                <a href="#" class="social-share-icon bi-envelope" data-aos="zoom-in"></a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


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

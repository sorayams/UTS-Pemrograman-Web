<!doctype html>
<html lang="en">
<?php include("fungsi.php"); ?>

<head>
    <?php
    $menu = ambil_menu();
    $asset = ambil_asset("funfact");
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $menu[3]['nama_menu']?></title>

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

    <section class="section-padding pb-0" id="about">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="mb-5 text-center" data-aos="fade-up">Did you know...?</h2>
                </div>

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="news-thumb" data-aos="fade-up">
                        <a href=<?php echo $menu[5]['href']?> class="news-image-hover news-image-hover-warning">
                            <img src=<?php echo $asset[0]['asset']?> class="img-fluid large-news-image news-image" alt="">
                        </a>

                        <div class="news-category bg-warning text-white">News</div>

                        <div class="news-text-info">
                            <h5 class="news-title">
                                <a href=<?php echo $menu[5]['href']?> class="news-title-link"><?php echo $menu[5]['nama_menu']?></a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100">

                            <a href=<?php echo $menu[6]['href']?> class="news-image-hover news-image-hover-primary">
                                <img src=<?php echo $asset[1]['asset']?> class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-primary text-white">Events</div>
                        </div>

                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href=<?php echo $menu[6]['href']?> class="news-title-link"><?php echo $menu[6]['nama_menu']?></a>
                                </h5>

                                <div class="d-flex flex-wrap">
                                            <span class="text-muted me-2">
                                                <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                                Jakarta Aquarium,
                                            </span>

                                    <span class="text-muted">October 22, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                        <div class="news-top w-100" data-aos="fade-up">

                            <a href=<?php echo $menu[7]['href']?> class="news-image-hover news-image-hover-success">
                                <img src=<?php echo $asset[2]['asset']?> class="img-fluid news-image" alt="">
                            </a>

                            <div class="news-category bg-success text-white">News</div>
                        </div>

                        <div class="news-bottom w-100">
                            <div class="news-text-info">
                                <h5 class="news-title">
                                    <a href=<?php echo $menu[7]['href']?> class="news-title-link"><?php echo $menu[7]['nama_menu']?></a>
                                </h5>

                                <div class="d-flex flex-wrap">
                                            <span class="text-muted me-2">
                                                <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                                Jakarta Aquarium,
                                            </span>

                                    <span class="text-muted">October 21, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> <br><br><br>
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
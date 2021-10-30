<!doctype html>
<html lang="en">
<?php include("fungsi.php"); ?>

<head>
    <?php
    $menu = ambil_menu();
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $menu[1]['nama_menu']?></title>

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
        <div class="container mb-5 pb-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3" data-aos="fade-up">Why Cute Animals?</h2>
                </div>
                <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                    <p class="me-4" data-aos="fade-up" data-aos-delay="300">Why not? After all, cute animals are fun to look at. At the end of the day, after tons and tons of work, we all need a breather. So, just relax and enjoy nature's cuteness. You can also help me capture more of cute animals photo by <strong class="custom-underline"><a rel="nofollow" href="http://paypal.me/sorayams" target="_blank">send me a generous donation</a></strong> for me to travel! :p </p>
                </div>

                <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                    <p data-aos="fade-up" data-aos-delay="500">If you're like me, who likes animals but sometimes are too afraid to touch them, then this website is perfect for you. You can just sit back, relax, and look at them through my gallery. Neat, isn't it?<br>Well, that's it! I hope y'all have a fabulous day. <3 <br>-Soraya MS</br></p>
                </div>

            </div>
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
        </section>



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
</main>
</body>
</html>
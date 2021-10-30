<!doctype html>
<html lang="en">
<?php include("fungsi.php");?>

<head>
    <?php
    $menu = ambil_menu();
    $asset = ambil_asset("piranhas");
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $menu[7]['nama_menu']?></title>

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
                <?php echo $menu[7]['nama_menu']?>
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
                    <h2 class="mb-3" data-aos="fade-up">I bet you didn't know these!</h2>
                    <h4><br><br>PIRANHA ATTACKS ON HUMANS ARE SELDOM FATAL.</br></h4>
                    <p class="me-4" data-aos="fade-up">
                        Bites usually happen out of the water: Captured piranhas may chomp on fishermen who try to extricate them from hooks and nets. For the most part, free-swimming piranhas in their natural habitat avoid people, though they may target human swimmers when water levels are low and food is scarce. This probably explains a 2017 incident in which 70 river-bathers were attacked by piranhas in Rosario, Argentina. (Everyone survived.)</p>

                    <h4><br>SCHOOLS OF PIRANHAS AREN'T TRYING TO GANG UP ON THEIR VICTIMS.</br></h4>
                    <p class="me-4" data-aos="fade-up">
                        Research suggests traveling in schools is a defensive strategy against predators like cormorants, caimans, and river dolphins. In a 2005 study, cormorant models were shown to groups of captive red-bellied piranhas. The fish who swam alone or in small clusters had faster breathing rates—a clear symptom of stress. By gathering in larger numbers, individual piranhas lower their odds of getting eaten.</p>

                    <h4><br>MOST PIRANHAS ARE OMNIVORES.</br></h4>
                    <p class="me-4" data-aos="fade-up">
                        Even well-known meat-eating species like the red-bellied and black piranhas can’t resist the occasional fruit, leaf, or fig. Other species eat mainly nuts and seeds. These fish remove the tough outer shells with their teeth before devouring the contents.</p>

                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src=<?php echo $asset[1]['asset']?> class="img-fluid news-image" alt="">

                                <figcaption class="figure-caption text-end">Piranha's Razor Sharp Teeth.</figcaption>
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

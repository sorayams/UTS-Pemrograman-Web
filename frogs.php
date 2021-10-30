<!doctype html>
<html lang="en">
<?php include("fungsi.php"); ?>

<head>
    <?php
    $menu = ambil_menu();
    $asset = ambil_asset("frogs");
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $menu[5]['nama_menu']?></title>

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
                <?php echo $menu[5]['nama_menu']?>
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
                    <h4><br><br>A group of frogs is called an army</br></h4>
                    <p class="me-4" data-aos="fade-up">
                        Mimicking an army, large groups of frogs come together during the breeding season to search for food. Moving in a large group provides frogs who would otherwise be vulnerable traveling alone with an increased chance of survival.</p>

                    <h4><br>Frogs drink water through their skin</br></h4>
                    <p class="me-4" data-aos="fade-up">
                        Frogs drink water through what’s known as a ‘drinking patch’, which is located on the underside of a frog’s belly and thighs that allows them to absorb water through their skin.</p>

                    <h4><br>Frogs are found all over the world</br></h4>
                    <p class="me-4" data-aos="fade-up">
                        Except for Antarctica. Far too cold! While frogs live both on land and in water, they move more efficiently on the ground by jumping and climbing. Using their long legs, many frogs can leap 20 times their body height! </p>

                    <h4><br>The world’s largest frog species is known as the ‘Goliath Frog’</br></h4>
                    <p class="me-4" data-aos="fade-up">
                        The ‘Goliath Frog’ lives in Western Africa and can grow to be around a foot long and weigh up to 7 pounds! In contrast, the world’s smallest frogs are less than 1/2 inch long.</p>

                    <h4><br>A frog’s eyes and nose are on the very top of their heads</br></h4>
                    <p class="me-4" data-aos="fade-up">
                        This allows them to see and breathe while most of their body is underwater. The protruding eyes on the frog able them to see in front, to the sides, and slightly behind them. Their eyes also allow them to swallow their food. Each time the frog blinks, they are pulling their eyes down to the roof of their mouth to push the food down their throat. Some of the most common foods that frogs eat are bugs, spiders, worms, slugs, larvae, and sometimes small fish.

                        Now that your knowledge of frogs has expanded beyond Kermit, you can share these facts with your friends. Have a favorite frog fact that we missed? Tell us in the comments below.</p>

                    <div class="clearfix my-4 mt-lg-0 mt-5">
                        <div class="col-md-6 float-md-end mb-3 ms-md-3" data-aos="fade-up">
                            <figure class="figure">
                                <img src=<?php echo $asset[1]['asset']?> class="img-fluid news-image" alt="">

                                <figcaption class="figure-caption text-end">Strawberry Poison Frog.</figcaption>
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

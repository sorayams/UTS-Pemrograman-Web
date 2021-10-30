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

    <title><?php echo $menu[4]['nama_menu']?></title>

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

<>


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

<section class="contact section-padding" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-12 mx-auto">

                <h2 class="mb-4 text-center" data-aos="fade-up">Any recommendations?</h2>

                <form action="#" method="post" class="contact-form" role="form" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-6 col-6">
                            <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                        </div>

                        <div class="col-lg-6 col-6">
                            <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                        </div>

                        <div class="col-12 my-4">
                            <label for="message" class="form-label">Give me your best recommendations!</label>

                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="What animal, and where can I find them? " required></textarea>

                        </div>

                    <div class="col-lg-5 col-12 mx-auto mt-5">
                        <button type="submit" class="form-control">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
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

</body>
</html>
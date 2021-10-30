<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header_files.php -->
    <?php require_once('includes/header_files.php') ?>
    <title>Tech Acoustic Sevices Page</title>
</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <!-- //Header.php -->
                <?php require_once('includes/header.php') ?>
                <!-- //navbar.php -->
                <?php require_once('includes/navbar.php') ?>
            </div>

            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                            <!-- <img style="height: 10px; width:auto;" src="img/worker.jpg" alt="Image" class="tm-service-img"> -->
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Hire Us</h2>
                                <p>Need any IT services, from software installation, web design, graphic design, video editing to computer repairs, we've got you covered. </p>
                                <a href="menu.php" class="btn btn-primary">Hire</a>
                            </div>
                        </div>
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                            <!-- <img src="img/services-1.jpg" alt="Image" class="tm-service-img"> -->
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Tech Store</h2>
                                <p>Need a brand new headset, computer, hard drive, flash drive, projectors... we've got you covered. At our store we sell at the cheapest prices. you can check out our inventory, purchase online and retrieve them at any of our branches throughout the country.</p>
                                <a href="menu.php" class="btn btn-primary">Shop</a>
                            </div>
                        </div>

                        <div class="media my-3 tm-service-media tm-service-media-img-l">
                            <!-- <img src="img/services-3.jpg" alt="Image" class="tm-service-img"> -->
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Tech Blog</h2>
                                <p>In our blog, we discuss the most useful topics relating to technology. Our aim is to make tech and tech concepts easy for everyone to understand.</p>
                                <a href="menu.php" class="btn btn-primary">Visit</a>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>

        <div class="tm-row">
            <div class="tm-col-left text-center">
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>
            </div>
            <div class="tm-col-right tm-col-footer">
                <!-- footer.php -->
                <?php require_once('includes/footer.php') ?>
            </div>
        </div>

        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <!-- home_js_files.php -->
    <?php require_once('includes/home_js_files.php') ?>
</body>

</html>
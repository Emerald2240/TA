<!DOCTYPE html>
<html lang="en">

<head>
   <!-- header_files.php -->
   <?php require_once('includes/header_files.php') ?>
    <title>Tech Acoustic About Page</title>
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
                    <section class="tm-content tm-about">
                        <h2 class="mb-5 tm-content-title">About Tech Acoustic</h2>
                        <hr class="mb-4">
                        <div class="media my-3">
                            <i class="fas fa-bookmark fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>We are a tech company based in Enugu State, founded in 2018. Our Main office is
                                    located at 110 Ogui Road Enugu, Opposite Nnamdi Azikiwe Stadium.</p>
                            </div>
                        </div>
                        <div class="media my-3">
                            <i class="fas fa-shapes fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>We believe in our homegrown talent and the optimal use of its human resources. All our
                                    Engineers, Programmers, Designers, Salesmen are Nigerian; not just Nigerian, but one
                                    of the best in their fields.</p>
                            </div>
                        </div>
                        <!-- <div class="media my-3">
                            <i class"fas fa-draw-polygon fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>Nunc id hendrerit nunc. Etiam ultricies arcu sem, vel dapibus lacus lacinia quis.
                                    Nunc auctor placerat nisi ac ultrices.</p>
                            </div>
                        </div>
                        <div class="media my-3">
                            <i class="fab fa-creative-commons-share fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>Vestibulum imperdiet hendrerit nibh. Integer sit amet lacus et nunc auctor tincidunt
                                    eu ac sapien. Ut suscipit velit eget faucibus finibus.</p>
                            </div>
                        </div> -->

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
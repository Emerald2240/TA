
<?php
//require_once "config/connect.php";
require_once "php/functions.php";
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- header_files.php -->
   <?php require_once('php/includes/header_files.php') ?>
    <title>Tech Acoustic Home Page</title>
</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
               <!-- //Header.php -->
               <?php require_once('php/includes/header.php') ?>
            <!-- //navbar.php -->
            <?php require_once('php/includes/navbar.php') ?>
            </div>

            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        <h2 class="mb-5 tm-content-title">Proudly Nigerian</h2>
                        <p class="mb-5">We provide the best locally sourced tech services, from web development,
                            computer sales and repairs, software development, software downloads and sale of computer
                            accessories </p>
                        <hr class="mb-5">
                        <p class="mb-5">We've got you covered. Our workers are homegrown and nearby whenever you may
                            need them.</p>
                        <a href="menu.php" class="btn btn-primary">Continue...</a>
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
              <?php require_once('php/includes/footer.php') ?>
            </div>
        </div>

        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

  <!-- home_js_files.php -->
  <?php require_once('php/includes/home_js_files.php') ?>
</body>

</html>
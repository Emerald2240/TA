<!DOCTYPE html>
<html lang="en">

<head>
   <!-- header_files.php -->
   <?php require_once('php/includes/header_files.php') ?>
    <title>Tech Acoustic Menu and Top rated items Page</title>
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
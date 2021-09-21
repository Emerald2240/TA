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
                    <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                            <!-- <img style="height: 10px; width:auto;" src="img/worker.jpg" alt="Image" class="tm-service-img"> -->
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">TAPQ</h2>
                                <p>Records past exam questions and incorporates database functions with them, so as to make it easier for students to prepare. As of now it is only available for Enugu State University of Science and Technology (ESUT).</p>
                                <a href="tapq" class="btn btn-primary">Visit</a>
                            </div>
                        <!-- </div>
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                            
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">TAGP Calculator</h2>
                                <p>App that records student results and using the preferred formula, calculates their GPA's</p>
                                <a href="tagpc" class="btn btn-primary">Visit</a>
                            </div>
                        </div>
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                            
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">TA Currency</h2>
                                <p>An app that downloads up to 115 latest rates of different currencies from the web for users to easily convert to anyother</p>
                                <a href="ta_currency" class="btn btn-primary">Visit</a>
                            </div>
                        </div>
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                           
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">TA List</h2>
                                <p>An simple To-do List app that helps you organise your tasks and even purchases.</p>
                                <a href="ta_list" class="btn btn-primary">Visit</a>
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
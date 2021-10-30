<!DOCTYPE html>
<html lang="en">

<head>
   <!-- header_files.php -->
   <?php require_once('includes/header_files.php') ?>
    <title>Tech Acoustic Contact Page</title>
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
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Contact Us</h2>
                        <p class="mb-85">Got any feedback, ideas or complaints? Tell us. we'd love to hear from you.</p>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <textarea rows="6" name="message" class="form-control" placeholder="Message..." required=""></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Send</button>
                            </div>
                        </form>
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
<?php
//require_once "config/connect.php";
require_once "functions/functions.php";
//session_start();
?>
<div class="tm-col-right">
    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
            <ul class="navbar-nav text-uppercase">
                <li class="nav-item  <?php activepageId('index.php'); ?>">
                    <a class="nav-link tm-nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php activepageId('services.php'); ?>">
                    <a class="nav-link tm-nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item <?php activepageId('apps.php'); ?>">
                    <a class="nav-link tm-nav-link" href="apps.php">Apps</a>
                </li>
                <li class="nav-item <?php activepageId('top.php'); ?>">
                    <a class="nav-link tm-nav-link" href="top.php">Top</a>
                </li>
                <li class="nav-item <?php activepageId('about.php'); ?>">
                    <a class="nav-link tm-nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item <?php activepageId('contact.php'); ?>">
                    <a class="nav-link tm-nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
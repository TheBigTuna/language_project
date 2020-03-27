<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="en">
        <head>
          <?php
              include("resources/connection.php"); 
          ?>
              <!-- <title><?= $_SESSION['CurrentPage']; ?></title> -->
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- <meta name='description' content="<?= $_SESSION['Description']; ?>">             -->
              <!-- <meta name="author" content="<?= $_SESSION['ArticleAuthor']; ?>"> -->
              <!-- <link rel="icon" href="/images/halfLogo.png"> -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href="/style/bootstrap.css" rel="stylesheet">
              <link href="/style/animate.css" rel="stylesheet">
              <link href="/style/main.css" rel="stylesheet">
              <link href="/style/pricing.css" rel="stylesheet">
              <link href="/style/gnome.css" rel="stylesheet">
              <link href="/style/sun.css" rel="stylesheet">
              <link href="/style/clouds.css" rel="stylesheet">
              <link href="/style/bear.css" rel="stylesheet">
              <link href="/style/stripe.css" rel="stylesheet">
              <script src="/script/jquery-3.4.1.js"></script>
              <script src="/script/bootstrap.js"></script>
        </head>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 20000;">
            <a class="navbar-brand" href="/">GrowthBook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="/">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign In</a>
                </li>
                </ul>
            </div>
        </nav>
        

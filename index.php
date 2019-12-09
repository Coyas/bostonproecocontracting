<?php 
    // Start the session
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    unset($_SESSION['alert']);
    unset($_SESSION['msg']);
    if($_SESSION['email'] == false){
        unset($_SESSION['alert']);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/site.css">
    <link rel="stylesheet" href="assets/css/homemedia.css">
    <link rel="shortcut icon" href="assets/img/Log-04.svg" >
    <script src="https://kit.fontawesome.com/f5dad94487.js" crossorigin="anonymous"></script>
    

    <title>Boston Eco Pro Contracting</title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WTDZJXG');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154147828-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-154147828-1');
    </script>

  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTDZJXG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Image and text -->
    <nav id="nav" class="container">
        <div class="row align-items-center">
            <div class="col-md-2 logo">
                <a class="" href="index.php">
                    <img src="assets/img/Log-02.svg" width="120" height="120" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <ul class="text">
                    <li class="cabe">Home Boston Eco Pro Contracting</li>
                    <li class="corpo">Fire&Water.Cleanup & Restauration</li>
                    <li class="rabu">24 HOUR EMERGENCY SERVICE</li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <figure>
                    <img class="imgcentro" src="assets/img/Images Constrution.svg" alt="Imegem construction">
                    <figcaption>SITE IN CONSTRUCTION</figcaption>
                    
                </figure>
                <hr class="linha">
                <p class="co">
                    <i class="far fa-envelope"></i>  <a href="mailto:info@bostonecoprocontracting.com">info@bostonecoprocontracting.com</a>
                </p>
                <p class="con">
                    <i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/ErmsnyiAUe4KFEYy9">108 MORSE AVE BROCKTON MA/02301</a>
                </p>
                <p class="tel">
                    <a href="tel:5084688649">508-468-8649</a>
                </p>
            </div>
        </div>
    </section>

    <div class="msg">
        <i class="fas fa-long-arrow-alt-down"></i>
        <a href="sendmsg.php"><img src="assets/img/Log-06.svg" alt="send a message"></a>
    </div>

    <footer class="container">
        <div class="row">
            <div id="hfoot" class="col-md-12">
                &copy; <?= Date('Y'); ?> Home Boston Eco Pro Contracting
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/site.js"></script>
  </body>
</html>
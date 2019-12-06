
<?php 
// Start the session
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
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
    <link rel="shortcut icon" href="assets/img/Log-04.svg" >
    <script src="https://kit.fontawesome.com/f5dad94487.js" crossorigin="anonymous"></script>
    

    <title>Send Message - Boston Eco Pro Contracting</title>


    <script src="https://www.google.com/recaptcha/api.js?render=6Lefe8YUAAAAALOTrfLlvRV7VwF-aKXbw2k1IqNo"></script>
    
  </head>
  <body>

  <section class="container-fluid">
    <div class="row">
        <div id="sendMsg" class="col-md-6">
          <div id="pro" class="row">
            <div class="col-md-4">
              <ul>
                <li class="head">Home Boston Eco Pro Contracting</li>
                <li class="furo"><i class="fas fa-long-arrow-alt-left"></i><a href="index.php"> BACK TO HOME</a></li>
              </ul>
            </div>
          </div>

          <div id="formu" class="row">
            <div class="col-md-12">
              <?php if($_SESSION["alert"]){ ?>
                <div class="alert <?= $_SESSION['alert'] ?>" role="alert">
                  <?= $_SESSION["msg"] ?>
                </div>
              <?php }else { ?>
                <div class="box">
                  <h5>CONTACT</h5>
                  <form action="send.php" method="POST">
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                    <div class="form-group">
                      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <textarea name="message" class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button id="submit" type="submit" class="btn btn-primary">SEND MESSAGE</button>
                  </form>
                </div>
              <?php } ?>
              <p class="co1">
                <i class="far fa-envelope"></i>  <a href="mailto:info@bostonecoprocontracting.com">info@bostonecoprocontracting.com</a>
              </p>
              <p class="con1">
                <i class="fas fa-map-marker-alt fya"></i> <a href="https://goo.gl/maps/ErmsnyiAUe4KFEYy9">108 MORSE AVE BROCKTON MA/02301</a>
              </p>
              <p class="tel1">
                <a href="tel:5084688649">508-468-8649</a>
              </p>
            </div>
          </div>
        </div>
        <div id="text" class="col-md-6">
          <div class="row">
            <div class="col-md-4">
              <img src="assets/img/Log-04.svg" alt="">
            </div>
          </div>
          <div class="row p">
            <div class="col-md-12">
              Fire&Water <span>.</span> Cleanup & Restauration<br>
              24 HOUR EMERGENCY SERVICE
            </div>
          </div>
          <div class="row s">
            <div class="col-md-12">
            <i class="fas fa-long-arrow-alt-down"></i>
            </div>
          </div>
          <div class="row d">
            <div class="col-md-12">
               We offer both residential and<br>
               commercial services; specializing<br>
               in building, janitorial, and restoration<br>
               services including but not limited to:<br>
            </div>
          </div>
          <div class="row e">
            <div class="col-md-12">
              <ul>
                <li>MOVE IN/OUT CLEANING</li>
                <li>DAILY PORTER SERVICE</li>
                <li>COMMERCIAL/RESIDENTIAL JANITORIAL CLEANING</li>
                <li>PRE/ROUGH AND POST/FINAL CONSTRUCTION CLEANING</li>
                <li>SNOW REMOVAL</li>
                <li>DRYWALL</li>
                <li>PAINTING</li>
                <li>CARPENTRY</li>
                <li>LIGHT FRAMING</li>
                <li>FLOORING, STRIP AND WAX, GROUT CLEANING</li>
                <li>FIRE & WATER DAMAGE CLEANING</li>
                <li>MOLD MITIGATION & REMEDIATION AND ITS FOLLOW-UP RECONSTRUCTION</li>
                <li>DEMOLITION HELPERS</li>
              </ul>
            </div>
          </div>
          <div class="row s">
            <div class="col-md-12">
            <i class="fas fa-long-arrow-alt-up"></i>
            </div>
          </div>
          <p class="footer">&copy; <?= Date('Y'); ?> Home Boston Eco Pro Contracting</p>
        </div>
    </div>
  </section>

    <!-- Optional JavaScript -->
    <script>
      grecaptcha.ready(function() {
          grecaptcha.execute('6Lefe8YUAAAAALOTrfLlvRV7VwF-aKXbw2k1IqNo', {action: 'homepage'}).then(function(token) {
            console.log(token)
            document.getElementById("g-recaptcha-response").value = token;
          });
      });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/site.js"></script>
  </body>
</html>
<?php
session_start();

if (isset($_GET["error"])) { $error = htmlspecialchars($_GET["error"]);}              // Variablen falls ein nutzer schon einmal versucht hat sich zu registrieren
if (isset($_GET["aktenzeichen"])) { $aktenzeichen = htmlspecialchars($_GET["aktenzeichen"]);}
if (isset($_GET["username"])) { $username = htmlspecialchars($_GET["username"]);}
if (isset($_GET["hoehenangst"])) { $hoehenangst = htmlspecialchars($_GET["hoehenangst"]);}
if (isset($_GET["login"])) { $login = htmlspecialchars($_GET["login"]);}
if (isset($_GET["register"])) { $register = htmlspecialchars($_GET["register"]);}

?>
<html class="no-js" lang="de">

<head>
  <meta charset="utf-8">
  <title>OMM: Kick Off 2020</title>
  <link rel="icon" href="img/favicon.png" type="image" sizes="16x16">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

<!-- Login Button -->
<?php if ($_SESSION['login'] == TRUE) { ?>
  <div class="position-absolute mt-3 mr-3 signup-button">
    <a class="btn btn-outline-warning" href="<?php
    switch ($_SESSION["user_team"]) {
      case 1:
        echo "https://chat.whatsapp.com/G0zWY1GUif8Eoq52TgcHbf";
        break;
      case 2:
        echo "https://chat.whatsapp.com/ILRTX7owihx3qnvXY4CUTA";
        break;
      case 3:
        echo "https://chat.whatsapp.com/D1YnreBhRiMEC4GY2MnHEY";
        break;
    }
    ?>" role="button">Link zur Whatsappgruppe</a>
    <a class="btn btn-outline-warning" href="logout.php" role="button">Abmelden</a>
  </div>
<?php }
?>

<!-- Countdown -->
<div id="countdown-box" class="mb-3 mr-5">
  <p id="countdown" class="custom-color"></p>
</div>


<div id="impressum" class="container">
  <div class="row mx-auto">
    <div class="col mx-auto col-md-7 mt-3 mb-5 justify-content-center text-center">
    <div class='impressum text-color socialText'><h1>Impressum</h1><p>Angaben gemäß § 5 TMG</p>
      <p>Betreiber und Kontakt</p><br>
      <p>Julian Klummer <br>
        Pfaffenwaldring 74-C<br>
        70569 Stuttgart <br>
      </p><p> <strong>Vertreten durch: </strong><br>
        Julian Klummer<br>
      </p><p><strong>Kontakt:</strong> <br>
        Telefon: 0171-6275469<br>
        E-Mail: <a href='mailto:jk194@hdm-stuttgart.de'>jk194@hdm-stuttgart.de</a></br></p><p><strong>Haftungsausschluss: </strong><br><br><strong>Haftung für Inhalte</strong><br><br>
        Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen. Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.<br><br><strong>Haftung für Links</strong><br><br>
        Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p><br>
    </div>


  </div>
</div>


<!-- Footer -->
<footer class="page-footer font-small background-footer">
  <div class="footer-copyright text-center py-3">
    <a href="impressum.php" class="badge badge-dark"> Impressum</a>
  </div>
</footer>
<!-- Footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php if (isset($error)) { ?>
  <script>

      $(document).ready(function () {
          // Handler for .ready() called.
          $('html, body').animate({
              scrollTop: $('#login-form').offset().top
          });
      });
  </script>
<?php } ?>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Oct 8, 2020 09:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "Kick Off!";
        }
    }, 1000);
</script>


<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $(".login-link").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>

<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap/bootstrap.js"></script>

</body>

</html>


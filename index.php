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
  <meta name="description" content="OMM: Kick Off 2020">
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
<?php } else { ?>
  <a class="btn btn-outline-warning signup-button position-absolute mt-3 mr-3 login-link" href="#login-form" role="button">Anmelden</a>
<?php }
?>

<!-- Countdown -->
<div id="countdown-box" class="mb-3 mr-5">
  <p id="countdown" class="custom-color"></p>
</div>

<!-- Login Alert -->
<?php if ($login) { ?>
  <div class="container-fluid mx-auto h-100 position-absolute">
    <div class="row justify-content-center alert-margin">
      <div class="col-md-7 alert alert-warning alert-dismissible fade show" role="alert">
        <?php if ($register) { ?>
          <strong>Deine Registrierung war erfolgreich!</strong><br>
          <p class="mb-0">Du wurdest dem <strong><?php if($login) {
                switch ($_SESSION["user_team"]) {
                  case 1:
                    echo "Labor-Team";
                    break;
                  case 2:
                    echo "Spuren-Team";
                    break;
                  case 3:
                    echo "Ermittler-Team";
                    break;
                }
              }
              ?></strong> zugeteilt</p>
        <?php } else { ?>
          <strong>Erfolgreich eingeloggt</strong><br>
          <p class="mb-0">Willkommen im <strong><?php if($login) {
                switch ($_SESSION["user_team"]) {
                  case 1:
                    echo "Labor-Team";
                    break;
                  case 2:
                    echo "Spuren-Team";
                    break;
                  case 3:
                    echo "Ermittler-Team";
                    break;
                }
              }
              ?></strong></p>
        <?php }
        ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php }
?>

<!-- Header/Background -->
<div id="header">
  <img src="img/header.jpg" class="img-fluid back mx-auto d-block" alt="Responsive image">
</div>

<!-- Content Bloecke -->
<div id="trailer" class="container-xl mt-5 mb-5">
  <div class="row">
    <div class="col-lg-7">
      <div class="ml-lg-5">
        <p class="image-text image-text-right text-color">In der Influencer Kanzlei von Ernst Haft wurde eine
        Leiche in der Kaffeküche gefunden. Frau Zapzarap entdeckte das
        Opfer. Zudem wird ein Gemälde, das seit Generationen
        in Familienbesitz ist, vermisst.</p>
        <p class="image-text image-text-right text-color">
        Der Trailer zum OMM-Kickoff beleuchtet die beiden Hauptverdächtigen im Mordfall: die Ehefrau des Opfers und den Autohändler Marco – gespielt von unseren OMM-Profs Frau Spitzer und Herr Vidačković. Außerdem gibt es einen genaueren Einblick in die Ermittlungen des Kommissars. Warum leiten ihn alle Hinweise in den Waldklettergarten Schmellbachtal? An die neuen Erstis: führt die Ermittlungen weiter und ladet euch auf dieser Seite bereits das erste Rätsel herunter!
        </p>
      </div>
    </div>
    <div class="col-lg-4">
      <video width="100%" height="auto" class="mx-md-auto float-lg-right" controls>
        <source src="video/Trailer.mp4" type="video/mp4">
        <source src="video/Trailer.ogg" type="video/ogg">
        Your browser does not support HTML video.
      </video>
    </div>
  </div>
</div>

<!-- Login Form -->
<?php
if (!$_SESSION['login']) { ?>

  <div id="logindesc" class="container">
    <div class="row mx-auto mt-3">
      <div class="col mx-auto col-md-7 mt-3 mb-5 justify-content-center text-center">
        <p class="text-color socialText">
          Liebe neuen Erstis, meldet euch hier mit dem Aktenzeichen eurer Casefile an. Ihr tretet damit automatisch einem der Ermittlerteams des Kickoff-Events am 8. Oktober bei. Dort ist es eure Aufgabe, gemeinsam im Waldklettergarten Schmellbachtal einen Kriminalfall zu lösen.
        </p>
      </div>
    </div>
  </div>

<div id="login-form" class="container">
  <div class="row">
    <div class="col mx-auto col-md-7 mt-5 mb-5">
      <form method="post">
        <label for="aktenzeichen" class="custom-color">Personalnummer</label>
        <input id="aktenzeichen" type="text" class="form-control <?php if ($error == 1 or $error == 2) { echo'is-invalid'; } ?>" id="aktenzeichen" name="aktenzeichen" placeholder="XXXX" aria-describedby="aktenzeichenHelp" value="<?php if (isset($aktenzeichen)) { echo $aktenzeichen; } ?>">
        <?php if ($error == 1)
          echo'<div class="invalid-feedback">
         Gib bitte deine Personalnummer ein.
    </div>';
        if ($error == 2)
          echo'<div class="invalid-feedback">
         Gib bitte deine richtige Personalnummer ein.
    </div>';?>
        <small id="aktenzeichenHelp" class="form-text custom-color">Gib hier den Code, welcher sich auf deiner Akte befindet ein!</small>
        <button type="submit" name="submit" class="btn btn-warning mb-2 mt-3">Zum Login</button>
    </div>
    </form>
    <?php } ?>
  </div>
</div>

<!-- Socia Buttons -->

<div class="container">
  <div class="row mx-auto">
    <div class="col mx-auto col-md-7 mt-3 mb-5">
      <p class="socialText text-center text-color">Folge den Online-Medien-Management Kanälen um die Story weiter zu verfolgen und weitere Infos zum Kick-Off zu bekommen:</p>
      <div class="row mt-3">
        <div class="col justify-content-center text-center">
          <a href="https://www.instagram.com/omm.hdm/" target=”_blank” class="mx-auto">
            <svg class="socialIcon" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/">
              <g transform="matrix(5.09606,0,0,5.09606,-1485.01,-533.506)">
                <path d="M316.52,110.81C322.8,110.81 323.54,110.83 326.02,110.95C328.31,111.05 329.56,111.44 330.39,111.76C331.49,112.19 332.27,112.7 333.09,113.52C333.91,114.34 334.42,115.13 334.85,116.22C335.17,117.05 335.56,118.29 335.66,120.59C335.77,123.07 335.8,123.81 335.8,130.09C335.8,136.37 335.78,137.11 335.66,139.59C335.56,141.88 335.17,143.13 334.85,143.96C334.42,145.06 333.91,145.84 333.09,146.66C332.27,147.48 331.48,147.99 330.39,148.42C329.56,148.74 328.32,149.13 326.02,149.23C323.54,149.34 322.8,149.37 316.52,149.37C310.24,149.37 309.5,149.35 307.02,149.23C304.73,149.13 303.48,148.74 302.65,148.42C301.55,147.99 300.77,147.48 299.95,146.66C299.13,145.84 298.62,145.05 298.19,143.96C297.87,143.13 297.48,141.89 297.38,139.59C297.27,137.11 297.24,136.37 297.24,130.09C297.24,123.81 297.26,123.07 297.38,120.59C297.48,118.3 297.87,117.05 298.19,116.22C298.62,115.12 299.13,114.34 299.95,113.52C300.77,112.7 301.56,112.19 302.65,111.76C303.48,111.44 304.72,111.05 307.02,110.95C309.49,110.84 310.24,110.81 316.52,110.81M316.52,106.57C310.13,106.57 309.33,106.6 306.82,106.71C304.32,106.82 302.61,107.22 301.11,107.8C299.56,108.4 298.25,109.21 296.94,110.51C295.63,111.82 294.83,113.13 294.23,114.68C293.65,116.18 293.25,117.89 293.14,120.39C293.03,122.9 293,123.7 293,130.09C293,136.48 293.03,137.28 293.14,139.79C293.25,142.29 293.65,144 294.23,145.5C294.83,147.05 295.64,148.36 296.94,149.67C298.25,150.98 299.56,151.78 301.11,152.38C302.61,152.96 304.32,153.36 306.82,153.47C309.33,153.58 310.13,153.61 316.52,153.61C322.91,153.61 323.71,153.58 326.22,153.47C328.72,153.36 330.43,152.96 331.93,152.38C333.48,151.78 334.79,150.97 336.1,149.67C337.41,148.36 338.21,147.05 338.81,145.5C339.39,144 339.79,142.29 339.9,139.79C340.01,137.28 340.04,136.48 340.04,130.09C340.04,123.7 340.01,122.9 339.9,120.39C339.79,117.89 339.39,116.18 338.81,114.68C338.21,113.13 337.4,111.82 336.1,110.51C334.79,109.2 333.48,108.4 331.93,107.8C330.43,107.22 328.72,106.82 326.22,106.71C323.7,106.6 322.9,106.57 316.52,106.57" style="fill-rule:nonzero;"/>
                <path d="M316.52,118.02C309.85,118.02 304.44,123.43 304.44,130.1C304.44,136.77 309.85,142.18 316.52,142.18C323.19,142.18 328.6,136.77 328.6,130.1C328.59,123.42 323.19,118.02 316.52,118.02M316.52,137.93C312.19,137.93 308.68,134.42 308.68,130.09C308.68,125.76 312.19,122.25 316.52,122.25C320.85,122.25 324.36,125.76 324.36,130.09C324.36,134.42 320.85,137.93 316.52,137.93" style="fill-rule:nonzero;"/>
                <path d="M331.89,117.54C331.89,119.1 330.63,120.36 329.07,120.36C327.51,120.36 326.25,119.1 326.25,117.54C326.25,115.98 327.51,114.72 329.07,114.72C330.63,114.72 331.89,115.98 331.89,117.54" style="fill-rule:nonzero;"/>
              </g>
            </svg>
          </a>
        </div>
        <div class="col justify-content-center text-center">
          <a href="https://www.tiktok.com/@omm.hdm" target=”_blank” class="mx-auto">
            <svg class="socialIcon" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/">
              <g transform="matrix(0.5,0,0,0.5,0.0664062,-2.84217e-14)">
                <path d="M464.734,112.465C410.992,112.465 367.27,68.742 367.27,15C367.27,6.715 360.551,0 352.27,0L271.934,0C263.648,0 256.934,6.715 256.934,15L256.934,344.367C256.934,375.961 231.23,401.664 199.633,401.664C168.039,401.664 142.336,375.961 142.336,344.367C142.336,312.77 168.039,287.066 199.633,287.066C207.918,287.066 214.633,280.352 214.633,272.066L214.633,191.73C214.633,183.449 207.918,176.73 199.633,176.73C107.199,176.73 32,251.934 32,344.367C32,436.801 107.199,512 199.633,512C292.066,512 367.27,436.801 367.27,344.367L367.27,198.574C397.125,214.492 430.344,222.801 464.734,222.801C473.02,222.801 479.734,216.086 479.734,207.801L479.734,127.465C479.734,119.184 473.02,112.465 464.734,112.465ZM449.734,192.18C417.711,189.516 387.301,178.328 361.027,159.43C356.461,156.141 350.438,155.688 345.426,158.258C340.418,160.82 337.27,165.977 337.27,171.605L337.27,344.367C337.27,420.258 275.523,482 199.633,482C123.742,482 62,420.258 62,344.367C62,273.543 115.773,215.039 184.633,207.543L184.633,258.355C143.617,265.488 112.336,301.34 112.336,344.367C112.336,392.504 151.496,431.668 199.633,431.668C247.773,431.668 286.934,392.504 286.934,344.367L286.934,30L338.145,30C345.016,88.32 391.414,134.719 449.734,141.59L449.734,192.18Z" style="fill-rule:nonzero;"/>
              </g>
            </svg>
          </a>
        </div>
        <div class="col justify-content-center text-center">
          <a href="https://www.facebook.com/omm.hdm/" target=”_blank” class="mx-auto">
            <svg class="socialIcon" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/">
              <g transform="matrix(4.93542,0,0,4.93542,-110.849,-513.974)">
                <path d="M41.85,156.01L52.29,156.01L52.29,129.86L59.58,129.86L60.36,121.1L52.3,121.1L52.3,116.11C52.3,114.05 52.71,113.23 54.71,113.23L60.36,113.23L60.36,104.14L53.13,104.14C45.36,104.14 41.86,107.56 41.86,114.11L41.86,121.09L36.43,121.09L36.43,129.95L41.86,129.95L41.86,156.01L41.85,156.01Z" style="fill-rule:nonzero;"/>
              </g>
            </svg>
          </a>
        </div>
        <div class="col justify-content-center text-center">
          <a href="https://www.youtube.com/user/ommhdm" target=”_blank” class="mx-auto">
            <svg class="socialIcon" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/">
              <g transform="matrix(4.83963,0,0,4.83963,-755.45,-1732.18)">
                <g>
                  <path d="M189.03,378.73C189.85,378.73 190.99,378.3 192.16,376.91L192.16,378.52L194.87,378.52L194.87,363.94L192.16,363.94L192.16,375.01C191.83,375.42 191.09,376.1 190.57,376.1C189.99,376.1 189.85,375.71 189.85,375.12L189.85,363.94L187.14,363.94L187.14,376.13C187.14,377.57 187.58,378.73 189.03,378.73Z" style="fill-rule:nonzero;"/>
                  <path d="M176.97,374.88C176.97,377.45 178.31,378.79 180.94,378.79C183.12,378.79 184.84,377.33 184.84,374.88L184.84,367.74C184.84,365.46 183.14,363.82 180.94,363.82C178.55,363.82 176.97,365.4 176.97,367.74L176.97,374.88ZM179.76,367.98C179.76,367.18 180.13,366.59 180.89,366.59C181.72,366.59 182.08,367.16 182.08,367.98L182.08,374.76C182.08,375.55 181.68,376.14 180.95,376.14C180.2,376.14 179.77,375.53 179.77,374.76L179.77,367.98L179.76,367.98Z" style="fill-rule:nonzero;"/>
                  <path d="M170.5,378.52L173.55,378.52L173.55,370.5L177.1,358.76L174.01,358.76L172.05,366.66L169.94,358.76L166.87,358.76L170.5,370.5L170.5,378.52Z" style="fill-rule:nonzero;"/>
                </g>
                <g>
                  <path d="M198.52,381.84L166.57,381.84C163.14,381.84 160.36,384.62 160.36,388.06L160.36,403.76C160.36,407.19 163.14,409.97 166.57,409.97L198.52,409.97C201.95,409.97 204.73,407.19 204.73,403.76L204.73,388.06C204.74,384.62 201.96,381.84 198.52,381.84ZM170.83,405.32L167.92,405.32L167.92,389.23L164.91,389.23L164.91,386.5L173.83,386.5L173.83,389.23L170.82,389.23L170.82,405.32L170.83,405.32ZM181.17,405.32L178.59,405.32L178.59,403.79C178.11,404.35 177.62,404.78 177.1,405.08C175.71,405.88 173.8,405.86 173.8,403.04L173.8,391.44L176.38,391.44L176.38,402.08C176.38,402.64 176.52,403.02 177.07,403.02C177.57,403.02 178.27,402.38 178.59,401.98L178.59,391.44L181.17,391.44L181.17,405.32ZM191.11,402.44C191.11,404.16 190.47,405.49 188.75,405.49C187.8,405.49 187.02,405.15 186.3,404.25L186.3,405.32L183.69,405.32L183.69,386.5L186.3,386.5L186.3,392.56C186.88,391.85 187.67,391.26 188.59,391.26C190.48,391.26 191.11,392.86 191.11,394.74L191.11,402.44ZM200.65,398.7L195.71,398.7L195.71,401.32C195.71,402.36 195.8,403.26 196.84,403.26C197.93,403.26 197.99,402.53 197.99,401.32L197.99,400.35L200.65,400.35L200.65,401.39C200.65,404.06 199.5,405.69 196.78,405.69C194.31,405.69 193.06,403.89 193.06,401.39L193.06,395.16C193.06,392.75 194.65,391.08 196.98,391.08C199.46,391.08 200.65,392.65 200.65,395.16L200.65,398.7Z" style="fill-rule:nonzero;"/>
                  <path d="M196.87,393.52C195.91,393.52 195.72,394.19 195.72,395.15L195.72,396.55L198,396.55L198,395.15C198,394.2 197.79,393.52 196.87,393.52Z" style="fill-rule:nonzero;"/>
                  <path d="M186.83,393.6C186.65,393.69 186.47,393.83 186.3,394.02L186.3,402.67C186.51,402.9 186.71,403.06 186.91,403.16C187.33,403.37 187.95,403.39 188.23,403.02C188.38,402.82 188.46,402.51 188.46,402.06L188.46,394.89C188.46,394.42 188.37,394.07 188.18,393.82C187.86,393.42 187.28,393.37 186.83,393.6Z" style="fill-rule:nonzero;"/>
                </g>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="teaser3" class="container">
  <div class="row mx-auto">
    <div class="col mx-auto col-md-7 mt-3 mb-5 justify-content-center text-center">
      <p class="text-color socialText">Für die erste Aufgabe erhaltet ihr bereits hier ein Rätsel zum Download. (Kleiner Hinweis: bei der Lösung handelt es sich um einen Farbcode).
        Außerdem könnt ihr euer Ermittlerteam direkt vorab kennen lernen. Tretet dazu direkt der Whatsapp-Gruppe. Du gelangst zu dieser nach dem Einloggen über den Link oben rechts.</p>
      <div class="row">
        <div class="col mt-4 mb-4">
          <audio controls style="height: 40px">
            <source src="audio/reporter.ogg" type="audio/ogg">
            <source src="audio/reporter.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
        </div>
        <div class="col mt-4 mb-4">
          <a href="download/Sudoku_Schmellbachtal.pdf" class="btn btn-warning" role="button" target=”_blank”>Rätsel herunterladen</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="medienteam" class="container-md mx-auto mb-4 mt-4">
  <h2 class="custom-color text-center mt-5 mb-4">Medienteam</h2>
  <div class="row mx-auto">
    <div class="col-lg mx-auto m-sm-3 m-md-2 p-sm-4 p-md-0 mb-3">
      <div class="card background-grey">
        <img src="./img/medienteam/niklas.jpg" class="card-img-top rounded img-fluid" alt="">
        <h5 class="card-title text-warning text-center mt-3">Niklas E.</h5>
        <p class="cardText text-color text-center">Kamera-Experte</p>
      </div>
    </div>
    <div class="col-lg mx-auto m-sm-3 m-md-2 p-sm-4 p-md-0 mb-3">
      <div class="card background-grey">
        <img src="./img/medienteam/fabian.jpg" class="card-img-top rounded img-fluid" alt="">
        <h5 class="card-title text-warning text-center mt-3">Fabian S.</h5>
        <p class="cardText text-color text-center">Kreativ-Beauftragter</p>
      </div>
    </div>
    <div class="col-lg mx-auto m-sm-3 m-md-2 p-sm-4 p-md-0 mb-3">
      <div class="card background-grey">
        <img src="./img/medienteam/tim.jpg" class="card-img-top rounded img-fluid" alt="">
        <h5 class="card-title text-warning text-center mt-3">Tim R.</h5>
        <p class="cardText text-color text-center">Design-Spezialist</p>
      </div>
    </div>
    <div class="col-lg mx-auto m-sm-3 m-md-2 p-sm-4 p-md-0 mb-3">
      <div class="card background-grey">
        <img src="./img/medienteam/tjard.jpg" class="card-img-top rounded img-fluid" alt="">
        <h5 class="card-title text-warning text-center mt-3">Tjard P.</h5>
        <p class="cardText text-color text-center">Allround-Manager</p>
      </div>
    </div>
    <div class="col-lg mx-auto m-sm-3 m-md-2 p-sm-4 p-md-0 mb-3">
      <div class="card background-grey">
        <img src="./img/medienteam/carolin.jpg" class="card-img-top rounded img-fluid" alt="">
        <h5 class="card-title text-warning text-center mt-3">Carolin S.</h5>
        <p class="cardText text-color text-center">Redaktions-Ass</p>
      </div>
    </div>
    <div class="col-lg mx-auto m-sm-3 m-md-2 p-sm-4 p-md-0 mb-3">
      <div class="card background-grey">
        <img src="./img/medienteam/julian.jpg" class="card-img-top rounded img-fluid" alt="">
        <h5 class="card-title text-warning text-center mt-3">Julian K.</h5>
        <p class="cardText text-color text-center">Web-Profi</p>
      </div>
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
    var countDownDate = new Date("Oct 8, 2030 09:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("countdown").innerHTML = hours + "h "
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


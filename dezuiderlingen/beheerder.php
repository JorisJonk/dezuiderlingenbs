<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">publieke agenda </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">ledenagenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">smoelenboek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">bestuur en commissies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">repertoirelijst</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
        <h2 class="mb-5">Publieke agenda</h2>

          <div class="subheading mb-5">
            <p> evenement toevoegen </p>
            <form>
            <input type= "text"  id="pa_naam" placeholder="naam evenement"></input>
            <input type= "date"  id="pa_datum" ></input>
            <button class="login_button" id="pa_bevestig">bevestig</button>
          </div>
        </form>
          <div class="subheading mb-5">
            <p> evenement verwijderen</p>
            <form>
            <input type= "text" id="pa_naam_vw" placeholder="naam evenement"></input>
            <button id="pa_verwijder">verwijder</button>
          </form>
          </div>
            <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <?php


      if (isset($_POST['la_submit'])){

        $con=mysqli_connect("localhost","root","","dezuiderlingen");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        $naamevent =  ($_POST['naamevent']);
        $eventdatum = ($_POST['eventdatum']);
        $repertoire = ($_POST['repertoire']);
      

        if (!mysqli_query($con,"INSERT INTO ledenagenda (naamevent, eventdatum, repertoire) VALUES ('$naamevent', '$eventdatum', '$repertoire')"))
          {
          echo("Error description: " . mysqli_error($con));
          }
          mysqli_close($con);


      }
      ?>
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Ledenagenda</h2>
          <div class="subheading mb-5">
            <p> evenement toevoegen </p>
            <form action="" method="post">
            <input type= "text" name="naamevent" id="la_naam" placeholder="naam evenement"></input>
            <input type= "text" name="repertoire" id="la_repertoir" placeholder="repertoire"></input>
            <input type= "date" name="eventdatum" id="la_datum" ></input>
            <button name="la_submit" id="la_bevestig">bevestig</button>
          </div>
          </form>
          <div class="subheading mb-5">
            <p> evenement verwijderen</p>
            <form>
            <input type= "text" id="la_naam_vw" placeholder="naam evenement"></input>
            <button class="login_button" id="la_verwijder">verwijder</button>
          </form>
          </div>


        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Smoelenboek</h2>

          <div class="subheading mb-5">
            <p> smoel toevoegen </p>
            <div class="smoeltoevoegen">
          <form> <!--action="progress uploads to database or upload forlder" -->
            <input type="file" name="pic" accept="image/*"></input><br></br>
            <input type= "text"  id="sb_naam" placeholder="Voor- en achternaam"></input><br></br>
            <input list= "stemtypes"  id="sb_stemtype" placeholder="Stemtype">
            <datalist id="stemtypes">
              <option value="Sopraan">
                <option value="Alt">
                  <option value="Tenor">
                    <option value="Bas">
                    </datalist><br></br>
            <input type= "date"  id="sb_datum" ></input><br></br>
            <button id="sb_bevestig">bevestig</button>
          </div>
          </form>
        </div>
          <div class="subheading mb-5">
            <p> smoel verwijderen</p>
            <form>
            <input type= "text" id="sb_naam_vw" placeholder="naam"></input>
            <button class="login_button" id="sb_verwijder">verwijder</button>
          </form>
          </div>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Bestuur en Commissies</h2>
          <div class="subheading mb-5">
            <p> Commissielid toevoegen </p>
            <form>
            <input type= "text"  id="bc_commissie" placeholder="naam commissie"></input>
            <input type= "text"  id="bc_lid" placeholder="naam lid"></input>

            <button id="la_bevestig">bevestig</button>
          </div>
          </form>
          <div class="subheading mb-5">
            <p> Commissielid verwijderen</p>
            <form>
            <input type= "text" id="bc_commissie_vw" placeholder="naam commissie"></input>
            <input type= "text" id="bc_lid_vw" placeholder="naam lid"></input>
            <button class="login_button" id="la_verwijder">verwijder</button>
          </form>
          </div>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Repertoirelijst</h2>
          <div class="subheading mb-5">
            <p> repertoire toevoegen </p>
            <form>
            <input type= "text"  id="la_naam" placeholder="naam programma"></input>
            <input type= "text"  id="la_repertoir" placeholder="naam repertoire"></input>

            <button id="la_bevestig">bevestig</button>
          </div>
          </form>
          <div class="subheading mb-5">
            <p> repertoire verwijderen</p>
            <form>
            <input type= "text" id="la_naam_vw" placeholder="naam programma"></input>
            <input type= "text" id="la_naam_vw" placeholder="naam repertoire"></input>
            <button class="login_button" id="la_verwijder">verwijder</button>
          </form>
          </div>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>

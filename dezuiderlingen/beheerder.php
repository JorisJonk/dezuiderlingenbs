<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>de Zuiderlingen</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">
    <link href="css/resume.min.css" rel="stylesheet">


  </head>

  <body id="page-top">


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">de Zuiderlingen</span>
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
            <a class="nav-link js-scroll-trigger" href="#about">Concerten </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Ledenagenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Smoelenboek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Gallerij</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Repertoirelijst</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Bestuur en commissies</a>
          </li>

        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
      <?php
       if(isset($_POST['pa_bevestig'])){
          $name       = $_FILES['file']['name'];
          $temp_name  = $_FILES['file']['tmp_name'];
          $sb_naam    = $_POST['sb_naam'];
          $sb_datum   = $_POST['sb_datum'];
          $alinea1 = $_POST['alinea1'];
          $alinea2 = $_POST['alinea2'];
          $alinea3 = $_POST['alinea3'];
          $alinea4 = $_POST['alinea4'];
          $alinea5 = $_POST['alinea5'];
          if(isset($name)){
              if(!empty($name)){
                  $location = 'uploads/';
                  if(move_uploaded_file($temp_name, $location.$name)){

                  }
              }
          }  else {
              echo 'Error bij uploaden foto';
          }

      $con=mysqli_connect("localhost","root","","dezuiderlingen");
      // Check connection
      if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
          if (!mysqli_query($con,"INSERT INTO publiekeagenda (eventnaam, eventdatum, filename, alinea1, alinea2, alinea3, alinea4, alinea5) VALUES ('$sb_naam', '$sb_datum', '$name','$alinea1', '$alinea2', '$alinea3', '$alinea4', '$alinea5')"))
        {
        echo("Error description: " . mysqli_error($con));
        }
        mysqli_close($con);

  }
  if (isset($_POST['pa_verwijder'])){

  $con=mysqli_connect("localhost","root","","dezuiderlingen");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  $naamevent =  ($_POST['pa_naam_vw']);

  if (!mysqli_query($con,"DELETE FROM publiekeagenda WHERE eventnaam = '$naamevent'"))
    {
    echo("Error description: " . mysqli_error($con));
    }
    mysqli_close($con);


  }

      ?>
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
        <h2 class="mb-5">Concerten</h2>

          <div class="subheading mb-5">
            <p> concert toevoegen </p>
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file"><br><br>
              <input type="date" name="sb_datum"><br><br>
            <input type="text" name="sb_naam" placeholder="Titel"><br><br>

      <input type="text" name="alinea1" class="alinea1" placeholder="bijv. :Beste lezer,"><br></br>
    <input type="text" name="alinea2" class="alinea2" placeholder="bijv. : We geven een concert"> <br></br>
  <input type="text" name="alinea3" class="alinea3" placeholder="bijv: Kaarten te koop via naam@adres.nl"><br></br>
    <input type="text" name="alinea4" class="alinea4" placeholder="bijv: hartelijke groet,"><br></br>
  <input type="text" name="alinea5" class="alinea5" placeholder="bijv: Jan Jansen"><br></br>
            <input type="submit" value="submit" name="pa_bevestig">
            </form>


                    </div>

                  <div class="subheading mb-5">
                    <p> Concert verwijderen</p>
                    <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php" method="post" enctype="multipart/form-data">
                    <input type= "text" name="pa_naam_vw" id="pa_naam_vw" placeholder="titel concert"></input>
                    <input type="submit" name="pa_verwijder" value="verwijder"></input>
                  </form>

      </div>


<div class="publiekeagenda">
  <?php
  $con = mysqli_connect("localhost","root","","dezuiderlingen");

  $result = mysqli_query($con,"SELECT eventnaam, eventdatum, filename, alinea1, alinea2, alinea3, alinea4, alinea5 FROM publiekeagenda");

  if ($numrows=mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
      echo "<div class='pa_concert'>";

      echo "<img src=" ."'uploads/". $row[2]."'". "class='poster'". "width='200' height='200'". "alt='geen afbeelding'>";
      echo "<div class='pa_tekst'>";
      echo "<div class='pa_titel'>";
      echo $row[0]. " ";
      echo "</div>";
      echo "<div class='pa_alinea1'>";
      echo $row[3]. " ";
      echo "</div>";
      echo "<div class='pa_alinea2'>";
      echo $row[4] . " ";
      echo "</div>";
      echo "<div class='pa_alinea3'>";
        echo $row[5] . " ";
        echo "</div>";
        echo "<div class='pa_alinea4'>";
          echo $row[6] . " ";
          echo "</div>";
          echo "<div class='pa_alinea5'>";
            echo $row[7];
            echo "</div>";


      echo "</div>";
      echo "</div>";

    }
  }
  else echo "geen data";
   ?>
</div>
</div>
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


      if (isset($_POST['la_verwijder'])){

        $con=mysqli_connect("localhost","root","","dezuiderlingen");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        $naamevent =  ($_POST['la_naam_vw']);
        if (!mysqli_query($con,"DELETE FROM ledenagenda WHERE naamevent = '$naamevent'"))
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
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php#experience" method="post">
            <input type= "text" name="naamevent" id="la_naam" placeholder="naam evenement"></input>
            <input type= "text" name="repertoire" id="la_repertoir" placeholder="repertoire"></input>
            <input type= "date" name="eventdatum" id="la_datum" ></input>
            <button name="la_submit" id="la_bevestig">bevestig</button>
          </div>
          </form>
          <div class="subheading mb-5">
            <p> evenement verwijderen</p>
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php#experience" method="post">
            <input type= "text" name="la_naam_vw" id="la_naam_vw" placeholder="naam evenement"></input>
            <button name="la_verwijder" id="la_verwijder">verwijder</button>
          </form>
          </div>
          <div class="ledenagenda">
                    <?php
                    $con = mysqli_connect("localhost","root","","dezuiderlingen");

                    $result = mysqli_query($con,"SELECT naamevent, eventdatum, repertoire FROM ledenagenda");

                    if ($numrows=mysqli_num_rows($result)>0){
                      while($row=mysqli_fetch_array($result)){
                        echo "<div id='la_event".$numrows."'>";
                        echo $row[1]. " ";
                        echo $row[0]. " ";
                        echo "<br>";
                        echo $row[2];
                        echo "<br>";
                        echo "<br>";
                        echo "</div>";

                      }
                    }
                    else echo "geen data";
                     ?>
          </div>

        </div>

      </section>
      <?php
       if(isset($_POST['sb_submit'])){
          $name       = $_FILES['file']['name'];
          $temp_name  = $_FILES['file']['tmp_name'];
          $sb_naam    = $_POST['sb_naam'];
          $sb_datum   = $_POST['sb_datum'];
          $sb_woonplaats = $_POST['sb_woonplaats'];
          $sb_stemgroep = $_POST['sb_stemgroep'];
          if(isset($name)){
              if(!empty($name)){
                  $location = 'uploads/';
                  if(move_uploaded_file($temp_name, $location.$name)){

                  }
              }
          }  else {
              echo 'Error bij uploaden foto';
          }

      $con=mysqli_connect("localhost","root","","dezuiderlingen");
      // Check connection
      if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
          if (!mysqli_query($con,"INSERT INTO smoelenboek (picturelink, naam, stemtype, lidsinds, woonplaats) VALUES ('$name', '$sb_naam', '$sb_stemgroep', '$sb_datum', '$sb_woonplaats')"))
        {
        echo("Error description: " . mysqli_error($con));
        }
        mysqli_close($con);

}
if (isset($_POST['sb_verwijder'])){

  $con=mysqli_connect("localhost","root","","dezuiderlingen");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  $naamevent =  ($_POST['sb_naam_vw']);

  if (!mysqli_query($con,"DELETE FROM smoelenboek WHERE naam = '$naamevent'"))
    {
    echo("Error description: " . mysqli_error($con));
    }
    mysqli_close($con);


}

      ?>
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Smoelenboek</h2>
          <div class="subheading mb-5">
            <p> smoel toevoegen </p>
            <div class="smoeltoevoegen">
    <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php#education" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file"><br><br>
    <input type="text" name="sb_naam" placeholder="Voor- en achternaam"><br><br>
    <input type="date" name="sb_datum"><br><br>
    <input type="text" name="sb_woonplaats" placeholder="Woonplaats"><br><br>
    <select name="sb_stemgroep">
  <option value="Sopraan">Sopraan</option>
  <option value="Alt">Alt</option>
  <option value="Tenor">Tenor</option>
  <option value="Bas">Bas</option>
</select> <br><br>


    <input type="submit" value="submit" name="sb_submit">
    </form>


            </div>
        </div>
          <div class="subheading mb-5">
            <p> smoel verwijderen</p>
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php#education" method="post" enctype="multipart/form-data">
            <input type= "text" name="sb_naam_vw" id="sb_naam_vw" placeholder="naam"></input>
            <input type="submit" name="sb_verwijder" value="verwijder"></input>
          </form>
          </div>
          <?php
          $con = mysqli_connect("localhost","root","","dezuiderlingen");

          $result = mysqli_query($con,"SELECT picturelink, naam, stemtype, lidsinds, woonplaats FROM smoelenboek");


          if ($numrows=mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
              echo "<div id='pa_event".$numrows."'>";
              echo "<div id='pa_image'>";
              echo "<img src=" ."'uploads/". $row[0]."'". "width='200' height='200'". "alt='geen afbeelding'>";
              echo "</div>";
              echo "<div id='sb_info'>";
              echo $row[1]. " ";
              echo $row[2] . " ";
                echo $row[3] . " ";
                  echo $row[4] . " ";
                  echo "</div>";
              echo "<br>";
              echo "</div>";

            }
          }
          else echo "geen data";
           ?>

        </div>
      </section>
    <?php
      if (isset($_POST['cl_bevestig'])){

        $con=mysqli_connect("localhost","root","","dezuiderlingen");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        $naamevent =  ($_POST['cl_com']);
        $eventdatum = ($_POST['cl_lid']);


        if (!mysqli_query($con,"INSERT INTO bestuurencommissies (commissienaam, lid1) VALUES ('$naamevent', '$eventdatum')"))
          {
          echo("Error description: " . mysqli_error($con));
          }
          mysqli_close($con);
      }

      if (isset($_POST['cl_verwijder'])){

        $con=mysqli_connect("localhost","root","","dezuiderlingen");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        $naamevent =  ($_POST['cl_com_vw']);
        $naamlid = ($_POST['cl_lid_vw']);

        if (!mysqli_query($con,"DELETE FROM bestuurencommissies WHERE commissienaam = '$naamevent' AND lid1 = '$naamlid' "))
          {
          echo("Error description: " . mysqli_error($con));
          }
          mysqli_close($con);
      }
        ?>
        <?php
         if(isset($_POST['gl_bevestig'])){
            $name       = $_FILES['file']['name'];
            $temp_name  = $_FILES['file']['tmp_name'];

            if(isset($name)){
                if(!empty($name)){
                    $location = 'uploads/';
                    if(move_uploaded_file($temp_name, $location.$name)){

                    }
                }
            }  else {
                echo 'Error bij uploaden foto';
            }

        $con=mysqli_connect("localhost","root","","dezuiderlingen");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
            if (!mysqli_query($con,"INSERT INTO gallerij (imagename) VALUES ('$name')"))
          {
          echo("Error description: " . mysqli_error($con));
          }
          mysqli_close($con);

    }
    if (isset($_POST['gl_verwijder'])){

    $con=mysqli_connect("localhost","root","","dezuiderlingen");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $naamevent =  ($_POST['gl_naam_vw']);

    if (!mysqli_query($con,"DELETE FROM gallerij WHERE imagename = '$naamevent'"))
      {
      echo("Error description: " . mysqli_error($con));
      }
      mysqli_close($con);


    }

        ?>
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Gallerij</h2>
          <div class="subheading mb-5">
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file"><br><br>

                    <input type="submit" value="submit" name="gl_bevestig">
            </form>
          <div class="subheading mb-5">
            <br></br>
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php" method="post" enctype="multipart/form-data">
            <input type= "text" name="gl_naam_vw" id="gl_naam_vw" placeholder="volledige naam afbeelding"></input>
            <input type="submit" name="gl_verwijder" value="verwijder"></input>
            </form>
          </div>


        </div>
        <?php
        $con = mysqli_connect("localhost","root","","dezuiderlingen");

        $result = mysqli_query($con,"SELECT imagename FROM gallerij");

        if ($numrows=mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_array($result)){
            echo "<p>" . $row[0] . "</p>";




          }
        }
        else echo "geen data";
         ?>
      </section>
      <?php
      if (isset($_POST['rl_bevestig'])){

        $con=mysqli_connect("localhost","root","","dezuiderlingen");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        $naamevent =  ($_POST['rl_prog']);
        $eventdatum = ($_POST['rl_reper']);



        if (!mysqli_query($con,"INSERT INTO repertoirelijst (programmanaam, repertoire1) VALUES ('$naamevent', '$eventdatum')"))
          {
          echo("Error description: " . mysqli_error($con));
          }
          mysqli_close($con);
      }

      if (isset($_POST['rl_verwijder'])){

        $con=mysqli_connect("localhost","root","","dezuiderlingen");
        // Check connection
        if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
        $naamevent =  ($_POST['rl_prog_vw']);
        $naamlid = ($_POST['rl_rep_vw']);

        if (!mysqli_query($con,"DELETE FROM repertoirelijst WHERE programmanaam = '$naamevent' AND repertoire1 ='$naamlid' "))
          {
          echo("Error description: " . mysqli_error($con));
          }
          mysqli_close($con);
      }
        ?>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Repertoirelijst</h2>
          <div class="subheading mb-5">
            <p> repertoire toevoegen </p>
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php#interests" method="post" enctype="multipart/form-data">
            <input type= "text" name="rl_prog" id="rl_prog" placeholder="naam programma"></input>
            <input type= "text" name="rl_reper" id="rl_rep" placeholder="naam repertoire"></input>

            <button name= "rl_bevestig" id="rl_bevestig">bevestig</button>
          </div>
          </form>
          <div class="subheading mb-5">
            <p> repertoire verwijderen</p>
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php#interests" method="post" enctype="multipart/form-data">
            <input type= "text" name="rl_prog_vw" id="rl_prog_vw" placeholder="naam programma"></input>
            <input type= "text" name="rl_rep_vw" id="rl_rep_vw" placeholder="naam repertoire"></input>
            <button class="login_button" name="rl_verwijder" id="rl_verwijder">verwijder</button>
          </form>
          </div>
        </div>
        <?php
        $con = mysqli_connect("localhost","root","","dezuiderlingen");

        $result = mysqli_query($con,"SELECT programmanaam, repertoire1 FROM repertoirelijst");


        if ($numrows=mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_array($result)){
            echo "<div id='rl_programma".$numrows."'>";
            echo $row[0]. " ";
            echo "<div id='rl_repertoire".$numrows."'>";
            echo $row[1];
            echo "<br>";
            echo "</div>";

          }
        }
        else echo "geen data";
         ?>
      </section>
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">

        <?php
        if (isset($_POST['bc_bevestig']))
        {
          $commissienaam =  $_POST['bc_naam'];
          $naamlid = $_POST['bc_lid'];
          $functie = $_POST['bc_functie'];

          $con=mysqli_connect("localhost","root","","dezuiderlingen");
          // Check connection
          if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }



          if (!mysqli_query($con,"INSERT INTO bestuurencommissies (commissienaam, lid1, functie) VALUES ('$commissienaam', '$naamlid', '$functie')"))
            {
            echo("Error description: " . mysqli_error($con));
            }
            mysqli_close($con);
        }

        if (isset($_POST['bc_verwijder'])){

          $con=mysqli_connect("localhost","root","","dezuiderlingen");
          // Check connection
          if (mysqli_connect_errno())
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
          $commissienaam =  $_POST['bc_naam_vw'];
          $naamlid = $_POST['bc_lid_vw'];
          $functie = $_POST['bc_functie_vw'];
          if (!mysqli_query($con,"DELETE FROM bestuurencommissies WHERE commissienaam='$commissienaam' AND lid1='$naamlid' AND functie='$functie'"))
            {
            echo("Error description: " . mysqli_error($con));
            }
            mysqli_close($con);
        }
          ?>

        <div class="my-auto">
        <h2 class="mb-5">Bestuur en Commissies</h2>

          <div class="subheading mb-5">
            <p> commissielid toevoegen</p>
            <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php" method="post" enctype="multipart/form-data">
              <select name="bc_naam">
      <option value="bestuur">Bestuur</option>
      <option value="repertoirecommissie">Repertoirecommissie</option>
      <option value="concertcommissie">Concertcommissie</option>
      <option value="feestcommissie">Feestcommissie</option>
        <option value="reiscommissie">Reiscommissie</option>
    </select>
  <input type="text" name="bc_lid" placeholder="Naam lid">  <input type="text" name="bc_functie" placeholder="Functie"><br><br>
            <input type="submit" value="submit" name="bc_bevestig">
            </form>


                    </div>
</br>
                  <div class="subheading mb-5">
                  <p> Commissielid verwijderen</p>
                  <form action="http://localhost/zuiderlingen2/dezuiderlingenbs/dezuiderlingenbs/dezuiderlingen/beheerder.php" method="post" enctype="multipart/form-data">
                    <select name="bc_naam_vw">
            <option value="bestuur">Bestuur</option>
            <option value="repertoirecommissie">Repertoirecommissie</option>
            <option value="concertcommissie">Concertcommissie</option>
            <option value="feestcommissie">Feestcommissie</option>
              <option value="reiscommissie">Reiscommissie</option>
          </select>
<input type="text" name="bc_lid_vw" placeholder="Naam lid">  <input type="text" name="bc_functie_vw" placeholder="Functie"><br><br>
                  <input type="submit" name="bc_verwijder" value="verwijder"></input>
                  </form>

      </div>


<div class="publiekeagenda">
  <?php
  $con = mysqli_connect("localhost","root","","dezuiderlingen");

  $result = mysqli_query($con,"SELECT eventnaam, eventdatum, filename, alinea1, alinea2, alinea3, alinea4, alinea5 FROM publiekeagenda");

  if ($numrows=mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){


    }
  }
  else echo "geen data";
   ?>
</div>
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

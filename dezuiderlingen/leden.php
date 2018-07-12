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

        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">


      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
        <h2 class="mb-5">Publieke agenda</h2>


<div class="publiekeagenda">
          <?php
          $con = mysqli_connect("localhost","root","","dezuiderlingen");

          $result = mysqli_query($con,"SELECT eventnaam, eventdatum FROM publiekeagenda");


          if ($numrows=mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
              echo "<div id='pa_event".$numrows."'>";
              echo $row[1]. " ";
              echo $row[0];
              echo "<br>";
              echo "</div>";

            }
          }
          else echo "geen data";
           ?>
</div>
        </div>
      </section>


      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Ledenagenda</h2>

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

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Smoelenboek</h2>



          <?php
          $con = mysqli_connect("localhost","root","","dezuiderlingen");

          $result = mysqli_query($con,"SELECT picturelink, naam, stemtype, lidsinds, woonplaats FROM smoelenboek");


          if ($numrows=mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
              echo "<div id='pa_event".$numrows."'>";
              echo "<img src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";
              echo "<div id='sb_info'>";
              echo $row[1]. " ";
              echo $row[2] . " ";
                echo $row[3] . " ";
                  echo $row[4] . " ";

              echo "<br>";
              echo "</div>";

            }
          }
          else echo "geen data";
           ?>
           <script> picture = '<?php echo $row[0] . " ";?>';
           document.getelementbyid("smoelenplaatje").InnerHTML("<img src= alt="Mountain View">")
           </script>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Bestuur en Commissies</h2>

          <?php
          $con = mysqli_connect("localhost","root","","dezuiderlingen");

          $result = mysqli_query($con,"SELECT lid1, commissienaam FROM bestuurencommissies");


          if ($numrows=mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
              echo "<div id='cl_com".$numrows."'>";
              echo $row[0]. " ";
              echo "<div id='cl_lid".$numrows."'>";
              echo $row[1];
              echo "<br>";
              echo "</div>";

            }
          }
          else echo "geen data";
           ?>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Repertoirelijst</h2>
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

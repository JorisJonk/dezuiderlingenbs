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
            <a class="nav-link js-scroll-trigger" href="#experience">Gallerij</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Smoelenboek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Bestuur en commissies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Repertoirelijst</a>
          </li>

        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">


      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
        <h2 class="mb-5">Concerten</h2>


<div class="publiekeagenda">
  <?php
  $con = mysqli_connect("localhost","root","","dezuiderlingen");

  $result = mysqli_query($con,"SELECT eventnaam, eventdatum, filename, alinea1, alinea2, alinea3, alinea4 FROM publiekeagenda");

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


      echo "</div>";
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
          <h2 class="mb-5">Gallerij</h2>

          <div class="gallerijbox">


                     <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
        <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fa fa-angle-left fa-3x pr-3"></i></a>
        <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fa fa-angle-right fa-3x pl-3"></i></a>
    </div>
    <!--/.Controls-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

            <div class="col-md-3 mb-3">
                <div class="card">


                  <?php
                      $con = mysqli_connect("localhost","root","","dezuiderlingen");

                      $result = mysqli_query($con,"SELECT imagename FROM gallerij ORDER BY id DESC LIMIT 0,1");

                      if ($numrows=mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        echo "<img class='img-fluid' src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";

}

                       ?>

                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                  <?php
                      $con = mysqli_connect("localhost","root","","dezuiderlingen");

                      $result = mysqli_query($con,"SELECT imagename FROM gallerij ORDER BY id DESC LIMIT 1,1");

                      if ($numrows=mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        echo "<img class='img-fluid' src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";

}

                       ?>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                  <?php
                      $con = mysqli_connect("localhost","root","","dezuiderlingen");

                      $result = mysqli_query($con,"SELECT imagename FROM gallerij ORDER BY id DESC LIMIT 2,1");

                      if ($numrows=mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        echo "<img class='img-fluid' src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";

}

                       ?>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                  <?php
                      $con = mysqli_connect("localhost","root","","dezuiderlingen");

                      $result = mysqli_query($con,"SELECT imagename FROM gallerij ORDER BY id DESC LIMIT 3,1");

                      if ($numrows=mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        echo "<img class='img-fluid' src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";

}

                       ?>
                </div>
            </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

            <div class="col-md-3 mb-3">
                <div class="card">
                  <?php
                      $con = mysqli_connect("localhost","root","","dezuiderlingen");

                      $result = mysqli_query($con,"SELECT imagename FROM gallerij ORDER BY id DESC LIMIT 4,1");

                      if ($numrows=mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        echo "<img class='img-fluid' src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";

}

                       ?>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                  <?php
                      $con = mysqli_connect("localhost","root","","dezuiderlingen");

                      $result = mysqli_query($con,"SELECT imagename FROM gallerij ORDER BY id DESC LIMIT 5,1");

                      if ($numrows=mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        echo "<img class='img-fluid' src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";

}

                       ?>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">
                  <?php
                      $con = mysqli_connect("localhost","root","","dezuiderlingen");

                      $result = mysqli_query($con,"SELECT imagename FROM gallerij ORDER BY id DESC LIMIT 6,1");

                      if ($numrows=mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        echo "<img class='img-fluid' src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";

}

                       ?>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card">  <?php
                      $con = mysqli_connect("localhost","root","","dezuiderlingen");

                      $result = mysqli_query($con,"SELECT imagename FROM gallerij ORDER BY id DESC LIMIT 7,1");

                      if ($numrows=mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_array($result);
                        echo "<img class='img-fluid' src=" ."'uploads/". $row[0]."'". "class='sb_pic'". "width='200' height='200'". "alt='geen afbeelding'>";

}

                       ?>
                </div>
            </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->

        <!--/.Third slide-->

    </div>
    <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
          </div>
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

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Bestuur en Commissies</h2>

        <div class="commissiebox">

           <h3> Bestuur </h3>
           <?php
           $con = mysqli_connect("localhost","root","","dezuiderlingen");

           $result = mysqli_query($con,"SELECT functie, lid1 FROM bestuurencommissies WHERE commissienaam = 'bestuur'");


           if ($numrows=mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_array($result)){
                 echo "<p>" . $row[0] . ": ". $row[1] . "</p>";

             }
           }
           else echo "";
            ?>

             </div>

             <div class="commissiebox">
               <h3> Repertoirecommissie </h3>
               <?php
               $con = mysqli_connect("localhost","root","","dezuiderlingen");

               $result = mysqli_query($con,"SELECT functie, lid1 FROM bestuurencommissies WHERE commissienaam = 'repertoirecommissie'");


               if ($numrows=mysqli_num_rows($result)>0){
                 while($row=mysqli_fetch_array($result)){
                     echo "<p>" . $row[0] . ": ". $row[1] . "</p>";

                 }
               }
               else echo "";
                ?>

             </div>



                <div class="commissiebox">
                  <h3> Concertcommissie </h3>
                  <?php
                  $con = mysqli_connect("localhost","root","","dezuiderlingen");

                  $result = mysqli_query($con,"SELECT functie, lid1 FROM bestuurencommissies WHERE commissienaam = 'concertcommissie'");


                  if ($numrows=mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){
                        echo "<p>" . $row[0] . ": ". $row[1] . "</p>";

                    }
                  }
                  else echo "";
                   ?>

             </div>

             <div class="commissiebox">
               <h3> Feestcommissie </h3>
               <?php
               $con = mysqli_connect("localhost","root","","dezuiderlingen");

               $result = mysqli_query($con,"SELECT functie, lid1 FROM bestuurencommissies WHERE commissienaam = 'feestcommissie'");


               if ($numrows=mysqli_num_rows($result)>0){
                 while($row=mysqli_fetch_array($result)){
                     echo "<p>" . $row[0] . ": ". $row[1] . "</p>";

                 }
               }
               else echo "";
                ?>

             </div>
             <div class="commissiebox">
               <h3> Reiscommissie </h3>
               <?php
               $con = mysqli_connect("localhost","root","","dezuiderlingen");

               $result = mysqli_query($con,"SELECT functie, lid1 FROM bestuurencommissies WHERE commissienaam = 'reiscommissie'");


               if ($numrows=mysqli_num_rows($result)>0){
                 while($row=mysqli_fetch_array($result)){
                     echo "<p>" . $row[0] . ": ". $row[1] . "</p>";

                 }
               }
               else echo "";
                ?>

             </div>

             </br>


        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Conctact</h2>
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

<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
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

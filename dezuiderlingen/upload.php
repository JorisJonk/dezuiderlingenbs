<?php
  $con=mysqli_connect("localhost","root","","dezuiderlingen");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  /*$naamevent =  ($_POST['pa_naam']);
  $eventdatum = ($_POST['pa_datum']);
  $alinea1   = ($_POST['alinea1']);
  $alinea2   = ($_POST['alinea2']);
  $alinea3   = ($_POST['alinea3']);
  $alinea4   = ($_POST['alinea4']);
  $posterfile = 'asdasd';
  $temp_name = 'asdasd';*/

  $naamevent =  'asdasd';
  $eventdatum = "aqwe";
  $alinea1   = "msoodjr";
  $alinea2   = "vmiwh";
  $alinea3   = "uenufqo";
  $alinea4   = "cmvlei";
  $posterfile = "cneufh";
  $temp_name = "cnaiwfh";

  if(isset($posterfile)){
      if(!empty($posterfile)){
          $location = 'uploads/';
          if(move_uploaded_file($temp_name, $location.$posterfile)){

          }
      }
  }  else {
      echo 'Error bij uploaden foto';
  }

  if (!mysqli_query($con,"INSERT INTO publiekeagenda (eventnaam, eventdatum, filename, alinea1, alinea2, alinea3, alinea4) VALUES ('$naamevent', '$eventdatum', '$posterfile', '$alinea1', '$alinea2', '$alinea3', '$alinea4')"))
    {
    echo("Error description: " . mysqli_error($con));
    }
    mysqli_close($con);

?>

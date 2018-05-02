<?php
echo "link gevolgd";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo "request method is post";

  echo "link gevolgd";
  $con=mysqli_connect("localhost","root","","dezuiderlingen");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  $naamevent =  ($_POST['naamevent']);
  $eventdatum = ($_POST['eventdatum']);
  $repertoire = ($_POST['repertoire']);
  echo $naamevent;

  if (!mysqli_query($con,"INSERT INTO ledenagenda (naamevent, eventdatum, repertoire) VALUES ('$naamevent', '$eventdatum', '$repertoire')"))
    {
    echo("Error description: " . mysqli_error($con));
    }
    mysqli_close($con);


}
?>

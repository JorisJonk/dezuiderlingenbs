
<?php

include('class_neuralnetwork.php');

$n = new NeuralNetwork(3, 20, 1);
$n->setVerbose(false);
$n->load('NeuralNetworksave.php');
$inputarrayx = $_POST['xarraystringvar'];
echo 'working';
$inputarrayy = $_POST['yarraystringvar'];
$output = $n->calculate($inputarrayx);
$outputstringx = implode(',',  $output);
$outputstringy = implode(',',  $output);
echo ('result: '. round($outputstringx,2));
echo ('result: '. round($outputstringy,2));


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AIgame";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
}

$singledraw = mysqli_real_escape_string($conn, $_POST['singledraw']);
$ipadres = mysqli_real_escape_string($conn, $_POST['ipadres']);


if (strlen($times) > 200000) {  $times = "";    }

$sql = "INSERT INTO singledraws (ipadres,date,singledraw)
VALUES ('$ipadres', CURDATE(), '$singledraw')";

if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>

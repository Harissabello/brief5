<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brief";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  mysqli_close($conn);
}
//dotnet langage developper pour AZUR
//xafigi meilleur devops

?>
<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "GestionEtudiant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

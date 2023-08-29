<?php
include "db_conn.php";
$matricule = $_GET["MATRICULE"];
$sql = "DELETE FROM `ETUDIANT` WHERE MATRICULE = $matricule";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Donnée Supprimé avec succès");
} else {
  echo "Failed: " . mysqli_error($conn);
}

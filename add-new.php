<?php
include "db_conn.php";


if (isset($_POST["submit"])) {

  $prenom = $_POST['PRENOM'];
  $nom = $_POST['NOM'];
  $date = $_POST['DATENAISSANCE'];
  $filliere = $_POST['FILLIERE'];
  $classe = $_POST['CLASSE'];
  $email = $_POST['EMAIL'];
  $telephone = $_POST['TELEPHONE'];

   $sql = "INSERT INTO `ETUDIANT`(`MATRICULE`, `PRENOM`, `NOM`, `DATENAISSANCE`, `FILLIERE`, `CLASSE`,`EMAIL`, `TELEPHONE`) VALUES (NULL,'$prenom','$nom','$date','$filliere','$classe','$email','$telephone')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=Nouvel enregistrement créé avec succès");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Gestion Etudiant</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
   PHP CRUD Gestion Etudiant
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Ajouter Nouvel Etudiant</h3>
         <p class="text-muted">Remplissez le formulaire ci-dessous pour ajouter un nouvel Etudiant</p>
      </div>

      <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          

          <div class="col">
            <label class="form-label">Prenom:</label>
            <input type="text" class="form-control" name="PRENOM" value="<?php echo $row['PRENOM'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Nom:</label>
          <input type="text" class="form-control" name="NOM" value="<?php echo $row['NOM'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Date Naissance:</label>
          <input type="text" class="form-control" name="DATENAISSANCE" value="<?php echo $row['DATENAISSANCE'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">FILLIÈRE:</label>
          <input type="text" class="form-control" name="FILLIERE" value="<?php echo $row['FILLIERE'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Classe:</label>
          <input type="text" class="form-control" name="CLASSE" value="<?php echo $row['CLASSE'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="text" class="form-control" name="EMAIL" value="<?php echo $row['EMAIL'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Telephone:</label>
          <input type="text" class="form-control" name="TELEPHONE" value="<?php echo $row['TELEPHONE'] ?>">
        </div>



            <div>
               <button type="submit" class="btn btn-success" name="submit">Enregistrer</button>
               <a href="index.php" class="btn btn-danger">Retour</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
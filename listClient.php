<?php
    require("connexion.php");

    $query="select * from client";

    $data=$conn->query($query); ///PDOStatement --CURSEUR

    $data= $data->fetchAll(); ///fetchAll pour lire les lignes et eliminer le curseur et afficher dans un tableau fetch hiya ta7lil dyal les infos
    echo"<div class='col-md-6'>";
    echo"<table class='table table-striped'>";
    echo"<tr><th>Id</th><th>Nom</th><th>Prénom</th><th>Date de Naissance</th><th>CIN</th><th>Ville</th><th>E-mail</th><th>Téléphone</th><th>Action</th></tr>";
    for($i=0;$i<count($data);$i++)
    {
        $id=$data[$i]["id"];
        $nom=$data[$i]["nom"];
        $prenom=$data[$i]["prenom"];
        $datenaissance=$data[$i]["datenaissance"];
        $cin=$data[$i]["cin"];
        $ville=$data[$i]["ville"];
        $email=$data[$i]["email"];
        $telephone=$data[$i]["telephone"];
        echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td><td>$datenaissance</td><td>$cin</td><td>$ville</td><td>$email</td><td>$telephone</td><td>
        <a href='deleteClient.php?id=$id'>Supprimer</a></td></tr>";
    }
    
    echo "</table";
    echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/f0cf9ff3cc.js" crossorigin="anonymous"></script>
</head>
<body>
    

  <!-- CDN -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


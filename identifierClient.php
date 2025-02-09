<?php 
    if(!isset($_POST["nom"]))
    {
        header("Location:identifierClient.html");
        exit();
    }
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $datenaissance=$_POST["datenaissance"];
    $cin=$_POST["cin"];
    $ville=$_POST["ville"];
    $email=$_POST["email"];
    $telephone=$_POST["telephone"];
    if(!empty("prenom"))
    {

        $query="insert into client values(NULL,'$nom','$prenom','$datenaissance','$cin','$ville','$email','$telephone')";
        
        //echo $query;
        //$conn=new PDO("mysql:host=localhost;dbname=identifierclient","root","");
        require("connexion.php");
        
        $conn->exec($query);
        header("Location:identificationreusite.html");
    }
    //header("Location:listClient.php");
      //header("Location:identifierClientJs.html");  //lprobleme kayn hna
     //header("Location:identifierClient.html");  

    /////////////////////////////////////////////////////////////////////////////////

?>

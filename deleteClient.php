<?php
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        if(is_numeric($id))
        {
            require("connexion.php");

            $query="delete from client where id=$id";
            echo"$query";
            $conn->exec($query); ///PDOStatement --CURSEUR
            
            header("Location:listClient.php");
        }
    
    }

  
    
?> 
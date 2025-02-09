<?php 
    if(!isset($_POST["DateCheckIn"]))
    {
        header("Location:Reservation.html");
        exit();
    }
    $DateCheckIn=$_POST["DateCheckIn"];
    $DateCheckOut=$_POST["DateCheckOut"];
    $NbrPersonnes=$_POST["NbrPersonnes"];
    if(!empty("DateCheckOut"))
    {

        $query="insert into reservation values(NULL,'$DateCheckIn','$DateCheckOut',$NbrPersonnes)";
        //echo $query;
        //$conn=new PDO("mysql:host=localhost;dbname=reservation","root","");
        require("connexion1.php");
        
        $conn->exec($query);
        
    }
    header("Location:InfoChambre.html");

?>

<script>
$( document ).ready(function() {
    $('.trigger').on('click', function() {
    $('.modal-wrapper').toggleClass('open');
    $('.page-wrapper').toggleClass('blur-it');
    return false;
    });
    });
    </script>
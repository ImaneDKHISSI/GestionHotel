<?php
session_start();
if(!isset($_POST["DateCheckIn"]))
{
    header("Location:Reservation.html");
    exit;
}
if(isset($_GET["ch"]))
{

}
if(!empty($_POST["DateCheckIn"]) && !empty($_POST["DateCheckOut"]) && !empty($_POST["NbrPersonnes"]))
{
    $_SESSION["DateDebut"]=$_POST["DateCheckIn"];
    $_SESSION["DateDebut"]=$_POST["DateCheckOut"];
    $_SESSION["NbrPersonnes"]=$_POST["NbrPersonnes"];
    header("Location:InfoChambre.html");
    exit;
}
header("Location:Reservation.html");
?>
<?php


try
{
    $conn= new PDO('mysql:host=localhost;dbname=medical_tourism','root','');
    
}
catch(PDOException $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
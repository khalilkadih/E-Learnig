<?php
require 'connection.php';
if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){
    echo("il faut que un identifiant pour le supprimer");
    return;
}
try{
    $statment=$mysqlConnection->prepare("DELETE FROM courses WHERE id_course=:id;");
    $statment->bindParam(':id',$_GET['id']);
    $statment->execute();
    header('location:courses.php?DeletedSuccess');
}
catch(Exception $e)
{
    die($e->getMessage());
}

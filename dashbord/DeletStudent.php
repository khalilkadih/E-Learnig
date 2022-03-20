
<?php
require_once 'connection.php';

try{
    $statment=$mysqlConnection->prepare("DELETE FROM Students WHERE id_Students=:id;");
    $statment->bindParam(':id',$_GET['id']);
    $statment->execute();
    header('location:students.php?DeletedSuccess');
}
catch(Exception $e)
{
    die($e->getMessage());
}




<?php
include('connection.php');
$students=$mysqlConnection->prepare('SELECT * FROM students ORDER BY id_Students ASC;');
$students->execute();
$student=$students->fetchAll();

header('location:students.php?sortSucees');



?>

                      
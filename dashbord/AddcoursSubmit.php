<?php 
require 'connection.php';
  $NameCours=$_POST['name_course'];
  $HeursCours=$_POST['Heures_cours'];
  $dateDebut=$_POST['date_debut'];
  $dateFin=$_POST['date_fin'];
  $insertStudent=$mysqlConnection->prepare('INSERT INTO courses (name_course, Heures_cours, date_debut,date_fin)
  VALUES (:name_course,:Heures_cours,:date_debut,:date_fin)');

 $insertStudent->execute([
    'name_course'=>$NameCours,
    'Heures_cours'=>$HeursCours,
    'date_debut'=>$dateDebut,
    'date_fin'=>$dateFin
  ]);

  echo 'Ok data ajouter avec success ';

?>

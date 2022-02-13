<?php 
require 'connection.php';
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $Phone=$_POST['phone'];
  $Enroll_Number=$_POST['Enroll_Number'];
  $Date_d_admission=$_POST['Date_d_admission'];
  // $img=$_POST['img'];
  $insertStudent=$mysqlConnection->prepare('INSERT INTO students (Name, Email, phone,Enroll_Number,Date_Admition)
  VALUES (:Name,:Email,:phone,:Enroll_Number,:Date_d_admission)');

 $insertStudent->execute([
    'Name'=>$name,
    'Email'=>$email,
    'phone'=>$Phone,
    'Enroll_Number'=>$Enroll_Number,
    'Date_d_admission'=>$Date_d_admission
    // 'image'=>$image
  ]);

  echo 'Ok data ajouter avec success ';

?>

<?php 
require 'connection.php';

 // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
// if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
// {
//         // Testons si le fichier n'est pas trop gros
//         if ($_FILES['screenshot']['size'] <= 1000000)
//         {
//                 // Testons si l'extension est autorisée
//                 $fileInfo = pathinfo($_FILES['screenshot']['name']);
//                 $extension = $fileInfo['extension'];
//                 $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
//                 if (in_array($extension, $allowedExtensions))
//                 {
//                         // On peut valider le fichier et le stocker définitivement
//                   move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
//                         echo "L'envoi a bien été effectué !";
//                 }
//         }

// }

  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $Phone=$_POST['phone'];
  $Enroll_Number=$_POST['Enroll_Number'];
  $Date_d_admission=$_POST['Date_d_admission'];
  // $img=$_FILES['screenshot'];
 

  $insertStudent=$mysqlConnection->prepare('INSERT INTO students (Name, Email, phone,Enroll_Number,Date_Admition)
  VALUES (:Name,:Email,:phone,:Enroll_Number,:Date_d_admission)');
  // $mysqlConnection->exec($insertStudent);
 $insertStudent->execute([
    'Name'=>$name,
    'Email'=>$email,
    'phone'=>$Phone,
    'Enroll_Number'=>$Enroll_Number,
    'Date_d_admission'=>$Date_d_admission,
    // 'screenshot'=>$img
  ]);

  echo 'Student  ajouter avec success ';
  header('location:students.php?Student_ajouter_avec_success');

?>

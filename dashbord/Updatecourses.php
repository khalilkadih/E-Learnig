<?php
require_once 'connection.php';
//if coming in form student (la liste des students),
if($_SERVER['REQUEST_METHOD']=='GET'){
    $courses=$mysqlConnection->prepare('select  * from courses');
    $courses->execute();
    $_courses=$courses->fetch();


    if(!isset($_GET['id']) OR !is_numeric($_GET['id'])){
        echo("il faut que un identifiant pour le modifier");
        return;
    }



    $recivecourses=$mysqlConnection->prepare('SELECT * FROM courses where id_course=:id');
    $recivecourses->execute(
        [
            'id'=>$_GET['id'],

        ]

        );
    $_courses=$recivecourses->fetch(PDO::FETCH_ASSOC);
    // print_r($_courses);

}else{
    // save changes
    // print_r($_POST);
    try{
            $statment=$mysqlConnection->prepare("UPDATE courses  SET 
            name_course = :name_course, Heures_cours =:Heures_cours, date_debut = :date_debut,
            date_fin = :date_fin
            WHERE id_course=:id");
            $statment->bindParam(':name_course',$_POST['name_course']);
            $statment->bindParam(':Heures_cours',$_POST['Heures_cours']);
            $statment->bindParam(':date_debut',$_POST['date_debut']);
            $statment->bindParam(':date_fin',$_POST['date_fin']);
            $statment->bindParam(':id',$_POST['id']);
            $statment->execute();
            //redirect to students list and display a success message
            header('location:courses.php?updateSuccess');
    }catch(Exception $e){
        var_dump($e->getMessage());
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>AUpdate User</title>
</head>
    <body   body class="d-flex flex-column min-vh-100">
        <h1 class="text-center bg-danger mt-5">update data courses</h1>

  
        <form class="m-4" method="POST" action="Updatecourses.php" enctype="multipart/form-data">
            
            <div class="mb-3 visually-hidden">
                <label for="id" class="form-label">id:</label>
                <input type="hidden"  name="id" class="form-control" value="<?php echo($_courses['id_course']); ?>" id="id">
            </div>
            <div class="mb-3">
            <label for="name_course" class="form-label">Name course:</label>
            <input type="text"  name="name_course"class="form-control" value="<?php echo ($_courses['name_course'])?>" id="name_course">
            </div>
            <div class="mb-3">
            <label for="Heures_cours" class="form-label">Heurs du cours</label>
            <input type="text" class="form-control"  value="<?php echo $_courses['Heures_cours']?>" name="Heures_cours" id="Heures_cours">
            </div>
            <div class="mb-3">
            <label for="date_debut" class="form-label">Date du debut</label>
            <input type="phone" class="form-control" value="<?php echo $_courses['date_debut']?>" name="date_debut" id="date_debut">
            </div>
            <div class="mb-3">
            <label for="date_fin" class="form-label">Date du fin</label>
            <input type="text" class="form-control" value="<?php echo $_courses['date_fin']?>" name="date_fin"  id="date_fin">
            </div>
     
        
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </body>
</html>
    <?php
    require 'connection.php';
    //if coming in form student (la liste des students),
    if($_SERVER['REQUEST_METHOD']=='GET')
    {
        // $students=$mysqlConnection->prepare('select  * from students');
        // $students->execute();
        // $_student=$students->fetch();


        if(!isset($_GET['id']) OR !is_numeric($_GET['id']) )
        {
            echo("il faut que un identifiant pour le modifier ou  la valeur de id n'exist pas dans la db");
            return;
        }



            $reciveStudent=$mysqlConnection->prepare('SELECT * FROM students where id_Students=:id');
            $reciveStudent->execute(
            [
                'id'=>$_GET['id'],

            ]

            );
           $_student=$reciveStudent->fetch(PDO::FETCH_ASSOC);

        }else{
        // save changes
        print_r($_POST);
        try{
                $statment=$mysqlConnection->prepare("UPDATE students SET 
                Name = :Name, Email = :Email, phone = :phone,
                Enroll_Number = :Enroll_Number, Date_Admition = :Date_d_admission, image = 'not set'
                WHERE id_Students=:id");
                $statment->bindParam(':Name',$_POST['Name']);
                $statment->bindParam(':Email',$_POST['Email']);
                $statment->bindParam(':phone',$_POST['phone']);
                $statment->bindParam(':Enroll_Number',$_POST['Enroll_Number']);
                $statment->bindParam(':Date_d_admission',$_POST['Date_d_admission']);
                $statment->bindParam(':id',$_POST['id']);
                $statment->execute();
                //redirect to students list and display a success message
                header('location:students.php?updateSuccess');
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
            <h1 class="text-center bg-danger mt-5">update data User</h1>

    
            <form class="m-4" method="POST" action="UpdateStudent.php" enctype="multipart/form-data">
                
                <div class="mb-3 visually-hidden">
                    <label for="id" class="form-label">id:</label>
                    <input type="hidden"  name="id" class="form-control" value="<?php echo($_student['id_Students']); ?>" id="id">
                </div>
                <div class="mb-3">
                <label for="Name" class="form-label">Name:</label>
                <input type="text"  name="Name"class="form-control" value="<?php echo ($_student['Name'])?>" id="Name">
                </div>
                <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control"  value="<?php echo $_student['Email']?>" name="Email" id="Email">
                </div>
                <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="phone" class="form-control" value="<?php echo $_student['phone']?>" name="phone" id="phone">
                </div>
                <div class="mb-3">
                <label for="Enroll_Number" class="form-label">Enroll Number</label>
                <input type="text" class="form-control" value="<?php echo $_student['Enroll_Number']?>" name="Enroll_Number"  id="Enroll_Number">
                </div>
                <div class="mb-3">
                <label for="Date_d_admission" class="form-label">Date d'admission</label>
                <input type="text" class="form-control" value="<?php echo $_student['Date_Admition']?>" name="Date_d_admission" id="Date_d_admission">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="img" id="img">
                </div>
            
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </body>
    </html>
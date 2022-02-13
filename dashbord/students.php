<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


try{
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=e_classe_db;charset=utf8',
        'root',
        ''
    );
}catch (Exception $e){die ('erreur : '.$e->getMessage());}

$sqlQuery='SELECT * FROM students';
$studentStatement=$mysqlConnection->prepare($sqlQuery);
$studentStatement->execute();
$student=$studentStatement->fetchAll();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>E-Learnig</title>
</head>
<body>
    <main class="container-fluid">
        <section class="row">
        <?php include('sidebar.php');?>
            <div class="col-10 main-content" id="navigationBar">
                <!--start main content-->
        <?php include('header.php');?>
                <div class="row">
                    <!-- strat student list -->
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" title="navbarBrand">Student List </a>
                            <form class="d-flex">
                               <span class=" ic ic-sorte mt-2"></span>
                                <a href="AddUserForm.php" class="btn  btn btn-primary  badge bg-primary text-wrap ml-2" >Add new student</a>
                            </form>
                        </div>
                    </nav>
                    <!-- end  student list -->
                </div>
                <div class="row">
                    <?php if(isset($_GET['updateSuccess'])){?>
                            <div class="alert alert-success">
                                student updated successfully!
                            </div>
                        <?php }?>
                        <?php if(isset($_GET['DeletedSuccess'])){?>
                            <div class="alert alert-success">
                                Student Deleted successfully!
                            </div>
                        <?php }?>
                    
                    <table class="table">
                        <thead class="">
                            <tr class="card" style="background-color: #E5E5E5 !important;">
                                <th scope="col">image</th>
                                <th scope="col" class="fw-light">Name</th>
                                <th scope="col" class="fw-light ">Email</th>
                                <th scope="col"class="fw-light">Phone</th>
                                <th scope="col" class="fw-light">Enroll Number</th>
                                <th scope="col" class="fw-light">Date d'admision</th>
                                <th scope="col">---------</th>
                            </tr>
                        </thead>
                        <tbody>
                            <h1 color='red'>

                                      <!--/* //get data from file json 
                                      // $students=json_decode(file_get_contents('student.json'),true);
                                      //print_r($students); */ -->
                            </h1>

                      
                                    <?php

                                      /*  for($i=0;$i<=2;$i++)
                                              $ListOfStudent[]=array('Name'=>'Mark',
                                                                        'Email'=>'paulo94kdh@g.com',
                                                                        'Phone'=>0643434343,
                                                                        'Enroll_Number'=>34343434343,
                                                                        'date_admition'=>'05-06-2022'
                                                        );
                                                */  
                                            // for($i=0;$i<count($students);$i++){
                                            //              $element=$students[$i];
                                            foreach($student as $__students){
                                                
                                    ?>

                                        

                                            <tr>
                                            <th scope="row"><img src="../img/user.svg" alt=""></th>
                                            <td><?=$__students['Name']?></td>
                                            <td><?php echo $__students['Email'];?></td>
                                            <td><?php echo $__students['phone'];?></td> 
                                            <td><?php echo $__students['Enroll_Number'];?></td>
                                            <td><?php echo $__students['Date_Admition'];?></td>
                                            <td>
                                                <a href="UpdateStudent.php?id=<?=$__students['id_Students']?>">
                                                    <span class="ic ic-edit m-2"></span>
                                                </a>
                                                <a href="DeletStudent.php?id=<?=$__students['id_Students']?>">
                                                    <span class="m-2 ic ic-delete"></span>
                                                </a>
                                            </td>

                                            </tr>
                                        <?php }?>
                         </tbody>
                       
                    </table>
                </div>

                <!--end main content-->




            </div>



        </section>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous"></script>
</body>

</html>
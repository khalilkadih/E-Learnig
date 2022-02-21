            <?php

            
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL); 
            // Souvent on identifie cet objet par la variable $conn ou $db
            try{
                $mysqlConnection = new PDO(
                    'mysql:host=localhost;dbname=e_classe_db;charset=utf8',
                    'root',
                    ''
                );
            }catch (Exception $e){die ('erreur : '.$e->getMessage());}

            $sqlQuery='SELECT * FROM courses';
            $coursesStatment=$mysqlConnection->prepare($sqlQuery);
            $coursesStatment->execute();
            $course=$coursesStatment->fetchAll();



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

                            <!-- strat student list -->

                            <nav class="navbar navbar-light bg-light">
                                <div class="container-fluid">
                                    <a class="navbar-brand" title="Paymentdetails">Courses </a>
                                    <form class="d-flex">
                                    <a href="AddcoursForm.php" class="btn  btn btn-primary  badge bg-primary text-wrap ml-2 m-1" >Add new cours</a>

                                        <a href=""><span class=" ic ic-sorte mt-2"></span></a>
                                    </form>
                                </div>
                            </nav>
                            <?php if(isset($_GET['updateSuccess'])){?>
                                <div class="alert alert-success">
                                    cours updated successfully!
                                </div>
                            <?php }?>
                            <?php if(isset($_GET['DeletedSuccess'])){?>
                                <div class="alert alert-success">
                                    cours Deleted successfully!
                                </div>
                            <?php }?>
                            <?php

                            if(isset($_GET['coursesadded'])){
                                echo '<div class="alert alert-success">course added succesffully  </div>';
                            }
                            ?> 
                            <!-- end  student list -->
                            <!--end main content-->

                            <!--start page paiment-->

                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Name cours</th>
                                        <th scope="col">Nombre hours du cours</th>
                                        <th scope="col">Date du debut</th>
                                        <th scope="col">date de fin</th>
                                        <th>_</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                                    //    $payments=json_decode(file_get_contents('payments.json'),true);
                                                    // for($i=0;$i<=7;$i++)
                                                
                                                    //       $ListOfStudent[]=array('Name'=>'Mark',
                                                    //                                 'Payment_schedule'=>'paulo94kdh@g.com',
                                                    //                                 'Bill_Number'=>0643434343,
                                                    //                                 'Amount_paid'=>'DHS 1500',
                                                    //                                 'balance_account'=>'DHS 500.00',
                                                    //                                 'Date'=>'05-06-2022'
                                                    //                 );
                                                            

                                                        foreach($course as $element){
                                                        ?>

                                                        <tr class="text-center">
                                                        <td><?php echo $element['name_course'];?></td>
                                                        <td><?php echo $element['Heures_cours'];?></td>
                                                        <td><?php echo $element['date_debut'];?></td>
                                                        <td><?php echo $element['date_fin'];?></td>
                                                        <td>
                                                            <a href="Updatecourses.php?id=<?=$element['id_course']?>">
                                                                <span class="ic ic-edit m-2"></span>
                                                            </a>
                                                            <a href="Deletcourses.php?id=<?=$element['id_course']?>">
                                                                <span class="m-2 ic ic-delete"></span>
                                                            </a>
                                                        </td>                                            </tr>
                                                    <?php }?>
                                                
                                </tbody>
                            </table>
                            <!--start page paiment-->

                        </div>



                    </section>


                </main>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous"></script>
            </body>

            </html>
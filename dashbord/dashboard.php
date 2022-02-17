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
        <?php  try{
            $mysqlConnection = new PDO(
                'mysql:host=localhost;dbname=e_classe_db;charset=utf8',
                'root',
                ''
            );
        }catch (Exception $e){die ('erreur : '.$e->getMessage());}

        $sqlQuery='SELECT COUNT(*) FROM students';
        $StudentStatment=$mysqlConnection->prepare($sqlQuery);

        $StudentStatment->execute();
        $resultas=$StudentStatment->fetchColumn();
       
//cours
            $sqlQuery='SELECT COUNT(*) FROM courses';
                    $coursesStatment=$mysqlConnection->prepare($sqlQuery);

                    $coursesStatment->execute();
                    $_resultas=$coursesStatment->fetchColumn();   
                    
                    
 //sum of payment amount
                    $sqlQuery=' SELECT SUM(Balance_Amount)  FROM payments_details;';
                    $BalanceStatment=$mysqlConnection->prepare($sqlQuery);

                    $BalanceStatment->execute();
                    $__resultas=$BalanceStatment->fetchColumn();   
 
                    //users

                    $sqlQuery='SELECT COUNT(*) FROM compte';
                    $CompteStatement=$mysqlConnection->prepare($sqlQuery);
                    $CompteStatement->execute();
                    $users=$CompteStatement->fetchColumn();
        ?>



          
            <div class="col-10 main-content" id="navigationBar">
                <!--start main content-->

                <!--start Navigation barre and search input-->
                    <?php include('header.php');?>
                <!--end Navigation barre and search input-->

                <!--Start card Content -->
                <?php if(isset($_GET['Welcome'])){?>
                            <div class="alert alert-success">
                                 Welcome to dashbord!
                            </div>
                        <?php }?>
                <section class="row cards">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card cardStudent">
                            <div class="card-body d-flex flex-column align-items-start">
                                <span class="ic ic-student2 w-100"> </span>
                                <p class="fs-6 fw-bold">students</p>
                                <h2 class=" align-self-end fs-6 fw-bold"> <?php echo $resultas;?></h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 ">
                        <div class="card cardCources">
                            <div class="card-body d-flex flex-column align-items-start">
                                <span class="ic ic-course2 w-100"> </span>
                                <p class="fs-6 fw-bold">Cources</p>
                                <h2 class=" align-self-end fs-6 fw-bold"><?php echo $_resultas;?></h2>

                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6 col-sm-12">
                        <div class="card cardPayment">
                            <div class="card-body d-flex flex-column align-items-start">
                                <span class="ic ic-payment2 w-100"> </span>
                                <p class="fs-6 fw-bold">payments</p>
                                <h2 class=" align-self-end fs-6 fw-bold"> <?php echo $__resultas;?><span class="fs-6"> DHs</span> </h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card cardUsers">
                            <div class="card-body d-flex flex-column align-items-start">
                                <span class="ic ic-users2 w-100"> </span>
                                <p class="fs-6 fw-bold">Users</p>
                                <h2 class=" align-self-end fs-6 fw-bold"><?php echo $users; ?></h2>
                               

                            </div>
                        </div>
                    </div>

                    <!--End card Content -->

                </section>
                <!--end main content-->




            </div>



        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous"></script>
</body>

</html>
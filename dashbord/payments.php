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
                        <a class="navbar-brand" title="Paymentdetails">Payment Details </a>
                        <form class="d-flex">
                            <a href=""><span class=" ic ic-sorte mt-2"></span></a>
                        </form>
                    </div>
                </nav>

                <!-- end  student list -->
                <!--end main content-->

                <!--start page paiment-->

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Payment schedule</th>
                            <th scope="col">Bill Number</th>
                            <th scope="col">Amount paid</th>
                            <th scope="col">balance account</th>
                            <th scope="col">Date</th>
                            <th>_</th>

                        </tr>
                    </thead>
                    <tbody>
                       <?php
                                        for($i=0;$i<=10;$i++)
                                    
                                              $ListOfStudent[]=array('Name'=>'Mark',
                                                                        'Payment_schedule'=>'paulo94kdh@g.com',
                                                                        'Bill_Number'=>0643434343,
                                                                        'Amount_paid'=>'DHS 1500',
                                                                        'balance_account'=>'DHS 500.00',
                                                                        'Date'=>'05-06-2022'
                                                        );
                                                

                                            foreach($ListOfStudent as $element){
                                            ?>

                                            <tr>
                                            <th scope="row"><img src="../img/image.svg" alt=""></th>
                                            <td><?php echo $element['Name'];?></td>
                                            <td><?php echo $element['Payment_schedule'];?></td>
                                            <td><?php echo $element['Bill_Number'];?></td>
                                            <td><?php echo $element['Amount_paid'];?></td>
                                            <td><?php echo $element['balance_account'];?></td>
                                            <td><?php echo $element['Date'];?></td>

                                            <td><span class="ic ic-edit m-2"><a href=""></a></span><span class=" m-2 ic ic-delete"><a href=""></a></span></td>


                                            </tr>
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
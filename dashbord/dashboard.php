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

                <!--start Navigation barre and search input-->
                    <?php include('header.php');?>
                <!--end Navigation barre and search input-->

                <!--Start card Content -->

                <section class="row cards">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card cardStudent">
                            <div class="card-body d-flex flex-column align-items-start">
                                <span class="ic ic-student2 w-100"> </span>
                                <p class="fs-6">students</p>
                                <h2 class=" align-self-end fs-6">243</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 ">
                        <div class="card cardCources">
                            <div class="card-body d-flex flex-column align-items-start">
                                <span class="ic ic-course2 w-100"> </span>
                                <p class="fs-6">Cources</p>
                                <h2 class=" align-self-end fs-6">13</h2>

                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-6 col-sm-12">
                        <div class="card cardPayment">
                            <div class="card-body d-flex flex-column align-items-start">
                                <span class="ic ic-payment2 w-100"> </span>
                                <p class="fs-6">payments</p>
                                <h2 class=" align-self-end fs-6"> 556.000<span class="fs-6">DHs</span> </h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card cardUsers">
                            <div class="card-body d-flex flex-column align-items-start">
                                <span class="ic ic-users2 w-100"> </span>
                                <p class="fs-6">Users</p>
                                <h2 class=" align-self-end fs-6">235</h2>

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
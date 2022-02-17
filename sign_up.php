
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet " href="style.css ">
    <title>E-Learning</title>
</head>

<body>
    <main class="container-fluid ">
        <section class="row ">
            <div class="col-12 col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 mt-5 pt-5">
                <div class="card shadow ">
                    <div class="card-body p-5 ">
                        <h1 class="text-start border-start border-5 border-primary ps-1 fw-bold">E-Classe</h1>
                        <h2 class="h3 text-center text-uppercase mb-3 fw-bold">Sign up </h2>
                        <p class="text-center "> Create New Acount </p>
                            <div class="" style="display:flex;    justify-content:space-around; margin :20px !important; ">
                            
                                <a href="" class="btn  btn-primary  fw-bold " style="margin-top: .5rem !important; width:40%;"> Sign up</a>
                                <a href="" class="btn btn-primary mt-2 fw-bold" style="margin-top: .5rem !important; width:40%"> Sign up</a>
                            </div>

                            <form method="POST" action="../dashbord/dashboard.php">
                                <div class="mb-3 ">
                                    <label for="Username" class="form-label">Username:</label>
                                    <input type="Username" class="form-control " placeholder="Enter your username" id="Username">

                                </div>
                                <div class="mb-3 ">
                                    <label for="ToOpenPage" class="form-label">Email:</label>
                                    <input type="Email" class="form-control " placeholder="Enter your Email" id="ToOpenPage">

                                </div>
                                <div class="mb-3 ">
                                    <label for="Password" class="form-label">Password:</label>
                                    <input type="Password" class="form-control " placeholder="Enter your Password" id="Password">

                                </div>
                                <div class="mb-3">
                                    <label for="PasswortInput" class="form-label mt-1"> Confirm Password :</label>
                                    <input type="password" placeholder="Confirm  Password" class="form-control" id="PasswortInput">
                                </div>

                                <button type="submit" class="btn btn-primary w-100 fw-bold">SIGN IN</button>
                            </form>
                    </div>
                    <span class="text-center mb-5 mt-.5 ">forget your password ? <a href="# ">Reset password</a></span>
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous"></script>
</body>

</html>
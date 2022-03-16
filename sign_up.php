
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
                            <!-- <div class="" style="display:flex;    justify-content:space-around; margin :20px !important; ">
                            
                                <a href="" class="btn  btn-primary  fw-bold " style="margin-top: .5rem !important; width:40%;"> Sign up</a>
                                <a href="" class="btn btn-primary mt-2 fw-bold" style="margin-top: .5rem !important; width:40%"> Sign up</a>
                            </div> -->

                            <form method="POST" action="signUpSubmit.php" id="form">
                                <div class="mb-3 form-control ">
                                    <!-- pattern="^[a-zA-Z]+\s[a-zA-Z]+$" title="Check your first Name" -->
                                    <label for="firstName" class="form-label">first name:</label>
                                    <input type="text" class="form-control"  name="firstName" placeholder="Enter your first name" id="firstName" required>
                                    <small>Error</small>
                                </div>
                                <div class="mb-3  form-control">
                                    <!-- pattern="^[a-zA-Z]+\s[a-zA-Z]+$" title="Check your Last Name" -->
                                    <label for="LastName" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control"  name="LastName"  placeholder="Enter your LastName" id="LastName" required>
                                    <small>Error</small>
                                </div>
                                <div class="mb-3 form-control ">
                                    <!-- placeholder="khalil.99@example.com" patter n="/\w+\.+\w+@+\w+\.+com/gm" title="check your Email" -->
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" placeholder="jhonDoe@example.com" name="email"  id="email" required>
                                    <small>Error</small>
                                </div>
                                <div class="mb-3 form-control ">
                                <!-- pattern="(?=.*[0-9])(?=.*[A-Z]^.{8,})$" title="You must a caractere"  -->
                                    <label for="Password" class="form-label">Password:</label>
                                    <input type="password" class="form-control " name="password" placeholder="Enter your Password" id="Password" required>
                                    <small>Error</small>
                                </div>
                                <div class="mb-3 form-control">
                                    <label for="confirmPwd" class="form-label mt-1"> Confirm Password :</label>
                                    <input type="password" placeholder="Confirm  Password"  name="confirmPwd" class="form-control" id="confirmPwd" required>
                                    <small>Error</small>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 fw-bold">SIGN IN</button>
                            </form>
                    </div>
                        <div class="text-center"> 
                                    <p class="fw-bold">
                                    If already have account sign in here
                                    </p>
                                    <a href="index.php" class=" btn btn-primary w-50 mb-4">Sign in</a></span>

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
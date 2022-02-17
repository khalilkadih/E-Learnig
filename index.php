        <?php     

        try{
            $mysqlConnection = new PDO(
                'mysql:host=localhost;dbname=e_classe_db;charset=utf8',
                'root',
                ''
            );
            // set the PDO error mode to exception
        $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (Exception $e)
            {
            die ('erreur : '.$e->getMessage());
            }

        $sqlQuery='SELECT * FROM compte';
        $CompteStatement=$mysqlConnection->prepare($sqlQuery);
        $CompteStatement->execute();
        $users=$CompteStatement->fetchAll();

        if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            foreach ($users as $user) {
                if (
                    $user['Email'] === $_POST['email'] &&
                    $user['Password'] === $_POST['password']
                ) {
                
                    $loggedUser = [
                        'email' => $user['Email'],
                        
                    ];
                    header('location:../E-LEARNING/dashbord/dashboard.php?Welcome');
                
                }
                //  else {
                //     $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier' );
                // }
            }
        }

        
        /*action="../E-LEARNING/dashbord/dashboard.php"*/

        ?>
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
                        <h2 class="h3 text-center text-uppercase mb-3 fw-bold">Sign in </h2>
                        <p class="text-center "> Enter your credentials to access your account </p>
                        
                        <?php if(!isset($loggedUser)): ?>

                        <form method="POST" action="">
                        <?php if(isset($errorMessage)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $errorMessage;?>
                            </div>
                        <?php endif;?>    
                            <div class="mb-3 ">
                                <label for="email" class="form-label">Email:</label>
                                <input type="Email" class="form-control" name="email" placeholder="Enter your Email" id="ToOpenPage" required>

                            </div>
                            <div class="mb-3">
                                <label for="PasswortInput" class="form-label mt-1">Password :</label>
                                <input type="password" name="password" placeholder="Enter your Password" class="form-control" required id="PasswortInput">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 fw-bold">SIGN IN</button>
                        </form>
                    </div>
                    <span class="text-center mb-5 mt-.5 ">forget your password ? <a href="# ">Reset password</a></span>
                </div>

            </div>

        </section>
        
<?php endif;?>
    </main>
    <!-- <script src="script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous"></script>
</body>

</html>
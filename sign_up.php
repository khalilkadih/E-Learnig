
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet " href="style.css ">
        <title>E-Learning</title>
    </head>

    <body>
    <main class="container">
            <form method="POST"  id="form">
                <h2>Register with us</h2>
                <div class=" form-control">
                    <label for="firstName ">first Name:</label>
                    <input type="text " placeholder="Enter first name " name="firstName" id="firstName ">
                    <small>Error message</small>
                </div>
                <div class=" form-control">
                    <label for="LastName ">Last Name:</label>
                    <input type="text " placeholder="Enter LastName " name="LastName" id="LastName ">
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="email ">Email:</label>
                    <input type="email " placeholder="Enter Email " name="email" id="email ">
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="password">Password:</label>
                    <input  type="password" placeholder="Enter Password" name="password" id="password ">
                    <small>Error message</small>

                </div>

                <div class="form-control">
                    <label for="confirmPwd ">Confirm password:</label>
                    <input type="password" placeholder="Confirmer Password " name="confirmPwd" id="confirmPwd ">
                    <small>Error message</small>
                </div>

                <button type="submit ">Submit</button>
            </form>
                        <div class="text-center"> 
                                        <p class="fw-bold">
                                        If already have account sign in here
                                        </p>
                                        <a href="" class=" btn btn-primary w-50 mb-4">Sign in</a></span>

                            </div>
        </main>

<script src="script.js"></script>    
    </body>

    </html>
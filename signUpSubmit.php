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
             try{
              //  print_r(extract($_POST));

                $firstName=$_POST['firstName'];
                $lastname=$_POST['LastName'];
                $email=$_POST['email'];
                $password_user=$_POST['password'];
                $confirmPwd=$_POST['confirmPwd'];

          

                $inserUser=$mysqlConnection->prepare('INSERT INTO compte (First_Name, Last_Name, Email, confirm_pwd, passwoedUser)
                VALUES (:firstName,:LastName,:email,:confirmPwd,:password)');
                  // var_dump($firstName);
                  // var_dump($lastname);

                  // var_dump($email);

                  // var_dump($password_user);

                  // var_dump($confirmPwd);

                $inserUser->execute([
                    'firstName'=>$firstName,
                    'LastName'=>$lastname,
                    'email'=>$email,
                    'confirmPwd'=>$confirmPwd,
                    'password'=>$password_user
                ]);
                // var_dump($inserUser);

                header('location:index.php?SignUpSuccess');

                }catch(PDOException $e){
                die('Error'.$e->getMessage());}
                

    ?>
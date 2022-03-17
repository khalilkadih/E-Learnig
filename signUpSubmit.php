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
           
            
           
                $firstName=$_POST['firstName'];
                $lastname=$_POST['LastName'];
                $email=$_POST['email'];
                $password_user=$_POST['password'];
                $confirmPwd=$_POST['confirmPwd'];


                $_checkEmailUser=$mysqlConnection->prepare('SELECT Email FROM compte
                WHERE Email=:email;');
                $_checkEmailUser->bindParam(':email',$email);

                $_checkEmailUser->execute();
                $__email=$_checkEmailUser->fetchColumn();
                if(!$__email){
                      
                      
                        try {
                          
                            $inserUser=$mysqlConnection->prepare('INSERT INTO compte (First_Name, Last_Name, Email, confirm_pwd, passwoedUser)
                              VALUES (:firstName,:LastName,:email,:confirmPwd,:password)');
                              $inserUser->execute
                              ([
                                  'firstName'=>$firstName,
                                  'LastName'=>$lastname,
                                  'email'=>$email,
                                  'confirmPwd'=>$confirmPwd,
                                  'password'=>$password_user
                              ]);
                              header('location:index.php?SignUpSuccess');

                      }
                      catch(PDOException $e){
                      die('Error'.$e->getMessage());}
                      
                
                    }else{
                      require_once'util.php';
                      redirectWithMsg('sign_up.php',$MSG_TYPE_ERROR,$email.' already exists');
                    }
                
                

             

    ?>
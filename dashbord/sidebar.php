    <?php 
              if(!isset($_SESSION)) { 
                session_start(); 
              } 
            
            $active='btn-primary';
            $page= basename($_SERVER['SCRIPT_FILENAME']);
            function highlightIfACtive($p)
            {
            global $page,$active;
            if($p==$page)
            echo $active;
            }

        

        if(isset($_SESSION['loggedUser'])){
            // echo '<div class="alert alert-success">course added succesffully  </div>';
            $loggedUser=$_SESSION['loggedUser'];
        
        }
    ?>
                <div class="col-2 sidebar d-flex align-items-center flex-column vh-100">
                <h1 class=" mt-3 text-start border-start border-5 border-primary ps-1 align-self-start mb-5 fs-6 fw-bold" id="changeTailleOfH1">E-Classe</h1>
                <img src="../img/logo.jfif " class="w-50 img-profil" alt="photo profile">
                <p class="mt-2 mb-0 h6 d-none d-lg-block fw-bold"> <?php print_r($loggedUser['email']);?></p>
                <span class="text-danger">
                <?php print_r($loggedUser['First_Name']);?>
                        </span>
                <nav class="w-75 mx-auto" title="mainPrincipale">
                    <ul class="w-100 mt-5 menu-items list-unstyled">
                        <li>
                            <a href="dashboard.php" class="btn <?php highlightIfACtive('dashboard.php')?> w-100 active"> <span class="ic ic-home"></span> <span>Home</span> </a>
                        </li>
                        <li>
                            <a href="courses.php" class="btn  w-100"> <span class="ic ic-course"  <?php highlightIfACtive('students.php')?>></span><span>Courses</span></a>
                        </li>
                        <li>
                            <a href="students.php" class="btn  <?php highlightIfACtive('students.php')?>  w-100"> <span class=" ic ic-student "></span><span>Student</span></a>
                        </li>
                        <li>
                            <a href="payments.php" class="btn <?php highlightIfACtive('payments.php')?>   w-100"> <span class=" ic ic-payment "></span><span>Payment</span></a>
                        </li>
                        <li>
                            <a href="# " class="btn    w-100"> <span class=" ic ic-report "></span> <span>Report</span></a>
                        </li>
                        <li>
                            <a href="# " class="btn    w-100"> <span class=" ic ic-setting "></span><span>Setting</span></a>
                        </li>
                        <li class="">
                        </li>
                    </ul>
                    <div class="mt-5 logOut">
                        <a href="../index.php " class="btn ">
                            <span class="ic ic-logout mt-2 "></span>
                            <span class="displayLogout"> Log out</span>
                        </a>
                    </div>
                </nav>
            </div>
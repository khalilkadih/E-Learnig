        <?php
       

        try{
            $mysqlConnection = new PDO(
                'mysql:host=localhost;dbname=e_classe_db;charset=utf8',
                'root',
                ''
            );
        }catch (Exception $e){die ('erreur : '.$e->getMessage());}

            $sqlQuery='SELECT * FROM students';
            $studentStatement=$mysqlConnection->prepare($sqlQuery);
            $studentStatement->execute();
            $student=$studentStatement->fetchAll();
            
        ?>

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
                    <?php require_once('sidebar.php');?>
                    <div class="col-10 main-content" id="navigationBar">
                        <!--start main content-->
                        <?php require_once('header.php');?>
                        <div class="row">
                            <!-- strat student list -->
                            <nav class="navbar navbar-light bg-light">
                                <div class="container-fluid">
                                    <a class="navbar-brand" title="navbarBrand">Student List </a>
                                    <!-- <form class="d-flex">
                                        <a href="SortStudent.php">
                                            <span class=" ic ic-sorte mt-2"></span>
                                        </a>
                                        <a href="AddUserForm.php"
                                            class="btn  btn btn-primary  badge bg-primary text-wrap ml-2">Add new
                                            student</a>
                                    </form> -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#myModal">Add new User</button>
                                    <!-- --------------------------------------------start model insert data - -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add New User</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <form method="POST" action="AddUserSubmit.php">
                                                    <div class="modal-body">

                                                        <div class="mb-3">
                                                            <label for="Name" class="form-label">Name:</label>
                                                            <input type="text" name="Name" class="form-control"
                                                                id="Name" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Email" class="form-label">Email</label>
                                                            <input type="email" class="form-control" name="Email"
                                                                id="Email" required
                                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                                title="email is not match">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="phone" class="form-label">Phone</label>
                                                            <input type="phone" class="form-control" name="phone"
                                                                id="phone" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Enroll_Number" class="form-label">Enroll
                                                                Number</label>
                                                            <input type="text" class="form-control" name="Enroll_Number"
                                                                id="Enroll_Number" required>

                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Date_d_admission" class="form-label">Date
                                                                d'admission</label>
                                                            <input type="text" class="form-control"
                                                                name="Date_d_admission" id="Date_d_admission" required>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="saveData"
                                                            class="btn btn-primary">Save</button>
                                                        <button type="submit" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- --------------------------------------------End model insert data - -->

                                    <!-- ----------------------------------------Update  Modal------------------------------------------------------------------------------------ -->

                                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> Update Student</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="UpdateStudent.php" method="POST">

                                                        <div class="modal-body">
                                                            
                                                            <input type="hidden" name="id" class="id"/>

                                                            <div class="form-group">
                                                                <label for="Name" class="form-label">Name:</label>
                                                                <input type="text" name="Name" class="form-control"
                                                                    class="Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="Email" class="form-label">Email</label>
                                                                <input type="text" class="form-control" name="Email"
                                                                    class="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="text" class="form-control" name="phone"
                                                                    class="phone">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="Enroll_Number" class="form-label">Enroll
                                                                    Number</label>
                                                                <input type="text" class="form-control"
                                                                    name="Enroll_Number" class="Enroll_Number">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="Date_d_admission" class="form-label">Date
                                                                    d'admission</label>
                                                                <input type="text" class="form-control"
                                                                    name="Date_d_admission" id="Date_d_admission">

                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="updatedata"
                                                                class="btn btn-primary">Update Data</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- -----------------------------------------------------end model update data ------------------------------------------------------- -->
                                <!-- DELETE POP UP FORM  -->


                                <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="DeletStudent.php" method="GET">

                                                    <div class="modal-body">

                                                        <input type="hidden" name="id" id="id">

                                                        <h4> Do you want to Delete this Data ??</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> NO </button>
                                                        <button type="submit" name="deletedata" class="btn btn-primary">  Delete. </button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
<!-- --------------------------------------------------------------------------------------------------------- -->
                                </div>
                            </nav>
                            <!-- end  student list -->
                        </div>
                        <div class="row">
                            <?php if(isset($_GET['updateSuccess'])){?>
                            <div class="alert alert-success">
                                student updated successfully!
                            </div>
                            <?php }?>
                            <?php if(isset($_GET['DeletedSuccess'])){?>
                            <div class="alert alert-success">
                                Student Deleted successfully!
                            </div>

                            <?php }?>
                            <?php if(isset($_GET['sortSucees'])){?>
                            <div class="alert alert-success">
                                Student Sorted successfully!
                            </div>
                            <?php }?>
                            <?php if(isset($_GET['Student_ajouter_avec_success'])){?>
                            <div class="alert alert-success">
                                Student Added successfully!
                            </div>
                            <?php }?>
                            <table class="table">
                                <thead>
                                    <tr class="card" style="background-color: #E5E5E5 !important;">
                                        <!-- <th scope="col">image</th> -->
                                        <!-- <th scope="col" class="fw-light">id</th> -->
                                        <th scope="col" class="fw-light">Name</th>
                                        <th scope="col" class="fw-light ">Email</th>
                                        <th scope="col" class="fw-light">Phone</th>
                                        <th scope="col" class="fw-light">Enroll Number</th>
                                        <th scope="col" class="fw-light">Date d'admision</th>
                                        <th scope="col">update</th>
                                        <th scope="col">delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                                    foreach($student as $__students){                                                        
                                     ?>
                                    <tr>
                                        <!-- <th scope="row"><img src="../img/user.svg" alt=""></th> -->
                                        <td style='display:none'><?=$__students['id_Students']?></td>
                                        <td><?=$__students['Name']?></td>
                                        <td><?php echo $__students['Email'];?></td>
                                        <td><?php echo $__students['phone'];?></td>
                                        <td><?php echo $__students['Enroll_Number'];?></td>
                                        <td><?php echo $__students['Date_Admition'];?></td>
                                        <td>
                                           
                                            <button type="button" data-bs-toggle="modalEdit"
                                                class="btn btn-success editbtn">EDIT</button>
                                         
                                        </td>
                                        <td>
                                           
                                           <button type="button" data-bs-toggle="modalEdit"
                                               class="btn btn-danger deletebtn">Delte</button>
                                        
                                       </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <!--end main content-->
                    </div>
                </section>

            </main>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js "
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB "
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js "
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 "
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

            <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

            <script>

                         $(document).ready(function(){

                                $('.deletebtn').on('click', function () 
                                {
                                     $('#deletemodal').modal('show');

                                     $tr = $(this).closest('tr');
                                     let data = $tr.children("td").map(function(){
                                                      return $(this).text();
                                    }).get();


                                    console.log(data);

                                    $('#id').val(data[0]);

                            });
                        });


            </script>
            <script>
            // //iframe inside of the modal
            // const iframe=document.querySelector('#modal').querySelector('ifram');

            // document.querySelectorAll('.display_in_modal').forEach((btn)=>{
            //         btn.addEventListener('click',(e)=>{
            //             e.preventDefault();
            //             ifram.href=e.target.href;
            //             //show modal
            //         })
            // })
    
            $(document).ready(function() {

    
                $('.editbtn').on('click', function() {

                    $('#editmodal').modal('show');

                    /*$tr = $(this).closest('tr');

                    let data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
                    
                    console.log(data);
                    */
                    /////////////////////////
            
                    let children=$(this).closest('tr').children();
                    let id=children[0].textContent;
                    let name=children[1].textContent;
                    let email=children[2].textContent;
                    let phone=children[3].textContent;
                    let enrollNbr=children[4].textContent;
                    let dateAdmission=children[5].textContent;

                    $('#editmodal #id').value=id;
                    $('#editmodal #Name').value=name;
                    $('#editmodal #Email').value=email;
                    $('#editmodal #phone').value=phone;
                    $('#editmodal #Enroll_Number').value=enrollNbr;
                    $('#editmodal #Date_d_admission').value=dateAdmission;
                   
                });
            });
            </script>
        </body>

        </html>
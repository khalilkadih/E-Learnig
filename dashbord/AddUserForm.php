<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New User</title>
</head>
<body class="container-fluid ">
  <h1 class="text-center bg-danger mt-5">Add new User</h1>
  <form class="m-4" method="POST" action="AddUserSubmit.php" enctype="multipart/form-data" class="col-12 col-xl-4 offset-xl-4 col-lg-6 offset-lg-3 mt-5 pt-5" >
          <div class="mb-3">
            <label for="Name" class="form-label">Name:</label>
            <input type="text"  name="Name"class="form-control" id="Name">
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-control"  name="Email" id="Email">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="phone" class="form-control" name="phone" id="phone">
          </div>
          <div class="mb-3">
            <label for="Enroll_Number" class="form-label">Enroll Number</label>
            <input type="text" class="form-control"  name="Enroll_Number"  id="Enroll_Number">
         
          </div>
          <div class="mb-3">
            <label for="Date_d_admission" class="form-label">Date d'admission</label>
            <input type="text" class="form-control" name="Date_d_admission" id="Date_d_admission">
          </div>
          <div class="mb-3">
          <label for="screenshot" class="form-label">image</label>
          <input class="form-control" type="file" name="screenshot" id="screenshot">
        </div>
        
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New User</title>
</head>
<body>
  <h1 class="text-center bg-danger mt-5">Add new User</h1>
<form class="m-4">
<div class="mb-3">
    <label for="Name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="Name">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input type="text" class="form-control" id="Email">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="phone" class="form-control" id="phone">
  </div>
  <div class="mb-3">
    <label for="Enroll_Number" class="form-label">Enroll Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="Enroll_Number" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="Date_d_admission" class="form-label">Date d'admission</label>
    <input type="text" class="form-control" id="Date_d_admission">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
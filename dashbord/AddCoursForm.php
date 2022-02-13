<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New cours</title>
</head>
<body>
  <h1 class="text-center bg-danger mt-5">Add new User</h1>
  <form class="m-4" method="POST" action="AddcoursSubmit.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name_course" class="form-label">Name cours:</label>
            <input type="text"  name="name_course"class="form-control" id="name_course">
          </div>
          <div class="mb-3">
            <label for="Heures_cours" class="form-label">heurs du cours</label>
            <input type="text" class="form-control"  name="Heures_cours" id="Heures_cours">
          </div>
          <div class="mb-3">
            <label for="date_debut" class="form-label">Date du debut</label>
            <input type="phone" class="form-control" name="date_debut" id="date_debut">
          </div>
          <div class="mb-3">
            <label for="date_fin" class="form-label"> date du fin </label>
            <input type="text" class="form-control"  name="date_fin"  id="date_fin">
         
          </div>
         
        
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>
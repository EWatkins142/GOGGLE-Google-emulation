<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Doggies</title>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid bg-light">
      <h1 class="text-center text-success">Add A Dog!</h1>
    </div>

  <div class="container">
  <form action="newdogform.php" method="post">
  <div class="form-group">
    <label for="name">Dog's Name:</label>
    <input type="text" class="form-control shadow" placeholder="Enter Dog's Name" name="name">
  </div>
  <div class="form-group">
    <label for="breed">Dog's Breed:</label>
    <input type="text" class="form-control shadow" placeholder="Enter Dog's Breed" name="breed">
  </div>
  <div class="form-group">
    <label for="weight">Dog's Weight:</label>
    <input type="text" class="form-control shadow" placeholder="Enter Dog's Weight" name="weight">
  </div>
  <div class="form-group">
    <label for="age">Dog's Age:</label>
    <input type="text" class="form-control shadow" placeholder="Enter Dog's Age" name="age">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  <button input type="reset" class="btn btn-primary mt-1 ml-2" name="reset" value="reset">RESET</button>
  <button input type="link" class="btn btn-primary mt-2 ml-5 pl-4">
    <a class="text text-white" href="index.php">Home</a>
  </button>
  <button input type="link" class="btn btn-primary mt-2 ml-2">
    <a class="text text-white" href="doggies.php">Doggies</a>
  </button>
  </form>
  <br /><br />

    <?php include("adddog.inc.php"); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

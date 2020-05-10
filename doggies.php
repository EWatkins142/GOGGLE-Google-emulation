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
      <div class="text-center text-success">
        <h1>Doggies!</h1>
      </div>

  <?php
  $con = mysqli_connect("localhost","test","test","doglist", "3308") or die('Sorry, could not connect to database server');
  $query = "SELECT dogid,name,breed,weight,age from dogs order by dogid desc limit 0,5";
  $result = mysqli_query($con, $query) or die('Sorry, could not get recipes at this time ');
  if (mysqli_num_rows($result) == 0)
  {
     echo "<h3>Sorry, there are no dogs posted at this time, please try back later.</h3>";
  } else
     $pooches=mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>

      <div class="container">
       <div class="row">
       <?php foreach($pooches as $pooch){ ?>
         <div class="col-sm">
           <div class="card border">
            <div>
             <?php echo htmlspecialchars($pooch['name']); ?>
            </div>
            <div>
            <?php echo htmlspecialchars($pooch['breed']); ?>
            </div>
            <div>
            <?php echo htmlspecialchars($pooch['weight']); ?>
            </div>
            <div>
            <?php echo htmlspecialchars($pooch['age']); ?>
            </div>
          </div>
         </div>
         <?php } ?>
        </div>
      </div>

    <div class="text-center mt-5">
      <button input type="link" class="btn btn-primary mt-2 ml-5 pl-4">
        <a class="text text-white" href="index.php">Home</a>
      </button>
      <button input type="link" class="btn btn-primary text-center mt-2 ml-2 pl-3">
        <a class="text text-white" href="newdogform.php">AddaDog!</a>
      </button>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

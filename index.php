<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="goggle.css" rel="stylesheet" type="text/css">
    <title>Google clone</title>
  </head>
  <?php include("search.inc.php") ?>
  <body>
    <div class="container">
      <form class="form-horizontal" action="index.php" method="post">
        <div class="form-group">
          <div class="col-sm-10">
            <input type="text" class="form-control shadow mt-2" name="info" placeholder="Type Your Search Here" name="info">
            <button input type="submit" class="btn btn-primary mt-3" name="submit">SUBMIT</button>
            <button input type="reset" class="btn btn-primary mt-3 ml-2" name="reset" value="reset">RESET</button>
            <button input type="link" class="btn btn-primary mt-3 ml-2">
              <a class="text text-white" href="doggies.php">Doggies</a>
            </button>
            <button input type="link" class="btn btn-primary mt-3 ml-2 pl-4">
              <a class="text text-white" href="newdogform.php">AddaDog!</a>
            </button>
          </div>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

  if(isset($_POST['submit'])){

    $con=mysqli_connect("localhost","test","test","doglist", "3308") or die('Sorry, could not connect to database server');

    $search = $_POST['info'];

    $words = explode(" ", $search);

    $phrase = implode("%' AND name LIKE '%", $words);

    $query = "SELECT dogid,name,breed,weight,age from dogs where name like '%$phrase%'";

    $result = mysqli_query($con, $query) or die('Could not query database at this time');

    echo "<h1>Search Results: </h1><br><br>\n";

    if (mysqli_num_rows($result) == 0)

    {

        echo "<h2>Sorry, no dogs were found with '$search' in them.</h2>";

    } else

    {

        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))

        {

            $dogid = htmlspecialchars($row['dogid']);

            $name = htmlspecialchars($row['name']);

            $breed = htmlspecialchars($row['breed']);

            $weight = htmlspecialchars($row['weight']);

            $age = htmlspecialchars($row['age']);

            echo " Your dogs name is $name<br><br>\n";
            echo " Your dogs breed is $breed<br><br>\n";
            echo " Your dogs weight is $weight<br><br>\n";
            echo " Your dogs age is $age<br><br>\n";

        }

    }

  }

?>

<?php
if(isset($_POST['name'])){
$name = htmlspecialchars($_POST['name']);
}else{
$name = "Name not set in POST Method";
}
if(isset($_POST['breed'])){
$breed = htmlspecialchars($_POST['breed']);
}else{
$breed = "Breed not set in POST Method";
}
if(isset($_POST['weight'])){
$weight = htmlspecialchars($_POST['weight']);
}else{
$weight = "Weight not set in POST Method";
}
if(isset($_POST['age'])){
$age = htmlspecialchars($_POST['age']);
}else{
$age = "Age not set in POST Method";
}

    $con=mysqli_connect("localhost","test","test","doglist", "3308") or die('Sorry, could not connect to database server');
    $query = "INSERT INTO dogs (name, breed, weight, age) VALUES('$name', '$breed', '$weight', '$age')";
    $result = mysqli_query($con, $query);
    if ($result)
       echo "<h2>Congrats! Your dog is posted!</h2>\n";

?>

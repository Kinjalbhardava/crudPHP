<?php
// include 'conn.php';

$con = new mysqli("localhost", "root","", "crud");


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $date =  $_POST['date'];
    $guest =  $_POST['guest'];
    $request =  $_POST['request'];
    


    $q  = "INSERT INTO user VALUES('$name', '$email', '$phone', '$date', '$guest', '$request')";


    $res = mysqli_query($con, $q);

    if($res){

        echo "record insert successfull";
}
else{
    die(mysqli_error($con));
}
}

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    
<br>
<br>
</head>

  <body>

  
<header border=2px, color="black">
<center><h5> Restaturant Table Booking </h5>

</header>










  

 <div class = "container"> 
  <form method = 'POST'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">enter your name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">enter your email</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">enter your phone</label>
    <input type="text" class="form-control" name="phone" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">enter date</label>
    <input type="date" class="form-control" name="date" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">enter no of guest</label>
    <input type="text" class="form-control" name="guest" aria-describedby="emailHelp">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">special request</label>
    <input type="text" class="form-control" name="request" aria-describedby="emailHelp">
  </div>
 


  <button type="submit" name="submit" class="btn btn-primary">Book Now</button>
</form>
</div>


   
  </body>
</html>
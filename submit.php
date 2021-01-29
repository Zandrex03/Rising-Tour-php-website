<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'rising-city-tour-db';

$connection = mysqli_connect($host, $user, $password, $database);



if(mysqli_connect_error()){
  echo "Error connection in database";
} else{
  echo "connected to database";
}

  $tcode = uniqid();


if(isset($_POST['submit'])){
   $lname = $_POST['lname'];
   $fname = $_POST['fname'];
   $mname = $_POST['mname'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $setdate = $_POST['setdate'];
   $adult = $_POST['adult'];
   $children = $_POST['children'];
   $sceneLocation = $_POST['scene-location'];
   $sceneFirstCategory = implode(',',$sceneLocation);
   $churchLocation = $_POST['church-location'];
   $churchSecondCategory = implode(',',$churchLocation);
   $lrLocation = $_POST['lr-location'];
   $totalamount = $_POST['totalamount'];
   $cardholder = $_POST['cardholder'];
   $cardnumber = $_POST['cardnumber'];
   $securitycode = $_POST['securitycode'];
   $expiryday = $_POST['expiryday'];
   $expirymonth = $_POST['expirymonth'];

   $queryBook = "INSERT INTO user_booking_form  VALUES ('$tcode', '$lname', '$fname', '$mname', '$phone', '$email', '$setdate', '$adult', '$children',  '$sceneFirstCategory', '$churchSecondCategory', '$lrLocation', '$totalamount', ' $cardholder', '$cardnumber', '$securitycode', '$expiryday', '$expirymonth')";
   $sqlBook = mysqli_query($connection, $queryBook);

   echo '<script>alert("Saving Successfully")</script>';
   echo '<script>window.location.href = "success.php" </script>';
//   echo "Saving Successfully";
}else {
  echo '<script>alert("Not Saving Successfully")</script>';
//   echo '<script>window.location.href = "booking.php" </script>';
//   echo "Not saving Successfully";

}
 
// mysqli_close($connection);
?>


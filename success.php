<?php

require('./submit.php');

$queryTcode = "Sel"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rising City Tours</title>
 <style>
 @import url("https://fonts.googleapis.com/css2?family=Mulish&display=swap");
 @import url("https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap");
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Mulish", sans-serif;
  background: beige;
}

 .step-progress-container {
  max-width: 40%;
  margin: 0 auto 0 auto;
}

.step-progress-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.progress-title {
  text-align: center;
  margin-bottom: 0.5rem;
}

.progress-title h1 {
  font-family: "Kaushan Script", cursive;
  color: gold;
  text-shadow: 1px 1px 1px black, 1px 2px 1px black, 1px 3px 1px black,
    1px 4px 1px black, 1px 5px 1px black;
  text-align: center;
  font-size: 3rem;
}

.step {
  text-align: center;
}

.step p {
  margin-bottom: 0.5rem;
}

.bullet {
  height: 25px;
  width: 26px;
  border-radius: 100%;
  border: 1px solid orange;
  display: inline-block;
  position: relative;
  transition: 0.5s ease;
  line-height: 20px;
  font-size: 1.2rem;
  box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.4);
}

.bullet.completed {
  background: orangered;
  color: white;
}

.bullet.completedNoline {
  background: orangered;
  color: white;
}

.bullet.completed::before {
  content: "";
  position: absolute;
  right: -162px;
  top: 50%;
  width: 162px;
  height: 2px;
  background: orange;
}

.bullet4 {
  margin-left: 8px;
}

.receipt-form-container{
    width: 70%;
    margin:0 auto ;
    margin-top: 3rem;
}

.receipt-title h1{
  color: gold;
  text-shadow: 1px 1px 1px black, 1px 2px 1px black, 1px 3px 1px black,
    1px 4px 1px black;
  text-align: center;
  font-size: 2.4rem;
  font-style:italic;
}

.receipt-title h3{
  color: gold;
  text-shadow: 1px 1px 1px black, 1px 2px 1px black, 1px 3px 1px black,
    1px 4px 1px black;
  text-align: center;
  font-size: 2.1rem;
  font-style:italic;
}

.transaction-code-container{
    margin: 6rem;
    text-align:center ;
}

.transaction-code-container h1{
    text-align:center ;
    font-size: 1.3rem;
}

.transaction-code-container input{
     
}

 </style>   
</head>
<body>
    
    <div class="step-progress-container">
        <div class="progress-title">
            <h1>Rising City Tours</h1>
        </div>
        <div class="step-progress-bar">
                <div class="step">
                        <p>Personal-Form</p>
                        <div class="bullet bullet1 completed">1</div>
                </div>
                <div class="step ">
                        <p>Travel-Form</p>
                        <div class="bullet bullet2  completed">2</div>
                </div>
                <div class="step">
                        <p>Payment-Form</p>
                        <div class="bullet bullet3  completed">3</div>
                </div>
                <div class="step">
                        <p>Successful</p>
                        <div class="bullet bullet4  completedNoline">4</div>
            </div>
        </div> 
    </div>
    <div class="receipt-form-container">
        <div class="receipt-title">
            <h1>Thank You For Booking A Trip with Us!!!</h1>
            <h3>We ensure the highest, excellence and quality-assured service for you. See you on the trip!</h3>
        </div>
        <div class="transaction-code-container">
          <h1>Here is your transaction code:</h1>
            <input type="text" id="transaction-code">
        </div>
    </div>    

         


</body>
</html>
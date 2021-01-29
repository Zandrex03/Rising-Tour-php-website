<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Booking.css">
    <title>Booking</title>
    
</head>
<body>
    <div class="step-progress-container">
      <div class="progress-title">
           <h1> Book a Tour Form</h1>
           <h4>Fill in the form to plan your visit to San Jose Del Monte Bulacan</h4>
       </div>
       <div class="step-progress-bar">
               <div class="step">
                    <p>Personal-Form</p>
                    <div class="bullet bullet1 completed">1</div>
               </div>
               <div class="step ">
                    <p>Travel-Form</p>
                    <div class="bullet bullet2 ">2</div>
               </div>
               <div class="step">
                    <p>Payment-Form</p>
                    <div class="bullet bullet3">3</div>
               </div>
               <div class="step">
                    <p>Successful</p>
                    <div class="bullet bullet4">4</div>
         </div>
       </div> 
    </div>
     
   <div class="form-container">
          <form action="submit.php" id="booking-form" method="post" >
               <div class="personal-container">
                    <div class="personal-details">
                         <h1>Personal Form</h1>
                         <div>
                              <input class="input-design" type="text" name="lname" id="lname" autocomplete="off" required>
                              <label class="label-design">Lastname</label>
                         </div>
                         <div>
                              <input class="input-design" type="text" name="fname" id="fname" autocomplete="off" required>
                              <label class="label-design">Firstname</label>
                         </div>
                         <div>
                              <input class="input-design" type="text" name="mname" id="mname" autocomplete="off" required> 
                              <label class="label-design">Middlename</label>
                         </div>
                         <div>
                              <input class="input-design" type="text" name="phone" id="phone" autocomplete="off" required maxlength="11">
                              <label class="label-design">Phone Number</label>
                         </div>
                         <div>
                              <input class="input-design" type="email" name="email" id="email"  required>
                              <label class="label-design">Email</label>
                         </div>
                         <div>
                              <button  class="next" ><span></span>Next &#8594</span></button>
                         </div>
                    </div> 
               </div> 
               <div class="travel-container">
                    <div class="travel-details">  
                    <h1>Travel Details</h1>
                         <div>
                              <label for="setdate">Set Date</label>
                              <input type="date" name="setdate" id="setdate" class="travel-input-design date">
                         </div>
                         <div>
                              <label for="adult">How many Adults?</label>
                              <input type="number" name="adult" id="adult" min="1" max="30" class="travel-input-design number" placeholder="0">
                         </div>
                         <div>
                              <label for="children">How many Children?</label>
                              <input type="number" name="children" id="child" min="1" max="30" class="travel-input-design number" placeholder="0">
                         </div>
                         <div class="center-btn">
                              <button class="personal-prev"><span></span>&#8592 Prev</button>
                              <button  class="availability"><span></span> Check Availability &#8594</button>
                         </div>
                    </div> 
               </div>    
               <div class="itinerary-container">
                    <h2>Itinerary Details</h2>
                    <div class="itinerary">
                         <div class="scene">
                              <h3>Category 1: Scene</h3>
                              <h5>Please Choose 2 Only</h4>
                              <div>
                                   <label><input type="checkbox" name="scene-location[]" class="scene-loc" value="Angat Watershed Forest Reserve" onclick="return check()"> Angat Watershed Forest Reserve</label>
                              </div>
                              <div>
                                   <label><input type="checkbox" name="scene-location[]" class="scene-loc"  value="Mount Balagbag" onclick="return check()"> Mount Balagbag</label>
                              </div>
                              <div>
                                   <label><input type="checkbox" name="scene-location[]" class="scene-loc"  value="Kaytitinga Falls" onclick="return check()"> Kaytitinga Falls</label>
                              </div>
                              <div>
                                   <label><input type="checkbox" name="scene-location[]" class="scene-loc"  value=" VS Orchidarium Farm Santo Cristo" onclick="return check()"> VS Orchidarium Farm Santo Cristo</label>
                              </div>
                              <div>
                                   <label><input type="checkbox" name="scene-location[]" class="scene-loc"  value="Pineapple Farm" onclick="return check()"> Pineapple Farm</label>
                              </div>
                              <div>                                                                                   
                                   <label><input type="checkbox" name="scene-location[]" class="scene-loc"  value="Emilio Aguinaldo Bridge" onclick="return check()"> Emilio Aguinaldo Bridge</label>
                              </div>
                         </div>
                         <div class="churches">
                                   <h3>Category 2: Churches</h3>
                                   <h5>Please Choose 2 Only</h4>
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value=" San Lorenzo Ruiz de Manila Parish Church"  onclick="return check2()"> San Lorenzo Ruiz de Manila Parish Church</label>
                              </div>  
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value=" Our Lady of Lourdes Grotto Shrine" onclick="return check2()"> Our Lady of Lourdes Grotto Shrine</label>
                              </div>  
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value="St. Joseph the Worker Parish Church" onclick="return check2()"> St. Joseph the Worker Parish Church</label>
                              </div>  
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value="Parokya ni San Pedro Apostol Church" onclick="return check2()"> Parokya ni San Pedro Apostol Church</label>
                              </div>  
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value="San Isidro Labrador Parish Church" onclick="return check2()"> San Isidro Labrador Parish Church</label>
                              </div>  
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value="Sacred Heart of Jesus Parish Church" onclick="return check2()"> Sacred Heart of Jesus Parish Church</label>
                              </div>  
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value="Madre Alessandra House of Prayer" onclick="return check2()"> Madre Alessandra House of Prayer</label>
                              </div>  
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value="Sagrada Familia Parish Church" onclick="return check2()"> Sagrada Familia Parish Church</label>
                              </div>  
                              <div>
                                   <label><input type="checkbox" name="church-location[]" class="church-loc" value="Santo Rosario Sapang Palay Parish Church" onclick="return check2()"> Santo Rosario Sapang Palay Parish Church</label>
                              </div> 
                              <div class="itinerary-btn">
                                   <button class="travel-prev"><span></span>&#8592 Prev</button>
                                   <button class="done"><span></span>done &#8594</button>
                              </div>  
                         </div>
                         <div class="leisure-resort">
                              <h3>Category 3: Leisure and Resort</h3> 
                              <h5>Please Choose 1</h5>
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value="Grotto Vista Resort"> Grotto Vista Resort</label>	
                              </div> 
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value=" Los Arcos de Hermano Resort"> Los Arcos de Hermano Resort</label> 	
                              </div> 
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value="Pacific Waves Hotel & Resort,Inc."> Pacific Waves Hotel & Resort,Inc.</label>
                              </div> 
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value="Tierra Fontana Wave Resort Inc."> Tierra Fontana Wave Resort Inc.</label>
                              </div> 
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value="Villa Antonio De Dave Resort & Leisure Farm"> Villa Antonio De Dave Resort & Leisure Farm</label>
                              </div> 
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value=" Colinas Verdes Club House"> Colinas Verdes Club House</label>
                              </div> 
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value="Paradise Adventure Camp And Resorts"> Paradise Adventure Camp And Resorts</label>
                              </div> 
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value="Cattle Creek Golf And Country Club"> Cattle Creek Golf And Country Club</label>
                              </div> 
                              <div>
                                   <label><input type="radio" name="lr-location" class="lr-loc" value="Trf Hotel & Videoke Restaurant"> Trf Hotel & Videoke Restaurant</label>
                              </div>   
                         </div>
                    </div>
               </div>
               <div class="result-container">  
                    <div class="result-show">
                         <h1>Result</h1>
                         <div class="itinerary1">
                              <h3>First Category Itinerary:</h3>
                              <p id="result1"></p>
                         </div>
                         <div class="itinerary2">
                              <h3>Second Category Itinerary:</h3>
                              <p id="result2"></p>
                         </div>
                         <div class="itinerary3">
                              <h3>Third Category Itinerary:</h3>
                              <p id="result3"></p>
                         </div>
                         <div class="amount-show">
                              <label>Total amount:</label>
                              <input type="text" id="totalResult" name="totalamount" readonly>
                         </div>
                         <div class="result-buttons">
                              <button class="prev-itinerary"><span></span>&#8592 Prev</button>
                              <button class="toPayment"><span></span>Proceed To Payment &#8594</button>
                         </div>
                    </div>
               </div>
               <div class="payment-container">
                    <div class="payment-method">
                         <h1>Payment Checkout</h1>
                         <div class="amount-show">
                             <label>Total amount:</label>
                             <input type="text" id="payment-total" disabled>
                         </div>
                         <div class="payment-logo">
                              <img src="img/visaSmall.png" alt="" class="logo-img visa">
                              <img src="img/masterSmall.png" alt="" class="logo-img mastercard">
                              <img src="img/americanSmall.png" alt="" class="logo-img american">
                         </div>
                         <div>
                              <label class=label2-design>Card Holders Name:</label>
                              <input class="payment-design special" type="text" name="cardholder" id="card-holder">
                         </div>
                         <div>
                              <label class=label2-design>Credit Card Number:</label>
                              <input class="payment-design" type="text" name="cardnumber" id="card-number" pattern=".{16,}" required title="Minimum of 16 digits only" maxlength="16" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                         </div>
                         <div>
                              <label class=label2-design>Security Code:</label>
                              <input class="payment-design" type="password" name="securitycode" id="security-code" placeholder="" pattern=".{6,}" maxlength="6" required title="Minimum of 6 digits only"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                         </div>
                         <div class="expiry-date">
                              <label for="expirydate" class="label2-design">Expiry Date:</label>
                              <input class="date-design" type="number" name="expiryday" id="expiry-day" min="1" max="31" placeholder="Day">
                              /
                              <input  class="date-design" type="number" name="expirymonth" id="expiry-month" min="1" max="12" placeholder="Month">
                         </div>
                         <div class="payment-button">
                            <button class="result-prev"><span></span>&#8592 Prev</button>
                            <button type="submit" name="submit" id="pay" class="pay-button"><span></span> Pay</button>
                         </div> 
                    </div>
               </div>
          </form>
    </div>
<!-- 
    <div class="successful">
      <h1>Your Book was Successful</h1>
    </div> -->
<script src="booking.js"></script>
</body>
</html>
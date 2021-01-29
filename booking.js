// Form show on click and Form Validation
// Forms Buttons
const nextBtn = document.querySelector(".next");
const availBtn = document.querySelector(".availability");
const prevBtnPersonal = document.querySelector(".personal-prev");
const prevBtnTravel = document.querySelector(".travel-prev");
const prevBtnItinerary = document.querySelector(".prev-itinerary");
const toPaymentBtn = document.querySelector(".toPayment");
// Form Directory
const travel = document.querySelector(".travel-details");
const personal = document.querySelector(".personal-details");
const itinerary = document.querySelector(".itinerary-container");
const resultShow = document.querySelector(".result-show");
const paymentForm = document.querySelector(".payment-method");
// Personal Details Form
const lname = document.querySelector("#lname");
const fname = document.querySelector("#fname");
const mname = document.querySelector("#mname");
const phone = document.querySelector("#phone");
const email = document.querySelector("#email");
// Travel Details Form
const setDate = document.querySelector("#setdate");
const adult = document.querySelector("#adult");
const child = document.querySelector("#child");
const travelForm = document.querySelector("#travel-form");

// Progress Bar -------------------------------------------------------
const bullet1 = document.querySelector(".bullet1");
const bullet2 = document.querySelector(".bullet2");
const bullet3 = document.querySelector(".bullet3");
const bullet4 = document.querySelector(".bullet4");


// Next button to travel form-----------------------------------
nextBtn.addEventListener("click", (e) => {
  if (
    lname.value === "" ||  fname.value === "" ||mname.value === "" ||email.value === "" ||phone.value === "") {
    alert("Text field Can't be blank");
    e.preventDefault();
  } else {
    travel.classList.add("active");
    personal.classList.add("active");
    bullet2.classList.add('completed');
  }

});

// Prev Button to go back to Personal details----------------------
prevBtnPersonal.addEventListener('click', (e) => {
  e.preventDefault();
  travel.classList.remove("active");
  personal.classList.remove("active");
  bullet2.classList.remove('completed');
})


// Next Button to Itinerary Form-------------------------------------
availBtn.addEventListener("click", (e) => {
  e.preventDefault();
  if (setDate.value === "" || adult.value === "") {
    alert("Text field Can't be blank");
  } else {
    itinerary.classList.add("active");
    travel.classList.remove("active");
  }
});

//Prev button to go back to travel form------------------------------
prevBtnTravel.addEventListener('click', (e) => {
  e.preventDefault();
  itinerary.classList.remove("active");
  travel.classList.add("active");

})



// Form Result Receipt-------------------------------------------------------------------------------------------------------------

const doneBtn = document.querySelector(".done");
const result1 = document.querySelector("#result1");
const result2 = document.querySelector("#result2");
const result3 = document.querySelector("#result3");


function check() {
  const selectedScene = document.querySelectorAll(".scene-loc");
  const checkboxesScene = [];
  for (let i = 0; i < selectedScene.length; i++) {
    if (selectedScene[i].checked) {
      checkboxesScene.push(selectedScene[i].parentElement.textContent);
    }
  }
  if (checkboxesScene.length > 2) {
    alert("please choose 2 only");
    return false;
  } 
}

function check2() {
  const selectedChurch = document.getElementsByName(".church-loc");
  const checkboxesChurch = [];
  for (let i = 0; i < selectedChurch.length; i++) {
    if (selectedChurch[i].checked) {
      checkboxesChurch.push(selectedChurch[i].parentElement.textContent);
    }
  }
  if (checkboxesChurch.length > 2) {
    alert("please choose 2 only");
    return false;
  }
}

// Form Result Button to Show the Result----------------------------------------------------------------------------------------
doneBtn.addEventListener("click", (e) => {
  e.preventDefault();
// Getting and displaying the value of checked items in checkbox and radiobutton---------------------
  const selectedScene = document.querySelectorAll(".scene-loc")
  const checkboxesScene = [];
  for (let i = 0; i < selectedScene.length; i++) {
    if (selectedScene[i].checked) {
      checkboxesScene.push(selectedScene[i].parentElement.textContent);
    }
  }
  result1.innerText = checkboxesScene;
  

  const selectedChurch = document.querySelectorAll(".church-loc");
  const checkboxesChurch = [];
  for (let i = 0; i < selectedChurch.length; i++) {
    if (selectedChurch[i].checked) {
      checkboxesChurch.push(selectedChurch[i].parentElement.textContent);
    }
  } 
  result2.innerText = checkboxesChurch;


  const selectedLr = document.querySelectorAll(".lr-loc");
  const checkboxesLr= [];
  for (let i = 0; i < selectedLr.length; i++) {
    if (selectedLr[i].checked) {
      checkboxesLr.push(selectedLr[i].parentElement.textContent);
    }
  result3.innerText =  checkboxesLr;
} 
  // Function to Compute the total expenses of trip--------------------------------
  const adultCount = adult.value;
  const childCount = child.value;
  const totalResult = document.querySelector("#totalResult");
  let fixRate = 2500;

  function totalExpenses(adultCount, childCount, fixRate) {
    let total = 0;
 
    total = fixRate * (Number(adultCount) + Number(childCount));

    totalResult.value = total;
  }
  totalExpenses(adultCount, childCount, fixRate);

  // Checking the input-----------------
  const checkAll = document.querySelectorAll('input[type ="checkbox"]');
  const checkBoxTrue = [];
  for (let i = 0; i < checkAll.length; i++) {
    if (checkAll[i].checked) {
      checkBoxTrue.push(checkAll[i]);
    }
  }
  if(checkBoxTrue.length == 0){
     alert("You To Need to Choose");
  } else if(checkboxesScene.length < 2){
    alert("You To Need to Choose 2 in per Category ");
  } else if(checkboxesLr.length == 0){
    alert("You To Need to Choose in Category 3");
  } else if(checkboxesChurch.length < 2){
    alert("You To Need to Choose 2 in per Category ");
  } else{
    resultShow.classList.add("active");
    itinerary.classList.remove("active");
  }
  
});


// Button to go back in itinerary form
prevBtnItinerary.addEventListener('click', (e) => {
  e.preventDefault();
  resultShow.classList.remove("active");
  itinerary.classList.add("active");
})

const paymentTotal = document.querySelector("#payment-total");
toPaymentBtn.addEventListener('click', (e) => {

    e.preventDefault();
    paymentForm.classList.add('active');
    resultShow.classList.remove("active");
    paymentTotal.value = totalResult.value;
    bullet3.classList.add('completed');
})



//Payment Method Form Validation------------------------------------------------------------------

// function checkCardNumber(){
//     const cardNumber = document.getElementsByName("cardnumber");

//     if(cardNumber.value == ""){
//       alert("Credit Card Number field cannot be empty");
//     }
// }


const payBtn = document.querySelector("#pay");
const resultPrevBtn = document.querySelector(".result-prev")
const cardHolder = document.querySelector("#card-holder")
const cardNumber = document.querySelector("#card-number");
const secCode = document.querySelector("#security-code");
const expiryDay = document.querySelector("#expiry-day");
const expiryMonth = document.querySelector("#expiry-month");

payBtn.addEventListener('click', (e) => {
 
    if(cardHolder === "" || cardNumber.value === "" || secCode.value === "" || expiryDay.value === "" || expiryMonth.value === ""){
        alert("TextField cannot be empty");
          e.preventDefault()
    }
})

resultPrevBtn.addEventListener('click', () =>{
  paymentForm.classList.remove('active');
  resultShow.classList.add("active");
})





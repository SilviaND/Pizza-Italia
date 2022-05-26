// -------------- Automatic slideshow - START ---------------- //

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

// ----------------- Automatic slideshow - END  ----------------


// ---------------- Validation Form  -------------- 

 function validateForm() {
   let field = document.forms["myContactForm"]["Name"]["Email"]["Message"].value;
   
   if (field == "") {
    alert("Името е задължително");
    return false;
   }
 }




// ---------------- Po-up Cart START -------------------

var myCartButton = document.getElementById("myCartBtn");

window.onload = myCartButton.style.display = "block";


function openCart() {
  document.getElementById("shopping-cart").style.display = "block";
}

function closeCart() {
  document.getElementById("shopping-cart").style.display = "none";
}

// ---------------- Po-up Cart END -------------------

// document.getElementById("myBtn").addEventListener("click", function() {
//   alert("Влез в профила си, за да поръчаш!");
// })

// ---------------------- icrease number of orders in shopping cart -----------------------


let clicks = document.getElementById("clicks").value;

console.log(clicks);

// function countClicks() {
//   clicks += 1;
//   document.getElementById("clicks").innerHTML = clicks;
// };
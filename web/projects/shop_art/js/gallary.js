function openModal() {
  document.getElementById('myModal').style.display = "block";
  document.getElementById('mySidebar').style.display = "block";
}

function closeModal(){
  document.getElementById('myModal').style.display = "none";
  document.getElementById('mySidebar').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);
showSide(slideIndex);

function plusSlides(n) {
  slideIndex += n;
  showSlides(slideIndex);
  showSide(slideIndex);
}

function currentSlide(n){
  slideIndex = n;
  showSlides(slideIndex);
  showSide(slideIndex);
}

function showSlides(n){
  var slides = document.getElementsByClassName("mySlides");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}

function showSide (n) {
  var slides = document.getElementsByClassName("mySlides");
  var m;
  if (n > slides.length) {m = 1;}
  if (n < slides.length) {m = slides.length;}
  m = m - 1;
  

  var m = slideIndex - 1;
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200){
      var myObj = JSON.parse(this.responseText);

      document.getElementById("title").innerHTML = myObj.art_title[m];
      document.getElementById("type").innerHTML = myObj.art_type[m];
      //check for alternate name     
      if (!myObj.psy[m]) {
        document.getElementById("artist").innerHTML = myObj.fn[m] + ' ' + myObj.ln[m];
      } else {
        document.getElementById("artist").innerHTML = myObj.psy[m];
      }
      //check for integer to display trailing 0s
      if (Number.isSafeInteger(Number(myObj.price[m]))) {
        document.getElementById("price").innerHTML = '$' + myObj.price[m] + '.00';
      } else {
        document.getElementById("price").innerHTML = '$' + myObj.price[m];
        document.getElementById("dprice").innerHTML = '$' + myObj.dprice[m];
      }
      //check for null and integer to display discounted price
      if (!myObj.dprice[m]) {
        document.getElementById("dprice").innerHTML = '';
      } else if (Number.isSafeInteger(Number(myObj.dprice[m]))) {
        document.getElementById("dprice").innerHTML = '$' + myObj.dprice[m] + '.00';
      } else {
        document.getElementById("dprice").innerHTML = '$' + myObj.dprice[m];
      }
    }
  };

  xmlhttp.open("GET", "sidebar_data.php", true);
  xmlhttp.send();
}
var cart = [];

function addtocart () {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200){
      var myObj = JSON.parse(this.responseText);
      var quantity = Number(document.getElementById("quantity").value);
      var id = myObj.id[slideIndex - 1];
      var item = {id: id, quantity: quantity};
      //check for previous insertion
      for (var i in cart) {
        if (cart[i].id == item.id){
          cart[i].quantity += item.quantity;
          alert("Quantity of " + myObj.art_title[slideIndex - 1] + " has been changed to " + cart[i].quantity);
          return;
        }
      }
      cart.push(item);
      //notify customer of successful insertion
      if (quantity == 1){
        alert(quantity + " " + myObj.art_title[slideIndex - 1] + " art piece has been added to your art cart");
      } else {
        alert(quantity + " " + myObj.art_title[slideIndex - 1] + " art pieces have been added to your art cart");
      }
    }
  };

  xmlhttp.open("GET", "sidebar_data.php", true);
  xmlhttp.send();  
}

function tocart() {
  var url = "cart.php?cs=" + JSON.stringify(cart);
  document.location.href = url;
}
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
  showSlides(slideIndex += n);
  showSide(slideIndex += n);
}

function currentSlide(n){
  showSlides(slideIndex = n);
  showSide(slideIndex = n);
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
  if (n > slides.length) {slideIndex = 1;}
  if (n < slides.length) {slideIndex = slides.length;}
  //slideIndex = slideIndex - 1;
  
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200){
      var myObj = JSON.parse(this.responseText);

      document.getElementById("title").innerHTML = myObj.art_title[slideIndex];
      document.getElementById("type").innerHTML = myObj.art_type[slideIndex];
      //check for alternate name     
      if (!myObj.psy[slideIndex]) {
        document.getElementById("artist").innerHTML = myObj.fn[slideIndex] + ' ' + myObj.ln[slideIndex];
      } else {
        document.getElementById("artist").innerHTML = myObj.psy[slideIndex];
      }
      //check for integer to display trailing 0s
      if (Number.isSafeInteger(myObj.price[slideIndex])) {
        document.getElementById("price").innerHTML = '$' + myObj.price[slideIndex] + '.00';
      } else {
        document.getElementById("price").innerHTML = '$' + myObj.price[slideIndex];
        document.getElementById("dprice").innerHTML = '$' + myObj.dprice[slideIndex];
      }
      //check for null and integer to display discounted price
      if (!myObj.dprice[slideIndex]) {
        document.getElementById("dprice").innerHTML = '';
      } else if (Number.isSafeInteger(myObj.dprice[slideIndex])) {
        document.getElementById("dprice").innerHTML = '$' + myObj.dprice[slideIndex] + '.00';
      } else {
        document.getElementById("dprice").innerHTML = '$' + myObj.dprice[slideIndex];
      }

      document.getElementById("dprice").innerHTML = n + ' ' + slideIndex;
    }
  };

  xmlhttp.open("GET", "sidebar_data.php", true);
  xmlhttp.send();
}

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
  //n = n - 1;
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200){
      var myObj = JSON.parse(this.responseText);

      document.getElementById("title").innerHTML = myObj.art_title[n];
      document.getElementById("type").innerHTML = myObj.art_type[n];
      if (!myObj.psy[n]) {
        document.getElementById("artist").innerHTML = myObj.fn[n] + ' ' + myObj.ln[n];
      } else {
        document.getElementById("artist").innerHTML = myObj.psy[n];
      }
      document.getElementById("price").innerHTML = myObj.price[n];
      document.getElementById("dprice").innerHTML = myObj.dprice[n];
    }
  };

  xmlhttp.open("GET", "sidebar_data.php", true);
  xmlhttp.send();
}

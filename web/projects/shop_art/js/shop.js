//https://www.w3schools.com/howto/tryit.asp?filename=tryhow_html_include_2
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
}

/*REGEX*/
function valName() {
  var feild = document.getElementById("fname");
  var regex;
  var error = document.getElementById("errName");
}

function valEmail () {
  var feild = document.getElementById("email");
  var regex;
  var error = document.getElementById("errEmail");
}


function valAdr () {
  var feild = document.getElementById("adr");
  var regex;
  var error = document.getElementById("errAdr");
}

function valCity () {
  var feild = document.getElementById("city");
  var regex;
  var error = document.getElementById("errCity");
}

function valState () {
  var feild = document.getElementById("state");
  var regex;
  var error = document.getElementById("errState");
}

function valZip () {
  var feild = document.getElementById("zip");
  var regex;
  var error = document.getElementById("errZip");
}

function valCname() {
  var feild = document.getElementById("cname");
  var regex;
  var error = document.getElementById("errCname");
}

function valCnn () {
  var feild = document.getElementById("ccnum");
  var regex;
  var error = document.getElementById("errCnn");
}

function valMonth () {
  var feild = document.getElementById("expmonth");
  var regex;
  var error = document.getElementById("errEmonth");
}

function valYear () {
  var feild = document.getElementById("expyear");
  var regex;
  var error = document.getElementById("errEyear");
}

function valCvv () {
  var feild = document.getElementById("cvv");
  var regex;
  var error = document.getElementById("errCvv");
}

function valCheck() {

}

function validate() {
  var check = document.getElementsByClassName("error-message");
  var valide = true;
  /*foreach(check as c){
    if (c.style.display != 'none') {
      check = false;
    }
  }*/
  if (valide) {
    document.location.href = "checkout.php?p=purchase";
  }
}
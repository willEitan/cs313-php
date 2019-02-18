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
  var field = document.getElementById("fname");
  var regex = /(\s?\D{2, 45}\s{1}\D{2, 45}\s?)|(\s?\D{2, 45}\s{1}\D{2, 45}\s{1}((\D{2, 45}\s{1})|(\D{2, 45}))*)/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errName").innerHTML = error;
    document.getElementById("errName").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid Name";
    document.getElementById("errName").innerHTML = error;
    document.getElementById("errName").style.display = inline;
  } else {
    document.getElementById("errName").innerHTML = error;
    document.getElementById("errName").style.display = none;
  }
}

function valEmail () {
  var field = document.getElementById("email");
  var regex;
  var error = document.getElementById("errEmail");
}


function valAdr () {
  var field = document.getElementById("adr");
  var regex;
  var error = document.getElementById("errAdr");
}

function valCity () {
  var field = document.getElementById("city");
  var regex;
  var error = document.getElementById("errCity");
}

function valState () {
  var field = document.getElementById("state");
  var regex;
  var error = document.getElementById("errState");
}

function valZip () {
  var field = document.getElementById("zip");
  var regex;
  var error = document.getElementById("errZip");
}

function valCname() {
  var field = document.getElementById("cname");
  var regex;
  var error = document.getElementById("errCname");
}

function valCnn () {
  var field = document.getElementById("ccnum");
  var regex;
  var error = document.getElementById("errCnn");
}

function valMonth () {
  var field = document.getElementById("expmonth");
  var regex;
  var error = document.getElementById("errEmonth");
}

function valYear () {
  var field = document.getElementById("expyear");
  var regex;
  var error = document.getElementById("errEyear");
}

function valCvv () {
  var field = document.getElementById("cvv");
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
  } else {
    alert("Form invalid. Needed corrections are indicated in red");
  }
}
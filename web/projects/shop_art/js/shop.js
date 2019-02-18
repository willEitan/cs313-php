//code curtosy: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_html_include_2
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
  var regex = /\w*\@\w*\.[a-z]{3}/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errEmail").innerHTML = error;
    document.getElementById("errEmail").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid Email address";
    document.getElementById("errEmail").innerHTML = error;
    document.getElementById("errEmail").style.display = inline;
  } else {
    document.getElementById("errEmail").innerHTML = error;
    document.getElementById("errEmail").style.display = none;
  }
}


function valAdr () {
  var field = document.getElementById("adr");
  var regex = /\d*\s{1}(\w*\#?\s?)*/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errAdr").innerHTML = error;
    document.getElementById("errAdr").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid Address";
    document.getElementById("errAdr").innerHTML = error;
    document.getElementById("errAdr").style.display = inline;
  } else {
    document.getElementById("errAdr").innerHTML = error;
    document.getElementById("errAdr").style.display = none;
  }
}

function valCity () {
  var field = document.getElementById("city");
  var regex = /([A-Za-z]*\s?)*/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errCity").innerHTML = error;
    document.getElementById("errCity").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid City name";
    document.getElementById("errCity").innerHTML = error;
    document.getElementById("errCity").style.display = inline;
  } else {
    document.getElementById("errCity").innerHTML = error;
    document.getElementById("errCity").style.display = none;
  }
}

function valState () {
  var field = document.getElementById("state");
  var regex = /[A-Z]{2}\s?/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errState").innerHTML = error;
    document.getElementById("errState").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid State must be 2 charecters";
    document.getElementById("errState").innerHTML = error;
    document.getElementById("errState").style.display = inline;
  } else {
    document.getElementById("errState").innerHTML = error;
    document.getElementById("errState").style.display = none;
  }
}

function valZip () {
  var field = document.getElementById("zip");
  var regex = /\b[0-9]{5}(?:-[0-9]{4})?\b/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errZip").innerHTML = error;
    document.getElementById("errZip").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid Postal Code";
    document.getElementById("errZip").innerHTML = error;
    document.getElementById("errZip").style.display = inline;
  } else {
    document.getElementById("errZip").innerHTML = error;
    document.getElementById("errZip").style.display = none;
  }
}

function valCname() {
  var field = document.getElementById("cname");
  var regex = /(\s?\D{2, 45}\s{1}\D{2, 45}\s?)|(\s?\D{2, 45}\s{1}\D{2, 45}\s{1}((\D{2, 45}\s{1})|(\D{2, 45}))*)/;;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errCname").innerHTML = error;
    document.getElementById("errCname").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid Name";
    document.getElementById("errCname").innerHTML = error;
    document.getElementById("errCname").style.display = inline;
  } else {
    document.getElementById("errCname").innerHTML = error;
    document.getElementById("errCname").style.display = none;
  }
}

function valCcn () {
  var field = document.getElementById("ccnum");
  /*code curtosy: https://stackoverflow.com/questions/9315647/regex-credit-card-number-tests*/
  var regex = /^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errCnn").innerHTML = error;
    document.getElementById("errCnn").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid Credit Card Number";
    document.getElementById("errCnn").innerHTML = error;
    document.getElementById("errCnn").style.display = inline;
  } else {
    document.getElementById("errCnn").innerHTML = error;
    document.getElementById("errCnn").style.display = none;
  }
}

function valMonth () {
  var field = document.getElementById("expmonth");
  var regex = /[A-Z]{1}?[a-z]{3,9}\s?/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errEmonth").innerHTML = error;
    document.getElementById("errEmonth").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid Month";
    document.getElementById("errEmonth").innerHTML = error;
    document.getElementById("errEmonth").style.display = inline;
  } else {
    document.getElementById("errEmonth").innerHTML = error;
    document.getElementById("errEmonth").style.display = none;
  }
}

function valYear () {
  var field = document.getElementById("expyear");
  var regex = /\d{2}|\d{4}\s?/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errEyear").innerHTML = error;
    document.getElementById("errEyear").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid Year";
    document.getElementById("errEyear").innerHTML = error;
    document.getElementById("errEyear").style.display = inline;
  } else {
    document.getElementById("errEyear").innerHTML = error;
    document.getElementById("errEyear").style.display = none;
  }
}

function valCvv () {
  var field = document.getElementById("cvv");
  var regex = /\d{3}\s?/;
  var error = "Invalid input";
  if (field == NULL) {
    error = "Must Complete"
    document.getElementById("errCvv").innerHTML = error;
    document.getElementById("errCvv").style.display = inline;
  } else if (!regex.test(field)) {
    error = "Invalid CVV number must be 3 digits";
    document.getElementById("errCvv").innerHTML = error;
    document.getElementById("errCvv").style.display = inline;
  } else {
    document.getElementById("errCvv").innerHTML = error;
    document.getElementById("errCvv").style.display = none;
  }
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
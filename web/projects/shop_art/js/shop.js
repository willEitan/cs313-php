//code curtosy: https://www.w3schools.com/howto/eryit.asp?filename=eryhow_html_include_2
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain aerribute:*/
    file = elmnt.getAttribute("include-html");
    if (file) {
      /*make an HTTP request using the ateribute value as the file name:*/
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
  const field = document.getElementById("fname").value;
  const regex = /^([a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+\s[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+\s?)+$/u;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errName").innerHTML = error;
    document.getElementById("errName").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid Name";
    document.getElementById("errName").innerHTML = error;
    document.getElementById("errName").style.display = 'inline';
  } else {
    document.getElementById("errName").innerHTML = error;
    document.getElementById("errName").style.display = 'none';
  }
}

function valEmail () {
  const field = document.getElementById("email").value;
  const regex = /\w*\@\w*\.[a-z]{3}/;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errEmail").innerHTML = error;
    document.getElementById("errEmail").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid Email address";
    document.getElementById("errEmail").innerHTML = error;
    document.getElementById("errEmail").style.display = 'inline';
  } else {
    document.getElementById("errEmail").innerHTML = error;
    document.getElementById("errEmail").style.display = 'none';
  }
}


function valAdr () {
  const field = document.getElementById("adr").value;
  const regex = /\d*\s{1}(\w*\#?\s?)*/;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errAdr").innerHTML = error;
    document.getElementById("errAdr").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid Address";
    document.getElementById("errAdr").innerHTML = error;
    document.getElementById("errAdr").style.display = 'inline';
  } else {
    document.getElementById("errAdr").innerHTML = error;
    document.getElementById("errAdr").style.display = 'none';
  }
}

function valCity () {
  const field = document.getElementById("city").value;
  const regex = /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errCity").innerHTML = error;
    document.getElementById("errCity").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid City name";
    document.getElementById("errCity").innerHTML = error;
    document.getElementById("errCity").style.display = 'inline';
  } else {
    document.getElementById("errCity").innerHTML = error;
    document.getElementById("errCity").style.display = 'none';
  }
}

function valState () {
  const field = document.getElementById("state").value;
  const regex = /[A-Z]{2}\s?/;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errState").innerHTML = error;
    document.getElementById("errState").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid State must be 2 charecters";
    document.getElementById("errState").innerHTML = error;
    document.getElementById("errState").style.display = 'inline';
  } else {
    document.getElementById("errState").innerHTML = error;
    document.getElementById("errState").style.display = 'none';
  }
}

function valZip () {
  const field = document.getElementById("zip").value;
  const regex = /\b[0-9]{5}(?:-[0-9]{4})?\b/;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errZip").innerHTML = error;
    document.getElementById("errZip").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid Postal Code";
    document.getElementById("errZip").innerHTML = error;
    document.getElementById("errZip").style.display = 'inline';
  } else {
    document.getElementById("errZip").innerHTML = error;
    document.getElementById("errZip").style.display = 'none';
  }
}

function valCname() {
  const field = document.getElementById("cname").value;
  const regex = /^([a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+\s[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+\s?)+$/u;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errCname").innerHTML = error;
    document.getElementById("errCname").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid Name";
    document.getElementById("errCname").innerHTML = error;
    document.getElementById("errCname").style.display = 'inline';
  } else {
    document.getElementById("errCname").innerHTML = error;
    document.getElementById("errCname").style.display = 'none';
  }
}

function valCcn () {
  const field = document.getElementById("ccnum").value;
  var parsed_field = field.replace(/-/g, '');
  
  /*code curtosy: https://stackoverflow.com/questions/9315647/regex-credit-card-number-tests*/
  const regex = /^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
  let error = "Invalid input";
  if (!parsed_field) {
    error = "Must Complete"
    document.getElementById("errCcn").innerHTML = error;
    document.getElementById("errCcn").style.display = 'inline';
  } else if (!regex.test(parsed_field)) {
    error = "Invalid Credit Card Number";
    document.getElementById("errCcn").innerHTML = error;
    document.getElementById("errCcn").style.display = 'inline';
  } else {
    document.getElementById("errCcn").innerHTML = error;
    document.getElementById("errCcn").style.display = 'none';
  }

  if (parsed_field.length == 16) {
    var dash = '-';
    document.getElementById("ccnum").value = parsed_field.slice(0, 4) + dash + parsed_field.slice(4, 8) + dash + parsed_field.slice(8, 12) + dash + parsed_field.slice(12, 16);
  }  
}

function valMonth () {
  const field = document.getElementById("expmonth").value;
  const regex = /(([A-Z]{1})?[a-z]{3,9}\s?)|^(0?[1-9]|1[012])$/;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errEmonth").innerHTML = error;
    document.getElementById("errEmonth").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid Month may be name or 2 digit number";
    document.getElementById("errEmonth").innerHTML = error;
    document.getElementById("errEmonth").style.display = 'inline';
  } else {
    document.getElementById("errEmonth").innerHTML = error;
    document.getElementById("errEmonth").style.display = 'none';
  }
}

function valYear () {
  const field = document.getElementById("expyear").value;
  const regex = /\d{2}|\d{4}\s?/;
  let error = "Invalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errEyear").innerHTML = error;
    document.getElementById("errEyear").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid Year";
    document.getElementById("errEyear").innerHTML = error;
    document.getElementById("errEyear").style.display = 'inline';
  } else {
    document.getElementById("errEyear").innerHTML = error;
    document.getElementById("errEyear").style.display = 'none';
  }
}

function valCvv () {
  const field = document.getElementById("cvv").value;
  const regex = /\d{3}\s?/;
  let error = "Invlalid input";
  if (!field) {
    error = "Must Complete"
    document.getElementById("errCvv").innerHTML = error;
    document.getElementById("errCvv").style.display = 'inline';
  } else if (!regex.test(field)) {
    error = "Invalid CVV number must be 3 digits";
    document.getElementById("errCvv").innerHTML = error;
    document.getElementById("errCvv").style.display = 'inline';
  } else {
    document.getElementById("errCvv").innerHTML = error;
    document.getElementById("errCvv").style.display = 'none';
  }
}

function valCheck() {
  const field = document.getElementById("address_check").checked;
  let error = "Invalid";
  if (!field) {
    error = "Must be Checked";
    document.getElementById("errCheck").innerHTML = error;
    document.getElementById("errCheck").style.display = 'inline';
  } else {
    error = "";
    document.getElementById("errCheck").innerHTML = error;
    document.getElementById("errCheck").style.display = 'none';
  }
}

function validate() {
  //run all val functions. This ensures user did not skip any inputs 
  valName();
  valEmail();
  valAdr();
  valCity();
  valState();
  valZip();
  valCname();
  valCcn();
  valMonth();
  valYear();
  valCvv();
  valCheck();

  //complete final validation and redirect or alert
  var check = document.getElementsByClassName("error-message");
  var valide = true;
  zero_cart = document.getElementById("item-error");
  for(var i = 0; i < check.length; i++){
    if (check[i].style.display !== 'none') {
      console.log(check[i]);
      valide = false;
    }
  }
  
  if (zero_cart) {
    if (zero_cart.style.display !== 'none') {
    alert("You must add artwork to your cart before checkout!");
    } 
  } else if (!valide) {
    alert("Form invalid. Needed corrections are indicated in red");
  }

  return valide;
}

//functions specific to request form
function valArt(){
  const field = document.getElementById("art-name").value;
  const regex = /^([a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]\s?)+$/u;
  let error = "Invalid Input";
  if (!field) {
    error = "Required";
    document.getElementById("errAName").innerHTML = error;
    document.getElementById("errAName").style.display = 'inline';
  } else if (!regex.test(field)){
    error = "Required";
    document.getElementById("errAName").innerHTML = error;
    document.getElementById("errAName").style.display = 'inline';
  } else {  
    error = "";
    document.getElementById("errAName").innerHTML = error;
    document.getElementById("errAName").style.display = 'none';
  }
}

function valArtist() {
  const field = document.getElementById("artist").value;
  let error = "Invalid";
  if (!field) {
    error = "Must Select";
    document.getElementById("errArtist").innerHTML = error;
    document.getElementById("errArtist").style.display = 'inline';
  } else {
    error = "";
    document.getElementById("errArtist").innerHTML = error;
    document.getElementById("errArtist").style.display = 'none';
  }
}

function valType() {
  const field = document.getElementById("type").value;
  let error = "Invalid";
  if (!field) {
    error = "Must Select";
    document.getElementById("errType").innerHTML = error;
    document.getElementById("errType").style.display = 'inline';
  } else {
    error = "";
    document.getElementById("errType").innerHTML = error;
    document.getElementById("errType").style.display = 'none';
  }
}

function valDesc() {
  const field = document.getElementById("request-description").value;
  let error = "Invalid Input";
  if (!field) {
    error = "Must provide";
    document.getElementById("errDesc").innerHTML = error;
    document.getElementById("errDesc").style.display = 'inline';
  } else {
    error = "";
    document.getElementById("errDesc").innerHTML = error;
    document.getElementById("errDesc").style.display = 'none';
  }
}

function valLegal() {
  const field = document.getElementById("legal").checked;
  let error = "Invalid";
  if (!field) {
    error = "Must be Checked";
    document.getElementById("errLegal").innerHTML = error;
    document.getElementById("errLegal").style.display = 'inline';
  } else {
    error = "";
    document.getElementById("errLegal").innerHTML = error;
    document.getElementById("errLegal").style.display = 'none';
  }
}

function valFee() {
  const field = document.getElementById("address_check").checked;
  let error = "Invalid";
  if (!field) {
    error = "Must be Checked";
    document.getElementById("errFee").innerHTML = error;
    document.getElementById("errFee").style.display = 'inline';
  } else {
    error = "";
    document.getElementById("errFee").innerHTML = error;
    document.getElementById("errFee").style.display = 'none';
  }
}

//final validation
function valRequest() {
  valName();
  valEmail();
  valAdr();
  valCity();
  valState();
  valZip();
  valCname();
  valCcn();
  valMonth();
  valYear();
  valCvv();
  valArt();
  valArtist();
  valType();
  valDesc();
  valCheck();
  valLegal();
  valFee();

  //complete final validation and redirect or alert
  var check = document.getElementsByClassName("error-message");
  var valide = true;
  
  for(var i = 0; i < check.length; i++){
    if (check[i].style.display !== 'none') {
      console.log(check[i]);
      valide = false;
    }
  }
  
  if (!valide) {
    alert("Form invalid. Needed corrections are indicated in red");
  }

  return valide;
}
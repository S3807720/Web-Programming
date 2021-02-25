/* https://www.w3schools.com/howto/howto_js_mobile_navbar.asp */
function myFunction() {
  var x = document.getElementById("navLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
// https://medium.com/dev-genius/how-to-make-javascript-sleep-or-wait-d95d33c99909
const sleepNow = (delay) => new Promise((resolve) => setTimeout(resolve, delay))

// using the above function i've made a toggle for the
// letters and postcards
async function togglePage(idName, type) {
  var y, b, backgroundNo;
  for (var i = 1; 4 > i; i++){
    let x = type + i;
    if (x == idName) {
      y = document.getElementById(x);
    }
    b = document.getElementById(x);
    b.style.display = "none";
  }

  if (type == "card") {
    backgroundNo = Math.floor(Math.random() * 3);
    /* random background img for post cards */
    if (backgroundNo == 1) {
      document.getElementById('post-card-front').style.backgroundImage="url(../../media/postcard2.png)";
    }
    else if (backgroundNo == 2) {
      document.getElementById('post-card-front').style.backgroundImage="url(../../media/postcard3.png)";
    }
    else if (backgroundNo == 0) {
      document.getElementById('post-card-front').style.backgroundImage="url(../../media/postcard.png)";
    }
  }

  //slowly fade in, without using jquery
  y.style.display = "block";
  y.style.opacity = "45%";
  await sleepNow(50);
  y.style.opacity = "75%";
  await sleepNow(25);
  y.style.opacity = "100%";
}

/* make font more readable */
function toggleFont() {
  var x = document.querySelectorAll(".letter p, .post-card p");
  var i;
  for (i = 0; i < x.length; i++ ) {
    if (x[i].style.fontFamily == "Mumsies") {
      x[i].style.fontFamily = "Times New Roman";
    }
    else {
      x[i].style.fontFamily = "Mumsies";
    }
  }
}

function toggleWireframe() {

  // get references to styleshets with preset id attributes
  let wfs = document.getElementById("wireframecss");
  let sts = document.getElementById("stylecss");

  // toggle disabled state of wireframe stylesheet
  wfs.disabled = !wfs.disabled;

  // set main stylesheet disabled state to be opposite of wireframe stylesheet
  sts.disabled = !wfs.disabled;

  // repeat above code for other stylesheets you want to toggle
}

function validateName(name) {
  //pattern for any western name
  var patt = /^(\s)*[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*(\s)*$/;
  //set error to blank if input is ok
  if (patt.test(name.value)) {
    document.getElementById('errorName').innerHTML = "";
    return true;
  }
  //otherwise set invalid error
  else {
    document.getElementById('errorName').innerHTML = "Invalid name.";
    return false;
  }
}
//same here, but for ph numbers
function validateNum(num) {
  var patt = /^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})*$/;
  if (patt.test(num.value)) {
    document.getElementById('errorNum').innerHTML = "";
    return true;
  }
  else {
    document.getElementById('errorNum').innerHTML = "Invalid number. Must be of format '02 1234 5678'.";
    return false;
  }
}

//check if field is empty and set error for that field
var form = document.getElementById('contact');
form.addEventListener('submit',validateEmptyFields);

function validateEmptyFields() {
  if (validateName(document.form.name.value) == false) {
    event.preventDefault();
  }
  if( document.form.name.value == "" ) {
    document.getElementById('errorName').innerHTML = "Name cannot be empty.";
    event.preventDefault();
  }
  if( document.form.email.value == "" ) {
    document.getElementById('errorEm').innerHTML = "Email cannot be empty.";
    event.preventDefault();
  }
  if( document.form.subject.value == "") {
    document.getElementById('errorSub').innerHTML = "Subject cannot be empty.";
    event.preventDefault();
  }
  if( document.form.message.value == "" ) {
    document.getElementById('errorMsg').innerHTML = "Message cannot be empty.";
    event.preventDefault();
  }
  if (document.form.number.value != "") {
    if (validateNum(document.form.number.value) == false) {
      event.preventDefault();
    }
  }
}

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
async function togglePage(idName) {
  var y, b;
  for (var i = 1; 4 > i; i++){
    let x = 'page' + i;
    if (x == idName) {
      y = document.getElementById(x);
    }
    b = document.getElementById(x);
    b.style.display = "none";
  }
  //slowly fade in, without using jquery
  y.style.display = "inline-block";
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

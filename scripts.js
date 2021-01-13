/* https://www.w3schools.com/howto/howto_js_mobile_navbar.asp */
function myFunction() {
  var x = document.getElementById("navLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}function toggleWireframe() {

  // get references to styleshets with preset id attributes
  let wfs = document.getElementById("wireframecss");
  let sts = document.getElementById("stylecss");

  // toggle disabled state of wireframe stylesheet
  wfs.disabled = !wfs.disabled;

  // set main stylesheet disabled state to be opposite of wireframe stylesheet
  sts.disabled = !wfs.disabled;

  // repeat above code for other stylesheets you want to toggle
}

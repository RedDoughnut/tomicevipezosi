function showToast(s) {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
  x.innerText = s;
  x.className = "show";
  
  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
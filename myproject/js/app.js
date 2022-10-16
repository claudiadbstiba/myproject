function myFunction() {
  var x = document.getElementById("my_top_nav");
  if (x.className === "top__nav") {
    x.className += " responsive";
  } else {
    x.className = "top__nav";
  }
}
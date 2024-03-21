function openNav() {
    document.getElementById("nav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("nav").style.width = "0";
  }

  // accordian Menu 
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
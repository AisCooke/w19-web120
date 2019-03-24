$(function(){
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
});

$(window).on("scroll", function() {
  if($(window).scrollTop() > 200) {
    navbar.classList.add("active")
  } else {
    navbar.classList.remove("active");
  }
});

$(window).on("scroll", function() {
if($(window).scrollTop() > 180) {
  navbar.classList.add("active-mobile")
} else {
  navbar.classList.remove("active-mobile");
}
});
function myResponsive() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}



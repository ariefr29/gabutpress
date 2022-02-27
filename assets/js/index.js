// Menu Responsive
const menuMobile = document.querySelector("#menu-responsive");
const bgMenu = document.getElementById("bg-menu");
function menux(){
  bgMenu.classList.toggle("hidden");
  document.getElementById("menu").classList.toggle("translate-x-0");
  document.querySelector("body").classList.toggle("overflow-hidden");
}

menuMobile.addEventListener("click", menux);
bgMenu.addEventListener("click", menux);

// sercing
const btnSercing = document.querySelector(".btn-sercing");
btnSercing.addEventListener("click", function () {
  document.querySelector(".box-sercing").classList.toggle("show");
});
document.querySelector("#x").addEventListener("click", function () {
  document.querySelector(".box-sercing").classList.toggle("show");
});

// toggle Komentar
if(document.querySelector("#show-comment")){
  const btnKomen = document.querySelector("#show-comment");
  const boxKomen = document.querySelector(".komen");
  btnKomen.addEventListener("click", function () {
    btnKomen.remove();
    boxKomen.classList.remove("hidden")
  })
}



// autoHighlight untuk <code> tidak terinisial language 
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('pre code').forEach((el) => {
    Prism.highlightElement(el);
  });

  document.querySelectorAll('code').forEach((el) => {
    Prism.highlightElement(el);
  });
});


// Hide Scroll Bottom
let prevScrollpos = window.pageYOffset;
function hideScroll() {
const currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    if (window.pageYOffset > document.querySelector("main").offsetTop) {
      document.querySelector(".navbar").style.cssText = "position:sticky;";
    } else {
      document.querySelector(".navbar").removeAttribute("style");   
    }
  } else {
    document.querySelector(".navbar").style.top = "-75px";
  }
  prevScrollpos = currentScrollPos;
}

window.onscroll = function() {
  hideScroll();
}
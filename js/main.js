d=document;w=window;c=console;
const detector   = d.querySelector('#detector');
const headerMenu = d.querySelector('#headerMenu');
const headerSocl = d.querySelector('#headerSocial');
const spaceLaura = d.querySelector('#espacioLaura');
const headerLogo = d.querySelector('#isoLogo');
const headerNavB = d.querySelector('#navBar');
const lupa = d.querySelector('#lupa');


w.onload=()=>{
  // REMOVE LOADER ANIMATION
  // d.getElementById("load").style.top="-100vh";
  // d.getElementById("load").classList.add("loaded");
  d.getElementById("header").classList.remove("loading");
}



const options = {
  root: null, // it is the viewport, that's the default
  threshold: 1, // that's the default
  rootMargin: "32px 0px 0px 0px" // that's the default
};

const observer = new IntersectionObserver(function(entries, observer){
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      headerMenu.classList.add("inactive");
      headerSocl.classList.add("inactive");
      spaceLaura.classList.add("inactive");
      headerLogo.classList.add("inactive");
      headerNavB.classList.add("inactive");
      lupa.classList.add("inactive");
    } else {
      headerSocl.classList.remove("inactive");
      spaceLaura.classList.remove("inactive");
      headerMenu.classList.remove("inactive");
      headerLogo.classList.remove("inactive");
      headerNavB.classList.remove("inactive");
      lupa.classList.remove("inactive");
    }
    // c.log(entry);
    // c.log(entry.target);
  })
}, options);

const observer2 = new IntersectionObserver(function(entries, observer2){
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      c.log(entry.target)
      entry.target.querySelector(".firstLetter").style.marginLeft = "0";
      entry.target.querySelector(".firstLetter").style.opacity = "1";


      entry.target.querySelector(".secondLetter").style.marginRight = "0";
      entry.target.querySelector(".secondLetter").style.opacity = "1";
      c.log("activate!");
      observer2.unobserve(entry.target);
    }
  })
}, options);

// observer.observe(detector);
d.querySelectorAll('.sectionMarker').forEach(e => {
  observer2.observe(e);
})




// NAVBAR HANDLER
const alternateNavBar=()=>{
  const navBar=d.querySelector("#header");
  if(navBar.classList.contains("active")){
    navBar.classList.remove("active")
  }else{
    navBar.classList.add("active")
  }
}






// SLIDER:
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slide");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    // x[i].style.display = "none";
    x[i].classList.add("inactive");
  }
  // x[slideIndex-1].style.display = "grid";
  x[slideIndex-1].classList.remove("inactive");
}

carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("slide");
  for (i = 0; i < x.length; i++) {
    // x[i].style.display = "none";
    x[i].classList.add("inactive");
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  // x[slideIndex-1].style.display = "block";
  x[slideIndex-1].classList.remove("inactive");
  setTimeout(carousel, 10000); // Change image every 8 seconds
}

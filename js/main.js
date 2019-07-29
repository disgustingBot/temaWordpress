d=document;w=window;c=console;
const detector = d.querySelector('#detector');
const headerMenu = d.querySelector('#headerMenu');
const isoLogo = d.querySelector('#isoLogo');


const options = {
  root: null, // it is the viewport, that's the default
  threshold: 1, // that's the default
  rootMargin: "32px 0px 0px 0px" // that's the default
};

const observer = new IntersectionObserver(function(entries, observer){
  entries.forEach(entry => {
    // if (entry.isIntersecting) {
    //   // cambios visuales
    // }
    headerMenu.classList.toggle("inactive");
    isoLogo.classList.toggle("inactive");
    // c.log(entry);
    // c.log(entry.target);
  })
}, options);

observer.observe(detector);

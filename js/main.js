d=document;w=window;c=console;
const detector = d.querySelector('#detector');
const headerMenu = d.querySelector('#headerMenu');
const headerSocl = d.querySelector('#headerSocial');
const headerLogo = d.querySelector('#isoLogo');
const headerNavB = d.querySelector('#navBar');


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
      headerLogo.classList.add("inactive");
      headerNavB.classList.add("inactive");


    } else {
      headerSocl.classList.remove("inactive");
      headerMenu.classList.remove("inactive");
      headerLogo.classList.remove("inactive");
      headerNavB.classList.remove("inactive");

    }
    // c.log(entry);
    // c.log(entry.target);
  })
}, options);

observer.observe(detector);

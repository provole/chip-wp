import "../scss/main.scss";
import "./mobileNav";
import "./banner";
import "./single-post";
import "./sliders";
import "./points";

const scrollTop = document.getElementById('scroll-top');

scrollTop.addEventListener('click', () => window.scrollTo({
  top: 0,
  behavior: 'smooth',
}));


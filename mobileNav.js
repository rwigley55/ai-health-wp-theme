const mobileButton = document.getElementById("page-nav__mobile-button");
const navList = document.querySelector(".page-nav__list");
const closeButton = document.querySelector(".page-nav__close-button");

const mobileToggle = () => {
  navList.classList.toggle("active");
  closeButton.classList.toggle("active");
};

mobileButton.addEventListener("click", mobileToggle);
closeButton.addEventListener("click", mobileToggle);

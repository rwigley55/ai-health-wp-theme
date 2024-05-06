const button = document.querySelector("#dropdown-button");
const dropdown = document.querySelector(".page-nav__dropdown");

button.addEventListener("click", () =>
  dropdown.classList.toggle("display-none")
);

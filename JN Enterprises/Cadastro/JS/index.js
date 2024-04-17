const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener("click", () => {
  //Animate Links
  navLinks.classList.toggle("open");
  links.forEach((link) => {
    link.classList.toggle("fade");
  });

  //Hamburger Animation
  hamburger.classList.toggle("toggle");
});

function userorpassword() {
  let falhaDiv = document.getElementById("divFalha");
  let falhaP = document.getElementById("pFalha");
  falhaP.innerHTML = "Usúario ou senha incorretos. Tente novamente";
  falhaDiv.style = `
        background-color: #ff00007e;
        border-radius: 5px;
        height: fit-content;
        width: 100%;
        margin: 15px 0px;
    `;
  falhaP.style = `
        padding: 10px 10px;
        font-size: 1em;
    `;
}
function userandpassword() {
  let falhaDiv = document.getElementById("divFalha");
  let falhaP = document.getElementById("pFalha");
  falhaP.innerHTML = "Usúario ou senha incorretos. Tente novamente";
  falhaDiv.style = `
        background-color: #ff00007e;
        border-radius: 5px;
        height: fit-content;
        width: 100%;
        margin: 15px 0px;
    `;
  falhaP.style = `
        padding: 10px 10px;
        font-size: 1em;
    `;
}

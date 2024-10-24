document.getElementById("burger-menu").addEventListener("click", function () {
  document.getElementById("nav-modal").style.display = "block";
});

document.getElementById("close-modal").addEventListener("click", function () {
  document.getElementById("nav-modal").style.display = "none";
});

window.addEventListener("click", function (event) {
  const modal = document.getElementById("nav-modal");
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

const navItems = document.querySelectorAll(".nav-item-link");
navItems.forEach((item) => {
  item.addEventListener("click", function () {
    document.getElementById("nav-modal").style.display = "none";
  });
});

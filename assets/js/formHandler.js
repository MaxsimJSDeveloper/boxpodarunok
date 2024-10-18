document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();

  this.reset();

  const successMessage = document.getElementById("successMessage");
  successMessage.style.display = "block";

  setTimeout(() => {
    successMessage.style.display = "none";
  }, 3000);
});

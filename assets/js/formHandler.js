document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();

  const formData = new FormData(this);

  const formObject = {};
  formData.forEach((value, key) => {
    formObject[key] = value;
  });

  console.log(formObject);

  this.reset();
});

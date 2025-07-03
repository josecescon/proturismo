function validarFormulario() {
  const senha = document.getElementById("password").value;
  const email = document.getElementById("email").value;

  if (senha === "" || email === "") {
    alert("Preencha todos os campos!");
    return false;
  }

  return true;
}

const formulario = document.querySelector("form");
formulario.addEventListener("submit", function(event) {
  if (!validarFormulario()) {
    event.preventDefault();
  }
});
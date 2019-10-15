var contrasena = document.getElementById("contrasena")
  , confirmar_contrasena = document.getElementById("confirmar_contrasena");

function validatePassword(){
  if(contrasena.value != confirmar_contrasena.value) {
    confirmar_contrasena.setCustomValidity("Contraseñas deben ser iguales para proseguir.");
  } else {
    confirmar_contrasena.setCustomValidity('');
  }
}

contrasena.onchange = validatePassword;
confirmar_contrasena.onkeyup = validatePassword;
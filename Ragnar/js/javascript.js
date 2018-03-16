//este método verifica que las contraseñas ingresadas por el usuario sean iguales y el tamaño sea superior a diez
function validatePassword() {
  var pass = document.getElementById('contrasena').value;
  var passConfirm = document.getElementById('verificacion').value;

  if (pass.length < 10) {
    alert("Error, la contraseña es muy corta");
  } else {
    if (pass != passConfirm) {
      alert('Error, las contraseñas son diferentes');
    }
  }
}

function getDateNow() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1;
  var yyyy = today.getFullYear();
  document.getElementById("fecha").val=yyyy.toString()+(mm).toString()+dd.toString();
}

getDateNow();

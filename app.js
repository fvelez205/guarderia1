/* Licenciatura en Tecnologías e Información
Diseño, desarrollo e integración de aplicaciones web
Unidad 1
Sitios web HTML5 y CSS3
Actividad 2
La construcción de un sitio web con JavaScript
Fernando Vélez Gómez   ID 219767558
Octavo Semestre
Asesora: Ana Rosa Rizo Rivas
09 Septiembre 2024 */

//El siguiente codigo lo uso para validar los campos del formulario

const userNameField = document.querySelector("[name=username]");
const emailField = document.querySelector("[name=email]");
const telefonoField = document.querySelector("[name=telefono]");
const postalField = document.querySelector("[name=postal]");

const setErrors = (message, field, isError = true) => {
  if (isError) {
    field.classList.add("invalid");
    field.nextElementSibling.classList.add("error");
    field.nextElementSibling.innerText = message;
  } else {
    field.classList.remove("invalid");
    field.nextElementSibling.classList.remove("error");
    field.nextElementSibling.innerText = "";
  }
}

const validateEmptyField = (message, e) => {
  const field = e.target;
  const fieldValue = e.target.value;
  if (fieldValue.trim().length === 0) {
    setErrors(message, field);
  } else {
    setErrors("", field, false);
  }
}

const validateEmailFormat = e => {
  const field = e.target;
  const fieldValue = e.target.value;
  const regex = new RegExp(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
  if (fieldValue.trim().length > 5 && !regex.test(fieldValue)) {
    setErrors("Please enter a valid email", field);
  } else {
    setErrors("", field, false);
  }
}

userNameField.addEventListener("blur", (e) => validateEmptyField("Olvidaste escribir tu nombre", e));
emailField.addEventListener("blur", (e) => validateEmptyField("Escribe un correo valido", e));
telefonoField.addEventListener("blur", (e) => validateEmptyField("Telefono invalido", e));
postalField.addEventListener("blur", (e) => validateEmptyField("Codigo Postal Invalido", e));

document.getElementById('mostrar').addEventListener('click', function() {
           
            let elementoActivo = document.querySelector('input[name="sexo"]:checked');
            if(elementoActivo) {
                alert(elementoActivo.value);
            } else {
                alert('No hay ninguna opcion seleccionada');
            }
        });

var checkbox = document.getElementById('test');
checkbox.addEventListener("change", validaCheckbox, false);

function validaCheckbox(){
  var checked = checkbox.checked;
  if(checked){
    alert('Has aceptado los terminos y condiciones');
  }
}

function confirmar_addPlanilla() {
    if (confirm("¿continuar?")) {
        return true;
        } else {
        return false; }
    }


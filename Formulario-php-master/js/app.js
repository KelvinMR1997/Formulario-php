
var password = document.querySelector("#pass");
var radiobuttonSI = document.getElementsByName("radio")[0];
var radiobuttonNO = document.getElementsByName("radio")[1];
var mensaje = document.querySelector(".mensaje");
var privacy = document.getElementById("acept_term");
document.getElementById("boton_registrar").setAttribute("Disabled","");
radiobuttonSI.value = "no";

var nombre1 = document.getElementById('nombre1');
var nombre2 = document.getElementById('nombre2');
var apellido1 = document.getElementById('apellido1');
var apellido2 = document.getElementById('apellido2');

console.log(nombre1);



//Habilitar boton enviar según la mayoria de edad y  terminos y condiciones
radiobuttonSI.addEventListener("click", function () {
  radiobuttonSI.value = "si";

  if (privacy.checked && radiobuttonSI.value == "si") {
    document.getElementById("boton_registrar").removeAttribute("disabled");
  } else {

    
    document.getElementById("boton_registrar").setAttribute("disabled", "");
    
  }
});

//Desabilita el boton si la opcion es NO
radiobuttonNO.addEventListener("click", function () {

    radiobuttonSI.value = "no";
    console.log(radiobuttonNO.value);
    
  if (radiobuttonNO.value == "no" && privacy.checked) {
    document.getElementById("boton_registrar").setAttribute("disabled", "");
  } else if (!privacy.checked && radiobuttonNO == "no") {
    document.getElementById("boton_registrar").setAttribute("disabled", "");
  }
});

//cuando el checkbox de los terminos cambia
privacy.addEventListener("change", function () {
    console.log(privacy.checked);
  if (privacy.checked && radiobuttonSI.value == "si") {
    document.getElementById("boton_registrar").removeAttribute("disabled");
  } else {
    document.getElementById("boton_registrar").setAttribute("disabled", "");
  }
});

// Recepcion de solo texto en los campos de texto

function mostrarResultado(input){
  console.log(input.value);
}

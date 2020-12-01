
// 1. Validación de un número entero
let numero = prompt("Ingrese un número para validarlo.");

function validarNumero(numero) {
    if(numero % 2 == 0) {
        return "El número "+numero+", ingresado es Par.<br>";
    }
    else {
      return "El número "+numero+", ingresado es Impar.<br>";
    }
  }

;
document.write(validarNumero(numero));
//console.log(result);

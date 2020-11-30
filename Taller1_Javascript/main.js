
// 1. Validación de un número entero
// let numero = prompt("Ingrese un número para validarlo.");

// let result ="";
// function validarNumero(numero) {
//     if(numero % 2 == 0) {
//         result = "El número "+numero+", ingresado es Par.";
//     }
//     else {
//       result = "El número "+numero+", ingresado es Impar.";
//     }
//   }

// validarNumero(numero);
// document.write(result);
//console.log(result);

// Mostrar los doce meses del año, dentro de un array
// let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]

// for (let i = 0; i < meses.length; i++) {
//     console.log(meses[i]);
// }

var valores = [true, 5, false, "hola", "adios", 2];

// Determinar cuales son string
let suma=0, resta=0, multiplicacion=0, division=0;
for (let i = 0; i < valores.length; i++) {
    // if (typeof valores[i] == "string") {
    //     document.write(valores[i]+", ");
    // }

    if (typeof valores[i] == "number") {
        //suma += valores[i];
        resta -= valores[i];
    }
    
}

//document.write("Suma: "+suma+"<br>");
document.write("Resta: "+resta+"<br>");





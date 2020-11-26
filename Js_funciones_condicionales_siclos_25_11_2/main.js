// let edad = prompt("Ingrese su edad");

// if(edad >= 18){
//     alert("Usted es mayor de edad.");
// }else{
//     alert("Usted es menor de edad.");
// }


// let tarjeta = true;

// if (tarjeta != true) {
//     alert("entro en la puerta");
// }else{
//     alert("No entro en la puerta");
// }

// let datos = true;
// let datos2 = false;

// if (datos === datos2) {
//     alert("entro en la puerta");
// } else {
//     alert("No entro en la puerta");
// }

// let tarjeta = "true";

// // tiene uno de las dos variables no afirmarse
// if (tarjeta !== false) {
//     alert("entro por la puerta");
// } else {
//     alert("No entro por la puerta");
// }


// let tarjeta = false;

// if (tarjeta !== false) {
//     alert("entro por la puerta");
// } else {
//     alert("No entro por la puerta");
// }

// let num = prompt("Inrgese un numero mayor que (10).");

// if (num >= 10) {
//     console.log("El numero ingresado es: "+num+ " es mayor o igual" );
// } else {
//     console.log("El numero ingresado es: {$} es mayor a 10" );
// }


// Operadores condicion AND
// let a = false;
// let b = true;

// if (a &= b) {
//     console.log(true);
// } else {
//     console.log(false);
// }

// Operadores condicion OR
// let a = false;
// let b = false;

// if (a |= b) {
//     console.log(true);
// } else {
//     console.log(false);
// }

// ****************************
// let a = false;
// let b = true;

// if (a ^= b) {
//     console.log(true);
// } else {
//     console.log(false);
// }

let edad = prompt("Ingrese su edad");

if (edad == 18) {
    alert("cumplio los 18 y es mayor de edad");
} else if(edad >= 19 && (edad <= 20)){
    alert("es mayor de edad y es menor de 20");
}else{
    alert("es menor de edad");
}


function saludar(){
    return "hola mundo";
}

alert(saludar());





var valores = [true, 5, false, "hola", "adios", 2];

// Determinar cuales son string
let a_string= "", b_boolean = "", c_numero = [];

let suma=0, resta=0, multiplicacion=0, division=0;
for (let i = 0; i < valores.length; i++) {
    if (typeof valores[i] == "string") {
        a_string += "posicion: "+i+" valor: "+valores[i]+", <br>";
    }else if(typeof valores[i] === "boolean"){
        b_boolean += "posicion: "+i+" valor: "+valores[i]+", <br>";
    }else if(typeof valores[i] === "number") {
        let resultados = [];
        resultados["posicion"] = i;
        resultados["Numero"] = valores[i];
        c_numero.push(resultados);
        
    }
    
}

function operaciones(numeros){
    let resultado ="";
    resultado += "suma "+ numeros[0]+" + "+ numeros[1]+" + "+(numeros[0] + numeros[1])+"<br>";
}

document.write(a_string,b_boolean,operaciones(c_numero));
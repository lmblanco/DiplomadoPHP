var valores = [true, 5, false, "hola", "adios", 2];

// Determinar cuales son string
let a_string= "", b_boolean = "", c_numeros = [];

let suma=0, resta=0, multiplicacion=0, division=0;

for (let i = 0; i < valores.length; i++) {
    if(typeof(valores[i])==="string"){
        a_string += "Posicion : "+i+ " Valor :"+valores[i]+"<br>";
    }else if(typeof(valores[i])==="boolean"){
        b_boolean += "Posicion : "+i+ " Valor :"+valores[i]+"<br>";
    }else if(typeof(valores[i])==="number"){
        let resultados = [];
        resultados["Posicion"] = i;
        resultados["Numero"] = valores[i];
        c_numeros.push(resultados);
 }
     
 }
 
 function operaciones(numeros){
 let resultados = "";
 resultados += "Posicion: "+numeros[0]["Posicion"]+" Valor : "+numeros[0]["Numero"]+"<br>Posicion : " +numeros[1]["Posicion"]+" Valor : "+numeros[1]["Numero"]+ "<br><br> <b>OPERACIONES: </b><br> Suma  "+numeros[0]["Numero"]+" + "+numeros[1]["Numero"]+" = "+(numeros[0]["Numero"] + numeros[1]["Numero"])+" <br>";
 resultados += "Resta "+numeros[0]["Numero"]+" - "+numeros[1]["Numero"]+" = "+(numeros[0]["Numero"] - numeros[1]["Numero"])+"<br>";
 resultados += "Multiplicacion "+numeros[0]["Numero"]+" * "+numeros[1]["Numero"]+" = "+(numeros[0]["Numero"] * numeros[1]["Numero"])+"<br>";    
 resultados += "division "+numeros[0]["Numero"]+" / "+numeros[1]["Numero"]+" = "+(numeros[0]["Numero"] / numeros[1]["Numero"])+"<br>";
 return resultados;
     
 }
 document.write(a_string,b_boolean,operaciones(c_numeros));
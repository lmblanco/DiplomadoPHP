
// fetch => comunicarnos a un servidor por medio de una URL para consumirlo
// fetch('https://jsonplaceholder.typicode.com/posts')
// .then(response1 =>{
//     return response1.json();
// }).then(response2 =>{
//     console.log(response2);
//     for(datos of response2){
//         if (datos.id === 35) {
//             console.log(datos);    
//         }
//     }
    
// })

// fotos
fetch('https://jsonplaceholder.typicode.com/photos')
.then(response1 =>{
    return response1.json();
}).then(response2 =>{
    console.log(response2);
    let cadena = "";
    for(datos of response2){
        cadena += "<img src="+datos["thumbnailUrl"]+"></img>";
            
    }
    document.write(cadena);
    
})






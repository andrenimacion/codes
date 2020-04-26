function alert(){
//METODO POST  ENVIO ARCHIVOS Y LOS RECIBO
    // let obj = new XMLHttpRequest();    
    // obj.open('POST', 'backend/data.php', true);
    // obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // obj.onreadystatechange = function(){
    //     console.log(obj.responseText);
    //     document.getElementById('title').innerHTML = obj.responseText;        
    // }
    // obj.send( 'username=PAOLILLO' );

//==========================================================
// //METODO GET PARA OBTENER DATOS DE UN ARCHIVO PHP
//==========================================================

// var ajax = new XMLHttpRequest();
// ajax.onreadystatechange = function(){
//     if(ajax.readyState == 4 && ajax.status == 200){
//         document.getElementById('title').innerHTML = ajax.responseText;        
//     }
// }
// ajax.open("GET", "backend/data.php", true);
// ajax.send();


//=========================================================================================
// //CONSUMO DE API INDEPENDIETEMENTE DEL LENGUAJE EN EL QUE ESTE DESARROLLADO EL BACKEND
//=========================================================================================

var title = document.getElementById('title');     
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }
    else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP')
    }

    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status === 200){
            var datos = JSON.parse(xmlhttp.responseText);
            console.log(datos);
            if(title.innerHTML === ""){                
            for(i in datos){
//               title.innerHTML += i + ":" + datos[i] + "<br/>";
//                 ________________________________________________
//                 DE ESTA MANERA PODEMOS ACCEDER A LOS DATOS
//                 ------------------------------------------------

                title.innerHTML += i + ":" + datos[i] + "<hr/>";
             }
            }
        }
    }

    xmlhttp.open("GET", "https://ecuapirest.firebaseio.com/0.json", true);
    xmlhttp.send();

}
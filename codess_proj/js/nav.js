function searching(usuarioIngresados) {

    var title = document.getElementById('title');
    var reqXml;

    if (window.XMLHttpRequest) {
        reqXml = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP')
    }

    if (usuarioIngresados.length === 0) {
        resultado.innerHTML = "";
    } else {
        reqXml.onreadystatechange = function() {

            if (reqXml.readyState === 4 && reqXml.status === 200) {
                var datos = JSON.parse(reqXml.responseText);
                var x = encontrarPersona(datos, usuarioIngresados)
                var mensaje = (x === true) ? "<span class='text-success icon-emo-happy'>Si fue encontrado<span>" :
                    "<span class='text-danger icon-emo-unhappy'>No fue encontrado</span>";
                // title.innerHTML = mensaje;
            }

        }
        reqXml.open("GET", "js/nombres.json", true);
        reqXml.send();
    }

}

function encontrarPersona(objJson, usuario) {
    var arreglo = [];
    for (var i in objJson) {
        var persona = objJson[i];
        arreglo.push(persona.Nombre);
    }
    return arreglo.indexOf(usuario) > -1;
}
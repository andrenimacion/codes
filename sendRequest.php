<?php

include "cn.php";

/*RECEPCION DE DATOS*/
$emailSend                                      =       $_REQUEST['emailSend'];          /*1 | emailSend*/
$nameUser                                    =       $_REQUEST['nameUser'];            /*2 | nameUser*/
$emprendimiento                                      =       $_REQUEST['emprendimiento'];             /*3 | emprendimiento*/

//y este me pasa el 64 bits
// $imageA =       addslashes(file_get_contents($_FILES['inpFile'] ['tmp_name']));         /*5 | ImagenA*/
// $imageB =       addslashes(file_get_contents($_FILES['inpFile2']['tmp_name']));         /*6 | ImagenB*/
$celular                                       =       $_REQUEST['celular'];          /*7 | celular*/

           

function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
}      


// SALIDA DE COMPROBACIÓN DE DATOS [PARA VERIFICAR SI SE ESTÁN PASANDO LOS DATOS CORRECTAMENTE SOLO DEBE DESMARCARLOS]
// echo $userName_n."<br/><hr>";
// echo $password_n."<br/><hr>";
// echo $rpassword_n."<br/><hr>";
// echo $email_n."<br/><hr>";
// echo $telefono_n."<br/><hr>";
// echo $direccion_n."<br/><hr>";
// echo generarCodigo(9)."<br/><hr>";

// $imageC = addslashes(file_get_contents($_FILES['inpFile3']['tmp_name']));
// ImagenC, /*NO OLVIDARSE AGREGAR CUANDO DESBLOQUEE LA IMAGEN ====3===== OJO*/
// este me pasa el nombre
// $imagen= addslashes($_FILES['inpFile']['name']);


//FUNCION DE REEDIRECCIONAMIENTO
function redirectionPage($page){
    header($page);
}


// FUNCION DE ENVIO DE DATOS
function insertSql($emailSend,$nameUser,$emprendimiento,$celular,$tikeCliente_n, $connectBD){
    $queryInsert = mysqli_query($connectBD, "INSERT INTO normal_user (emailSend,               /*1 | emailSend*/
                                                                      nameUser,               /*2 | nameUser*/
                                                                      emprendimiento,              /*3 | rpassword_n*/

                                                                      telefono_n,               /*5 | telefono_n*/
                                                                      tikeCliente_n)              /*7 | tikeCliente_n*/
                                                                      

                                            VALUES ('$userName_n',                              /*1 | userName_n*/
                                                    '$password_n',                              /*2 | password_n*/
                                                    '$rpassword_n',                             /*3 | rpassword_n*/
\
                                                    '$celular',                              /*5 | telefono_n*/
                                                    '$tikeCliente_n')");                          /*7 | tikeCliente_n*/
}



if(isset($emailSend)  != "" || isset($nameUser) != "" || isset($emprendimiento) != ""){
    // echo "No esta vacia";
    insertSql(  $emailSend,                                                                    /*1 | userName_n*/
                $nameUser,                                                                    /*2 | password_n*/
                $emprendimiento,                                                                   /*3 | rpassword_n*/
                $celular,                                                                      /*4 | email_n*/                                                                /*5 | telefono_n*/
                generarCodigo(9),                                                               /*6 | tikeCliente_n*/                                                                /*7 | direccion_n*/                                                              
                $cn );                                                                          /*CONEXION SERVER*/

    //redirectionPage("Location:../index.php");
}

else{
    mysqli_close($cn);
    echo "Algo falto de rellenar";
}


?>
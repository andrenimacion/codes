<?php

echo "hola mundo";


    // if($objCon === true){
    //     echo "nos conectamos bien";
    // }
    // else{
    //     echo "no nos conectamos bien";
    // }	
    
    $cn = mysqli_connect('localhost', 'akalil_codes', 'Mormon2012', 'promoMama') or
    die("Problemas con la conexión");
    
    if($cn){
        echo "estamos conectados al servidor";
    }
        // server nube :: ModelWeb 
    else {
        echo "no se ha podido conectar";
    }

?>
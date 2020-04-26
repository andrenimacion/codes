<?php

$cn = mysqli_connect("localhost", "root", "", "tareasuser") ;
    if($cn){
        echo "estamos conectados al servidor";
    }
    else {
        echo "no se ha podido conectar";
    }

?>
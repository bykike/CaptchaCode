<?php

session_start( ); // Nos permite recuperar clave de la sesión

/* 

Primero cifra la clave pasada por el formulario, luego la compara con la clave ya cifrada que se ha almacenado dentro de la variable de sesión

*/

if( md5( $_POST[ 'code' ] ) != $_SESSION[ 'key' ] ) {

       echo "Has introducido un código erróneo, por favor inténtelo de nuevo!";

} else {

       echo "Lo has introducido correctamente, adelante y rock and roll...";

}

?>
<<<<<<< HEAD
<?php
$servidor= "localhost";
$usuario= "root";
$password = "";
$nombreBD= "php_BD";
$db = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($db->connect_error) {
    die("la conexi�n ha fallado: " . $db->connect_error);
}
if (!$db->set_charset("utf8")) {
    printf("Error al cargar el conjunto de caracteres utf8: %s\n", $db->error);
    exit();
} else {
    
}
=======
<?php
$servidor= "localhost";
$usuario= "root";
$password = "";
$nombreBD= "php_BD";
$db = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($db->connect_error) {
    die("la conexi�n ha fallado: " . $db->connect_error);
}
if (!$db->set_charset("utf8")) {
    printf("Error al cargar el conjunto de caracteres utf8: %s\n", $db->error);
    exit();
} else {
    
}
>>>>>>> 96794ac95740fd43aa630465a85dba8e94178386
?>

*/
<?php
header("Content-Type:application/json");
require_once("conectar.php");
require_once("models.php");

$alquilar = new Alquilar();
$body = json_decode(file_get_contents("php://input"),true);

switch($_GET["op"]){
    case "getAll":
            $datos = $alquilar->getClientes();
            echo json_encode($datos);
        break;

    case "insert":
        $datos = $alquilar->insertClientes($body["id_constructora"], $body["nombre_constructora"], $body["nit_constructora"], $body["nombre_representante"], $body["email_contacto"], $body["telefono_contacto"]);
        echo json_encode("Los datos se ingresaron correctamente");
    break;
}

?>
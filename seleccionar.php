<?php 
//(ACTUALIZAR)
header("Access-Control-Allow-Origin: *");
require_once __DIR__ . '/vendor/autoload.php';
// Crear Cliente---------------------------------------------------------------------
$client = new MongoDB\Client('mongodb+srv://TBBLuxari:DMc53jwH5CIQAryP@prueba-puntos.veb9sop.mongodb.net/?retryWrites=true&w=majority');

// Traet Base de datos---------------------------------------------------------------
$database = $client->Sesiones;
// Crear o Traer coleccion-----------------------------------------------------------
$collection2 = $database->usuariostunjas;


$CorreoUnity = $_GET['CorreoUnity'];
// Actualizar un dato ---------------------------------------------------------------
$sql = "SELECT puntos FROM $collection2 WHERE email='$CorreoUnity'";
$result = mysql_query($sql);
$value = mysql_fetch_object($result);


$filtro = db.empleados.find( { email: "Laura" } )

echo $filtro

/*
    Se actualizo o no se actualizo
*/ 
?>

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

$PuntajeUnity = $_GET['Puntos3'];
$CorreoUnity = $_GET['CorreoUnity'];
$MetaUnity = $_GET['Puntos3'];
// Actualizar un dato ---------------------------------------------------------------

$filtro = ['email' => $CorreoUnity];
$update = ['$set' => ['puntos3' => strval($PuntajeUnity)]];

$Actualizar = $collection2->updateOne($filtro,$update);

echo 'Actualizado'

/*
    Se actualizo o no se actualizo
*/ 
?>

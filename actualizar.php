<?php 
//(ACTUALIZAR)
header("Access-Control-Allow-Origin: *");
require_once __DIR__ . '/vendor/autoload.php';
// Crear Cliente---------------------------------------------------------------------
$client = new MongoDB\Client('mongodb+srv://TBBLuxari:DMc53jwH5CIQAryP@prueba-puntos.veb9sop.mongodb.net/?retryWrites=true&w=majority');

// Traet Base de datos---------------------------------------------------------------
$database = $client->Sesiones;
// Crear o Traer coleccion-----------------------------------------------------------
$collection2 = $database->UsuariosYagama;

$PuntajeUnity = $_GET['PuntajeUnity'];
$CorreoUnity = $_GET['CorreoUnity'];

// Actualizar un dato ---------------------------------------------------------------

$filtro = ['CORREO' => $CorreoUnity];
$update = ['$set' => ['PUNTAJE' => intval($PuntajeUnity)];

$Actualizar = $collection2->updateOne($filtro,$update);

echo 'Actualizado'

/*
    Se actualizo o no se actualizo
*/ 
?>




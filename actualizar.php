<?php 
//(ACTUALIZAR)
header("Access-Control-Allow-Origin: *");
require_once __DIR__ . '/vendor/autoload.php';
// Crear Cliente---------------------------------------------------------------------
$client = new MongoDB\Client('mongodb+srv://AdnTraining:DFkARIj7KUmhC4qr@adn.zbruols.mongodb.net/?retryWrites=true&w=majority');

// Traet Base de datos---------------------------------------------------------------
$database = $client->Sesion;
// Crear o Traer coleccion-----------------------------------------------------------
$collection2 = $database->Yagama;

$PuntajeUnity = $_GET['PuntajeUnity'];
$CorreoUnity = $_GET['CorreoUnity'];
$TiempoUnity = $_GET['TiempoUnity'];

// Actualizar un dato ---------------------------------------------------------------

$filtro = ['CORREO' => $CorreoUnity];
$update = ['$set' => ['PUNTAJE' => intval($PuntajeUnity) , 'INTENTO' => $TiempoUnity]];

$Actualizar = $collection2->updateOne($filtro,$update);

echo 'Actualizado'

/*
    Se actualizo o no se actualizo
*/ 
?>




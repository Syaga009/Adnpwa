<?php 
//(ACTUALIZAR)
header("Access-Control-Allow-Origin: *");
require_once __DIR__ . '/vendor/autoload.php';
// Crear Cliente---------------------------------------------------------------------
$client = new MongoDB\Client('mongodb+srv://adntraining:adntraining2023@cluster0.ihjdqt8.mongodb.net/?retryWrites=true&w=majority')
// Traet Base de datos---------------------------------------------------------------
$database = $client->Sesiones;
// Crear o Traer coleccion-----------------------------------------------------------
$collection2 = $database->usuariostunjas;

$PuntajeUnity = $_GET['Puntos1'];
$CorreoUnity = $_GET['CorreoUnity'];
// Actualizar un dato ---------------------------------------------------------------

$filtro = ['email' => $CorreoUnity];
$update = ['$set' => ['puntos1' => strval($PuntajeUnity)]];

$Actualizar = $collection2->updateOne($filtro,$update);

0

/*
    Se actualizo o no se actualizo
*/ 
?>

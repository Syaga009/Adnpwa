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

$PuntajeUnity = $_GET['PuntajeUnity'];
$CorreoUnity = $_GET['CorreoUnity'];
$MetaUnity = $_GET['MetaUnity'];
// Actualizar un dato ---------------------------------------------------------------

$filtro = ['email' => $CorreoUnity];
$update = ['$set' => ['meta' => strval($MetaUnity) ,
                     'puntos' => intval($PuntajeUnity)]];
$update1 = ['$set' => ['puntos' => intval($PuntajeUnity) ]];

$Actualizar = $collection2->updateOne($filtro,$update1);

echo 'Actualizado'

/*
    Se actualizo o no se actualizo
*/ 
?>

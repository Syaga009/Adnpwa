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


$Email = $_GET['email'];
$filtro = ['email' => $Email];
$correo = $collection2->find($filtro);

//$update = ['$set' => ['puntos9' => strval($PuntajeUnity)]];

//$Actualizar = $collection2->updateOne($filtro,$update);
//$result = $collection2->find(array(), array('projection' => array('name' => 1, '_id' => 1)));
echo 'Actualizado'

/*
    Se actualizo o no se actualizo
*/ 
?>

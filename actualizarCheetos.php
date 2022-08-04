<?php 
//(ACTUALIZAR)
require_once DIR . '/vendor/autoload.php';
// Crear Cliente---------------------------------------------------------------------
$client = new MongoDB\Client('mongodb+srv://TBBLuxari:DMc53jwH5CIQAryP@prueba-puntos.veb9sop.mongodb.net/?retryWrites=true&w=majority');

// Traet Base de datos---------------------------------------------------------------
$database = $client->Sesiones;
// Crear o Traer coleccion-----------------------------------------------------------
$collection2 = $database->UsuariosYagama;


$CorreoUnity = $_GET['CorreoUnity'];
$PuntajeUnity = $_GET['PuntajeUnity'];

// Actualizar un dato ---------------------------------------------------------------

$filtro = ['CORREO' => $CorreoUnity];
$update = ['$set' => ['PUNTAJE' => $PuntajeUnity]];
$Actualizar = $collection2->updateOne($filtro,$update);

echo 'Actualizado';


?>
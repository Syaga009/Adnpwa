<?php 
//(ACTUALIZAR)
header("Access-Control-Allow-Origin: *");
require_once __DIR__ . '/vendor/autoload.php';

myclient = pymongo.MongoClient('mongodb+srv://TBBLuxari:DMc53jwH5CIQAryP@prueba-puntos.veb9sop.mongodb.net/?retryWrites=true&w=majority')
mydb = myclient["Sesiones"]
mycol = mydb["usuariostunjas"]

myquery = { "email": "adntraining" }

mydoc = mycol.find(myquery)

for x in mydoc:
  print(x)


?>

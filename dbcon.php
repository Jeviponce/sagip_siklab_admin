<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('sagip-siklab-744b3-firebase-adminsdk-9aymr-800ee8ea06.json')
    ->withDatabaseUri('https://sagip-siklab-744b3-default-rtdb.firebaseio.com/');
    
$database = $factory->createDatabase();

?>
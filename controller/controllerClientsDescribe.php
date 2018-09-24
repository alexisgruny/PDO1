<?php
// appel le modelClients qui contient la classe database et clients
include_once 'model/modelClients.php';
//déclarationd e l'instance  clients
$clientsInstance = new clients();
//déclaration de la variable allClients qui contien l'instaciation de $clientsInstance avec la methode getAllClients
$allClients = $clientsInstance->getClientsDescribe();
?>


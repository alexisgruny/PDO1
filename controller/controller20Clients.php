<?php
include_once 'model/modelClients.php';
$clientsInstance = new clients();
$allClients = $clientsInstance->get20Clients();
?>


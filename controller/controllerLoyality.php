<?php
include_once 'model/modelClients.php';
$loyalityInstance = new clients();
$allLoyality = $loyalityInstance->getAllLoyality();
?>
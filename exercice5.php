<?php
include 'controller/controllerClientsByM.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <?php include 'view/navbar.php' ?>
        <img src="assets/yugioh.png" class="offset-3 col-md-6 mt-2"/>
        <h1 class="text-center card bg-yu ml-5 mr-5 mt-2 font-weight-bold">Liste des clients commencent par M</h1>
        <table class=" offset-md-1 col-md-10 mt-5">
            <thead class="bg-yu">
            <th class="col-md-5">Prénom</th>
            <th class="col-md-5">Nom</th>
        </thead>
        <?php foreach ($allClients as $clientByM) { ?>
            <tbody>
            <td><?= $clientByM['lastName'] ?></td>
            <td><?= $clientByM['firstName'] ?></td>
        </tbody>
    <?php } ?>
</table>
</body>
</html>


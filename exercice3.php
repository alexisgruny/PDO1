<?php
include 'controller/controller20Clients.php';
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
        <h1 class="text-center card bg-yu ml-5 mr-5 mt-2 font-weight-bold">Liste des 20 premiers clients</h1>
        <table class="offset-1 col-md-10 mt-5">
            <thead class="bg-yu">
            <th>Id</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de naissance</th>
            <th>carte</th>
            <th>numéro de carte</th>
        </thead>
        <?php foreach ($allClients as $client20) { ?>
            <tbody>
            <td><?= $client20['id'] ?></td>
            <td><?= $client20['lastName'] ?></td>
            <td><?= $client20['firstName'] ?></td>
            <td><?= $client20['birthDate'] ?></td>
            <td><?= $client20['card'] ?></td>
            <?php if ($client20['cardNumber'] == NULL) { ?>
                <td class="bg-yu"></td>
            <?php } else { ?>
                <td><?= $client20['cardNumber'] ?></td>
            <?php } ?>
        </tbody>
    <?php } ?>
</table>
</body>
</html>


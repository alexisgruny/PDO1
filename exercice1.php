<?php
include 'controller/controllerClients.php';
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
        <h1 class="text-center card bg-yu ml-5 mr-5 mt-2 font-weight-bold">Liste des clients</h1>
        <table class="offset-md-1 col-md-10 mt-5">
            <thead class="bg-yu">
            <th>Id</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de naissance</th>
            <th>carte</th>
            <th>numéro de carte</th>
        </thead>
        <?php foreach ($allClients as $client) { ?>
            <tbody>
            <td><?= $client['id'] ?></td>
            <td><?= $client['lastName'] ?></td>
            <td><?= $client['firstName'] ?></td>
            <td><?= $client['birthDate'] ?></td>
            <td><?= $client['card'] ?></td>
            <?php if ($client['cardNumber'] == NULL) { ?>
                <td class="bg-yu"></td>
            <?php } else { ?>
                <td><?= $client['cardNumber'] ?></td>
            <?php } ?>
        </tbody>
    <?php } ?>
</table>
</body>
</html>
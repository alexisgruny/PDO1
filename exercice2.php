<?php
include 'controller/controllerShowTypes.php';
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
        <h1 class="text-center card bg-yu ml-5 mr-5 mt-2 font-weight-bold">Liste des types de spectacles</h1>
        <table class="offset-md-1 col-md-10 mt-5">
            <thead class="bg-yu">
            <th>Id</th>
            <th>Genre</th>
        </thead>
        <?php foreach ($allShow as $show) { ?>
            <tbody>
            <td><?= $show['id'] ?></td>
            <td><?= $show['type'] ?></td>
        </tbody>
    <?php } ?>
</table>
</body>
</html>


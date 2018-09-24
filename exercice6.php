<?php
include 'controller/controllerShowAdd.php';
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
        <h1 class="text-center card bg-yu ml-5 mr-5 mt-2 font-weight-bold">A l'affiche </h1>
        <?php foreach ($allShow as $show) { ?>
        <div class="text-center card bg-yu mt-2 offset-3 col-md-6 mt-2">
            <h1 class="mt-3"><?= $show['title'] ?></h1>
            <h2><?= $show['performer'] ?></h2>
            <p><?= 'le ' . $show['date'] . ' démarre à ' . $show['startTime'] ?><p>
            </div>
    <?php } ?>
</table>
</body>
</html>

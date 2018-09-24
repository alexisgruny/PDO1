<?php
include 'controller/controllerClientsDescribe.php';
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
        <div class="container-fluid">
            <?php include 'view/navbar.php' ?>
            <img src="assets/yugioh.png" class="offset-3 col-md-6 mt-2"/>
            <h1 class="text-center card bg-yu ml-5 mr-5 mt-2 font-weight-bold">Liste des clients commencent par M</h1>
            <div class='row'>
                <?php foreach ($allClients as $clientDescribe) { ?>
                    <div class="col-md-3 card bg-yu mt-3 mr-5 ml-5">
                         <p><span class="font-weight-bold"> Nom : </span><?= $clientDescribe['lastName'] ?></p>
                        <p><span class="font-weight-bold"> Prénom : </span><?= $clientDescribe['firstName'] ?></p>
                        <p><span class="font-weight-bold"> Date de naissance : </span><?= $clientDescribe['birthDate'] ?></p>
                        <?php if ($clientDescribe['card'] != 0) { ?>
                            <p><span class="font-weight-bold"> Numéro de carte de fidélité : </span><?= $clientDescribe['cardNumber'] ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>



<?php

// appel le modelDatabase qui contient la classe database
require 'modelDatabase.php';

//création de la classe clients qui hérite de la classe database
class clients extends database {

//déclaration des attributs
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
    private $getAllClients;

//déclaration de la méthode getAllClient
    public function getAllClients() {
//déclare ma variable request qui contient ma requéte SQL
        $request = 'SELECT * '
                . 'FROM `clients`';
//prépare la requéte sql dans la database
        $getAllClients = $this->db->prepare($request);
// si la requéte est préparé , je l'execute
        if ($getAllClients->execute()) {
//et je retourne tout les résultat dans un tableau
            return $getAllClients->fetchAll();
        }
    }
    public function getAllLoyality() {
        $request = 'SELECT `clients`.`firstName`, `clients`.`lastName`, `cards`.`cardTypesId`, `clients`.`cardNumber` '
                . 'FROM `clients`'
                . 'INNER JOIN `cards` ON `cards`.`cardNumber` = `clients`.`cardNumber`'
                . 'HAVING `cards`.`cardTypesId` = 1';

        $getAllLoyality = $this->db->prepare($request);
        if ($getAllLoyality->execute()) {
            return $getAllLoyality->fetchAll();
        }
    }

    public function get20Clients() {
        $request = 'SELECT * '
                . 'FROM `clients`'
                . 'LIMIT 20';
        $get20Clients = $this->db->prepare($request);
        if ($get20Clients->execute()) {
            return $get20Clients->fetchAll();
        }
    }
    public function getClientsByM() {
        $request = 'SELECT `firstName`, `lastName` '
                . 'FROM `clients`'
                . 'WHERE `lastName`'
                . 'LIKE \'M%\' '
                . 'ORDER BY `lastName` ASC';
        $getClientsByM = $this->db->prepare($request);
        if ($getClientsByM->execute()) {
            return $getClientsByM->fetchAll();
        }
    }
    public function getClientsDescribe() {
        $request = 'SELECT `firstName`, `lastName`, `birthDate`, `card`, `cardNumber` '
                . 'FROM `clients`';
        $getClientsDescribe = $this->db->prepare($request);
        if ($getClientsDescribe->execute()) {
            return $getClientsDescribe->fetchAll();
        }
    }

}

?>

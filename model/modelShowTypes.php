<?php
require 'modelDatabase.php';
class show extends database {
    public $id;
    public $type;
    public function getAllShow() {
        $request = 'SELECT `id` , `type` '
                . 'FROM `showTypes`';
        $getAllShow = $this->db->prepare($request);       
        if ($getAllShow->execute()) {
            return $getAllShow->fetchAll();
        }
    }
}

?>
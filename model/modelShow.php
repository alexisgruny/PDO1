<?php
require 'modelDatabase.php';
class show extends database {
    public $id;
    public $title;
    public $performer;
    public $date;
    public $showTypesId;
    public $firstGenresId;
    public $secondGenresId;
    public $duration;
    public $startTime;
    public function getAllShow() {
        $request = 'SELECT `title` , `date`, `performer`, `startTime` '
                . 'FROM `shows`';
        $getAllShow = $this->db->prepare($request);       
        if ($getAllShow->execute()) {
            return $getAllShow->fetchAll();
        }
    }
}

?>


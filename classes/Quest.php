<?php 

include_once '../classes/User.php';

class Quest extends User {
#overraiding
    public function getName(){
        return "Quest".parent::getName();
    }
    
    public function getEmail(){
        return "Quest".parent::getEmail();
    }

}
?>
<?php 

include_once '../classes/User.php';

class Admin extends User {

    public function getName(){
        return "Admin".parent::getName();
    }
    
    public function getEmail(){
        return "Admin".parent::getEmail();
    }
}
?>
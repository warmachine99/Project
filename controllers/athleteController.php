<?php

require('../models/athleteModel.php');

function selectAllAthletes_controller(){
    // create an instance of the admin class
    $admin_instance = new athlete();
    // call the method from the class
    return $admin_instance->selectAllAthletes();

} 

function selectAllSports_controller(){
    // create an instance of the admin class
    $admin_instance = new athlete();
    // call the method from the class
    return $admin_instance->selectAllSports();

} 



?>
<?php

require('../models/adminModel.php');

function login_controller($email, $password){
    // create an instance of the admin class
    $admin_instance = new admin();
    // call the method from the class
    return $admin_instance->login($email, $password);

} 

function addAthlete_controller($athlete_id, $height, $weight, $doping, $person_img){
    // create an instance of the admin class
    $admin_instance = new admin();
    // call the method from the class
    return $admin_instance->addAthlete($athlete_id, $height, $weight, $doping, $person_img);

} 

function addResult_controller($judge_id, $event_type, $athlete_id, $medal_id, $position){
    // create an instance of the admin class
    $admin_instance = new admin();
    // call the method from the class
    return $admin_instance->addResult($judge_id, $event_type, $athlete_id, $medal_id, $position);

} 





?>
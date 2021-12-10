<?php

require('../models/sponsorModel.php');

function selectAllSponsors_controller(){
    // create an instance of the admin class
    $sponsor_instance = new sponsor();
    // call the method from the class
    return $sponsor_instance->selectAllSponsors();

} 

function selectOneSponsor_controller($id){
    // create an instance of the admin class
    $sponsor_instance = new sponsor();
    // call the method from the class
    return $sponsor_instance->selectOneSponsor($id);

} 

function deleteSponsors_controller($id){
    // create an instance of the admin class
    $sponsor_instance = new sponsor();
    // call the method from the class
    return $sponsor_instance->deleteSponsors($id);

} 

function updateSponsor_controller($id, $name, $email, $tel, $type){
    // create an instance of the admin class
    $sponsor_instance = new sponsor();
    // call the method from the class
    return $sponsor_instance->updateSponsor($id, $name, $email, $tel, $type);

} 


?>
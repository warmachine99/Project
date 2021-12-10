<?php
session_start();
require('../controllers/sponsorController.php');


if(isset($_POST['delete'])){
    // retrieve the ID from the form submission
    $id = $_POST['id'];

    // call the function
    $result = deleteSponsors_controller($id);
    if($result === true) header("Location: ../views/managesponsors.php");
    else echo "deletion failed";


}

if(isset($_POST['update'])){
    // retrieve the ID from the form submission
    $id = $_POST['id'];
    $name = $_POST['sponsor'];;
    $email = $_POST['email'];;
    $tel = $_POST['telephone'];;
    $type = $_POST['sponsor_type'];;

    // call the function
    $result = updateSponsor_controller($id, $name, $email, $tel, $type);
    if($result === true) header("Location: ../views/managesponsors.php");
    else echo "update failed";


}



?>
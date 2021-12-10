<?php
require('../controllers/adminController.php');
session_start();

if(isset($_POST['login'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $result = login_controller($email ,$password);

    if ($result){
        $_SESSION['Admin_ID'] = $result['Admin_ID'];
        $_SESSION['Admin_Name'] = $result['Admin_Name'];
        header("Location: ../views/admin.php");
    } else{
        echo '
        <script>
            alert("Error, Incorrect Login Credentials!");
            window.location = "../views/login.php";
        </script>';
        
    }
} 


if (isset($_POST['submitAthlete'])) {
    $athlete_id = $_POST['athleteID'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $country = $_POST['country'];
    $DOB = $_POST['DOB'];
    $doping = $_POST['doping'];
    $sport = $_POST['sport'];
    $position = $_POST['position'];
    $height= 180;
    $weight =  180;
    $person_img = $_POST['imgname'];
    $judge_id = 200011;

    if($position == "1st"){
        $medal_id = 1;
    } 
    elseif($position == "2nd"){
        $medal_id = 2;
    }
    elseif($position == "3rd"){
        $medal_id = 3;
    }

    $results = addAthlete_controller($athlete_id, $height, $weight, $doping, $person_img);

    if ($results){
       $res = addResult_controller($judge_id, $sport, $athlete_id, $medal_id, $position);
       echo $judge_id, $sport, $athlete_id, $medal_id, $position;

        if($res){
            echo "insertion successful";
            header("Location:../views/athlete.php");
        } else echo "Unable to add results";
    } else {
        echo '<script>alert("Error, unable to Add Athlete")</script>';
        header("Location:../views/admin.php");}
}

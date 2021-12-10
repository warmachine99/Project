<?php

require('../database/connection.php');

class Admin extends Connection{

    function login($email, $password){
		return $this->fetchOne("select * from Admin where Admin_Email='$email' and Password='$password'");
    }

    function addAthlete($athlete_id, $height, $weight, $doping, $person_img){
    return $this->query("insert into athlete (athlete_id, height, weight, doping, person_img) values ('$athlete_id', '$height', '$weight','$doping','$person_img')");
    }

    function addResult($judge_id, $event_type, $athlete_id, $medal_id, $position){
      return $this->query("insert into result (`judge_id`, `event_type`, `athlete_id`, `medal_id`, `position`) values ('$judge_id', '$event_type', '$athlete_id', '$medal_id', '$position')");
      }
}
    
?>
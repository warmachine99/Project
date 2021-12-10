<?php

require('../database/connection.php');

class Athlete extends Connection{

    function selectAllAthletes(){
    return $this->fetch("SELECT fname, lname, gender, country, DOB, event_type, doping, person_img, position from person 
        inner join athlete on person.person_id = athlete.athlete_id
        inner join result on person.person_id = result.athlete_id");
    }

    function selectAllSports(){
        return $this->fetch("SELECT sport_activity, event_type, event_img from sporting_event");
    }
}

?>
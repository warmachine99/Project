<?php

require('../database/connection.php');

class Sponsor extends Connection{

    function selectAllSponsors(){
        return $this->fetch("SELECT * from sponsor");
    }

    function selectOneSponsor($id){
        return $this->fetchOne("SELECT * from sponsor where sponsor_id='$id'");
    }

    function deleteSponsors($id){
        return $this->query("delete from sponsor where sponsor_id = '$id'");
    }


    function updateSponsor($id, $name, $email, $tel, $type){
        return $this->query("UPDATE `sponsor` SET `sponsor_name`='$name',`email`='$email',`telNo`='$tel',`sponsor_type`='$type' WHERE sponsor_id='$id'");
    }


    


}

?>
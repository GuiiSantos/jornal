<?php
class usuario extends model{

    public function getName(){

        $array = array();

        $sql = "SELECT * FROM usuarios";
        $sql = $this->conecxao->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchall();
        }


        return $array;
    }

 }

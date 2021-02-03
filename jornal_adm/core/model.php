<?php
class model {

    protected $conecxao;

    public function __construct() {
        global $config;

            $this->conecxao = new PDO("mysql:dbname=".$config["dbname"].";host=".$config["host"],$config["dbuser"], $config["dbpass"]);

    }
}

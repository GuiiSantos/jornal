<?php
require_once "environment.php";

global $config;

define("BASE_URL", "https://127.0.0.1/edsa-Jornal_Trabalho");

$config = array();

if (ENVIRONMENT == "development") {
    $config["dbname"] = "jornal";
    $config["host"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
}else {
    $config["dbname"] = "jornal";
    $config["host"] = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "";
}
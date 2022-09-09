<?php

$HOSTNAME = 'localhost';
$CONNECTION = 'mysql';
$DATABASE = 'mysql-base';
$USERNAME = 'root';
$PASSWORD = 'root';

$con = new mysqli($DATABASE, $USERNAME, $PASSWORD, $CONNECTION);

if(!$con) {
    echo "Connection fail!!";
}